<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use App\Support\Traits\Models\StatusChangeable;
use App\Support\Traits\Models\RequestSaver;
use App\Support\Traits\Models\CheckPermissionTrait;

use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\Models\Media;
use App\Support\Traits\Models\HasMediaTrait;
use App\Contracts\Models\HasPermissions;

class Admin extends Base\Authenticatable implements HasMedia, HasPermissions
{
    use Notifiable, StatusChangeable, RequestSaver, HasMediaTrait, CheckPermissionTrait;

    protected $mediaCollectionName = 'image';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'api_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $needsToSaveFromRequest = ['images', 'roles', 'new_password'];

    public function roles()
    {
        return $this->hasManyThrough(
            AdminRole::class,
            AdminRoleRelation::class,
            'admin_id',
            'id',
            'id',
            'admin_role_id'
        );
    }

    public function roleRelations()
    {
        return $this->hasMany(AdminRoleRelation::class, 'admin_id');
    }

    public function adminLog()
    {
        return $this->hasMany(AdminLog::class, 'admin_id');
    }

    /**
     * Задает преобразователи изображений.
     *
     * @param Media|null $media
     * @throws \Spatie\Image\Exceptions\InvalidManipulation
     */
    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('small')
            ->crop(Manipulations::CROP_CENTER, 400, 400)
            ->background('fff')
            ->withResponsiveImages()
            ->performOnCollections('image');

        $this->addMediaConversion('thumb')
            ->crop(Manipulations::CROP_CENTER, 128, 128)
            ->background('fff')
            ->withResponsiveImages()
            ->nonQueued()
            ->performOnCollections('image');

        $this->addMediaConversion('small')
            ->crop(Manipulations::CROP_CENTER, 400, 400)
            ->background('fff')
            ->withResponsiveImages()
            ->nonQueued()
            ->performOnCollections('temp');
    }

    public function avatar()
    {
        $image = $this->getMedia($this->mediaCollectionName)->first();

        if (! $image) {
            return '/img/placeholders/avatars/avatar.jpg';
        }

        $pathes = $image->getImagePathes();

        return $pathes['small']['srcset'];
    }

    public function _saveRoles($roles = [])
    {
        $this->roleRelations()->delete();

        foreach ($roles as $roleId) {
            $this->roleRelations()->save(new AdminRoleRelation([
                'admin_id' => $this->id,
                'admin_role_id' => $roleId
            ]));
        }
    }

    public function _saveNewPassword($newPassword = null)
    {
        if (! is_null($newPassword)) {
            $this->setAttribute('password', encodePassword($newPassword));
        }
    }
}

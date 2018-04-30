<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use App\Support\Traits\Models\StatusChangeable;
use App\Support\Traits\Models\RequestSaver;

use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\Models\Media;
use App\Support\Traits\Models\HasMediaTrait;

class Admin extends Base\Authenticatable implements HasMedia
{
    use Notifiable, StatusChangeable, RequestSaver, HasMediaTrait;

    protected $mediaCollectionName = 'image';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $needsToSaveFromRequest = ['images'];

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
<<<<<<< Updated upstream
=======

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

    public function getAvatar()
    {
        $image = $this->getMedia($this->mediaCollectionName)->first();

        if (! $image) {
            return '/img/placeholders/avatars/avatar.jpg';
        }

        $pathes = $image->getImagePathes();

        return $pathes['small']['srcset'];
    }
>>>>>>> Stashed changes
}

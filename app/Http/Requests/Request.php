<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{
    /**
     * Auth guard for the current controller.
     *
     * @var array
     */
    protected $guard;

    /**
     * User for the current request.
     *
     * @var array
     */
    protected $formRequest;

    /* Model for the current request.
     *
     * @var array
     */
    protected $model;

    protected $requestNamespace;

    /**
     * Constructor
     *
     * @return void
     * @author
     **/
    public function __construct()
    {
        // todo: разобраться с guard
        $this->guard = config('admin.api');
    }


    public function authorize()
    {
        return $this->authorizeAction($this->getAction());
    }

    protected function getAction()
    {
        $pathArray = $this->getPathArray();

        $lastSlug = $pathArray[count($pathArray) - 1];

        try {
            $id = $this->getId();
        }
        catch(\Exception $e) {
            $id = 0;
        }

        if ($lastSlug != $id) {
            return $lastSlug;
        }

        if ($this->isCreate() || $this->isStore()) {
            return 'create';
        }

        if ($this->isEdit()) {
            return 'edit';
        }

        if ($this->isUpdate()) {
            return 'update';
        }

        if ($this->isDelete()) {
            return 'delete';
        }

        return 'edit';
    }

    protected function authorizeAction($action)
    {
        $methodName = '_authorize' . ucfirst($action);

        if (method_exists($this, $methodName)) {
            return call_user_func([$this, $methodName]);
        }

        return $this->can($action);
    }

    /**
     * Возвращает полное название права.
     *
     * @param $action
     * @return string
     */
    protected function getPermissionFullName($action)
    {
        return $this->permissionsNamespace . '.' . $action;
    }

    /**
     * Получение пользователя из запроса.
     *
     * @return mixed
     */
    protected function getRequestUser()
    {
        return $this->user($this->guard);
    }

    /**
     * Check the process is approve.
     *
     * @return bool
     **/
    protected function can($action)
    {
        $user = $this->getRequestUser();

        return $user->hasPermission($this->getPermissionFullName($action)) || $user->can($action, $this->model);
    }

    /**
     * Check the process is verify.
     *
     * @return bool
     **/
    protected function isWorkflow()
    {

        if ($this->isMethod('PATCH') && $this->has('status')) {
            return true;
        }

        return false;

    }

    /**
     * Check the process is verify.
     *
     * @return bool
     **/
    protected function getStep()
    {

        if ($this->isMethod('PATCH') && $this->has('status')) {
            return true;
        }

        return false;

    }

    /**
     * Check the process is verify.
     *
     * @return bool
     **/
    protected function isCreate()
    {

        if ($this->is('*/create')) {
            return true;
        }

        return false;

    }

    /**
     * Check the process is store.
     *
     * @return bool
     **/
    protected function isStore()
    {

        if ($this->isMethod('POST')) {
            return true;
        }

        return false;
    }

    /**
     * Check the process is edit.
     *
     * @return bool
     **/
    protected function isEdit()
    {

        if (
            $this->is('*/edit')) {
            return true;
        }

        return false;

    }

    /**
     * Check the process is update.
     *
     * @return bool
     **/
    protected function isUpdate()
    {

        if ($this->isMethod('PUT') ||
            $this->isMethod('PATCH')) {
            return true;
        }

        return false;

    }

    /**
     * Check the process is verify.
     *
     * @return bool
     **/
    protected function isDelete()
    {

        if ($this->isMethod('DELETE')) {
            return true;
        }

        return false;
    }

    /**
     * Получение id текущей сущности.
     *
     * @return mixed
     * @throws \Exception
     */
    protected function getId()
    {
        $diff = $this->getRouteDiff();

        if (count($diff) !== 1) {
            throw new \Exception('Id не найден.');
        }

        return (int) array_pop($diff);
    }

    protected function getRoutePatternArray()
    {
        return explode('/', trim(\Route::getCurrentRoute()->uri, '/'));
    }

    protected function getPathArray()
    {
        return explode('/', trim($this->getPathinfo(), '/'));
    }

    protected function getRouteDiff()
    {
        return array_diff_assoc($this->getPathArray(), $this->getRoutePatternArray());
    }
}
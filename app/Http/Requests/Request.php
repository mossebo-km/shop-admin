<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request as IlluminateRequest;

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

    /**
     * Constructor
     *
     * @return void
     * @author
     **/
    public function __construct(IlluminateRequest $request)
    {
        $this->guard = config('auth.api');
        $this->formRequest = $request;
    }

    /**
     * Check the process is approve.
     *
     * @return bool
     **/
    protected function can($action)
    {
        return $this->formRequest->user($this->guard)->can($action, $this->model);
    }

    /**
     * Check the process is verify.
     *
     * @return bool
     **/
    protected function isWorkflow()
    {

        if ($this->formRequest->isMethod('PATCH') && $this->formRequest->has('status')) {
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

        if ($this->formRequest->isMethod('PATCH') && $this->formRequest->has('status')) {
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

        if ($this->formRequest->is('*/create')) {
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

        if ($this->formRequest->isMethod('POST')) {
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
            $this->formRequest->is('*/edit')) {
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

        if ($this->formRequest->isMethod('PUT') ||
            $this->formRequest->isMethod('PATCH')) {
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

        if ($this->formRequest->isMethod('DELETE')) {
            return true;
        }

        return false;

    }

    protected function getId()
    {
        $pathArray = explode('/', trim($this->formRequest->getPathinfo(), '/'));
        $patternArray = explode('/', trim(\Route::getCurrentRoute()->uri, '/'));

        $diff = array_diff_assoc($pathArray, $patternArray);

        if (count($diff) !== 1) {
            throw new \Exception('Id не найден.');
        }

        return array_pop($diff);
    }
}
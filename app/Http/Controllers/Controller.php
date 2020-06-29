<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $viewData;
    protected function setViewData($name, $value) {
        $this->viewData[$name] = $value;
    }

    public function view($view = null, $data = [], $mergeData = [])
    {
        $user = Auth::user();

        $this->setViewData('user', $user);

        $data = array_merge($data, $mergeData);

        return view($view, $data, $this->viewData);
    }
}

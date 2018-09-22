<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // this function will check the user have permission to do the work
    protected function checkPermission($permission)
    {
        abort_if(!Auth::user()->hasPermission($permission), 403);
    }
}

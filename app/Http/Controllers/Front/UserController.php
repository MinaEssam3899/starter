<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    public function ShowUserName()
    {
        return view('index');
    }

    public function getIndex()
    {
        $data=[];
        $data['id']=5;
        $data['name']='mirna';
        return view('welcome',$data);
    }

    public function Loginp()
    {
        return view('Login');
    }
}

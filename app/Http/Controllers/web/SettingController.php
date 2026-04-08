<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{


    public function index()
    {

             $settings=Setting::first();

        return view('settings.index',compact('settings'));
    }

}

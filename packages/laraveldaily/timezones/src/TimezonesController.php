<?php

namespace Laraveldaily\Timezones;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TimezonesController extends Controller
{

    public function index($timezone = null)
    {
    	$current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
              return view('timezones::time', compact('current_time'));
        //echo $time->toDateTimeString();
       // echo Carbon::now($timezone)->toDateTimeString();
    }

}

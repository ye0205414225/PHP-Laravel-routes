<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Session;
use App;
use View;

use Illuminate\Http\Request;

class TestController extends Controller
{


    public function testget($code,Request $request)
    {


        return '好極了,yes';
    }



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class crudapi extends Controller
{
    //
    function getData()
    {
        return["name"=>"admin","location"=>"chennai"];
    }
}

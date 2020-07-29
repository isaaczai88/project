<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //

    public function getIndex(){

        $data = [];
        $data['page_title'] = 'Dashboard88';


        return view('crud.dashboard',$data);


    }
}

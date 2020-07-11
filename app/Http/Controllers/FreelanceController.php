<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FreelanceController extends Controller
{
    public function getIndex(){
        return view('freelances.new');
    }
}

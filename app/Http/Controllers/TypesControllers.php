<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\invoice;

class TypesControllers extends Controller
{
    public function index(){
        $data = "Ballroom";
        return view('dance_types', ['data'=>$data]);
    }
}

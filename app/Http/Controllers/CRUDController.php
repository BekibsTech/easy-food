<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CRUDController extends Controller
{
    public function CRUD(){
        return view('telaCRUD');
    }
}

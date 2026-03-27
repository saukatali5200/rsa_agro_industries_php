<?php

namespace App\Http\Controllers\Adminpnlx;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view("adminpnlx.Category.index");
    }

    public function create(){
        return view("adminpnlx.Category.create");
    }

    public function edit(){
        return view("adminpnlx.Category.edit");
    }
}

<?php

namespace App\Http\Controllers\Online;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class PriceController extends Controller
{
    public function index() {
        return view('online.price.price');
    }
}

<?php

namespace Diako\EchoString\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EchoStringController extends Controller
{
    public function index()
    {
       return view('EchoString::index');
    }
}

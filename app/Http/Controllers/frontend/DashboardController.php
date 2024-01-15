<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Database\Query\IndexHint;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;

class DashboardController extends Controller
{

    public function index()
    {
        return view('admin.dashboard');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrow;
use App\Models\Schedule;

class DashboardController extends Controller
{
    
    public function index()
    {

        
        return view ('dashboard');
        
    }

    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $commentcount = Comment::count();
        $hadir = Comment::where ('kehadiran','hadir')->count();
        $tidakhadir = Comment::where ('kehadiran','tidak hadir')->count();
        $ragu = Comment::where ('kehadiran','ragu')->count();

        $comment = Comment::orderBy('id', 'desc')->paginate(10);
       
        return view ('home.index',[
            'comment' => $comment,
            'commentcount' => $commentcount,
            'hadir' => $hadir,
            'tidakhadir' => $tidakhadir,
            'ragu' => $ragu
    ]);
    }
    public function store(Request $request)
    {
       
    }
}

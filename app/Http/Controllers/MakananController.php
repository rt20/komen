<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use DB;

use Illuminate\Http\Request;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('makanans')
                ->where('makanans.waktu', 'pagi')
                ->paginate(10);
        $siang = DB::table('makanans')
                ->where('makanans.waktu', 'siang')
                ->paginate(10);
        $malam = DB::table('makanans')
                ->where('makanans.waktu', 'malam')
                ->paginate(10);
        return view('makanans.index', compact('data','siang','malam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('makanans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        #dd($data);
            Makanan::create($data);
        
     
        # Tampilin flash message
        flash('Selamat data telah berhasil ditambahkan')->success();
        
        return redirect()->route('makanans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Makanan $makanan)
    {
        $makanan->delete();
        flash('Data berhasil dihapus')->error();
        return redirect()->route('makanans.index');
    }
}

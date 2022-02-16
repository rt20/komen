<?php

namespace App\Http\Controllers;

use App\Models\Sakit;
use App\Models\User;
use Illuminate\Http\Request;

use DB;

class SakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = DB::table('sakits')
                ->paginate(10);

        return view('sakits.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('sakits.create', compact('users'));
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
        
            Sakit::create($data);
        
     
        # Tampilin flash message
        flash('Selamat data telah berhasil ditambahkan')->success();
        
        return redirect()->route('sakits.index');
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
    public function edit(Sakit $sakit)
    {
        $users = User::all();

        return view('sakits.edit',[
            'sakit' => $sakit,
            'user' => $users
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sakit $sakit)
    {
        $row = $request->all();

        $sakit->update($row);

        return redirect()->route('sakits.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sakit $sakit)
    { 
      $sakit->delete();
        flash('Data berhasil dihapus')->error();
        return redirect()->route('sakits.index');
    }
}

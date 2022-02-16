<?php

namespace App\Http\Controllers;

use App\Models\Pdlt;
use App\Models\User;

use Illuminate\Http\Request;

use DB;

class PdltController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('pdlts')
                ->paginate(10);

        return view('pdlts.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('pdlts.create', compact('users'));
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
        
            Pdlt::create($data);
        
     
        # Tampilin flash message
        flash('Selamat data telah berhasil ditambahkan')->success();
        
        return redirect()->route('pdlts.index');
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
    public function edit(Pdlt $pdlt)
    {
        $users = User::all();

        return view('pdlts.edit',[
            'pdlt' => $pdlt,
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
    public function update(Request $request, Pdlt $pdlt)
    {
        $row = $request->all();

        $pdlt->update($row);

        return redirect()->route('pdlts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pdlt $pdlt)
    {
        $pdlt->delete();
        flash('Data berhasil dihapus')->error();
        return redirect()->route('pdlts.index');
    }
}

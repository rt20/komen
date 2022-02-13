<?php

namespace App\Http\Controllers;

use App\Models\Dinas;
use App\Models\User;
use DB;

use Illuminate\Http\Request;

class DinasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skadron1 = DB::table('users')
                ->join('dinas','users.id','=','dinas.user_id')
                ->where('dinas.skadron', 'skadroni')
                ->paginate(10);
        $skadron2 = DB::table('users')
                ->join('dinas','users.id','=','dinas.user_id')
                ->where('dinas.skadron', 'skadronii')
                ->paginate(10);
        $skadron3 = DB::table('users')
                ->join('dinas','users.id','=','dinas.user_id')
                ->where('dinas.skadron', 'skadroniii')
                ->paginate(10);
        $skadron4 = DB::table('users')
                ->join('dinas','users.id','=','dinas.user_id')
                ->where('dinas.skadron', 'skadroniv')
                ->paginate(10);

            return view ('dinas.index', compact('skadron1','skadron2','skadron3','skadron4'
        ));

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('dinas.create', compact('users'));
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
        
            Dinas::create($data);
        
     
        # Tampilin flash message
        flash('Selamat data telah berhasil ditambahkan')->success();
        
        return redirect()->route('dinas.index');
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
    public function destroy($id)
    {
        $dinas = Dinas::find($id);
       
        $dinas->delete();
        flash('Data berhasil dihapus')->error();
        return redirect()->route('dinas.index');
    }
}

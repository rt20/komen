<?php

namespace App\Http\Controllers;
 
use App\Models\Apel;
use DB;

use Illuminate\Http\Request;

class ApelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagi1 = DB::table('apels')
                ->where('apels.nama_skadron', 'skadroni')
                ->where('apels.waktu', 'pagi')
                ->paginate(10);
        $pagi2 = DB::table('apels')
                ->where('apels.nama_skadron', 'skadronii')
                ->where('apels.waktu', 'pagi')
                ->paginate(10);
        $pagi3 = DB::table('apels')
                ->where('apels.nama_skadron', 'skadroniii')
                ->where('apels.waktu', 'pagi')
                ->paginate(10);
        $pagi4 = DB::table('apels')
                ->where('apels.nama_skadron', 'skadroniv')
                ->where('apels.waktu', 'pagi')
                ->paginate(10);
        $pagi5 = DB::table('apels')
                ->where('apels.nama_skadron', 'wingkorps')
                ->where('apels.waktu', 'pagi')
                ->paginate(10);

        $siang1 = DB::table('apels')
                ->where('apels.nama_skadron', 'skadroni')
                ->where('apels.waktu', 'siang')
                ->paginate(10);
        $siang2 = DB::table('apels')
                ->where('apels.nama_skadron', 'skadronii')
                ->where('apels.waktu', 'siang')
                ->paginate(10);
        $siang3 = DB::table('apels')
                ->where('apels.nama_skadron', 'skadroniii')
                ->where('apels.waktu', 'siang')
                ->paginate(10);
        $siang4 = DB::table('apels')
                ->where('apels.nama_skadron', 'skadroniv')
                ->where('apels.waktu', 'siang')
                ->paginate(10);
        $siang5 = DB::table('apels')
                ->where('apels.nama_skadron', 'wingkorps')
                ->where('apels.waktu', 'siang')
                ->paginate(10);

        $malam1 = DB::table('apels')
                ->where('apels.nama_skadron', 'skadroni')
                ->where('apels.waktu', 'malam')
                ->paginate(10);
        $malam2 = DB::table('apels')
                ->where('apels.nama_skadron', 'skadronii')
                ->where('apels.waktu', 'malam')
                ->paginate(10);
        $malam3 = DB::table('apels')
                ->where('apels.nama_skadron', 'skadroniii')
                ->where('apels.waktu', 'malam')
                ->paginate(10);
        $malam4 = DB::table('apels')
                ->where('apels.nama_skadron', 'skadroniv')
                ->where('apels.waktu', 'malam')
                ->paginate(10);
        $malam5 = DB::table('apels')
                ->where('apels.nama_skadron', 'wingkorps')
                ->where('apels.waktu', 'malam')
                ->paginate(10);

        return view ('apels.index', compact('pagi1','pagi2','pagi3','pagi4','pagi5',
                        'siang1','siang2','siang3','siang4','siang5',
                        'malam1','malam2','malam3','malam4','malam5'
    ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apels.create');
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
        
            Apel::create($data);
        
     
        # Tampilin flash message
        flash('Selamat data telah berhasil ditambahkan')->success();
        
        return redirect()->route('apels.index');
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
    public function destroy(Apel $apel)
    {
       
        $apel->delete();
        flash('Data berhasil dihapus')->error();
        return redirect()->route('apels.index');
    }
}

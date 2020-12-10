<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Midfilder;

class MidfildersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $midfilder = Midfilder::all();
        return view('team.Midfilder.dashboard',compact('midfilder'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('team.Midfilder.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pemain' => 'required',
            'nomer_pemain' => 'required',
            'penampilan' => 'required',
            'goal' => 'required',
            'assist' => 'required',
            'position' => 'required',
            'passing' => 'required',
            'crossing' => 'required',
            'gambar' => 'required'
        ]);

        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();

        $midfilder = Midfilder::create([
            'nama_pemain' => $request->nama_pemain,
            'nomer_pemain' => $request->nomer_pemain,
            'penampilan' => $request->penampilan,
            'goal' => $request->goal,
            'assist' => $request->assist,
            'position' => $request->position,
            'passing' => $request->passing,
            'crossing' => $request->crossing,
            'gambar' => 'uploads/news/'.$new_gambar,

        ]);

        $gambar->move('uploads/news/', $new_gambar);
        return redirect('/dashboardmidfilder')->with('success','Data Midfilder Berhasil Ditambahkan');
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
        $midfilder = Midfilder::findorfail($id);
        return view('team.Midfilder.edit',compact('midfilder'));
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
        $request->validate([
            'nama_pemain' => 'required',
            'nomer_pemain' => 'required',
            'penampilan' => 'required',
            'goal' => 'required',
            'assist' => 'required',
            'position' => 'required',
            'passing' => 'required',
            'crossing' => 'required',
            'gambar' => 'required'
        ]);

        $midfilder = Midfilder::findorfail($id);

        if($request->has('gambar')){
            $gambar = $request->gambar;
            $new_gambar = time().$gambar->getClientOriginalName();
            $gambar->move('uploads/news/', $new_gambar);

            $midfilder_data = [
                'nama_pemain' => $request->nama_pemain,
                'nomer_pemain' => $request->nomer_pemain,
                'penampilan' => $request->penampilan,
                'goal' => $request->goal,
                'assist' => $request->assist,
                'position' => $request->position,
                'passing' => $request->passing,
                'crossing' => $request->crossing,
                'gambar' => 'uploads/news/'.$new_gambar

            ];

        }else{
            $midfilder_data = [
                'nama_pemain' => $request->nama_pemain,
                'nomer_pemain' => $request->nomer_pemain,
                'penampilan' => $request->penampilan,
                'goal' => $request->goal,
                'assist' => $request->assist,
                'position' => $request->position,
                'passing' => $request->passing,
                'crossing' => $request->crossing

            ];
        }
        $midfilder->update($midfilder_data);
        return redirect('/dashboardmidfilder')->with('success','Data Midfilder Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $midfilder = Midfilder::findorfail($id);
        $midfilder->delete();

        return redirect('/dashboardmidfilder')->with('danger','Data Midfilder Berhasil Dihapus');
    }
}

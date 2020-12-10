<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kiper;

class KipersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kiper = Kiper::all();
        return view('team.Kiper.dashboard',compact('kiper'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('team.Kiper.create');
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
            'saves' => 'required',
            'clearances' => 'required',
            'position' => 'required',
            'catches' => 'required',
            'goal_conceded' => 'required',
            'gambar' => 'required'
        ]);

        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();

        $kiper = Kiper::create([
            'nama_pemain' => $request->nama_pemain,
            'nomer_pemain' => $request->nomer_pemain,
            'penampilan' => $request->penampilan,
            'saves' => $request->saves,
            'clearances' => $request->clearances,
            'position' => $request->position,
            'catches' => $request->catches,
            'goal_conceded' => $request->goal_conceded,
            'gambar' => 'uploads/news/'.$new_gambar,

        ]);

        $gambar->move('uploads/news/', $new_gambar);
        return redirect('/dashboardkiper')->with('success','Data Keeper Berhasil Ditambahkan');
    
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
        $kiper = Kiper::findorfail($id);
        return view('team.Kiper.edit',compact('kiper'));
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
            'saves' => 'required',
            'clearances' => 'required',
            'position' => 'required',
            'catches' => 'required',
            'goal_conceded' => 'required',
            'gambar' => 'required'
        ]);

        $kiper = Kiper::findorfail($id);

        if($request->has('gambar')){
            $gambar = $request->gambar;
            $new_gambar = time().$gambar->getClientOriginalName();
            $gambar->move('uploads/news/', $new_gambar);

            $kiper_data = [
                'nama_pemain' => $request->nama_pemain,
                'nomer_pemain' => $request->nomer_pemain,
                'penampilan' => $request->penampilan,
                'saves' => $request->saves,
                'clearances' => $request->clearances,
                'position' => $request->position,
                'catches' => $request->catches,
                'goal_conceded' => $request->goal_conceded,
                'gambar' => 'uploads/news/'.$new_gambar

            ];

        }else{
            $kiper_data = [
                'nama_pemain' => $request->nama_pemain,
                'nomer_pemain' => $request->nomer_pemain,
                'penampilan' => $request->penampilan,
                'saves' => $request->saves,
                'clearances' => $request->clearances,
                'position' => $request->position,
                'catches' => $request->catches,
                'goal_conceded' => $request->goal_conceded,

            ];
        }
        $kiper->update($kiper_data);
        return redirect('/dashboardkiper')->with('success','Data Keeper Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kiper = Kiper::findorfail($id);
        $kiper->delete();

        return redirect('/dashboardkiper')->with('danger','Data Keeper Berhasil Dihapus');
    }
}

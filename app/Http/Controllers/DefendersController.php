<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Defender;

class DefendersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $defender = Defender::all();
        return view('team.Defender.dashboard',compact('defender'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('team.Defender.create');
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
            'tackles' => 'required',
            'interceptions' => 'required',
            'gambar' => 'required'
        ]);

        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();

        $defender = Defender::create([
            'nama_pemain' => $request->nama_pemain,
            'nomer_pemain' => $request->nomer_pemain,
            'penampilan' => $request->penampilan,
            'goal' => $request->goal,
            'assist' => $request->assist,
            'position' => $request->position,
            'tackles' => $request->tackles,
            'interceptions' => $request->interceptions,
            'gambar' => 'uploads/news/'.$new_gambar,

        ]);

        $gambar->move('uploads/news/', $new_gambar);
        return redirect('/dashboarddefender')->with('success','Data Defender Berhasil Ditambahkan');
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
        $defender = Defender::findorfail($id);
        return view('team.Defender.edit',compact('defender'));
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
            'tackles' => 'required',
            'interceptions' => 'required',
            'gambar' => 'required'
        ]);

        $defender = Defender::findorfail($id);

        if($request->has('gambar')){
            $gambar = $request->gambar;
            $new_gambar = time().$gambar->getClientOriginalName();
            $gambar->move('uploads/news/', $new_gambar);

            $defender_data = [
                'nama_pemain' => $request->nama_pemain,
                'nomer_pemain' => $request->nomer_pemain,
                'penampilan' => $request->penampilan,
                'goal' => $request->goal,
                'assist' => $request->assist,
                'position' => $request->position,
                'tackles' => $request->tackles,
                'interceptions' => $request->interceptions,
                'gambar' => 'uploads/news/'.$new_gambar

            ];

        }else{
            $defender_data = [
                'nama_pemain' => $request->nama_pemain,
                'nomer_pemain' => $request->nomer_pemain,
                'penampilan' => $request->penampilan,
                'goal' => $request->goal,
                'assist' => $request->assist,
                'position' => $request->position,
                'shot' => $request->shot,
                'shot_ontarget' => $request->shot_ontarget

            ];
        }
        $defender->update($defender_data);
        return redirect('/dashboarddefender')->with('success','Data Defender Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $defender = Defender::findorfail($id);
        $defender->delete();

        return redirect('/dashboarddefender')->with('danger','Data Defender Berhasil Dihapus');
    }
}

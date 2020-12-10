<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Player;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $player = Player::all();
        return view('team.Forward.dashboard',compact('player'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('team.Forward.create');
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
            'shot' => 'required',
            'shot_ontarget' => 'required',
            'gambar' => 'required'
        ]);

        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();

        $player = Player::create([
            'nama_pemain' => $request->nama_pemain,
            'nomer_pemain' => $request->nomer_pemain,
            'penampilan' => $request->penampilan,
            'goal' => $request->goal,
            'assist' => $request->assist,
            'position' => $request->position,
            'shot' => $request->shot,
            'shot_ontarget' => $request->shot_ontarget,
            'gambar' => 'uploads/news/'.$new_gambar,

        ]);

        $gambar->move('uploads/news/', $new_gambar);
        return redirect('/dashboardplayer')->with('success','Data Forward Berhasil Ditambahkan');
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
        $player = Player::findorfail($id);
        return view('team.Forward.edit',compact('player'));
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
            'shot' => 'required',
            'shot_ontarget' => 'required',
            'gambar' => 'required'
        ]);

        $player = Player::findorfail($id);

        if($request->has('gambar')){
            $gambar = $request->gambar;
            $new_gambar = time().$gambar->getClientOriginalName();
            $gambar->move('uploads/news/', $new_gambar);

            $player_data = [
                'nama_pemain' => $request->nama_pemain,
                'nomer_pemain' => $request->nomer_pemain,
                'penampilan' => $request->penampilan,
                'goal' => $request->goal,
                'assist' => $request->assist,
                'position' => $request->position,
                'shot' => $request->shot,
                'shot_ontarget' => $request->shot_ontarget,
                'gambar' => 'uploads/news/'.$new_gambar

            ];

        }else{
            $player_data = [
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
        $player->update($player_data);
        return redirect('/dashboardplayer')->with('success','Data Forward Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player = Player::findorfail($id);
        $player->delete();

        return redirect('/dashboardplayer')->with('danger','Data Forward Berhasil Dihapus');
    }
}

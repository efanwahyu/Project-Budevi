<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Game;
class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $game = Game::all();
        return view('match.dashboard', compact('game'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('match.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'team_musuh' => 'required',
            'negara' => 'required',
            'liga' => 'required',
            'logo' => 'required',
            'date' => 'required',
            'status' => 'required'
        ]);

        $logo = $request->logo;
        $new_logo = time().$logo->getClientOriginalName();

        $game = Game::create([
            'team_musuh' => $request->team_musuh,
            'negara' => $request->negara,
            'liga' => $request->liga,
            'score' => $request->score,
            'logo' => 'uploads/news/'.$new_logo,
            'date' => $request->date,
            'status' => $request->status
        ]);

        $logo->move('uploads/news/', $new_logo);
        return redirect('/dashboardgames')->with('success','Data berhasil ditambah');

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
        $game = Game::findorfail($id);
        return view('match.edit',compact('game'));
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
        $this->validate($request, [
            'team_musuh' => 'required',
            'negara' => 'required',
            'liga' => 'required',
            'logo' => 'required',
            'date' => 'required',
            'status' => 'required'
        ]);

        $game = Game::findorfail($id);

        if($request->has('logo')){
            $logo = $request->logo;
            $new_logo = time().$logo->getClientOriginalName();
            $logo->move('uploads/news/', $new_logo);

            $game_data = [
                'team_musuh' => $request->team_musuh,
                'negara' => $request->negara,
                'liga' => $request->liga,
                'score' => $request->score,
                'logo' => 'uploads/news/'.$new_logo,
                'date' => $request->date,
                'status' => $request->status

            ];

        }else{
            $game_data = [
                'team_musuh' => $request->team_musuh,
                'negara' => $request->negara,
                'liga' => $request->liga,
                'score' => $request->score,
                'date' => $request->date,
                'status' => $request->status

            ];
        }
        $game->update($game_data);
        return redirect('/dashboardgames')->with('success','Data berhasil update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $game = Game::findorfail($id);
        $game->delete();

        return redirect('/dashboardgames')->with('danger','Data berhasil apus');
    }
}

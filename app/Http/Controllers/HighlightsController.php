<?php

namespace App\Http\Controllers;

use App\Highlight;
use Illuminate\Http\Request;

class HighlightsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $high = Highlight::all();
        return view('highlight.dashboard', compact('high'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('highlight.create');
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
            'judul' => 'required',
            'isi_highlight' => 'required',
            'link_video' => 'required',
            'gambar' => 'required'
        ]);

        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();

        $highlight = Highlight::create([
            'judul' => $request->judul,
            'isi_highlight' => $request->isi_highlight,
            'link_video' => $request->link_video,
            'gambar' => 'uploads/news/'.$new_gambar
        ]);

        $gambar->move('uploads/news/', $new_gambar);
        return redirect('/dashboardhighlight')->with('success','Data berhasil ditambah');
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
        $high = Highlight::findorfail($id);
        return view('highlight.edit', compact('high'));
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
            'judul' => 'required',
            'isi_highlight' => 'required',
            'link_video' => 'required',
            'gambar' => 'required'
        ]);

        $high = Highlight::findorfail($id);

        if($request->has('gambar')){
            $gambar = $request->gambar;
            $new_gambar = time().$gambar->getClientOriginalName();
            $gambar->move('uploads/news/', $new_gambar);

            $high_data = [
                'judul' => $request->judul,
                'isi_highlight' => $request->isi_highlight,
                'link_video' => $request->link_video,
                'gambar' => 'uploads/news/'.$new_gambar
            ];

        }else{
            $high_data = [
                'judul' => $request->judul,
                'isi_highlight' => $request->isi_highlight,
                'link_video' => $request->link_video
            ];
        }

        $high->update($high_data);
        return redirect('/dashboardhighlight')->with('success','Data berhasil update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $high = Highlight::findorfail($id);
        $high->delete();

        return redirect('/dashboardhighlight')->with('danger','Data berhasil Hapus');
    }
}

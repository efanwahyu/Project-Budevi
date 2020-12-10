<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use App\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('news.dashboard', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
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
            'isi_berita' => 'required',
            'gambar' => 'required'
        ]);

        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();

        $news = News::create([
            'judul' => $request->judul,
            'isi_berita' => $request->isi_berita,
            'gambar' => 'uploads/news/'.$new_gambar
        ]);

        $gambar->move('uploads/news/', $new_gambar);
        return redirect('/dashboardnews')->with('success','Data berhasil ditambah');

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
        $news = News::findorfail($id);
        return view('news.edit', compact('news'));
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
            'isi_berita' => 'required',
            'gambar' => 'required'
        ]);

        $news = News::findorfail($id);

        if($request->has('gambar')){
            $gambar = $request->gambar;
            $new_gambar = time().$gambar->getClientOriginalName();
            $gambar->move('uploads/news/', $new_gambar);

            $news_data = [
                'judul' => $request->judul,
                'isi_berita' => $request->isi_berita,
                'gambar' => 'uploads/news/'.$new_gambar
            ];

        }else{
            $news_data = [
                'judul' => $request->judul,
                'isi_berita' => $request->isi_berita
            ];
        }
        
        $news->update($news_data);
        return redirect('/dashboardnews')->with('success','Data berhasil update');






    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findorfail($id);
        $news->delete();

        return redirect('/dashboardnews')->with('danger','Data berhasil apus');
    }
}

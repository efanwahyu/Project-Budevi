<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\News;
use App\Game;
use App\Player;
use App\Kiper;
use App\Midfilder;
use App\Defender;

class PagesController extends Controller
{
    //Home
    public function home() {
        $news = News::latest()->paginate(3);
        return view('home.index', compact('news'));
    }

    //Matches
    public function match() {
        $gamer = Game::all();
        return view('match.index', compact('gamer'));
    }

    //Team atau Players
    public function team() {
        $kiper = Kiper::get();
        $player = Player::get();
        $midfilder = Midfilder::get();
        $defender = Defender::get();
        return view('team.index', ['kiper' =>$kiper, 'player' => $player, 'midfilder' => $midfilder, 'defender' => $defender]);
        
    }

    //Berita
    public function news() {
        $news = News::latest()->paginate(3);
        return view('news.index', compact('news'));
    }
    public function readberita($id)
    {
        
        $news = News::where('id', $id)->get();
        return view('news.isi_berita', compact('news'));
    }

    //About
    public function about() {
        return view('about.index');
    }

    //dashboard admin
    public function dashboard() {
        return view('layouts.masteradmin');
    }
}

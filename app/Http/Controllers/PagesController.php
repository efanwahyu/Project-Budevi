<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\News;
use App\Game;
use App\Player;
use App\Kiper;
use App\Midfilder;
use App\Defender;
use App\Highlight;

class PagesController extends Controller
{
    //Home
    public function home() {
        $news = News::latest()->paginate(3);
        $gamer = Game::latest()->paginate(3);
        $lastgame = Game::latest()->paginate(1);
        $highlight = Highlight::latest()->paginate(10);
        return view('home.index', compact('news','gamer','lastgame','highlight'));
        // return view('home.index', compact('gamer'));
    }

    //Matches
    public function match() {
        $gamer = Game::latest()->paginate(5);
        return view('match.index', compact('gamer'));
    }

    //Buat Highlights
    public function highlight() {
        $highlight = Highlight::latest()->paginate(9);
        return view('highlight.index', compact('highlight'));
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
        $news = News::latest()->paginate(9);
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
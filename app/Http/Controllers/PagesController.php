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
    public function home() {
        $news = News::all();
        return view('home.index', compact('news'));
    }


    public function match() {
        $gamer = Game::all();
        return view('match.index', compact('gamer'));
    }

    public function team() {
        $kiper = Kiper::get();
        $player = Player::get();
        $midfilder = Midfilder::get();
        $defender = Defender::get();
        return view('team.index', ['kiper' =>$kiper, 'player' => $player, 'midfilder' => $midfilder, 'defender' => $defender]);
        
    }

    public function news() {
        $news = News::latest()->paginate(3);
        return view('news.index', compact('news'));
    }

    public function about() {
        return view('about.index');
    }

    public function dashboard() {
        return view('layouts.masteradmin');
    }
}

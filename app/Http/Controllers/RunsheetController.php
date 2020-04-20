<?php

namespace App\Http\Controllers;


use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use App\Session;
use App\SessionLabel;
use App\Event;
use App\Season;
use Illuminate\Http\Request;

/**
 * Class ManageController
 * @package App\Http\Controllers
 */
class RunsheetController extends Controller {

    public function index(Request $req) {
        return view('runsheet', [
            'session' => Session::all(),
            'sessionLabel' => SessionLabel::all(),
            'events' => Event::all(),
            'seasons' => Season::all(),
        ]);
    }

    public function getEvent(Request $req) {
    }

    public function getSeason(Request $req) {
        $season = $req->input('season');
        $id = Season::where('Season', $season)->first();
        $eventseason = Event::where('Season_ID', $id->Season_ID)->get();
        return json_encode([
            'season' => $season,
            'season_id' => $id->Season_ID,
            'event' => $eventseason,
        ]);
    }
}
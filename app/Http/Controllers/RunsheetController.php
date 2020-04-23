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
    var $season;

    public function index(Request $req) {
        return view('runsheet', [
            'session' => Session::all(),
            'sessionLabel' => SessionLabel::all(),
            'events' => Event::all(),
            'seasons' => Season::all(),
        ]);
    }

    public function getEvent(Request $req) {
        $session = [];
        $event = $req->input("event");
        $seasonid = Season::where('Season', session()->get('season'))->first();
        $eventid = Event::select('*')
            ->where('Event', '=', $event)
            ->where('Season_ID', '=', $seasonid->Season_ID)
            ->first();
        $sessionid = Session::where('Event_ID', $eventid->Event_ID)->get();
        foreach ($sessionid as $sess) {
            array_push($session, SessionLabel::where('Session_ID', $sess->SessionLabel_ID)->first());
        }
        return json_encode([
            'sessionName' => $session
        ]);
    }

    public function getSeason(Request $req) {
        $this->season = $req->input('season');
        session(['season' => $this->season]);
        $id = Season::where('Season', $this->season )->first();
        $eventseason = Event::where('Season_ID', $id->Season_ID)->get();
        return json_encode([
            'season' => $this->season ,
            'season_id' => $id->Season_ID,
            'event' => $eventseason,
        ]);
    }
}
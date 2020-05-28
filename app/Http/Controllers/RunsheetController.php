<?php

namespace App\Http\Controllers;


use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use App\Session;
use App\SessionLabel;
use App\Event;
use App\Season;
use App\Run;
use App\Laps;
use App\Drivers;
use Doctrine\DBAL\Driver\DrizzlePDOMySql\Driver;
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

    public function getDriver(Request $req) {
        $driver = $req->input("driver");
        $driverok = Drivers::where('Name', $driver)->first();
        session(['driver' => $driverok]);
    }

    public function getSession(Request $req) {
        $lapsarray = [];
        $lapnb = [];
        $i = 0;
        $session = $req->input('session');
        $sessionlabelid = SessionLabel::where('Name', $session)->first();
        $sessionid = Session::select('*')
            ->where('SessionLabel_ID', '=', $sessionlabelid->Session_ID)
            ->where('Event_ID', '=', session()->get('event')->Event_ID)
            ->first();
        $runarray = Run::select('*')
            ->where('Session_ID', '=', $sessionid->Session_ID)
            ->where('Driver_ID', '=', session()->get('driver')->Driver_ID)
            ->get();
        foreach($runarray as $run) {
            array_push($lapsarray, Laps::select('*')
                ->where('Run_ID', '=', $run->Run_ID)
                ->get());
            array_push($lapnb, $i);
            $i++;
            }
        return json_encode([
            'laps' => $lapnb,
            'session' => $sessionid,
            'runs' => $runarray,
            'view' => view('runsheet_list')
                ->with('runs', $runarray)
                ->with('laps', $lapsarray)
                ->with('lapnb', $lapnb)
                ->render(),
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
        session(['event' => $eventid]);
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
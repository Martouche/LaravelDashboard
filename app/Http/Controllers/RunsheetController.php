<?php

namespace App\Http\Controllers;


use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use App\Session;
use App\SessionLabel;
use App\Event;
use Illuminate\Http\Request;

/**
 * Class ManageController
 * @package App\Http\Controllers
 */
class RunsheetController extends Controller {

    public function index() {
        return view('runsheet', [
            'session' => Session::all(),
            'sessionLabel' => SessionLabel::all(),
            'events' => Event::all(),
        ]);
    }

    public function getEvent(Request $req) {
        $name = $req->input('name');
        dd($name);
    }
}
<?php

namespace App\Http\Controllers;


use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

/**
 * Class ManageController
 * @package App\Http\Controllers
 */
class LapsController extends Controller {

    /**
     * Return list of available games
     * @return Factory|View
     */
    public function index() {
        return view('runsheet');
    }
}
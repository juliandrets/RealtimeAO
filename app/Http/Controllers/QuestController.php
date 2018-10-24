<?php

namespace App\Http\Controllers;

use App\Item;
use App\User;
use Auth;
use Illuminate\Http\Request;

class QuestController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('quests');
    }
}

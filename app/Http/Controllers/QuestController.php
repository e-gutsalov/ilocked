<?php

namespace App\Http\Controllers;

use App\Quest;

class QuestController extends Controller
{
	public function index()
	{
	    $quests = Quest::all();
        return view('home', ['quests' => $quests]);
    }

    public function quest($id)
    {
        $quests = Quest::all()->where('id', $id);
        return view('quest', ['quests' => $quests]);
    }
}

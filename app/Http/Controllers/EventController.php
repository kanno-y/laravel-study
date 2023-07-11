<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EventController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    // 登録画面表示用
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // 
    public function store(Request $request)
    {
        Log::debug(message: 'イベント名:'. $request->get(key: 'title'));
        return to_route('events.create');
    }

}

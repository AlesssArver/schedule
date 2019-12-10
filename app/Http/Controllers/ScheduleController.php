<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        return Schedule::latest()->get();
    }

    public function store()
    {
        return  Schedule::create([
            'user_id' => auth()->id(),
            'title' => request('title'),
            'time'  => request('time')
        ]);
    }

    public function edit(Request $request, $id)
    {
        dd($request);
        $schedule = Schedule::findOrFail($id);
        $schedule = response()->json([
            'title' => $schedule->title,
            'time' => $schedule->time
        ]);
        $schedule->save();
    }

    public function destroy($id)
    {
        return Schedule::findOrFail($id)->delete();
    }

}

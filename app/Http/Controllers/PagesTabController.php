<?php

namespace App\Http\Controllers;

use App\Schedule;
use Illuminate\Http\Request;

class PagesListController extends Controller
{

    public function index()
    {
        $schedules = Schedule::all();
        return view('schedules.show', compact('schedules'));
    }

    public function create()
    {
        return view('schedules.show');
    }

    public function store()
    {
        Schedule::create(request()->validate([
          'title' => 'required',
          'time'  => 'required'
        ]));

        return redirect('/schedules');
    }

    public function edit($id)
    {
      $schedule = Schedule::findOrFail($id);

      return view('schedules.show', compact('schedule'));

      return redirect('/schedules');
    }

    public function update(Schedule $schedule)
    {
      $schedule->title = request('title');

      $schedule->save();

      return redirect('/schedules');
    }

    public function destroy($id)
    {
      Schedule::find($id)->delete();

      return redirect('/schedules');
    }

}

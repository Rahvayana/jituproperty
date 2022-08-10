<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Http\Requests\StoreScheduleRequest;
use App\Http\Requests\UpdateScheduleRequest;
use App\Models\Cinema;
use App\Models\Film;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules=Schedule::with('film')->get();
        
        return view('schedule.index',['schedules'=>$schedules]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $films=Film::all();
        $cinemas=Cinema::all();
        return view('schedule.create',['films'=>$films,'cinemas'=>$cinemas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreScheduleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreScheduleRequest $request)
    {
        Schedule::create([
            'code'=>$this->getFullScheduleCode($request),
            'film_id'=>$request->film,
            'cinema_id'=>$request->cinema,
            'date_time'=>$request->date_time,
            'chair'=>$request->chair,
        ]);
        return redirect()->route('schedule.index')->with('success','Congratulations, Jadwal success created!');
    }

    public function getCinemaCode($id)
    {
        return Cinema::find($id)->code;
    }

    public function getFilmCode($id)
    {
        return strtoupper(Film::find($id)->code.sprintf('%03d', Film::find($id)->id));
    }

    public function getFullScheduleCode($request)
    {
        return $this->getCinemaCode($request->cinema).date('dmYhi',strtotime($request->datetime)).$this->getFilmCode($request->film);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateScheduleRequest  $request
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateScheduleRequest $request, Schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        //
    }
}

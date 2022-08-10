<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;
use App\Models\Schedule;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations=Reservation::with('schedule','schedule.film')->get();
        
        return view('reservation.index',['reservations'=>$reservations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schedules=Schedule::with('film')->get();
        
        return view('reservation.create',['schedules'=>$schedules]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReservationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReservationRequest $request)
    {
        return $this->getBookedSeats($request)? $this->insertReservation($request) :  redirect()->back()->with('error','Error, Quota Exceed!');

    }

    public function insertReservation($request)
    {
        Reservation::create([
            'code'=>$this->getScheduleCode($request),
            'schedule_id'=>$request->schedule,
            'chair'=>$request->chair
        ]);

        return redirect()->route('resrevation.index')->with('success','Congratulations, Reservasi success added!');
    }

    public function getBookedSeats($request):bool
    {
        $schedule_code=Schedule::with('film')->find($request->schedule);
        return $schedule_code->chair>=Reservation::where('code',$schedule_code->code)->get()->sum('chair');
    }

    public function getScheduleCode($request)
    {
        return Schedule::find($request->schedule)->code;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReservationRequest  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReservationRequest $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}

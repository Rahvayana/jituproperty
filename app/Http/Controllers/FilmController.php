<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFilmRequest;
use App\Models\Film;
use App\Http\Requests\UpdateFilmRequest;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films=Film::all();
        return view('film.index',['films'=>$films]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('film.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFilmRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFilmRequest $request)
    {
        Film::create([
            'code'=>$this->isStringOrWord($request->title),
            'title'=>$request->title,
            'date'=>$request->date,
            'synopsis'=>$request->synopsis,
        ]);

        return redirect()->route('film.index')->with('success','Congratulations, Bioskop success added!');
    }

    public function getLetterCount($letter): int
    {
        return count(explode(' ',$letter));
    }

    public function isStringOrWord($letter)
    {
        return $this->getLetterCount($letter)>1 ? $this->getVowelFromString($letter) : $this->getLetterCodeFromWord($letter);
    }

    public function getVowelFromString($letter)
    {
        foreach (explode(' ',$letter) as $word) {
            $vowel_word[] = preg_replace('#[aeiou\s]+#i', '', strtolower($word));
        }
        return $this->getLetterCodeFromString($vowel_word);
    }

    public function getLetterCodeFromWord($letter)
    {
        $vowel_word = preg_replace('#[aeiou\s]+#i', '', strtolower($letter));
        return strlen($vowel_word)>1? substr($vowel_word,0,1).substr($vowel_word,1,1):substr($vowel_word,0,1).substr($letter,1,1); 
    }

    public function getLetterCodeFromString($letter)
    {
        return substr($letter[0],0,1).substr($letter[count($letter)-1],0,1);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        return $film;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFilmRequest  $request
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFilmRequest $request, Film $film)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        //
    }
}

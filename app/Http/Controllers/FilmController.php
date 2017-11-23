<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Genre;
use App\Comment;
use Auth;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films=Film::paginate(1);
        return view('allfilms',compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photoName = time().'.'.$request->photo->getClientOriginalExtension();
        $request->photo->move(public_path('images'), $photoName);


        $film= new Film;
          $film->name=$request->name;
          $film->description=$request->description;
          $film->release_date=$request->release_date;
          $film->rating=$request->rating;
          $film->ticket_price=$request->ticket_price;
          $film->country=$request->country;
          $film->genre=$request->genre;
          $film->photo=$photoName;

        $film->save();

        return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $film=Film::where('slug',$slug)->first();
        $comments=Comment::where('film_id',$film->id)->orderBy('id','desc')->get();

        return view('film',compact('film','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

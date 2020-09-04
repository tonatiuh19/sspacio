<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spaces;

class SpacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
        $space = new Spaces;
        $space->title = $request->title;
        $space->space_type = $request->space_type;
        $space->space_sub_type = $request->space_sub_type;
        $space->price = $request->price;
        $space->address = $request->address;
        $space->email_user = $request->email_user;
        $space->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($email_user)
    {
        //
        //return Spaces::where('email_user', $email_user)->get();
        return Spaces::select(['title', 'address','created_at','updated_at','price', 'a.name as type', 'b.name as sub-type'])
        ->from('spaces')
        ->join('spaces_types as a', 'a.id', '=', 'spaces.space_type')
        ->join('spaces_sub_types as b', 'b.id', '=', 'spaces.space_sub_type')
        ->where('email_user', $email_user)
        ->get();

        /*SELECT title, address, created_at, updated_at, price, a.name as 'type', b.name as 'sub-type' FROM spaces
INNER JOIN spaces_types as a on a.id = spaces.space_type 
INNER JOIN spaces_sub_types as b on b.id= spaces.space_sub_type
* */
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

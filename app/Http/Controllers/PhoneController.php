<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;
use App\User;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('phones.index', compact('phones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('phones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'number'=>'required'
        ]);
        $url = $request->fullUrl();
        $url_parts = explode("?", $url);
        $user_id = array_pop($url_parts);
        $user_id = explode("=", $user_id);
        $user_id = intval($user_id[0]);

        $phone = new Phone([
            'number' => $request->get('number'),
            'user_id' => $user_id
        ]);

        $phone->save();

        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $phone = Phone::find($id);
        return view('phones.edit', compact('phones'));
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
        $request->validate([
            'number'=>'required'
        ]);

        $url = $request->fullUrl();
        $url_parts = explode("/", $url);
        $user_id = $url[count($url_parts) - 2];
        $phone = Phone::find($id);
        $phone->number = $user_id;
        $phone->save();

        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phone = Phone::find($id);
        $phone->delete();
        return redirect()->back();
    }


}

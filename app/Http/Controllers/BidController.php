<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BidRequest;
use App\Http\Requests;
use App\Bid;
use App\Advertisement;

class BidController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show','search']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        var_dump("asd");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Bid $bid)
    {
        var_dump($bid);
         //return view('bids.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BidRequest $request)
    {
        $bid = new Bid($request->all());
        $bid->save();
        
        //$advertisement->comments()->save($comment);

        \Session::flash('flash_message', 'Your bids has been created!');

        return back();
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

    public function bidAdvertisement($id){
        $advertisement = Advertisement::findorfail($id);  
        return view('bids.create',compact('advertisement'));
    }
}

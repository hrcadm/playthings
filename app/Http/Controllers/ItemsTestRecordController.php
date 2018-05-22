<?php

namespace App\Http\Controllers;

use App\Models\ItemsTestRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemsTestRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role === 'admin')
        {
            $itemsTest = ItemsTestRecord::whereYear('TestDate', '=', date('Y'))->paginate(10);

            return view('itemstestrecords.index', compact('itemsTest'));
        }

        $itemsTest = ItemsTestRecord::whereYear('TestDate', '>=', '2016')->paginate(10);

        return view('itemstestrecords.index', compact('itemsTest'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('itemstestrecords.manage');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $itemTest = ItemsTestRecord::findOrFail($id);

        return view('itemstestrecords.manage', compact('itemTest'));
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
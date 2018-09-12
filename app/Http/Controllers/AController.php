<?php

namespace App\Http\Controllers;

use App\a;
use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\DataTables\Datatables;
class AController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function json($value='')
    {
        return Datatables::of(a::all())->make(true);

    }
    public function index()
    {
        return view('Nama.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
     * Display the specified resource.
     *
     * @param  \App\a  $a
     * @return \Illuminate\Http\Response
     */
    public function show(a $a)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\a  $a
     * @return \Illuminate\Http\Response
     */
    public function edit(a $a)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\a  $a
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, a $a)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\a  $a
     * @return \Illuminate\Http\Response
     */
    public function destroy(a $a)
    {
        //
    }
}

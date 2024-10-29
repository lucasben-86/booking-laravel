<?php

namespace App\Http\Controllers;

use App\Models\pid;
use Illuminate\Http\Request;

class PidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pid['pids']= Pid::all(); 
        return view('pids.index', $pid);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pid = request ()->all();
        Pid::create($pid);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(pid $pid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pid $pid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pid $pid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pid $pid)
    {
        //
    }
}

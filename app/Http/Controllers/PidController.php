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

    public function pidcreate()
    {
    return view('pids.pidcreate');
    }

    public function viewpids()
    {
        $data['pids'] = Pid::all(); 
        return view('pids.viewpids', $data);
    }
    
    public function detailedpid($id)
    {
        $pid = Pid::findOrFail($id); 
        return view('pids.detailedpid', compact('pid')); 
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
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pid = Pid::findOrFail($id);
        $pid->delete();
    
        return redirect('/list')->with('success', 'El evento ha sido eliminado correctamente.');
    }
}

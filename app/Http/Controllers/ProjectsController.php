<?php

namespace App\Http\Controllers;

use App\Projects;
use Illuminate\Http\Request;
use DB;

class ProjectsController extends Controller
{
    public function __invoke(Request $request)
    {
        return "Welcome to our homepage";
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyeks = Projects::all();
        return view('proyek.index', compact('proyeks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyek.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $query = DB::table('projects') -> insert([
            'nama' => $request['nama'],
            'deskripsi' => $request['desk'],
            'tanggal_mulai' => $request['mulai'],
            'tanggal_deadline' => $request['deadline'],

        ]);

        return redirect()->route('proyek.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show($projects)
    {
        $proyek = DB::table('projects') -> where('id', $projects )->first();
        return view('proyek.detail', compact('proyek'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit($projects)
    {
        $proyek = DB::table('projects') -> where('id', $projects )->first();
        return view('proyek.edit', compact('proyek'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update($projects, Request $request)
    {
        $query = DB::table('projects')
        -> where('id', $projects )
        -> update([
            'nama' => $request['nama'],
            'deskripsi' => $request['desk'],
            'tanggal_mulai' => $request['mulai'],
            'tanggal_deadline' => $request['deadline'],
        ]);
        return redirect()->route('proyek.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projects $projects)
    {
        //
    }
}

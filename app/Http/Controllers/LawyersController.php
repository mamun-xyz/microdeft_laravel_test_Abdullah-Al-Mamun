<?php

namespace App\Http\Controllers;

use App\Models\Lawyers;
use App\Http\Requests\StoreLawyersRequest;
use App\Http\Requests\UpdateLawyersRequest;

class LawyersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $lawyers = Lawyer::all();
       return view('layers.index', compact('lawyers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLawyersRequest $request)
    {
        $layers = Lawyer::create[(
            'name' => $request->name;
            'phone' => $request->phone;
            'address' => $request->address;
            'department_id' => $request->department_id;
            'years_of_experience' => $request->dyears_of_experience;
        )];
    }

    /**
     * Display the specified resource.
     */
    public function show(Lawyers $lawyers)
    
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lawyers $lawyers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLawyersRequest $request, Lawyers $lawyers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lawyers $lawyers)
    {
        //
    }
}

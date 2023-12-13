<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professors = Professor::latest()->paginate(5);

        return view('professors.index',compact('professors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('professors.create');
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
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'age' => 'required',
            'address' => 'required',
            'educ' => 'required',
            'special' => 'required',
            'work' => 'required',
            'img' => 'required',
        ]);

        Professor::create($request->all());

        return redirect()->route('professors.index')
                        ->with('success','Prof created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Professors  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Professor $professor)
    {
        return view('professors.show',compact('professor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Professor  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Professor $professor)
    {
        return view('professors.edit',compact('professor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Professor  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professor $professor)
    {
        $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'age' => 'required',
            'address' => 'required',
            'educ' => 'required',
            'special' => 'required',
            'work' => 'required',
            'img' => 'required',
        ]);

        $professor->update($request->all());

        return redirect()->route('professors.index')
                        ->with('success','Prof updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Professor  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professor $professor)
    {
        $professor->delete();

        return redirect()->route('professors.index')
                        ->with('success','Professor deleted successfully');
    }
}

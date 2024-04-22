<?php

namespace App\Http\Controllers\Admin\Partials;

use App\Http\Controllers\Controller;
use App\Models\Jobs;
use App\Models\Location;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class LowonganKerjaController extends Controller
{
    public function index()
    {
        $jobs = Jobs::all();
        return view('admin.layouts.loker.index', compact('jobs'));
    }

    public function addIndex()
    {
        $locations = Location::all();
        $skills = Skill::all();
        return view('admin.layouts.loker.addloker', compact('locations', 'skills'));
    }

    public function addData(Request $request)
    {
        $validatedData = $request->validate([
            'Name' => 'required',
            'Salary' => 'required',
            'Description' => 'required',
            'skills' => 'required|array', 
            'location_id' => 'required',
        ]);
    
        $skillNames = Skill::whereIn('id', $validatedData['skills'])->pluck('id')->toArray();
        $validatedData['skills'] = implode(', ', $skillNames);
    
        $validatedData['skill_id'] = $validatedData['skills'];
    
        $job = Jobs::create($validatedData); 
    
        return redirect()->route('loker.index');
    }
    
    public function edit($id)
    {
        $jobs = Jobs::findOrFail($id);
        return view('admin.layouts.loker.edit', compact('jobs'));
    }

    public function update(Request $request, $id)
    {
        $jobs = Jobs::findOrFail($id);

        $validatedData = $request->validate([
            'Name' => 'required',
            'Salary' => 'required',
            'Description' => 'required',
            'skills' => 'required|array', 
        ]);

        $validatedData['skills'] = implode(',', $validatedData['skills']);

        $jobs->update(Arr::except($validatedData, ['skills'])); 

        return redirect(route('loker.index'));
    }

    public function destroy($id)
    {
        $jobs = Jobs::findOrFail($id);
        $jobs->delete();

        return redirect()->route('loker.index');
    }
}

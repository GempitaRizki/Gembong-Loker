<?php

namespace App\Http\Controllers\Admin\Partials;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CompanyController extends Controller
{
    public function index()
    {
        $companys = Company::all();
        return view('admin.layouts.company.index', compact('companys'));
    }

    public function addIndex()
    {
        $locations = Location::all();
        return view('admin.layouts.company.addcompany', compact('locations'));
    }

    public function addData(Request $request)
    {
        $validatedCompany = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif',
            'detail_address' => 'required'
        ]);

        if ($request->hasFile('images')) {
            $imageName = $request->file('images')->getClientOriginalName(); 
            $imageHash = hash('sha256', Str::random(40)); 
            $imagePath = $imageName . '_' . $imageHash; 
            $imagePath = $request->file('images')->storeAs('company_images', $imagePath, 'public'); 
            $validatedCompany['images'] = $imagePath; 
        }


        Company::create($validatedCompany);
        return redirect()->route('company.index')->with('success', 'Data Company berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $companys = Company::findOrFail($id);
        return view('admin.layouts.company.edit', compact('companys'));
    }
}

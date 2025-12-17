<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CareerController extends Controller
{

    public function index()
    {
        return view('admin::add-section.add-career');
    }

    public function addCareer(Request $request)
    {
        $request->validate([
            'career_name' => 'required',
            'career_overview' => 'required',
            'career_description' => 'required',
            'working_type' => 'required',
            'location' => 'required',
            // 'salary' => 'required',
        ]);

        Career::create([
            'career_name' => $request->career_name,
            'career_overview' => $request->career_overview,
            'career_description' => $request->career_description,
            'working_type' => $request->working_type,
            'location' => $request->location,
            'salary' => $request->salary,
        ]);

        return redirect()->back()->with('success', 'Career added successfully!');
    }


    public function edit($id)
    {
            $career = Career::findOrFail($id);
            return view('admin::edit-section.edit-career', compact('career'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'career_name' => 'required',
            'career_overview' => 'required',
            'career_description' => 'required',
            'working_type' => 'required',
            'location' => 'required',
            // 'salary' => 'required',
        ]);

        $career = Career::findOrFail($id);
        $career->update([
            'career_name' => $request->career_name,
            'career_overview' => $request->career_overview,
            'career_description' => $request->career_description,
            'working_type' => $request->working_type,
            'location' => $request->location,
            'salary' => $request->salary,
        ]);

        return redirect()->back()->with('success', 'Career updated successfully!');
    }


    public function delete($id)
    {
        $career = Career::findOrFail($id);
        $career->delete();

        return redirect()->back()->with('success', 'Career deleted successfully!');
    }
}

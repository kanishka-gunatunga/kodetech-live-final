<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class ProjectController extends Controller
{
    public function addProject(Request $request)
    {
        if ($request->isMethod('post')) {
            try {
                // Validate form inputs
                $request->validate([
                    'project_name' => 'required|string|max:255',
                    'project_overview' => 'required|string',
                    // 'project_description' => 'nullable|string',
                    'project_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                    'client_name' => 'nullable|string|max:255',
                    'duration' => 'nullable|string|max:255',
                    'project_type' => 'required|string|max:100',
                    'websiteLink' => 'nullable|string|max:255',
                    'category' => 'required|string|max:100',

                ]);

                // Handle image upload
                $imagePath = null;
                if ($request->hasFile('project_image')) {
                    $imagePath = $request->file('project_image')->store('project_images', 'public');
                }

                $link = $request->websiteLink;

                if ($link) {
                    // If the link does NOT start with http:// or https://
                    if (!preg_match('/^https?:\/\//', $link)) {
                        $link = 'https://' . $link;
                    }
                }


                // Create project record
                Project::create([
                    'project_name' => $request->project_name,
                    'project_overview' => $request->project_overview,
                    'project_description' => $request->project_description,
                    'project_image' => $imagePath,
                    'client_name' => $request->client_name,
                    'duration' => $request->duration,
                    'project_type' => $request->project_type,
                    'website_link' => $link,
                    'category' => $request->category,

                ]);

                return redirect()->back()->with('success', 'Project added successfully!');
            } catch (Exception $e) {
                Log::error('Error adding project: ' . $e->getMessage());
                return redirect()->back()->with('error', 'Something went wrong while adding the project.');
            }
        }

        try {
            $projects = Project::all();
            return view('admin::add-section.add-project', compact('projects'));
        } catch (Exception $e) {
            Log::error('Error fetching projects: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to load projects.');
        }
    }

    public function edit($id)
    {
        try {
            $project = Project::findOrFail($id);
            return view('admin::edit-section.edit-project', compact('project'));
        } catch (Exception $e) {
            Log::error('Error loading project for edit: ' . $e->getMessage());
            return redirect()->route('admin.dashboard')->with('error', 'Project not found.');
        }
    }

    public function update(Request $request, $id)
    {
        try {


            $request->validate([
                'project_name' => 'required|string|max:255',
                'project_overview' => 'required|string',
                'project_description' => 'nullable|string',
                'project_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'client_name' => 'nullable|string|max:255',
                'duration' => 'nullable|string|max:255',
                'project_type' => 'required|string|max:100',
                'websiteLink' => 'nullable|string|max:255',
                'category' => 'required|string|max:100',
            ]);

            $project = Project::findOrFail($id);

            if ($request->hasFile('project_image')) {
                $imagePath = $request->file('project_image')->store('project_images', 'public');
                $project->project_image = $imagePath;
            }

            $link = $request->websiteLink;

            if ($link) {
                // If the link does NOT start with http:// or https://
                if (!preg_match('/^https?:\/\//', $link)) {
                    $link = 'https://' . $link;
                }
            }




            $project->update([
                'project_name' => $request->project_name,
                'project_overview' => $request->project_overview,
                'project_description' => $request->project_description,
                'client_name' => $request->client_name,
                'duration' => $request->duration,
                'project_type' => $request->project_type,
                'website_link' => $link,
                'category' => $request->category,
            ]);

            return redirect()->route('admin.dashboard')->with('success', 'Project updated successfully!');
        } catch (Exception $e) {
            Log::error('Error updating project: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to update the project.');
        }
    }

    public function destroy($id)
    {
        try {
            $project = Project::findOrFail($id);
            $project->delete();
            return redirect()->back()->with('success', 'Project deleted successfully!');
        } catch (Exception $e) {
            Log::error('Error deleting project: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to delete the project.');
        }
    }
}

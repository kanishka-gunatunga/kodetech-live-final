<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class ServiceController extends Controller
{
    public function addService(Request $request)
    {
        try {
            if ($request->isMethod('post')) {

                $request->validate([
                    'service_name' => 'required|string|max:255',
                    'service_overview' => 'required|string',
                    'service_short_description' => 'nullable|string',
                    'service_description' => 'nullable|string',
                    'service_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                if ($request->hasFile('service_image')) {
                    $imagePath = $request->file('service_image')->store('service_images', 'public');
                } else {
                    $imagePath = null;
                }

                Service::create([
                    'service_name' => $request->service_name,
                    'service_overview' => $request->service_overview,
                    'service_short_description' => $request->service_short_description,
                    'service_description' => $request->service_description,
                    'service_image' => $imagePath,
                ]);

                return redirect()->back()->with('success', 'Service added successfully!');
            }

            return view('admin::add-section.add-service');
        } catch (Exception $e) {
            Log::error('Error adding service: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong while adding the service.');
        }
    }

    public function edit($id)
    {
        try {
            $service = Service::findOrFail($id);
            return view('admin::edit-section.edit-service', compact('service'));
        } catch (Exception $e) {
            Log::error('Error fetching service for edit: ' . $e->getMessage());
            return redirect()->route('admin.dashboard')->with('error', 'Service not found.');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'service_name' => 'required|string|max:255',
                'service_overview' => 'required|string',
                'service_short_description' => 'nullable|string',
                'service_description' => 'nullable|string',
                'service_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $service = Service::findOrFail($id);

            if ($request->hasFile('service_image')) {
                $imagePath = $request->file('service_image')->store('service_images', 'public');
                $service->service_image = $imagePath;
            }

            $service->service_name = $request->service_name;
            $service->service_overview = $request->service_overview;
            $service->service_short_description = $request->service_short_description;
            $service->service_description = $request->service_description;
            $service->save();

            return redirect()->route('admin.dashboard')->with('success', 'Service updated successfully!');
        } catch (Exception $e) {
            Log::error('Error updating service: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong while updating the service.');
        }
    }

    public function destroy($id)
    {
        try {
            $service = Service::findOrFail($id);
            $service->delete();

            return redirect()->route('admin.dashboard')->with('success', 'Service deleted successfully!');
        } catch (Exception $e) {
            Log::error('Error deleting service: ' . $e->getMessage());
            return redirect()->route('admin.dashboard')->with('error', 'Unable to delete the service.');
        }
    }
}

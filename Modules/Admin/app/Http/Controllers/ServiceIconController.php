<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceIcon;

class ServiceIconController extends Controller
{

    public function index()
    {
        $services = Service::all();
        return view('admin::add-section.add-service-icon', compact('services'));
    }


    public function addServiceIcon(Request $request)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
            'service_icon_title' => 'required',
            'service_icon_short_description' => 'required',
            'service_icon_image' => 'required',
        ]);

        $imagePath = null;
        if ($request->hasFile('service_icon_image')) {
            $imagePath = $request->file('service_icon_image')->store('service_icon_images', 'public');
        }

        ServiceIcon::create([
            'service_id' => $request->service_id,
            'service_icon_title' => $request->service_icon_title,
            'service_icon_short_description' => $request->service_icon_short_description,
            'service_icon_image' => $imagePath
        ]);

        return redirect()->back()->with('success', 'Service Icon Added!');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $serviceIcon = ServiceIcon::findOrFail($id);
        $services = Service::all();
        return view('admin::edit-section.edit-service-icon', compact(['serviceIcon', 'services']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
            'service_icon_title' => 'required',
            'service_icon_short_description' => 'required',
            'service_icon_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $serviceIcon = ServiceIcon::findOrFail($id);

        // Update image only if a new one is uploaded
        if ($request->hasFile('service_icon_image')) {
            $imagePath = $request->file('service_icon_image')->store('service_icon_images', 'public');
            $serviceIcon->service_icon_image = $imagePath;
        }

        // Update other fields
        $serviceIcon->service_id = $request->service_id;
        $serviceIcon->service_icon_title = $request->service_icon_title;
        $serviceIcon->service_icon_short_description = $request->service_icon_short_description;

        $serviceIcon->save();

        return redirect()->back()->with('success', 'Service Icon Updated!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $serviceIcon = ServiceIcon::findOrFail($id);
        $serviceIcon->delete();

        return redirect()->back()->with('success', 'Service Icon Deleted!');
    }
}

<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class TestimonialController extends Controller
{
    public function addTestimonial(Request $request)
    {
        if ($request->isMethod('post')) {
            try {
                // Validate the input
                $request->validate([
                    'review_overview' => 'required|string|max:255',
                    'review_message' => 'nullable|string',
                    'rating' => 'required|integer|min:1|max:5',
                    'client_name' => 'required|string|max:255',
                    'client_designation' => 'required|string|max:255',
                    'testimonial_client_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                // Handle image upload
                if ($request->hasFile('testimonial_client_image')) {
                    $imagePath = $request->file('testimonial_client_image')->store('testimonials', 'public');
                } else {
                    return back()->with('fail', 'Image upload failed');
                }

                // Save to database
                Testimonial::create([
                    'review_overview' => $request->review_overview,
                    'review_message' => $request->review_message,
                    'rating' => $request->rating,
                    'client_name' => $request->client_name,
                    'client_designation' => $request->client_designation,
                    'testimonial_client_image' => $imagePath,
                ]);

                return redirect()->back()->with('success', 'Testimonial added successfully!');
            } catch (Exception $e) {
                Log::error('Error while adding testimonial: ' . $e->getMessage());
                return back()->with('fail', 'Something went wrong. Please try again.');
            }
        }

        return view('admin::add-section.add-testimonial');
    }

    public function edit($id)
    {
        try {
            $testimonial = Testimonial::findOrFail($id);
            return view('admin::edit-section.edit-testimonial', compact('testimonial'));
        } catch (Exception $e) {
            Log::error('Error while editing testimonial: ' . $e->getMessage());
            return redirect()->back()->with('fail', 'Testimonial not found');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $testimonial = Testimonial::findOrFail($id);

            $request->validate([
                'review_overview' => 'required|string|max:255',
                'review_message' => 'nullable|string',
                'rating' => 'required|integer|min:1|max:5',
                'client_name' => 'required|string|max:255',
                'client_designation' => 'required|string|max:255',
                'testimonial_client_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            // Start with the current image
            $imagePath = $testimonial->testimonial_client_image;

            // If a new image is uploaded, store and replace it
            if ($request->hasFile('testimonial_client_image')) {
                $imagePath = $request->file('testimonial_client_image')->store('testimonials', 'public');
            }

            // Update everything, including the image path
            $testimonial->update([
                'review_overview' => $request->review_overview,
                'review_message' => $request->review_message,
                'rating' => $request->rating,
                'client_name' => $request->client_name,
                'client_designation' => $request->client_designation,
                'testimonial_client_image' => $imagePath,
            ]);

            return redirect()->route('admin.dashboard')->with('success', 'Testimonial updated successfully!');
        } catch (Exception $e) {
            Log::error('Error while updating testimonial: ' . $e->getMessage());
            return back()->with('fail', 'Failed to update testimonial');
        }
    }


    public function delete($id)
    {
        try {
            $testimonial = Testimonial::findOrFail($id);
            $testimonial->delete();
            return redirect()->back()->with('success', 'Testimonial deleted successfully!');
        } catch (Exception $e) {
            Log::error('Error while deleting testimonial: ' . $e->getMessage());
            return redirect()->back()->with('fail', 'Failed to delete testimonial');
        }
    }
}

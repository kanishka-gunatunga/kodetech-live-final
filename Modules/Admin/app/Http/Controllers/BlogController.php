<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Exception;

class BlogController extends Controller
{
    // index
    public function index(Request $request)
    {
        try {
            $blogs = Blog::orderBy('created_at', 'desc')->get();
            return view('bind-pages.blog', compact('blogs'));
        } catch (Exception $e) {
            Log::error('Error loading blogs: ' . $e->getMessage());
            return back()->withErrors('Failed to load blog data.');
        }
    }

    // Store News Data
    public function addBlog(Request $request)
    {
        if ($request->isMethod('post')) {
            try {
                $request->validate([
                    'news_heading' => 'required|string|max:255',
                    'news_description' => 'required|string',
                    'authur' => 'nullable|string',
                    'date' => 'required|date',
                    'news_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $imagePath = null;
                if ($request->hasFile('news_image')) {
                    $imagePath = $request->file('news_image')->store('news_images', 'public');
                }

                Blog::create([
                    'news_heading' => $request->news_heading,
                    'news_description' => $request->news_description,
                    'authur' => $request->authur,
                    'date' => $request->date,
                    'news_image' => $imagePath,
                ]);

                return redirect()->back()->with('success', 'News added successfully!');
            } catch (Exception $e) {
                Log::error('Add blog error: ' . $e->getMessage());
                return back()->withErrors('Failed to add blog. Please try again.')->withInput();
            }
        }

        return view('admin::add-section.add-blogs');
    }

    // Edit
    public function edit($id)
    {
        try {
            $blog = Blog::findOrFail($id);
            return view('admin::edit-section.edit-blog', compact('blog'));
        } catch (Exception $e) {
            Log::error('Edit blog error: ' . $e->getMessage());
            return back()->withErrors('Blog not found.');
        }
    }

    // Update
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'news_heading' => 'required|string|max:255',
                'news_description' => 'required|string',
                'authur' => 'nullable|string',
                'date' => 'required|date',
                'news_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $blog = Blog::findOrFail($id);

            if ($request->hasFile('news_image')) {
                // Delete old image
                if ($blog->news_image && Storage::disk('public')->exists($blog->news_image)) {
                    Storage::disk('public')->delete($blog->news_image);
                }

                $blog->news_image = $request->file('news_image')->store('news_images', 'public');
            }

            $blog->update([
                'news_heading' => $request->news_heading,
                'news_description' => $request->news_description,
                'authur' => $request->authur,
                'date' => $request->date,
                'news_image' => $blog->news_image,
            ]);

            return redirect()->route('admin.dashboard')->with('success', 'Blog updated successfully!');
        } catch (Exception $e) {
            Log::error('Update blog error: ' . $e->getMessage());
            return back()->withErrors('Failed to update blog.')->withInput();
        }
    }

    // Delete
    public function delete($id)
    {
        try {
            $blog = Blog::findOrFail($id);

            // Delete image if exists
            if ($blog->news_image && Storage::disk('public')->exists($blog->news_image)) {
                Storage::disk('public')->delete($blog->news_image);
            }

            $blog->delete();
            return redirect()->back()->with('success', 'Blog deleted successfully!');
        } catch (Exception $e) {
            Log::error('Delete blog error: ' . $e->getMessage());
            return back()->withErrors('Failed to delete blog.');
        }
    }
}

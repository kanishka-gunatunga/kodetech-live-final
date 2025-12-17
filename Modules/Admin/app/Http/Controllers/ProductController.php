<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function addProduct(Request $request)
    {
        try {
            if ($request->isMethod('post')) {

                

                $request->validate([
                    'product_name' => 'required|string|max:255',
                    'product_overview' => 'required|string',
                    'product_short_description' => 'nullable|string',
                    // 'product_description' => 'nullable|string',
                    'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $imagePath = null;
                if ($request->hasFile('product_image')) {
                    $imagePath = $request->file('product_image')->store('product_images', 'public');
                }

                Product::create([
                    'product_name' => $request->product_name,
                    'product_overview' => $request->product_overview,
                    'product_short_description' => $request->product_short_description,
                    'product_description' => $request->product_description,
                    'product_image' => $imagePath,
                ]);

                return redirect()->back()->with('success', 'Product added successfully!');
            }

            $products = Product::all();
            return view('admin::add-section.add-product', compact('products'));
        } catch (\Exception $e) {
            Log::error('Add Product Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong while adding the product.');
        }
    }

    public function edit($id)
    {
        try {
            $product = Product::findOrFail($id);
            return view('admin::edit-section.edit-product', compact('product'));
        } catch (\Exception $e) {
            Log::error('Edit Product Error: ' . $e->getMessage());
            return redirect()->route('admin.dashboard')->with('error', 'Product not found.');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'product_name' => 'required|string|max:255',
                'product_overview' => 'required|string',
                'product_short_description' => 'nullable|string',
                'product_description' => 'nullable|string',
                'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $product = Product::findOrFail($id);

            if ($request->hasFile('product_image')) {
                $imagePath = $request->file('product_image')->store('product_images', 'public');
                $product->product_image = $imagePath;
            }

            $product->product_name = $request->product_name;
            $product->product_overview = $request->product_overview;
            $product->product_short_description = $request->product_short_description;
            $product->product_description = $request->product_description;
            $product->save();

            return redirect()->route('admin.dashboard')->with('success', 'Product updated successfully!');
        } catch (\Exception $e) {
            Log::error('Update Product Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to update the product.');
        }
    }

    public function destroy($id)
    {
        try {
            $product = Product::findOrFail($id);
            $product->delete();
            return redirect()->route('admin.dashboard')->with('success', 'Product deleted successfully!');
        } catch (\Exception $e) {
            Log::error('Delete Product Error: ' . $e->getMessage());
            return redirect()->route('admin.dashboard')->with('error', 'Failed to delete the product.');
        }
    }
}

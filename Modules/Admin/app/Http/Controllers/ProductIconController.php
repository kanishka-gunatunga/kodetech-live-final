<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductIcon;

class ProductIconController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('admin::add-section.add-product-icon', compact('products'));
    }


    public function addProductIcon(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'product_icon_title' => 'required',
            'product_icon_short_description' => 'required',
            'product_icon_image' => 'required',
        ]);

        $imagePath = null;
        if ($request->hasFile('product_icon_image')) {
            $imagePath = $request->file('product_icon_image')->store('product_icon_images', 'public');
        }

        ProductIcon::create([
            'product_id' => $request->product_id,
            'product_icon_title' => $request->product_icon_title,
            'product_icon_short_description' => $request->product_icon_short_description,
            'product_icon_image' => $imagePath
        ]);

        return redirect()->back()->with('success', 'Product Icon Added!');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $productIcon = ProductIcon::findOrFail($id);
        $products = Product::all();
        return view('admin::edit-section.edit-product-icon', compact(['productIcon', 'products']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'product_icon_title' => 'required',
            'product_icon_short_description' => 'required',
            'product_icon_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $productIcon = ProductIcon::findOrFail($id);

        // Update image only if a new one is uploaded
        if ($request->hasFile('product_icon_image')) {
            $imagePath = $request->file('product_icon_image')->store('product_icon_images', 'public');
            $productIcon->product_icon_image = $imagePath;
        }

        // Update other fields
        $productIcon->product_id = $request->product_id;
        $productIcon->product_icon_title = $request->product_icon_title;
        $productIcon->product_icon_short_description = $request->product_icon_short_description;

        $productIcon->save();

        return redirect()->back()->with('success', 'Product Icon Updated!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $productIcon = ProductIcon::findOrFail($id);
        $productIcon->delete();

        return redirect()->back()->with('success', 'Product Icon Deleted!');
    }
}

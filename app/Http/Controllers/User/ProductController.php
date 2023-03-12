<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view('user.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ProductCategory::all();

        return view('user.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'image_file' => 'required|file',
            'caption' => 'required',
        ]);

        try {
            $fileName = time().'_'.$request->image_file->getClientOriginalName();
            $filePath = $request->file('image_file')->storeAs('uploads', $fileName, 'public');
            $filePath = 'storage/' . $filePath;

            Product::create([
                'product_category_id' => $request->category,
                'image_file_url' => $filePath,
                'caption' => $request->caption,
            ]);

            session()->flash('notification_alert', [
                'type' => 'success',
                'message' => 'Add portfolio success'
            ]);

            return redirect()->route('user.products.index');
        } catch (\Exception $ex) {
            session()->flash('notification_alert', [
                'type' => 'danger',
                'message' => $ex->getMessage()
            ]);

            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $categories = ProductCategory::all();

        return view('user.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'category' => 'required',
            'image_file' => 'nullable|file',
            'caption' => 'required',
        ]);

        try {
            $product = Product::findOrFail($id);

            if ($request->file('image_file')) {
                File::delete($product->image_file_url);

                $fileName = time().'_'.$request->image_file->getClientOriginalName();
                $filePath = $request->file('image_file')->storeAs('uploads', $fileName, 'public');
                $filePath = 'storage/' . $filePath;
                $product->image_file_url = $filePath;
            }

            $product->update([
                'product_category_id' => $request->category,
                'caption' => $request->caption,
            ]);

            session()->flash('notification_alert', [
                'type' => 'success',
                'message' => 'Update portfolio success'
            ]);

            return redirect()->route('user.products.index');
        } catch (\Exception $ex) {
            session()->flash('notification_alert', [
                'type' => 'danger',
                'message' => $ex->getMessage()
            ]);

            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $product = Product::findOrFail($id);
            File::delete($product->image_file_url);

            $product->delete();

            session()->flash('notification_alert', [
                'type' => 'success',
                'message' => 'Delete portfolio success'
            ]);

            return redirect()->route('user.products.index');
        } catch (\Exception $ex) {
            session()->flash('notification_alert', [
                'type' => 'danger',
                'message' => $ex->getMessage()
            ]);

            return redirect()->back()->withInput();
        }
    }
}

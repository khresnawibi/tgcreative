<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = ProductCategory::all();

        return view('user.product-categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.product-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:product_categories,name'
        ]);

        try {
            ProductCategory::create([
                'name' => $request->name
            ]);

            session()->flash('notification_alert', [
                'type' => 'success',
                'message' => 'Add category success'
            ]);

            return redirect()->route('user.product-categories.index');
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
        $category = ProductCategory::findOrFail($id);

        return view('user.product-categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|unique:product_categories,name,' . $id
        ]);

        try {
            $category = ProductCategory::findOrFail($id);
            $category->update([
                'name' => $request->name
            ]);

            session()->flash('notification_alert', [
                'type' => 'success',
                'message' => 'Update category success'
            ]);

            return redirect()->route('user.product-categories.index');
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
            $category = ProductCategory::findOrFail($id);
            $category->delete();

            session()->flash('notification_alert', [
                'type' => 'success',
                'message' => 'Delete category success'
            ]);

            return redirect()->route('user.product-categories.index');
        } catch (\Exception $ex) {
            session()->flash('notification_alert', [
                'type' => 'danger',
                'message' => $ex->getMessage()
            ]);

            return redirect()->back()->withInput();
        }
    }
}

<?php

namespace App\Http\Controllers\Pages;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('pages.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request...
        $request->validate([
            'name' => 'required|string|min:5|max:20'
        ]);

        //insert data by model
        $categories = new Category;
        $categories->name = $request->name;
        $categories->save();

        //redirect in laravel with message
        return redirect()->back()->with('message', 'Category Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('categories.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //get items by id
        $Category = Category::where('id', $id)->first();

        //return view with variable Category
        return view('pages.categories.edit', compact('Category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the request...
        $request->validate([
            'name' => 'required|string|min:5|max:20'
        ]);

        //get items by id
        $Category = Category::where('id', $id)->first();
        $Category->name = $request->name;
        $Category->save();

        //redirect in laravel with message
        return redirect()->back()->with('message', 'Category update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //laravel eloquent remove from db
        $Category = Category::where('id', $id)->delete();

        //redirect in laravel with message
        return redirect()->back()->with('message', 'Category Deleted Successfully');
    }
}

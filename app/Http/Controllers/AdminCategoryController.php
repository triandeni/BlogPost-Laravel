<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('dashboard.categories.index',[
            'categories' => Category::all(),
           
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        {
            return view('dashboard.categories.create', [
                'categories' => Category::all()
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:categories',
            
        ]);
 
        $validatedData['user_id'] = auth()->user()->id;
 
        Category::create($validatedData);
 
        return redirect('/dashboard/categories')->with('success', 'New Category has been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        {
            return view('dashboard.categories.edit', [
                'category' => $category,
               
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        {
            $rules = [
                'name' => 'required|max:255',
            ];
    
            if($request->slug != $category->slug) {
                $rules['slug'] = 'required|unique:categories';
            } 
            $validatedData = $request->validate($rules);
    
            Category::where('id', $category->id)
            ->update($validatedData);
     
            return redirect('/dashboard/categories')->with('success', 'Cantegories has been Updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category, Post $post)
    {
        Category::destroy($category->id);
        Post::destroy($post->id);
 
        return redirect('/dashboard/categories')->with('success', 'Category has been Deleted!');
    }
    public function checkSlug (Request $request)
    {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}

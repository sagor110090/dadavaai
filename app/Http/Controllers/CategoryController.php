<?php

namespace App\Http\Controllers;

use Response;
use Validator;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CategoryController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('admin.allCategories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // // Validate form data
        // $rules = array(
        //     'categoryName' => 'required',
        //     'categoryImage' => 'required',
        // );

        // $validator = Validator::make ( Input::all(), $rules);
        // if ($validator->fails()){
        //     return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));
        // }

        // else{
        //     // Create instance of category model & assign form value then save to database
        //     $categories = new Category;
        //     $categories->categoryName = $request->categoryName;
            
        //     $categories->images = $request->categoryImage->store('public/images/category');
        //     $categories->save();

        //     return response()->json($categories);
        // }



        $validatedData = $this->validate($request, [
            'category' => 'required',
            'categoryImage' => 'required|image|mimes:png|max:25'
            ]);
                    
            
            // Handel image upload 
            
            // Checks if the file exists
            if ($request->hasFile('categoryImage')){
                // Get file name with extension
                $fileNameWithExt = $request->file('categoryImage')->getClientOriginalName();
                // Get only file name
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                // Get only extension
                $extension = $request->file('categoryImage')->getClientOriginalExtension();
                // Filename to store 
                $fileNameToStore = $fileName . str_random(20) . "." . $extension;
                // Directory to upload
                $path = $request->file('categoryImage')->storeAs('public/images/', $fileNameToStore);    
            } 
    
            // Create instance of Category model & assign form value then save to database
            $category = new Category;
            $category->categoryName = $request->category;
            $category->status = $request->status;
            $category->categoryImage = $fileNameToStore;
            $category->save();
            
            
            /* Checks if data is saved to database. If so, redirect to addCategories page with success message. Otherwise, redirect to addCategories page with error message */
            if($category){
               
                return redirect('/addCategories');
            }else{
               
                return redirect('/addCategories');
            }
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        // Find the category model & assign form value then save to database
        $category = Category::find($request->id);
        $category->categoryName = $request->categoryName;
        $categories->categoryImage = $request->categoryImage;

        $category->save();

        return response()->json($category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $categories = Category::find ($category->id)->delete();
        return response()->json();
    }
}

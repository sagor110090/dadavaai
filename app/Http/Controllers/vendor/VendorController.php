<?php

namespace App\Http\Controllers\vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner;
use App\Contact;
use App\Minicategory;
use App\Subcategory;
use function GuzzleHttp\Promise\all;
use Response;
use Validator;
use App\Tag;
use App\Size;
use App\Color;
use App\Image;
use App\Brand;
use App\Product;
use App\Industry;
use App\Category;
use App\Order;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Auth;


class VendorController extends Controller
{
     /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('index', 'store', 'update', 'destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all brands
        $brands = Brand::all()->sortBy('brandName');

        // Get all categories
        $categories = Category::all();

        // Get all industry
        $industries = Industry::all();

        // Get all colors
        $colors = Color::all();

        // Get all sizes
        $sizes = Size::all();

        // Get all tags
        $tags = Tag::all();

        // Get all products

        $user  = Auth::user();
        $id = $user->id;
        $name = $user->name;

        // Get all products
        $products = Product::all()->where('vendor', '=', $name);

        return view('vendor.allProducts', compact('products', 'brands', 'categories', 'industries', 'colors', 'sizes', 'tags'));
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
        // Validate form data
        $rules = array(
            'productName' => 'required|string|max:255',
            'sku' => 'required|string|max:255',
            'shortDescription' => 'required|string',
            'description' => 'required|string',
            'image1' => 'required|image|max:1000',
            'image2' => 'image|max:1000',
            'image3' => 'image|max:1000',
            'image4' => 'image|max:1000',
            'image5' => 'image|max:1000',
        );

        $validator = Validator::make ( Input::all(), $rules);
        if ($validator->fails()){
            return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));
        }
        
        $user  = Auth::user();
        $id = $user->id;
        $name = $user->name;
        // Create instance of Product model & assign form value then save to database
        $product = new Product;
        $product->productName = $request->productName;
        $product->sku = $request->sku;
        $product->slug = str_slug($request->productName);//slug add in database
        $product->status = 0; //publish status 
        $product->vendor = $name; // vendor name save in database so we can show by vendor name 
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->minicategory_id = $request->minicategory_id;
        $product->industry_id = $request->industry_id;
        $product->brand_id = $request->brand_id;
        $product->shortDescription = $request->shortDescription;
        $product->description = $request->description;
        $product->specification = $request->specification;
        $product->regularPrice = $request->regularPrice;
        $product->salePrice = $request->salePrice;
        $product->type = $request->type;
        $product->availablity = $request->availablity;
        $product->save();

        // Check if color is set
        if (isset($request->color)) {
            // Loop over selected colors
            foreach ($request->color as $value) {
                // Save to pivot table
                $product->colors()->attach($value);
            }
        }

        // Check if size is set
        if (isset($request->size)) {
            // Loop over selected sizes
            foreach ($request->size as $value) {
                // Save to pivot table
                $product->sizes()->attach($value);
            }
        }

        // Check if tag is set
        if (isset($request->tag)) {
            // Loop over selected tags
            foreach ($request->tag as $value) {
                // Save to pivot table
                $product->tags()->attach($value);
            }
        }

        // Create instance of Image model & assign form value then save to database
        $image = new Image;
        $image->product_id = $product->id;

        // Handle image upload

        // Checks if the file exists
        if ($request->hasFile('image1')){
            // Get file name with extension
            $fileNameWithExt = $request->file('image1')->getClientOriginalName();
            // Get only file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get only extension
            $extension = $request->file('image1')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore1 = $fileName . time() . "." . $extension;
            // Directory to upload
            $path = $request->file('image1')->storeAs('public/images/product', $fileNameToStore1);
            $image->image1 = $fileNameToStore1;
        }

        // Checks if the file exists
        if ($request->hasFile('image2')){
            // Get file name with extension
            $fileNameWithExt = $request->file('image2')->getClientOriginalName();
            // Get only file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get only extension
            $extension = $request->file('image2')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore2 = $fileName . time() . "." . $extension;
            // Directory to upload
            $path = $request->file('image2')->storeAs('public/images/product', $fileNameToStore2);
            $image->image2 = $fileNameToStore2;
        }

        // Checks if the file exists
        if ($request->hasFile('image3')){
            // Get file name with extension
            $fileNameWithExt = $request->file('image3')->getClientOriginalName();
            // Get only file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get only extension
            $extension = $request->file('image3')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore3 = $fileName . time() . "." . $extension;
            // Directory to upload
            $path = $request->file('image3')->storeAs('public/images/product', $fileNameToStore3);
            $image->image3 = $fileNameToStore3;
        }

        // Checks if the file exists
        if ($request->hasFile('image4')){
            // Get file name with extension
            $fileNameWithExt = $request->file('image4')->getClientOriginalName();
            // Get only file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get only extension
            $extension = $request->file('image4')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore4 = $fileName . time() . "." . $extension;
            // Directory to upload
            $path = $request->file('image4')->storeAs('public/images/product', $fileNameToStore4);
            $image->image4 = $fileNameToStore4;
        }

        // Checks if the file exists
        if ($request->hasFile('image5')){
            // Get file name with extension
            $fileNameWithExt = $request->file('image5')->getClientOriginalName();
            // Get only file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get only extension
            $extension = $request->file('image5')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore5 = $fileName . time() . "." . $extension;
            // Directory to upload
            $path = $request->file('image5')->storeAs('public/images/product', $fileNameToStore5);
            $image->image5 = $fileNameToStore5;
        }

        // Save image to database
        $image->save();

        // Return json response
        return response()->json(array('product' => $product->toArray(),'image' => $image->toArray(), 'colors' => $product->colors,'sizes' => $product->sizes,'tags' => $product->tags));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // Get the product
        $product = Product::find($product->id);

        // Get related products
        $products = Product::where('id', '!=', $product->id)->where('minicategory_id', $product->minicategory_id)->get();

        // Update view
        Product::find($product->id)->increment('view');

        // Get the contacts
        $contacts= Contact::all();

        // Return view
        return view('single-product', compact('product', 'contacts', 'products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
       

        

        // Find the Product model & assign form value then save to database
        $product = Product::find($id);
        $product->productName = $request->productName;
        $product->sku = $request->sku;
        $product->slug = str_slug($request->productName);
        $product->status = 0;
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->minicategory_id = $request->minicategory_id;
        $product->industry_id = $request->industry_id;
        $product->brand_id = $request->brand_id;
        $product->shortDescription = $request->shortDescription;
        $product->description = $request->description;
        $product->specification = $request->specification;
        $product->regularPrice = $request->regularPrice;
        $product->salePrice = $request->salePrice;
        $product->type = $request->type;
        $product->availablity = $request->availablity;
        $product->save();

        // Detach previous color, tag & size
        $product->colors()->detach();
        $product->sizes()->detach();
        $product->tags()->detach();

        // Check if color is set
        if (isset($request->color)) {
            // Loop over checked values
            foreach ($request->color as $value) {
                // Update with new values
                $product->colors()->attach($value);
            }
        }

        // Check if size is set
        if (isset($request->size)) {
            // Loop over checked values
            foreach ($request->size as $value) {
                // Update with new values
                $product->sizes()->attach($value);
            }
        }

        // Check if tag is set
        if (isset($request->tag)) {
            // Loop over checked values
            foreach ($request->tag as $value) {
                // Update with new values
                $product->tags()->attach($value);
            }
        }

        // Create instance of Image model & assign form value then save to database
        $image = Image::find($id);

        // Handle image upload

        // Checks if the file exists
        if ($request->hasFile('image1')){
            // Get file name with extension
            $fileNameWithExt = $request->file('image1')->getClientOriginalName();
            // Get only file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get only extension
            $extension = $request->file('image1')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore1 = $fileName . time() . "." . $extension;
            // Directory to upload
            $path = $request->file('image1')->storeAs('public/images/product', $fileNameToStore1);
            // Delete image from the directory
            Storage::delete('public/images/product/'.$image->image1);
            // Update database
            $image->image1 = $fileNameToStore1;
        }

        // Checks if the file exists
        if ($request->hasFile('image2')){
            // Get file name with extension
            $fileNameWithExt = $request->file('image2')->getClientOriginalName();
            // Get only file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get only extension
            $extension = $request->file('image2')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore2 = $fileName . time() . "." . $extension;
            // Directory to upload
            $path = $request->file('image2')->storeAs('public/images/product', $fileNameToStore2);

            // Checks if file exists
            if (!is_null($image->image2)){
                // Delete image from the directory
                Storage::delete('public/images/product/'.$image->image2);
            }

            // Update database
            $image->image2 = $fileNameToStore2;
        }

        // Checks if the file exists
        if ($request->hasFile('image3')){
            // Get file name with extension
            $fileNameWithExt = $request->file('image3')->getClientOriginalName();
            // Get only file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get only extension
            $extension = $request->file('image3')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore3 = $fileName . time() . "." . $extension;
            // Directory to upload
            $path = $request->file('image3')->storeAs('public/images/product', $fileNameToStore3);

            // Checks if file exists
            if (!is_null($image->image3)){
                // Delete image from the directory
                Storage::delete('public/images/product/'.$image->image3);
            }

            // Update database
            $image->image3 = $fileNameToStore3;
        }

        // Checks if the file exists
        if ($request->hasFile('image4')){
            // Get file name with extension
            $fileNameWithExt = $request->file('image4')->getClientOriginalName();
            // Get only file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get only extension
            $extension = $request->file('image4')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore4 = $fileName . time() . "." . $extension;
            // Directory to upload
            $path = $request->file('image4')->storeAs('public/images/product', $fileNameToStore4);

            // Checks if file exists
            if (!is_null($image->image4)){
                // Delete image from the directory
                Storage::delete('public/images/product/'.$image->image4);
            }

            // Update database
            $image->image4 = $fileNameToStore4;
        }

        // Checks if the file exists
        if ($request->hasFile('image5')){
            // Get file name with extension
            $fileNameWithExt = $request->file('image5')->getClientOriginalName();
            // Get only file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get only extension
            $extension = $request->file('image5')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore5 = $fileName . time() . "." . $extension;
            // Directory to upload
            $path = $request->file('image5')->storeAs('public/images/product', $fileNameToStore5);

            // Checks if file exists
            if (!is_null($image->image5)){
                // Delete image from the directory
                Storage::delete('public/images/product/'.$image->image5);
            }

            // Update database
            $image->image5 = $fileNameToStore5;
        }

        $image->save();

        // Return json response
        return response()->json(array('product' => $product->toArray(),'image' => $image->toArray(), 'colors' => $product->colors,'sizes' => $product->sizes,'tags' => $product->tags));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allProducts()
    {
        // Get all categories
        $categories = Category::all();

        // Get all sizes
        $sizes = Size::all();

        // Get all colors
        $colors = Color::all();

        // Get all banners
        $banners = Banner::all();

        // Get all products
        $products = Product::all()
            ->sortByDesc('id');

        // Return view
        return view('products', compact('products', 'categories', 'sizes', 'colors', 'banners'));
    }

    /**
     * Display a listing of the product by category and subcategory.
     *
     * @return \Illuminate\Http\Response
     */
    public function productByCat($catId, $subCatId = null, $minCatId = null)
    {
        // Get all categories
        $categories = Category::all();

        // Get all sizes
        $sizes = Size::all();

        // Get all colors
        $colors = Color::all();

        // Get all banners
        $banners = Banner::all();

        // Check if the minicategory id isset
        if(isset($minCatId)){
            // Get the minicategory
            $minicategory = Minicategory::find($minCatId);

            // Find product by minicategory
            $products = Product::where('minicategory_id', $minCatId)
                ->get();

            // Return view
            return view('productByCat', compact('products', 'categories', 'sizes', 'colors', 'banners', 'minicategory'));
        }

        // Check if the subcategory id isset
        elseif (isset($subCatId)){
            // Get the subcategory
            $subcategory = Subcategory::find($subCatId);

            // Find product by subcategory
            $products = Product::where('subcategory_id', $subCatId)
                ->get();

            // Return view
            return view('productByCat', compact('products', 'categories', 'sizes', 'colors', 'banners', 'subcategory'));
        }

        else{
            // Get the category
            $category = Category::find($catId);

            // Find product by category
            $products = Product::where('category_id', $catId)
                ->get();
        }

        // Return view
        return view('productByCat', compact('products', 'categories', 'sizes', 'colors', 'banners', 'category'));
    }

    /**
     * Display a listing of the product by subcategory.
     *
     * @return \Illuminate\Http\Response
     */
    public function productByMiniCat($miniCatId)
    {
        // Check if the subcategory id isset
        if(isset($miniCatId)){
            // Find product by subcategory
            $products = Product::with('image')->where([['minicategory_id', '=', $miniCatId], ['salePrice', '!=', null]])->orderByDesc('id')->get();
        }

        // Return json response
        return response()->json($products);
    }

    /**
     * Display a listing of the product by subcategory.
     *
     * @return \Illuminate\Http\Response
     */
    public function productsByMiniCat($miniCatId)
    {
        // Check if the subcategory id isset
        if(isset($miniCatId)){
            // Find product by subcategory
            $products = Product::with('image')->where('minicategory_id', $miniCatId)->orderByDesc('id')->get();
        }

        // Return json response
        return response()->json($products);
    }

    /**
     * Display a listing of the product by category.
     *
     * @return \Illuminate\Http\Response
     */
    public function productsByCat($catId, $proId)
    {
        // Check if the subcategory id isset
        if(isset($catId)){
            // Find product by subcategory
            $products = Product::with('image')->where('id', '!=', $proId)->where('minicategory_id', $catId)->orderByDesc('id')->get();
        }

        // Return json response
        return response()->json($products);
    }

    // Product by brand
    public function productByBrand($brandId){
        // Get all brands
        $brands = Brand::all();

        // Get the brand
        $brand = Brand::find($brandId);

        // Get all sizes
        $sizes = Size::all();

        // Get all colors
        $colors = Color::all();

        // Get all banners
        $banners = Banner::all();

        // Find product by category
        $products = Product::where('brand_id', $brandId)
            ->get();

        // Return view
        return view('productByBrand', compact('products', 'brands', 'sizes', 'colors', 'banners', 'brand'));
    }

    // Products by brand
    public function productsByBrand(){
        // Get all brands
        $brands = Brand::all();

        // Get all sizes
        $sizes = Size::all();

        // Get all colors
        $colors = Color::all();

        // Get all banners
        $banners = Banner::all();

        // Find product by category
        $products = Product::orderBy('id', 'desc')
            ->get();

        // Return view
        return view('productsByBrand', compact('products', 'brands', 'sizes', 'colors', 'banners'));
    }

    // Product by Industry
    public function productByIndustry($industryId){
        // Get all industries
        $industries = Industry::all();

        // Get the industry
        $industry = Industry::find($industryId);

        // Get all sizes
        $sizes = Size::all();

        // Get all colors
        $colors = Color::all();

        // Get all banners
        $banners = Banner::all();

        // Find product by category
        $products = Product::where('industry_id', $industryId)
            ->get();

        // Return view
        return view('productByIndustry', compact('products', 'industries', 'sizes', 'colors', 'banners', 'industry'));
    }

    // Products by Industry
    public function productsByIndustry(){
        // Get all industries
        $industries = Industry::all();

        // Get all sizes
        $sizes = Size::all();

        // Get all colors
        $colors = Color::all();

        // Get all banners
        $banners = Banner::all();

        // Find product by category
        $products = Product::orderBy('id', 'desc')
            ->get();

        // Return view
        return view('productsByIndustry', compact('products', 'industries', 'sizes', 'colors', 'banners'));
    }

    // Product by search
    public function searched_product(Request $request){
        // Get all categories
        $categories = Category::all();

        // Get all sizes
        $sizes = Size::all();

        // Get all colors
        $colors = Color::all();

        // Get all banners
        $banners = Banner::all();

        // Get products
        $products = Product::where('productName', 'like', '%' . $request->search . '%')->get();

        // Return view
        return view('searched_product', compact('products', 'categories', 'sizes', 'colors', 'banners'));
    }



    public function orders()
    {
        // Get all orders
       

        $user  = Auth::user();
        $id = $user->id;
        $name = $user->name;

        // Get all products
        $orders = Order::all()->where('vendor', '=', $name)->sortByDesc('id');

        return view('vendor.allOrders', compact('orders'));
    }
}

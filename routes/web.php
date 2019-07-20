<?php



Route::group([ 'middleware' => 'admin'], function () {
   
// Route::get('vproducts', 'vendorController@index');
// Route::post('vproducts/add', 'vendorController@store');
// Route::put('vproducts/{id}', 'vendorController@update');

//Route::get('vproducts', 'vendorController@index');

Route::resource('/vproducts', 'vendor\VendorController');
Route::get('/vorders', 'vendor\VendorController@orders');

Route::resource('vdiscounts', 'vendor\VendorDiscountController');



//Route::post('vproducts/add', 'vendorController@store');
//Route::post('vproducts/{id}', 'vendorController@update');

 Route::get('/vgetSubCat/{catId}', 'SubcategoryController@getSubCat');
 Route::get('/vgetMiniCat/{subCatId}', 'MinicategoryController@getMiniCat');

 //Route::resource('products', 'ProductController@update');

   });


//Route::resource('products', 'ProductController')->middleware('admin', 'superadmin');

   

Route::group(['middleware' => 'superadmin'], function () {

Route::resource('abouts', 'AboutController');
Route::resource('brands', 'BrandController');
Route::resource('categories', 'CategoryController');

Route::resource('sliders', 'SliderController');

// SubCategory routes here
Route::resource('subcategories', 'SubcategoryController');
Route::resource('products', 'ProductController');

// Minicategory routes here
Route::get('/getMiniCat/{subCatId}', 'MinicategoryController@getMiniCat');
Route::resource('minicategories', 'MinicategoryController');
Route::resource('contacts', 'ContactController');
Route::resource('messages', 'MessageController');


//Route::resource('products', 'ProductController');

Route::get('getSubCat/{catId}', 'SubcategoryController@getSubCat');
Route::get('/getMiniCat/{subCatId}', 'MinicategoryController@getMiniCat');


//Route::resource('products', 'ProductController')->middleware('admin', 'superadmin');
Route::resource('partners', 'PartnerController');

Route::resource('siteinfos', 'SiteinfoController');

Route::get('/dashboard', 'UserController@dashboard')->name('dashboard');

Route::resource('clients', 'ClientController');


// Color routes here
Route::resource('colors', 'ColorController');

// Size routes here
Route::resource('sizes', 'SizeController');

// Industry routes here
Route::resource('industries', 'IndustryController');

// Tag routes here
Route::resource('tags', 'TagController');

// Order routes here
Route::resource('orders', 'OrderController');

// Mail routes here
Route::get('/mailbox', 'MailController@index');
Route::get('/compose', 'MailController@compose');
Route::post('/sendMail', 'MailController@sendMail');

Route::resource('offers', 'OfferController');

Route::resource('deals', 'DealController');
Route::resource('banners', 'BannerController');
Route::resource('drafts', 'DraftController');

// Sent routes here
Route::get('/sents', 'SentController@index');
Route::get('/sents/{id}', 'SentController@show');
Route::delete('/sents/{id}', 'SentController@destroy');
Route::delete('/sents', 'SentController@destroyBulk');

Route::resource('discounts', 'DiscountController');
// MembershipType routes here
Route::resource('membership_types', 'MembershipTypeController');

// Salesman target routes here
Route::resource('salesmantargets', 'SalesmantargetController');

});




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Load home if no other url is specified
Route::get('/', 'HomeController@index')->name('home');

// Authorization routes here
Auth::routes();

// About routes here
Route::get('/about', 'AboutController@allAbouts')->name('about');

// Brand routes here

// Category routes here

// Slider routes here


Route::get('index', function () {

  return view('frontEnd.index');
    
});


// Contact routes here
Route::get('/contact', 'ContactController@allContacts')->name('contact');

// Message routes here

// Product routes here
Route::get('/product', 'ProductController@allProducts')->name('product');
Route::get('/searched_product', 'ProductController@searched_product');
Route::get('/productByCat/{catId}/{subCatId?}/{minCatId?}', 'ProductController@productByCat');
Route::get('/productByMiniCat/{miniCatId}', 'ProductController@productByMiniCat');
Route::get('/productsByMiniCat/{miniCatId}', 'ProductController@productsByMiniCat');
Route::get('/productsByCat/{catId}/{proId}', 'ProductController@productsByCat');
Route::get('/productByBrand/{brandId}', 'ProductController@productByBrand');
Route::get('/productsByBrand', 'ProductController@productsByBrand');
Route::get('/productByIndustry/{industryId}', 'ProductController@productByIndustry');
Route::get('/productsByIndustry', 'ProductController@productsByIndustry');

// Product Review routes here
Route::post('productreviews', 'ProductreviewController@store');

// Partner routes here

// Siteinfo routes here
Route::get('/faq', 'SiteinfoController@faq');
Route::get('/term-condition', 'SiteinfoController@terms');

// Admin dashboard routes here

// Client routes here
Route::get('/user/verify/{token}', 'ClientController@verifyUser');
Route::post('/sales_update', 'ClientController@sales_update');
Route::post('/billings', 'ClientController@store_billings');
Route::post('/payment_store', 'ClientController@payment_store');
Route::post('/shippings', 'ClientController@store_shippings');
Route::put('/updatePass', 'ClientController@updatePass');
Route::get('/auth', 'LoginController@login')->name('auth');
Route::get('/login-register', 'LoginController@loginview')->name('validate');
Route::get('/client-login', 'LoginController@login_view');
Route::get('/cmrLogout', 'LoginController@logout')->name('cmrLogout');

// Password reset routes here
Route::put('/password_reset', 'ResetController@password_reset');
Route::post('/passwordReset', 'ResetController@passwordReset');
Route::get('/reset/verify/{token}', 'ResetController@reset');



// Search routes here
//Route::post('/getSearchedProduct', 'SearchController@getSearchedProduct')->name('search');

// Wishlist routes here
Route::resource('wishlists', 'WishlistController');



// Discount routes here
Route::post('/applyCoupon', 'DiscountController@applyCoupon');




// Salesman routes here
Route::get('/sales_login', function () {
    return view('sales_login');
});
Route::post('/salesmen_auth', 'LoginController@sales_login');
Route::post('/sales_logout', 'LoginController@sales_logout');
Route::put('/sales_update', 'SalesmanController@sales_update');
Route::put('/update_sales_pass', 'SalesmanController@updatePass');
Route::get('clientOrder/{id}', 'SalesmanController@showOrder');
Route::resource('salesmen', 'SalesmanController');



// Cart routes here
Route::post('/addCart', 'CartController@store');
Route::post('/updateCart', 'CartController@update');
Route::post('/deleteCart', 'CartController@destroy');
Route::get('/allCarts', 'CartController@index');



// Subscription routes here
Route::post('/subscribes', 'SubscriptionController@store');

// Offer routes here
Route::get('/offer', 'OfferController@allOffers');

// Deal routes here
Route::get('/deal', 'DealController@allDeals');

// Banner routes here

// Draft routes here


<?php


use App\Models\User;
use App\Models\Brand;
use App\Models\Phone;
use App\Models\Product;
use App\Models\Project;
use App\Models\Category;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\From\CreateController;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Video;
use App\Scopes\Inactive;
use Illuminate\Support\Facades\App;

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


// Frontend Routes

Route::get('/', 'App\Http\Controllers\Frontend\HomeController@index');
// Route::get('about-us', 'App\Http\Controllers\Frontend\AboutController@about')->name('about.us');
Route::get('about-us', [App\Http\Controllers\Frontend\AboutController::class, 'index'])->name('about.us');
Route::get('properties', 'App\Http\Controllers\Frontend\PropertiesController@index')->name('properties');
Route::get('blog', 'App\Http\Controllers\Frontend\BlogController@index')->name('blog');
Route::get('contact', 'App\Http\Controllers\Frontend\ContactController@index')->name('contact');



//Admin Route

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('login', 'App\Http\Controllers\Backend\LoginController@index')->name('login');
    Route::get('dashboard', 'App\Http\Controllers\Backend\DashboardController@index')->name('dashboard');
    Route::get('about-us', 'App\Http\Controllers\Backend\AboutController@index')->name('about.us');
    Route::get('properties', 'App\Http\Controllers\Backend\PropertiesController@index')->name('properties');
    Route::get('blog', 'App\Http\Controllers\Backend\BlogController@index')->name('blog');
    Route::get('contact', 'App\Http\Controllers\Backend\ContactController@index')->name('contact');
});


// From Route

Route::get('product', 'App\Http\Controllers\From\CreateController@index');
Route::resource('from', 'App\Http\Controllers\Form\CreateController@index');



// Route::resource('from', CreateController::class);
// Route::get('product', function () {

// Insert Data

// $data = [
//     [
//         'name' => 'IPHONE 13',
//         'title' => 'IPHONE 13 ram/rom: 4/128',
//         'code' => 'IP134128',
//         'qty' => 10,
//         'category_id' => 2,
//         'brand' => 2,
//     ],
//     // For Insert Data
//     [
//         'name' => 'HUAWIE P30 PRO',
//         'title' => 'HUAWIE P30 PRO ram/rom: 8/256',
//         'code' => 'P30PRO',
//         'qty' => 15,
//         'category_id' => 1,
//         'brand' => 1,
//     ],
// ];
// return Product::insert($data);   // Multiple Data insert
// return Product::save($data);   // single Data insert




// Fetch( Show ) Data


// return Product::all();     // Fetch All Data
// return Product::find(1);     // Fetch Single Throw unique id
// return Product::where('id', 3)->first();     // Fetch Single Throw unique id





// Update Data
// Update Data Using Find()

// $product = Product::find(1);
// $product->name = 'IPHONE 13';

// return $product->update();

// Update Data Using Find() and update()
// return $product = Product::find(1)->update([
//     'name' => 'IPHONE 12'
// ]);

// Update Data Using where() and update()
// return $product = Product::where('id', 1)->update([
//     'name' => 'HUAWIE P20 LITE'
// ]);





//Delete Data
//Delete Data Through Where method
// return $product = Product::where('id', 3)->delete();

//delete Data Through Find() Method
// return $product = Product::find(3)->delete();    // deleted data try to delete make error this method

//delete Data Through Find() Method
// return $product = Product::findOrFail(3)->delete();     //// deleted data try to delete make 404 Not Found error







// Agrigate Function Max() Min() Count() Sum() Avg()

// Max()
// return Product::max('qty');

// Min()
// return Product::min('qty');

// Count()
// return Product::count('qty');

// Sum()
// return Product::sum('qty');

// Avg()
// return Product::avg('qty');



// Show Latest Data

// return Product::latest()->first();
// return Product::oldest()->first();

// Order By

// return Product::orderBy('id', 'desc')->get();

// Product::create([
//     'name'        => 'test 7',
//     'title'       => 'This is test 7',
//     'code'        => '45454a545',
//     'qty'         => '10',
//     'category_id' => '2',
//     'brand'       => '2',
//     'image'       => 'pizza.jpg',
//     'status'      => '1',
// ]);


// Scope Query
// Local Queary
// \DB::enableQueryLog();
// Product::activeproduct()->get();
// return \DB::getQueryLog();
// Dynamic value Query Scope
// return Product::status(2)->get();

// Global Scope

// return Product::get();

// skipe any single global scope
// return Product::withoutGlobalScope('high_qty')->get();

// skip multiple Global scope
// return Product::withoutGlobalScopes(['high_qty', 'ap'])->get();

// All Over Global Scope
// \DB::enableQueryLog();
// return Product::get();
// return \DB::getQueryLog();

//  Skip All Over Global Scope
// return Product::withoutGlobalScope(Inactive::class)->get();



// });

Route::get('post', function () {
    // $post = Video::create([
    //     'title' => 'This is Video One',
    // ]);

    // $post->comments()->create([
    //     'body' => 'Video One Comment One',
    // ]);

    // Many To Many
    // $post = Post::find(1);
    // dd($post->comments);

    // $post = Comment::find(1);
    // dd($post->commentable);

    // One To One
    // $data = Post::with('comments')->find(1);

    // dd($data);

    // Morph Many to Many Relationship
    // Insert Data
    // $post = Post::find(1);
    // $tag = Tag::find(1);

    // $post->tags()->attach($tag);

    // Fetch Data
    // $video = Video::find(1);
    // return $video->tags;

    // $post = Video::find(1);
    // return $post->tags;

    $tag = Tag::find(1);
    return $tag->videos;
});

Route::get('create', [CreateController::class, 'create']);


// Route::get('user', 'App\Http\Controllers\UserController@user');

// Route::get('project', function () {
//     // $project = Project::with('users')->get();



//     // return view('from.user', compact('project'));
// });




// Route::get('contact', [HomeController::class, 'contact'])->name('contact');  // Naming Route
// Route::get('profile', [HomeController::class, 'profile'])->name('profile');
// Route::get('/home', [HomeController::class, 'index']);
// Route::get('profile', 'HomeController@profile');

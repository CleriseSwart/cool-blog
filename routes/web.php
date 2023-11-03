<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\BlogPost;

/*Route::get('/', function () {
    return view('home');    // View the home page
});

Route::get('/about', function () {
    return view('about');   // View the about page
});


Route::get('/greet', function () {
    $name = 'Kabelo'; // Change this name to show a different name 
    return view('greeting', ['name' => $name]);
});

Route::get('/greet/{name}', function ($name){
    return view('greeting', ['name'=>$name]);
});
// Go to: https://localhost:8000/greet/Mentor   - replace Mentor with your name to see your name displayed 

// View the legal terms of service and privacy pages
// Define a route for /legal/{subsection}
Route::get('/legal/{subsection}', function ($subsection) {
    // Return the legal view with the provided subsection value
    return view('legal', ['subsection' => $subsection]);
})
// Apply a regular expression constraint to the {subsection} parameter
->where('subsection', '(tos|privacy)');*/

// Adding Blog posts
Route::get('/blog', function () {
    $posts = BlogPost::all(); // Retrieve all blog posts from the database
    return view('blog.index', ['posts' => $posts]); // Pass the $posts variable to the view
});

Route::get('/blog/{id}', function ($id) {
    $post = BlogPost::find($id); // Find a specific blog post by its ID
    $post->created = \Carbon\Carbon::parse($post->created); // Convert the created field to a Carbon instance
    return view('blog.post', ['post' => $post]); // Pass the $post variable to the view
});

// Home.blade 
Route::get('/', function () {
    $posts = BlogPost::all(); // Retrieve all blog posts from the database
    return view('home', ['posts' => $posts]); // Pass the $posts variable to the view
});

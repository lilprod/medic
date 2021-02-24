<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Offer;
use App\Models\Category;
use App\Models\Country;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        //Get all offers and pass it to the view

        $posts = Offer::with('category')
                        ->orderBy('created_at', 'desc')
                        ->limit(3)
                        ->get();

        foreach ($posts as $post) {
            # code...
           $user = User::findOrFail($post->user_id);

           $post->author_image = $user->profile_picture;

           $post->author = $user->name;

           //$post->author = $user->name.' '.$user->firstname;
        }

        return view('pages.index')->with('posts', $posts);
    }

    public function getCountries(Request $request)
    {
        $contries = Country::where('region_id', $request->id)
                            ->get();
        return response()->json($contries);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function staff()
    {
        return view('pages.staff');
    }

    public function institution()
    {
        return view('pages.institutions');
    }

    public function blog()
    {
        $categories = Category::all();

        $latestposts = Offer::orderBy('created_at', 'desc')
                            ->limit(3)
                            ->get();

        $posts = Offer::with('category')
                         ->orderBy('created_at', 'desc')
                         ->paginate(2);

        foreach ($posts as $post) {
            # code...
           $user = User::findOrFail($post->user_id);

           $post->author_image = $user->profile_picture;

           $post->author = $user->name;

           //$post->author = $user->name.' '.$user->firstname;
        }


        return view('pages.offers',compact('posts', 'categories', 'latestposts'));
    }

    public function postDetails($slug){

        $categories = Category::all();

        $latestposts = Offer::orderBy('created_at', 'desc')
                            ->limit(3)
                            ->get();

        $post = Offer::with('category')->where('slug',$slug)->first();

        $user = User::findOrFail($post->user_id);

        $post->author_image = $user->profile_picture;

        $post->author = $user->name;

        return view('pages.offer_detail',compact('post', 'categories', 'latestposts'));
    }

    /*public function posts(){
        $data = Post::with('category')->paginate(20);

        return view('site.posts',compact('data'));
    }*/

   public function categoryPosts($slug){

        $categories = Category::all();

        $latestposts = Post::orderBy('created_at', 'desc')
                            ->limit(3)
                            ->get();

        $data = Category::with('posts')->where('slug',$slug)->first();

        foreach ($data->posts as $post) {
            # code...
           $user = User::findOrFail($post->user_id);

           $post->author_image = $user->profile_picture;

           $post->author = $user->name;

           //$post->author = $user->name.' '.$user->firstname;
        }

        return view('pages.category_posts',compact('data', 'categories', 'latestposts'));
    }

    public function publication()
    {
        return view('pages.publication');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}

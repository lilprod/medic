<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

use App\Models\Category;
use App\Models\Offer;
use App\Models\Structure;
use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class OfferController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'isAdmin']); //supAdmin middleware lets only users with a //specific permission permission to access these resources
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::all();

        return view('admin.offers.index')->with('offers', $offers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        $services = Service::all();

        $structures = Structure::all();

        return view('admin.offers.create', compact('categories', 'services', 'structures'));
    }

    public function check_slug(Request $request)
    {  
        // New version: to generate unique slugs
        $slug = SlugService::createSlug(Offer::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:120',
            'slug'  => 'required|min:3|max:255|unique:offers',
            'description' => 'nullable',
            'body' => 'required',
            'attach_file' => 'nullable',
            'video_url' => 'nullable',
            'cover_image' =>'image|nullable',
            'status' => 'required',
            ],

            $messages = [
                'required' => 'The :attribute field is required.',
            ]
        );

        if ($request->hasfile('cover_image')) {
            // Get filename with the extension
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();

            // Get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();

            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/offers/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $offer = new Offer();
        $offer->title = $request->input('title');
        $offer->description = $request->input('description');
        $offer->slug = $request->input('slug');
        $offer->body = $request->input('body');
        $offer->cover_image = $fileNameToStore;
        $offer->reference = $request->input('reference');
        $offer->region = $request->input('region');
        $offer->start_date = $request->input('start_date');
        $offer->end_date = $request->input('end_date');
        $offer->day_pay = $request->input('day_pay');
        $offer->penalty = $request->input('penalty');
        $offer->hour_guard = $request->input('hour_guard');
        $offer->registered_with_council = $request->input('registered_with_council');
        $offer->accom_meal_travel = $request->input('accom_meal_travel');
        $offer->structure_id = $request->input('structure_id');
        $offer->service_id = $request->input('service_id');
        $offer->status = $request->input('status');
        $offer->user_id = auth()->user()->id;
        //$offer->attach_file = $request->input('attach_file');
        $offer->video_url = $request->input('video_url');

        if($request->input('category_id') == ''){
            $offer->category_id = 4;
        }else{
            $offer->category_id = $request->input('category_id');
        }

        //$offer->meta_keywords = $request->input('meta_keywords');
        //$offer->meta_description = $request->input('meta_description');
        
        //$offer->username = auth()->user()->name.' '.auth()->user()->firstname;

        /*$historique = new Historique();
        $historique->action = 'Create';
        $historique->table = 'Offer';
        $historique->user_id = auth()->user()->id;*/

        $offer->save();

        return redirect()->route('admin.offers.index')
            ->with('success', 'Offre publiée avec succès.');

        //$historique->save();
        /*if($post->status == 1){
            return redirect()->route('admin.posts.index')
            ->with('success',
             'Offre publiée avec succès.');

        }else{
            return redirect()->route('doctor_pending_posts')
            ->with('success',
             'Post is pending.');
        }*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $offer = Offer::findOrFail($id); //Get offer specified by id

        $categories = Category::all();

        return view('admin.offers.show', compact('offer', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offer = Offer::findOrFail($id); //Get offer specified by id

        $categories = Category::all();

        $services = Service::all();

        $structures = Structure::all();

        return view('admin.offers.edit', compact('offer', 'categories', 'services', 'structures'));
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
        //Find a offer with a given id and delete
        $offer = Offer::findOrFail($id);

        //Validate these fields
        $this->validate($request, [
                'title' => 'required|max:120',
                'slug'  => 'required|min:3|max:255|unique:offers,id,' . $offer->slug,
                'description' => 'nullable',
                'body' => 'required',
                'attach_file' => 'nullable',
                'video_url' => 'nullable',
                'cover_image' =>'image|nullable',
                'status' => 'required',
            ],

            $messages = [
                'required' => 'The :attribute field is required.',
            ]
        );

        if ($request->hasfile('cover_image')) {
            // Get filename with the extension
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();

            // Get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();

            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/offers/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $offer->title = $request->input('title');
        $offer->description = $request->input('description');
        $offer->body = $request->input('body');

        if ($request->hasfile('cover_image')) {
            $offer->cover_image = $fileNameToStore;
        }

        $offer->reference = $request->input('reference');
        $offer->region = $request->input('region');
        $offer->start_date = $request->input('start_date');
        $offer->end_date = $request->input('end_date');
        $offer->day_pay = $request->input('day_pay');
        $offer->penalty = $request->input('penalty');
        $offer->hour_guard = $request->input('hour_guard');
        $offer->registered_with_council = $request->input('registered_with_council');
        $offer->accom_meal_travel = $request->input('accom_meal_travel');
        $offer->structure_id = $request->input('structure_id');
        $offer->service_id = $request->input('service_id');
        $offer->status = $request->input('status');
        $offer->user_id = auth()->user()->id;
        //$offer->attach_file = $request->input('attach_file');
        $offer->video_url = $request->input('video_url');

        if($request->input('category_id') == ' '){
            $offer->category_id = 4;
        }else{
            $offer->category_id = $request->input('category_id');
        }
        // your previous code

        //$offer->meta_keywords = $request->input('meta_keywords');
        //$offer->meta_description = $request->input('meta_description');
  
        $offer->save();

        return redirect()->route('admin.offers.index')
            ->with('success', 'Offre éditée avec succès.');

        /*if($post->status == 1){
            return redirect()->route('admin.posts.index')
            ->with('success',
             'Offre mise à jour avec succès.');

        }else{
            return redirect()->route('doctor_pending_posts')
            ->with('success',
             'Offre en attente.');
        }*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Find a offer with a given id and delete
        $offer = Offer::findOrFail($id);
  
        if ($offer->cover_image != 'noimage.jpg') {
            Storage::delete('public/offers/cover_images/'.$offer->cover_image);
        }

        $offer->delete();

        return redirect()->route('admin.offers.index')
            ->with('success',
             'Offre supprimée avec succès.');
    }
}

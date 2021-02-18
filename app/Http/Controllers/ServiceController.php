<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ServiceController extends Controller
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
        $services = Service::all(); //Get all services

        return view('admin.services.index')->with('services', $services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
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
            'description' => 'nullable',
            'cover_image' => 'nullable|image|mimes:jpeg,png,bmp,tiff |max:4096',
            ],

            $messages = [
                'required' => 'The :attribute field is required.',
                'mimes' => 'Only jpeg, png, bmp,tiff are allowed.'
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
            $path = $request->file('cover_image')->storeAs('public/services/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'cover_image.jpg';
        }

        $service = new Service(); //Get service specified by id

        $service->title = $request->input('title');
        $service->description = $request->input('description');
        $service->cover_image = $fileNameToStore;

        $service->save();

        return redirect()->route('admin.services.index')
            ->with('success',
             'Service ajoutée avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        
        return view('admin.services.edit', compact('service'));
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
        $service = Service::findOrFail($id);

        //Validate these fields
        $this->validate($request, [
            'title' => 'required|max:120',
            'description' => 'nullable',
            'cover_image' => 'image|nullable',
        ]);

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
            $path = $request->file('cover_image')->storeAs('public/services/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'cover_image.jpg';
        }

        $service->title = $request->input('title');
        $service->description = $request->input('description');
        if ($request->hasfile('cover_image')) {
            $service->cover_image = $fileNameToStore;
        }

        $service->save();

        return redirect()->route('admin.services.index')
            ->with('success',
             'Service éditée avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Find a service with a given id and delete

        $service = Service::findOrFail($id);

        if ($service->file != 'cover_image.jpg') {
            Storage::delete('public/services/cover_images/'.$service->file);
        }
        $service->delete();

        return redirect()->route('admin.services.index')
            ->with('success',
             'Service supprimée avec succès.');
    }
}

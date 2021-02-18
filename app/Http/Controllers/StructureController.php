<?php

namespace App\Http\Controllers;

use App\Models\Structure;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class StructureController extends Controller
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
        $structures = Structure::all(); //Get all structures

        return view('admin.structures.index')->with('structures', $structures);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.structures.create');
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
            $path = $request->file('cover_image')->storeAs('public/structures/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'cover_image.jpg';
        }

        $structure = new Structure(); //Get structure specified by id

        $structure->title = $request->input('title');
        $structure->description = $request->input('description');
        $structure->cover_image = $fileNameToStore;

        $structure->save();

        return redirect()->route('admin.structures.index')
            ->with('success',
             'Structure ajoutée avec succès.');
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
        $structure = Structure::findOrFail($id);
        
        return view('admin.structures.edit', compact('structure'));
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
        $structure = Structure::findOrFail($id); //Get structure specified by id

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
            $path = $request->file('cover_image')->storeAs('public/structures/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'cover_image.jpg';
        }

        $structure->title = $request->input('title');
        $structure->description = $request->input('description');
        if ($request->hasfile('cover_image')) {
            $structure->cover_image = $fileNameToStore;
        }

        $structure->save();

        return redirect()->route('admin.structures.index')
            ->with('success',
             'Structure éditée avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Find a structure with a given id and delete
        $structure = Structure::findOrFail($id);
        if ($structure->file != 'cover_image.jpg') {
            Storage::delete('public/structures/cover_images/'.$structure->file);
        }
        $structure->delete();

        return redirect()->route('admin.structures.index')
            ->with('success',
             'Structure supprimée avec succès.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\subeImg;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SubeImgController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("image");
    }


    public function imageUpload(Request $request): RedirectResponse
    {
        $request->validate([
            'image.*' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:5120',
        ]);

        foreach ($request->image as $value) {
            $imageName = time() . '_' . $value->getClientOriginalName();
            $value->move(public_path('images'), $imageName);

            $imageNams[] = $imageName;
        }

        return redirect()->back()->withSuccess('You have successfully upload image.')->with('image', $imageNams);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(subeImg $subeImg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(subeImg $subeImg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, subeImg $subeImg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(subeImg $subeImg)
    {
        //
    }
}

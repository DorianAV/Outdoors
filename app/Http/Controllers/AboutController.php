<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::first();
        return view('admin.about', compact('about'));
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
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $about = About::first();
        return view('admin.about-edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $about = About::findOrFail($id);
            $data = $request->validated();
            if ($request->hasFile('image1')) {
                Storage::delete('public/' . $about->image1);
                $data['image1'] = $request->file('image1')->store('images', 'public');
            }
            if ($request->hasFile('image2')) {
                Storage::delete('public/' . $about->image2);
                $data['image2'] = $request->file('image2')->store('images', 'public');
            }
            $about->update($data);
            DB::commit();
            return redirect()->route('admin.about')->with([
                'message' => 'About updated successfully',
                'type' => 'success',
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withInput()->with([
                'message' => 'Error updating about details',
                'type' => 'error'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }
}

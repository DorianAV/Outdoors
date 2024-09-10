<?php

namespace App\Http\Controllers;

use App\Models\HomeImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('homeImages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $data = request()->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|required',
            ]);
            if (request()->hasFile('image')) {
                $data['image'] = request()->file('image')->store('uploads', 'public');

            }
            HomeImages::create($data);
            DB::commit();
            return redirect()->route('admin')->with([
                'message' => 'Image updated successfully',
                'type' => 'success'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withInput()->with([
                'message' => 'Error updating image',
                'type' => 'error'
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(HomeImages $homeImages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $image = HomeImages::findOrFail($id);
        return view('homeImages.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        try {
            DB::beginTransaction();
            $image = HomeImages::findOrFail($id);
            $data = request()->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            if (request()->hasFile('image')) {
                Storage::delete('public/' . $image->image);
                $data['image'] = request()->file('image')->store('uploads', 'public');

            }
            $image->update($data);
            DB::commit();
            return redirect()->route('admin')->with([
                'message' => 'Image updated successfully',
                'type' => 'success'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withInput()->with([
                'message' => 'Error updating image',
                'type' => 'error'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $image = HomeImages::findOrFail($id);
            Storage::delete('public/' . $image->image);
            $image->delete();
            DB::commit();
            return redirect()->route('admin')->with([
                'message' => 'Image deleted successfully',
                'type' => 'success'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withInput()->with([
                'message' => 'Error deleting image',
                'type' => 'error'
            ]);
        }
    }
}

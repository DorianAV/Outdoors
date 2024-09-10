<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeSectionRequest;
use App\Models\HomeSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class HomeSectionController extends Controller
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
    public function show(HomeSection $homeSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomeSection $homeSection)
    {
        $homeSection = HomeSection::first();
        return view('homeSection.edit', compact('homeSection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HomeSectionRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $homeSection = HomeSection::findOrFail($id);
            $data = $request->validated();
            if ($request->hasFile('image1')) {
                Storage::delete('public/' . $homeSection->image1);
                $data['image1'] = $request->file('image1')->store('uploads', 'public');
            }
            if ($request->hasFile('image2')) {
                Storage::delete('public/' . $homeSection->image2);
                $data['image2'] = $request->file('image2')->store('uploads', 'public');
            }
            $homeSection->update($data);
            DB::commit();
            return redirect()->route('admin')->with([
                'message' => 'Home section updated successfully',
                'type' => 'success'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error updating home section: ');
            Log::error($e);
            return redirect()->back()->withInput()->with([
                'message' => 'Error updating home section: '.$e->getMessage(),
                'type' => 'error'
            ]);

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomeSection $homeSection)
    {
        //
    }
}

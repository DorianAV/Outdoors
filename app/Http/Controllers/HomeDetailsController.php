<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeDetailsRequest;
use App\Http\Requests\HomeSectionRequest;
use App\Models\HomeDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeDetailsController extends Controller
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
    public function show(HomeDetails $homeDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)

    {
        $homeDetails = HomeDetails::first();
        return view('homeDetails.edit', compact('homeDetails'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HomeDetailsRequest $request,$id)
    {
        try {
            DB::beginTransaction();
            $homeDetails = HomeDetails::findOrFail($id);
            $data= $request->validated();
            if ($request->hasFile('image')) {
                Storage::delete('public/' . $homeDetails->image);
                $data['image'] = $request->file('image')->store('uploads', 'public');
            }
            $homeDetails->update($data);
            DB::commit();
            return redirect()->route('admin')->with([
                'message' => 'Home details updated successfully',
                'type' => 'success'
            ]);
        }
        catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withInput()->with([
                'message' => 'Error updating home details',
                'type' => 'error'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomeDetails $homeDetails)
    {
        //
    }
}

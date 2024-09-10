<?php

namespace App\Http\Controllers;

use App\Http\Requests\TitleSliderRequest;
use App\Models\TitleSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class TitleSliderController extends Controller
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
    public function show(TitleSlider $titleSlider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $titleSlider = TitleSlider::findOrFail($id);
        return view('titleSlider.edit', compact('titleSlider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TitleSliderRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $titleSlider = TitleSlider::findOrFail($id);
            $datos=$request->validated();
            if ($request->hasFile('image')) {

                Storage::delete('public/' . $titleSlider->imagen);

                $datos['image'] = $request->file('image')->store('uploads', 'public');
            }
            $titleSlider->update($datos);
            DB::commit();
            return redirect()->route('admin')->with([
                'message' => 'Title slider updated successfully',
                'type' => 'success'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Error updating title slider: ');
            Log::error($e);
            return redirect()->back()->withInput()->with([
                'message' => 'An error occurred',
                'type' => 'error'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TitleSlider $titleSlider)
    {
        //
    }
}

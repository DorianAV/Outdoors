<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $services = Service::busqueda($request->busqueda)->paginate(10);
        return view('admin.service', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceRequest $request)
    {
        try {
            DB::beginTransaction();
            $datos = $request->validated();
            if ($request->hasFile('image')) {
                $datos['image'] = $request->file('image')->store('uploads', 'public');
            }
            Service::create($datos);
            DB::commit();
            return redirect()->route('admin.service')->with([
                'message' => 'Service store successfully',
                'type' => 'success'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error adding service: ');
            Log::error($e);
            return redirect()->back()->withInput()->with([
                'message' => 'An error occurred',
                'type' => 'error'
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $service = Service::findOrfail($id);
        return view('services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $service = Service::findOrFail($id);
            $datos = $request->validated();
            if ($request->hasFile('image')) {

                Storage::delete('public/' . $service->imagen);

                $datos['image'] = $request->file('image')->store('uploads', 'public');
            }
            $service->update($datos);
            DB::commit();
            return redirect()->route('service.index')->with([
                'message' => 'Service updated successfully',
                'type' => 'success'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error updating service: ');
            Log::error($e);
            return redirect()->back()->withInput()->with([
                'message' => 'Error updating service',
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
            $service = Service::findOrFail($id);
            Storage::delete('public/' . $service->image);
            $service->delete();
            DB::commit();
            return redirect()->route('admin.service')->with([
                'message' => 'Service deleted successfully',
                'type' => 'success'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error deleting service: ');
            Log::error($e);
            return redirect()->back()->withInput()->with([
                'message' => 'Error deleting service',
                'type' => 'error'
            ]);
        }
    }
}

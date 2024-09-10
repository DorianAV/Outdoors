<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Mail\MessageMail;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('outdoors.contact');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MessageRequest $request)
    {
        try {
            DB::beginTransaction();
            $datos = $request->validated();
            Message::create($datos);
            DB::commit();
            return redirect()->route('message.index')->with([
                'message' => 'Message sent successfully',
                'type' => 'success'
            ]);

        }
        catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error al enviar un mensaje: ', $e->getMessage());
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
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }
}

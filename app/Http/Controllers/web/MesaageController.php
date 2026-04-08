<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Message\StoreMessageRequest;
use App\Models\Mesaage;
use Illuminate\Http\Request;

class MesaageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
               $messages=Mesaage::all();
               return view('mesaages.index',compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mesaages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMessageRequest $request)
    {
        $data=$request->validated();
        Mesaage::create($data);
        return redirect()->route('messages.index')->with('success', 'تم إرسال رسالتك بنجاح!');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mesaage $message)
    {
        $message->delete();
        return redirect()->route('messages.index')->with('success', 'تم حذف الرسالة بنجاح!');
    }
}

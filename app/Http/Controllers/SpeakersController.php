<?php

namespace App\Http\Controllers;

use App\Models\Speakers;
use App\Http\Requests\StoreSpeakersRequest;
use App\Http\Requests\UpdateSpeakersRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SpeakersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $speakers = Speakers::latest()->paginate(10);
        return view('speakers.index', compact('speakers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('speakers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSpeakersRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('speakers', 'public');
        }

        Speakers::create($data);

        return redirect()->route('speakers.index')->with('success', 'Speaker created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Speakers $speaker)
    {
        return view('speakers.show', compact('speaker'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Speakers $speaker)
    {
        return view('speakers.edit', compact('speaker'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSpeakersRequest $request, Speakers $speaker)
    {
        $data = $request->validated();

        if ($request->hasFile('foto')) {
            if ($speaker->foto) {
                Storage::disk('public')->delete($speaker->foto);
            }
            $data['foto'] = $request->file('foto')->store('speakers', 'public');
        }

        $speaker->update($data);

        return redirect()->route('speakers.index')->with('success', 'Speaker updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Speakers $speaker)
    {
        if ($speaker->foto) {
            Storage::disk('public')->delete($speaker->foto);
        }
        $speaker->delete();
        return redirect()->route('speakers.index')->with('success', 'Speaker deleted.');
    }
}

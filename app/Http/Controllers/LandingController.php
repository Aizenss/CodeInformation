<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $primary = News::where('status', 'active')->get();
        $latest = News::where('status', 'passive')->latest()->limit(4)->get();
        $other = News::where('status', 'passive')->latest()->skip(4)->take(PHP_INT_MAX)->get();

        return view('LandingPage', compact('primary', 'latest', 'other'));
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
    public function show($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        $other = News::where('status', 'passive')->where('id', '!=', $news->id)->inRandomOrder()->limit(4)->get();
        return view('DetailNews', compact('news', 'other'));
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
    public function destroy(string $id)
    {
        //
    }
}

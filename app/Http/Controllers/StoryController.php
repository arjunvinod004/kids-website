<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index()
    {
        $stories = Story::all();
        return view('admin.stories.index', compact('stories'));
    }

    public function create()
    {
        return view('admin.stories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'title_ml' => 'nullable|string',
            'content' => 'required',
            'content_ml' => 'nullable|string',
            'age_group' => 'required|in:3-5,6-9,10-14',
        ]);

        Story::create($request->only(['title', 'title_ml', 'content', 'content_ml', 'age_group']));

        return redirect()->route('admin.stories.index')->with('success', 'Story created successfully.');
    }

    public function edit(Story $story)
    {
        return view('admin.stories.edit', compact('story'));
    }

    public function update(Request $request, Story $story)
    {
        $request->validate([
            'title' => 'required',
            'title_ml' => 'nullable|string',
            'content' => 'required',
            'content_ml' => 'nullable|string',
            'age_group' => 'required|in:3-5,6-9,10-14',
        ]);

        $story->update($request->only(['title', 'title_ml', 'content', 'content_ml', 'age_group']));

        return redirect()->route('admin.stories.index')->with('success', 'Story updated successfully.');
    }

    public function publicIndex()
    {
        $stories = Story::all();
        return view('stories.index', compact('stories'));
    }

    public function show(Story $story)
    {
        return view('stories.show', compact('story'));
    }

    public function destroy(Story $story)
    {
        $story->delete();
        return redirect()->route('admin.stories.index')->with('success', 'Story deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\AppContent;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $contents = AppContent::all();
        return view('admin.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'key' => 'required|unique:app_contents',
            'value' => 'required|json',
        ]);

        AppContent::create([
            'key' => $request->key,
            'value' => json_decode($request->value, true),
        ]);

        return redirect()->route('admin.index')->with('success', 'Content created successfully.');
    }

    public function edit(AppContent $content)
    {
        return view('admin.edit', compact('content'));
    }

    public function update(Request $request, AppContent $content)
    {
        $request->validate([
            'key' => 'required|unique:app_contents,key,' . $content->id,
            'value' => 'required|json',
        ]);

        $content->update([
            'key' => $request->key,
            'value' => json_decode($request->value, true),
        ]);

        return redirect()->route('admin.index')->with('success', 'Content updated successfully.');
    }

    public function destroy(AppContent $content)
    {
        $content->delete();
        return redirect()->route('admin.index')->with('success', 'Content deleted successfully.');
    }
}

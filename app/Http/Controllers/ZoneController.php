<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zone;

class ZoneController extends Controller
{
    public function index()
    {
        $zones = Zone::all();
        return view('Admin.pages.zones.index', compact('zones'));
    }

    public function create()
    {
        return view('Admin.pages.zones.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'zone_name' => 'required',
            'description' => 'required',
            'price_range' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $zone = new Zone();
        $zone->zone_name = $request->zone_name;
        $zone->description = $request->description;
        $zone->price_range = $request->price_range;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage'), $imageName);
            $zone->image = $imageName;
        }

        $zone->save();

        return redirect()->route('Admin.pages.zones.index')->with('success', 'Zone created successfully.');
    }

    Public function show($id)
    {
        $zone = Zone::findOrFail($id);
        return view('Admin.pages.zones.show', compact('zone'));
    }

    public function edit($id)
    {
        $zone = Zone::findOrFail($id);
        return view('Admin.pages.zones.edit', compact('zone'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'zone_name' => 'required',
            'description' => 'required',
            'price_range' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $zone = Zone::findOrFail($id);
        $zone->zone_name = $request->zone_name;
        $zone->description = $request->description;
        $zone->price_range = $request->price_range;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage'), $imageName);
            $zone->image = $imageName;
        }

        $zone->save();

        return redirect()->route('Admin.pages.zones.index')->with('success', 'Zone updated successfully.');
    }

    public function destroy($id)
    {
        $zone = Zone::findOrFail($id);
        $zone->delete();

        return redirect()->route('Admin.pages.zones.index')->with('success', 'Zone deleted successfully.');
    }

}

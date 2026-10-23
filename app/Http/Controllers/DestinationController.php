<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function home()
    {
        $featured = Destination::orderBy('id')->take(4)->get();

        return view('destinations.home', compact('featured'));
    }

    public function index(Request $request)
    {
        $regions = Destination::orderBy('region')->distinct()->pluck('region');

        $destinations = Destination::query()
            ->when($request->filled('region'), fn ($q) => $q->where('region', $request->region))
            ->orderBy('id')
            ->get();

        return view('destinations.index', [
            'destinations' => $destinations,
            'regions' => $regions,
            'selectedRegion' => $request->region,
        ]);
    }

    public function show(Destination $destination)
    {
        $others = Destination::where('id', '!=', $destination->id)->inRandomOrder()->take(3)->get();

        return view('destinations.show', compact('destination', 'others'));
    }
}

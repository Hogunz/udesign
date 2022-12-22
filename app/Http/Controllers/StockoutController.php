<?php

namespace App\Http\Controllers;

use App\Models\Stockout;
use App\Models\Receiving;
use Illuminate\Http\Request;

class StockoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $stockouts = Stockout::withTrashed()->get();
        return view('stockout.index', compact('stockouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $receivings = Receiving::all();
        return view('stockout.create', compact('receivings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Stockout::create([
            'receiving_id' => $request->receiving_id,
            'quantity' => $request->quantity,
        ]);

        $receiving = Receiving::find($request->receiving_id);
        $receiving->decrement('quantity', $request->quantity);
        return redirect()->route('stockout.index')->with('message', 'Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stockout  $stockout
     * @return \Illuminate\Http\Response
     */
    public function show(Stockout $stockout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stockout  $stockout
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stockout = Stockout::find($id);
        return view('stockout.edit', compact('stockout'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stockout  $stockout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stockout $id)
    {
        $stockout = Stockout::find($id);
        $stockout->update([
            'stockout' => $request->size,
        ]);
        return redirect()->route('stockout.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stockout  $stockout
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stockout = Stockout::find($id);
        $stockout->delete();
        return redirect()->route('stockout.index');
    }
    public function restore($id)
    {
        Stockout::withTrashed()
            ->where('id', $id)
            ->restore();
        return redirect()->route('stockout.index');
    }
}

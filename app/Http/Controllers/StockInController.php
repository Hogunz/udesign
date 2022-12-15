<?php

namespace App\Http\Controllers;

use App\Models\Receiving;
use App\Models\StockIn;
use Illuminate\Http\Request;

class StockInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stockins = Stockin::withTrashed()->get();
        return view('stockin.index', compact('stockins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $receivings = Receiving::all();
        return view('stockin.create', compact('receivings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Stockin::create([
            'receiving_id' => $request->receiving_id,
            'quantity' => $request->quantity,
        ]);

        $receiving = Receiving::find($request->receiving_id);
        $receiving->increment('quantity', $request->quantity);

        return redirect()->route('stockin.index')->with('message', 'Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StockIn  $stockIn
     * @return \Illuminate\Http\Response
     */
    public function show(StockIn $stockIn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StockIn  $stockIn
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stockin = Stockin::find($id);
        return view('stockin.edit', compact('stockin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StockIn  $stockIn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StockIn $id)
    {
        $stockin = Stockin::find($id);
        $stockin->update([
            'stockin' => $request->size,
        ]);
        return redirect()->route('stockin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StockIn  $stockIn
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stockin = Stockin::find($id);
        $stockin->delete();
        return redirect()->route('stockin.index');
    }
    public function restore($id)
    {
        Stockin::withTrashed()
            ->where('id', $id)
            ->restore();
        return redirect()->route('stockin.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Models\Category;
use App\Models\Receiving;
use Illuminate\Http\Request;

class ReceivingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $receiving = Receiving::withTrashed()->get();
        return view('receiving.index', compact('receiving'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sizes = Size::all();
        $categories = Category::all();
        return view('receiving.create', compact('categories','sizes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $receiving = Receiving::create([
            'name'=> $request->name,
            'size_id'=> $request->size,
            'category_id'=> $request->category,
            'price'=> $request->price,
    ]);
    return redirect()->route('receiving.index')->with('message','Success') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Receiving  $receiving
     * @return \Illuminate\Http\Response
     */
    public function show(Receiving $receiving)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Receiving  $receiving
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sizes = Size::all();
        $categories = Category::all();
        $receiving = Receiving::find($id);
        return view('receiving.edit', compact('receiving','sizes','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Receiving  $receiving
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $receiving = Receiving::find($id);

        $receiving->update([
            'name'=> $request->name,
            'size_id'=> $request->size,
            'category_id'=> $request->category,
            'price'=> $request->price,
        
        ]);
        return redirect()->route('receiving.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Receiving  $receiving
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $receiving = Receiving::find($id);
        $receiving->delete();
        return redirect()->route('receiving.index');
    }
    public function restore($id)
    {
        Receiving::withTrashed()
        ->where('id', $id)
        ->restore();
        return redirect()->route('receiving.index');
    }
}

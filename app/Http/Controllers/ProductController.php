<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=product::get();
        return view('tabledata',['products'=>$products]);
        // return view('tabledata');
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
        $product = new product();
        $product->name=$request->name;
        $product->detail=$request->detail;
        $product->save();

        return redirect(route('table.show'));
        }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('form');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product=product::where('id',$id)->first();
       return view('editdata',['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product=product::where('id',$id)->first();

     $product->name=$request->name;
        $product->detail=$request->detail;
        $product->save();

        return redirect(route('table.show'));
        }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product=product::where('id',$id)->first();
        $product->delete();

        return redirect(route('table.show'));


    }
}

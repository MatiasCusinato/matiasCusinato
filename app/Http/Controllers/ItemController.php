<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return view('item.index')->with('items',$items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $items = new Item();
        $items->nombre = $request->get('nombre');
        $items->tipo = $request->get('tipo');
        $items->unidad = $request->get('unidad');
        $items->cantidad = $request->get('cantidad');
        $items->costo_unidad = $request->get('costo_unidad');
        $items->costo_deManoDeObra = $request->get('costo_deManoDeObra');
        $items->Total = $request->get('Total');

        $items->save();

        return redirect('/items');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::find($id);
        return view('item.edit')->with('item',$item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Item::find($id);
        
        $item->nombre = $request->get('nombre');
        $item->tipo = $request->get('tipo');
        $item->unidad = $request->get('unidad');
        $item->cantidad = $request->get('cantidad');
        $item->costo_unidad = $request->get('costo_unidad');
        $item->costo_deManoDeObra = $request->get('costo_deManoDeObra');
        $item->Total = $request->get('Total');

        $item->save();

        return redirect('/items');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect('/items');
    }
}

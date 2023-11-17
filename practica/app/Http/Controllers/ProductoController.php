<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected static $url = "http://ejeplo.com/servicio/api.php";
    public function index(Request $request)
    {
        
        $producto = Http::get(static::$url."?tipo=bodega&&nombreBodega=". $request->input("nombreBodega"));
        $datos = $producto->json();
        return view('mostrar', compact('datos'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = Http::get(static::$url.'?tipo=codigo&&nombreBodega='. $id)->json();
        $focus=collect($producto)->firstWhere('codigo', $id);
        return view('edit', with(['producto'=>$focus]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $cantidad = $request ->input('cantidad');
        $bodega = $request ->input('codigoBod');
        $producto = $request ->input('codigoProducto');

        $data = [
            'cantidad'=> $cantidad,
            'codigoBod'=> $bodega,
            'codigoProducto'=> $producto,
        ];
        Http::asForm()->put(static::$url, $data);
        return redirect("/productos");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

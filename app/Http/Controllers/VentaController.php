<?php

namespace App\Http\Controllers;

use Facade\Ignition\ErrorPage\Renderer;
use Illuminate\Http\Request;
use App\Models\Venta;

class VentaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarioEmail = auth()->user()->email;
        $ventas = Venta::where('usuario', $usuarioEmail)->paginate(5);
        $registrosUsuario = Venta::query()->select(['cantidad', 'precio']) -> where('usuario', $usuarioEmail)->get();
        $totalr=0;
        foreach ($registrosUsuario as $registro ) {
            $totalr += $registro->precio * $registro->cantidad;
        }
        return view('ventas.lista', compact('ventas','totalr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ventas.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $venta = new Venta();
        $venta->producto = $request->producto;
        $venta->descripcion = $request->descripcion;
        $venta->precio = $request->precio;
        $venta->cantidad = $request->cantidad;              
        $venta->usuario = auth()->user()->email;
        $venta->save();

        return back()->with('mensaje', 'Venta agregada!');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $venta = new Venta();
        $venta->usuario = auth()->user()->email;
        $venta = Venta::findOrFail($id);
        return view('ventas.edit', compact('venta'));
     
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
        $venta = new Venta();
        $datosVenta= request()->except(['_token','_method']);
        Venta::where('id' , '=',$id)->update($datosVenta);
        $venta = Venta::findOrFail($id);
        return back()->with('mensaje', 'Venta Editada exitosamente!');
        return view('ventas.edit', compact('venta'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $venta = new Venta();
        $venta->usuario = auth()->user()->email;
        $venta = Venta::find($id);
        $venta->delete();
        return back()->with('mensaje', 'Venta Eliminada!');
    }
}

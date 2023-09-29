<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProducto;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){

        $productos = Producto::orderBy('id', 'desc')->paginate();

        //dd($productos);
        return view('productos.index', compact('productos'));
    }

    public function create(){
        return view('productos.create');

    }

    public function store(StoreProducto $request){

        
        $producto = new Producto();

        // $producto->name = $request->input('name');
        // $producto->description = $request->input('description');
        // $producto->category = $request->input('category');

        // $producto->save();

        $producto = Producto::create([request()->all()]);

        return redirect()->route('productos.index', $producto);
    }

    public function show(Producto $producto){
        return view('productos.show', ['producto' => $producto]);
    }

    public function edit(Producto $producto){
        return view('productos.edit', ['producto' => $producto]);
    }

    public function update(StoreProducto $request, Producto $producto){
        
        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required'|'min:5',
        //     'category'=>'required'
        // ]);
        
        // $producto->name = $request->input('name');
        // $producto->description = $request->input('description');
        // $producto->category = $request->input('category');  
        
        // $producto->save();

        $producto->update($request->all());

        return redirect()->route('productos.show', $producto);
    }

    public function destroy(Producto $producto){
        $producto->delete();

        return redirect()->route('productos.index');
    }
}

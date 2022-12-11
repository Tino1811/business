<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // almacenar todos los productos en la variable $products
        $products = Product::orderBy('id', 'desc')->paginate();
        // Aqui abajo visualizo el json en el navegador de mi base de datos
        // return $products; 


        // return view('products.index');
        //Con el compact puedo utilizar mi variable almacenada $products en mi vista index
        return view('admin.products.index', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Validacion
        $this->validate($request, [
            'name_product' => 'required',
            'precio_product' => 'required',
            'stock_product' => '',
            'peso_product' => '',
            'description_product' => '',
            'image_product' => '',
        ]);


        $product = new Product();


        // GUARDADO DE IMAGENES CON EL METODO If
        if  ( $request->hasFile('image_product') ) {
            // crear variable file donde se va la imagen en la base de datos
            $file = $request->file('image_product');
            // carpeta de destino donde se van a guardar las imagenes 
            $destinationPath = 'img/products/';
            // describimos el nombre del archivo con tiempo para que no se repita y sea diferente
            $filename = time() . '-' . $file->getClientOriginalName();
            // subimos el archivo moviendo la carpeta de destino ($destinationPath) y el nombre de archivo ($filename) con el reques del archivo que iniciamos
            $uploadSucces = $request->file('image_product')->move($destinationPath, $filename);

            // Guardar la imagen en la base de datos con la carpeta de destino y el nombre del archivo
            $product->image_product = $destinationPath . $filename;
        }
        
        $product->name_product = $request->name_product;
        $product->precio_product = $request->precio_product;
        $product->stock_product = $request->stock_product;
        $product->peso_product = $request->peso_product;
        $product->description_product = $request->description_product;

        // 1. hacer un return para revisar si envia los datos, luego se puede guardar
        // return $product;

        $product->save();

        return redirect()->route('admin.products.show', $product->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        $product->name_product = $request->name_product;
        $product->precio_product = $request->precio_product;
        $product->stock_product = $request->stock_product;
        $product->peso_product = $request->peso_product;
        $product->description_product = $request->description_product;

        $product->save();
        return redirect()->route('admin.products.show', $product->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.products.index');
    }
}

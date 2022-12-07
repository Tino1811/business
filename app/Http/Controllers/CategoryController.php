<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->paginate();
        // $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Category $category)
    {
        // 1. Consulta de datos por todo o por unidad 
        // dd($request);
        // dd($request->get('lastname'));
        

        // 2. Validacion
        $this->validate($request, [
            'name_category' => 'required',
            // 'slug_category' => 'unique:categories',
            'slug_category' => '',
            'description_category' => 'required',

        ]);
        

        // 3. El id no se ingresa en el arreglo por que es autoincrementable y no es necesario

        // 4. La clase Hash::make se utiliza para hashear los passwords
        // Category::create([
        //     'name_category' =>($request->name_category),
        //     'slug_category' =>($request->slug_category),
        //     'description_category' =>($request->description_category),
        // ]);

        // 4.1 Creamos la categoria para que redireccione el metodo edit arriba en el punto 4 solo crea y redirecciona
        $category = Category::create($request->all());

        // 5. Redireccionar
        return redirect()->route('admin.categories.index', $category)->with('info', 'La categoría se creó con éxito');

        // return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name_category' => 'required',
            // 'slug_category' => "unique:categories",slug,$category->id,
            'slug_category' => '',
            'description_category' => 'required',

        ]);

        $category->update($request->all());

        return redirect()->route('admin.categories.index', $category)->with('info', 'La categoría se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index');
    }
}

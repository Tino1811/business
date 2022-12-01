<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 1. Consulta de datos por todo o por unidad 
        // dd($request);
        // dd($request->get('lastname'));
        

        // 2. Validacion
        $this->validate($request, [
            'first_name' => 'required',
            'middle_name' => 'required',
            'lastname' => 'required',
            'mother_lastname' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed|min:10',
        ]);
        

        // 3. El id no se ingresa en el arreglo por que es autoincrementable y no es necesario
        // 4. La clase Hash::make se utiliza para hashear los passwords
        User::create([
            'first_name' => Str::upper($request->first_name),
            'middle_name' => Str::upper($request->middle_name),
            'lastname' => Str::upper($request->lastname),
            'mother_lastname' => Str::upper($request->mother_lastname),
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        // 6. Autenticar al usuario una vez creda su cuenta
    /*
        auth()->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);
    */

        // 6.1 Otra forma de autenticar
        auth()->attempt($request->only('email', 'password')); 



        // 5. Redireccionar
        return redirect()->route('post.index');
        
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

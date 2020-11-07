<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct(Request $request)
    {
        //Aplica para todos
        // $this->middleware('auth');

        //aplica para os informandos
        // $this->middleware('auth')->only([
        //     'create', 
        //     'storage'
        // ]);

        //aplicado em todos menos nos informados
        // $this->middleware('auth')->except([
        //     'index',
        //     'show',
        //     'create'
        // ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['teste'] = 123; 
        $data['teste2'] = 'testando condicionais!!'; 
        $data['teste3'] = [1,2,3,4,5,6]; 
        $data['products'] = ['TV','Geladeira','Forno','Sofá'];
        return view('admin.pages.products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUpdateProductRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateProductRequest $request)
    {
        // $request->validate([
        //     'name' => 'required|min:3|max:255',
        //     'description' => 'nullable|min:3|max:10000',
        //     'photo' => 'required|image',
        // ]);

         dd('ok');


    //    dd($request->all());
    //    dd($request->only(['name','description']));
    //    dd($request-> name));
    //    dd($request->has(name)));
    //    dd($request->input(name)));
    // dd(request->except('name', 'description')); //ignora campo
        // dd($request->file('photo')->isValid());

        if($request->file('photo')->isValid()){
            // dd($request->photo->extension()); //pegar extensão
            // dd($request->photo->getClientOriginalName()); //pegar nome original
            // dd($request->file('photo')->store('products/teste')); //uplaod simples
            $nameFile = $request->name.'.'.$request->photo->extension();
            dd($request->file('photo')->storeAs('products/teste',$nameFile)); //upload de arquivo e renomeando o arquivo
        }




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
        return view('admin.pages.products.edit', compact('id'));
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
        dd('alterando..');
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

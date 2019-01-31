<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticiasList = DB::table('noticias')->get();
        return view('noticia.index', compact('noticiasList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Guardamos el mensaje
        DB::table('noticias')->insert([
            "TITULO" => $request->input('titulo'),
            "SUBTITULO" => $request->input('subtitulo'),
            "RESENA" => $request->input('resena'),
            "DESCRIPCION" => $request->input('descripcion'),
            "FECHA_C" => Carbon::now(),
            "FECHA_M" => Carbon::now(),
            "ID_TIPO_NOTICIA" => $request->input('id_tipo_noticia'),
            "ID_PERFIL" => $request->input('id_perfil')
        ]);

        //Retornamos la tabla
        return redirect('hola');
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

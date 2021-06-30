<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\mdatosempresa;
use Illuminate\Support\Facades\Storage;
use PharIo\Manifest\Url;
use Symfony\Component\HttpKernel\HttpCache\Store;

use function PHPUnit\Framework\returnValue;

class DatosEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datosempresa = mdatosempresa::all();
        return view('homecrud.index')->with('datosempresa', $datosempresa);
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
        $request->validate([
            'file' => 'required|image|max:2048'
        ]);

        $imagen = $request->file('file');
        $nombre = $imagen->getClientOriginalName();
        Storage::disk('public/imagenes')->put($nombre,  \App\Models\mdatosempresa::get($imagen));



        /* $imagen = $request->file('file')->store('public/imagenes');
        $url = Storage::url($imagen); */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datoempresa = mdatosempresa::find($id);
        return view('homecrud.edit')->with('datoempresa', $datoempresa);
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

        //validaciones para que solo se pueda subir una imagen 
        $request->validate([
            'file' => 'image|max:2048'
        ]);


        if ($request->hasFile('file')) {

            $imagen = $request->file('file');  //Solicitar archivo
            $nombre = $imagen->getClientOriginalName(); // Solicitar Nombre
            $imagen->move(public_path("images"), $nombre); // Mover imagen a carpeta   


            $datoempresa = mdatosempresa::find($id);
            $datoempresa->descripcion = $request->get('descripcion');
            $datoempresa->mision = $request->get('mision');
            $datoempresa->vision = $request->get('vision');
            $datoempresa->slogan = $request->get('slogan');
            $datoempresa->imagenbanner = $nombre; //Guardar solo el nombre de la imagen
            $datoempresa->url_curriculum = $request->get('url_curriculum');
            $datoempresa->icon_mision = $request->get('icon_mision');
            $datoempresa->icon_vision = $request->get('icon_vision');
            $datoempresa->save();
            return redirect('/datosempresa');
        } else {
            $datoempresa = mdatosempresa::find($id);
            $datoempresa->descripcion = $request->get('descripcion');
            $datoempresa->mision = $request->get('mision');
            $datoempresa->vision = $request->get('vision');
            $datoempresa->slogan = $request->get('slogan');
            $datoempresa->url_curriculum = $request->get('url_curriculum');
            $datoempresa->icon_mision = $request->get('icon_mision');
            $datoempresa->icon_vision = $request->get('icon_vision');
            $datoempresa->save();
            return redirect('/datosempresa');
        }
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

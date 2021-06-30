<?php

namespace App\Http\Controllers;

use App\Models\mdatosempresa;
use App\Models\mnosotros;
use App\Models\mbannernosotros;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $banner = mbannernosotros::paginate();

        $datos1 = mdatosempresa::all();
        $datos2 = mnosotros::find(1);
        $datosimg = mnosotros::find(1);

        return view('about', compact('datos1', 'datos2', 'datosimg', 'banner'));
    }
}

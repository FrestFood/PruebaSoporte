<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panel;

class PanelController extends Controller
{
    public function iniciar(Request $request)
    {

        $panel = Panel::iniciar();

        if($panel) {
            return response()->json(["panel" => $panel]);
        } else {
            $error = "Hay un problema al inicilizar el panel";
            return response()->json(["error" => $error], 507);
        }

    }
}

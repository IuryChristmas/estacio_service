<?php
/**
 * Created by PhpStorm.
 * User: christmas
 * Date: 30/07/18
 * Time: 22:43
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Plano;
use Illuminate\Http\Request;

class CotacaoController extends Controller
{
    public function index()
    {
        return view('cotacao.form');
    }

    public function cotar(Request $request)
    {
        $plano = new Plano();
        $response = $plano->identificarPlanos($request);

        return response()->json($response);
    }
}
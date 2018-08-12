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
use App\Solicitacao;
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

    public function solicitarPlano(Request $request)
    {
        try {
            $solicitar = new Solicitacao();
            $solicitar->salvarSolicitacao($request);

            return response()->json(array('status' => 'ok'));
        } catch (\Exception $e) {
            return response()->json(array('status' => $e->getMessage()));
        }
    }
}
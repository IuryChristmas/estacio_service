<?php
/**
 * Created by PhpStorm.
 * User: christmas
 * Date: 30/07/18
 * Time: 22:43
 */

namespace App\Http\Controllers;


class CotacaoController extends Controller
{
    public function index()
    {
        return view('cotacao.form');
    }
}
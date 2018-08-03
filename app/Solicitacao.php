<?php
/**
 * Created by PhpStorm.
 * User: christmas
 * Date: 02/08/18
 * Time: 22:28
 */

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    protected $table = 'solicitacoes';
    protected $primaryKey = 'id_solicitacao';

    public function salvarSolicitacao($dados)
    {
        DB::table('solicitacoes')->insert([
            'nome' => $dados->nome_cliente,
            'email' => $dados->email_cliente,
            'telefone' => $dados->telefone_cliente,
            'idade'    => $dados->idade_cliente,
            'plano'    => $dados->plano,
        ]);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: christmas
 * Date: 31/07/18
 * Time: 21:24
 */

namespace App;


class Plano
{
    public function identificarPlanos($dados)
    {
        if($dados->faixa_etaria === 'plano_um'){
            return [
                'plano' => [
                    'faixa_etaria' => '16~20 anos',
                    'basico' => [
                        'nome'  => 'Plano Simples',
                        'valor' => '80,00'
                    ],
                    'plus' => [
                        'nome'  => 'Plano Plus',
                        'valor' => '110,00',
                    ],
                    'ultra' => [
                        'nome'  => 'Plano Ultra',
                        'valor' => '140,00',
                    ],
                ]
            ];
        }elseif($dados->faixa_etaria === 'plano_dois'){
            return [
                'plano' => [
                    'faixa_etaria' => '21~30 anos',
                    'basico' => [
                        'nome'  => 'Plano Simples',
                        'valor' => '110,00'
                    ],
                    'plus' => [
                        'nome'  => 'Plano Plus',
                        'valor' => '140,00',
                    ],
                    'ultra' => [
                        'nome'  => 'Plano Ultra',
                        'valor' => '170,00',
                    ],
                ]
            ];
        }elseif($dados->faixa_etaria === 'plano_tres'){
            return [
                'plano' => [
                    'faixa_etaria' => '31~40 anos',
                    'basico' => [
                        'nome'  => 'Plano Simples',
                        'valor' => '140,00'
                    ],
                    'plus' => [
                        'nome'  => 'Plano Plus',
                        'valor' => '170,00',
                    ],
                    'ultra' => [
                        'nome'  => 'Plano Ultra',
                        'valor' => '200,00',
                    ],
                ]
            ];
        }elseif($dados->faixa_etaria === 'plano_quatro'){
            return [
                'plano' => [
                    'faixa_etaria' => '41~50 anos',
                    'basico' => [
                        'nome'  => 'Plano Simples',
                        'valor' => '170,00'
                    ],
                    'plus' => [
                        'nome'  => 'Plano Plus',
                        'valor' => '200,00',
                    ],
                    'ultra' => [
                        'nome'  => 'Plano Ultra',
                        'valor' => '230,00',
                    ],
                ]
            ];
        }
    }
}
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form id="cotacao_form" action="" method="post" >
                            <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input name="nome" id="nome" class="form-control" placeholder="Digitar Nome" />
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Digitar E-mail" />
                            </div>

                            <div class="form-group">
                                <label for="faixa_etaria">Faixa Etária</label>
                                <select class="form-control" name="faixa_etaria" id="faixa_etaria" onchange="liberarCotacao()">
                                    <option value="">Escolha sua faixa etária</option>
                                    <option value="plano_um">16-20 anos</option>
                                    <option value="plano_dois">21-30 anos</option>
                                    <option value="plano_tres">31-40 anos</option>
                                    <option value="plano_quatro">41-50 anos</option>
                                </select>
                            </div>

                            <button id="cotacao" type="button" class="btn btn-info" disabled>Fazer Cotação</button>
                        </form>


                        <div id="table-cotacao" style="display:none">
                            <h4>Cotação para os planos mais indicados</h4>
                            <table class="table table-bordered" >
                                <thead>
                                <tr>
                                    <th>Faixa Etária</th>
                                    <th>Plano</th>
                                    <th>Valor</th>
                                    <th>Adquira</th>
                                </tr>
                                </thead>
                                <tbody class="cotacoes">
                                </tbody>
                            </table>
                        </div>


                        <div id="table-historico" style="display:none">
                            <h3>Você será atendido em breve pelo <span id="vendedor"></span>, o e-mail de contato do vendedor é o
                            <span id="email_vendedor"></span>! Obrigado!</h3>

                            <h4>Histórico de atendimentos</h4>
                            <table class="table table-bordered" >
                                <thead>
                                <tr>
                                    <th>Data e Hora</th>
                                    <th>Nome do cliente</th>
                                    <th>Seguradora</th>
                                    <th>Valor</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

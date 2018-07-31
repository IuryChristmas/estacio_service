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
                                <label for="marca">Planos</label>
                                <select class="form-control" name="marca" id="marca">
                                    <option value="fiat">Plano 1</option>
                                    <option value="peugeot">Plano 2</option>
                                    <option value="chevrolet">Plano 3</option>
                                    <option value="troller">Plano 4</option>
                                </select>
                            </div>

                            <button id="cotacao" type="button" class="btn btn-info">Fazer Cotação</button>
                        </form>


                        <div id="table-cotacao" style="display:none">
                            <h4>Cotação para os planos <span id="marca_veiculo"></span></h4>
                            <table class="table table-bordered" >
                                <thead>
                                <tr>
                                    <th>Faixa Etária</th>
                                    <th>Valor</th>
                                    <th>Adquira</th>
                                </tr>
                                </thead>
                                <tbody>
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

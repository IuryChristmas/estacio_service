<div id="model_plano" class="modal fade model_plano" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Cadastre seus dados para que um de nossos consultores possa entrar em contato com você!</h4>

                <button type="button" class="close" data-dismiss="modal" id="close_unidade"><span
                            aria-hidden="true"><i class="icon icon-close"></i>X</span></button>
            </div>

            <div class="modal-body">

                <div class="inner-fields">
                    <form id="adquirir_plano_form">
                        <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" id="id_regra" name="id_regra" value=""/>
                        <div class="line-fields">
                            <div class="field">
                                <label for="nome_cliente">Nome: </label>
                                <div class="value">
                                    <input type="text" name="nome_cliente" id="nome_cliente" />
                                </div>
                            </div>
                            <div class="field">
                                <label for="email_cliente">E-mail: </label>
                                <div class="value">
                                    <input type="email" name="email_cliente" id="email_cliente" />
                                </div>
                            </div>
                            <div class="field">
                                <label for="telefone_cliente">Telefone: </label>
                                <div class="value">
                                    <input type="text" name="telefone_cliente" id="telefone_cliente" />
                                </div>
                            </div>
                            <div class="field">
                                <label for="idade_cliente">Idade: </label>
                                <div class="value">
                                    <input type="text" name="idade_cliente" id="idade_cliente" />
                                </div>
                            </div>
                        </div>

                        <div class="buttons">

                            <button id="salvar_modelo" type="button" data-dismiss="modal" class="btn btn-primary">
                                Salvar
                            </button>

                        </div>
                    </form>

                </div>

            </div>

        </div>
    </div>
</div>
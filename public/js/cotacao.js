function liberarCotacao() {
    var buttonCotacao = document.getElementById('cotacao');
    buttonCotacao.disabled = true;
    if(document.getElementById('faixa_etaria').value !== ''){
        buttonCotacao.disabled = false;
    }
}

$(document).ready(function() {
    $('#cotacao').click(function() {
        var dados = $('#cotacao_form').serialize();
        $.ajax({
            type: 'post',
            dataType: 'json',
            url: "/cotacao/cotar",
            async: true,
            data: dados,
            success: function(response) {
                $('.cotacoes').html("");
                $(response.plano).each(function (key, value) {
                    var cols = "<tr id='um'>";
                    cols += "<td scope='row'>"+value.faixa_etaria+"</td>";
                    cols += "<td>"+ value.basico.nome +"<input id='basico' type='hidden' value='"+value.basico.nome+"' /></td>";
                    cols += "<td>"+ value.basico.valor +"</td>";
                    cols += "<td><button type='button' class='adquirir_plano' data-target=\"#model_plano\" data-toggle=\"modal\">Adquira já o seu</button></td>";
                    cols += "</tr>";

                    cols += "<tr id='dois'>";
                    cols += "<td scope='row'>"+value.faixa_etaria+"</td>";
                    cols += "<td>"+ value.plus.nome +"<input id='basico' type='hidden' value='"+value.plus.nome+"' /></td>";
                    cols += "<td>"+ value.plus.valor +"</td>";
                    cols += "<td><button type='button' class='adquirir_plano' data-target=\"#model_plano\" data-toggle=\"modal\">Adquira já o seu</button></td>";
                    cols += "</tr>";

                    cols += "<tr id='tres'>";
                    cols += "<td scope='row'>"+value.faixa_etaria+"</td>";
                    cols += "<td>"+ value.ultra.nome +"<input id='basico' type='hidden' value='"+value.ultra.nome+"' /></td>";
                    cols += "<td>"+ value.ultra.valor +"</td>";
                    cols += "<td><button type='button' class='adquirir_plano' data-target=\"#model_plano\" data-toggle=\"modal\">Adquira já o seu</button></td>";
                    cols += "</tr>";
                    $('.cotacoes').append(cols);
                });

                $("#nome_cliente").val($("#nome").val());
                $("#email_cliente").val($("#email").val());

                $('#table-cotacao').css('display', 'block');
            }
        });
    });
});
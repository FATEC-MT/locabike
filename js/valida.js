
//VALIDA DE É CPF OU CNPJ
var options = {
    onKeyPress: function (cpf, ev, el, op) {
        var masks = ['000.000.000-00', '00.000.000/0000-00'],
            mask = (cpf.length > 14) ? masks[1] : masks[0];
        el.mask(mask, op);
    }
}

$('.cpfOuCnpj').mask('000.000.000-000', options);

// VALIDA SE EMAIL É VALIDO

$(document).ready(function(){

    $("#form1").submit(function(){

        var email = $("#email").val();

        if(email != "")

        {
            var filtro = /^([w-]+(?:.[w-]+)*)@((?:[w-]+.)*w[w-]{0,66}).([a-z]{2,6}(?:.[a-z]{2})?)$/i;
            if(filtro.test(email))  
            { 
                alert("Este endereço de email é válido!");
                return true;
            } else {
                alert("Este endereço de email não é válido!");
                return false;
            }
        } else {
            alert('Digite um email!'); return false;
        }
    });
});

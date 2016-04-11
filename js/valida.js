$( document ).ready(function() {

    $('#form-login').submit(function(){ 	//Ao submeter formulário
        var dados = $( '#form-login' ).serialize();
        $.ajax({			//Função AJAX
            url:"../private/services.php",			//Arquivo php
            type:"POST",				//Método de envio
            data: dados,	//Dados
            success: function (data){			//Sucesso no AJAX
                if(data == 0)
                    $('#users').show();
                else if(data == 1)
                    window.location = 'inicio.php';
            }
        });
        return false;	//Evita que a página seja atualizada
    });
    $('#form-cad').submit(function(){ 	//Ao submeter formulário
        var dados = $( '#form-cad' ).serialize();
        $.ajax({			//Função AJAX
            url:"cadastrar.php",			//Arquivo php
            type:"POST",				//Método de envio
            data: dados,	//Dados
            success: function (data){			//Sucesso no AJAX
                //alert(data);
                $('#modal1  p').append( data);
                $('#modal1').openModal();
                $('#form-cad').each (function(){
                    this.reset();
                });
            }
        });
        return false;	//Evita que a página seja atualizada
    });

});
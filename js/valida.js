$( document ).ready(function() {

    $('#form-login').submit(function(){ 	//Ao submeter formulário
        var dados = $( '#form-login' ).serialize();
        $.ajax({			//Função AJAX
            url:"../private/verificar-login.php",			//Arquivo php
            type:"POST",				//Método de envio
            data: dados,	//Dados
            success: function (data){			//Sucesso no AJAX
                if(data == 0)
                    $('#users').show();
                else if(data == 1)
                    window.location = '../private/buscar.php';
            }
        });
        return false;	//Evita que a página seja atualizada
    });
    $('#form-cad').submit(function(){ 	//Ao submeter formulário
        var dados = $( '#form-cad' ).serialize();
        $.ajax({			//Função AJAX
            url:"../private/cadastrar.php",			//Arquivo php
            type:"POST",				//Método de envio
            data: dados,	//Dados
            success: function (data){			//Sucesso no AJAX
                //alert(data);
                if(data==1){
                    $('#modal1  p').append( data);
                    $('#modal1').openModal();
                    $('#form-cad').each (function(){
                        this.reset();
                    });
                }else if(data == 0){

                }

            }
        });
        return false;	//Evita que a página seja atualizada
    });

});
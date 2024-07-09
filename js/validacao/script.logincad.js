$(document).ready(function(){
    $('#email').click(
        function(){
            if($(this).val()=="name@example.com"){
                $(this).val('');
            }
        });

    $('#senha').click(
        function(){
            if($(this).val()=="senha"){
                $(this).val('');
            }
        });

    $('#nome').click(
            function(){
                if($(this).val()=="nome"){
                    $(this).val('');
                }
            });

    $('.verSenha').click(
        function(){
            let entrada = document.querySelector('#senha');
            if(entrada.getAttribute('type') == 'password'){
                entrada.setAttribute('type', 'text');
            } else {
                entrada.setAttribute('type', 'password');
            }
        }); 

   $('#botaoLogar').click(
        function(){
            if($('#email').val()=='' || $('#email').val()=="name@example.com"){
                document.getElementById("email").style.borderColor = "red";

                  } else if ($('#senha').val()=='' || $('#senha').val()=="senha"){
                    document.getElementById("email").style.borderColor = "#dddddd";
                    document.getElementById("senha").style.borderColor = "red";
                 
                        } else{
                        // alert("Dados recebidos");
                        //$.get("conexao.php", function(retornaConexao){
                        //   console.log(retornaConexao);
                        // });
                        
                            let dados;
                            dados={
                                email:$('#email').val(),senha:$('#senha').val()
                            };
                            
                            $.post("funcionais/login.php",dados,function(retornaUsuario){
                                
                                
                                if(retornaUsuario=="Não encontrado") {
                                    alert("Email e senha invalida");
                                    document.getElementById("email").style.borderColor = "red";
                                    document.getElementById("senha").style.borderColor = "red";
                                } else{
                                         
                                    window.location.replace("index.php?id="+retornaUsuario);
                                  }
                                    });
                                }
                                });

                                $('#botaoCadastra').click(
                                    function(){
                                        if($('#nome').val()=='' || $('#nome').val()=="nome"){
                                            document.getElementById("nome").style.borderColor = "red";
                                             
                                                    } else if ($('#email').val()=='' || $('#email').val()=="name@example.com"){

                                                        document.getElementById("nome").style.borderColor = "#dddddd";
                                                        document.getElementById("email").style.borderColor = "red";
                                                        document.getElementById("senha").style.borderColor = "red";

                                              }else if ($('#senha').val()=='' || $('#senha').val()=="senha"){

                                                document.getElementById("nome").style.borderColor = "#dddddd";
                                                document.getElementById("email").style.borderColor = "#dddddd";  
                                                document.getElementById("senha").style.borderColor = "red";
                                           
                                                    } else{
                                                    //alert("Dados recebidos");
                                                    //$.get("conexao.php", function(retornaConexao){
                                                    //   console.log(retornaConexao);
                                                    // });
                                                    
                                                        let dados;
                                                        dados={
                                                           nome:$('#nome').val(), email:$('#email').val(),senha:$('#senha').val()
                                                        };
                                                        
                                                        $.post("funcionais/cadastraUsuario.php",dados,function(retornaUsuario){

                                                           if( retornaUsuario == "Cadastrado com sucesso") {
                                                                alert("Usuario Cadastrado");
                                                                window.location.replace("frm_login.php");

                                                            } else{
                                                                alert("Erro no cadastro");
                                                              }
                                                                });
                                                            }
                                                            });
                                
                            });

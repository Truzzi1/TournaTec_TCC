$(document).ready(function() {
    $("#criarTorneio").click(
        
    )
});


$(document).ready(function(){
    $('#quantidade').click(
        function(){
            if($(this).val()=="quantidade"){
                $(this).val('');
            }
        });

    $('#modalidade').click(
        function(){
            if($(this).val()=="modalidade"){
                $(this).val('');
            }
        });

    $('#nome').click(
            function(){
                if($(this).val()=="nome"){
                    $(this).val('');
                };
        

                $('#botaoCriarTorneio').click(
                    function(){
                        if($('#nome').val()=='' || $('#nome').val()=="Digite o nome do torneio"){
                            document.getElementById("nome").style.borderColor = "red";
                             
                                    } else if ($('#modalidade').val()=='' || $('#modalidade').val()=="Selecione a modalidade"){

                                        document.getElementById("nome").style.borderColor = "#dddddd";
                                        document.getElementById("modalidade").style.borderColor = "red";
                                        document.getElementById("quantidade").style.borderColor = "red";

                              }else if ($('#quantidade').val()=='' || $('#quantidade').val()=="Selecione a quantidade de times"){

                                document.getElementById("nome").style.borderColor = "#dddddd";
                                document.getElementById("modalidade").style.borderColor = "#dddddd";  
                                document.getElementById("quantidade").style.borderColor = "red";
                           
                                    } else{
                                    //alert("Dados recebidos");
                                    //$.get("conexao.php", function(retornaConexao){
                                    //   console.log(retornaConexao);
                                    // });
                                    
                                        let dados;
                                        dados={
                                           nome:$('#nome').val(), modalidade:$('#modalidade').val(),quantidade:$('#quantidade').val()
                                        };
                                        
                                        $.post("funcionais/cadastraTorneio.php",dados,function(retornaTorneio){

                                           if( retornaTorneio == "Torneio criado com sucesso") {
                                                alert("Torneio Cadastrado");
                                                window.location.replace("tela_torneio.php");

                                            } else{
                                                alert("Erro no cadastro");
                                                alert(retornaTorneio);
                                              }
                                                });
                                            }
                                            });
                
            });
        });

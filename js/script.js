$(document).ready(function () {
	$('#cep').blur(//quando o campo de cep perder o foco
		function(){
			if($('#cep').val().length==0) {//se nao tiver nada digitado 
			   /*$('#alerta').modal('show');*/ //exibir a modal de nada digitado
			   let xhr = new XMLHttpRequest();
  				xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      // A função exibirAlerta() foi carregada do outro documento e agora pode ser chamada.
      /*window.alerta();*/
    }
  };
  xhr.open("GET", "../cliente/frm_cadastra_cli.php", true);
  xhr.send();
			   $("#cep").focus();
			}
			else{//se tiver um cep digitado
				
				let dados;//declaracao da variavel dados
				dados={cep:$('#cep').val()};//pegando o valor do que foi digitado e guardando em dados
				
                //chamando o arquivo pesquisaCep.php, passando o que foi armazenando em dados 
				//aguardando o retorno atraves das function que retornará as informacoes do cep 
				            				    
                $.post('pesquisaCep.php',dados,function(retornaCep){
					 //a variavel resultado recebe o que veio do pesquisaCep.php, divide 
					 //a string em pedacos e coloca em um array usando um parametro
					 //(neste caso foi a virgula)   
					   resultado = retornaCep.split(",");
					
						cidade=resultado[0]; //1º elemento do array
						rua=resultado[1];
						bairro=resultado[2];
						complemento=resultado[3];

						
						$('#cidade').val(cidade); //mandando exibir o nome da cidade no campo inputCidade do formulario
						$('#rua').val(rua);
						$('#bairro').val(bairro);
						$('#complemento').val(complemento);

					});//fim do $.post
			}//fim do else*/
 
   });//fim da function()

//dá o focus na caixa de textos do cep depois de exibida a mensagem de erro, ou seja,
//o cep nao foi digitado. 

  	
});//fim da (document).ready

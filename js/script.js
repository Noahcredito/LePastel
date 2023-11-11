$(document).ready(function () {
	$('#cep').blur(
		function(){
			if($('#cep').val().length==0) {
			   let xhr = new XMLHttpRequest();
  				xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
    
    }
  };
  xhr.open("GET", "../cliente/frm_cadastra_cli.php", true);
  xhr.send();
			   $("#cep").focus();
			}
			else{
				
				let dados;
				dados={cep:$('#cep').val()};
				            				    
                $.post('pesquisaCep.php',dados,function(retornaCep){
  
					   resultado = retornaCep.split(",");
					
						cidade=resultado[0];
						rua=resultado[1];
						bairro=resultado[2];
						complemento=resultado[3];

						
						$('#cidade').val(cidade);
						$('#rua').val(rua);
						$('#bairro').val(bairro);
						$('#complemento').val(complemento);

					});
			}
 
   });
  	
});
/*Validar os campos do formulários
Operar - soma*/
/*Aguardar que o documento esteja completo - carregado*/
function validarCampo(campo,grupo,alerta){
	console.log("validarCampo:" + campo + " " + grupo + " " + alerta);
	var valor1= parseInt($(campo).val());
	if(isNaN(valor1)){
		$(alerta).slideDown();
		$(grupo).addClass("has-error");
		$(campo).val("");      
      	$(campo).focus();
      return false;
  }

  
  $(grupo).removeClass("has-error");
  
  $(alerta).hide();
  return true;
}


$(document).ready(function(){

  console.log("Documento carregado.");

  

  $("#valor1").blur(function(){
    validarCampo("#valor1", "#grupoV1", "#alertaV1");
  });
  $("#valor2").blur(function(){
    validarCampo("#valor2", "#grupoV2", "#alertaV2");
  });


  $("button[name='calcular']").click(function(){

   

   if (validarCampo("#valor1", "#grupoV1", "#alertaV1") &&
        validarCampo("#valor2", "#grupoV2", "#alertaV2")) {
          // Operar
          var valor1 = parseInt($("#valor1").val());
          var valor2 = parseInt($("#valor2").val());

          var res = (valor1/(valor2*valor2));
          var pesoideal = (res*(valor2*valor2));

          // Apresentar o resultado
          $("input[name='res']").val(res);
          $("input[name='pesoideal']").val(pesoideal);
        }

  });

});
	
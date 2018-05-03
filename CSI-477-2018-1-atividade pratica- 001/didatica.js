$(document).ready(function(){
	$("button[name='confirmar']").click(function(){
	var checked1 = $("input[name=didatica1]:checked").val();
    var checked2 = $("input[name=didatica2]:checked").val();
    var checked3 = $("input[name=didatica3]:checked").val();
    var checke4 = $("input[name=didatica4]:checked").val();

    var score = 0;

    if (checked1 == "sabonete"){
      score+=1;
    }
    if (checked2 == "algodao"){
      score+=1;
    }
    if (checked3 == "maquina") {
      score+=1;
    }
    if (checked4 == "chave") {
      score+=1;
    }


    $("h5[name='pontuacao']").text("Pontuação: você fez " + score + " ponto(s)!");
  });
	$("h5[name='pontuacao']").text("Pontuação: ");
}
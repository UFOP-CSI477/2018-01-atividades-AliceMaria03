<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		function validar(){
			var nome= form1.nome.value;
			var rua=form1.rua.value;
			var numero=form1.numero.value;
			var bairro=form1.bairro.value;
			if (nome=""){
				alert('Prencha o campo com seu nome');
				form1.nome.focus();
				return false;
			}
			
		}
	</script>

	<title>Cadastrar</title>
</head>
<body>
<form name="form1" action="cadastrar.php" method="post">
					<div class="form-group">
						<label>Nome</label>
						<input type="text" name="nome" class="form-control">
						<label>Rua</label>
						<input type="text" name="rua" class="form-control">
						<label>Numero</label>
						<input type="number" name="numero" class="form-control">
						<label>Bairro</label>
						<input type="text" name="bairro" class="form-control">
						
						
						
					</div>
					<div class="form-group">
						<button type="submit" name="cancel" class="btn btn-danger">Cancelar</button>
						<button type="submit" onclick="return validar()">Cadastrar</button>
					</div>			
				</form>
</body>
</html>
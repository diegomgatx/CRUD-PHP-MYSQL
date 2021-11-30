<?php 

include_once '../model/Conexao.class.php';
include_once '../model/Manager.class.php';
include_once 'dependencias.php'; 

$manager = new Manager();

$id = $_POST['id'];

?>

<h2 class="text-center">
	Page of Update <i class="fa fa-user-edit"></i>
</h2><hr>

<form method="POST" action="../controller/update_client.php">
	
<div class="container">
	<div class="form-row">
		
		<?php foreach($manager->getInfo("registros", $id) as $client_info): ?>

			<div class="col-md-6">
			Nome: <i class="fa fa-user"></i>
			<input class="form-control" type="text" name="nome" required autofocus value="<?=$client_info['nome']?>"><br>
		</div>

		<div class="col-md-4">
			CPF: <i class="fa fa-address-card"></i>
			<input class="form-control" type="text" name="cpf" required id="cpf" value="<?=$client_info['cpf']?>"><br>
		</div>

		<div class="col-md-4">
			Dt. de Nascimento: <i class="fa fa-calendar"></i>
			<input class="form-control" type="date" name="aniversario" required><br>
		</div>

		<div class="col-md-6">
			Salario: <i class="fa fa-envelope"></i>
			<input class="form-control" type="int" name="salario" required id="salario" value="<?=$client_info['salario']?>"><br>
		</div>

		<div class="col-md-4">
			Telefone: <i class="fab fa-whatsapp"></i>
			<input class="form-control" type="text" name="phone" required id="telefone" value="<?=$client_info['telefone']?>"><br>
		</div>

		<div class="col-md-12">
			Endereço, Bairro, : <i class="fa fa-map"></i>
			<input class="form-control" type="text" name="endereco" required><br>
		</div>

		<div class="col-md-12">
			Produto: <i class="fa fa-map"></i>
			<input class="form-control" type="text" name="produto" required><br>
		</div>

		<div class="col-md-12">
			Preço: <i class="fa fa-map"></i>
			<input class="form-control" type="int" name="preco" required id="preco" value="<?=$client_info['preco']?>"><br>
		</div>

		<div class="col-md-4">
			
			<input type="hidden" name="id" value="<?=$client_info['id']?>">

			<?php endforeach; ?>

			<button class="btn btn-warning btn-lg">
				
				UPDATE <i class="fa fa-user-edit"></i>

			</button><br><br>

			<a href="../index.php">
				Voltar
			</a>

		</div>

	</div>
</div>

</form>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> 

<script type="text/javascript">
	$(document).ready(function()
	{
		$("#cpf").mask("000.000.000-00");
		$("#telefone").mask("(00) 0000-0000");
		$("#salario").mask("0000,00");
		$("#preco").mask("000,00");
	});
</script>
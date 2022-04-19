
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-6">
				<h1 class="text-start mt-2">Listagem dos cadastrados</h1>
			</div>
			<div class="col-6 text-end mt-5">
				<button type="button" class="btn btn-primary">Cadastrar</button>
			</div>
		</div>
	</div>
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Nome</th>
					<th scope="col">E-mail</th>
					<th scope="col">Cidade</th>
					<th scope="col">Estado</th>
					<th scope="col">Ações</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<?php
					foreach($inscritos as $inscrito){ ?>
						<th scope="row"><?php echo $inscrito['nome'] ?></th>
						<td><?php echo $inscrito['email'] ?></td>
						<td><?php echo $inscrito['cidade'] ?></td>
						<td><?php echo $inscrito['uf'] ?></td>
						<td><button type="button" class="btn btn-danger">Deletar</button>
							<button type="button" class="btn btn-secondary">Editar</button>
						</td>
					<?php } ?>
				</tr>

			</tbody>
		</table>

		<h3> Registro de Usuários </h3>	

		<?php
			echo form_open(action:"usuarios/novo");

			echo form_label(label_text:"Nome", id:"nome");

			echo form_input(array(
				"name" => "nome",
				"id" => "nome",
				"class" => "form-control",
				"maxlenght" => "255"
			)); 

			echo form_label(label_text:"E-mail", id:"email");

			echo form_input(array(
				"name" => "email",
				"id" => "email",
				"class" => "form-control",
				"maxlenght" => "255"
			)); 

			echo form_label(label_text:"Cidade", id:"cidade");

			echo form_input(array(
				"name" => "cidade",
				"id" => "cidade",
				"class" => "form-control",
				"maxlenght" => "255"
			)); 

			echo form_label(label_text:"Estado", id:"estado");

			echo form_input(array(
				"name" => "estado",
				"id" => "estado",
				"class" => "form-control",
				"maxlenght" => "255"
			)); 

			echo form_close();
			?>
	</div>
</body>
</html>
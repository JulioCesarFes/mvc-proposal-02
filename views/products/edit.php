<div class="d-flex justify-content-center align-items-center gap-3">
	<h1 class="d-inline-block">Editar Produto</h1>
	<a href="/novo-produto" class="btn btn-danger rounded-pill">Voltar</a>
</div>

<form action="/editar-produto/<?php echo $id ?>" method="post">

	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="name" placeholder="Digite o nome aqui..." class="form-control" value="<?php echo $product->name ?>">
	</div>

	<button class="btn btn-primary">Editar</button>

</form>
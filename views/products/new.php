<div class="d-flex justify-content-center align-items-center gap-3">
	<h1 class="d-inline-block">Novo Produto</h1>
	<a href="/produtos" class="btn btn-danger rounded-pill">Voltar</a>
</div>

<form action="/criar-produto" method="post">

	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="name" placeholder="Digite o nome aqui..." class="form-control">
	</div>

	<button class="btn btn-primary">Criar</button>

</form>
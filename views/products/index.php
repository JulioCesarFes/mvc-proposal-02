<div class="d-flex justify-content-center align-items-center gap-3">
	<h1 class="d-inline-block">Produtos</h1>
	<a href="/novo-produto" class="btn btn-primary rounded-pill">Novo +</a>
</div>

<?php if (!$products) { ?>
	Nenhum produto bla bla bla
<?php } else { ?>
	<table class="table">
		<thead>
			<th>id</th>
			<th>nome</th>
			<th><i class="fa-solid fa-ellipsis"></i></th>
			<th><i class="fa-solid fa-ellipsis"></i></th>
		</thead>
		<tbody>
			
			<?php foreach ($products as $product) { ?>
				
				<tr data-a="/visualizar-produto/<?php echo $product->id ?>">
					<td><?php echo $product->id ?></td>
					<td><?php echo $product->name ?></td>
					<td width=1>
						<a href="/editar-produto/<?php echo $product->id ?>" class="text-decoration-none">
							<i class="fa-solid fa-pencil"></i>
						</a>
					</td>
					<td width=1>
						<a href="/apagar-produto/<?php echo $product->id ?>" class="text-decoration-none" data-confirm="Deseja realmente apagar?">
							<i class="fa-solid fa-trash"></i>
						</a>
					</td>
				</tr>

			<?php } ?>

		</tbody>
	</table>
<?php } ?>
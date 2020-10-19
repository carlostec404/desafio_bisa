<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Contas e Movimentação</h1>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
				<a href="<?= base_url('')?>contas/add" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Conta</a>
			</div>
		</div>
	</div>

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2">Lista de Contas</h2>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Descrição da Conta</th>
					<th>Saldo</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
        <?php foreach($contas as $conta) :?>
          <tr>
            <td><?= $conta['descricao'] ?></td>
            <td><?= number_format($conta['saldo'],2,",",".") ?></td>
            <td>
			<a href="javascript:goDelete(<?= $conta['id'] ?>)"><i class=" btn fas fa-trash-alt" style="color:red;"></i></a>
				<a href="<?= base_url()?>contas/edit/<?= $conta['id'] ?>"><i class="btn fas fa-edit"></i></a>
			</td>
          </tr>
        <?php endforeach; ?>
			</tbody>
		</table>
	</div>

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2">Lista de Movimentação</h2>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Descrição</th>
					<th>Tipo da Movimentação</th>
					<th>Valor</th>
					<th>Data da Movimentação</th>
					<th>Conta Bancaria</th>
				</tr>
			</thead>
			<tbody>
				
			</tbody>
		</table>
	</div>
</main>
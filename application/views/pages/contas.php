<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Contas</h1>
		<div class="btn-group mr-2">
			<a href="<?= base_url('')?>contas/add" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Conta</a>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Descrição da Conta</th>
					<th>Saldo</th>
					<th>Ação</th>
				</tr>
			</thead>
			<tbody>
                <?php foreach($contas as $c): ?>
                    <tr>
                        <th><?= $c['descricao'] ?></th>
                        <th><?= number_format($c['saldo'],2,",",".") ?></th>
						<th>
							<a href="javascript:goDelete(<?= $c['id'] ?>)"><i class=" btn fas fa-trash-alt" style="color:red;"></i></a>
							<a href="<?= base_url()?>contas/edit/<?= $c['id'] ?>"><i class="btn fas fa-edit"></i></a>
					</th>
                    </tr>
                <?php endforeach; ?>   
			</tbody>
		</table>
	</div>
</main>


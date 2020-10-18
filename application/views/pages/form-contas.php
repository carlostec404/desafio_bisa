<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastro de Conta</h1>
      </div>

			<div class="col-md-12">
				<?php if(isset($conta)): ?>
					<form action="<?= base_url('')?>contas/update/<?= $conta['id'] ?>" method="post">
                <?php else:?>	
                <form action="<?= base_url('')?>contas/store" method="post">
                <?php endif; ?>    

					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Descrição</label>
							<input type="text" class="form-control" name="descricao" id="descricao" placeholder="Ex: Banco do Brasil" required value="<?= isset($contas) ? $contas["descricao"]: ""?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="saldo">Saldo</label>
							<input type="text" class="form-control" name="saldo" id="saldo" placeholder="Ex: 2500,00" required value="<?= isset($contas) ? $contas['saldo'] : ""?>">
						</div>
					</div>
					<div class="col-md-6">
							<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Save</button>
							<a href="<?= base_url('') ?>contas" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancel</a>
						</div>
					</div>
				</form>
			</div>

    </main>
  </div>
</div>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastro de Movimentação</h1>
      </div>

			<div class="col-md-12">
				<?php if(isset($movimentacao)): ?>
					<form action="<?= base_url()?>movimentacao/update/<?= $movimentacao['id'] ?>" method="post">
                <?php else:?>	
                <form action="<?= base_url()?>movimentacao/store" method="post">
                <?php endif; ?>    

					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Descrição</label>
							<input type="text" class="form-control" name="descricao" id="descricao" placeholder="Ex: Banco do Brasil" required value="<?= isset($movimentacao) ? $movimentacao["descricao"]: ""?>">
						</div>
                    </div>
                    <div class="col-md-6">
						<div class="form-group">
							<label for="name">Tipo de Movimentação</label>
							<input type="text" class="form-control" name="descricao" id="descricao" placeholder="Ex: Banco do Brasil" required value="<?= isset($movimentacao) ? $movimentacao["tipo_movimentacao"]: ""?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="valor">Valor</label>
							<input type="text" class="form-control" name="valor" id="valor" placeholder="Ex: 2500,00" required value="<?= isset($movimentacao) ? $movimentacao['valor'] : ""?>">
						</div>
                    </div>
                    <div class="col-md-6">
						<div class="form-group">
							<label for="name">Data da Movimentação</label>
							<input type="date" class="form-control" name="descricao" id="descricao" placeholder="Ex: Banco do Brasil" required value="<?= isset($movimentacao) ? $movimentacao["data_movimentacao"]: ""?>">
						</div>
                    </div>
                    <div class="col-md-6">
						<div class="form-group">
							<label for="name">Conta</label>
							<input type="text" class="form-control" name="descricao" id="descricao" placeholder="Ex: Banco do Brasil" required value="<?= isset($movimentacao) ? $movimentacao["conta_bancaria"]: ""?>">
						</div>
					</div>
					<div class="col-md-6">
							<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Save</button>
							<a href="<?= base_url('')?>movimentacao" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancel</a>
						</div>
					</div>
				</form>
			</div>

    </main>
  </div>
</div>
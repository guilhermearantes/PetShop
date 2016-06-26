<div class="compras form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Compra'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo __('Actions'); ?></div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">

																<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;'.__('List Compras'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;'.__('List Clientes'), array('controller' => 'clientes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('New Cliente'), array('controller' => 'clientes', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;'.__('List Produtos'), array('controller' => 'produtos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('New Produto'), array('controller' => 'produtos', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Compra', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('cliente_id', array('class' => 'form-control', 'placeholder' => 'Cliente Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('produto_id', array('class' => 'form-control', 'placeholder' => 'Produto Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('quantidade', array('class' => 'form-control', 'placeholder' => 'Quantidade'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('preco', array('class' => 'form-control', 'placeholder' => 'Preco'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('data', array('class' => 'form-control', 'placeholder' => 'Data'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>

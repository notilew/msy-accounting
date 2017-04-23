<?php require_once '../app/modules/contacts/contacts-module.php'; ?>
<?php index(); ?>

<?php include HEADER_TEMPLATE; ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Contatos</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Contato</a>
	    	<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<?php if (! empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<hr>

<table class="table table-hover">
  <thead>
    <tr>
      <th>Código</th>
      <th width="30%">Nome</th>
      <th>E-mail</th>
      <th>Comentário</th>
    </tr>
  </thead>

  <tbody>
    <?php if ($contacts) : ?>
      <?php foreach ($contacts as $contact) : ?>
        <tr>
          <td><?php echo $contact['id']; ?></td>
          <td><?php echo $contact['name']; ?></td>
          <td><?php echo $contact['email']; ?></td>
          <td><?php echo $contact['comment']; ?></td>
        </tr>
      <?php endforeach; ?>
    <?php endif; ?>
  </tbody>
</table>

<?php include FOOTER_TEMPLATE; ?>

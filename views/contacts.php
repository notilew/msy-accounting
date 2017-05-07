<?php require_once '../app/modules/contacts/contacts-module.php'; ?>
<?php index(); ?>

<?php include HEADER_TEMPLATE; ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Contatos</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="<?php echo BASE_URL; ?>views/register.php"><i class="fa fa-plus"></i> Novo Contato</a>
	    	<a class="btn btn-default" href="contacts.php"><i class="fa fa-refresh"></i> Atualizar</a>
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
      <th class="text-center">Código</th>
			<th class="text-center">Criado</th>
      <th class="text-center" width="20%">Nome</th>
      <th class="text-center">Email</th>
			<th class="text-center">Modificado</th>
			<th class="text-center">Opções</th>
    </tr>
  </thead>

  <tbody>
    <?php if ($contacts) : ?>

      <?php foreach ($contacts as $contact) : ?>
        <tr>
          <td><?php echo $contact['id']; ?></td>
          <td><?php echo $contact['created']; ?></td>
          <td class="text-center"><?php echo $contact['name']; ?></td>
          <td><?php echo $contact['email']; ?></td>
					<td><?php echo $contact['modified']; ?></td>
					<td class="actions text-right">
						<a href="view.php?id=<?php echo $contact['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
						<a href="edit.php?id=<?php echo $contact['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
						<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $contact['id']; ?>">
							<i class="fa fa-trash"></i> Excluir
						</a>
					</td>
        </tr>
      <?php endforeach; ?>

		<?php else : ?>
			<tr>
				<td colspan="6">Nenhum Registro Encontrado!</td>
			</tr>

    <?php endif; ?>
  </tbody>
</table>

<?php include FOOTER_TEMPLATE; ?>

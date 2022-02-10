<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?> ">

   
  </head>
  <body>
  <div class="container">
	<div class="page-header">
		<h1>Paginação de Resultados com CodeIgniter e Bootstrap</h1>
	</div>
	<div class="row">
		<div class="col-md-12">
			<?php if($post): ?>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <th>#</th>
            <th>Titulo</th>
            <th>Descricao</th>
          </thead>
          <tbody>
            <?php foreach($post as $p): ?>
            <tr>
              <td><?=$p->post_id?></td>
              <td><?=$p->post_titulo ?></td>
              <td><?=$p->post_descricao ?></td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
        <?php echo $pagination; ?>
      </div>
	  
    <?php endif; ?>
		</div>
	</div>
</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/js/jquery-1.12.4.min.js') ?>" ></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>" ></script>
  </body>
</html>
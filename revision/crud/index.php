<?php
//CONEXÃO COM O BD
include_once 'php_action/db_connect.php';
//HEADER
include 'includes/header.php';
//MENSAGENS
include 'includes/alerts.php';

?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light center-align"> Clientes </h3>
    <table class="striped">
      <thead>
        <tr>
          <th>Nome:</th>
          <th>SobreNome:</th>
          <th>Email:</th>
          <th>Idade</th>
        </tr>
      </thead>
      <tbody>
		<?php
			$sql = "SELECT * FROM clientes";
			$resultado = mysqli_query($connect, $sql);
			while($dados = mysqli_fetch_array($resultado)):
		?>
        <tr>
        	<td><?php echo $dados['nome']; ?></td>
        	<td><?php echo $dados['sobrenome']; ?></td>
        	<td><?php echo $dados['email']; ?></td>
        	<td><?php echo $dados['idade']; ?></td>
        	<td><a href="edit.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange" ><i	class="material-icons">edit</i></a></td>
        	<td><a href="" class="btn-floating red" ><i	class="material-icons">delete</i></a></td>
        </tr>
		<?php
			endwhile;
		?>
      </tbody>
    </table>
    <br>
    <a href="add.php" class="btn" >Adicionar Cliente</a>
  </div>
</div>


<?php
//FOOTER
include 'includes/footer.php';
?>

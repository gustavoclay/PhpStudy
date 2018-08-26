<?php
//HEADER
include 'includes/header.php';
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
        <tr>
          <td>Gustavo</td>
          <td>Clay</td>
          <td>vesp@vesp.com</td>
          <td>24</td>
          <td><a href="" class="btn-floating orange" ><i class="material-icons">edit</i></a></td>
          <td><a href="" class="btn-floating red" ><i class="material-icons">delete</i></a></td>
        </tr>
      </tbody>
    </table>
    <br>
    <a href="" class="btn" >Adicionar Cliente</a>
  </div>
</div>


<?php
//FOOTER
include 'includes/footer.php';
?>

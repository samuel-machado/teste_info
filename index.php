<?php
  include_once("config.php");

  $result = mysqli_query($mysqli, "SELECT * FROM carros");

  if(isset($_POST['submit'])) {    
    $placa = $_POST['placa'];
    $chassi = $_POST['chassi'];
    $renavam = $_POST['renavam'];
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $ano = $_POST['ano'];
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ADD/VIEW - INFOSISTEMAS</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="estilo.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a href="index.html" class="navbar-brand"><img src="imagens/logo_infosistemas.png" width="230"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" style="flex-grow: 0" id="navbarText">
          <span class="navbar-text">
            CRUD COMPLETO
          </span>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="card text-center mt-5">
        <div class="card-header">
          View
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Placa</th>
                <th scope="col">Chassi</th>
                <th scope="col">Renavam</th>
                <th scope="col">Modelo</th>
                <th scope="col">Marca</th>
                <th scope="col">Ano</th>
                <th scope="col">Opções</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                while($res = mysqli_fetch_array($result)) {         
                    echo "<tr>";
                    echo "<td>".$res['id']."</td>";
                    echo "<td>".$res['placa']."</td>";
                    echo "<td>".$res['chassi']."</td>";
                    echo "<td>".$res['renavam']."</td>";
                    echo "<td>".$res['modelo']."</td>";
                    echo "<td>".$res['marca']."</td>";
                    echo "<td>".$res['ano']."</td>";    
                    echo "<td><a href=\"edit.php?id=$res[id]\">Editar </a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\"> Deletar</a></td>";        
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="card text-center mt-5">
        <div class="card-header">
          Cadastro
        </div>
        <div class="card-body">
          
          <form action="add.php" method="post">
        <div class="row">
          <div class="col">
            <input type="text" name="placa" id="placa" class="form-control" required placeholder="Placa">
          </div>
          <div class="col">
            <input type="text" name="chassi" id="chassi" class="form-control" required placeholder="Chassi">
          </div>
          <div class="col">
            <input type="text" name="renavam" id="renavam" class="form-control" required placeholder="Renavam">
          </div>
        </div>
        
        <br>

        <div class="row">
          <div class="col">
            <input type="text" name="modelo" id="modelo" class="form-control" required placeholder="Modelo">
          </div>
          <div class="col">
          <input type="text" name="marca" id="marca" class="form-control" required placeholder="Marca">
          </div>
          <div class="col">
            <input type="number" max="2020" name="ano" id="ano" class="form-control" required placeholder=" Ano"/>
          </div>
        </div>
        
        <br>

        <button type="submit" name="submit" class="btn btn-success">CRIAR</button>
      </form>

        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php
include_once("config.php");
 
if(isset($_POST['editar']))
{    
    $id = $_POST['id'];
    
    $placa = $_POST['placa'];
    $chassi = $_POST['chassi'];
    $renavam = $_POST['renavam'];
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $ano = $_POST['ano'];

    $result = mysqli_query($mysqli, "UPDATE carros SET placa='$placa',chassi='$chassi',renavam='$renavam',modelo='$modelo',marca='$marca',ano='$ano' WHERE id=$id");
    
    header("Location: index.php");
    
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM carros WHERE id=$id");
 
while($res = mysqli_fetch_array($result))
{
    $placa = $res['placa'];
    $chassi = $res['chassi'];
    $renavam = $res['renavam'];
    $modelo = $res['modelo'];
    $marca = $res['marca'];
    $ano = $res['ano'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EDIT - INFOSISTEMAS</title>

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
          Edit
        </div>
        <div class="card-body">
          
        <form action="edit.php" method="post">
            <div class="row">
              <div class="col">
                <input type="text" name="placa" id="placa" class="form-control" required placeholder="Placa" value="<?= $placa;?>">
              </div>
              <div class="col">
                <input type="text" name="chassi" id="chassi" class="form-control" required placeholder="Chassi" value="<?= $chassi;?>">
              </div>
              <div class="col">
                <input type="text" name="renavam" id="renavam" class="form-control" required placeholder="Renavam" value="<?= $renavam;?>">
              </div>
            </div>
            
            <br>

            <div class="row">
              <div class="col">
                <input type="text" name="modelo" id="modelo" class="form-control" required placeholder="Modelo" value="<?= $modelo;?>">
              </div>
              <div class="col">
              <input type="text" name="marca" id="marca" class="form-control" required placeholder="Marca" value="<?= $marca;?>">
              </div>
              <div class="col">
                <input type="number" max="2020" name="ano" id="ano" class="form-control" required placeholder=" Ano" value="<?= $ano;?>">
              </div>
            </div>
            
            <br>
            <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
            <button type="submit" name="editar" class="btn btn-success">CRIAR</button>
        </form>

        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
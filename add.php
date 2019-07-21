<?php
include_once("config.php");
 
if(isset($_POST['submit'])) {    
    $placa = $_POST['placa'];
    $chassi = $_POST['chassi'];
    $renavam = $_POST['renavam'];
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $ano = $_POST['ano'];
        
    $result = mysqli_query($mysqli, "INSERT INTO carros(placa,chassi,renavam,modelo,marca,ano) VALUES('$placa','$chassi','$renavam','$modelo','$marca','$ano')");

    header('Location: index.php');
}
?>
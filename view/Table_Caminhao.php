<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista | Caminhão</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <?php
    require_once ('../Controller/Conexao.php');
   
    $banco = $this->conexao->GetBanco();
    $sql = mysqli_query($banco,"selct * from caminhoes");
    
    while($col = mysql_fetch_assoc($sql)){
        echo 'teste';
    }
    /*
    while($fetch = mysql_fetch_row($result)){
        echo "<p>";
        foreach ($fetch as $value){
            echo $value . " - ";
        }
        echo "</p>";
    }
    
    $this->conexao->Desconectar();
    */

    
    
    ?>
    
    <div class="form-table">
        <table class="table table-striped table-hover " >
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Placa</th>
            <th scope="col">Cor</th>
            <th scope="col">Modelo</th>
            <th scope="col">Fabricante</th>
            <th scope="col">Ano</th>
            <th scope="col">Valor da diária</th>
            <th scope="col">Situação do veículo</th>
            <th scope="col">Potência</th>
            <th scope="col">Carga</th>
            <th scope="col">Número de eixos</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"> </th>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
        </tbody>
        </table>
    </div>
</body>
</html>

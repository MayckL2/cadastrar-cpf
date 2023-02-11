    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
    *{
      font-weight: bold;
    }
    body{
      background-color: blue !important;
    }
    form{
      border: groove 5px gray;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 10px;
      width: fit-content;
      border-radius: 20px;
      background-color: darkslategray ;
      color: white;
      margin: 10px auto;
    }
    div{
        display: flex;
        align-items: center;
        gap: 30px;
    }
    label{
      font-size: 20px;
    }
    input{
      border-radius: 20px;
      padding: 5px;
      width: 300px;
      text-align: center;
    }
    input[type="submit"], input[type="reset"]{
      border-radius: 20px;
      padding: 5px 30px;
      transition: all 0.5s;
      width: 150px;
    }
    input[type="submit"]:hover, input[type="reset"]:hover{
      background-color: gray;
    }
    a{
        text-decoration: none;
        color: blue;
        background-color: white;
        padding: 5px 20px;
        border-radius: 20px;
        transition: all 0.5s;
    }
    a:hover{
        background-color: gray;
    }
    .valido{
        color: chartreuse;
    }
    .invalido{
        color: red;
    }
  </style>
</head>
<body>
    <?php
        session_start();
    ?>
    <form action="visualizar.php" method="post">
        <div>
            <label for="">CPF</label>
            <input type="number" value="<?php echo $_SESSION["cpf"] ?>">
        </div>
        <div>
            <label for="">Nome</label>
            <input type="text" name="nome" value="Mayck Luciano Soares">
        </div>
        <div>
            <label for="">Endereço</label>
            <input type="text" name="endereco" value="Itapecerica da Serra - Sp">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email" value="mayckluciano2@gmail.com">
        </div>
        <div>
            <label for="">Data de nascimento</label>
            <input type="datetime" name="nascimento" value="09/04/2002">
        </div>

        <!-- <a href="visualizar.php">Proceguir</a> -->
        <input type="submit">
        <a href="Index.php">Index</a>
    </form>    
</body>
</html>
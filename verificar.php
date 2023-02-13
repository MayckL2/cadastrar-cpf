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
      gap: 20px;
      width: fit-content;
      border-radius: 20px;
      background-color: darkslategray ;
      color: white;
      margin: 50px auto;
    }
    label{
      font-size: 25px;
    }
    input[type="number"]{
      border-radius: 20px;
      padding: 5px;
      width: 300px;
    }
    input[type="submit"], input[type="reset"]{
      border-radius: 20px;
      padding: 5px 30px;
      transition: all 0.5s;
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
    <form action="#">
        <label for="">
            <?php
                session_start();
                $_SESSION["cpf"]= $_POST["cpf"];
                echo "CPF INFORMADO: " . $_SESSION["cpf"] . "<br>";
            ?>
        </label>
            <?php
                $cpf = str_replace(" ", "", $_SESSION["cpf"]);
                $confere= $cpf;
                
                if(strlen($cpf) == 11){
                  $total = 0;
                  $x = 11;
                  for ($i=0; $i < 9; $i++) {
                    $x -= 1;
                    $total += $cpf[$i] * $x;
                  }
                  
                  $confere[9] = 11 - $total%11;
              
                  $total = 0;
                  $x = 12;
                  for ($z=0; $z < 10; $z++) {
                    $x -= 1;
                    $total += $cpf[$z] * $x;
                  }
              
                  $confere[10] = 11 - $total%11;
                  
                  if($confere == $cpf){
                    echo "<p class='valido'>CPF VALIDO!</p>";
                    echo "<a href='cadastrar.php'>PROSSEGUIR</a>";
                    echo "<a href='index.php'>VOLTAR</a>";
                  }else{
                    echo "<p class='invalido'>CPF INVALIDO!</p>";
                    echo "<a href='index.php'>VOLTAR</a>";
                    unset($_SESSION['cpf']);
                  }
                }else{
                  echo "<p class='invalido'>CPF INVALIDO!</p>";
                  echo "<a href='index.php'>VOLTAR</a>";
                  unset($_SESSION['cpf']);
                }
                
                
            ?>
    </form>
</body>
</html>
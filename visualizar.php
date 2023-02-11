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
      padding: 20px 50px;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 20px;
      width: fit-content;
      border-radius: 20px;
      background-color: darkslategray ;
      color: white;
      margin: 10px auto;
    }
    div{
        display: flex;
        flex-direction: column;
        align-items: center;
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
  </style>
</head>
<body>
    <?php
    session_start();
    ?>
  <form action="#">
    <label for="">RESUMO</label>
    <div>
        <label for="">CPF:</label>
        <p><?php echo $_SESSION["cpf"]; ?></p>
    </div>
    <div>
        <label for="">Nome:</label>
        <p><?php echo $_POST["nome"];?></p>
    </div>
    <div>
        <label for="">Endereço:</label>
        <p><?php echo $_POST["endereco"];?></p>
    </div>
    <div>
        <label for="">Email:</label>
        <p><?php echo $_POST["email"];?></p>
    </div>
    <div>
        <label for="">Idade:</label>
        <p><?php 
            $nascimento = $_POST["nascimento"];
            echo 23 - $nascimento[strlen($nascimento) - 1] + $nascimento[strlen($nascimento) - 2];
        ?></p>
    </div>

    <a href="Index.php">Index</a>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
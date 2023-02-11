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
  </style>
</head>
<body>
  <form action="verificar.php" method="post">
    <label for="">Digite o CPF</label>
    <input type="number" name="cpf">
    <input type="submit">
    <input type="reset">
    
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
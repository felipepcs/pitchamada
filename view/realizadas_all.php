<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chamadas realizadas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>


<style>
body {
    background-color: #D4D2C9;
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
  }

  .header {
    padding: 80px;
    text-align: center;
    background: #A3F2B9;
    color: white;
  }

.navbar {
    overflow: hidden;
    background-color: #333;
    position: sticky;
    position: -webkit-sticky;
    top: 0;
  }
  .navbar a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
  }
</style>
<body>
<div class="header">
        <img src="img/logo.jpeg" class="logo">
    </div>
    <div class="navbar">
        <a href="principal.html" class="active">Home</a>
        <a href="#">Sobre o OldPal</a>
        <a href="#">Como Usar</a>
        <a href="#" class="right">Quem somos</a>
      </div>

<body>
<br>
    <div class="container">
        <h2>Chamadas realizadas</h2>
        <p class="pb-2">Listagem de chamadas realizadas
        <br>
        <span style="float:right">
            <a href="?acao=create" class="btn btn-primary">Cadastrar nova chamada</a>
        </span>
    
        </p>


        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>

                <?php $i=1; foreach($realizadas AS $realizada){ ?>
                    <tr>
                        <td><?=$i++?></td>
                        <td><?=$realizada->nome?></td>
                        <td><?=$realizada->telefone?></td>
                        <td>

                </tr>

                <?php } ?>

            </tbody>
        </table>
    </div>
</body>

</html>

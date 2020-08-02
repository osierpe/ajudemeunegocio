<?php
require_once "connect.php";


if(isset($_POST['email'])&isset($_POST['nome'])&isset($_POST['conteudo'])&isset($_POST['area'])) 
{ 
    $email = str_replace("'", "''", $_POST['email']);
    $nome = str_replace("'", "''", $_POST['nome']);
    $conteudo = str_replace("'", "''", $_POST['conteudo']);
    $area = str_replace("'", "''", $_POST['area']);
    $result = $conn->query("INSERT INTO experiencia (email, nome, conteudo, area) VALUES ('$email', '$nome', '$conteudo', '$area')");
}
?>
<html lang="pt-br">
    <head>
        <title>Compartilhe Conosco</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <style>
            body,h1,h2,h3,h4,h5,h6, p {font-family: "Lato", sans-serif}
            .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <div class="w3-top">
            <div class="w3-bar w3-red w3-card w3-left-align w3-large">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red"></a>
                <a href="index.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
                <a href="experiencia.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Experiência</a>
                <a href="contato.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contato</a>
            </div>
        </div>

        <!-- Header -->
        <header class="w3-container w3-red w3-center" style="padding:70px 16px">
            <h1 class="w3-margin w3-Jumbo">Compartilhe Conosco</h1>
        </header>

        <!-- First Grid -->
        <div class="w3-row-padding w3-padding-64 w3-container">
            <div class="w3-content">
                <div class="w3-twothird w3-justify">
                    <form action = "https://ajudemeunegocio.000webhostapp.com/compartilhe_conosco-2.php" method = "post" id = "forme">
                        <div class="form-group">
                            <label for="exampleInputEmail">Email:</label>
                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="email@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome Completo</label>
                            <input type="text" name = "nome" class="form-control" placeholder="Seu Nome Completo">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ramo de Negócio</label>
                            <input type="text" name = "area" class="form-control" placeholder=" Seu Ramo de Atuação">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Conte sua Experiência</label>
                            <textarea class="form-control" name="conteudo" id="exampleFormControlTextarea1" rows="7" form = "forme"></textarea>
                        </div>
                        <button onclick="enviar()" type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="w3-container w3-black w3-padding-64 w3-center w3-opacity">  
            <div class="w3-xlarge w3-padding-32">
                <h1 class="w3-margin w3-jumbo">AJUDE MEU NEGÓCIO!</h1>
            </div>
        </footer>
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        
        <script>
            function enviar() {
                alert("Enviado com Sucesso!");
            }
        </script>    
    </body>
</html>
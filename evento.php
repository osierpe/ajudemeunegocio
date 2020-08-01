<?php
require "connect.php";
?>



<html lang="pt-br">
    <head>
        <title>Eventos - Seu Negócio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
        .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
        .fa-anchor,.fa-coffee {font-size:200px}
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <div class="w3-top">
            <div class="w3-bar w3-red w3-card w3-left-align w3-large">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                <a href="index.html" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
                <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Experiência</a>
                <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contato</a>
            </div>

            <!-- Navbar on small screens -->
            <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
                <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
                <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
                <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
                <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
            </div>
        </div>
		<header class="w3-container w3-red w3-center" style="padding:70px 16px">
            <h1 class="w3-margin w3-Jumbo">Eventos</h1>
        </header>

        <?php
                        if ($result = $conn->query("SELECT * from casos where area = 'Eventos'")) {
    // $result is an object and can be used to fetch row here
}
else {
    printf("Query failed: %s\n", $conn->error);
}
                        if ($result->num_rows > 0) {
                            
                            while ($row = $result->fetch_assoc()) {
                            $titulo = $row["titulo"];
                            $conteudo = $row["conteudo"];
                            $dicas = $row["dicas"];
                            $car = $row["carousel"];
                            echo"
							
                                <div class=\"w3-row-padding w3-light-grey w3-padding-64 w3-container\">
            <div class=\"w3-content\">
                

                <div class=\"w3-twothird\">
                    <h1 style=\"padding-left: 40%;\">$titulo</h1>
                    <h4 style=\"padding-left: 20%;\" class=\"w3-padding-32\">$conteudo</h4>
                    <h4 style=\"padding-left: 20%;\" class=\"w3-padding-32\">$dicas</h4>
                    <h4 style=\"padding-left: 20%;\" class=\"w3-padding-32\">$car</h4>
                </div>
            </div>
        </div>";
                             
                            }
                        }
                        ?>

        <footer class="w3-container w3-black w3-padding-64 w3-center w3-opacity">  
            <div class="w3-xlarge w3-padding-32">
                <h1 class="w3-margin w3-jumbo">AJUDE MEU NEGÓCIO!</h1>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

        <script>
        // Used to toggle the menu on small screens when clicking on the menu button
        function myFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else { 
            x.className = x.className.replace(" w3-show", "");
        }
        }
        </script>

        </body>
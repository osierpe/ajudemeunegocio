<?php
require "connect.php";

?>
<html lang="pt-br">
    <head>
        <title>Experiência</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <a href="experiencia.php" class="w3-bar-item w3-button w3-padding-large w3-white">Experiência</a>
                <a href="contato.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contato</a>
            </div>
        </div>

        <!-- Header -->
        <header class="w3-container w3-red w3-center" style="padding:70px 16px">
            <h1 class="w3-margin w3-Jumbo">Experiências</h1>
        </header>
  
        <!-- First Grid -->
        <div class="w3-row-padding w3-padding-64 w3-container">
            <div class="w3-content">
                <div class="w3-twothird w3-justify">
                    
					
					
					<?php
						
                        if ($result = $conn->query("SELECT * from experiencia where post = 1")) {
							if ($result->num_rows > 0) {
                            
								while ($row = $result->fetch_assoc()) {
								$email = $row["email"];
								$nome = $row["nome"];
								$conteudo = $row["conteudo"];
								$area= $row["area"];
								echo "<div>
										<h6>Autor: $nome</h6> 
										<h6>Email: $email</h6>
										<h6> Area: $area</h6>
										<p>$conteudo</p>
										<br><br>
										</div>";
								}
							}
						}
						else {
							printf("Query failed: %s\n", $conn->error);
						}
                        
					?>

                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="w3-container w3-black w3-padding-64 w3-center w3-opacity">  
            <div class="w3-xlarge w3-padding-32">
                <h1 class="w3-margin w3-jumbo">AJUDE MEU NEGÓCIO!</h1>
            </div>
        </footer>
        
    </body>
</html>
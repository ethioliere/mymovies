<html>
    <head>
        <meta charset = "utf-8"/>
        <title> MyMovie </title>
        <link href="lib/bootstrap/css/bootstrap.min.css" rel ="stylesheet">
        <link rel="stylesheet" href="style.css"/>
                

    </head>

    <body>
        <!--
        <div class="container">
            
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li class="active"> <a href="#">MyMovie</a> </li>
                        <li> <a href="#">Liens</a> </li>
                        <li> <a href="#">Témoignages</a> </li>
                        <li> <a href="#">Références</a> </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Non connecté </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Se connecter </a>                            
                            </div>
                        </li>
                    </ul>
          
                </div>
             </nav>

             <div class="container"> -->
 
<!--
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-target">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-film"></span> MyMovies</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-target">
                                <ul class="nav navbar-nav navbar-right">
                                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="glyphicon glyphicon-user"></span> Non connecté <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="login.php">Se connecter</a></li>
                                </ul>
                            </li>
                                    </ul>
                </div>
            </div><!-- /.container -->
        </nav>
           
        </div>

        <div class="container">

            <h1> Bienvenue sur MyMovie ! </h1>
            <br/>

            <?php 
                require("includes/connect.php");

                //On prend tous les films de la BDD
                $requete="SELECT *FROM FILMS";
                $movie =$BDD -> query($requete);
                
                while($tuple=$movie -> fetch())
                {
                    echo $tuple['ID'] . " " . $tuple['TITRE'] . "<br>";
                    
                }
                

                //function --> Faire une fonction escape
                //Parties communes les inclure, on factorise
                    
            ?>
            
            <h2> <a class='movieTitle' href="index.php?id=<?=$tuple['ID']?>"> <?= $tuple['TITRE']?> </a> </h2>

            <p class="movieContent"> <?=$tuple['DESCRIPTION']?> </p>
            

            <h2> <a class="movieTitle" href="index.php?id=<?=$movie['ID']?>"> <?= $movie['TITRE']?> </a> </h2>

            <p> Insaisissable est un film très cool ! </p>

            

            

            <h2> <a href="index.php?id=2"> Inception </a> </h2>

            <p> Inception est un film très perturbant ! </p>

            <h2>  <a href="index.php?id=3">  Turbo  </a></h2>

            <p> Turbo est un film très vibrant ! </p>

        </div>





    </body>
</html>
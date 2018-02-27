        <?php
            try{
                $BDD = new PDO ("mysql:host=localhost;dbname=mymovie;charset=utf8",
                                "utilisateurtest",
                                "test",
                                array(PDO::ATTR_ERRMODE=>PDO ::ERRMODE_EXCEPTION));

            }
            catch(Exception $e){
                die('Erreur fatale'.$e->getMessage());
            }
        ?>
    
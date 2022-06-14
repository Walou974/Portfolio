<nav>
        
        <?php 
        include("Outils/outils.php");
        $lrep2 = listeRep($dossier);
        // debug($lrep2);
        $repere = "Sujet";
        $i = 1;
        echo "<ul>";
        foreach($lrep2 as $donne) {
            if (strpos($donne, $repere) !== false){
                
                echo "<li>$donne</li>" ;
                    echo "<ul>";
                    echo '<li><a href="http://isis.unice.fr/~escazut/ext/R209/Exercices/sujet'.$i.'.php" target="_blank">Enoncé</a></li>';
                    echo '<li><a href="'.$dossier.'/'.$donne.'">Réponse</a></li>';
                    echo "</ul>";
                $i = $i + 1;
            }   
        }
        echo "</ul>";
        ?>    

</nav>
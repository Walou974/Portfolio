<?php

function debug($var){
    echo "<pre>\n";
    print_r($var);
    echo "</pre>\n";
}

function listeRep($unRep) {
    $allFic=array();											// créer un tableau vide
    if (is_dir($unRep) == FALSE) {								// vérifie que la variable rentrée dans $unrep est un repertoire
        echo "{$unRep} n'est pas un répertoire !";  			// FAUX : cas où ce n'est pas un répertoire :
    }																// message d'erreur 
    else {														// VRAI : cas où c'est un réprtoire :
        $rep = opendir($unRep);										// ouverture du répertoire
        if ($rep == FALSE) {										// vérification de la bonne ouverture du répertoire
            echo "Impossible d'ouvrir le répertoire {$unRep}";		// FAUX : le répertoire n'a pas pu s'ouvrir :
        }																// message d'erreur
        else {														// VRAI : autre	:
            while (($fic = readdir($rep)) == TRUE) {					// boucle : lit les entrées de $rep (répertoire selectionné) :
                $allFic[]=$fic;												// stocker les entrées, à tour de rôle dans le tableau du départ
            }
            closedir($rep);												// ferme le répertoire 
            sort($allFic);												// tri les valeurs du tableau dans l'ordre alphabétique 
        }
    }
    return $allFic;												// retourne la liste de fichiers triée dans l'ordre alphabétique 
}

?>
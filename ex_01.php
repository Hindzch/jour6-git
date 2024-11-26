<?php

// Définition de la fonction my_generate_file
function my_generate_file($name) {
    // Le nom du fichier sera $name.txt
    $filename = $name . ".txt";
    
    //créer le fichier en mode écriture ('w')
    $file = fopen($filename, "w");
    
    // Vérifie si le fichier a été créé avec succès
    if ($file) {
        fclose($file); // Ferme le fichier une fois qu'il est créé
        return true;    // Retourne true si tout s'est bien passé
    } else {
        return false;   // Retourne false si une erreur se produit
    }
}

// Ex  , d'utilisation de la fonction
$name = "example";  // Nom du fichier sans l'extension
if (my_generate_file($name)) {
    echo "Le fichier '$name.txt' a été créé avec succès.\n";
} else {
    echo "Une erreur est survenue lors de la création du fichier.\n";
}

?>

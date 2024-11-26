<?php

// Fonction my_cat_files qui prend un ou plusieurs chemins de fichiers
function my_cat_files(string $path, ...$paths) {
    // Initialiser une variable pour stocker tout le contenu
    $content = '';

    // Créer un tableau avec tous les chemins de fichiers à traiter
    $files = array_merge([$path], $paths);

    // Parcourir chaque fichier
    foreach ($files as $file) {
        // Vérifier si le fichier existe et est lisible
        if (file_exists($file) && is_readable($file)) {
            // Ouvrir le fichier en mode lecture
            $handle = fopen($file, 'r');
            if ($handle) {
                // Lire le contenu du fichier
                $content .= fread($handle, filesize($file));
                // Ajouter une ligne de 5 underscores entre les fichiers
                $content .= "\n_____ \n";
                fclose($handle); // Fermer le fichier
            }
        } else {
            // Si le fichier ne peut pas être ouvert, ajouter un message d'erreur
            $content .= "Le fichier $file n'a pas pu être ouvert.\n";
        }
    }

    // Retourner tout le contenu
    return $content;
}

// Exemple d'utilisation de la fonction
$files_content = my_cat_files("file1.txt", "file2.txt", "file3.txt");
echo $files_content;
?>


# Créer les fichiers nécessaires
touch file1.txt file2.txt file3.txt

# Ajouter du contenu dans ces fichiers
echo "Contenu du fichier 1" > file1.txt
echo "Contenu du fichier 2" > file2.txt
echo "Contenu du fichier 3" > file3.txt


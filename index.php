<?php

/**
 * 1. Récupérer le contenu du fichier lire.txt à l'aide de la fonction file_get_contents
 * 2. Afficher le contenu du fichier dans un div
 */
// TODO Votre code ici.
$content = file_get_contents('lire.txt');
echo"<div>$content</div>";
echo "<br><br>";
/**
 * 3. Faites la même chose à l'aide d'une boucle et de la fonction fgets(), récupérez les lignes du fichier une à une.
 * 4. Affichez le contenu de chaque ligne dans un nouveau span.
 * --> N'oubliez pas de fermer votre fichier.
 */
// TODO Votre code ici.
//exemple 1
$file = fopen('lire.txt',"rb");
while($line = fgets($file)) {
    echo "<span>$line</span>";
}
fclose($file);

//exemple 2
if(file_exists('lire.txt')) {
    $contents = file ('lire.txt');
    foreach($file as $line) {
        echo "<span>$line</span>";
    }
}


/**
 * 5. Récupérez les caractères un à un et n'affichez le caractère que s'il s'agit d'autre chose qu'un espace, qu'un point ou qu'un point d'interrogation / exclamation.
 * --> N'oubliez pas de fermer votre fichier.
 */
// TODO Votre code ici.
$file = fopen('lire.txt', 'rb');
while ($char = fgetc($file)){
    if($char !== " " && $char !== "." && $char !== "," && $char !== "?" && $char !== "!"){
        echo $char;
    }
}
fclose($file);
/**
 * 6. Ne cherchez pas la logique dans cet exo ^^
 */
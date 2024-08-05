<?php
$mysqli = new mysqli("localhost", "root", "root123456", "appaudio");

// Vérifier la connexion
if ($mysqli->connect_errno) {
    echo "Échec de connexion à MySQL: " . $mysqli->connect_error;
    exit();
}

// Récupérer le mot prononcé depuis la requête GET
$spokenWord = $_GET['word'];

// Rechercher dans la base de données le mot prononcé et récupérer ses équivalents en tifinagh et en français
$query = "SELECT tifinagh, francais FROM text WHERE arabe = '$spokenWord'";
$result = $mysqli->query($query);

// Vérifier s'il y a un résultat
if ($result) {
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $translatedWord = $row['tifinagh'];
        $frenchWord = $row['francais'];

        // Créer un tableau associatif pour les traductions
        $translations = array(
            "tifinagh" => $translatedWord,
            "francais" => $frenchWord
        );

        // Convertir le tableau en JSON et l'envoyer au client
        echo json_encode($translations);
    } else {
        echo json_encode(array("error" => "Équivalent non trouvé")); // Si le mot n'est pas trouvé dans la base de données
    }
} else {
    // Afficher l'erreur de la requête SQL s'il y en a une
    echo json_encode(array("error" => "Erreur dans la requête SQL : " . $mysqli->error));
}

// Fermer la connexion
$mysqli->close();
?>
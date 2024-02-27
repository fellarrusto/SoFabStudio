<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["lastname"])) {
    // Raccogliere i dati dal form
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = strip_tags(trim($_POST["message"]));

    // Specificare qui l'indirizzo email dove vuoi ricevere i messaggi
    $to = "info@sofabstudio.com";

    // Impostare l'oggetto dell'email
    $subject = "SoFabStudio FORM MESSAGE $name";

    // Costruire il corpo dell'email
    $email_content = "Nome: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Messaggio:\n$message\n";

    // Costruire l'intestazione dell'email
    $email_headers = "From: $name <$email>";

    // Invio dell'email
    if (mail($to, $subject, $email_content, $email_headers)) {
        // Se l'email viene inviata con successo, invia una risposta per AJAX
        echo "Messaggio inviato con successo!";
    } else {
        // Se l'invio fallisce, invia un messaggio di errore per AJAX
        http_response_code(500); // Imposta lo stato della risposta HTTP a errore
        echo "Oops! Qualcosa è andato storto e non siamo riusciti a inviare il tuo messaggio.";
    }
} else {
    // Se il metodo della richiesta non è POST, invia un messaggio di errore per AJAX
    http_response_code(403); // Imposta lo stato della risposta HTTP a "Vietato"
    echo "C'è stato un problema con la tua sottomissione, per favore prova di nuovo.";
}


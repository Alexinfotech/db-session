<?php
include '../config/conn_db.php';

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$email = $_POST['email'];
$password = $_POST['password'];
$confermaPassword = $_POST['confermaPassword'];
if ($password !== $confermaPassword) {
    header("Location: ../public/index.php?error=passwordMismatch");
    exit(); 
}

$conn = connessioneNAvigatore();

$sql = "insert into utenti (nome, cognome, email, password) values ('$nome', '$cognome', '$email', '$password')";
if (mysqli_query($conn, $sql)) {
    echo "Registrazione completata con successo!";
    header("Refresh: 2; ../public/login.html");

} else {
    echo "Errore: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

<?php
session_set_cookie_params(60, "/"); 
session_start();


include '../config/conn_db.php';

if (!isset($_SESSION['email'])) {
    
    header('Location: login.html');
    exit();
}

echo "Benvenuto Amministratore, " . $_SESSION['nome'] . "!<br><br>";

$conn = connessioneAmministratore();  // 

$result = mysqli_query($conn, "select * from vista_utenti");

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Nome</th><th>Cognome</th><th>Email</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td>" . $row["cognome"] . "</td><";
        echo "td>" . $row["email"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Nessun utente registrato.";
}

mysqli_close($conn);
?>
<html>
    <body>
    <br><form action="logout.php" method="post">
    <input type="submit" value="Esci">
</form>

    </body>
</html>
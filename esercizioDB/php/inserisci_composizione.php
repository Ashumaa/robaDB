<head>
<title>inserita composizione</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../style.css" rel="stylesheet" type="text/css">
</head>
<body>
    
    <?php
    // Connessione al database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "aziendaDB";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Verifica della connessione
    if (!$conn) {
        die("Connessione al database fallita: " . mysqli_connect_error());
    }

    // Preleva i dati dal form
    $ID_prod= $_POST['id_prod'];
    $id_comp= $_POST['id_comp'];
    $unita_comp = $_POST['unita_comp'];


    // Prepara la query di inserimento
    $sql = "INSERT INTO composizione (id_prod, id_comp, unita_comp) VALUES ('$ID_prod', '$id_comp', '$unita_comp')";

    // Esegui la query
    if (mysqli_query($conn, $sql)) {
        echo "<h1>Automobile inserita con successo</h1>";
    } else {
        echo "Errore: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Chiudi la connessione al database
    mysqli_close($conn);
    ?>
    <div class="home">
        <a href="../index.html"><img class="home_img" src="https://cdn-icons-png.flaticon.com/512/25/25694.png"/></a>
    </div>
</body>
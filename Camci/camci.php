<?php
$xml = simplexml_load_file('klubovi.xml');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Čamci</title>
    <style>
        div {
            margin: auto;
        }
        body{
            background-color: khaki;
        }
        .container {
            width: 60%;
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 20px;
            text-align: center;
            background-color: lightsalmon;
        }
        img {
            width: 100%;
            height: auto;
            display: block;
            margin-bottom: 10px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            margin-bottom: 5px;
        }
        td {
            background-color: lightblue;
        }
        h1 {
            text-align: center;
        }
        header {
            width: 100%;
            text-align: center;
            margin-bottom: 20px;
        }
        footer {
            width: 100%;
            height: 50px;
            text-align: center;
            background-color: blue;
            color: white;
            bottom: 0;
            left: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Regatni čamci u Hrvatskoj</h1>
        <ul>
            <li><a href="index.php">Državno Prvenstvo</a></li>
            <li><a href=#>Čamci</a></li>
        </ul>
    </header>
    
        <?php $xml = simplexml_load_file('camci.xml');
        foreach($xml->camac as $camac): ?>
            <div class="container">
                <ul>
                    <li><?php echo "<img src='$camac->slika'/>"?></li>
                    <li>Ime čamca: <?php echo $camac->ime?></li>
                    <li>Godina proizvodnje: <?php echo $camac->godiste?></li>
                    <li>Marka: <?php echo $camac->marka?></li>
                    <li>Kategorija: <?php echo $camac->kategorija?></li>
                    <li>Namjenjena kilaža: <?php echo $camac->namjenjenaKilaza?></li>
                    <li>Težina: <?php echo $camac->tezina?></li>
                    <li>Vlasnik: <?php echo $camac->vlasnik?></li>
                    <li>Posada:</li>
                    <ul>
                        <?php foreach ($camac->posada->veslac as $veslac): ?>
                            <li><?php echo $veslac; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </ul>
            </div>
        <?php endforeach; ?>
    
    <footer>
        <p>Lovre Puh, 2024.</p>
    </footer>
</body>
</html>
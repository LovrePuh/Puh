<?php
$xml = simplexml_load_file('klubovi.xml');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Rezultati HVP 2023.</title>
    <style>
        body{
            background-color: khaki;
        }
        header{
            text-align: center;
        }
        table {
            width: 100%;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: salmon;
        }
        td {
            background-color: lightsalmon;
        }
        h1 {
            text-align: center;
        }
        img {
            width: 50px;
            height: auto;
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
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            display: inline;
            margin-bottom: 5px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Rezultati Hrvatskog Veslačkog Prvenstva 2023.</h1>
        <ul>
            <li><a href=#>Državno Prvenstvo</a></li>
            <li><a href="camci.php">Čamci</a></li>
        </ul>
    </header>
    <table>
        <thead>
            <tr>
                <th>Plasman</th>
                <th>Klub</th>
                <th>Godina osnivanja</th>
                <th>Grad</th>
                <th>Bodovi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($xml->klub as $klub): ?>
                <tr>
                    <td><?php echo $klub->plasman; ?></td>
                    <td><img src="<?php echo $klub->grb; ?>"><?php echo $klub->ime; ?></td>
                    <td><?php echo $klub->godiste; ?></td>
                    <td><?php echo $klub->grad; ?></td>
                    <td><?php echo $klub->bodovi; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    <footer>
        <p>Lovre Puh, 2024.</p>
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Exemple operadors</title>
</head>
<body>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Exemple arrays</title>
</head>
<body>
<?php
    $array1 = array(
    ["nom"=>"Nick",
    "cognom"=>"Bermudez",
    "cognom2"=>"Esch",
    "datanaximent"=>"31/08/2004",
    "DNI"=>"47971887M"],
    [
    "nom"=>"Chimeneas",
    "cognom"=>"Rueda",
    "cognom2"=>"Gomez",
    "datanaximent"=>"15/04/2005",
    "DNI"=>"87878787N"],
    [
    "nom"=>"Hormiga",
    "cognom"=>"Atomica",
    "cognom2"=>"Serna",
    "datanaximent"=>"30/07/2005",
    "DNI"=>"98989898B"
    ],
    ["nom"=>"Miguel","cognom"=>"Euceda","cognom2"=>"Lopez","datanaximent"=>"05/04/2004","DNI"=>"54545454N"],
    ["nom"=>"Emoji","cognom"=>"Coba","cognom2"=>"Arquillo","datanaximent"=>"29/11/2005","DNI"=>"43434343C"]);

    echo "<table>";
    echo "<tr>";
    echo "<th>Nom</th>";
    echo "<th>Primer Cognom</th>";
    echo "<th>Segon Cognom</th>";
    echo "<th>Data de Naixement</th>";
    echo "<th>DNI</th>";
    echo "</tr>";

    foreach ($array1 as $row) {
        echo "<tr>
                <td>{$row['nom']}</td>
                <td>{$row['cognom']}</td>
                <td>{$row['cognom2']}</td>
                <td>{$row['datanaximent']}</td>
                <td>{$row['DNI']}</td>
            </tr>";
    }
?>
</body>
</html>
</body>
</html>
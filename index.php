<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Hotels</title>
</head>

<body>

    <?php
    for ($i = 0; $i < count($hotels); $i++) {
        $cur_hotel = $hotels[$i];
        echo '<th>' . $cur_hotel["name"] . '</th>';
        echo "<br>";
        foreach ($cur_hotel as $feature => $value) {
            echo $value . " " . " ";
        }
        echo "<br>";
    }
    ?>

    <table class="table">

        <hr>

        <thead>
            <tr>
                <?php foreach ($cur_hotel as $key => $value) { ?>

                    <th> <?php echo $key; ?> </th>

                <?php } ?>
            </tr>
        </thead>


        <tbody>

            <?php foreach ($hotels as $cur_hotel) { ?>
                <tr>
                    <th scope="row"> <?php echo $cur_hotel["name"] ?> </th>
                    <td> <?php echo $cur_hotel["description"] ?> </td>
                    <td>
                        <?php
                        if ($cur_hotel["parking"] === true) {
                            echo "Si";
                        } else {
                            echo "No";
                        }
                        ?>
                    </td>
                    <td> <?php echo $cur_hotel["vote"] ?> </td>
                    <td> <?php echo $cur_hotel["distance_to_center"] ?> </td>
                </tr>
            <?php } ?>



        </tbody>

    </table>

</body>

</html>
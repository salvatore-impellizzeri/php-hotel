<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

        <!-- CDN Icon Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <title>Hotel</title>
    </head>
    <body>

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

    <!-- MAIN -->

    <main>

        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">
                            Nome
                        </th>
                        <th scope="col">
                            Descrizione
                        </th>
                        <th scope="col">
                            Parcheggio
                        </th>
                        <th scope="col">
                            Voto
                        </th>
                        <th scope="col">
                            Distanza dal centro
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($hotels as $hotel){
                    ?> 
                    <tr>
                        <td>
                            <?php echo $hotel['name']?>
                        </td>
                        <td>
                            <?php echo $hotel['description']?>
                        </td>
                        <td>
                            <?php if ($hotel['parking'] === true) { ?>    

                                <div>Si</div>

                            <?php } else { ?>   

                                <div>No</div>

                            <?php } ?>
                        </td>
                        <td>
                            <div>
                                <?php echo $hotel['vote']?>
                            </div>
                        </td>
                        <td>
                            <div>
                                <?php echo $hotel['distance_to_center']?> km
                            </div>
                        </td>
                    </tr>

                    <?php
                        }
                    ?>
                </tbody>
            </table>
            
        </div>

    </main>

        <!-- JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>

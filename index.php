<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    
        body{
            background-color: darkred;
            text-align: center;
        }

        .container{
            width: 70%;
            height:80vh;
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: darkgray;
            text-align: left;
            font-size: 22px;
        }

        
    
    </style>
</head>
<body>
<!--         ## Snack 1
        Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60
 -->   
        <h1>RISULTATI SERIA A BASKET</h1>


            <div class="container">

                    <?php

                        $matches=[
                            
                            [
                                'home' => 'Olimpia Milano',
                                'guest' => 'Cantù',
                                'pointsH' => '55',
                                'pointsG' => '60'
                            ],
                            [
                                'home' => 'Brindisi',
                                'guest' => 'Varese',
                                'pointsH' => '95',
                                'pointsG' => '77'
                            ],
                            [
                                'home' => 'Trieste',
                                'guest' => 'Fortitudo Bologna',
                                'pointsH' => '67',
                                'pointsG' => '81'
                            ],
                            [
                                'home' => 'Trento',
                                'guest' => 'Dinamo Sassari',
                                'pointsH' => '94',
                                'pointsG' => '69'
                            ],
                            [
                                'home' => 'Cremona',
                                'guest' => 'Virtus Bologna',
                                'pointsH' => '85',
                                'pointsG' => '89'
                            ],
                            [
                                'home' => 'VL Pesaro',
                                'guest' => 'Brescia',
                                'pointsH' => '70',
                                'pointsG' => '77'
                            ],
                            [
                                'home' => 'Venezia',
                                'guest' => 'Universo Treviso',
                                'pointsH' => '82',
                                'pointsG' => '94'
                            ]
                            
                            ];



                            //var_dump($matches);

                            for($i=0;$i<count($matches);$i++){

                                $homeTeam=$matches[$i]['home'];
                                $guestTeam=$matches[$i]['guest'];
                                $scoreH=$matches[$i]['pointsH'];
                                $scoreG=$matches[$i]['pointsG'];

                                echo  $homeTeam. '  -  '. $guestTeam. '  |  '.$scoreH. '-'. $scoreG.  '<br>';
                            }
                            /* Olimpia Milano - Cantù | 55-60 */
                    ?>

            </div>
</body>
</html>
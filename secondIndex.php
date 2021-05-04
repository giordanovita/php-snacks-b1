<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    
        body{
            background-color: darkslateblue;
            text-align: center;
        }

        .container{
            width: 70%;
            height:80vh;
            margin: auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: lightblue;
            text-align: left;
            font-size: 22px;
        }

        
    
    </style>
</head>
<body>
        <h1>ACCESSO E-MAIL'S ACCOUNT</h1>
  
        <div class="container">


            <?php

                    
               
                 $login='Per accedere al tuo account mail inserisci: Nome, Indirizzo mail, età.';
                 echo $login;
                
                    $name=trim($_GET['nome']);
                    $mail=trim($_GET['mail']);
                    $age=trim($_GET['età']); 
                  
                    
               if((strlen($name)>3) && (strpos($mail, '@') !== false) && (strpos($mail, '@') !== false) && is_numeric($age)){
                    echo  '<br>'. "Accesso riuscito" ;
                }else{
                    echo '<br>'. "Accesso negato" ;
                } 

               
            ?>





        </div>

        <!--  ## Snack 2
        Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
 -->
</body>
</html>
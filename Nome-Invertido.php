<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomes Invertidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php
        $nome = array($_POST['nomeUser1'],$_POST['nomeUser2'],$_POST['nomeUser3'],$_POST['nomeUser4'],$_POST['nomeUser5'],$_POST['nomeUser6'],$_POST['nomeUser7'],$_POST['nomeUser8']);
        
        for($i = 0; $i < count($nome); $i++){
            echo "$nome[$i] <br>";
        }
        echo "<br>";

        // Array anterior na forma invertida
        $arrayInvertido = array($_POST['nomeUser8'],$_POST['nomeUser7'],$_POST['nomeUser6'],$_POST['nomeUser5'],$_POST['nomeUser4'],$_POST['nomeUser3'],$_POST['nomeUser2'],$_POST['nomeUser1']);

        echo "Os nomes na forma invertida é: <br>";
        // Imprimindo array anterior na forma invertida
        for($i = 0; $i < count($arrayInvertido); $i++){
            print_r($arrayInvertido[$i]);
            echo "<br>";
        }
    ?>
</body>
</html>
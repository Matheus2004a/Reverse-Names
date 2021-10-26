<?php
    $nome = array($_POST['nomeUser1'],$_POST['nomeUser2'],$_POST['nomeUser3'],$_POST['nomeUser4'],$_POST['nomeUser5'],$_POST['nomeUser6'],$_POST['nomeUser7'],$_POST['nomeUser8']);
    
    for($i = 0; $i < 8; $i++){
        echo "$nome[$i] <br>";
    }
    echo "<br>";

    // Array anterior na forma invertida
    $arrayInvertido = array($_POST['nomeUser8'],$_POST['nomeUser7'],$_POST['nomeUser6'],$_POST['nomeUser5'],$_POST['nomeUser4'],$_POST['nomeUser3'],$_POST['nomeUser2'],$_POST['nomeUser1']);

    echo "Os nomes na forma invertida é: <br>";
    // Imprimindo array anterior na forma invertida
    for($i = 0; $i < 8; $i++){
        print_r($arrayInvertido[$i]);
        echo "<br>";
    }
?>
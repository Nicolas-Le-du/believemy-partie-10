<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge</title>
</head>
<body>
    <?php 
    #monCode
    function concatener($argument1, $argument2){
        return $argument1. ' ' .$argument2.  '<br>';
    }

    echo concatener('Vive', 'PHP');
    

    #correction
    function reconcatener($stringA, $stringB){
        return "$stringA $stringB";
    }

    echo reconcatener("Vive", "PHP");
    ?>
</body>
</html>

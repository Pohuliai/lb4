<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link
        href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABmJLR0T///////8JWPfcAAAACXBIWXMAAABIAAAASABGyWs+AAAAF0lEQVRIx2NgGAWjYBSMglEwCkbBSAcACBAAAeaR9cIAAAAASUVORK5CYII="
        rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>LB 4 iteh</title>
</head>

<body>
    <?php
    
    $nomer = (int)$_GET['nomer'];
    $anek = $_GET['anek'];
    for ($i = 1; $i <= 15; $i++){
        if (file_exists("aneki/{$i}.txt")){
        $files_amount++;
        } else {
            break;
        }
    }
    $files_amount++;
    if ($nomer > $files_amount){
        $succes = false;
    } else {
        $succes = true;
        $new_anek = fopen("aneki/{$nomer}.txt","w");
        fwrite($new_anek,$anek);
        fclose($new_anek);
    }
    ?>

    <h2> <?php if ($succes) { echo 'Анекдот успішно відредаговано';} else { echo 'Введіть правильний номер анекдоту';} ?></h2> <br>
    <a href="change.php"> Заново</a>
    <br>
    <a href="index.php"> На головну</a>
</body>

</html>
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
    <h2> Сайт з анекдотами </h2> <br>

    <h3> <?php //$fp = fopen('aneki/1.txt', 'r');
                //$anek = readfile($fp);
                $files_amount = 0;
               // $my_file = fopen("aneki/myFile.txt","w");
                for ($i = 1; $i <= 5; $i++){
                    if (file_exists("aneki/{$i}.txt")){
                    $files_amount++;
                    } else {
                        break;
                    }
                }
               // echo $files_amount;
                for ($j = 1; $j <= $files_amount; $j++){
                echo $j;
                
                $file_array = file("aneki/{$j}.txt");
                $f = file("aneki/{$j}.txt");
                for ($i=0; $i < count($f); $i++){
                echo "<br>";
                echo $file_array[$i];
                }
                echo "<br>";
                echo "<br>";
            }
                //print_r($file_array);
                
                // echo readfile("aneki/1.txt"); 
                // echo readfile("aneki/2.txt"); 
                // echo readfile("aneki/3.txt"); 
                //fclose($fp); ?></h3>

            <a href="index1.php">Наступні анекдоти</a>

</body>

</html>
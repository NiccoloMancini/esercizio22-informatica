<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $video1 = array("titolo" => "fiorentina milan 2-1", "idVideo" => "j2nTmvFMYTU");
        $video2 = array("titolo" => "CiccioGamer89 best moments", "idVideo" => "EvNYRB5oazo&t=5s");
        $video3 = array("titolo" => "top 10 infortuni nel calcio", "idVideo" => "mFlDLyB7wCM&rco=1");
        $listaVideo = array($video1, $video2, $video3);

        function inserisciVideoYoutube($video, $larPerc, $altPx) {
            echo "<h2>". $video["titolo"]. "</h2>";
            echo "<iframe width='{$larPerc}%' height='{$altPx}px' src='https://www.youtube.com/embed/{$video["idVideo"]}'></iframe>";
        }

        $w = 50;
        $h = 250;
        for ($i=0; $i < 3; $i++) { 
            inserisciVideoYoutube($listaVideo[$i], $w, $h);
            $w += 25;
            $h +=125;
        }
    ?>
</body>
</html>
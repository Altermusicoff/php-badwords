

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php</title>
  </head>
  <body>
    <p>
        <?php

        $sentence = "Lorem ipsum dolor sit amet consectetur, adipisicing elita.";

        $badword = $_GET['badword'];

        // var_dump($sentence, $badword); die();

        $goodSentence = str_replace($badword, '***', $sentence);

        $lunghezza = strlen($paragrafo);

        

        echo $goodSentence;

        echo $lunghezza;
        ?>
    </p>
  </body>
</html>
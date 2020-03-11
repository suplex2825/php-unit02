<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Quiz: Addition</title>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php 
      include 'inc/quiz.php';
      var_dump($_POST["answer"]);
      var_dump($_POST["id"]);
      var_dump($_SESSION["used-indexes"]);
      var_dump($_SESSION["totalCorrect"]);
    ?>
    <div class="container">
        <div id="quiz-box">
            <?php 
              if(!empty($toastmessage)) {
                 echo "<p>$toastmessage</p>";
              }
            ?>
            <p class="breadcrumbs">Question <?php echo count($_SESSION["used-indexes"]);?> of <?php echo $question_number;?></p>
            <p class="quiz">What is <?php echo $question["leftAdder"];?> + <?php echo $question["rightAdder"];?>?</p>
            <form action="index.php" method="post">
                <input type="hidden" name="id" value="<?php echo $index;?>" />
                <input type="submit" class="btn" name="answer" value="<?php echo $answer[0];?>" />
                <input type="submit" class="btn" name="answer" value="<?php echo $answer[1];?>" />
                <input type="submit" class="btn" name="answer" value="<?php echo $answer[2];?>" />
            </form>
        </div>
    </div>
</body>
</html>
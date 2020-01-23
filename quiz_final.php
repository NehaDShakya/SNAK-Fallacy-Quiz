<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8" />
  <title>SNAK Fallacy Quiz</title>
  <link rel="stylesheet" href="css/quiz_style.css" type="text/css" />
</head>
<body>
  <header>
    <div class="container">
      <h1>SNAK Fallacy Quiz</h1>
    </div>
  </header>
  <main>
    <div class="container">
      <h2>You're Done!</h2>
        <p>Congrats! You have completed the test</p>
        <p>Final Score: <?php echo $_SESSION['score'] * 10; ?></p>
        <a href="quiz_question.php?n=1" class="start">Take Again</a>
    </div>
  </main>
  <footer>
    <div class="container">
      &copy; SNAK Fallacy Quiz
    </div>
  </footer>
</body>
</html>
<?php session_destroy(); ?>

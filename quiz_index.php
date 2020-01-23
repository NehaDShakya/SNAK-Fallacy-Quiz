<?php include 'quiz_database.php'; ?>
<?php
/*
 *  Get Total Questions
 */
 $query ="SELECT * FROM questions";
 //Get results
 $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
 $total = $results->num_rows;
?>
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
      <h2>Test Your Knowledge</h2>
      <p>This is a multiple choice quiz to test your knowledge of fallacies.</p>
      <ul>
        <li><strong>Number of Questions: </strong><?php echo $total; ?></li>
        <li><strong>Type: </strong>Multiple Choice</li>
        <li><strong>Estimated Time: </strong><?php echo $total * .5; ?> Minutes</li>
      </ul>
      <a href="quiz_question.php?n=1" class="start">Start Quiz</a>
    </div>
  </main>
  <footer>
    <div class="container">
      &copy; SNAK Fallacy Quiz
    </div>
  </footer>
</body>
</html>

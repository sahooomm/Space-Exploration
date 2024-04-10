<html>
<?php

$messages = array(
    "low" => "Your score is low. Try again!",
    "medium" => "Good, you can do better.",
    "high" => "Excellent!"
);


shuffle_questions();


$score = 0;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Question 1
    if ($_POST['q1'] == 'C') {
        $score++;
    }
    // Question 2
    if ($_POST['q2'] == 'A') {
        $score++;
    }
    // Question 3
    if ($_POST['q3'] == 'B') {
        $score++;
    }
    // Question 4
    if ($_POST['q4'] == 'C') {
        $score++;
    }
    // Question 5
    if ($_POST['q5'] == 'A') {
        $score++;
    }
    // Question 6
    if ($_POST['q6'] == 'B') {
        $score++;
    }
    // Question 7
    if ($_POST['q7'] == 'D') {
        $score++;
    }
    // Question 8
    if ($_POST['q8'] == 'B') {
        $score++;
    }
    // Question 9
    if ($_POST['q9'] == 'A') {
        $score++;
    }
    // Question 10
    if ($_POST['q10'] == 'C') {
        $score++;
    }
}


$message = "";
if ($score <= 3) {
    $message = $messages["low"];
} elseif ($score <= 7) {
    $message = $messages["medium"];
} else {
    $message = $messages["high"];
}


echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Quiz Score</title>";
echo "</head>";
echo "<body>";
echo "<h1>Your Score: $score</h1>";
echo "<p>$message</p>";
echo "<a href='quiz.html'>Try Again</a>";
echo "</body>";
echo "</html>";


function shuffle_questions() {
    $questions = array(
        "1. Which planet is known as the \"Red Planet\"?",
        "2. Which planet is the largest in our solar system?",
        "3. What is the hottest planet in our solar system?",
        "4. Which planet is known for its prominent rings?",
        "5. Which planet is often called the \"Morning Star\" or the \"Evening Star\"?",
        "6. Which planet has the most moons in our solar system?",
        "7. Which planet is closest to the Sun?",
        "8. What is the name of the only planet in our solar system that rotates on its side?",
        "9. Which planet is known for its prominent Great Red Spot, a giant storm?",
        "10. Which planet has the highest mountain in the solar system named Olympus Mons?"
    );
    shuffle($questions);
}
?>
</html>
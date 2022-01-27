<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rookie Level 1</title>
    <link rel="stylesheet" href="mcqs.css">
</head>
<body>

    <div class="main-div">
    <div class="logo">ROOKIE LEVEL 1</div>
    <div class="inner-div">
            <h2 class="question">Question Comes here</h2>
            <ul>
                <li>
                    <input type="radio" name="answer" id="ans1" class="answer">
                    <label for="ans1" id="option1">Answer Option</label>
                </li>
                <li>
                    <input type="radio" name="answer" id="ans2" class="answer">
                    <label for="ans2" id="option2">Answer Option</label>
                </li>
                <li>
                    <input type="radio" name="answer" id="ans3" class="answer">
                    <label for="ans3" id="option3">Answer Option</label>
                </li>
                <li>
                    <input type="radio" name="answer" id="ans4" class="answer">
                    <label for="ans4" id="option4">Answer Option</label>
                </li>
            </ul>
            <button id="submit">submit</button>
            <button id = "nextLevel" >
            <a  href="mcqsLevel2.php" target ="_self">Next Level</a>
            </button>
            <div id="ShowScore" class="ScoreArea"></div>
        </div>
    </div>
    <script src="mcqs1.js"></script>
</body>
</html>
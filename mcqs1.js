const quizDB = [
{
    question:"1) Which one of the following is not a Java feature? ",
    a: " Object-oriented",
    b: "Use of pointers",
    c: "Portable",
    d: "Dynamic and Extensible",
    ans: "ans2"
},
{
    question:"2) What is the extension of java code files?",
    a: ".js",
    b: ".txt",
    c: ".class",
    d: ".java",
    ans: "ans4"
},
{
    question:"3)Which of these cannot be used for a variable name in Java?",
    a: " identifier & keyword",
    b: " identifier",
    c: "keyword",
    d: "none of the mentioned",
    ans: "ans3"
},
{
    question:"4)Which environment variable is used to set the java path",
    a: "MAVEN_Path",
    b: "JavaPATH",
    c: "JAVA",
    d: "JAVA_HOME",
    ans: "ans4"
},
{
    question:"5)Which of the following is not an OOPS concept in Java?",
    a: " Polymorphism",
    b: " Inheritance",
    c: "Compilation",
    d: "Encapsulation",
    ans: "ans3" 
}
];
const question = document.querySelector('.question');
const option1 = document.querySelector('#option1');
const option2 = document.querySelector('#option2');
const option3 = document.querySelector('#option3');
const option4 = document.querySelector('#option4');
const submit  = document.querySelector('#submit');
const answers = document.querySelectorAll('.answer');
const ShowScore = document.querySelector('#ShowScore');

let questionCount = 0;
let score = 0;
const loadQuestion = () => {
    const questionList = quizDB[questionCount];
    question.innerText = questionList.question;
    option1.innerText = questionList.a;
    option2.innerText = questionList.b;
    option3.innerText = questionList.c;
    option4.innerText = questionList.d;

}
loadQuestion();
const getCheckAnswer = () => {
    let answer;
    answers.forEach((curAnsElem) => {
        if( curAnsElem.checked){
             answer = curAnsElem.id;
            }
        });
        return answer; 
    };
    
const deselectAll =() =>{
    answers.forEach((curAnsElem)=> curAnsElem.checked = false);
}


submit.addEventListener('click', () =>{
    const checkedAnswer = getCheckAnswer();
    console.log(checkedAnswer);
    

    if(checkedAnswer ===  quizDB[questionCount].ans){
        score++;
    };
    questionCount++;
    deselectAll();

    if(questionCount < quizDB.length){
        loadQuestion();
    }else{
        ShowScore.innerHTML = ` 
        <h3> You Scored ${score}/${quizDB.length} </h3>
        <button class ="btn" onclick = "location.reload()"> Play Again</button>
        `;
        ShowScore.classList.remove('ScoreArea')
    }
});
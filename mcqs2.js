const quizDB = [
{
    question:"1)Which class provides system independent server side implementation?",
    a: " Server",
    b: "ServerReader",
    c: "Socket",
    d: "ServerSocket",
    ans: "ans4"
},
{
    question:"2)What is the numerical range of a char data type in Java",
    a: "0 to 256",
    b: "-128 to 127",
    c: "0 to 65535",
    d: "0 to 32767",
    ans: "ans3"
},
{
    question:"3)Which of these keywords are used for the block to be examined for exceptions",
    a: "check",
    b: "throw",
    c: "catch",
    d: "try",
    ans: "ans4"
},
{
    question:"4)Which of these packages contains the exception Stack Overflow in Java?",
    a: "java.io",
    b: "java.system",
    c: "java.lang",
    d: " java.util",
    ans: "ans3"
},
{
    question:"4)Which of these packages contains the exception Stack Overflow in Java?",
    a: "intf",
    b: " Intf",
    c: "interface",
    d: " Interface",
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
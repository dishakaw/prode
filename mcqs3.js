const quizDB = [
{
    question:" 1) Which of these statements is incorrect about Thread?",
    a: "start() method is used to begin execution of the thread",
    b: "run() method is used to begin execution of a thread before start() method in special cases",
    c: "A thread can be formed by implementing Runnable interface only",
    d: "A thread can be formed by a class that extends Thread class",
    ans: "ans2"
},
{
    question:"2)Which of the below is not a Java Profiler?",
    a: "BJProfiler",
    b: "Eclipse Profiler",
    c: "JVM",
    d: "JConsole",
    ans: "ans3"
},
{
    question:"3) Which of the following option leads to the portability and security of Java?",
    a: "Bytecode is executed by JVM",
    b: "The applet makes the Java code secure and portable",
    c: "Use of exception handling",
    d: "Dynamic binding between objects",
    ans: "ans2"
},
{
    question:"4)Which of the following is a superclass of every class in Java?",
    a: "Array List",
    b: "Abstract Class",
    c: "Object Class",
    d: "String",
    ans: "ans3"
},
{
    question:"5)In which memory a String is stored, when we create a string using new operator?",
    a: "Heap Memory",
    b: "String Memory",
    c: "Stack",
    d: "Random Storage Space",
    ans: "ans1"
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
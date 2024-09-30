window.addEventListener('load', init);


let currentQuestionIndex = 0;
//globals

const questions = [
    { title: 'Vraag 1', text: 'Heeft u enige ervaring met VR apparatuur?' },
    { title: 'Vraag 2', text: 'Wat is de blabla van de bla bla?' },
    { title: 'Vraag 3', text: 'Heeft u al eens eerder een virtuele wereld betreden?' },
    { title: 'Vraag 4', text: 'Sigma Male grindset' },
    // Add more questions as needed
];

function init() {
    console.log('Juno vragenlijst init');
    console.log('Juno vragenlijst init');
    // Define buttons
    let redAnswer = document.querySelector('.button-red');
    let blueAnswer = document.querySelector('.button-blue');

    redAnswer.addEventListener('click', () => newQuestion(redAnswer));
    blueAnswer.addEventListener('click', () => newQuestion(blueAnswer));

}



function newQuestion(button) {
    console.log('New question');



    let question = document.querySelector('.question-title');
    let answer = document.querySelector('.question-text');
    let answerSection = document.querySelector('.answer-section');

    button.classList.add('show2');

    question.classList.add('show');
    answer.classList.add('show');

    console.log('show added');



    // Trigger reflow to restart the animation
    void question.offsetWidth;
    void answer.offsetWidth;
    void answerSection.offsetWidth;

    // Add the show class to trigger the fade-in effect after a short delay
    setTimeout(() => {
        question.classList.remove('show');
        answer.classList.remove('show');

    }, 1000); // 50ms delay

    setTimeout(() => {
    button.classList.remove('show2');
    }, 1000); // 50ms delay

    // Update the content
    setTimeout(() => {
        currentQuestionIndex = (currentQuestionIndex + 1) % questions.length;
        question.innerText = questions[currentQuestionIndex].title;
        answer.innerText = questions[currentQuestionIndex].text;
    }, 1000); // 50ms delay

}
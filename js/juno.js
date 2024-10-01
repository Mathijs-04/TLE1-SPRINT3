
let qaCounter = 0;
let blueString = 0;
let redString = 0;
let finalCount = 0;
let currentQuestionIndex = 0;

window.addEventListener('load', init);

const questions = [
    { "title": "Vraag 1", "text": "Heeft u enige ervaring met VR apparatuur?" },
    { "title": "Vraag 2", "text": "Heeft u eerder een VR-bril gebruikt?" },
    { "title": "Vraag 3", "text": "Kunt u zelfstandig een VR-bril instellen en configureren?" },
    { "title": "Vraag 4", "text": "Voelt u zich comfortabel tijdens het navigeren in een VR-omgeving?" },
    { "title": "Vraag 5", "text": "Heeft u ooit bewegingsziekte ervaren tijdens het gebruik van VR-apparatuur?" },
    { "title": "Vraag 6", "text": "Kunt u objecten oppakken en manipuleren in een VR-omgeving zonder problemen?" },
    { "title": "Vraag 7", "text": "Heeft u ervaring met het spelen van VR-games?" },
    { "title": "Vraag 8", "text": "Bent u in staat om virtuele instructies te volgen om een taak uit te voeren in VR?" },
    { "title": "Vraag 9", "text": "Heeft u een VR-bril in huis?" },
    { "title": "Vraag 10", "text": "Heeft u ooit een VR-simulator gebruikt voor educatieve doeleinden?" },
    { "title": "Vraag 11", "text": "Vindt u het eenvoudig om tussen verschillende VR-applicaties te schakelen?" }
];

function init() {
    // console.log('Juno vragenlijst init');
    // console.log('Juno vragenlijst init');
    // Define buttons

    let redAnswer = document.querySelector('.button-red');
    let blueAnswer = document.querySelector('.button-blue');

    redAnswer.addEventListener('click', () => newQuestion(redAnswer));
    blueAnswer.addEventListener('click', () => newQuestion(blueAnswer));


}



function newQuestion(button, finalCount) {
    // console.log('New question');



    let question = document.querySelector('.question-title');
    let answer = document.querySelector('.question-text');
    let answerSection = document.querySelector('.answer-section');
    let redButton = document.querySelector('.button-red');
    let blueButton = document.querySelector('.button-blue');



    // Add the show2 class to the opposite button
    if (button.classList.contains('button-red')) {
        blueButton.classList.add('show2');
        redString += 1;
        counter();


    } else if (button.classList.contains('button-blue')) {
        redButton.classList.add('show2');
        blueString += 1;
        counter();

    }
    // console.log(blueString + 'gang');
    // console.log(redString + 'gang');


    question.classList.add('show');
    answer.classList.add('show');

    // console.log('show added');




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
    redButton.classList.remove('show2');
    blueButton.classList.remove('show2');
    }, 1000); // 50ms delay

    // Update the content
    setTimeout(() => {
        currentQuestionIndex = (currentQuestionIndex + 1) % questions.length;
        question.innerText = questions[currentQuestionIndex].title;
        answer.innerText = questions[currentQuestionIndex].text;
    }, 1000); // 50ms delay



}

function counter () {

    qaCounter += 1;

    console.log('qaCounter staat op:' + qaCounter);

    if (qaCounter === 4) {

        blueAbort = blueString;
    }


    if (qaCounter === 5 && blueString > blueAbort) {
        blueString = blueString - 100;
    }

    if (qaCounter === 8) {
        blueAbort = blueString;
    }

    if (qaCounter === 9 && blueString > blueAbort) {
        redString = redString + 100;
    }

    finalCount = blueString + redString;
    console.log('Ja counter:' + blueString);
    console.log('Nee counter:' + redString);

    console.log('FINAL COUNT:' + finalCount);

    if (qaCounter >= 11) {
        if (blueString < 0) {
            //MOTIONSICKNESS URL
            window.location.replace("https://localhost/TLE1-SPRINT3/helaas.php");
        } else if ( blueString < 4) {
            // BEGINNER
            window.location.replace("http://localhost/TLE1-SPRINT3/product.php?id=1");
        } else if ( blueString < 7) {
            // Intermidiate
            window.location.replace("http://localhost/TLE1-SPRINT3/product.php?id=2");
        } else if ( blueString < 10) {
            // Expert
            window.location.replace("http://localhost/TLE1-SPRINT3/product.php?id=3");
        } else if (redString > 17) {
            // JE HEBT AL EEN VRBRIL WE KUNNEN JE NIET HELPEN
            window.location.replace("https://localhost/TLE1-SPRINT3/gelukkig.php");
        }
    }




};
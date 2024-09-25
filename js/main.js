window.addEventListener('load', init);
let parent;
let audio;
let audioPlaying = false;
let databaseCall = "./webservice/index.php";

let exp;

document.addEventListener("DOMContentLoaded", function() {
    setTimeout(function() {
        console.log('timer starts');
        var buttonJoin = document.querySelector('.button_join');
        if (buttonJoin) {
            console.log("buttonJoin exists");
            buttonJoin.classList.add('button_join_visible');
        }
    }, 10000); // 30 seconds
});


function init() {
    console.log(window.location.href);
    AJAXRequest(databaseCall, expCardHandler)

}

function AJAXRequest(location, successCallback) {
    fetch(location)
        .then((response) => {
            if (!response.ok) {
                throw new Error(response.statusText);
            }
            return response.json();
        })
        .then(successCallback)
        .catch(errorHandler);
}
function errorHandler() {
    console.log('Geen informatie opgehaald')
}

// function expCardHandler(data){
//     const expBatch = document.querySelector("#expTaps");
//     const expUl = document.createElement("ul");
//
//     for (exp of data){
//         const expListItem = document.createElement("li");
//         expListItem.innerText = exp.experience;
//
//         expUl.appendChild(expListItem);
//     }
//     expBatch.appendChild(expUl);
// }


function toggleAudio() {
    console.log("Audio Toggled");
    let audioImage = document.getElementById('audioToggle');
    if (audioPlaying === false) {
        playAudio();
        audioImage.src = './img/AudioOn.webp';
        audioPlaying = true;
    } else {
        stopAudio();
        audioImage.src = './img/AudioOff.webp';
        audioPlaying = false;
    }
}

function playAudio() {
    audio = new Audio('./audio/Audio.wav');
    audio.play();
}

function stopAudio() {
    if (audio) {
        audio.pause();
        audio.currentTime = 0;
    }
}
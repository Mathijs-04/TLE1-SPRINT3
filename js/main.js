window.addEventListener('load', init);
let parent;
function init() {
    console.log(window.location.href);
    urlChecker();
    playAudio();
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
    console.log("Information fetched")
}

function mainSecMaker(data) {
    if (Array.isArray(data)) { // Check if data is an array
        console.log("er staat niks")
    } else { // If data is not an array, assume it's a single experience detail
        const h2 = document.querySelector(".titleExp")
        h2.innerText = data.experience;
        const expDiv = document.querySelectorAll("#different");
        const p = document.querySelector(".context");
        p.innerText = data.information;
        expDiv.append(p);
        const expImgDiv = document.querySelector("#expImgDiv")
        const expImg = document.createElement("img")
        expImg.classList.add("expImage");
        expImg.src = data.expImage;
        console.log(expImg)
        expImgDiv.appendChild(expImg);
        const expLinkDiv = document.querySelector("#videoLink");
        const link = document.createElement("a");
        link.classList.add("expUrl");
        link.innerHTML = data.Expurl;
        expLinkDiv.append(link);
    }
}


function errorHandler(){
    console.log('Geen informatie opgehaald')
}

function urlChecker(){
    const url =  new URL(decodeURIComponent(window.location.href));
    const id = url.searchParams.get('id');
    parent = id;
    if (id === undefined || id === null) {
        console.log('No ID found');
    } else {
        console.log(`ID found: ${parent}`);
        AJAXRequest(`data.php?id=${parent}`, mainSecMaker);
    }
}

// Audio Player
function playAudio() {
    let audio = new Audio('./audio/Audio.wav');
    audio.play();
}
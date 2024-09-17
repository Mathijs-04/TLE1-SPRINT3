window.addEventListener('load', init);
let parent;
function init() {
    console.log(window.location.href);
    urlChecker();
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
        for (let experience of data) {
            const expDiv = document.querySelectorAll("#different");
            const p = document.querySelector(".context");
            p.innerText = experience.experience;
            expDiv.append(p);
        }
    } else { // If data is not an array, assume it's a single experience detail
        const expDiv = document.querySelectorAll("#different");
        const p = document.querySelector(".context");
        p.innerText = data.experience;
        expDiv.append(p);
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
        AJAXRequest("data.php", mainSecMaker);
    } else {
        console.log(`ID found: ${parent}`);
        AJAXRequest(`data.php?id=${parent}`, mainSecMaker);
    }
}
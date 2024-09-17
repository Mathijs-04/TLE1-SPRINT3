window.addEventListener('load', init);

function init() {
    AJAXRequest("data.php", mainSecMaker);
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

function mainSecMaker(data){
for (let experience of data){
    const expDiv = document.querySelectorAll("#different")
    const p = document.querySelector(".context");
    p.innerText = experience.experience;
    expDiv.append(p);
}
}
function errorHandler(){
    console.log('Geen informatie opgehaald')
}

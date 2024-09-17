document.addEventListener("DOMContentLoaded", function() {
    setTimeout(function() {
        var buttonJoin = document.querySelector('.button_join');
        if (buttonJoin) {
            buttonJoin.classList.add('button_join_visible');
        }
    }, 23000); // 23 seconds
});
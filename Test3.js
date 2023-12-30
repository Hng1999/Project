// JavaScript source code
let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');

let formBtn = document.querySelector('#login-btn');
let loginForm = document.querySelector('.login-form-container');
let formClose = document.querySelectorAll('#form-close');

function openRegister() {
    let cardFront = document.querySelector('.card-front');
    let cardBack = document.querySelector('.card-back');
    cardFront.style.transform = "rotateY(-180deg)";
    cardBack.style.transform = "rotateY(0deg)";
}

function openLogin() {
    let cardFront = document.querySelector('.card-front');
    let cardBack = document.querySelector('.card-back');
    cardFront.style.transform = "rotateY(0deg)";
    cardBack.style.transform = "rotateY(180deg)";
}

searchBtn.addEventListener('click', () => {
    searchBtn.classList.toggle('fa-search');
    searchBtn.classList.toggle('fa-xmark');
    searchBar.classList.toggle('active');
});

formBtn.addEventListener('click', () => { loginForm.classList.add('active'); });
formClose.forEach(formClose => {
    formClose.addEventListener('click', () => {
        loginForm.classList.remove('active');
    });
});

$(document).ready(function () {
    $('.nav-pills a').on('click', function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
});

function toggleDropdown() {
    var dropdown = document.getElementById("myDropdown");
    if (dropdown.style.display === "none") {
        dropdown.style.display = "block";
    } else {
        dropdown.style.display = "none";
    }
}

// Close the dropdown if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.style.display === "block") {
                openDropdown.style.display = "none";
            }
        }
    }
}
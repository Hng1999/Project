// JavaScript source code
let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');
let formBtn = document.querySelector('#login-btn');
let loginForm = document.querySelector('.login-form-container');
let formClose = document.querySelector('#form-close');

searchBtn.addEventListener('click', () => {
    searchBtn.classList.toggle('fa-search');
    searchBtn.classList.toggle('fa-xmark');
    searchBar.classList.toggle('active');
});

formBtn.addEventListener('click', () => { loginForm.classList.add('active'); });
formClose.addEventListener('click', () => { loginForm.classList.remove('active'); });
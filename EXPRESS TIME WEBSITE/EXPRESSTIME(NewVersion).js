// JavaScript source code
let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');
let formBtn = document.querySelector('#login-btn');
let loginForm = document.querySelector('.login-form-container');
let formClose = document.querySelector('#form-close');
let adminBtn = document.querySelector('#admin-login-btn')
let adminloginForm = document.querySelector('.admin-login-form-container');
let adminformClose = document.querySelector('#admin-form-close');

searchBtn.addEventListener('click', () => {
    searchBtn.classList.toggle('fa-search');
    searchBtn.classList.toggle('fa-xmark');
    searchBar.classList.toggle('active');
});

formBtn.addEventListener('click', () => { loginForm.classList.add('active'); });
formClose.addEventListener('click', () => { loginForm.classList.remove('active'); });

adminBtn.addEventListener('click', () => { adminloginForm.classList.add('active'); });
adminformClose.addEventListener('click', () => { adminloginForm.classList.remove('active'); });

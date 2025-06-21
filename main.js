const body = document.querySelector('body');
const sidebar = document.querySelector('.sidebar');
const toggleButton = document.querySelector('.toggle');
const searchBox = document.querySelector('.search-box');
const mode = document.querySelector('.mode');
const modeSwitch = document.querySelector('.toggle-switch');
const modeText = document.querySelector('.mode-text');

// Toggle sidebar visibility
modeSwitch.addEventListener('click', () => {
    body.classList.toggle('dark');
    toggleButton.classList.toggle('close');
    searchBox.classList.toggle('close');
});
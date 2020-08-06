const button = document.querySelector(".close");
button.addEventListener('click', () => {
    button.parentElement.remove();
});
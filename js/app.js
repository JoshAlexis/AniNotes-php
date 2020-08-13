const button = document.querySelector(".close");
if(button !== null){
    button.addEventListener('click', () => {
        button.parentElement.remove();
    });
}
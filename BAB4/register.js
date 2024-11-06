// Function to show welcome message
function showWelcomeMessage() {
    const message = document.createElement("div");
    message.textContent = "REGISTER BERHASIL";
    message.style.position = "fixed";
    message.style.top = "40%";
    message.style.left = "50%";
    message.style.transform = "translate(-50%, -50%)";
    message.style.backgroundColor = "#e74c3c";
    message.style.color = "#fff";
    message.style.padding = "10px";
    message.style.borderRadius = "10px";
    message.style.zIndex = "1000";
    document.body.appendChild(message);

    setTimeout(() => {
        message.remove();
    }, 3000);
}


function openConfirmPopup() {
    document.getElementById("confirmPopup").style.display = "block";
}


function closeConfirmPopup() {
    document.getElementById("confirmPopup").style.display = "none";
}


function confirmRegistration() {
    closeConfirmPopup(); 
    showWelcomeMessage(); 
}


window.onload = function() {
    const registerButton = document.querySelector('button');
    registerButton.addEventListener('click', (event) => {
        event.preventDefault();
        openConfirmPopup(); 
    });
};

const nextButton = document.querySelector("button")
const radioInputs = document.querySelectorAll("input")

radioInputs.forEach(radioInput => {
    radioInput.addEventListener("change", function () {
        nextButton.classList.add("active") 
    })
});
const nextButton = document.querySelector("button")
const inputs = document.querySelectorAll("input")
const form = document.querySelector("form")


inputs.forEach(input => {

    input.addEventListener("keyup", function () {
        if(this.value != "") {
            this.style.border = "1px solid green"  
        } else {
            this.style.border = "1px solid red"   
        }
    })
})

form.addEventListener("submit", (e) => {
    inputs.forEach(input => {
        if(input.value === "") {    
            e.preventDefault();
            input.style.border = "1px solid red"
        } 
    })
})



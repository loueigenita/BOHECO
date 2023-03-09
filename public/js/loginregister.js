const inputs = document.querySelectorAll(".inp-field");


inputs.forEach((inp) =>{
    inp.addEventListener("focus", () => {
        inp.classList.add("active");
    });
    inp.addEventListener("blur", ()=>{
        if(inp.value != "") return;
        inp.classList.remove("active");
    })
})
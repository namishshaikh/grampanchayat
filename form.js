
console.log('hey gazal');

var plusIcon = document.querySelector(".plus-icon");

plusIcon.addEventListener("click", function() {
    var formInputs = document.querySelectorAll(".form-input");

    for( var i=0;i< formInputs.length;i++) {
        var clone= formInputs[i].cloneNode(true);
        clone.id= formInputs[i].id + "_";
        console.log(formInputs.length);
       
    }
    document.querySelector(".form-input").appendChild(clone);
    
   
});
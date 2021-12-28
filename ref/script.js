


var x = document.getElementsByClassName("faqTitle");
for (var i = 0; i < x.length; i++) {
    x[i].addEventListener("click", function(event) {
       console.log(this);
        var arrow =this.querySelector("span");
    
       if(arrow.textContent == "∧"){
            arrow.textContent = "∨";
       }else{
            arrow.textContent = "∧"; 
       }
       var target =this.nextElementSibling;
       console.log(target);
       target.classList.toggle("faqHidden");
       console.log("Button pressed");

       
    });
}
/*
var x = document.getElementsByClassName("faqToogleArrow");
for (var i = 0; i < x.length; i++) {
    x[i].addEventListener("click", function(event) {
       console.log(this);
        
    
       if(this.textContent == "∧"){
           this.textContent = "∨";
       }else{
           this.textContent = "∧"; 
       }
       var target =this.parentElement.nextElementSibling;
       console.log(target);
       target.classList.toggle("faqHidden");
       console.log("Button pressed");
    });
}
*/


var galeryTog = document.getElementsByClassName("galerieToogleArrow");
for (var i = 0; i < galeryTog.length; i++) {
    galeryTog[i].addEventListener("click", function(event) {
       console.log(this);
        
    
       if(this.textContent == "∧"){
           this.textContent = "∨";
       }else{
           this.textContent = "∧"; 
       }
       var target =this.parentElement.nextElementSibling;
       console.log(target);
       target.classList.toggle("galeryHiden");
       console.log("Button pressed");
    });
}

var imgHover = document.getElementsByClassName("container");
for (var i = 0; i < imgHover.length; i++) {
    imgHover[i].addEventListener("mouseover", function(event) {
       console.log(this);
       var target = this.firstChild;  
       target.style.opacity ="0.3";
       target.nextElementSibling.style.display = "block";
     
    });
}

for (var i = 0; i < imgHover.length; i++) {
    imgHover[i].addEventListener("mouseout", function(event) {
       console.log(this);
       var target = this.firstChild;  
       target.style.opacity ="1.0";
       target.nextElementSibling.style.display = "none";
     
    });
}

var hamberger = document.getElementById("menuHam");
hamberger.addEventListener("click", function(event){
    this.classList.toggle("is-active");
    var target =document.getElementById("wrappTopNavMobile");
    if (target.style.display =="flex"){
        target.style.display = "none";
    }else{
        target.style.display= "flex";
    }
   
    
})
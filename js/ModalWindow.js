var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var close = document.getElementsByClassName("closeModal")[0];

btn.onclick = function(){
    modal.style.display = "block";
}

close.onclick = function(){
    modal.style.display = "none";
}

window.onclick = function(event){
    if (event.target == modal){
        modal.style.display = "none";
    }
    
}

var modal2 = document.getElementById("myModal2");
var btn2 = document.getElementById("myBtn2");
var close2 = document.getElementsByClassName("closeModal2")[0];

btn2.onclick = function(){
    modal2.style.display = "block";
}

close2.onclick = function(){
    modal2.style.display = "none";
}

window.onclick = function(event2){
    if (event2.target == modal2){
        modal2.style.display = "none";
    }
    
}
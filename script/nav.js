function changeIcon(x) {
    x.classList.toggle("change");
    document.getElementById("vertical-nav").classList.toggle("show-nav");
    var icon=document.querySelector(".change-icon");
    if(icon.style.position=="fixed"){
        icon.style.position="relative";
    }
    else{
        icon.style.position="fixed";
    }
}
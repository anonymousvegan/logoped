var redni_broj_slajda, slajdovi, tacke;
function pripremi_slajdove(){
    redni_broj_slajda=0; //prvi slajd
    slajdovi=document.getElementsByClassName("slajd"); //svi slajdovi
    slajdovi[redni_broj_slajda].style.opacity=1; //prikazuje prvi slajd
    /* podešavanje tački */
    tacke=[];  // tačke su niz
    var kontejner_za_tacke=document.getElementById("kontejner-za-tacke"); //kontjener za tačke
    for(var i=0; i<slajdovi.length; i++){  //pravi novi tačku onoliko puta koliko ima slajdova
        var tacka=document.createElement("span"); // pravi tačku
        tacka.classList.add("tacka");  //dodaje joj klasu
        tacka.setAttribute("onClick","promeni_slajd("+i+",true)");
        kontejner_za_tacke.append(tacka); //ubacuje je u kontejner
        tacke.push(tacka); //ubacuje je u js niz.
    }
    tacke[redni_broj_slajda].classList.add("aktivna-tacka"); //markira aktivnu tačku
}
pripremi_slajdove();
//funkcija za menjanje slajda nevezano za tačke //
function sledeci_i_prethodni(n, restart){
promeni_slajd(redni_broj_slajda+n, restart);
}

/* funkcija za menjanje slajda   (klikom na tačke)*/
function promeni_slajd(n, restart){ 
    if (restart==true){
        clearInterval(t);
        podesitajmer();
    }
    var i, trenutni_slajd, sledeci_slajd;
    var animacije={
        za_trenutni_slajd: "",
        za_sledeci_slajd: ""
    };
    if(n>redni_broj_slajda){
        if(n>=slajdovi.length){n=0}
        animacije.za_trenutni_slajd="pomeri-levo-trenutni-slajd";
        animacije.za_sledeci_slajd="pomeri-levo-sledeci-slajd";
    }
    else if(n<redni_broj_slajda){
        if(n<0){n=slajdovi.length-1}
        animacije.za_trenutni_slajd="pomeri-desno-trenutni-slajd";
        animacije.za_sledeci_slajd="pomeri-desno-sledeci-slajd";
    }
    if (n!=redni_broj_slajda){
        sledeci_slajd=slajdovi[n];
        trenutni_slajd=slajdovi[redni_broj_slajda];
        for(i=0; i<slajdovi.length; i++){
            slajdovi[i].className="slajd";
            slajdovi[i].style.opacity=0;
            tacke[i].classList.remove("aktivna-tacka");
        }
        trenutni_slajd.classList.add(animacije.za_trenutni_slajd);
        sledeci_slajd.classList.add(animacije.za_sledeci_slajd);
        tacke[n].classList.add("aktivna-tacka");
        redni_broj_slajda=n;
    }
}
function podesitajmer(){
    t=setInterval(function () {
        sledeci_i_prethodni(1, false);   
    }, 3000)
}
podesitajmer();
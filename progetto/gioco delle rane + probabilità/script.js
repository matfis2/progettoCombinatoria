

//setup
var avviap = document.getElementById('partita');
avviap.disabled=true;
var btdado = document.getElementById('rollButton');
btdado.disabled=true;
var primoparagrafo= document.getElementById('primapt');
var btrip=document.getElementById("finepartita");

var puntaButton = document.getElementById("puntaButton");
var risultato = document.getElementById("risultato");
var opzioniRadio = document.querySelectorAll('input[type="radio"]');
var messaggioErrore = document.getElementById("messaggioErrore");
avviap.addEventListener('click', () => {
    primoparagrafo.style.display = 'block';
    bt1.disabled=true;
    bt2.disabled=true;
    btdado.disabled=false;
  
    for (var i = 0; i < opzioniRadio.length; i++) {
        opzioniRadio[i].disabled = true;
    }
  
});

var btscommessa= document.getElementById('scommetti');
var divscommessa = document.getElementById('zonascommessa');

// Aggiungiamo un gestore di eventi per il pulsante "Mostra Div"
btscommessa.addEventListener('click', function() {
    // Verifichiamo lo stato attuale del div
    if (divscommessa.style.display === 'none' || divscommessa.style.display === '') {
        // Il div è nascosto o non ha uno stile "display" definito
        divscommessa.style.display = 'block'; // Mostra il div
    } else {
        // Il div è visibile
        divscommessa.style.display = 'none'; // Nascondi il div
    }
    
});

avviap.addEventListener('click',function(){
    
  

});




//Bottoni per scommessa 
const bt1 = document.getElementById('puntata1');
const bt2 = document.getElementById('puntata2');


var sol=document.getElementById('importo');
var solditot=parseFloat(sol.textContent);

bt1.addEventListener('click', () => {
    var par=document.getElementById('sommascommessa');
    var soldiscom=parseFloat(par.textContent);
    if(soldiscom<solditot){
        avviap.disabled=false;
        par.textContent=(soldiscom+50.00).toFixed(2)+"$";
    }
    
});

bt2.addEventListener('click', () => {
    var par=document.getElementById('sommascommessa');
    var soldiscom=parseFloat(par.textContent);
    if(soldiscom>0){
        par.textContent=(soldiscom-50.00).toFixed(2)+"$";
        if(soldiscom-50.00===0){
            avviap.disabled=true;
        }
    }else{

    }
    
});
var btriprova = document.getElementById("riprova");

btriprova.addEventListener("click", function () {
    var btriprova = document.getElementById("riprova");
    var primapt=document.getElementById("primapt");
    var messageDiv = document.getElementById("finepartita");
    var secondoparagrafo=document.getElementById("secondapt");
    divscommessa.style.display = 'none';
    messageDiv.style.display = 'none';
    bt1.disabled=false;
    bt2.disabled=false;
    btdado.disabled=false;
    paginaprincipale();
    avviap.disabled=true;
    btriprova.style.display='none';
    for (var i = 0; i < opzioniRadio.length; i++) {
        opzioniRadio[i].disabled = false;
    }
    primoparagrafo.disabled=true;
    aiutomate.style.display="none";
    secondoparagrafo.style.display="none";
    primapt.style.display="none";

});

const aiutomate = document.getElementById("aiutomate");

// Aggiungi un listener per il click del pulsante
aiutomate.addEventListener("click", function() {
    var secondoparagrafo=document.getElementById("secondapt");
    secondoparagrafo.style.display="inline-block";
});




document.addEventListener("DOMContentLoaded", paginaprincipale())
function paginaprincipale () {
    const rollButton = document.getElementById("rollButton");
    const resultTextArea = document.getElementById("resultTextArea");
    const previousResults = [];
    var elementonlanci=document.getElementById("contalanci");
    var cont=10;
    var messageDiv = document.getElementById("finepartita");
   elementonlanci.textContent=cont;
   
   function valoreRadioSelezione(){
            // Ottieni riferimento agli elementi radio all'interno del contenitore "opzioni"
    var opzioniRadio = document.getElementsByName("posizione"); // "posizione" è il nome del gruppo di pulsanti radio

// Inizializza una variabile per memorizzare il valore selezionato
    var valoreSelezionato = "";

// Trova il valore selezionato
    for (var i = 0; i < opzioniRadio.length; i++) {
        if (opzioniRadio[i].checked) {
            valoreSelezionato = opzioniRadio[i].value;
             // Esci dal ciclo una volta trovato il valore selezionato
        }
    }
    return valoreSelezionato;
    }


//ora nella variabile valoreSelezionato ho la posizione su cui l'utente ha puntato i soldi

    rollButton.addEventListener("click", function () {
        const result = rollDie();
        const imagerana = document.getElementById('posrana');
        
        // Aggiungi il nuovo risultato al testo esistente nella textarea
        var text=resultTextArea.value;
        text=text+`Risultato del dado: ${result}\n`;
        setTimeout(function(){
            console.log(
                resultTextArea.value =text)
        }, 1500)
        function spostaImmagine() {
         
            var stileCSS = window.getComputedStyle(imagerana);
            var valoreRight = stileCSS.getPropertyValue('right');
            var numberRight=parseFloat(valoreRight);
            var importo=document.getElementById('importo');
            var par=document.getElementById('sommascommessa');
            var soldiscom=parseFloat(par.textContent);
            var posizione=1;
            

            // Applica una trasformazione CSS per spostare l'immagine a una nuova posizione
            let newPositionR;
            
                if(numberRight==1100){
                    cont--;
                    
                    switch (result) {
                        case 1:
                            newPositionR = 950;
                            posizione=2;
                            break;
                        case 2:
                            newPositionR = 950;
                            posizione=2;
                            break;
                        case 3:
                            newPositionR = 790;
                            posizione=3;
                            break;
                        case 4:
                            newPositionR= 630;
                            posizione=4;
                            break;
                        case 5:
                            newPositionR = 630;
                            posizione=4;
                            break;
                        case 6:
                            newPositionR = 790;
                            posizione=3;
                            break;
        
                    }
                }
            
           
            
            if(numberRight==790){
                cont--;
                
                switch (result) {
                    case 1:
                        newPositionR = 1100;
                        posizione=1;
                        break;
                    case 2:
                        newPositionR = 950;
                        posizione=2;
                        break;
                    case 3:
                        newPositionR = 790;
                        posizione=3;
                        break;
                    case 4:
                        newPositionR= 1100;
                        posizione=1;
                        break;
                    case 5:
                        newPositionR = 630;
                        posizione=4;
                        break;
                    case 6:
                        newPositionR = 790;
                        posizione=3;
                        break;
    
                }
                
            }
            if(numberRight==950){
                cont--;
                
                switch (result) {
                    case 1:
                        newPositionR = 1100;
                        posizione=1;
                        break;
                    case 2:
                        newPositionR = 1100;
                        posizione=1;
                        break;
                    case 3:
                        newPositionR = 790;
                        posizione=3;
                        break;
                    case 4:
                        newPositionR= 630;
                        posizione=4;
                        break;
                    case 5:
                        newPositionR = 1100;
                        posizione=1;
                        break;
                    case 6:
                        newPositionR = 790;
                        posizione=3;
                        break;
    
                }
                
            }
              
            if(numberRight==630){
                cont--;
               
                switch (result) {
                    case 1:
                        newPositionR = 1100;
                        posizione=1;
                        break;
                    case 2:
                        newPositionR = 1100;
                        posizione=1;
                        break;
                    case 3:
                        newPositionR = 790;
                        posizione=3;
                        break;
                    case 4:
                        newPositionR= 1100;
                        posizione=1;
                        break;
                    case 5:
                        newPositionR = 480;
                        posizione=5;
                        break;
                    case 6:
                        newPositionR = 480;
                        posizione=5;
                        break;
    
                }
                
            }
              
            if(numberRight==480){
                cont--;
               
                switch (result) {
                    case 1:
                        newPositionR = 1100;
                        posizione=1;
                        break;
                    case 2:
                        newPositionR = 790;
                        posizione=3;
                        break;
                    case 3:
                        newPositionR = 790;
                        posizione=3;
                        break;
                    case 4:
                        newPositionR= 630;
                        posizione=4;
                        break;
                    case 5:
                        newPositionR = 480;
                        posizione=5;
                        break;
                    case 6:
                        newPositionR = 630;
                        posizione=4
                        break;
    
                }
                
            }
              
            // Applica la nuova posizione alla rana
            imagerana.style.right = newPositionR + 'px';
            elementonlanci.textContent=cont;
            function restval(){
                var a;
                if(posizione==1){
                    a=1100;
                }
                if(posizione==2){
                    a=950;
                }
                if(posizione==3){
                    a=790;
                }
                if(posizione==4){
                    a=630;
                }
                if(posizione==5){
                    a=480;
                }

                return a;
            }
             // Cambia le coordinate di traslazione come desiderato
             if(cont==0){
                btriprova.style.display="block";
                messageDiv.style.display = "block";
                solditot=parseFloat(importo.textContent);
                btrip.style.display="block";
                aiutomate.style.display="block";


                if( restval()==valoreRadioSelezione()){
                    messageDiv.textContent="HAI VINTO";
                    solditot=solditot+soldiscom;
                    importo.textContent=parseFloat(solditot.toFixed(2)).toFixed(2)+"$";

                }else{
                    messageDiv.textContent="HAI PERSO";
                    solditot=solditot-soldiscom;
                    importo.textContent=parseFloat(solditot.toFixed(2)).toFixed(2)+"$";
                    
                }

             }
        }
        setTimeout(spostaImmagine(), 2000);

        // Puoi anche aggiungere l'array di risultati precedenti
      //-  resultTextArea.value = `Risultati precedenti:\n${previousResults.join("\n")}\n${resultTextArea.value}`;
    });

    // Funzione per aggiornare automaticamente la textarea con i risultati iniziali
    updateTextArea();
    updateTextArea();
   
    function rollDie() {
       
        const die = document.getElementById("die");
        die.style.animation = "none";
        void die.offsetWidth; 
        die.style.animation = null;

        const result = Math.floor(Math.random() * 6) + 1;
        const resultFace = document.querySelector(".front");
        
        setTimeout(function(){
            console.log(resultFace.textContent = result);
        }, 1000)
        //previousResults.push(result);
        //updateTextArea(); // Aggiorna la textarea con i nuovi risultati
        return result; // Ritorna il risultato del dado
    }


    function updateTextArea() {
        resultTextArea.value = `Risultati precedenti:\n${previousResults.join("\n")}`;
    }
    

};



const myButton = document.getElementById('rollButton');

myButton.addEventListener('click', () => {
    // Disattiva il pulsante quando viene cliccato
    myButton.disabled = true;

    // Dopo +un tot, riattiva il pulsante
    setTimeout(() => {
        myButton.disabled = false;
    }, 1600); // Cambia questo valore per il tempo desiderato in millisecondi
});


// Otteniamo riferimenti agli elementi HTML
var apriPopupButton = document.getElementById('apriPopup');
var chiudiPopupButton = document.getElementById('chiudiPopup');
var popup = document.getElementById('popup');

// Aggiungiamo eventi per aprire e chiudere il popup
apriPopupButton.addEventListener('click', function() {
    popup.style.display = 'block';
    popup.classList.add('draggable'); // Aggiungiamo la classe per il trascinamento
});

chiudiPopupButton.addEventListener('click', function() {
    popup.style.display = 'none';
});

// Chiudi il popup se l'utente clicca sul pulsante di chiusura
chiudiPopupButton.addEventListener('click', function() {
    popup.style.display = 'none';
    popup.classList.remove('draggable'); // Rimuoviamo la classe per il trascinamento
});

// Trascina il popup
var isDragging = false;
var offsetX, offsetY;

popup.addEventListener('mousedown', function(e) {
    isDragging = true;
    offsetX = e.clientX - popup.getBoundingClientRect().left;
    offsetY = e.clientY - popup.getBoundingClientRect().top;
    popup.style.cursor = 'grabbing';
});

document.addEventListener('mousemove', function(e) {
    if (!isDragging) return;
    var newX = e.clientX - offsetX;
    var newY = e.clientY - offsetY;
    popup.style.left = newX + 'px';
    popup.style.top = newY + 'px';
});

document.addEventListener('mouseup', function() {
    isDragging = false;
    popup.style.cursor = 'grab';
});




/*
document.addEventListener("DOMContentLoaded", function () {
    const rollButton = document.getElementById("rollButton");
    rollButton.addEventListener("click", rollDie);
    

    
})*/




document.addEventListener('DOMContentLoaded', attivaEventi);


function attivaEventi()
{
    document.getElementById("start").addEventListener("click", startGame);
}

const categorie = [];

//In base alla categoria si inseriscono le varie domande nell'array

const domande = [];

//Dopo la scelta randomica di una delle domande, si inseriscono nei 2 seguenti array le risposte associate a tale domanda

const risposte_giuste = [];

const risposte_sbagliate = [];

//L'utente seleziona una risposta e vediamo se sia giusto o sbagliato
    //Se giusto +10 punteggio
    //Se sbagliato +0 punteggio

var punteggioUser = 0; //Aumenta in base alla risposta data potrebbe aumentare o diminuire


function startGame()
{
    console.log("uwu");
    window.location.href = "http://dommorgb.altervista.org/BRAINDANCE/gaming/game.html";
}









//Sessioni
//Array di domande
//Array di risposte giuste
//Array di risposte sbagliate
//HashMap che lega domanda a risposta giusta
//Array di argomenti delle domande
//Sub-array di domande per ogni argomento
//Sub-array di risposte giuste e sbagliate legato alla domanda e/o alla categoria
//Scelta delle domande da una categoria scelta dall'utente
//Domande pescate casualmente da array di quel tipo di domande
//Scelta casuale della domanda viene salvata in un array specifico con di seguito altri 2 array con le risposte relative alla domanda

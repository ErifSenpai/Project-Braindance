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

var id = new URLSearchParams(window.location.search).get('cat');

document.getElementById("cat").innerHTML = id;
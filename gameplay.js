document.addEventListener('DOMContentLoaded', attivaEventi);


function attivaEventi()
{
    document.getElementById("start").addEventListener("click", startGame);
}



function startGame()
{
    window.location.href = "http://dommorgb.altervista.org/BRAINDANCE/gaming/game.php";
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

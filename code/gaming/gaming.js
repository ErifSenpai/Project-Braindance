document.addEventListener('DOMContentLoaded', attivaEventi);

var gameType;

function attivaEventi()
{
    document.getElementById("sport").addEventListener("click", sportType);
    document.getElementById("musica").addEventListener("click", musicType);
    document.getElementById("games").addEventListener("click", videogameType);
    document.getElementById("cinema").addEventListener("click", cinemaType);
}

function musicType()
{
    gameType = "musica";
    console.log(gameType);
}

function sportType()
{
    gameType = "sport";
    console.log(gameType);
}

function cinemaType()
{
    gameType = "cinema";
    console.log(gameType);
}

function videogameType()
{
    gameType = "videogiochi";
    console.log(gameType);
}


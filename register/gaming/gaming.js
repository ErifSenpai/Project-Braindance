document.addEventListener('DOMContentLoaded', attivaEventi);

function attivaEventi()
{
    document.getElementById("sport").addEventListener("click", sportType);
    document.getElementById("musica").addEventListener("click", musicType);
    document.getElementById("videogiochi").addEventListener("click", videogameType);
    document.getElementById("cinema").addEventListener("click", cinemaType);
}

function musicType()
{
    window.location.href = "http://michaelmontanari.altervista.org/quintac/Project_Braindance/register/gaming/inGame/inGame.php?cat=musica";
}

function sportType()
{
    window.location.href = "http://michaelmontanari.altervista.org/quintac/Project_Braindance/register/gaming/inGame/inGame.php?cat=sport";
}

function cinemaType()
{
    window.location.href = "http://michaelmontanari.altervista.org/quintac/Project_Braindance/register/gaming/inGame/inGame.php?cat=cinema";
}

function videogameType()
{
    window.location.href = "http://michaelmontanari.altervista.org/quintac/Project_Braindance/register/gaming/inGame/inGame.php?cat=videogiochi";
}


2var id = new URLSearchParams(window.location.search).get('cat');

document.addEventListener('DOMContentLoaded', attivaEventi);

function attivaEventi()
{
    document.getElementById("err").addEventListener("click", lose);
    document.getElementById("giust").addEventListener("click", win);
}


function win()
{
    window.location.href = "http://michaelmontanari.altervista.org/quintac/Project_Braindance/register/gaming/inGame/esito/win.php";
}

function lose()
{
    window.location.href = "http://michaelmontanari.altervista.org/quintac/Project_Braindance/register/gaming/inGame/esito/lose.php";
}


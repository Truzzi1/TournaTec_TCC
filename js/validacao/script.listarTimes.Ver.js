const btnSorter = document.getElementById("btnSorter");

btnSorter.addEventListener('click', function (e) {

    e.preventDefault();

    const maxTeamsElement = document.getElementById("TotTeams");
    const maxTeamsValue = maxTeamsElement.value;

    const idTeamsElement = document.getElementById("idTorneio");
    const idTeamssValue = idTeamsElement.value;

    if (maxTeamsValue != 4 && maxTeamsValue != 8 && maxTeamsValue != 16) {
        alert("Indisponível!!!");
    } else {
        const idTime = $.ajax({ method: "POST", url: "funcionais/config.php", data: { idTorneio: idTeamssValue } });
        idTime.complete((e) => {
            if (e.responseText > 0) {
                return window.location = `../tcc/torneioVer_${maxTeamsValue}.php?idTorneio=${idTeamssValue}`
            }
            alert("Indisponível!!!");
        })
    }
});

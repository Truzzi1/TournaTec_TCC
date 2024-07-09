const btnSorter = document.getElementById("btnSorter");

btnSorter.addEventListener('click', function (e) {

    e.preventDefault();

    const maxTeamsElement = document.getElementById("TotTeams");
    const maxTeamsValue = maxTeamsElement.value;

    const idTeamsElement = document.getElementById("idTorneio");
    const idTeamssValue = idTeamsElement.value;

    if (maxTeamsValue != 4 && maxTeamsValue != 8 && maxTeamsValue != 16) {
        alert("Quantidade de time inválida!!!");
    } else {
        const idTime = $.ajax({ method: "POST", url: "funcionais/config.php", data: { idTorneio: idTeamssValue } });
        idTime.complete((e) => {
            if (e.responseText > 0) {
                return window.location = `../tcc/torneio_${maxTeamsValue}.php?idTorneio=${idTeamssValue}`
            }
            const url = `../tcc/funcionais/sorteio_${maxTeamsValue}.php`;
            const data = $.ajax({ method: "POST", url, data: { idTorneio: idTeamssValue } });
            data.complete(() => {
                window.location = `../tcc/torneio_${maxTeamsValue}.php?idTorneio=${idTeamssValue}`
            })
        })
    }
});

const btnAddTime = document.getElementById("btnAddTime");

btnAddTime.addEventListener('click', function (e) {

    e.preventDefault();

    const idTeamsElement = document.getElementById("idTorneio");
    const idTeamssValue = idTeamsElement.value;

    const totTeamsElement = document.getElementById("TotTeams");
    const totTeamsValue = totTeamsElement.value;

    const quantTeamsElement = document.getElementById("quantTimes");
    const quantTeamsValue = quantTeamsElement.value;

    if (totTeamsValue == quantTeamsValue) {
        alert("Quantidade máxima de times atingida!!!");
    } else {
        window.location = `../tcc/cadastroTime.php?idTorneio=${idTeamssValue}`
    }
});

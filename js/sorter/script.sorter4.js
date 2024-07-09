const idTeamsElement = document.getElementById("Torneio");
const idTeamssValue = idTeamsElement.value;

//Oitavas
//Botão 1
const btn1 = document.getElementById('btn1');
var btntxt1 = btn1.textContent;

btn1.addEventListener('click', function handleClick() {
  btnf1.textContent = btntxt1;
  time1 = btntxt1;
  document.getElementById("btn2").style.opacity = "20%";
  document.getElementById("btn1").style.opacity = "100%";
});
// Botão 2
const btn2 = document.getElementById('btn2');
var btntxt2 = btn2.textContent;

btn2.addEventListener('click', function handleClick() {
btnf1.textContent = btntxt2;
time1 = btntxt2;
document.getElementById("btn1").style.opacity = "20%";
document.getElementById("btn2").style.opacity = "100%";
});
// Botão 3
const btn3 = document.getElementById('btn3');
var btntxt3 = btn3.textContent;

btn3.addEventListener('click', function handleClick() {
btnf2.textContent = btntxt3;
time2 = btntxt3;
document.getElementById("btn4").style.opacity = "20%";
document.getElementById("btn3").style.opacity = "100%";
});
// Botão 4
const btn4 = document.getElementById('btn4');
var btntxt4 = btn4.textContent;

btn4.addEventListener('click', function handleClick() {
btnf2.textContent = btntxt4;
time2 = btntxt4;
document.getElementById("btn3").style.opacity = "20%";
document.getElementById("btn4").style.opacity = "100%";
});
//Final
// Botão 1
const btnf1 = document.getElementById('btnf1');

btnf1.addEventListener('click', function handleClick() {
  var btntxt5 = btnf1.textContent;
  btne.textContent = btntxt5;
  timeef = btntxt5;
  document.getElementById("btnf2").style.opacity = "20%";
  document.getElementById("btnf1").style.opacity = "100%";
});
// Botão 2
const btnf2 = document.getElementById('btnf2');

btnf2.addEventListener('click', function handleClick() {
  var btntxt6 = btnf2.textContent;
  btne.textContent = btntxt6;
  timeef = btntxt5;
  document.getElementById("btnf1").style.opacity = "20%";
  document.getElementById("btnf2").style.opacity = "100%";
});

//BTNSAVE
//Time1
var time1, time2;
var timeef;

const btnSave = document.getElementById('btnsave');
btnSave.addEventListener('click', function saveClick(e) {
  e.preventDefault();


  const dados = {
    time1: btnf1.textContent || 0,
    time2: btnf2.textContent || 0,
    timeef: btne.textContent || 0,
  }
  function filterData(dados) {
    let dadosFiltrados = {}
    for (const time in dados) {
      if (dados[time] == undefined) {
        dadosFiltrados[time] = 0
      } else {
        dadosFiltrados[time] = dados[time];
      };
    }
    return dadosFiltrados;
  }

  const dadosFiltrados = filterData(dados);
  dadosFiltrados.idTorneio = idTeamssValue;
  
  $.ajax({ method: "POST", url: "funcionais/cadastroJogos4.php",data: dadosFiltrados })
});
//Clear
const btnclear = document.getElementById('btnclear');
var btntxtclear1 = "";

btnclear.addEventListener('click', function handleClick() {
  btnf1.textContent = btntxtclear1;
  btnf2.textContent = btntxtclear1;
  btne.textContent = btntxtclear1;
  const dados = {
    time1: 0,
    time2: 0,
    timeef: 0,
  }
  dados.idTorneio = idTeamssValue;
  $.ajax({ method: "POST", url: "funcionais/cadastroJogos4.php", data: dados });
});

function altCss() {

  const buttonsFirstGames = [btn1, btn2, btn3, btn4]
  const buttonsSecondGames = [btnf1, btnf2]
  const buttonsThirdGames = [btne]

  buttonsSecondGames.forEach((item, indice) => {

    const { imp, par } = separeArray(buttonsFirstGames);
    if (item.textContent == "") {
    }
    else if (imp[indice].textContent != item.textContent) {
      imp[indice].style.opacity = "20%";
    }
    else if (par[indice].textContent != item.textContent) {
      par[indice].style.opacity = "20%";
    }
  });

  buttonsThirdGames.forEach((item, indice) => {
    const { imp, par } = separeArray(buttonsSecondGames);
    if (item.textContent == "") {
    }
    else if (imp[indice].textContent != item.textContent) {
      imp[indice].style.opacity = "20%";
    }
    else if (par[indice].textContent != item.textContent) {
      par[indice].style.opacity = "20%";
    }
  });
}

function separeArray(array) {
  imp = [];
  par = [];
  for (let i = 0; i < array.length; i++) {
    if (i & 1) {
      imp.push(array[i]);
    } else {
      (par.push(array[i]))
    };
  }
  return {
    imp,
    par
  };
}

altCss();


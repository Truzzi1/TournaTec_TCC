const idTeamsElement = document.getElementById("Torneio");
const idTeamssValue = idTeamsElement.value;

//Oitavas
//Botão 1
const btn1 = document.getElementById('btn1');
var btntxt1 = btn1.textContent;

btn1.addEventListener('click', function handleClick() {
  btnp1.textContent = btntxt1;
  time1 = btntxt1;
  document.getElementById("btn2").style.opacity = "20%";
  document.getElementById("btn1").style.opacity = "100%";
});
// Botão 2
const btn2 = document.getElementById('btn2');
var btntxt2 = btn2.textContent;

btn2.addEventListener('click', function handleClick() {
btnp1.textContent = btntxt2;
time1 = btntxt2;
document.getElementById("btn1").style.opacity = "20%";
document.getElementById("btn2").style.opacity = "100%";
});
// Botão 3
const btn3 = document.getElementById('btn3');
var btntxt3 = btn3.textContent;

btn3.addEventListener('click', function handleClick() {
btnp2.textContent = btntxt3;
time2 = btntxt3;
document.getElementById("btn4").style.opacity = "20%";
document.getElementById("btn3").style.opacity = "100%";
});
// Botão 4
const btn4 = document.getElementById('btn4');
var btntxt4 = btn4.textContent;

btn4.addEventListener('click', function handleClick() {
btnp2.textContent = btntxt4;
time2 = btntxt4;
document.getElementById("btn3").style.opacity = "20%";
document.getElementById("btn4").style.opacity = "100%";
});
// Botão 5
const btn5 = document.getElementById('btn5');
var btntxt5 = btn5.textContent;

btn5.addEventListener('click', function handleClick() {
btnp3.textContent = btntxt5;
time3 = btntxt5;
document.getElementById("btn6").style.opacity = "20%";
document.getElementById("btn5").style.opacity = "100%";
});
// Botão 6
const btn6 = document.getElementById('btn6');
var btntxt6 = btn6.textContent;

btn6.addEventListener('click', function handleClick() {
btnp3.textContent = btntxt6;
time3 = btntxt6;
document.getElementById("btn5").style.opacity = "20%";
document.getElementById("btn6").style.opacity = "100%";
});
// Botão 7
const btn7 = document.getElementById('btn7');
var btntxt7 = btn7.textContent;

btn7.addEventListener('click', function handleClick() {
btnp4.textContent = btntxt7;
time4 = btntxt7;
document.getElementById("btn8").style.opacity = "20%";
document.getElementById("btn7").style.opacity = "100%";
});
// Botão 8
const btn8 = document.getElementById('btn8');
var btntxt8 = btn8.textContent;

btn8.addEventListener('click', function handleClick() {
btnp4.textContent = btntxt8;
time4 = btntxt8;
document.getElementById("btn7").style.opacity = "20%";
document.getElementById("btn8").style.opacity = "100%";
});
//Quartas
// Botão 1
const btnp1 = document.getElementById('btnp1');

btnp1.addEventListener('click', function handleClick() {
  var btntxt9 = btnp1.textContent;
  btnf1.textContent = btntxt9;
  timep1 = btntxt9;
  document.getElementById("btnp2").style.opacity = "20%";
  document.getElementById("btnp1").style.opacity = "100%";
});
// Botão 2
const btnp2 = document.getElementById('btnp2');

btnp2.addEventListener('click', function handleClick() {
  var btntxt10 = btnp2.textContent;
  btnf1.textContent = btntxt10;
  timep1 = btntxt10;
  document.getElementById("btnp1").style.opacity = "20%";
  document.getElementById("btnp2").style.opacity = "100%";
});
// Botão 3
const btnp3 = document.getElementById('btnp3');

btnp3.addEventListener('click', function handleClick() {
  var btntxt11 = btnp3.textContent;
  btnf2.textContent = btntxt11;
  timep2 = btntxt11;
  document.getElementById("btnp4").style.opacity = "20%";
  document.getElementById("btnp3").style.opacity = "100%";
});
// Botão 4
const btnp4 = document.getElementById('btnp4');

btnp4.addEventListener('click', function handleClick() {
  var btntxt12 = btnp4.textContent;
  btnf2.textContent = btntxt12;
  timep2 = btntxt12;
  document.getElementById("btnp3").style.opacity = "20%";
  document.getElementById("btnp4").style.opacity = "100%";
});
//Final
// Botão 1
const btnf1 = document.getElementById('btnf1');

btnf1.addEventListener('click', function handleClick() {
  var btntxt13 = btnf1.textContent;
  btne.textContent = btntxt13;
  timeef = btntxt13;
  document.getElementById("btnf2").style.opacity = "20%";
  document.getElementById("btnf1").style.opacity = "100%";
});
// Botão 2
const btnf2 = document.getElementById('btnf2');

btnf2.addEventListener('click', function handleClick() {
  var btntxt14 = btnf2.textContent;
  btne.textContent = btntxt14;
  timeef = btntxt14;
  document.getElementById("btnf1").style.opacity = "20%";
  document.getElementById("btnf2").style.opacity = "100%";
});

//BTNSAVE
//Time1
var time1, time2, time3, time4;
var timep1, timep2;
var timeef;

const btnSave = document.getElementById('btnsave');
btnSave.addEventListener('click', function saveClick(e) {
  e.preventDefault();
console.log;

  const dados = {
    time1: btnp1.textContent || 0,
    time2: btnp2.textContent || 0,
    time3: btnp3.textContent || 0,
    time4: btnp4.textContent || 0,
    timep1: btnf1.textContent || 0,
    timep2: btnf2.textContent || 0,
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
  
  $.ajax({ method: "POST", url: "funcionais/cadastroJogos8.php",data: dadosFiltrados })
});

//Clear
const btnclear = document.getElementById('btnclear');
var btntxtclear1 = "";

btnclear.addEventListener('click', function handleClick() {
  btnp1.textContent = btntxtclear1;
  btnp2.textContent = btntxtclear1;
  btnp3.textContent = btntxtclear1;
  btnp4.textContent = btntxtclear1;
  btnf1.textContent = btntxtclear1;
  btnf2.textContent = btntxtclear1;
  btne.textContent = btntxtclear1;
  const dados = {
    time1: 0,
    time2: 0,
    time3: 0,
    time4: 0,
    timep1: 0,
    timep2: 0,
    timeef: 0,
  }
  dados.idTorneio = idTeamssValue;
  $.ajax({ method: "POST", url: "funcionais/cadastroJogos8.php", data: dados });
});

function altCss() {

  const buttonsFirstGames = [btn1, btn2, btn3, btn4, btn5, btn6, btn7, btn8]
  const buttonsSecondGames = [btnp1, btnp2, btnp3, btnp4]
  const buttonsThirdGames = [btnf1, btnf2]
  const buttonsForthGames = [btne]

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

  buttonsForthGames.forEach((item, indice) => {
    const { imp, par } = separeArray(buttonsThirdGames);
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
console.log();


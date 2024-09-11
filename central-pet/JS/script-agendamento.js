function calendario() {
    const mesAtual = window.document.getElementById('mesAtual');
    
    const dataAtual = new Date();
    const meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

    const anoHoje = dataAtual.getFullYear();
    const mesHoje = dataAtual.getMonth();
    const nomeMes = meses[mesHoje]; 
    mesAtual.textContent = `${nomeMes} ${anoHoje}`;
}

/* select */

function select() {
  var select1 = document.getElementById("select1");
  var select2 = document.getElementById("select2");
  var res = document.getElementById('res');

  var selectedIndex1 = select1.selectedIndex;
  var selectedIndex2 = select2.selectedIndex;
  var selectedOptionText1 = select1.options[selectedIndex1].text;
  var selectedOptionText2 = select2.options[selectedIndex2].text;

  res.innerHTML = "Especialidade: " + selectedOptionText1 + "<br>";
  res.innerHTML += " Veterinário: " + selectedOptionText2;
}

/* marcação de data do calendário */

let highlightedElement = null;

document.querySelector(".table").addEventListener("click", function(event) {
  if (event.target.tagName === "TD") {

    if (highlightedElement) {
      highlightedElement.style.backgroundColor = "";
    }

    event.target.style.backgroundColor = "lightblue";
    
    highlightedElement = event.target;
    
    document.getElementById("res").innerHTML += "<br>Você marcou para o dia: " + event.target.textContent + " de novembro de 2023";
  }
});

/* input radio */

var radioButtons = document.querySelectorAll('.btn-check');


radioButtons.forEach(function(radioButton) {
  radioButton.addEventListener('change', function() {
    
    if (radioButton.checked) {
      
      res.innerHTML += "<br>Horário selecionado: " + radioButton.nextElementSibling.textContent;
    }
  });
});

/* obs */

var textarea = document.getElementById('floatingTextarea2');
var previousText = "";


textarea.addEventListener('input', function() {
    var currentText = textarea.value;
    
    if (currentText !== previousText) {
        
        var newParagraph = document.createElement('p');
        newParagraph.textContent = "Observações: " + currentText;

        
        res.appendChild(newParagraph);
        
        previousText = currentText;
    }
});
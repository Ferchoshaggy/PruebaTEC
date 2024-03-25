
const inputDi = document.querySelector("#diagnostico");
inputDi.addEventListener("input", onInputChange)

let diagnosticoNombre = [];

async function getDiagnosticoData(){

    var edad=document.getElementById("fecha").value;
    var sexo=document.getElementById("sexo").value;

    var fecha = calcularEdad(edad);

    if(edad==="" || fecha < 0 && sexo==="NO"){
       var url="http://localhost:3000/diagnostico";
    }else if(edad==="" || fecha < 0 && sexo !=="NO"){
        var url="http://localhost:3000/diagnostico?lsex="+sexo;
    }else if(fecha <= 9 && fecha >= 0 && sexo ==="NO"){
        var url="http://localhost:3000/diagnostico?lsex="+sexo+"&linf=00"+fecha+"A";
    }else if(fecha <= 9 && fecha >= 0 && sexo !=="NO"){
        var url="http://localhost:3000/diagnostico?lsex="+sexo+"&linf=00"+fecha+"A";
    }else if(fecha <= 99 && fecha >= 10 && sexo ==="NO"){
        var url="http://localhost:3000/diagnostico?lsex="+sexo+"&linf=0"+fecha+"A";
    }else if(fecha <= 99 && fecha >= 10 && sexo !=="NO"){
        var url="http://localhost:3000/diagnostico?lsex="+sexo+"&linf=0"+fecha+"A";
    }else if(fecha <= 120 && fecha >=100 && sexo ==="NO"){
        var url="http://localhost:3000/diagnostico?lsex="+sexo+"&linf="+fecha+"A";
    }else if(fecha <= 120 && fecha >=100 && sexo !=="NO"){
        var url="http://localhost:3000/diagnostico?lsex="+sexo+"&linf="+fecha+"A";
    }

    $.ajax({  
        type: "GET",  
        url: url,    
        dataType: "json", 
        success: function (data) { 
        }, 
    }); 


    const diagnosticosJs= await fetch(url);
    const data = await diagnosticosJs.json();

    diagnosticoNombre = data.map((diagnosticos) =>{
    return diagnosticos.catalog_key + "-" + diagnosticos.nombre;
    });

}

function onInputChange(){
removeDropdownAuto()
const value = inputDi.value.toLowerCase();

if(value.length === 0) return;

const filterName=[];

diagnosticoNombre.forEach((diagKey) =>{
    if(diagKey.substr(0, value.length).toLowerCase()===value)
    filterName.push(diagKey);
});

autocompleteDropdown(filterName);
}
 function autocompleteDropdown(list){
const listEL = document.createElement("ul");
listEL.className = "list-autocomplete";
listEL.id = "list-autocomplete";

list.forEach((diagKey) =>{
    const listItem = document.createElement("li");
    const diagButton = document.createElement("button");
    diagButton.innerHTML = diagKey;
    diagButton.addEventListener("click", onSelectDiagnostico);
    listItem.appendChild(diagButton);
    listEL.appendChild(listItem);
})

document.querySelector("#dropdown").appendChild(listEL);
 }

function removeDropdownAuto(){
const listEl =document.querySelector("#list-autocomplete")
if(listEl) listEl.remove();
 }

function onSelectDiagnostico(e){
    e.preventDefault();

const buttonEl = e.target;
inputDi.value = buttonEl.innerHTML;

removeDropdownAuto();
 }

 function calcularEdad(fechaNacimiento) {
    const fechaActual = new Date();
    const anoActual = parseInt(fechaActual.getFullYear());
    const mesActual = parseInt(fechaActual.getMonth()) + 1;
    const diaActual = parseInt(fechaActual.getDate());

    const anoNacimiento = parseInt(String(fechaNacimiento).substring(0, 4));
    const mesNacimiento = parseInt(String(fechaNacimiento).substring(5, 7));
    const diaNacimiento = parseInt(String(fechaNacimiento).substring(8, 10));

    let edad = anoActual - anoNacimiento;
    if (mesActual < mesNacimiento) {
        edad--;
    } else if (mesActual === mesNacimiento) {
        if (diaActual < diaNacimiento) {
            edad--;
        }
    }
   return edad;
}


const inputDi = document.querySelector("#diagnostico");
inputDi.addEventListener("input", onInputChange)

let diagnosticoNombre = [];

async function getDiagnosticoData(){

    var edad=document.getElementById("fecha").value;
    var sexo=document.getElementById("sexo").value;

    if(edad==="" && sexo==="NO"){
       var url="http://localhost:3000/diagnostico";
    }else if(edad==="" && sexo==="MUJER"){
        var url="http://localhost:3000/diagnostico?lsex=MUJER";
    }else if(edad==="" && sexo==="HOMBRE"){
        var url="http://localhost:3000/diagnostico?lsex=HOMBRE";
    }


console.log(edad);
console.log(sexo);
    console.log(url);

    $.ajax({  
        type: "GET",  
        url: url,    
        dataType: "json", 
        success: function (data) { 

console.log(data)


        }, //End of AJAX Success function  
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
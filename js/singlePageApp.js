
window.addEventListener("load",function(){
  let creationButton = document.getElementById("creation-button"); //enter the name of the projet
  let saveButton = document.getElementById("saveButton");
  let addBtn = document.getElementById("addBtn");
  let addUs = document.getElementById("addUs");
  let imports = document.getElementById("import-data");

  creationButton.addEventListener('click',function(){
    let theInputField = document.getElementById("nomProjet");
    let projectNameForm = document.getElementById("create-project");
    theInputField.style.visibility = "visible";
    projectNameForm.style.visibility = "visible";
    saveButton.style.visibility = 'visible';
  });


  saveButton.addEventListener('click',function(event){
    event.preventDefault();
    let creationButton = document.getElementById("creation-button");
    let nameInput = document.getElementById("nomProjet");
    if(!(nameInput.value === null || nameInput.value === "")){
      let userStoryEl = document.getElementById("user-stories");
      userStoryEl.style.visibility = "visible";
    }
  });

  addBtn.addEventListener("click",function(){
    let besoin = document.getElementById('besoin');
    besoinClone = besoin.cloneNode(true);
    addUs.parentNode.insertBefore(besoinClone,addUs);
    let x = document.querySelectorAll(".addBtn");
    x[x.length-1].style.visibility='hidden';
    let xin = document.querySelectorAll(".besoins");
    xin[xin.length-1].value = "";
  });

  addUs.addEventListener("click",function(event){
    event.preventDefault();
    let bool = true;
    let divUs = document.getElementById("user-stories");
    let form = document.getElementById("usForm");
    let inputsOfUs = document.getElementById("usForm").getElementsByTagName('input');
    let importData = document;getElementById("import-data");
    for( i=0; i< inputsOfUs.length; i++ )
    {
      let inp = inputsOfUs[i];
      bool = (bool && (inp.value!=''));
    }
    if (bool) {
      let divCl = divUs.cloneNode(true);
      divUs.parentNode.insertBefore(divCln,importData);
      imports.style.visibility='visible';
    }
  });

});
/* 
Contrôle de la visibilité des éléments 
@return : rend un éléments visible selon si une condition a été validée
*/
function visibility() {
  let theInputField = document.getElementById("nomProjet");
  let projectNameForm = document.getElementById("create-project");
  theInputField.style.visibility = "visible";
  projectNameForm.style.visibility = "visible";
  saveButton.style.visibility = 'visible';
}
/* 
Contrôle de la visibilité des éléments 
@return : rend un éléments visible selon si une condition a été validée
*/
function visibility1() {
  let creationButton = document.getElementById("creation-button");
  let nameInput = document.getElementById("nomProjet");
  if(!(nameInput.value === null || nameInput.value === "")){
    let userStoryEl = document.getElementById("user-stories");
    userStoryEl.style.visibility = "visible";
  }
}


window.addEventListener("load",function(){
  let creationButton = document.getElementById("creation-button"); //enter the name of the projet
  let saveButton = document.getElementById("saveButton");
  let addBtn = document.getElementById("addBtn");
  let addUs = document.getElementById("addUs");
  let imports = document.getElementById("import-data");
  let analyse = document.getElementById("analyse");

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
      addUs.style.visibility = "visible";
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
    let inputsOfUs = divUs.getElementsByTagName('input');
    let importData = document.getElementById("import-data");

    for( i=0; i< inputsOfUs.length; i++ )
    {
      let inp = inputsOfUs[i];
      bool = (bool && (inp.value!=''));
    }
    if (bool) {
      let len = inputsOfUs.length;
      let divCl = divUs.cloneNode(true);
      addUs.parentNode.insertBefore(divCl,addUs.nextSibling);
      imports.style.visibility='visible';
      let xin = document.querySelectorAll(".us");
      let xx= xin[xin.length-1];
      let usInp = divCl.getElementsByTagName('input');
      for( i=usInp.length-len; i< usInp.length; i++ )
      {
        let val = usInp[i];
        val.value = '';
      }
    }
  });

  // analyse.addEventListener("click",function(){
  //   event.preventDefault();
  //   let bool = true;
  //   // let divUs = document.getElementById("user-stories");
  //   // let form = document.getElementById("usForm");
  //   let inputsOfUs = document.querySelectorAll("div.us");
  //   let importData = document.getElementById("import-data");
  //   for( i=0; i< inputsOfUs.length; i++ )
  //   {
  //     let inp = inputsOfUs[i].getElementsByTagName('input')[0];
  //     bool = (bool && (inp.value!=''));
  //   }
  //   if (bool) {
  //     imports.style.visibility='visible';
  //   }
  // });

});

function visibility() {
  let theInputField = document.getElementById("nomProjet");
  let projectNameForm = document.getElementById("create-project");
  theInputField.style.visibility = "visible";
  projectNameForm.style.visibility = "visible";
  saveButton.style.visibility = 'visible';
}

function visibility1() {
  let creationButton = document.getElementById("creation-button");
  let nameInput = document.getElementById("nomProjet");
  if(!(nameInput.value === null || nameInput.value === "")){
    let userStoryEl = document.getElementById("user-stories");
    userStoryEl.style.visibility = "visible";
  }
}

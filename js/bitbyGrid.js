/***
  Es el Javascript necesario para ejecutar BitbyUX
  @author: Israel Trejo
  @group: BitByDev

***/

/***
  Variables globales para administrar el archivo Javascript
  @author: Israel Trejo
  @group: BitByDev
  @var debugMode: Variable para activar el modo de depuración;
    true: Modo depuracion activado.
    false: Modo depuración desactivado.
***/
var debugMode = true;

//Código para realizar los drops
/***
  @author: Israel Trejo
  @function: showDrop
  @description: Muestra el drop
  @param:
    @var elemento: Es el objeto del DOM que recibe la función.
***/
function showDrop(elemento) {
  let menuRef = elemento.getAttribute('data-target');
  let menu = document.getElementById(menuRef);
  if (menu != null) {
    menu.style.display = "block";
    let _x, _y;
    let windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    let windowHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
    let distMenu = menu.getBoundingClientRect();
    let distElemento = elemento.getBoundingClientRect();
    let direccion = elemento.getAttribute('data-direction');

    switch (direccion) {
      case "down":
        _x = distElemento.right - distElemento.width;
        _y = distElemento.top + distElemento.height;
        if (_y + distMenu.height > windowHeight) {
          _y = distElemento.top - distMenu.height;
        }
        break;

      case "up":
        _x = distElemento.right - distElemento.width;
        _y = distElemento.top - distMenu.height;
        if (_y < 0) {
          _y = distElemento.top + distElemento.height;
        }
        break;

      case "left":
        _x = distElemento.right - distElemento.width - distMenu.width;
        _y = distElemento.top;
        if (_x < 0) {
          _x = distElemento.right;
        }
        if (_y + distMenu.height > windowHeight) {
          _y = distElemento.top - distMenu.height + distElemento.height;
        }
        break;

      case "right":
        _x = distElemento.right;
        _y = distElemento.top;
        if (_x + distMenu.width > windowWidth) {
          _x = distElemento.right - distElemento.width - distMenu.width;
        }
        if (_y + distMenu.height > windowHeight) {
          _y = distElemento.top - distMenu.height + distElemento.height;
        }
        break;

      default:
        _x = distElemento.right - distElemento.width;
        _y = distElemento.top + distElemento.height;
        if (_y + distMenu.height > windowHeight) {
          _y = distElemento.top - distMenu.height;
        }
        break;
    }
    menu.style.left = _x + "px";
    menu.style.top = _y + scrollY + "px";
    if (menu.classList.contains("hide")) {
      menu.classList.remove("hide");
    }
    menu.classList.add("show");
  }else{
    showError(1, menuRef);
  }
}

 /***
  @author: Israel Trejo
  @function: hideDrop
  @description: Oculta el drop
  @param: 
    @var elemento: Es el objeto del DOM que recibe la función.
***/
function hideDrop(menu) {
  if (menu != null) {
    if (menu.classList.contains("show")) {
      menu.classList.remove("show");
    }
    menu.classList.add("hide");
  }else{
    showError(1, menu);
  }
}

 /***
  @author: Israel Trejo
  @function: toggleDrop
  @description: Es la función que intercambia la visibilidad del drop menu
  @param:
***/
function toggleDrop() {
  let listDrop = document.getElementsByClassName("drop-menu show");
  flag = false;
  for (let i = 0; i < listDrop.length; i++) {
    if (listDrop[i].getAttribute("id") == this.getAttribute("data-target")) {
      flag = true;
    }
    hideDrop(listDrop[i]);
  }
  if (flag == false) {
    showDrop(this);
  }
}

/***
 @author: Israel Trejo
 @function: toggleDropMenu
 @description: Es la función que administra la animación del drop menu
 @param:
***/
function toggleDropMenu() {
  if (this.classList.contains("show")) {
    this.style.opacity = 1;
  } else if (this.classList.contains("hide")) {
    this.style.display = "none";
    this.style.opacity = 0;
  }
}

 /***
  @author: Israel Trejo
  @function: hideModal
  @description: Es la función que oculta el modal
  @param: 
***/
function hideModal() {
  let dismiss = this.getAttribute("data-dismiss");
  if (document.getElementsByClassName(dismiss) != null) {
    let parent = this.parentNode;
    let child = this;
    let flag = false;
    let contador = 0;
    do {
      if (parent.classList.contains(dismiss)) {
        if (parent.classList.contains("show")) {
          parent.classList.remove("show");
        }
        parent.classList.add("hide");
        flag = true;
      } else {
        child = parent;
        parent = parent.parentNode;
        if(parent == null){
          flag = true;
          showError(2, child.nodeName);
        }
        contador++;
      }
      if(contador >= 10){
        flag = true;
        showError(4, dismiss);
      }
    } while (flag == false);
  }else{
    showError(3, dismiss);
  }
}

/***
 @author: Israel Trejo
 @function: showModal
 @description: Es la función que muestra el modal
 @param:
***/
function showModal() {
  let modalRef = this.getAttribute('data-target');
  let modal = document.getElementById(modalRef);
  if (modal != null) {
    if(modal.classList.contains("hide")){
      modal.classList.remove("hide");
    }
    modal.style.display = "inline-flex";
    modal.classList.add("show");
  }else{
    showError(1, modalRef);
  }
}

/***
 @author: Israel Trejo
 @function: toggleModal
 @description: Es la función que administra la animación del modal
 @param:
***/
function toggleModal(){
  if(this.classList.contains("show")){
    this.style.opacity = 1;
  } else if (this.classList.contains("hide")) {
    this.style.display = "none";
    this.style.opacity = 0;
  }
}

/*** 
@author: Israel Trejo
@function: showTab
@description: Es la función que muestra un tab
@param:
    @var elemento: Es el objeto del DOM que recibe la función.
***/
function showTab(elemento){
  let tabRef = elemento.getAttribute('data-tab');
  let tabContainer = document.getElementById(tabRef);
  if (tabContainer != null) {
    let tabOption = elemento.getAttribute('data-option');
    let tabOptionContainer = document.getElementById(tabOption);
    if (tabOptionContainer != null) {
      elemento.classList.add("active");
      let tabParent = elemento.parentElement;
      console.log(tabParent);
      let tabDirection = tabParent.getAttribute('data-direction');
      console.log(tabDirection);
      switch (tabDirection) {
        case "vertical":
          tabOptionContainer.style.top = 0;
          // tabOptionContainer.style.display = "block";
          break;

        case "horizontal":
          tabOptionContainer.style.left = 0;
          // tabOptionContainer.style.display = "block";
          break;

        default:
          // tabOptionContainer.style.display = "block";
          break;
      }
    }else{
      showError(1, tabOption);
    }
  }else{
    showError(1, tabRef);
  }
}

/*** 
@author: Israel Trejo
@function: hideTab
@description: Es la función que oculta un tab
@param:
    @var elemento: Es el objeto del DOM que recibe la función.
***/
function hideTab(element){
  let tabParent = element.parentElement;
  if(tabParent != null){
    let tabDirection = tabParent.getAttribute('data-direction');
    console.log(tabDirection);
    let tabControl = tabParent.getElementsByClassName("tab-control");
    for(let x = 0; x < tabControl.length; x++){
      let tabTmp = tabControl[x];
      if (tabTmp.classList.contains("active")) {
        let tabRef = tabTmp.getAttribute('data-tab');
        let tabContainer = document.getElementById(tabRef);
        if (tabContainer != null) {
          let tabOption = tabTmp.getAttribute('data-option');
          let tabOptionContainer = document.getElementById(tabOption);
          if (tabOptionContainer != null) {
            tabTmp.classList.remove("active");
            switch (tabDirection) {
              case "vertical":
                tabOptionContainer.style.top = 100 + "%";
                // tabOptionContainer.style.display = "none";
                break;

              case "horizontal":
                tabOptionContainer.style.left = 100 + "%";
                // tabOptionContainer.style.display = "none";
                break;

              default:
                // tabOptionContainer.style.display = "none";
                break;
            }
          } else {
            showError(1, tabOption);
          }
        } else {
          showError(1, tabRef);
        }
      }
    }
  }else{
    showError(2, elemento.getAttribute("id"));
  }
}

/*** 
@author: Israel Trejo
@function: toggleTab
@description: Es la función que alterna los tabs
@param:
***/
function toggleTab() {
  // console.log(listDrop);
  console.log(this);
  hideTab(this);
  showTab(this);
}

/*
  Obtención de elementos y Ejecución de funciones
*/

document.onreadystatechange = () => {
  if (document.readyState === 'complete') {
    /*
      Definición de listeners
    */
    //Listener de drops
    var drops = document.getElementsByClassName("drop");
    for (let i = 0; i < drops.length; i++) {
      if (drops[i].getAttribute("data-component") == "drop") {
        drops[i].addEventListener("click", toggleDrop, false);
      }
    }

    //Listener de animaciones de drops
    var dropMenu = document.getElementsByClassName("drop-menu");
    for (let i = 0; i < dropMenu.length; i++) {
      dropMenu[i].addEventListener("animationend", toggleDropMenu, false);
    }

    //Listener de modales
    var buttonsTag = document.getElementsByTagName("button");
    var buttonsClass = document.getElementsByClassName("btn");
    var tagsTmp = document.getElementsByTagName("input");

    for (let i = 0; i < buttonsTag.length; i++) {
      if (buttonsTag[i].getAttribute("data-target")) {
        if (buttonsTag[i].getAttribute("data-component") == "modal") {
          buttonsTag[i].addEventListener("click", showModal, false);
        }
      }
      if (buttonsTag[i].getAttribute("data-dismiss") == "modal" && buttonsTag[i].classList.contains("close")) {
        buttonsTag[i].addEventListener("click", hideModal, false);
      }
    }

    for (let i = 0; i < buttonsClass.length; i++) {
      if (buttonsClass[i].getAttribute("data-target")) {
        if (buttonsClass[i].getAttribute("data-component") == "modal") {
          buttonsClass[i].addEventListener("click", showModal, false);
        }
      }
      if (buttonsClass[i].getAttribute("data-dismiss") == "modal" && buttonsClass[i].classList.contains("close")) {
        buttonsClass[i].addEventListener("click", hideModal, false);
      }
    }

    for (let i = 0; i < tagsTmp.length; i++) {
      if (tagsTmp[i].getAttribute("data-target")) {
        if (tagsTmp[i].getAttribute("data-component") == "modal") {
          tagsTmp[i].addEventListener("click", showModal, false);
        }
      }
      if (tagsTmp[i].getAttribute("data-dismiss") == "modal" && tagsTmp[i].classList.contains("close")) {
        tagsTmp[i].addEventListener("click", hideModal, false);
      }
    }

    //Listener de animaciones de modales
    var modals = document.getElementsByClassName("modal");
    for (let i = 0; i < modals.length; i++) {
      modals[i].addEventListener("animationend", toggleModal, false);
    }

    //Listener de tab Controls
    var tabController = document.getElementsByClassName("tab-control");
    for (let i = 0; i < tabController.length; i++) {
      tabController[i].addEventListener("click", toggleTab, false);
      console.log(tabController[i]);
    }
  }
};

/* 
  Definición de errores
*/

/***
 @author: Israel Trejo
 @function: showError
 @description: Es la función que se encarga de mostrar todos los errores que se generan por el uso incorrecto de BitbyGrid
 @param:
***/
function showError(tipoError, elemento){
  if (debugMode == true) {
    switch (tipoError) {
      case 1:
        console.log("Error 1: El elemento con el id " + elemento + " no existe dentro del documento.");
        break;

      case 2:
        console.log("Error 2: El elemento " + elemento + " no tiene un elemento padre.");
        break;

      case 3:
        console.log("Error 3: No existe en el documento ningún elemento con la clase " + elemento + ".");
        break;

      case 4:
        console.log("Error 4: El elemento no tiene un padre cercano con la clase " + elemento + ".");
        break;

      default:
       console.log("Error 0: Esta accediendo de manera incorrecta al núcleo de errores.");
       break;
    }
  }
}
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
    elemento.classList.add("active");
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
  let listMenu = document.getElementsByClassName("drop active");
  flag = false;
  for (let i = 0; i < listDrop.length; i++) {
    if (listDrop[i].getAttribute("id") == this.getAttribute("data-target")) {
      flag = true;
    }
    hideDrop(listDrop[i]);
  }
  for (let i = 0; i < listMenu.length; i++) {
    listMenu[i].classList.remove("active");
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
    modal.style.maxWidth = 100+"%";
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
    this.style.maxWidth = 0;
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
  let tabRef = elemento.getAttribute('data-target');
  let tabContainer = document.getElementById(tabRef);
  if (tabContainer != null) {
    let tabOptions = tabContainer.getElementsByClassName("tab-item");
    let tabOption = elemento.getAttribute('data-option');
    let option = tabOptions[tabOption];
    if (tabOption != null && option != null) {
      elemento.classList.add("active");
      if(option.classList.contains("hide")){
        option.classList.remove("hide");
      }
      option.style.maxWidth = 100+"%";
      option.classList.add("show");
    }else{
      //Error pendiente
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
function hideTab(elemento) {
  let tabRef = elemento.getAttribute('data-target');
  let tabContainer = document.getElementById(tabRef);
  if (tabContainer != null) {
    let tabOptions = tabContainer.getElementsByClassName("tab-item");
    let tabOption = elemento.getAttribute('data-option');
    let option = tabOptions[tabOption];
    if (tabOption != null && option != null) {
      if (elemento.classList.contains("active")) {
        elemento.classList.remove("active");
      }
      if (option.classList.contains("show")) {
        option.classList.remove("show");
      }
      option.classList.add("hide");
    } else {
      //Error pendiente
      showError(1, tabOption);
    }
  } else {
    showError(1, tabRef);
  }
}

/*** 
@author: Israel Trejo
@function: toggle
@description: Es la función que alterna los tabs
@param:
***/
function toggleTab() {
  if(!this.classList.contains("active")){
    let listTab = document.getElementsByClassName("tab-control active");
    for(let x = 0; x < listTab.length; x++){
      if (this.parentElement == listTab[x].parentElement) {
        hideTab(listTab[x]);
      }
    }
    showTab(this);
  }
}

/***
 @author: Israel Trejo
 @function: toggleTabItem
 @description: Es la función que administra la animación del tab item
 @param:
***/
function toggleTabItem() {
  if (this.classList.contains("show")) {
    this.style.opacity = 1;
  } else if (this.classList.contains("hide")) {
    this.style.maxWidth = 0;
    this.style.opacity = 0;
  }
}

/*** 
@author: Israel Trejo
@function: showCollapse
@description: Es la función que muestra un collapse
@param:
    @var elemento: Es el objeto del DOM que recibe la función.
***/
function showCollapse(elemento) {
  let colRef = elemento.getAttribute('data-target');
  let collapse = document.getElementById(colRef);
  if (collapse != null) {
    collapse.classList.remove("collapse");
    // collapse.removeAttribute("style");
  } else {
    showError(1, tabRef);
  }
}

/*** 
@author: Israel Trejo
@function: hideCollapse
@description: Es la función que oculta un collapse
@param:
    @var elemento: Es el objeto del DOM que recibe la función.
***/
function hideCollapse(elemento) {
  let colRef = elemento.getAttribute('data-target');
  let collapse = document.getElementById(colRef);
  if (collapse != null) {
    collapse.classList.add("collapse");
    // collapse.style.height = 0;
    // collapse.style.borderTop = 0;
    // collapse.style.borderBottom = 0;
    // collapse.style.paddingTop = 0;
    // collapse.style.paddingBottom = 0;
    // collapse.style.overflow = "hidden";
  } else {
    showError(1, tabRef);
  }
}

/***
 @author: Israel Trejo
 @function: toggleCollapse
 @description: Es la función que alterna los collapse
 @param:
***/
function toggleCollapse() {
  let colRef = this.getAttribute('data-target');
  let collapse = document.getElementById(colRef);
  if (collapse != null) {
    if(collapse.classList.contains("collapse")){
      showCollapse(this);
    }else{
      hideCollapse(this);
    }
  } else {
    showError(1, tabRef);
  }
}

/*
  Obtención de elementos y Ejecución de funciones
*/

document.onreadystatechange = () => {
  if (document.readyState === 'complete') {
    /*
      Definición de listeners
    */
    //Listener de todos los elementos de BitbyUx
    var bitbyux = document.querySelectorAll("*[data-component], *[data-dismiss]");
    // console.log(bitbyux);
    for(let i = 0; i < bitbyux.length; i++){
      let m, n;
      let e = bitbyux[i];
      let c = e.getAttribute("data-component");
      if (c != null) {
        switch (c) {
          case "collapse":
            e.addEventListener("click", toggleCollapse, false);
            break;

          case "drop":
            e.addEventListener("click", toggledrop, false);
            m = document.getElementById(e.getAttribute("data-target"));
            if (m != null) {
              m.addEventListener("animationend", toggleDropMenu, false);
            } else {
              showError(1, e.getAttribute("data-target"));
            }
            break;

          case "modal":
            e.addEventListener("click", showModal, false);
            m = document.getElementById(e.getAttribute("data-target"));
            if (m != null) {
              m.addEventListener("animationend", toggleModal, false);
            } else {
              showError(1, e.getAttribute("data-target"));
            }
            break;
            
          case "tab":
            e.addEventListener("click", toggleTab, false);
            if (e.classList.contains("active")) {
              e.classList.remove("active");
              e.click();
            }
            m = document.getElementById(e.getAttribute("data-target"));
            if(m != null){
              n = m.children[e.getAttribute("data-option")];
              if(n != null){
                n.addEventListener("animationend", toggleTabItem, false);
              }else{
                //Error pendiente
                showError(1, e.getAttribute("data-target"));
              }
            }else{
              showError(1, e.getAttribute("data-target"));
            }
            break;

          default:
              console.log("Valor no valido: " + c);
              break;
        }
      }else{
        c = e.getAttribute("data-dismiss");
        switch(c){
          case "modal":
            e.addEventListener("click", hideModal, false);
            break;

          default:
            break;
        }
      }
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
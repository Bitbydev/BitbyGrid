/***
  Es el Javascript necesario para ejecutar BitbyUX
  @author: Israel Trejo
  @group: BitByDev

***/

//Código para realizar los drops
/***
  @author: Israel Trejo
  @function: showDrop
  @description: Muestra el drop
  @param:
    @var elemento: Es el objeto del DOM que recibe la función.
***/
function showDrop(elemento) {
  let _x, _y; 
  let windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  let windowHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
  let menuRef = elemento.getAttribute('data-drop');
  let menu = document.getElementById(menuRef);
  let distMenu = menu.getBoundingClientRect();
  let lista = elemento.classList;
  let distElemento = elemento.getBoundingClientRect();

  elemento.classList.add("show");

  if (lista.contains("down") || lista.contains("up") || lista.contains("left") || lista.contains("right")){
    lista.forEach(clase => {
      if (clase == "down" || clase == "up" || clase == "left" || clase == "right"){
        switch (clase) {
          case "down":
            _x = distElemento.right - distElemento.width;
            _y = distElemento.top + distElemento.height;
            if(_y + distMenu.height > windowHeight){
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
            if(_x < 0){
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
        }
      }
    });
  } else {
    _x = distElemento.right - distElemento.width;
    _y = distElemento.top + distElemento.height;
    if (_y + distMenu.height > windowHeight) {
      _y = distElemento.top - distMenu.height;
    }
  }
  menu.style.left = _x + "px";
  menu.style.top = _y + scrollY + "px";
  menu.style.opacity = 1;
}

 /***
  @author: Israel Trejo
  @function: hideDrop
  @description: Oculta el drop
  @param: 
    @var elemento: Es el objeto del DOM que recibe la función.
***/
function hideDrop(elemento) {
  let menuRef = elemento.getAttribute('data-drop');
  let menu = document.getElementById(menuRef);

  elemento.classList.remove("show");
  menu.style.opacity = 0;
  menu.style.left = -100+"%";
  menu.style.top = 0 + "px";
}

 /***
  @author: Israel Trejo
  @function: toggleDrop
  @description: Es la función que intercambia la visibilidad del drop
  @param:
***/
function toggleDrop() {
  let listDrop = document.getElementsByClassName("drop show");
  // console.log(listDrop);
  if(this.classList.contains("show")){
    hideDrop(this);
  }else{
    for (let i = 0; i < listDrop.length; i++) {
      hideDrop(listDrop[i]);
    }
    showDrop(this);
  }
}

 /***
  @author: Israel Trejo
  @function: hideModal
  @description: Es la función que oculta el modal
  @param: 
    @var elemento: Es el objeto del DOM que recibe la función.
***/
function hideModal() {
  let modals = document.getElementsByClassName('modal');
  for(let x = 0; x < modals.length; x++){
    if (modals[x].classList.contains("show")) {
      modals[x].classList.remove("show");
      modals[x].style.opacity = 0;
      modals[x].style.left = "-100vw";
    }
  }
}

/***
 @author: Israel Trejo
 @function: showModal
 @description: Es la función que muestra el modal
 @param: 
   @var elemento: Es el objeto del DOM que recibe la función.
***/
function showModal() {
  let modalRef = this.getAttribute('data-modal');
  let modal = document.getElementById(modalRef);

  modal.classList.add("show");
  modal.style.left = 0;
  modal.style.opacity = 1;
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
      drops[i].addEventListener("click", toggleDrop, false);
    }

    //Listener de modales
    var buttonsTag = document.getElementsByTagName("button");
    var buttonsClass = document.getElementsByClassName("btn");
    var tagsTmp = document.getElementsByTagName("input");

    for (let i = 0; i < buttonsTag.length; i++) {
      if (buttonsTag[i].getAttribute("data-modal")) {
        buttonsTag[i].addEventListener("click", showModal, false);
      }
      if (buttonsTag[i].getAttribute("data-dismiss") == "modal" && buttonsTag[i].classList.contains("close")) {
        buttonsTag[i].addEventListener("click", hideModal, false);
      }
    }

    for (let i = 0; i < buttonsClass.length; i++) {
      if (buttonsClass[i].getAttribute("data-modal")) {
        buttonsClass[i].addEventListener("click", showModal, false);
      }
      if (buttonsClass[i].getAttribute("data-dismiss") == "modal" && buttonsClass[i].classList.contains("close")) {
        buttonsClass[i].addEventListener("click", hideModal, false);
      }
    }

    for (let i = 0; i < tagsTmp.length; i++) {
      if (tagsTmp[i].getAttribute("data-modal")) {
        tagsTmp[i].addEventListener("click", showModal, false);
      }
      if (tagsTmp[i].getAttribute("data-dismiss") == "modal" && tagsTmp[i].classList.contains("close")) {
        tagsTmp[i].addEventListener("click", hideModal, false);
      }
    }
  }
};

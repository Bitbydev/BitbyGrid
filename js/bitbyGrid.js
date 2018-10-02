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
  @function: 
  @description: 
  @param: 
***/


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
  }
};

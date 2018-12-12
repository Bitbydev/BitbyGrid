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
  let tabRef = elemento.parentElement.getAttribute('data-target');
  let tabContainer = document.getElementById(tabRef);
  if (tabContainer != null) {
    tabContainer = tabContainer.getElementsByClassName("content")[0];
    if (tabContainer != null) {
      let tabOptions = tabContainer.getElementsByClassName("item");
      let tabOption = elemento.getAttribute('data-option');
      let option = tabOptions[tabOption];
      if (tabOption != null && option != null) {
        elemento.classList.add("active");
        option.style.removeProperty("padding");
        option.style.maxWidth = 100 + "%";
        option.style.maxHeight = "initial";
        let box = option.getBoundingClientRect();
        tabContainer.style.height = box.height + "px";
        if (option.classList.contains("hide-t")) {
          option.classList.remove("hide-t");
        }
        option.classList.add("show-t");
      } else {
        //Error pendiente
        showError(1, tabOption);
      }
    }else{
      showError(3, "content");
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
  let tabRef = elemento.parentElement.getAttribute('data-target');
  let tabContainer = document.getElementById(tabRef)
  if (tabContainer != null) {
    tabContainer = tabContainer.getElementsByClassName("content")[0];
    if (tabContainer != null) {
      let tabOptions = tabContainer.getElementsByClassName("item");
      let tabOption = elemento.getAttribute('data-option');
      let option = tabOptions[tabOption];
      if (tabOption != null && option != null) {
        if (elemento.classList.contains("active")) {
          elemento.classList.remove("active");
        }
        option.style.removeProperty("position");
        let box = option.getBoundingClientRect();
        tabContainer.style.height = box.height + "px";
        option.classList.add("hide-t");
        if (option.classList.contains("show-t")) {
          option.classList.remove("show-t");
        }
      } else {
        //Error pendiente
        showError(1, tabOption);
      }
    }else{
      showError(3, "content");
    }
  } else {
    showError(1, tabRef);
  }
}

/*** 
@author: Israel Trejo
@function: toggleTab
@description: Es la función que alterna los tabs
@param:
***/
function toggleTab() {
  if(!this.classList.contains("active")){
    let parent = this.parentElement;
    let listTab = parent.getElementsByClassName("control active");
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
  if (this.classList.contains("show-t")) {
    this.style.opacity = 1;
    this.style.position = "relative";
    this.parentElement.style.removeProperty("height");
  } else if (this.classList.contains("hide-t")) {
    this.style.removeProperty("max-height");
    this.style.removeProperty("max-width");
    this.style.removeProperty("opacity");
    this.style.padding = "initial";
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
    if(collapse.getAttribute("data-component") == "collapse"){
      let target = document.getElementById(collapse.getAttribute("data-target"));
      if (target != null && target.classList.contains("collapse") == false){
        hideCollapse(collapse);
      }
    }
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

 /***
  @author: Israel Trejo
  @function: autocomplete
  @description: Función que genera un menú de autocompletado
  @param: 
    @var name: ID del elemento del DOM que detectará la escritura.
    @var arr: Arreglo de palabras que serán revisadas para el autocompletado.
    @var options: JSON para cambiar las clases del contenedor y de los items.
***/
//Arreglo de prueba
var countries = ["Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla", "Antigua &amp; Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia &amp; Herzegovina", "Botswana", "Brazil", "British Virgin Islands", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central Arfrican Republic", "Chad", "Chile", "China", "Colombia", "Congo", "Cook Islands", "Costa Rica", "Cote D Ivoire", "Croatia", "Cuba", "Curacao", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands", "Faroe Islands", "Fiji", "Finland", "France", "French Polynesia", "French West Indies", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guam", "Guatemala", "Guernsey", "Guinea", "Guinea Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Isle of Man", "Israel", "Italy", "Jamaica", "Japan", "Jersey", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Kosovo", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauro", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "North Korea", "Norway", "Oman", "Pakistan", "Palau", "Palestine", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russia", "Rwanda", "Saint Pierre &amp; Miquelon", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Korea", "South Sudan", "Spain", "Sri Lanka", "St Kitts &amp; Nevis", "St Lucia", "St Vincent", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Timor L'Este", "Togo", "Tonga", "Trinidad &amp; Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks &amp; Caicos", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States of America", "Uruguay", "Uzbekistan", "Vanuatu", "Vatican City", "Venezuela", "Vietnam", "Virgin Islands (US)", "Yemen", "Zambia", "Zimbabwe"];
function autocomplete(name, arr, options = null) {
  let element = document.getElementById(name);
  if (element != null) {
    var elementCurrent;
    if(options == null){
      options = {container: "list-group hover", item: "item"};
    }

    element.addEventListener("input", function () {
      var divList, elementList, count, valInput = this.value;
      closeLists();
      if (!valInput) {
        return false;
      }
      elementCurrent = -1;
      divList = document.createElement("div");
      divList.setAttribute("id", this.id + "-list");
      divList.setAttribute("class", options.container + " autocomplete");
      let position = element.getBoundingClientRect();
      divList.style.width = position.width+"px";
      divList.style.top = position.height + position.top+"px";
      console.log();
      divList.style.marginTop = element.style.marginBottom+"px";
      this.parentNode.appendChild(divList);
      for (count = 0; count < arr.length; count++) {
        var str = arr[count];
        if (typeof str == "string") {
          var pos = str.toUpperCase().search(valInput.toUpperCase());
          if (pos > -1) {
            if (str.substr(pos, valInput.length).toUpperCase() == valInput.toUpperCase()) {
              elementList = document.createElement("div");
              elementList.setAttribute("class", options.item);
              elementList.innerHTML = str.substr(0, pos);
              elementList.innerHTML += "<strong>" + str.substr(pos, valInput.length) + "</strong>";
              elementList.innerHTML += str.substr(valInput.length + pos);
              elementList.innerHTML += "<input type='hidden' value='" + str + "'>";
              elementList.addEventListener("click", function (e) {
                element.value = this.getElementsByTagName("input")[0].value;
                closeLists();
              });
              divList.appendChild(elementList);
            }
          }
        }
      }
    });

    element.addEventListener("keydown", function (e) {
      var list = document.getElementById(this.id + "-list");
      if (list) {
        list = list.getElementsByTagName("div");
      }
      if (e.keyCode == 40) {
        elementCurrent++;
        addActive(list);
      } else if (e.keyCode == 38) {
        elementCurrent--;
        addActive(list);
      } else if (e.keyCode == 13) {
        e.preventDefault();
        if (elementCurrent > -1) {
          if (list) {
            list[elementCurrent].click();
          }
        }
      }
    });

    function addActive(list) {
      if (!list) {
        return false;
      }
      removeActive(list);
      if (elementCurrent >= list.length) {
        elementCurrent = 0;
      }
      if (elementCurrent < 0) {
        elementCurrent = (list.length - 1);
      }
      list[elementCurrent].classList.add("active");
    }

    function removeActive(list) {
      for (var i = 0; i < list.length; i++) {
        list[i].classList.remove("active");
      }
    }

    function closeLists(e) {
      var items = document.getElementsByClassName(options.container);
      for (var i = 0; i < items.length; i++) {
        if (e != items[i] && e != element) {
          items[i].parentNode.removeChild(items[i]);
        }
      }
    }

    document.addEventListener("click", function (e) {
      closeLists(e.target);
    });
  }else{
    showError(1, name);
  }
}

 /***
  @author: Israel Trejo
  @function: labelCreator
  @description: Función que genera un contenedor con etiquetas dinamicas
  @param: 
    @var name: Nombre del elemento del DOM que detectará la escritura.
    @var options: JSON para cambiar las clases del contenedor y de los items.
***/  
function labelCreator(name, options = null) {
  let element = document.getElementById(name);
  if (element != null) {
    if (options == null) {
      options = { element: "span", item: "tag red shadow-lg show", delimiter: "," };
    }
    // console.log(options);
    let val, length, data, target = element.getAttribute("data-target");
    element.addEventListener("input", function () {
      val = this.value;
      length = val.length;
      if (val[length - 1] == options.delimiter) {
        data = val.substr(0, length - 1);
        let container = document.getElementById(target);
        if (container != null) {
          if(container.classList.contains("label-creator") == false){
            container.classList.add("label-creator");
          }
          let item = document.createElement(options.element);
          item.innerHTML = data;
          item.setAttribute("class", options.item);
          container.appendChild(item);
          element.value = "";
        }else{
          showError(1, target);
        }
      }
    } , false);

    element.addEventListener("change", function () {
      val = this.value;
      length = val.length;
      data = val.substr(0, length);
      let container = document.getElementById(target);
      if (container != null) {
        if (container.classList.contains("label-creator") == false) {
          container.classList.add("label-creator");
        }
        let item = document.createElement(options.element);
        item.innerHTML = data;
        item.setAttribute("class", options.item);
        container.appendChild(item);
        element.value = "";
      } else {
        showError(1, target);
      }
    } , false);
  }else{
    showError(1, name);
  }
}

/*** 
@author: Israel Trejo
@function: showSlide
@description: Es la función que muestra un slide
@param:
    @var elemento: Es el objeto del DOM que recibe la función.
***/
function showSlide(elemento) {
  let slideRef = elemento.parentElement.getAttribute('data-target');
  let slideContainer = document.getElementById(slideRef);
  if (slideContainer != null) {
    slideContainer = slideContainer.getElementsByClassName("content")[0];
    if (slideContainer != null) {
      let slideOptions = slideContainer.getElementsByClassName("item");
      let slideOption = elemento.getAttribute('data-option');
      let option = slideOptions[slideOption];
      if (slideOption != null && option != null) {
        elemento.classList.add("active");
        option.style.removeProperty("padding");
        option.style.maxWidth = 100 + "%";
        option.style.maxHeight = "initial";
        let box = option.getBoundingClientRect();
        slideContainer.style.height = box.height + "px";
        if (option.classList.contains("hide-t")) {
          option.classList.remove("hide-t");
        }
        option.classList.add("show-t");
      } else {
        //Error pendiente
        showError(1, slideOption);
      }
    } else {
      showError(3, "content");
    }
  } else {
    showError(1, slideRef);
  }
}

/*** 
@author: Israel Trejo
@function: hideSlide
@description: Es la función que oculta un slide
@param:
    @var elemento: Es el objeto del DOM que recibe la función.
***/
function hideSlide(elemento) {
  let slideRef = elemento.parentElement.getAttribute('data-target');
  let slideContainer = document.getElementById(slideRef)
  if (slideContainer != null) {
    slideContainer = slideContainer.getElementsByClassName("content")[0];
    if (slideContainer != null) {
      let slideOptions = slideContainer.getElementsByClassName("item");
      let slideOption = elemento.getAttribute('data-option');
      let option = slideOptions[slideOption];
      if (slideOption != null && option != null) {
        if (elemento.classList.contains("active")) {
          elemento.classList.remove("active");
        }
        option.style.removeProperty("position");
        let box = option.getBoundingClientRect();
        slideContainer.style.height = box.height + "px";
        option.classList.add("hide-t");
        if (option.classList.contains("show-t")) {
          option.classList.remove("show-t");
        }
      } else {
        //Error pendiente
        showError(1, slideOption);
      }
    } else {
      showError(3, "content");
    }
  } else {
    showError(1, slideRef);
  }
}

/*** 
@author: Israel Trejo
@function: toggleSlide
@description: Es la función que alterna los slide
@param:
***/
function toggleSlide() {
  if (!this.classList.contains("active")) {
    let parent = this.parentElement;
    let listSlide = parent.getElementsByClassName("control active");
    for (let x = 0; x < listSlide.length; x++) {
      if (this.parentElement == listSlide[x].parentElement) {
        hideSlide(listSlide[x]);
      }
    }
    showSlide(this);
  }
}

/***
 @author: Israel Trejo
 @function: toggleSlideItem
 @description: Es la función que administra la animación del slide item
 @param:
***/
function toggleSlideItem() {
  if (this.classList.contains("show-t")) {
    this.style.opacity = 1;
    this.style.position = "relative";
    this.parentElement.style.removeProperty("height");
  } else if (this.classList.contains("hide-t")) {
    this.style.removeProperty("max-height");
    this.style.removeProperty("max-width");
    this.style.removeProperty("opacity");
    this.style.padding = "initial";
  }
}
/*
  Obtención de elementos y Ejecución de funciones
*/

document.onreadystatechange = () => {
  if (document.readyState === 'complete') {
    /* Seccion pruebas*/
    // let prueba = document.querySelectorAll("*[data-prueba]");
    // for(let x=0; x < prueba.length; x++){
    //   prueba[x].addEventListener("click", function(){console.log("Hola"), false});
    // }
    /*
      Definición de listeners
    */
    //Listener de todos los elementos de BitbyUx
    var bitbyux = document.querySelectorAll("*[data-component], *[data-dismiss]");
    // console.log(window);
    for(let i = 0; i < bitbyux.length; i++){
      let m, n, x, y;
      let e = bitbyux[i];
      let c = e.dataset.component;
      if (c != null) {
        switch (c) {
          case "auto":
            autocomplete(e.id, window[e.dataset.var]);
            break;

          case "collapse":
            e.addEventListener("click", toggleCollapse, false);
            m = document.getElementById(e.dataset.target);
            if (m != null) {
              m.style.transition = ".25s ease all";
            } else {
              showError(1, e.dataset.target);
            }
            break;

          case "drop":
            e.addEventListener("click", toggleDrop, false);
            m = document.getElementById(e.dataset.target);
            if (m != null) {
              m.addEventListener("animationend", toggleDropMenu, false);
            } else {
              showError(1, e.dataset.target);
            }
            break;

          case "modal":
            e.addEventListener("click", showModal, false);
            m = document.getElementById(e.dataset.target);
            if (m != null) {
              m.addEventListener("animationend", toggleModal, false);
            } else {
              showError(1, e.dataset.target);
            }
            break;

          case "label":
            labelCreator(e.id);
            break;

          case "tab":
            x = e.children;
            if (e.getElementsByClassName("active").length < 1 && x.length > 0) {
              x[0].classList.add("active");
            }
            for (let i = 0; i < x.length; i++) {
              y = x[i];
              y.addEventListener("click", toggleTab, false);
              if (y.classList.contains("active")) {
                y.classList.remove("active");
                y.click();
              }
              m = document.getElementById(e.dataset.target);
              if (m != null) {
                m = m.getElementsByClassName("content")[0];
                if (m != null) {
                  n = m.children[y.dataset.option];
                  if (n != null) {
                    n.addEventListener("animationend", toggleTabItem, false);
                  } else {
                    //Error pendiente
                    showError(1, e.dataset.target);
                  }
                } else {
                  //error pendiente de no hijos
                  showError(3, "content");
                }
              } else {
                showError(1, e.dataset.target);
              }
            }
            break;

          case "slide":
            x = e.children;
            if (e.getElementsByClassName("active").length < 1 && x.length > 0) {
              x[0].classList.add("active");
            }
            for (let i = 0; i < x.length; i++) {
              y = x[i];
              y.addEventListener("click", toggleSlide, false);
              if (y.classList.contains("active")) {
                y.classList.remove("active");
                y.click();
              }
              m = document.getElementById(e.dataset.target);
              if (m != null) {
                m = m.getElementsByClassName("content")[0];
                if (m != null) {
                  n = m.children[y.dataset.option];
                  if (n != null) {
                    n.addEventListener("animationend", toggleSlideItem, false);
                  } else {
                    //Error pendiente
                    showError(1, e.dataset.target);
                  }
                } else {
                  //error pendiente de no hijos
                  showError(3, "content");
                }
              } else {
                showError(1, e.dataset.target);
              }
            }
            break;

          default:
              console.log("Valor no valido: " + c);
              break;
        }
      }else{
        c = e.dataset.dismiss;
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
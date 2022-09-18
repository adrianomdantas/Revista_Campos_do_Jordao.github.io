//dropdown navbar

let notification = document.querySelector(".notification");
let avatar       = document.querySelector(".avatar");

dropMenu(notification);
dropMenu(avatar);


//console.log(notification);
//console.log(avatar);


function dropMenu(selector) { 
  //console.log(selector);
  selector.addEventListener("click", () => {
    let dropdownMenu = selector.querySelector(".dropdown-menu");
    dropdownMenu.classList.contains("active") ? dropdownMenu.classList.remove("active") : dropdownMenu.classList.add("active");
  //se isso for verdadeiro ? use verdadeiro (oculta): senao segunda acao
  })
}

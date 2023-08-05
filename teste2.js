
import {pagina1,pagina2,pagina3} from "./teste1.js";


    var p1 = pagina1();
    var p2 = pagina2();
    var p3 = pagina3();
    var paginaHTML = document.getElementById("pagina");



function pag1(){
    console.log("click l1");
    paginaHTML.innerHTML = p1;
}

function pag2(){
    console.log("click l2");
    paginaHTML.innerHTML = p2;

}

function pag3(){
    console.log("click l3");
    paginaHTML.innerHTML = p3;
}

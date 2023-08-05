
function cadastro(x){
    
    let pag = document.getElementById(x);
    
    // let txt =
    // "<h1>CLICK NO LINK 1</h1>" + 
    // "<h2>Testando o JS.</h2>"
    // ;
    
    pag.innerHTML = txt(1);

}

function manutencao(x){
    
    let pag = document.getElementById(x);
    
    // let txt =
    // "<h1>CLICK NO LINK 2</h1>" + 
    // "<h2>Testando o JS.</h2>"
    // ;
    
    pag.innerHTML = txt(2);

}

function manutencao2(x){
    
    let pag = document.getElementById(x);
    
    // let txt =
    // "<h1>CLICK NO LINK 3</h1>" + 
    // "<h2>Testando o JS.</h2>"
    // ;
    
    pag.innerHTML = txt(3);

}


function txt(x){
    let t = "";
    
    if(x == 1){
        // t = "<h1>CLICK NO LINK 1</h1>" + 
        //     "<h2>Testando o JS.</h2>"
        // ;

        t = '<object type="text/html" style="width:100%; height: 100vh;" data="./menu-php/CadastroCliente.php"></object>'
    }

    if(x == 2){
        // t = "<h1>CLICK NO LINK 2</h1>" + 
        //     "<h2>Testando o JS.</h2>"
        // ;
        t = '<object type="text/html" style="width:100%; height: 100vh;" data="./menu-php/CadastroManutencao.php"></object>'
    }

    if(x == 3){
        t = "<h1>CLICK NO LINK 3</h1>" + 
            "<h2>Testando o JS.</h2>"
        ;
    }

    return t;
}


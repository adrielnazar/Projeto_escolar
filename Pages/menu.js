function menu() {
    document.getElementById('user').classList.add("dentro")
    document.getElementById('user').classList.remove("fora")      
}

function fechar() {
    document.getElementById('user').classList.add("fora")
    document.getElementById('user').classList.remove("dentro")
}

function MostrarS() {
    
    document.getElementById('BtnAlterar').style.display = "none"
    document.getElementById('senha').style.display = "block"
    
}


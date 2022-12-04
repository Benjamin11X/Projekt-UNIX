document.getElementById("komputery_laptopy").onchange = function(){
    if(document.getElementById("komputery_laptopy").checked == true){
        document.getElementById("komputery").checked = true;
        document.getElementById("laptopy").checked = true;
    }
    else if(document.getElementById("komputery_laptopy").checked == false){
        document.getElementById("komputery").checked = false;
        document.getElementById("laptopy").checked = false;
    }
    else if(document.getElementById("komputery").checked == false || document.getElementById("laptopy").checked == false){
        document.getElementById("komputery_laptopy").checked = false;
    }
}

document.getElementById("komputery_laptopy").onchange = function(){
    
}

document.getElementById("smartfony_smartwatche").onchange = function(){
    if(document.getElementById("komputery_laptopy").checked == true){
        document.getElementById("komputery").checked = true;
        document.getElementById("laptopy").checked = true;
    }
    else if(document.getElementById("komputery_laptopy").checked == false){
        document.getElementById("komputery").checked = false;
        document.getElementById("laptopy").checked = false;
    }
}
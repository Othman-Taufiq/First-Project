let select = document.getElementById("select");
let list = document.getElementById("list");
let selectText = document.getElementById("select-text");
let inputField = document.getElementById("inputField");
let options = document.getElementsByClassName("option");

select.onclick = function(){
    list.classList.toggle("open");
};

for(option of options){
    option.onclick = function(){
        selectText.innerHTML = this.innerHTML;
        inputField.placeholder = "Chercher par "+ selectText.innerHTML;
    }
}

// window.onclick = function(e){
//     if(e.target.id !== "select"){
//         list.classList.remove("open");
//     }
// }
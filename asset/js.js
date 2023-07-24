//Toggle for SEARCHBAR
document.getElementById("select").addEventListener("click", function(){
    let list = document.getElementById("list");
    list.classList.toggle("open");
})
let selectText = document.getElementById("select-text");
let inputField = document.getElementById("inputField");
let options = document.getElementsByClassName("option-list");

for(options of options){
    options.onclick = function(){
        selectText.innerHTML = this.innerHTML;
        inputField.placeholder = "Chercher par "+ selectText.innerHTML;
    }
}

document.addEventListener("click", function(event) {
    let list = document.getElementById("list");
    let select = document.getElementById("select");
  
    if (!list.contains(event.target) && event.target !== select) {
      list.classList.remove("open");
    }
  });



// Toggle for USER ICON
document.getElementById("toggle-icon").addEventListener("click", function() {
    let userOptions = document.getElementById("user-options");
    userOptions.style.display = (userOptions.style.display === "none") ? "flex" : "none";
  });

  document.addEventListener("click", function(event) {
    let userOptions = document.getElementById("user-options");
    let toggleIcon = document.getElementById("toggle-icon");
  
    if (!userOptions.contains(event.target) && event.target !== toggleIcon) {
      userOptions.style.display = "none";
    }
  });
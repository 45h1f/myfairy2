let tabs = document.getElementById("tab_up");
let tab = tabs.getElementsByClassName("bookTab");

for (let i = 0; i < tab.length; i++) {
    tab[i].addEventListener("click", function() {
        let current = document.getElementsByClassName("activeTab");
        current[0].className = current[0].className.replace(" activeTab", "");
        this.className += " activeTab";
    });
}

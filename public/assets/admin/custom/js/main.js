let sideNav = $("#side-nav");
let content = $("#content-container");
let sideNavWidth = sideNav.outerWidth();

$("#toggle").click(function () {
    if (sideNav.css("left") == "0px") {
        sideNav.animate({left: `-${sideNavWidth}`});
        content.css("left","0px");
        content.css("border-radius", "0px");


    } else {
        sideNav.animate({left: `0px`});
        content.css("left","130px");
        content.css("border-top-left-radius", "50px");
        content.css("border-bottom-left-radius", "50px");
        $("#toggle").css("display","none")
    }
})

$("#close").click(function () {
    if (sideNav.css("left") == "214px") {
        sideNav.animate({left: `${sideNavWidth}`});
        content.css("left","13px");
        content.css("border-top-left-radius", "50px");
        content.css("border-bottom-left-radius", "50px");



    } else {
        sideNav.animate({left: `-${sideNavWidth}`});
        content.css("left","0px");
        content.css("border-radius", "0px");
        $("#toggle").css("display","block")

    }
})

function displayMenu(x) {
    if(x==1){
        if (document.getElementById("navbar-list1").classList.contains("show")) {
            document.getElementById("navbar-list1").classList.remove("show");

        } else {
            document.getElementById("navbar-list1").classList.add("show")
        }
    }else if(x==2){
        if (document.getElementById("navbar-list2").classList.contains("show")) {
            document.getElementById("navbar-list2").classList.remove("show");

        } else {
            document.getElementById("navbar-list2").classList.add("show")
        }
    }

}

function displayCalendar(){
    if (document.getElementById("calendar").classList.contains("showDate")) {
        document.getElementById("calendar").classList.remove("showDate");

    } else {
        document.getElementById("calendar").classList.add("showDate")
    }
}

let sidebar = document.getElementById("sidebar-navigation");
let link = sidebar.getElementsByClassName("item");

for (let i = 0; i < link.length; i++) {
    link[i].addEventListener("click", function() {
        let current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}




function showRecent() {
    if (document.getElementById("recent-list").classList.contains("show")) {
        document.getElementById("recent-list").classList.remove("show");

    } else {
        document.getElementById("recent-list").classList.add("show")
    }
}

function edit(x) {
    if(x==1){
        if (document.getElementById("edit-list1").classList.contains("show")) {
            document.getElementById("edit-list1").classList.remove("show");

        } else{
            document.getElementById("edit-list1").classList.add("show")
        }
    }else if (x==2){
        if (document.getElementById("edit-list2").classList.contains("show")) {
            document.getElementById("edit-list2").classList.remove("show");

        } else{
            document.getElementById("edit-list2").classList.add("show")
        }
    }
    else if (x==3){
        if (document.getElementById("edit-list3").classList.contains("show")) {
            document.getElementById("edit-list3").classList.remove("show");

        } else{
            document.getElementById("edit-list3").classList.add("show")
        }
    }
    else if (x==4){
        if (document.getElementById("edit-list4").classList.contains("show")) {
            document.getElementById("edit-list4").classList.remove("show");

        } else{
            document.getElementById("edit-list4").classList.add("show")
        }
    }
    else if (x==5){
        if (document.getElementById("edit-list5").classList.contains("show")) {
            document.getElementById("edit-list5").classList.remove("show");

        } else{
            document.getElementById("edit-list5").classList.add("show")
        }
    }

}


$(function(){

    /* Owl Carousel js */

    $('.book-time-carousel').owlCarousel({
        loop: false,
        margin: 30,
        nav: true,
        dots: false,
        navText: ['<svg viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 1L0.999999 7L7 13" stroke="#593E98" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>', '<svg viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L7 7L1 13" stroke="#593E98" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>'],
        mouseDrag: false,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 3
            }
        }
    });
});

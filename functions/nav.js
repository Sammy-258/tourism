let toggle_nav = document.getElementById("toggle-nav");
let nav_display = document.getElementById("nav-display");
let nav_ul = document.getElementById("nav-ul");
let close_nav = document.getElementById("close-nav");
let sights_scene = document.getElementById("sights-scene");
let sights_display = document.getElementById("sights_display");
let sights_lg = document.getElementById("sights_lg");
let sights_lg_display = document.getElementById("sights_lg_display");



toggle_nav.addEventListener("click", ()=>{
    nav_display.style.display="block";
    nav_ul.style.display="block";
});
close_nav.addEventListener("click", ()=>{
    nav_display.style.display="none";
    nav_ul.style.display="none";
});
sights_scene.addEventListener("click", ()=>{
    sights_display.style.display="block";
});
sights_lg.addEventListener("click", ()=>{
    sights_lg_display.style.display="block";
});

if(sights_lg_display.style.display=="block"){
    sights_lg.addEventListener("click", ()=>{
        sights_lg_display.style.display="none";
    });
}

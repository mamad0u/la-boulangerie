var btnMenu = document.querySelectorAll('.brg')
btnMenu.forEach(function(element){
    element.onclick = function(){
        console.log('ok')
        var menuPage = document.querySelector('.menu')
        menuPage.classList.toggle('menuActive')
        var menuFond = document.querySelector('.menu-fond')
        menuFond.classList.toggle('menu-fondActive')
    }
});
document.querySelectorAll('.menu-fond').forEach(function(element){
    element.onclick = function(){
        var menuPage = document.querySelector('.menu')
        menuPage.classList.toggle('menuActive')
        var menuFond = document.querySelector('.menu-fond')
        menuFond.classList.toggle('menu-fondActive')
    }
});
document.querySelectorAll('.close').forEach(function(element){
    element.onclick = function(){
        var menuPage = document.querySelector('.menu')
        menuPage.classList.toggle('menuActive')
        var menuFond = document.querySelector('.menu-fond')
        menuFond.classList.toggle('menu-fondActive')
    }
});

console.log('salut')
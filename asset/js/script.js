//Menu Burger

let buttonBurger = document.querySelector('.menuResponsive > i')
let nav = document.querySelector('nav')
let statNav = 0

buttonBurger.addEventListener('click', () =>{
    if(statNav == 0){
        nav.style.visibility = 'visible'
        statNav++
        console.log('nav visible')
    }else{
        nav.style.visibility = 'hidden'
        statNav = 0
        console.log('nav caché')

    }
})


//header changement 

let header = document.getElementById('bodyHeader')
let logoHeader = document.getElementById("logoHeader")


window.onscroll = function() {scrollFunction()}

function scrollFunction() {
if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
    if(document.body.clientWidth >= 768){
        logoHeader.style.background = "#F4F4F4 url('asset/img/logo/LOGO-CIMAISE-COULEUR-S.png') no-repeat center/70%"
        logoHeader.style.height="90px"
    }else{
        logoHeader.style.background = ""
        logoHeader.style.height=""
    }
} else {
    logoHeader.style.background = ""
    logoHeader.style.height=""
}
} 




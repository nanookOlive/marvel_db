var ajouter_heros=document.getElementById('ajouter_heros')
var supprimer_heros=document.getElementById('supprimer_heros')
var modifier_heros=document.getElementById('modifier_heros');

var add_heros=document.getElementById('add_heros');
var supp_heros=document.getElementById('supp_heros');
var update_heros=document.getElementById('update_heros')

ajouter_heros.addEventListener('click',()=>{

    add_heros.classList.toggle("active");
    supp_heros.classList.remove('active');
    update_heros.classList.remove('active');
})

supprimer_heros.addEventListener('click',()=>{

    supp_heros.classList.toggle("active");
    add_heros.classList.remove('active');
    update_heros.classList.remove('active')
})

modifier_heros.addEventListener('click',()=>{

    update_heros.classList.toggle("active");
    add_heros.classList.remove('active');
    supp_heros.classList.remove('active')
})



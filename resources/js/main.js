
let links = document.querySelectorAll('.nav-link')
let nav = document.querySelector('.navbar')
// let nav = document.querySelector('.navbar' && '.dropstartCustom')
let drop = document.querySelector('.dropstartCustom')


let path = document.querySelectorAll('.prova');
let wrapper = document.querySelector('#wrapper');
let par = document.createElement('div');



path.forEach(e=>e.addEventListener('mouseover',()=>{

    
    wrapper.classList.add('banner');
    // par.innerHTML='Sei in : '+e.getAttribute('name');
    par.innerHTML= e.getAttribute('name');
    par.style.visibility = 'visible';
    console.log('sei nell over');
    
}))

path.forEach(e=>e.addEventListener('mouseleave',()=>{
    wrapper.classList.remove('banner');
    par.style.visibility = 'hidden';
    console.log('sei uscito dall over');
    
}))
wrapper.appendChild(par);




window.onscroll=()=>{
    if(window.scrollY > 0)
    {
        links.forEach((link) => {
            
            link.classList.remove('navColor1')
            link.classList.add('navColor2')
            // link.style.color
            
        });
        nav.style.backgroundColor="rgba(24, 122, 241, 0.977)"
        drop.style.backgroundColor="rgb(24, 122, 241)"

    }
    else{
        links.forEach((link) => {
            
            link.classList.remove('navColor2')
            link.classList.add('navColor1')
            
        });
        nav.style.backgroundColor="rgba(22, 162, 255, 0.31)"
        drop.style.backgroundColor="rgb(202, 240, 248)"

    }
}







// path.forEach(e=>e.addEventListener('mouseover',()=>{

    
//     wrapper.classList.add('banner');
//     // par.innerHTML='Sei in : '+e.getAttribute('name');
//     par.innerHTML= e.getAttribute('name');
//     par.style.visibility = 'visible';
//     console.log('sei nell over');
    
// }))
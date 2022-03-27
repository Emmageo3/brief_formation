window.onload = ()=>{    
    // =============
    // Gestion  affichage Langue choisi sur le menu navbar
    //==============
    let selectedLangage = document.querySelector('a.sp-dropdown-toggle')
    let langagesBox = document.querySelector('ul.dropdown-menu')
    let Langages = document.querySelectorAll('ul li a.dropdown-item');
    Langages.forEach(element => {
        element.addEventListener('click', ()=>{
            let regex = new RegExp(`${selectedLangage.innerText}`)
            selectedLangage.innerHTML = selectedLangage.innerHTML.replace(regex, element.innerText)
            langagesBox.classList.toggle('d-inline-block')
        })
    });
    selectedLangage.addEventListener('click', ()=>{
        langagesBox.classList.toggle('d-inline-block')
    })

    // =============
    // Gestion  active bar menu  par section (parcours / public ) 
    //==============
    let publicMenusItems = document.querySelectorAll('.menu-public  p')
    let activePublicMenuItem = document.querySelector('.menu-public  p.active')
    updateActiveItem(publicMenusItems,activePublicMenuItem )
    
    let parcoursMenusItems = document.querySelectorAll('.menu-parcours  p');
    let activeParcoursMenuItem = document.querySelector('.menu-parcours  p.active')
    updateActiveItem(parcoursMenusItems,activeParcoursMenuItem )
    
    let publicSecondaryMenusItems = document.querySelectorAll('.secondary-menu-public  p')
    let activePublicSecondaryMenuItem = document.querySelector('.secondary-menu-public  p.active')
    updateActiveItem(publicSecondaryMenusItems, activePublicSecondaryMenuItem )
    
    let parcoursSecondaryMenusItems = document.querySelectorAll('.secondary-menu-parcours  p');
    let activeParcoursSecondaryMenuItem = document.querySelector('.secondary-menu-parcours  p.active')
    updateActiveItem(parcoursSecondaryMenusItems, activeParcoursSecondaryMenuItem )

    function updateActiveItem(elements, activeElement){
        elements.forEach(element=>{
            element.addEventListener('click', function(e){
                console.log(activeElement)
                activeElement.classList.toggle('active')
                element.classList.toggle('active')
                activeElement = element
                console.log(activeElement)
            })
        })
    }


    // =============
    // Gestion Affichage du  Menu Bar version mobile 
    //==============
    let sections = document.querySelectorAll(".row-secondary")
    let menus = document.querySelectorAll(".secondary-menu")
    
    window.addEventListener('scroll', ()=>{
        
        sections.forEach((elt,index)=>{

            elt = sections[index].getBoundingClientRect()

            if(elt.y <= 0 &&  elt.y + elt.height >= 500) {
                if (!menus[index].classList.contains("sp-hidden-left")) {
                    menus[index].classList.toggle("sp-hidden-left")
                    menus[index].classList.toggle("classOn")
                    menus[index].style.display= "inline-block"
                }
            } else if (menus[index].classList.contains("sp-hidden-left")) {
                menus[index].classList.toggle("sp-hidden-left")
                menus[index].style.display= "none"
            }   
        })
    })
    

}

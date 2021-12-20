var pestanias = document.getElementsByClassName("nav-link")

var home = document.getElementById("home");
var blog = document.getElementById("blog")
var admin = document.getElementById("admin")

pestanias[0].addEventListener("mouseover", ()=>{
    if(pestanias[0] === home)
    {
        pestanias[0].classList.add("active");
        pestanias[1].classList.remove("active");
        pestanias[2].classList.remove("active");
    }
})

pestanias[1].addEventListener("mouseover", ()=>{
    if(pestanias[1] === blog)
    {
        pestanias[0].classList.remove("active");
        pestanias[1].classList.add("active");
        pestanias[2].classList.remove("active");
    }
})

pestanias[2].addEventListener("mouseover", ()=>{
    if(pestanias[2] === admin)
    {
        pestanias[0].classList.remove("active");
        pestanias[1].classList.remove("active");
        pestanias[2].classList.add("active");
    }
})


// for(var i = 0; i < pestanias.length; i++)
// {
//     pestanias[i].addEventListener("click", (e)=>{

//         for(var x = 0; x < pestanias.length; x++)
//         {
//             pestanias[x].classList.remove("active");
//         } 
//         console.log(e.target);
        
//         e.target.classList.add("active") 
//     })
   
// }


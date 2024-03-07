document.addEventListener("DOMContentLoaded", function(event) {
   
    const showNavbar = (toggleId, navId, bodyId, headerId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId),
    headerpd = document.getElementById(headerId)
    
    // Validate that all variables exist
    if(toggle && nav && bodypd && headerpd){
    toggle.addEventListener('click', ()=>{
    // show navbar
    nav.classList.toggle('show')
    // change icon
    toggle.classList.toggle('bx-x')
    // add padding to body
    bodypd.classList.toggle('body-pd')
    // add padding to header
    headerpd.classList.toggle('body-pd')
    })
    }
    }
    
    showNavbar('header-toggle','nav-bar','body-pd','header')
    
    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll('.nav_link')
    
    function colorLink(){
    if(linkColor){
    linkColor.forEach(l=> l.classList.remove('active'))
    this.classList.add('active')
    }
    }
    linkColor.forEach(l=> l.addEventListener('click', colorLink))
    
     // Your code to run since DOM is loaded and ready

    var action = "detalles";
    const header = document.getElementById('header');
    var id = header.getAttribute('data-id');
    const email = document.getElementById('email-user'),
    nombre = document.getElementById('nombre-user');
    $.ajax({
        url: 'Controlador/cont.usuarios.php',
        type: 'POST',
        data: {
            action: action,
            id: id
        },
        success: function (respuesta) {
            var detalles = JSON.parse(respuesta);
            if (detalles.status == false) {
                console.log(id);
            } else {
                email.innerText = detalles.data.correo;
                nombre.innerText = detalles.data.nombre + " " + detalles.data.apellido;
            }
        }
    });

    });
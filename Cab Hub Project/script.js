let menubar = document.querySelector('#menu-bar')
let mynav = document.querySelector('.navbar');

menubar.onclick = () =>{
    menubar.classlist.toggle('fa-times');
    menubar.classlist.toggle('active');

}

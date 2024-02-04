let $ = document.querySelector.bind(document);

var pieTarjeta = document.getElementsByClassName('pie-tarjeta');
for (var i = 0; i < pieTarjeta.length; i++) {
    pieTarjeta[i].previousElementSibling.className += ' mb-3';
}

// ALTURA HEADER

var header = document.querySelectorAll('header')[0];

//ajustar top del drop segun la altura del header
var alturaHeader = header.clientHeight;
//drop.style.setProperty('top', alturaHeader + 'px');


// Modals
// var allModals = document.querySelectorAll('.modal-claro, .modal-oscuro', '.modal-principal, .modal-secundario, .modal-alerta, .modal-completado')[0];

// var fChild = allModals.firstChild;
// var lChild = allModals.lastChild;

// fChild.nextSibling.className += ' br-top';
// lChild.previousElementSibling.className += ' br-bottom';

// //modals
// allModals.className += ' d-none';

// var cerrarModal = document.querySelectorAll('.cerrar-modal')[0];
// cerrarModal.addEventListener('click', function () {
//     allModals.className += ' d-none';
// });

// var mostrarModal = document.querySelectorAll('.abrir-modal')[0];
// mostrarModal.addEventListener('click', function () {
//     allModals.classList.remove('d-none');
// });

//desplegable

var dropdown = document.querySelectorAll('.dropdown')[0];
var drop = document.querySelectorAll('.drop')[0];
var header = document.querySelectorAll('header')[0];

if (dropdown) {
    drop.style.setProperty('top', alturaHeader + 'px');
    drop.classList.add('hidden');
    dropdown.innerHTML = '<div></div><div></div><div></div>';

    // if (header.classList.contains('expandir-sm')) {
    //     drop.classList.remove('hidden');
    // }

    dropdown.addEventListener('click', function () {
        if (dropdown.classList.contains('active')) {
            dropdown.classList.toggle('active');
            dropdown.classList.toggle('btnAnimacion');
            drop.classList.toggle('show');
        } else {
            dropdown.classList.toggle('active');
            dropdown.classList.toggle('btnAnimacion');
            drop.classList.toggle('show');

        }
    });
}


//TABS
var contenidoTabs = document.querySelector('.tabs .contenido-tabs');

//Botón que llama al evento
var btnTabs = document.querySelectorAll('.tabs ul li');

btnTabs.forEach(function (botonTab) {
    botonTab.onclick = function () {

        //Extraemos la data attribute
        var data = botonTab.getAttribute('data-target-tab');

        //Capturamos el contenido
        var innerTab = document.getElementById(data);

        //Cambiamos el contenido
        [...innerTab.parentElement.children].forEach(sib => sib.classList.remove('show'));
        innerTab.classList.toggle('show');
    }
});

//ACORDEON

const acordeonBtns = document.querySelectorAll('.acordeon');
acordeonBtns.forEach((acordeon) => {
    acordeon.onclick = function () {
        this.classList.toggle('abierto');
        let content = this.nextElementSibling;
        if (content.style.maxHeight) {
            //this is if the acordeon is open
            content.style.maxHeight = null;
        } else {
            //if the acordeon is currently closed
            content.style.maxHeight = content.scrollHeight + 'px';
        }
    };
});

// ASIDE

// var aside = document.querySelector('.aside');
// var asideParent = aside.parentNode;
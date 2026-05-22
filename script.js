// Efecto de scroll suave
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$('#estudiante').select2({
    placeholder: "Buscar estudiante..."
});
// Mensaje en consola al cargar
console.log("Web del Sindicato Tungurahua lista.");
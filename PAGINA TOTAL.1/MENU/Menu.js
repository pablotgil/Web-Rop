function mover(direccion, idCarrusel) {
  const carrusel = document.getElementById(idCarrusel);
  carrusel.scrollBy({
    left: direccion * 320,
    behavior: 'smooth'
  });
}


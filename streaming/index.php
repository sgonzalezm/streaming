<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='UTF-8'>
<title>Videos Disponibles para Streaming</title>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@10.2.0/swiper-bundle.min.css'>
<link rel='stylesheet' href='css/styles.css'>
</head>
<body>

<h1>Videos Disponibles para Streaming</h1>

<!-- Contenedor del Carrusel -->
<div class="swiper-container">
    <div class="swiper-wrapper" id="video-carousel">
        <!-- Los videos serán cargados aquí dinámicamente -->
    </div>
    <!-- Botones de navegación -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- Paginación -->
    <div class="swiper-pagination"></div>
</div>

<footer>
<p>Powered by <a href='http://nginx.org'>NGINX</a> & <a href='https://www.php.net/'>PHP</a></p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@10.2.0/swiper-bundle.min.js"></script>


<script>
document.addEventListener('DOMContentLoaded', function () {
    // Consumir la API para obtener la lista de videos
    fetch('/api/videos.php')
        .then(response => response.json())
        .then(data => {
            const carousel = document.getElementById('video-carousel');

            // Crear elementos del carrusel para cada video
            data.forEach(video => {
                const slide = document.createElement('div');
                slide.classList.add('swiper-slide');
                slide.innerHTML = `
                    <a href="${video.url}">
                        <img src="${video.thumbnail_url}" alt="${video.title}">
                        <p>${video.title}</p>
                    </a>
                `;
                carousel.appendChild(slide);
            });

            // Inicializar Swiper después de que los videos se hayan cargado
            new Swiper('.swiper-container', {
                slidesPerView: 4,
                spaceBetween: 30,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                loop: true
            });
        })
        .catch(error => console.error("Error fetching videos:", error));
});
</script>

</body>
</html>

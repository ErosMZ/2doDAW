var areaElements = document.querySelectorAll("area");

areaElements.forEach(area => {
    
    area.addEventListener("click", function() {
        
        var modal = document.getElementById("modal")
        var tituloModal = document.getElementById("titulo");

        modal.classList.remove("oculto");

        var titulo = area.getAttribute("title");

        tituloModal.innerText = titulo;

    });
});


// Selecciona todos los elementos <area>
const areaElements = document.querySelectorAll("area");

console.log("dsd")
// Itera sobre cada elemento y agrega un evento "click"
areaElements.forEach(area => {
    area.addEventListener("click", function() {
        const titleValue = area.getAttribute('title');
        alert(titleValue);
    });
});

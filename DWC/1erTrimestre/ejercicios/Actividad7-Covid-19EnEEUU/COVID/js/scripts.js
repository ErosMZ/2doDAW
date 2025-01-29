var areaElements = document.querySelectorAll("area");
var botonVolver= document.getElementById("botonVolver");


var estados = {

    "Alabama": { lat: 32.806671, lon: -86.791130 },
    "Alaska": { lat: 61.370716, lon: -152.404419 },
    "Arizona": { lat: 33.729759, lon: -111.431221 },
    "Arkansas": { lat: 34.969704, lon: -92.373123 },
    "California": { lat: 36.116203, lon: -119.681564 },
    "Colorado": { lat: 39.059811, lon: -105.311104 },
    "Connecticut": { lat: 41.597782, lon: -72.755371 },
    "Delaware": { lat: 38.665695, lon: -75.594395 },
    "Florida": { lat: 27.766279, lon: -81.686783 },
    "Georgia": { lat: 33.040619, lon: -83.643074 },
    "Hawái": { lat: 21.094318, lon: -157.498337 },
    "Idaho": { lat: 44.299782, lon: -114.142459 },
    "Illinois": { lat: 40.636772, lon: -89.398528 },
    "Indiana": { lat: 39.717600, lon: -86.518995 },
    "Iowa": { lat: 42.154074, lon: -93.097702 },
    "Kansas": { lat: 38.526600, lon: -96.726486 },
    "Kentucky": { lat: 36.577091, lon: -86.408869 },
    "Luisiana": { lat: 31.169546, lon: -91.867805 },
    "Maine": { lat: 44.693947, lon: -69.381927 },
    "Maryland": { lat: 39.063946, lon: -76.802101 },
    "Massachusetts": { lat: 42.230171, lon: -71.530106 },
    "Michigan": { lat: 42.518603, lon: -84.780336 },
    "Minnesota": { lat: 46.729553, lon: -94.685899 },
    "Misisipi": { lat: 32.741646, lon: -89.678696 },
    "Misuri": { lat: 36.536536, lon: -89.838515 },
    "Montana": { lat: 46.921925, lon: -110.454353 },
    "Nebraska": { lat: 41.125370, lon: -98.268082 },
    "Nevada": { lat: 38.313515, lon: -117.055374 },
    "Nuevo_Hampshire": { lat: 43.452492, lon: -71.563896 },
    "Nueva_Jersey": { lat: 40.298904, lon: -74.521011 },
    "Nuevo_Mexico": { lat: 34.225976, lon: -106.447158 },
    "Nueva_York": { lat: 40.7128, lon: -74.0060 },
    "Carolina_del_Norte": { lat: 35.630066, lon: -79.806419 },
    "Dakota_del_Norte": { lat: 47.528912, lon: -99.784012 },
    "Ohio": { lat: 40.388783, lon: -82.764915 },
    "Oklahoma": { lat: 35.565342, lon: -96.928917 },
    "Oregón": { lat: 41.203444, lon: -73.287722 },
    "Pensilvania": { lat: 40.551217, lon: -75.445401 },
    "Rhode_Island": { lat: 41.680894, lon: -71.511780 },
    "Carolina_del_Sur": { lat: 33.656334, lon: -80.836950 },
    "Dakota_del_Sur": { lat: 44.299782, lon: -99.438828 },
    "Tennessee": { lat: 35.747845, lon: -86.692345 },
    "Texas": { lat: 31.054487, lon: -97.563461 },
    "Utah": { lat: 40.150032, lon: -111.862434 },
    "Vermont": { lat: 44.045876, lon: -72.710686 },
    "Virginia": { lat: 37.769337, lon: -78.169968 },
    "Washington": { lat: 47.400902, lon: -121.490495 },
    "Virginia_Occidental": { lat: 38.491226, lon: -80.954570 },
    "Wisconsin": { lat: 43.631159, lon: -89.398528 },
    "Wyoming": { lat: 42.755966, lon: -107.302490 }
};


areaElements.forEach(area => {

    area.addEventListener("click", function() {
        var modal = document.getElementById("modal");
        var tituloModal = document.getElementById("titulo");

        modal.classList.remove("oculto");

        var titulo = area.getAttribute("title");
        tituloModal.innerText = titulo;

        // Obtén las coordenadas usando el nombre del estado
        var estado = titulo;  // Usamos el título del área como el nombre del estado
        var lat = estados[estado].lat;
        var lon = estados[estado].lon;

        getData(estado, lat, lon);
    });
});


async function getData(estado, lat , lon) {


    var url = "https://api.weatherusa.net/v1/forecast?q=" + lat + "," + lon + "&hourly=1&units=e&maxtime=3d"; 
    
    console.log(" ");
    console.log(" ");
    console.log(" ");
    console.log(" ");

    try {

        var response = await fetch(url);
        if (!response.ok) {
            throw new Error("Response status: ${response.status}");
        }
        var columnasTiempo = document.querySelectorAll(".columnaTiempo");
        var columnasFoto = document.querySelectorAll(".columnaFoto");
        var tolumnasTest = document.querySelectorAll(".tolumnaTest");
        var columnasHora = document.querySelectorAll(".columnaHora");

       
        var json = await response.json();

        var i = 0;
        json.forEach(day => {
           
            columnasHora[i].textContent = `${day.localtime}`;
            columnasTiempo[i].textContent = `${day.wx_str}`;

            console.log(`${day.wx_icon}`)
            switch (`${day.wx_icon}`) {
                
                case "mt_cloudy":
                    
                    setImage(columnasFoto[i], "img/MostlyCloudy.jpg");
                    break;
                case "overcast":
                    
                    setImage(columnasFoto[i], "img/Overcast.jpeg");
                    break;
                case "ra":
                    
                    setImage(columnasFoto[i], "img/ChanceOfRain.png");
                    break;
                case "clear":

                    break;

                case "pt_cloudy":

                    break;

                case "pt_cloudy_night":
                    setImage(columnasFoto[i], "img/pt_cloudy_night.png");
                    break;
                default:
                    
                    break;
            }
            // Mostly Cloudy
            // console.log(`Day: ${day.day_name_short}`);
            // console.log(`Hora:  ${day.localtime}`);
            // console.log(`Weather: ${day.wx_str}`);
            // console.log(`High: ${day.hi}°F, Low: ${day.lo}°F`);
            // console.log(`Precipitation chance: ${day.pop12}%`);
            // console.log('-------------------');
            i++;
        });
        return
    } catch (error) {
        console.error(error.message);
    }
}

botonVolver.addEventListener("click", function() { 
    modal.classList.add("oculto");
});

function setImage(container, src) {
    let img = document.createElement("img");
    img.src = src;
    img.alt = "Weather Image";
    img.style.width = "50px";
    img.style.height = "50px";
    container.innerHTML = ""; // Borra el contenido anterior
    container.appendChild(img);
}
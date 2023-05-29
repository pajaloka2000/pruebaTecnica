// Configuración de la API
const apiKey = '05f357be4448b92b3f623ba6b2ed2702';
const ciudades = [
  { name: 'Miami', lat: 25.7617, lon: -80.1918 },
  { name: 'Orlando', lat: 28.5383, lon: -81.3792 },
  { name: 'NewYork', lat: 40.7128, lon: -74.0060 }
];

// Función para obtener la humedad de una ciudad
async function obtenerHumedad(ciudad) {
  const url = `https://api.openweathermap.org/data/2.5/weather?lat=${ciudad.lat}&lon=${ciudad.lon}&appid=${apiKey}`;
  const response = await fetch(url);
  const data = await response.json();
  return data.main.humidity;
}

// Función para mostrar los datos de humedad en los elementos HTML correspondientes
async function mostrarHumedad() {
  for (const ciudad of ciudades) {
    const humidity = await obtenerHumedad(ciudad);
    document.getElementById(`${ciudad.name.toLowerCase()}-humidity`).textContent = `${humidity}%`;
  }
}

// Ejecutar la función al cargar la página
window.onload = mostrarHumedad;
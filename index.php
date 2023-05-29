<?php
    require 'includes/funciones.php';

    //Base de datos
    require 'includes/config/database.php';
    $db = conectarDB();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Realizar la solicitud a la API y obtener los datos de las ciudades y su humedad
        // Configuración de la API
            $apiKey = '05f357be4448b92b3f623ba6b2ed2702';
            $ciudades = [
                ['name' => 'Miami', 'lat' => 25.7617, 'lon' => -80.1918],
                ['name' => 'Orlando', 'lat' => 28.5383, 'lon' => -81.3792],
                ['name' => 'New York', 'lat' => 40.7128, 'lon' => -74.0060]
            ];

        // Obtener la fecha y hora actual
            $fechaActualizacion = date("Y-m-d H:i:s");

        // Recorrer las ciudades y realizar la inserción en la base de datos
            foreach ($ciudades as $city) {
                // Realizar la solicitud a la API y obtener los datos de humedad
                $url = "https://api.openweathermap.org/data/2.5/weather?lat={$city['lat']}&lon={$city['lon']}&appid={$apiKey}";
                $response = file_get_contents($url);
                $data = json_decode($response, true);
            
                // Obtener el valor de la humedad de los datos recibidos
                $humedad = $data['main']['humidity'];
            
                // Insertar los datos en la base de datos
                $query = "INSERT INTO datos (ciudad, humedad, fecha) VALUES ('{$city['name']}', $humedad, '$fechaActualizacion')";
                $resultado = mysqli_query($db, $query);
            }
       
    }
    incluirTemplate('header');
?>
    <main class="contenedor">
        <h1>Humedad de ciudades</h1>
        <div class="mapas">
            <div class="seccion-mapa">
                <h2 class="ciudad">Miami: <span id="miami-humidity"></span></h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d333490.88172024203!2d-80.31388086228559!3d25.82023927114552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b0a20ec8c111%3A0xff96f271ddad4f65!2sMiami%2C%20Florida%2C%20EE.%20UU.!5e1!3m2!1ses!2sco!4v1685241337600!5m2!1ses!2sco" 
                width="350" height="300" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                
            </div>
            <div class="seccion-mapa">
                <h2 class="ciudad">Orlando: <span id="orlando-humidity"></span></h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d355957.2774851527!2d-81.9336519701197!3d28.48049966913279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e773d8fecdbc77%3A0xac3b2063ca5bf9e!2sOrlando%2C%20Florida%2C%20EE.%20UU.!5e1!3m2!1ses!2sco!4v1685331149146!5m2!1ses!2sco" 
                width="350" height="300" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                
            </div>
            <div class="seccion-mapa">
                <h2 class="ciudad">New York: <span id="newyork-humidity"></span></h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d307030.38293989626!2d-74.30934256427878!3d40.697539946916116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNueva%20York%2C%20EE.%20UU.!5e1!3m2!1ses!2sco!4v1685331244841!5m2!1ses!2sco" 
                width="350" height="300" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>              
            </div>
            
        </div>
        
        <div class="acciones">
            <div class="accion-formulario">
                <h3>Guardar el registro actual: </h3>
                <form action="index.php" method="POST" enctype="multipart/form-data">
                    <input type="submit" value="Guardar" class="boton">
                </form>
            </div>
            <div class="accion-enlace">
                <h3>Guardar el registro actual: </h3>
                <a class="enlace" href="historial.php">Ver</a>
            </div>
            
            
        </div>
        
    </main>

<?php
    incluirTemplate('footer');
?>
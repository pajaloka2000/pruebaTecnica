<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
    
    //Importar la Base de datos
        require 'includes/config/database.php';
        $db = conectarDB();

    //Consulta a la BD
        $query = "SELECT * FROM datos";
        $resultadoConsulta = mysqli_query($db, $query);
?>
    <main class="contenedor">
        <h1 class="titulo">Historial</h1>
        <div class="historial">
            <table >
                <thead >
                    <tr>
                        <th>Ciudad</th>
                        <th>Humedad</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($historial = mysqli_fetch_assoc($resultadoConsulta)) :  ?>
                    <tr>
                        <td><?php echo $historial['ciudad']; ?></td>
                        <td><?php echo $historial['humedad']; ?></td>
                        <td><?php echo $historial['fecha']; ?></td>
                    </tr>
                    <?php endwhile;?>
                </tbody>
            </table>
        </div>
        
    </main>

<?php
    incluirTemplate('footer');
?>
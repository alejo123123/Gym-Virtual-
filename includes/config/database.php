<?php

function conectar() : mysqli {
  $db = mysqli_connect('localhost', 'root', 'wahapenxd123', 'gimnasio');

  if(!$db) {
    echo 'no se pudo conectar';
    exit;
  }
  return $db;
}


//funcion para extraer datos

function obtenerdato() {
    global $db; 
    try {
        // Consulta SQL para obtener los datos de los planes
        $sql = "SELECT * FROM plan";
        
        // Realizar la consulta
        $consulta = mysqli_query($db, $sql);
        
        // Verificar si se obtuvieron resultados
        if ($consulta && mysqli_num_rows($consulta) > 0) { //revisar si el numero de filas es mayor a 0 para que se devuelva almenos 1 fila
            return $consulta; // Devolver los resultados de la consulta
        } else {
            return false; // Devolver false si no se encontraron resultados
        }

    } catch (\Throwable $th) {
        // Manejar cualquier error que ocurra durante la consulta
        echo "Error al obtener los datos de los planes: " . $th->getMessage();
        return false; //devolver false en caso de error
    }
}



function obtenerdatoprom() {
    global $db; 
    try {
        // Consulta SQL para obtener los datos de los planes
        $sql = "SELECT * FROM promocion";
        
        // Realizar la consulta
        $consulta = mysqli_query($db, $sql);
        
        // Verificar si se obtuvieron resultados
        if ($consulta && mysqli_num_rows($consulta) > 0) { //revisar si el numero de filas es mayor a 0 para que se devuelva almenos 1 fila
            return $consulta; // Devolver los resultados de la consulta
        } else {
            return false; // Devolver false si no se encontraron resultados
        }

    } catch (\Throwable $th) {
        // Manejar cualquier error que ocurra durante la consulta
        echo "Error al obtener los datos de las promociones: " . $th->getMessage();
        return false; //devolver false en caso de error
    }
}



function obtenerdatosedes() {
    global $db; 
    try {
        // Consulta SQL para obtener los datos de los planes
        $sql = "SELECT * FROM gimnasio limit 2";
        
        // Realizar la consulta
        $consulta = mysqli_query($db, $sql);
        
        // Verificar si se obtuvieron resultados
        if ($consulta && mysqli_num_rows($consulta) > 0) { //revisar si el numero de filas es mayor a 0 para que se devuelva almenos 1 fila
            return $consulta; // Devolver los resultados de la consulta
        } else {
            return false; // Devolver false si no se encontraron resultados
        }

    } catch (\Throwable $th) {
        // Manejar cualquier error que ocurra durante la consulta
        echo "Error al obtener los datos de las sedes: " . $th->getMessage();
        return false; //devolver false en caso de error
    }
}



function obtenerdatosedes2() {
    global $db; 
    try {
        // Consulta SQL para obtener los datos de los planes
        $sql = "SELECT * FROM gimnasio where codigo = 3";
        
        // Realizar la consulta
        $consulta = mysqli_query($db, $sql);
        
        // Verificar si se obtuvieron resultados
        if ($consulta && mysqli_num_rows($consulta) > 0) { //revisar si el numero de filas es mayor a 0 para que se devuelva almenos 1 fila
            return $consulta; // Devolver los resultados de la consulta
        } else {
            return false; // Devolver false si no se encontraron resultados
        }

    } catch (\Throwable $th) {
        // Manejar cualquier error que ocurra durante la consulta
        echo "Error al obtener los datos de las sedes: " . $th->getMessage();
        return false; //devolver false en caso de error
    }
}


function obtenerdatoemp() {
    global $db; 
    try {
        // Consulta SQL para obtener los datos de los planes
        $sql = "SELECT * FROM persona where dni >70000003 and dni <70000010";
        // Realizar la consulta
        $consulta = mysqli_query($db, $sql);
        
        // Verificar si se obtuvieron resultados
       if ($consulta && mysqli_num_rows($consulta) > 0) { //revisar si el numero de filas es mayor a 0 para que se devuelva almenos 1 fila
            return $consulta; // Devolver los resultados de la consulta
        } else {
            return false; // Devolver false si no se encontraron resultados
        }

    } catch (\Throwable $th) {
        // Manejar cualquier error que ocurra durante la consulta
        echo "Error al obtener los datos de los empleados: " . $th->getMessage();
        return false; //devolver false en caso de error
    }
}


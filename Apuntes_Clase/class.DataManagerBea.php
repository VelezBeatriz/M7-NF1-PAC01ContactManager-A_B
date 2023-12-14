<!-- Todas las consultas de la DDBB -->
<?php
require_once('class.AddressBea.php');


class DataManager
{

    //Esta funcion solamente se puede ejecutar desde la propia clase
    //Para ejecutar esta funcion solamente podrán hacerlo otras funciones de la clase
    //Esta funcion es privada  porque solo funciona en la propia clase
    //Esta funcion es static porque solo necesito crear la conexion una vez
    private static function _getConnection()
    {
        //vamos a instanciar la variable porque solo quiero que se cree una vez
        static $hDB;

        //Si ya existe esta variable no la repitas
        if (isset($hDB)) {
            return $hDB;
        }

        //Esta variable almacena la base de datos
        //connection_string = "host=localhost port=5432 dbname=postgres user=postgres password=postgres"
        $hDB = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=postgres") or die("No connection");
        //Devuelve la conexión
        return $hDB;
    }

    //Esta funcion es publica para que pueda llamarla desde cualquier lado
    //Esta funcion es static porque solo necesito cargar una vez esta funcion en RAM
    public static function getAddressData($addressID)
    {
        //Esta es la query que vamos a ejecutar
        $sql = "SELECT * FROM \"entityaddress\" WHERE \"addressid\" = $addressID";
        //Esta es la ejecución de la base de datos
        //Como es estático a la funcion la llamaremos Class::_nameFunction
        //Esta función recibe la función de la conexión a la base de datos y la query
        $res = pg_query(DataManager::_getConnection(), $sql);            //Si hay o no solución a la variable, es un booleano
        //! ($res && pg_num_rows($res))
        if (!$res) {
            //FALSE
            die("No data for address $addressID");
        } else {
            //TRUE
            if (!pg_num_rows($res)) {
                //No hay resultado en la consulta
                die("Is empty for address $addressID");
            } else {
                //Hay resultado en la consulta
                //Devuelve un array asociativo (key:value)
                return pg_fetch_assoc($res);
            }
        }
    }

    //Esta función va a devolver objetos de tipo dirección de la tabla en cuestión
    public static function getAddressObjectsForEntity($entityid)
    {
        // Dentro crearemos objetos que son los que quiero extraer pero para extraer objetos necesito crear una clase
        //Para ello crearemos un nuevo fichero 

        //Creamos la query, la ejecutamos y comprobamos que devuelve valor o no
        $sql = "SELECT * FROM \"entityaddress\" WHERE \"entityid\" = $entityid";

        $res = pg_query(DataManager::_getConnection(), $sql);


        if (!($res && pg_num_rows($res))) {
            die("No data for address for Entity - $entityid");
        }
        //Si hemos llegado a este punto es que la query se ha ejecutado y además contiene algo
        //Es posible que contenga 1 fila o varias por tanto nos aseguramos almacenando los datos en un array
        $objs = array();

        //Ejecutaremos el bucle haciendo un fetch_assoc y almacenando los objetos en el array
        while ($rec = pg_fetch_assoc($res)) {
            //Pero recordemos que la clase recibe un id, en este caso de la dirección
            $objs[] = new Address($rec['addressid']);
        }

        //Este array contendrá todos los ids de las direcciones correspondientes a la entidad seleccionada
        return $objs;
    }
}
?>
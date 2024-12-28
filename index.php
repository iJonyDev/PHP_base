<?php
// Esto es un comentario de una línea
echo "Hola mundo!\n";
/* 
Esto es un comentario
de varias líneas 
*/

// Variables
$nombre = "Juan";
$edad = 18;
$altura = 1.75;

 // Imprimir variables
echo $nombre . "\n"; // Concatenación ."*"
echo $edad . "\n";
echo gettype($edad) . "\n"; // Obtener el tipo de dato
echo gettype($altura) . "\n";
echo "Hola, mi nombre es $nombre y tengo $edad años\n"; // Interpolación de variables

// Constantes
define("PI", 3.1416); // Definir una constante modo global
echo PI . "\n";
const IVA = 0.16; // Definir una constante modo local
echo IVA . "\n";

// Operadores aritméticos
$a = 5;
$b = 3;
echo $a + $b . "\n";

// Operadores de asignación
$a = 10;
$a += 5; // $a = $a + 5
echo $a . "\n";

// Operadores de comparación
$a = 10;
$b = 5;
var_dump($a == $b); // Comparar si son iguales
var_dump($a != $b); // Comparar si son diferentes
var_dump($a > $b); // Comparar si a es mayor que b
var_dump($a < $b); // Comparar si a es menor que b
var_dump($a >= $b); // Comparar si a es mayor o igual que b
var_dump($a <= $b); // Comparar si a es menor o igual que b

// Operadores lógicos
$a = 10;
$b = 5;
$c = 3;
var_dump($a > $b && $b > $c); // AND
var_dump($a > $b || $b < $c); // OR
var_dump($a > $b xor $b < $c); // XOR
var_dump(!$a > $b); // NOT

// Listas
$colores = ["Rojo", "Verde", "Azul",1,2,3,true,false,true];
echo $colores[0] . "\n";
echo $colores[3] . "\n";
array_push($colores, "Amarillo"); // Agregar un elemento al final
print_r($colores); // Imprimir un array

// Diccionarios
$persona1 = [
    "nombre" => "Juan",
    "edad" => 18,
    "altura" => 1.75
];
echo $persona1["nombre"] . "\n";
$persona2 = array(
    "nombre" => "Pedro",
    "edad" => 25,
    "altura" => 1.80
);

// Set: Colección de elementos únicos

array_push($colores, "Amarillo");
print_r(array_unique($colores));


// Estructuras de control
// if
$edad = 18;
if ($edad >= 18) {
    echo "Eres mayor de edad\n";
} else {
    echo "Eres menor de edad\n";
}

// if anidado
$edad = 18;
$nombre = "Juan";

if ($edad >= 18) {
    if ($nombre == "Juan") {
        echo "Eres mayor de edad y te llamas Juan\n";
    } else {
        echo "Eres mayor de edad pero no te llamas Juan\n";
    }
} else {
    echo "Eres menor de edad\n";
}

// if elseif
$edad = 18;
$nombre = "Juan";

if ($edad >= 18 && $nombre == "Juan") {
    echo "Eres mayor de edad y te llamas Juan\n";
} elseif ($edad >= 18 && $nombre != "Juan") {
    echo "Eres mayor de edad pero no te llamas Juan\n";
} else {
    echo "Eres menor de edad\n";
}

// switch
$dia = 3;
switch ($dia) {
    case 1:
        echo "Lunes\n";
        break;
    case 2:
        echo "Martes\n";
        break;
    case 3:
        echo "Miércoles\n";
        break;
    case 4:
        echo "Jueves\n";
        break;
    case 5:
        echo "Viernes\n";
        break;
    case 6:
        echo "Sábado\n";
        break;
    case 7:
        echo "Domingo\n";
        break;
    default:
        echo "Día no válido\n";
}

// while
$contador = 0;
while ($contador <= 10) {
    echo $contador . "\n";
    $contador++;
}

// do while
$contador = 0;
do {
    echo $contador . "\n";
    $contador++;
} while ($contador <= 10);

// for
for ($i = 0; $i <= 10; $i++) {
    echo $i . "\n";
}

// foreach
$colores = ["Rojo", "Verde", "Azul"];
foreach ($colores as $color) {
    echo $color . "\n";
}

// Funciones
function suma($a, $b) {
    return $a + $b;
}

echo suma(5, 3) . "\n";

// Funciones con argumentos por defecto
function saludo($nombre = "Juan") {
    return "Hola, $nombre\n";
}

echo saludo("Pedro");
echo saludo();

// Funciones con argumentos variables
function suma_varias($a, $b, ...$numeros) {
    $suma = $a + $b;
    foreach ($numeros as $numero) {
        $suma += $numero;
    }
    return $suma;
}

echo suma_varias(5, 3, 2, 4, 6) . "\n";

// Funciones anónimas
$suma = function ($a, $b) {
    return $a + $b;
};

echo $suma(5, 3) . "\n";

// Clases
class Persona {
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function saludar() {
        return "Hola, mi nombre es $this->nombre y tengo $this->edad años\n";
    }
}

$juan = new Persona("Juan", 18);
echo $juan->saludar();

// Herencia
class Empleado extends Persona {
    public $sueldo;

    public function __construct($nombre, $edad, $sueldo) {
        parent::__construct($nombre, $edad);
        $this->sueldo = $sueldo;
    }

    public function mostrarSueldo() {
        return "Mi sueldo es $this->sueldo\n";
    }
}

$pedro = new Empleado("Pedro", 25, 1000);
echo $pedro->saludar();
echo $pedro->mostrarSueldo();

// Interfaces
interface Figura {
    public function area();
}

class Cuadrado implements Figura {
    private $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function area() {
        return $this->lado * $this->lado;
    }
}

$cuadrado = new Cuadrado(5);
echo $cuadrado->area() . "\n";

// Traits
trait Saludo {
    public function saludar() {
        return "Hola\n";
    }
}

trait Despedida {
    public function despedirse() {
        return "Adiós\n";
    }
}

class Mensaje {
    use Saludo, Despedida;
}

$mensaje = new Mensaje();
echo $mensaje->saludar();
echo $mensaje->despedirse();


class Usuario {
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function saludar() {
        return "Hola, mi nombre es $this->nombre y tengo $this->edad años\n";
    }
}

$usuario = new Usuario("Juan", 18);
echo $usuario->saludar();

// Autoload
spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . ".php";
});

$usuario = new Usuario("Pedro", 25);
echo $usuario->saludar();

// Manejo de errores
try {
    throw new Exception("Error");
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}

// Manejo de excepciones
function dividir($a, $b) {
    if ($b == 0) {
        throw new Exception("División por cero");
    }
    return $a / $b;
}

try {
    echo dividir(5, 0) . "\n";
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}

// Cookies
//setcookie("nombre", "Juan", time() + 3600);
//echo $_COOKIE["nombre"] . "\n";

// Sesiones
//session_start();
//$_SESSION["nombre"] = "Juan";
//echo $_SESSION["nombre"] . "\n";

// Archivos
$archivo = fopen("archivo.txt", "w");
fwrite($archivo, "Hola mundo\n");
fclose($archivo);

$archivo = fopen("archivo.txt", "r");
echo fread($archivo, filesize("archivo.txt")) . "\n";
fclose($archivo);

// JSON
$persona = [
    "nombre" => "Juan",
    "edad" => 18
];

$json = json_encode($persona);
echo $json . "\n";

$persona = json_decode($json);
echo $persona->nombre . "\n";

// Fecha y hora
echo date("d/m/Y H:i:s") . "\n";

// Expresiones regulares
$patron = "/[0-9]{3}/";
$cadena = "123";
if (preg_match($patron, $cadena)) {
    echo "La cadena cumple con el patrón\n";
} else {
    echo "La cadena no cumple con el patrón\n";
}


?>
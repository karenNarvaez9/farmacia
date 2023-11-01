 <?php
 $usuario=$_POST["usuario"];
 $contrasena=$_POST["contrasena"];
 session_start();
 $_SESSION['usuario'] = $usuario;
 $_SESSION['contrasena'] = $contrasena;


//conexion

include("conexion.php");

//crea variable con sentencia sql de consulta

// usuario, convert(aes_decrypt(contrasena, 'clave'))


$consulta="SELECT * FROM admin WHERE codAdmin='$usuario' and passAdmin='$contrasena'";

//ejecuta la variable de conexion a mysql y la sentencia sql

$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if ($filas>0) {
     if($usuario=["usuario"] and $contrasena=["contrasena"]){
     echo "<script>alert('bienvenido Administrador'); </script>";
     echo "<script>window.location.href='admi.php';</script>";
     }
}else{
echo "<script>alert('error al ingresar, intente de nuevo ');</script>";
echo "<script>window.location.href='login.php';</script>";

}

mysqli_free_result($resultado); 
mysqli_close($con);

// if (isset($_POST['ingresar'])) {
     
//      $queryUsuario  =mysqli_query($con,"SELECT * FROM administrador WHERE usuario='$usuario'");
//      $nr            =mysqli_num_rows($queryUsuario);
//      $buscarPass    =mysqli_fetch_array($queryUsuario);
//      if ($nr == 1)&&(password_verify($contrasena, $buscarPass['contrasena'])) {
//           echo "<script>alert('bien'); </script>";
//      }else{
//         echo "<script>alert('mal'); </script>";
//      }

//      }
?>  
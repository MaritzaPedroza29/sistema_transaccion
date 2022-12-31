<?PHP
include_once "../conexion.php";
class Remision_model 
{
    function getRemision()
    {
        try {
            Conexion::ConexionBD();
            $sql = Conexion::ConexionBD()->prepare("SELECT * FROM `remisiones`");
            echo $sql;
            $sql->execute();
            $data = $sql->fetchAll();
            return $data;
        } catch (\Throwable $th) {
        }
    }
}

    <?php 
include("../connexion/base.php");
include("../../Outils/outils.php");
$taux = $_POST['ntaux'];
$dev = $_POST['devise'];
debug($taux);
debug($dev);
$sql = "UPDATE EURO SET valeur ='$taux' WHERE devise ='$dev'" ;
echo $sql;
$req = $bd->prepare($sql);
$req->execute();
# $enr = $req->fetchall();
$req->closeCursor();



?>  
<?php include("conexion.php");
?>

<?php
$Curso = "";
$Script = "";
$Script2 = "";
$Script3 = "";

$Curso = (isset($_POST['Curso']))?$_POST['Curso']:"";

$Script = '<script language="javascript">alert($Curso?);</script>';

date_default_timezone_set("America/Chicago");
$Fecha = $hoy = date("m/d/Y");

$Nombre=(isset($_POST['Nombre']))?$_POST['Nombre']:"";
$Apellido=(isset($_POST['Apellido']))?$_POST['Apellido']:"";
$Nacionalidad=(isset($_POST['Nacionalidad']))?$_POST['Nacionalidad']:"";
$PASAPORTE=(isset($_POST['PASAPORTE']))?$_POST['PASAPORTE']:"";
$Edad=(isset($_POST['Edad']))?$_POST['Edad']:"";
$Telefono=(isset($_POST['Telefono']))?$_POST['Telefono']:"";
$TelefonoCon=(isset($_POST['TelefonoDeContacto']))?$_POST['TelefonoDeContacto']:"";

$Curso = (isset($_POST['Curso']))?$_POST['Curso']:"";
$Horarios = (isset($_POST['Horarios']))?$_POST['Horarios']:"";
$enfermedad=(isset($_POST['Enfermedad']))?$_POST['Enfermedad']:"";

$sangre=(isset($_POST['TipoSangre']))?$_POST['TipoSangre']:"";

$Medios=(isset($_POST['Medios']))?$_POST['Medios']:"";
$NivelAcademico=(isset($_POST['NivelAcademico']))?$_POST['NivelAcademico']:"";

if(isset($_POST['sub_btn'])){
    $setenciaSQL=$conexion->prepare ("INSERT INTO Alumnos(`ID`, Nombre,Apellido,Nacionalidad,PASAPORTE,Edad,Telefono,TelefonoConctato,Curso,Horario,SufreEnfermedad,TipoSangre,ComoSeEntero,NivelAcademico,estado) 
    Values ('NULL',:Nombre,:Apellido,:Nacionalidad,:PASAPORTE,:Edad,:Telefono,:TelefonoCon,:Curso,:Horario,:enfermedad,:sangre,:Medios,:Nivel,:Fecha);");

    $setenciaSQL->bindParam(':Nombre',$Nombre);
    $setenciaSQL->bindParam(':Apellido',$Apellido);
    $setenciaSQL->bindParam(':Nacionalidad',$Nacionalidad);
    $setenciaSQL->bindParam(':PASAPORTE',$PASAPORTE);
    $setenciaSQL->bindParam(':Edad',$Edad);
    $setenciaSQL->bindParam(':Telefono',$Telefono);
    $setenciaSQL->bindParam(':TelefonoCon',$TelefonoCon);
    $setenciaSQL->bindParam(':Curso',$Curso);
    $setenciaSQL->bindParam(':Horario',$Horarios);
    $setenciaSQL->bindParam(':enfermedad',$enfermedad);
    $setenciaSQL->bindParam(':sangre',$sangre);
    $setenciaSQL->bindParam(':Medios',$Medios);
    $setenciaSQL->bindParam(':Nivel',$Nivel);
    $setenciaSQL->bindParam(':Fecha',$Fecha);
    $setenciaSQL->execute();

    $Script = '<script language="javascript">Swal.fire(
        "Good job!",
        "Datos enviados",
        "success")
    </script>';
    $Script2 = '<script language="javascript">Swal.fire(
        "Good job!",
        "Données envoyées",
        "success")
    </script>';
    $Script3 = '<script language="javascript">Swal.fire(
        "Good job!",
        "Data sent",
        "success")
    </script>';
}
    
?>
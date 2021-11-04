<?php include("../validacion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../Style/Style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Web AIP</title>
</head>
<body>
    <?php echo $Script2 ?>

    <ul class="nav justify-content-center">
        <li class="nav-item">
            <p class="font-weight-bold">Traduire</p>
        </li>
        <li class="nav-item">
            <a href="../index.php">
            <img src="../Src/FlagSpain.ico" /></a>
        </li>
        <li class="nav-item">
            <a href="Ingles.php">
            <img src="../Src/FlagEEUU.ico" /></a>
        </li>
    </ul>

        <!-- Div main -->
        <!-- Form -->

<div id="Main">
    <form id="Form" method="POST">

        <div id="IMG">
            <img id="Logo" src="../Src/AIP.jpeg" />
        </div>

        <!-- Cursos de interes -->               
            
        <div class="Container">
            <label for="Curso">Cours d'intérêt</label>
            <select class="form-control" id="Curso" name="Curso" required>
                <option></option>
                <option value="Ingles">Anglais</option>
                <option value="Español">Espanol</option>
                <option value="Call center">Centre d'appel</option>
                <option value="Creol">Créole</option>
                <option value="Italiano">Italien</option>
            </select>
            
        </div>
        
        <!-- Horarios -->
        <div class="Container">
            <label for="Horarios">Des horaires</label>
            <select class="form-control" id="Horarios" name="Horarios" required>
                <option></option>
                <option value="8:00 am - 10:00 am">8:00 am - 10:00 am</option>
                <option value="10:00 am a 12:00 pm">10:00 am a 12:00 pm</option>
                <option value="2:00 pm - 4:00pm">2:00 pm - 4:00pm</option>
                <option value="4:00 pm - 6:00 pm">4:00 pm - 6:00 pm</option>
                <option value="6:00 pm - 8:00 pm">6:00 pm - 8:00 pm</option>
                <option value="SAB.9:00 am - 12:00 pm">SAB.9:00 am - 12:00 pm</option>
                <option value="SAB.2:00 pm - 5:00 pm">SAB.2:00 pm - 5:00 pm</option>
            </select>
            <p id="WarnHorarios" class="text-danger"></p>
        </div>

        <!-- Datos personales inputs -->
        
        <div class="InputsDivDatosPersonales">

            <h3>Informations personnelles</h3>

            <div class="form-group">
                <label for="Nombre">Nom</label>
                <input type="text" class="form-control" id="InputNombre" name="Nombre" required>
                <p id="WarnNombre" class="text-danger"></p>
            </div>

            <div class="form-group">
                <label for="Apellido">Le nom</label>
                <input type="text" class="form-control" id="Apellido" name="Apellido" required>
                <p id="WarnApellido" class="text-danger"></p>
            </div>

            <div class="form-group">
                <label for="Nacionalidad">Nationalité</label>
                <input type="text" class="form-control" id="Nacionalidad" name="Nacionalidad" required>
                <p id="WarnNacionalidad" class="text-danger"></p>
            </div>

            <div class="form-group">
                <label for="PASAPORTE">ID / PASSEPORT</label>
                <input type="text" class="form-control" id="PASAPORTE" name="PASAPORTE" required>
                <p id="WarnPasaporte" class="text-danger"></p>
            </div>

            <div class="form-group">
                <label for="Edad">Âge</label>
                <input type="text" class="form-control" id="Edad" name="Edad" required>
                <p id="WarnEdad" class="text-danger"></p>
            </div>
        
            <div class="form-group">
                <label for="Telefono">Téléphone</label>
                <input type="tel" class="form-control" id="Telefono" name="Telefono" required>
                <p id="WarnTelefono" class="text-danger"></p>
            </div>
            
            <div class="form-group">
                <label for="TelefonoDeContacto">Téléphone de contact (ami ou membre de la famille)</label>
                <input type="tel" class="form-control" id="TelefonoDeContacto" name="TelefonoDeContacto" required>
                <p id="WarnTelefonoContacto" class="text-danger"></p>
            </div>
        </div>

        <div class="Container">
            <h3>Souffrez-vous d'une maladie?</h3>

            <h5 for="Enfermedad">Spécifier</h5>
            <input type="tel" class="form-control" id="Enfermedad" name="Enfermedad">
            <small id="Precaucion" class="form-text text-muted">Optionnel</small>

            <label for="Sangre">Type de sang</label>
            <select class="form-control" id="Sangre" name="TipoSangre">
                <option></option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
            <small id="Precaucion" class="form-text text-muted">Optionnel</small>
        </div>

        <div class="Container">
            <label for="Medios">Comment a-t-il découvert pour nous?</label>
            <select class="form-control" id="Medios" name="Medios">
                <option></option>
                <option value="A+">Facebook</option>
                <option value="A+">Instagram</option>
                <option value="A-">Ils m'ont donné un dépliant</option>
                <option value="B+">j'ai vu le signe</option>
                <option value="B-">Par un ami ou un membre de la famille</option>
                <option value="AB+">D'autres média</option>
            </select>
            <small id="Precaucion" class="form-text text-muted">Optionnel</small>
        </div>

        <div class="Container">
            <label for="NivelAcadémico">Sélectionnez votre niveau académique</label>
            <select class="form-control" id="NivelAcadémico" name="NivelAcademico">
                <option></option>
                <option value="A+">Basique</option>
                <option value="A+">Lycée</option>
                <option value="A-">L'universitè</option>
            </select>
            <small id="Precaucion" class="form-text text-muted">Optionnel</small>
        </div>

        <div class="Compromisos">
            <h3>Veuillez lire attentivement les engagements suivants.</h3>
            <br>
            <div class="RadioBt">
                <ol>
                    <li>Ne soyez pas absent ou en retard en classe et soyez responsable des devoirs.</li>
                    <br>
                    <li>Ne mangez aucun type de nourriture solide ou liquide à l'intérieur de l'académie.</li>
                    <br>
                    <li>Bonne présentation personnelle et bon comportement en classe.</li>
                    <br>
                    <li>Coopérer au bon fonctionnement de l'académie et respecter les autres.</li>
                    <br>
                    <li>L'étudiant doit participer au cours pour le développement de ses capacités et compétences du cours de langue ou technique à suivre.</li>
                    <br>
                    <li>L'élève doit arriver en avance en classe.</li>
                    <br>
                    <li>Soyez silencieux dans la salle de classe et dans les couloirs, parlez doucement.</li>
                    <br>
                    <li>Accepter le changement d'horaire en cas de problème avec la section.</li>
                    <br>
                    <li>Chaque niveau académique doit être payé avant le début de la période de cours.</li>
                    <br>
                    <li>L'académie ne verse pas d'argent ni de frais d'admission.</li>

                </ol>
                <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="CheckBox" id="TerminosCheck" required>
                      <label class="form-check-label" for="invalidCheck2">
                        Êtes-vous d'accord avec les termes?
                      </label>
                    </div>

                    <div id="DivTerminos" class="alert alert-warning" role="alert">
                        Accepter les termes et conditions
                    </div>

                </div>

                



            </div>
        </div>
        

        
        
        <button script id="Btn" type="submit" class="btn btn-primary btn-lg btn-block" name="sub_btn">Enregistrement</button>
    </form>
</div>



</body>
</html>
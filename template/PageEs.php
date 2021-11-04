<?php include("validacion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="Style/Style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Web AIP</title>
</head>
<body>
    <?php echo $Script ?>

    <ul class="nav justify-content-center">
        <li class="nav-item">
        <p class="font-weight-bold">Traducir</p>
        </li>
        <li class="nav-item">
            <a href = "template/Frances.php">
            <img src="Src/FlagFrances.ico" /></a>
        </li>
        <li class="nav-item">
            <a href="template/Ingles.php">
            <img src="Src/FlagEEUU.ico" /></a>
        </li>
    </ul>

        <!-- Div main -->
        <!-- Form -->

<div id="Main">
    <form id="Form" method="POST">

        <div id="IMG">
            <img id="Logo" src="Src/AIP.jpeg" />
        </div>

        <!-- Cursos de interes -->               
            
        <div class="Container">
            <label for="Curso">Curso de interes</label>
            <select class="form-control" id="Curso" name="Curso" required>
                <option></option>
                <option value="Ingles">Ingles</option>
                <option value="Español">Español</option>
                <option value="Call center">Call center</option>
                <option value="Creol">Creol</option>
                <option value="Italiano">Italiano</option>
            </select>
            
        </div>
        
        <!-- Horarios -->
        <div class="Container">
            <label for="Horarios">Horarios</label>
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

            <h3>Datos personales</h3>

            <div class="form-group">
                <label for="Nombre">Nombre</label>
                <input type="text" class="form-control" id="InputNombre" name="Nombre" required>
                <p id="WarnNombre" class="text-danger"></p>
            </div>

            <div class="form-group">
                <label for="Apellido">Apellido</label>
                <input type="text" class="form-control" id="Apellido" name="Apellido" required>
                <p id="WarnApellido" class="text-danger"></p>
            </div>

            <div class="form-group">
                <label for="Nacionalidad">Nacionalidad</label>
                <input type="text" class="form-control" id="Nacionalidad" name="Nacionalidad" required>
                <p id="WarnNacionalidad" class="text-danger"></p>
            </div>

            <div class="form-group">
                <label for="PASAPORTE">DNI / PASAPORTE</label>
                <input type="text" class="form-control" id="PASAPORTE" name="PASAPORTE" required>
                <p id="WarnPasaporte" class="text-danger"></p>
            </div>

            <div class="form-group">
                <label for="Edad">Edad</label>
                <input type="text" class="form-control" id="Edad" name="Edad" required>
                <p id="WarnEdad" class="text-danger"></p>
            </div>
        
            <div class="form-group">
                <label for="Telefono">Telefono</label>
                <input type="tel" class="form-control" id="Telefono" name="Telefono" required>
                <p id="WarnTelefono" class="text-danger"></p>
            </div>
            
            <div class="form-group">
                <label for="TelefonoDeContacto">Teléfono de contacto (amigo o familiar)</label>
                <input type="tel" class="form-control" id="TelefonoDeContacto" name="TelefonoDeContacto" required>
                <p id="WarnTelefonoContacto" class="text-danger"></p>
            </div>
        </div>

        <div class="Container">
            <h3>¿Sufres de alguna enfermedad?</h3>

            <h5 for="Enfermedad">Especifica</h5>
            <input type="tel" class="form-control" id="Enfermedad" name="Enfermedad">
            <small id="Precaucion" class="form-text text-muted">Opcional</small>

            <label for="Sangre">Tipo de sangre</label>
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
            <small id="Precaucion" class="form-text text-muted">Opcional</small>
        </div>

        <div class="Container">
            <label for="Medios">¿Cómo se enteró de nosotros?</label>
            <select class="form-control" id="Medios" name="Medios">
                <option></option>
                <option value="A+">Facebook</option>
                <option value="A+">Instagram</option>
                <option value="A-">Me dieron un volante</option>
                <option value="B+">Vi el signo</option>
                <option value="B-">Por un amigo o familiar</option>
                <option value="AB+">Otros medios</option>
            </select>
            <small id="Precaucion" class="form-text text-muted">Opcional</small>
        </div>

        <div class="Container">
            <label for="NivelAcadémico">Seleccione su nivel académico</label>
            <select class="form-control" id="NivelAcadémico" name="NivelAcademico">
                <option></option>
                <option value="A+">Básico</option>
                <option value="A+">Bachillerato</option>
                <option value="A-">Universidad</option>
            </select>
            <small id="Precaucion" class="form-text text-muted">Opcional</small>
        </div>

        <div class="Compromisos">
            <h3>Lea atentamente los siguientes compromisos.</h3>
            <br>
            <div class="RadioBt">
                <ol>
                    <li>No faltes ni llegues tarde a clase y sé responsable de la tarea.</li>
                    <br>
                    <li>No ingerir ningún tipo de alimento sólido o líquido dentro de la academia.</li>
                    <br>
                    <li>Buena presentación personal y buen comportamiento en clase.</li>
                    <br>
                    <li>Cooperar en el buen funcionamiento de la academia y respetar a los demás.</li>
                    <br>
                    <li>El alumno debe participar en la clase para el desarrollo de sus habilidades y destrezas del idioma o curso técnico a cursar.</li>
                    <br>
                    <li>El alumno debe llegar temprano a clase.</li>
                    <br>
                    <li>Guarde silencio en el aula y en los pasillos, hable en voz baja.</li>
                    <br>
                    <li>Aceptar el cambio de horario en caso de problema con el tramo.</li>
                    <br>
                    <li>Cada nivel académico debe pagarse antes del inicio del período del curso.</li>
                    <br>
                    <li>La academia no desembolsa dinero ni cuotas de admisión.</li>

                </ol>
                <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="CheckBox" id="TerminosCheck" required>
                      <label class="form-check-label" for="invalidCheck2">
                        ¿Estas de acuerdo con los terminos?
                      </label>
                    </div>

                    <div id="DivTerminos" class="alert alert-warning" role="alert">
                        Acepta los terminos y condiciones
                    </div>

                </div>

                



            </div>
        </div>
        

        
        
        <button script id="Btn" type="submit" class="btn btn-primary btn-lg btn-block" name="sub_btn">Registrase</button>
    </form>
</div>



</body>
</html>
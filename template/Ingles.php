<?php include("../validacion.php");
?>
<!DOCTYPE html>
<html lang="en">
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
    <?php echo $Script3 ?>

    <ul class="nav justify-content-center">
        <li class="nav-item">
            <p class="font-weight-bold">Translate</p>
        </li>
        <li class="nav-item">
            <a href="../index.php">
            <img src="../Src/FlagSpain.ico" /></a>
        </li>
        <li class="nav-item">
            <a href="Frances.php">
            <img src="../Src/FlagFrances.ico" /></a>
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
            <label for="Curso">Course of interest</label>
            <select class="form-control" id="Curso" name="Curso" required>
                <option></option>
                <option value="Ingles">English</option>
                <option value="Español">Spanish</option>
                <option value="Call center">Call center</option>
                <option value="Creol">Creol</option>
                <option value="Italiano">Italian</option>
            </select>
            
        </div>
        
        <!-- Horarios -->
        <div class="Container">
            <label for="Horarios">Horary</label>
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

            <h3>Personal information</h3>

            <div class="form-group">
                <label for="Nombre">Name</label>
                <input type="text" class="form-control" id="InputNombre" name="Nombre" required>
                <p id="WarnNombre" class="text-danger"></p>
            </div>

            <div class="form-group">
                <label for="Apellido">Last name</label>
                <input type="text" class="form-control" id="Apellido" name="Apellido" required>
                <p id="WarnApellido" class="text-danger"></p>
            </div>

            <div class="form-group">
                <label for="Nacionalidad">Nationality</label>
                <input type="text" class="form-control" id="Nacionalidad" name="Nacionalidad" required>
                <p id="WarnNacionalidad" class="text-danger"></p>
            </div>

            <div class="form-group">
                <label for="PASAPORTE">ID / PASSPORT</label>
                <input type="text" class="form-control" id="PASAPORTE" name="PASAPORTE" required>
                <p id="WarnPasaporte" class="text-danger"></p>
            </div>

            <div class="form-group">
                <label for="Edad">Age</label>
                <input type="text" class="form-control" id="Edad" name="Edad" required>
                <p id="WarnEdad" class="text-danger"></p>
            </div>
        
            <div class="form-group">
                <label for="Telefono">Telephone</label>
                <input type="tel" class="form-control" id="Telefono" name="Telefono" required>
                <p id="WarnTelefono" class="text-danger"></p>
            </div>
            
            <div class="form-group">
                <label for="TelefonoDeContacto">Contact phone (friend or family member)</label>
                <input type="tel" class="form-control" id="TelefonoDeContacto" name="TelefonoDeContacto" required>
                <p id="WarnTelefonoContacto" class="text-danger"></p>
            </div>
        </div>

        <div class="Container">
            <h3>Do you suffer from any disease?</h3>

            <h5 for="Enfermedad">Specify</h5>
            <input type="tel" class="form-control" id="Enfermedad" name="Enfermedad">
            <small id="Precaucion" class="form-text text-muted">Optional</small>

            <label for="Sangre">Blood type</label>
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
            <small id="Precaucion" class="form-text text-muted">Optional</small>
        </div>

        <div class="Container">
            <label for="Medios">How did he find out about us?</label>
            <select class="form-control" id="Medios" name="Medios">
                <option></option>
                <option value="A+">Facebook</option>
                <option value="A+">Instagram</option>
                <option value="A-">They gave me a flyer</option>
                <option value="B+">I saw the sign</option>
                <option value="B-">By a friend or family member</option>
                <option value="AB+">Other media</option>
            </select>
            <small id="Precaucion" class="form-text text-muted">Optional</small>
        </div>

        <div class="Container">
            <label for="NivelAcadémico">Select your academic level</label>
            <select class="form-control" id="NivelAcadémico" name="NivelAcademico">
                <option></option>
                <option value="A+">Basic</option>
                <option value="A+">Bachillerato</option>
                <option value="A-">University</option>
            </select>
            <small id="Precaucion" class="form-text text-muted">Optional</small>
        </div>

        <div class="Compromisos">
            <h3>Please read the following commitments carefully.</h3>
            <br>
            <div class="RadioBt">
                <ol>
                    <li>Don't be absent or late for class and be responsible for homework.</li>
                    <br>
                    <li>Do not eat any type of solid or liquid food inside the academy.</li>
                    <br>
                    <li>Good personal presentation and good behavior in class.</li>
                    <br>
                    <li>Cooperate in the proper functioning of the academy and respect others.</li>
                    <br>
                    <li>The student must participate in the class for the development of their abilities and skills of the language or technical course to be taken.</li>
                    <br>
                    <li>The student must arrive early to class.</li>
                    <br>
                    <li>Be quiet in the classroom and in the hallways, speak quietly.</li>
                    <br>
                    <li>Accept the schedule change in case of problem with the section.</li>
                    <br>
                    <li>Each academic level must be paid before the start of the course period.</li>
                    <br>
                    <li>The academy does not disburse money or admission fees.</li>

                </ol>
                <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="CheckBox" id="TerminosCheck" required>
                      <label class="form-check-label" for="invalidCheck2">
                        Do you agree with the terms?
                      </label>
                    </div>

                    <div id="DivTerminos" class="alert alert-warning" role="alert">
                        Accept the terms and conditions
                    </div>

                </div>

                



            </div>
        </div>
        

        
        
        <button script id="Btn" type="submit" class="btn btn-primary btn-lg btn-block" name="sub_btn">Register</button>
    </form>
</div>



</body>
</html>
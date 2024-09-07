<?php
$usuario = explode("|", $_SESSION['usr_log']);
$img = $usuario[0];
$nombres = $usuario[1];
$paterno = $usuario[2];
$materno = $usuario[3];
$direccion = $usuario[4];
$noint = $usuario[5];
$noext = $usuario[6];
$cp = $usuario[7];
$colonia = $usuario[8];
$estado = $usuario[9];
$municipio = $usuario[10];
$telefono = $usuario[11];
$sexo = $usuario[12];
$especialidad = $usuario[13];
$semestre = $usuario[14];
$grupo = $usuario[15];
$generacion = $usuario[16];
$noctrl = $usuario[17];
$curp = $usuario[18];
?>
<div class="cont_bg container shadow-lg rounded justify-content-center border border-1 border-light">
    <div class="row max-height_size">

        <div class="col-12 my-2 d d-block d-lg-none">
                <h2 class="text-center fw-bold">Solicitud de practicas</h2>
                <h4 class="text-center">1.-Datos personales</h4>
        </div>

        <div class="col-12 col-lg-12 ">
            <form id="personal" name="personal" class="ms-3 needs-validation" novalidate disabled>
                <div class="row mt-lg-4">
                    <div class="col-sm-12 col-lg-3 mb-3 text-center">
                        <div>
                            <img id="imagenSeleccionda" for="imagen" src="img/user.png" class="rounded-pill mb-3" alt="Imagen actual" style="width: 150px; height: 150px;">
                        </div>
                    </div>
                    <div class="col-6 my-2 d d-none d-lg-block">
                        <h2 class="text-center fw-bold">Solicitud de practicas</h2>
                        <h4 id="title" class="text-center">1.-Datos personales</h4>
                    </div>
                    <div class="col-sm-12 col-lg-3 my-auto">
                        <label for="fechaEnvio" class="form-label  my-auto">Fecha: </label>
                        <input class="form-control rounded-pill px-0 px-0 text-center" type="date" id="fechaEnvio" name="fechaEnvio" disabled />
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <label for="nombres" class="form-label">Nombre(s): </label>
                        <input type="text" class="form-control rounded-pill mb-3" id="nombres" name="nombres" value="<?php echo $nombres; ?>" disabled />
                        
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <label for="paterno" class="form-label">Apellido Paterno:</label>
                        <input type="text" class="form-control rounded-pill mb-3" id="paterno" name="paterno" value="<?php echo $paterno; ?>" disabled />
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <label for="materno" class="form-label">Apellido Materno:</label>
                        <input type="text" class="form-control rounded-pill mb-3" id="materno" name="materno" value="<?php echo $materno; ?>" disabled />
                        
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <label for="direccion" class="form-label">Direccion:</label>
                        <input type="text" class="form-control rounded-pill" id="direccion" name="direccion" value="<?php echo $direccion; ?>" disabled />
                        
                    </div>
                    <div class="col-sm-4 col-lg-2">
                        <label for="numext" class="form-label">No. exterior:</label>
                        <input type="text" class="form-control rounded-pill" id="numext" name="numext" maxlength="5" pattern="[0-9]{5}" value="<?php echo $noext; ?>" disabled />
                        
                    </div>
                    <div class="col-sm-4 col-lg-2">
                        <label for="numint" class="form-label">No. interior:</label>
                        <input type="text" class="form-control rounded-pill" id="numint" name="numint" maxlength="5" pattern="[0-9]{5}" value="<?php echo $noint; ?>" disabled />
                        
                    </div>
                    <div class="col-sm-4 col-lg-2">
                        <label for="cp" class="form-label">C.P:</label>
                        <input type="text" class="form-control rounded-pill" id="cp" name="cp" maxlength="6" pattern="[0-9]{6}" value="<?php echo $cp; ?>" disabled />
                        
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <label for="colonia" class="form-label">Colonia:</label>
                        <input type="text" class="form-control rounded-pill" id="colonia" name="colonia" value="<?php echo $colonia; ?>" disabled />
                        
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <label for="edo" class="form-label">Estado:</label>
                        <input class="form-control rounded-pill mb-3" type="text" id="edo" name="edo" value="<?php echo $estado; ?>" disabled />
                        
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <label for="mun" class="form-label">Municipio:</label>
                        <input class="form-control rounded-pill mb-3" type="text" id="mun" name="mun" value="<?php echo $municipio; ?>" disabled />
                        
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <label for="telefono" class="form-label">Telefono:</label>
                        <input class="form-control rounded-pill mb-3" type="tel" id="telefono" maxlength="10" name="telefono" pattern="[0-9]{10}" value="<?php echo $telefono; ?>" disabled />
                        
                    </div>
                    <div class="col-sm-12 col-lg-3">
                        <label for="sexo" class="form-label">Sexo:</label>
                        <input class="form-control rounded-pill mb-3" type="text" id="sexo" maxlength="2" name="sexo" pattern="[0-9]{10}" value="<?php echo $sexo; ?>" disabled placeholder="M"/>
                    </div>
                    <div class="col-12 my-2 text-center">
                        <button class="btn btn-outline-primary px-2 py-1 rder border-0" title="desactivado" type="button" disabled>
                            <i class="fa-solid fa-circle-chevron-left fa-lg"></i> Atras
                        </button>
                        <button class="btn btn-outline-danger px-2 py-1 border-0" title="SIGUIENTE" type="submit">
                            <i class="fa-solid fa-circle-chevron-right fa-lg"></i> Siguiente
                        </button>
                    </div>
                </div>
            </form>
            <form id="formularioEsc" name="formularioEsc" class="hidden needs-validation" novalidate>
                <div class="row mt-lg-4">
                    <div class="col-12 mb-3">
                        <h4 id="title" class="text-center fw-bold">2.- Escolaridad</h4>
                    </div>
                    <div class="col-sm-6 col-lg-8">
                        <label for="especialidad" class="form-label">Especialidad:</label>
                        <input class="form-control rounded-pill mb-3" id="especialidad" name="especialidad"value="<?php echo $especialidad; ?>" disabled />
                    </div>
                    <div class="col-sm-4 col-lg-4">
                        <label for="semestre" class="form-label">Semestre:</label>
                        <input class="form-control rounded-pill mb-3" type="text" id="semestre" name="semestre" value="<?php echo $semestre; ?>" disabled />
                        
                    </div>
                    <div class="col-sm-4 col-lg-4">
                        <label for="grupo" class="form-label">Grupo:</label>
                        <input class="form-control rounded-pill mb-3" type="text" id="grupo" name="grupo" value="<?php echo $grupo; ?>" disabled />
                        
                    </div>
                    <div class="col-sm-4 col-lg-4">
                        <label for="generacion" class="form-label">Generacion:</label>
                        <input class="form-control rounded-pill mb-3" type="text" id="generacion" name="generacion" value="<?php echo $generacion; ?>" disabled />
                        
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <label for="noctrl" class="form-label">No. ctrl:</label>
                        <input type="text" class="form-control rounded-pill mb-3" id="noctrl" name="noctrl" maxlength="18" pattern="[0-9]{18}" value="<?php echo $noctrl; ?>" disabled />
                    </div>
                </div>
                <div class="row mt-lg-4">
                    <div class="col-12 mb-3">
                        <h4 id="tit" class="text-center fw-bold">3.- Datos de la empresa</h4 >
                    </div>
                    <div class="col-sm-4 col-lg-3">
                        <label for="empresa" class="form-label">Empresa:</label>
                        <input class="form-control rounded-pill mb-3" type="text" id="empresa" name="empresa" disabled />
                        
                    </div>
                    <div class="col-sm-4 col-lg-3">
                        <label for="rfc" class="form-label">RFC:</label>
                        <input class="form-control rounded-pill mb-3" type="text" id="rfc" name="rfc" disabled />
                        
                    </div>
                    <div class="col-sm-4 col-lg-6">
                        <label for="direcEmpresa" class="form-label">Direccion:</label>
                        <input class="form-control rounded-pill mb-3" type="text" id="direcEmpresa" name="direcEmpresa" disabled />
                        
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <label for="jefe" class="form-label">Jefe inmediato:</label>
                        <input type="text" class="form-control rounded-pill mb-3" id="jefe" name="jefe" disabled />
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <label for="telefonoEmp" class="form-label">Telefono:</label>
                        <input class="form-control rounded-pill mb-3" type="tel" id="telefonoEmp" maxlength="10" name="telefonoEmp" pattern="[0-9]{10}" disabled />
                    </div>
                    <div class="col-sm-4 col-lg-3">
                        <label for="cpEmp" class="form-label">C.P:</label>
                        <input type="text" class="form-control rounded-pill" id="cpEmp" name="cpEmp" disabled />
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <label for="coloniaEmp" class="form-label">Colonia:</label>
                        <input type="text" class="form-control rounded-pill" id="coloniaEmp" name="coloniaEmp" disabled />
                    </div>
                </div>
                <div class="col-12 my-2 text-center">
                    <button id="volver2" class="btn btn-outline-primary px-2 py-1 border-0" title="ATRAS" type="button">
                        <i class="fa-solid fa-circle-chevron-left fa-lg"></i> Atras
                    </button>
                    <button class="btn btn-outline-danger px-2 py-1 border-0" title="SIGUIENTE" type="submit">
                        <i class="fa-solid fa-circle-chevron-right fa-lg"></i> Siguiente
                    </button>
                </div>
            </form>
            <form id="formularioEmp" name="formularioEmp" class="hidden needs-validation" novalidate>
                <div class="row mt-lg-4">
                    <div class="col-12 mb-3">
                        <h4 id="tit" class="text-center fw-bold">4.- Datos de las Practicas.</h4 >
                    </div>
                    <div class="col-sm-4 col-lg-3">
                        <label for="incentivo" class="form-label">Incentivo de $:</label>
                        <input class="form-control rounded-pill mb-3" type="text" id="incentivo" name="incentivo" />
                        
                    </div>
                    <div class="col-sm-4 col-lg-3">
                        <label for="departamento" class="form-label">Departamento:</label>
                        <input class="form-control rounded-pill mb-3" type="text" id="departamento" name="departamento" />
                        
                    </div>
                    <div class="col-sm-4 col-lg-3">
                        <label for="horario" class="form-label">Horario:</label>
                        <input class="form-control rounded-pill mb-3" type="text" id="horario" name="horario" />
                        
                    </div>
                    <div class="col-sm-12 col-lg-3">
                        <label for="puesJefe" class="form-label">Puesto del jefe inmediato:</label>
                        <input type="text" class="form-control rounded-pill mb-3" id="puesJefe" name="puesJefe" />
                        
                    </div>
                    <div class="col-lg-4">
                        <label for="giro" class="form-label">Giro:</label>
                        <input type="text" class="form-control rounded-pill mb-3" id="giro" name="giro" />
                    </div>
                    <div class="col-lg-4">
                        <label for="fechaIni" class="form-label colorFondoDos">Inicio:</label>
                        <input class="form-control rounded-pill mb-3" type="date" id="fechaIni" name="fechaIni" min="1900-01-01" max="2006-12-31" />
                        
                    </div>
                    <div class="col-lg-4">
                        <label for="fechaTerm" class="form-label colorFondoDos">Termino:</label>
                        <input class="form-control rounded-pill mb-3" type="date" id="fechaTerm" name="fechaTerm" min="1900-01-01" max="2006-12-31" />
                        
                    </div>
                    <div class="col-12 mb-3">
                        <label for="act" class="form-label">Actividades:</label>
                        <textarea name="act" id="act" rows="10" cols="40" class="form-control max_height_size_area rounded" ></textarea>
                    </div>
                </div>
                <div class="col-12 my-2 text-center">
                    <button id="volver3" class="btn btn-outline-primary px-2 py-1 border-0" title="ATRAS" type="button">
                        <i class="fa-solid fa-circle-chevron-left fa-lg"></i> Atras
                    </button>
                    <button class="btn btn-outline-success px-2 py-1 border-0" title="BORRA DATOS" type="reset">
                        <i class="fa-solid fa-eraser fa-lg"></i> Borrar Datos
                    </button>
                    <button class="btn btn-outline-danger px-2 py-1 border-0" title="ENVIAR" type="submit" id="btn">
                        <i class="fa-solid fa-paper-plane fa-lg"></i> Enviar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="js/solicitud.js"></script>
<main>

    <?php include('views/header/navbar.php'); ?>

    <section class="mensajes">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div id="alerta" class="alert d-flex align-items-center alert-dismissible fade show" role="alert">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home">

        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-md-5 p-lg-5 mx-auto my-5">
                    <h1 class="display-4 fw-normal">Proyecto Final</h1>
                    <p class="lead fw-normal">
                        Para este proyecto se realizó una base de datos para una Escuela de Manejo
                    </p>
                    <button class="btn btn-outline-secondary" type="button" data-bs-toggle="modal" data-bs-target="#integrantes">Ver integrantes</button>
                </div>
            </div>
        </div>

    </section>

    <section class="catalogs collapse" id="catalogs">

        <div class="container-fluid">

            <div class="row">
                <div class="col-12 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Nuevo cliente</h4>
                            <h5 class="card-subtitle">Ingrese los datos solicitados para crear un nuevo cliente</h5>
                        </div>
                        <div class="card-body">
                            <form class="client-form" id="new-client" method="post">

                                <div class="row g2 mb-3">
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="dui" name="codigo" placeholder="0000-00000-0000" required />
                                            <label for="dui">DUI</label>
                                        </div>
                                    </div>

                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control fecha" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="dd/mm/yyyy" required />
                                            <label for="fecha_nacimiento">Fecha de nacimiento</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre completo" required>
                                    <label for="nombre">Nombre</label>
                                </div>

                                <div class="row g2 mb-3">
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@dominio.com" required>
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="5555-5555" required>
                                            <label for="telefono">Teléfono</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <h6>Dirección</h6>
                                    </div>
                                </div>

                                <div class="row g3 mb-3">
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" placeholder="01001" required>
                                            <label for="codigo_postal">Código postal</label>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="calle_avenida" name="calle_avenida" placeholder="0 calle" required>
                                            <label for="calle_avenida">Calle/Avenida</label>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="numero_casa" name="numero_casa" placeholder="12-58" required>
                                            <label for="numero_casa">Número de casa</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="departamento" name="departamento" placeholder="Departamento" required>
                                            <label for="departamento">Departamento</label>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="municipio" name="municipio" placeholder="Municipio" required>
                                            <label for="municipio">Municipio</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="colonia" name="colonia" placeholder="Paraiso">
                                            <label for="colonia">Colonia</label>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Jocotesburgo">
                                            <label for="ciudad">Ciudad</label>
                                        </div>
                                    </div>
                                </div>

                                <input class="w-100 btn btn-lg btn-dark" name="login" type="submit" value="Guardar" />
                                <input type="hidden" name="client" value="new">

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Nuevo personal</h4>
                            <h5 class="card-subtitle">Ingrese los datos para dar de alta un nuevo miembro del personal</h5>
                        </div>
                        <div class="card-body">
                            <form class="personal-form" id="new-personal" method="post">

                                <div class="row mb-3">
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="nombre_" name="nombre" placeholder="Nombre" required>
                                            <label for="nombre_">Nombre(s)</label>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>
                                            <label for="apellido">Apellido(s)</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email_" name="email" placeholder="Email" required>
                                            <label for="email_">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="tel" class="form-control" id="telefono_" name="telefono" placeholder="Telefono" required>
                                            <label for="telefono_">Telefono</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="dui_" name="codigo" placeholder="DUI" required>
                                            <label for="dui_">DUI</label>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control fecha" id="fecha_nacimiento_" name="fecha_nacimiento" placeholder="Fecha de nacimiento" required>
                                            <label for="fecha_nacimiento_">Fecha de nacimiento</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control fecha" id="fecha_contratacion" name="fecha_contratacion" placeholder="yyyy/mm/dd" required>
                                            <label for="fecha_contratacion">Fecha de contratación</label>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-floating puesto">
                                            <select class="form-select" id="puesto" name="puesto" required>
                                                <option selected value="">Seleccione un puesto</option>
                                                <option value="1">Gerente</option>
                                                <option value="2">Instructor</option>
                                                <option value="3">Recepcionista</option>
                                                <option value="4">Mecánico</option>
                                            </select>
                                            <label for="puesto">Puesto</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <h6>Dirección</h6>
                                    </div>
                                </div>

                                <div class="row g3 mb-3">
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="codigo_postal_" name="codigo_postal" placeholder="01001" required>
                                            <label for="codigo_postal_">Código postal</label>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="calle_avenida_" name="calle_avenida" placeholder="0 calle" required>
                                            <label for="calle_avenida_">Calle/Avenida</label>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="numero_casa_" name="numero_casa" placeholder="12-58" required>
                                            <label for="numero_casa_">Número de casa</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="departamento_" name="departamento" placeholder="Departamento" required>
                                            <label for="departamento_">Departamento</label>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="municipio_" name="municipio" placeholder="Municipio" required>
                                            <label for="municipio_">Municipio</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="colonia_" name="colonia" placeholder="Paraiso">
                                            <label for="colonia_">Colonia</label>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="ciudad_" name="ciudad" placeholder="Jocotesburgo">
                                            <label for="ciudad_">Ciudad</label>
                                        </div>
                                    </div>
                                </div>

                                <input class="w-100 btn btn-lg btn-dark" name="login" type="submit" value="Guardar" />
                                <input type="hidden" name="personal" value="new">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="reports collapse" id="reports">

        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h1 class="text-center" style="margin-bottom: 20px;">Clases programadas</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table id="eventGrid" class="display table" style="width:100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Cliente</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th>Fecha inicio</th>
                                <th>Fecha fin</th>
                                <th>Instructor</th>
                                <th>Sesiones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Cliente</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th>Fecha inicio</th>
                                <th>Fecha fin</th>
                                <th>Instructor</th>
                                <th>Sesiones</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col" style="min-height: 100px;">&nbsp;</div>
            </div>
            <!--<div class="row">
                <div class="col">
                    <div id="calendario"></div>
                </div>
            </div>-->

            <div class="row">
                <div class="col">
                    <h1 class="text-center" style="margin-bottom: 20px;">Contratos</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table id="contractGrid" class="display table" style="width:100%">
                        <thead>
                        <tr>
                            <th>Contrato</th>
                            <th>Sesiones</th>
                            <th>Instructor</th>
                            <th>Vehículo</th>
                            <th>Fecha inicio</th>
                            <th>Fecha fin</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Contrato</th>
                            <th>Sesiones</th>
                            <th>Instructor</th>
                            <th>Vehículo</th>
                            <th>Fecha inicio</th>
                            <th>Fecha fin</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <script type="text/javascript">
                document.addEventListener('DOMContentLoaded', function() {
                    var calendarEl = document.getElementById('calendario');
                    var calendar = new FullCalendar.Calendar(calendarEl, {
                        initialView: 'timeGridWeek',
                        locale: 'es',
                        headerToolbar: {
                            left: 'prev,next today',
                            center: 'title',
                            right: 'timeGridWeek,timeGridDay'
                        },
                        events: {
                            url: '../../crud/select.php',
                            method: 'post',
                            extraParams: {
                                view: 1,
                                cal: 1
                            }
                        },
                        eventSourceFailure(e){
                            console.log(e.xhr.response);
                        },
                        eventClick: function(info) {
                            console.log(info.event.extendedProps.sesiones);
                            $('#eventeModal .modal-body').html('Cliente: '+info.event.title);
                            $('#eventeModal').modal('toggle');
                        }
                    });
                    calendar.render();
                });
            </script>

        </div>

    </section>

</main>

<div class="modal fade" id="eventeModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="integrantes" tabindex="-1" aria-labelledby="integrantes" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Grupo #1</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Carné</th>
                            <th scope="col">% Participación</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td>Jonathan Danilo Chinchilla</td>
                            <td>9941-18-</td>
                            <td>0%</td>
                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td>Esdras Nehemias Aylon</td>
                            <td>9941-18-</td>
                            <td>0%</td>
                        </tr>
                        <tr>
                            <td scope="row">3</td>
                            <td>Jonatan Josue Espino</td>
                            <td>9941-18-</td>
                            <td>0%</td>
                        </tr>
                        <tr>
                            <td scope="row">4</td>
                            <td>Hugo Humberto Tobar</td>
                            <td>9941-18-</td>
                            <td>0%</td>
                        </tr>
                        <tr>
                            <td scope="row">5</td>
                            <td>Sergio Miguel Alvarado</td>
                            <td>9941-18-</td>
                            <td>0%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
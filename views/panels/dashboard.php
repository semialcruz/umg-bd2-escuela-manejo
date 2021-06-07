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
                                            <input type="text" class="form-control" id="dui" name="codigo" placeholder="0000-00000-0000" />
                                            <label for="dui">DUI</label>
                                        </div>
                                    </div>

                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control fecha" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="dd/mm/yyyy" />
                                            <label for="fecha_nacimiento">Fecha de nacimiento</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre completo">
                                    <label for="nombre">Nombre</label>
                                </div>

                                <div class="row g2 mb-3">
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@dominio.com">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="5555-5555">
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
                                            <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" placeholder="01001">
                                            <label for="codigo_postal">Código postal</label>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="calle_avenida" name="calle_avenida" placeholder="0 calle">
                                            <label for="calle_avenida">Calle/Avenida</label>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="numero_casa" name="numero_casa" placeholder="12-58">
                                            <label for="numero_casa">Número de casa</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="departamento" name="departamento" placeholder="Departamento">
                                            <label for="departamento">Departamento</label>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="municipio" name="municipio" placeholder="Municipio">
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
                            <form>

                                <div class="row mb-3">
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                                            <label for="nombre">Nombre(s)</label>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
                                            <label for="apellido">Apellido(s)</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
                                            <label for="telefono">Telefono</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="dui" name="codigo" placeholder="DUI">
                                            <label for="dui">DUI</label>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-floating">
                                            <input type="text" class="form-control fecha" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha de nacimiento">
                                            <label for="fecha_nacimiento">Fecha de nacimiento</label>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="reports collapse" id="reports">

        <div class="container-fluid">
            <h1>Aquí van los reportes</h1>
        </div>

    </section>

</main>

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
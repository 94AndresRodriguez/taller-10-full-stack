<?php include "./controller/calculationController.php" ?>

<form method="post">
    <h2>Calculadora para la Mayoria de Edad</h2>
    <div class="form__row">
        <div>
            <label for="nombre-usuario">
                Nombre de Usuario
            </label>
            <input
            id="nombre-usuario"
            type="text"
            name="nombre_usuario"
            placeholder="jonh doe"
            >
        </div>
        <div>
            <label for="fecha-nacimiento">
                Fecha de Nacimiento
            </label>
            <input
            id="fecha-nacimiento"
            type="date"
            name="fecha_nacimiento"
            >
        </div>
    </div>
    <button>Enviar</button>
</form> 
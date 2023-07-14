<?php include "./controller/calculationController.php" ?>

<form method="post">
  <h2>Nombre de usuario y edad</h2>
  <div class="form__row">
    <div>
        <label for="nombre-usuario">
            Nombre usuario
        </label>
        <input
        id="nombre-usuario"
        type="text"
        name="nombre_usuario"
        placeholder="john"
        >
    </div>
   </div>        
  <div>
    <div>
        <label for="edad usuario">
            Edad usuario
        </label>
        <input
        id= "edad usuario"
        type="text"
        name="edad_usuario"
        placeholder="18"
        >
    </div>
  </div>
  <button>Enviar</button>
</form>
 
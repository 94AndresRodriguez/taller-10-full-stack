<?php include "./controller/calculationController.php" ?>

<form method="post">
    <h2>Operacion</h2>
    <div class="form__row">
        <div>
            <label for="primer-numero">
                Ingresar primer numero
            </label>
            <input
            id="primer-numero"
            type="text"
            name="first_number"
            placeholder="0"
            >    
        </div>
        <div>
            <label for="segundo-numero">
                Ingresar segundo numero
            </label>
            <input
            id="segundo-numero"
            type="text"
            name="second_number"
            placeholder="1"
            >
        </div>
        <div>
            <label for=" operacion-ejecutar">
                Operacion a ejecutar
            </label>
            <select 
                id="operacion-ejecutar"
                name="operacion_ejecutar"
        >
                <option value="SUMA">Suma</option>
                <option value="RESTA">Resta</option>
                <option value="MULTIPLICACION">Multiplicacion</option>
                <option value="DIVISION">Division</option>
            </select>
        </div>
    </div>
    <button>Calcular</button>
</form>     
<?php
              if( isset($_POST["name"], $_POST["apellidos"] , $_POST["direccion"], $_POST["telefono"]) ){
                $datos = [
                    "nombre"=>$_POST["name"],
                    "apellidos"=>$_POST["apellidos"],
                    "direccion"=>$_POST["direccion"],
                    "telefono"=>$_POST["telefono"]
                ];
              }

              


?>
<div class="bg-gray-900 opacity-75 w-full shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4">

    <div class="p-5 bg-white rounded-lg flex items-center justify-between space-x-8">

        <div class="flex-1 flex justify-between items-center">
            <div class="w-48 bg-gray-300 rounded text-center text-black">
                <?php
              if(isset($_POST["name"])){
                echo strtoupper($_POST["name"]);
              }
              ?>
            </div>
            <div class="w-24 h-6 rounded-lg bg-black text-center text-white">Nombre</div>
        </div>
    </div>
    <br>
    <div class="p-5 bg-white rounded-lg flex items-center justify-between space-x-8">

        <div class="flex-1 flex justify-between items-center">
            <div class="w-48 bg-gray-300 rounded text-center text-black">
                <?php
              if(isset($_POST["apellidos"])){
                echo strtoupper($_POST["apellidos"]);
              }
              ?>
            </div>
            <div class="w-24 h-6 rounded-lg bg-black text-center text-white">Apellido</div>
        </div>
    </div>
    <br>
    <div class="p-5 bg-white rounded-lg flex items-center justify-between space-x-8">

        <div class="flex-1 flex justify-between items-center">
            <div class="w-48 bg-gray-300 rounded text-center text-black">
                <?php
              if(isset($_POST["direccion"])){
                echo strtolower($_POST["direccion"]);
              }
              ?>
            </div>
            <div class="w-24 h-6 rounded-lg bg-black text-center text-white">Dirección</div>
        </div>
    </div>
    <br>
    <div class="p-5 bg-white rounded-lg flex items-center justify-between space-x-8">

        <div class="flex-1 flex justify-between items-center">
            <div class="w-48 bg-gray-300 rounded text-center text-black">
                <?php
              if(isset($_POST["mensaje"])){
                echo strlen(trim($_POST["mensaje"]));
              }
              ?>
            </div>
            <div class="w-24 h-6 rounded-lg bg-black text-center text-white">N Mensaje</div>
        </div>
    </div>
    <br>
    <div class="p-5 bg-white rounded-lg flex items-center justify-between space-x-8">

        <div class="flex-1 flex justify-between items-center">
            <div class="w-48 bg-gray-300 rounded text-center text-black">
                <?php
              if(isset($_POST["n1"],$_POST["n2"],$_POST["n3"])){
                $values = array(
                    floatval($_POST["n1"]),
                    floatval($_POST["n2"]), 
                    floatval($_POST["n3"])
                );
                $avg = array_sum($values) / count($values);

                $notas=array(
                    $_POST["n1"],
                    $_POST["n2"],
                    $_POST["n3"],
                    $avg
                  );

                print( round($avg,1,2));

              }
              ?>
            </div>
            <div class="w-24 h-6 rounded-lg bg-black text-center text-white">Promedio</div>
        </div>
    </div>

</div>
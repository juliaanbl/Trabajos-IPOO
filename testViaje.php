<?php
    include_once("viaje.php");
    include_once("pasajeros.php");
    include_once("responsableV.php");
    include_once("pasajeroEstandar.php");
    include_once("pasajeroVip.php");
    include_once("pasajeroEspecial.php");

    $pasajero1 = new PasajeroVip("Nicolas","Campas",45122173,2992627163,75,200);
    $pasajero2 = new PasajeroEstandar("Rogelio","Funes Mori",33725121,117263723,12,"A65");
    $pasajero3 = new PasajeroEspecial("Burrito","Ortega",25239272,119462734,"si","no","no");
    $coleccionPasajeros = [];

    $objResponsable = new ResponsableV("Julian","Blanco",114,577);
    
    $viaje = new Viaje("CBA311","Cordoba",4,$coleccionPasajeros,$objResponsable,300,0);

    $viaje->venderPasaje($pasajero1);
    $viaje->venderPasaje($pasajero2);
    $viaje->venderPasaje($pasajero3);
    echo $viaje;
    
    //solucionar funcion agregarPasajero(), pensar como agregar distintos tipos de pasajeros
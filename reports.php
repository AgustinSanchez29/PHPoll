<?php 
include("funciones.php");


//  $reporteF = generoFemenino();
//  $rangoEdad = rangoEdad();


 ?>

 <table>
  <tr>
    <th>Reporte</th>
    <th>Total</th>
  </tr>
  <tr>
    <td>Genero Masculino</td>
    <td><?php  generoMasculino(); ?></td>
  </tr>
  <tr>
    <td>Genero Femenino</td>
    <td><?php  generoFemenino(); ?></td>
  </tr>

  <tr>
    <td>Rango de Edad </td>
    <td><?php  rangoEdad(); ?></td>
  </tr>

  <tr>
    <td>De la ciudad </td>
    <td><?php  capital(); ?></td>
  </tr>

  <tr>
    <td>De provincia </td>
    <td><?php  provincia(); ?></td>
  </tr>
</table>





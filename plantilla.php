<?php
require "consulta.php";
$usuario = new Consulta();
$salida = "";
$salida .= "<table>";
$salida .= "<thead> <th>Nombre</th> <th>Area</th><th>Empresa dirigida</th> <th>dept. Dirigido</th> <th>Entidad formadora</th><th>Renovacion</th><th>Horas</th><th>Formacion</th><th>Tipo pago</th><th>Gastos</th><th>Cantidad bonificada</th><th>Eliminado</th></thead>";
foreach($usuario->buscar() as $r){
    $salida .= "<tr> <td>".$r->nombre."</td> <td>".$r->area."</td><td>".$r->empresaDirigida."</td><td>".$r->deptDirigido."</td><td>".$r->entidadFormadora."</td><td>".$r->renovacion."</td><td>".$r->horas."</td><td>".$r->formacion."</td><td>".$r->tipoPago."</td><td>".$r->gastos."</td><td>".$r->CantBonificada."</td><td>".$r->eliminado."</td></tr>";
}
$salida .= "</table>";
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=usuarios_".time().".xls");
header("Pragma: no-cache");
header("Expires: 0");
echo $salida;
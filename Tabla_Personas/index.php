<?php
    ini_set("display_errors", E_ALL);

    include_once "personas.php";

    $lista = [
        new Persona("fulano", "1956-11-02", "5649441547"),
        new Persona("Karina", "2003-05-17", "564841250"),
        new Persona("Daniel", "2001-11-30", "5614478620"),
        new Persona("Diego", "2000-10-25", "5647162580"),
        new Persona("Blanco", "1999-10-23", "3602514744"),
        new Persona("Ernesto", "1940-08-12", "5514872365"),
        new Persona("Ivan", "1999-09-08", "5678412595"),
        new Persona("Mewing", "1997-07-07", "5641205681"),
        new Persona("Valdepeña", "1948-05-14", "5662045530"),
        new Persona("caguamita", "2004-08-15", "5677777777"),

    ];
    
  
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> lista de personas</title>
        <style>
            td{
                background-color: blueviolet;
            }
        </style>
    </head>
    <body>
        <h1>Lista de personas</h1>
        <table border>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Fecha de nacimiento</th>
                    <th>Edad actual</th>
                    <th>Telefono</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lista as $p):?>
            <tr>
                    <td><?php echo $p-> getNombre()?></td>
                    <td><?php echo $p-> getFecNAc()?></td>
                    <td><?php echo $p->calcularEdad(); ?></td>
                    <td><?php echo $p-> getTel()?></td>
                </tr>
                <?php endforeach?> 
            </tbody>
        </table>
    </body>
</html>
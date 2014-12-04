<?php
/**
 * Created by PhpStorm.
 * User: Josue
 * Date: 17/10/14
 * Time: 06:23 PM
 */
$usuario = new Usuario();
//es aqui donde de asignan valores de manera directa sin en cambio se
//puede hacer consultas a las bd's del sistema en lugar de asignar valores directamnete
$titulo = 'bienvenidos al my user';
$contenido = 'Contenido de la variable....';
//se asigna un valor atravez de un metodo
$variables = array('titulo'=>$titulo, 'contenido'=>$contenido,'nombre'=>$usuario->setUsuario());
view('myusuario',$variables);
?>
<?php

//in this file, define 

$ms = //menu structure

new menin('','', 0, '', array(
//   new menin("$bp/actualite",'Actualité', 1, 'gibraltar3_740x85.jpg', array()),
   new menin("$bp/index",'Introduction', 1, 'gibraltar3_740x85.jpg', array()),
   new menin("$bp/pedagogie",'Pédagogie', 1, 'rtg1_740x85.jpg', array(
     new menin("$bp/multiage",'Multiâge', 1, 'rtg1_740x85.jpg', array()),
   )),
   new menin("$bp/journee",'Une journée à l\'école', 1, 'citrus_740x85.jpg', array(
     new menin("$bp/journee-espace",'Espace', 1, 'rtg1_740x85.jpg', array()),
     new menin("$bp/journee-temps",'Temps', 1, 'rtg1_740x85.jpg', array()),
   )),
   new menin("$bp/stottegroupe",'Le Støttegroupe', 1, 'citrus_740x85.jpg', array(
     new menin("$bp/activites/index",'Activités', 1, 'citrus_740x85.jpg', array(
       new menin("$bp/activites/reunion-2009-11-25",'Réunion du 2009-11-25', 0, 'citrus_740x85.jpg', array()),
     )),
   )),
   new menin("$bp/infos_pratiques",'Informations pratiques', 1, 'citrus_740x85.jpg', array(
     new menin("$bp/personnes",'Derrière le projet', 1, 'citrus_740x85.jpg', array()),
   )),

));
php?>



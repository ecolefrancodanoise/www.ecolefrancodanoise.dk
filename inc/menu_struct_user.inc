<?php

//in this file, define 

$ms = //menu structure

new menin('','', 0, '', array(
//   new menin("$bp/actualite",'Actualité', 1, 'gibraltar3_740x85.jpg', array()),
   new menin("$bp/index",'Introduktion', 1, 'gibraltar3_740x85.jpg', array()),
   new menin("http://blog.ecolefrancodanoise.dk",'Le blog', 1, 'gibraltar3_740x85.jpg', array()),
   new menin("$bp/paedagogik",'Pædagogik', 1, 'rtg1_740x85.jpg', array(
     new menin("$bp/typisk_dag",'En typisk dag', 1, 'rtg1_740x85.jpg', array()),
     new menin("$bp/undervisningsplaner",'Undervisningplaner', 1, 'rtg1_740x85.jpg', array()),
     new menin("$bp/modeller",'Modeller', 1, 'rtg1_740x85.jpg', array()),
     new menin("$bp/17-principper",'17 principper', 1, 'rtg1_740x85.jpg', array())
   )),
   new menin("$bp/praktisk_info",'Praktisk Info', 1, 'citrus_740x85.jpg', array(
     new menin("$bp/dokumenter/vedtaegter",'Vedtægter Skole', 1, 'rtg1_740x85.jpg', array()),
     new menin("$bp/dokumenter/vedtaegter-dfbh-2015-06-06.pdf",'Vedtægter BH', 1, 'rtg1_740x85.jpg', array()),
     new menin("http://www.findsmiley.dk/559197",'Køkkensmiley', 1, 'rtg1_740x85.jpg', array())
   )),

));
?>


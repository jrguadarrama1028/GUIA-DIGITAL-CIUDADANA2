<!DOCTYPE HTML><!--doc en html-->
<HTML LANG="ES"><!--doc en español-->
<HEAD>
<meta charset="UFT-8"><!--codifica caracteres-->
<meta neme="viewport" content="width=device-width, initial-scale=1.0"><!--ajusta el diseño a moviles-->
<title> GUIA DIGITALN CIUDADANA</title><!--titulo que aparece en la pestaña-->
<style>

 <body {
   
    margin: 0; /*elimina margenes por defecto */
    font-family:Arial, sans-serif;/*fuente de texto */
    }
/*estilo del menu principal */
nav{
   background: #2A89AD;/*fondo gris oscuro */
}
nav ul {
   list-style: none;/*quita viñetas de la lista */
   margin: 0;/*elimina margenes */
   padding: 0; /*elimina relleno */
   display: flex;/*coloca los <li> en linea (horizontal) */
}
nav ul li {
   position: relative;/*necesario para posicionar el submenu debajo */
}
nav ul li a {
   display: block;/*ase que todo el area sea clickeable */
   padding: 15px 20px; /*espacio interno */
   color: white;/*texto blanco */
   text-decoration: none;/*quita el subrayado */
}
nav ul li a:hover{
   background: #FFC0CB;/* cambia el fondo al pasar el raton */
}

/* Estilo del submenu */
nav ul li ul{
   display: none; /*oculta el submenu por defecto */
   position: absolute; /*posiciona el submenu relativo al padre */ 
   top: 100%; /* lo coloca justo debajo del elemento padre */
   left: 0; /* aliniado a la izquirda */
   background: #444; /*fondo del subtema */
   padding: 0; /*sin espacio interno */
   min-width: 180px; /* ancho minimo del subtema */
}
nav ul li ul li a {
   padding: 10px 15px; /*espacio interno en las opciones */
}
nav ul li ul li a:hover {
   background: #FFC0CB; /*coloca mas claro al pasar el raton */
}

/* mostar el submenu */
nav ul li:hover> ul {
   display: block; /*cuando paso el raton sobre el <li> , muestra el submenu */
}
</style>
</head>
<body>
   <body background="FONDO5.jpg">
   <!--menu principal-->
   <nav>
      <ul>
       <!--elemento simple sin subtema-->
       
      
      <!--Elemento con subtema-->
      <li>
         <p><a href=" https://gobmx.page/ActaNacimiento/">ACTA</a></p> <!--Flecha indicando subtema-->
  
       <ul>
      <p><a href="https://www.gob.mx/ActaNacimiento/folioSeguimiento/">ACTA FOLIO</a></p>

            <li><a href="acta.html">DUDAS DE TU ACTA DE NACIMIENTO</a></li>
 </ul>
       <li>
        <li> <p><a href="https://www.gob.mx/curp/">CURP</a></p>  <!--Flecha indicando subtema-->
<ul>
    <p><a href="curp_dudas.html">CURP DUDAS</a><li> 
</ul>
<li>
   <li>
         <p><a href="https://smovilidad.edomex.gob.mx/licencias">LICENCIA</a></p>  
        <ul>
        <li><a href="https://smovilidad.edomex.gob.mx/citas_internet">AGENDAR CITA</a></li>
        <p><a href="dudas_licencia.html">DUDAS  DE TU LICENCIA</a><li> 
       </ul>
       <li>
         <p><a href=" https://www.sat.gob.mx/portal/public/home">SAT</a></p> <!--Flecha indicando subtema-->
         <ul>
            <li><a href="https://citas.sat.gob.mx/">AGENDAR CITA</a></li>
            <li><a href="https://www.sat.gob.mx/portal/public/tramites/inscripcion-y-aviso-al-rfc">RFC</a></li>
            <li><a href="https://www.sat.gob.mx/portal/public/tramites/constancia-de-situacion-fiscal">CONSTANCIA DE SITUACION FISCAL</a></li><li><a href="https://www.sat.gob.mx/portal/public/tramites/declaraciones-pf">DECLARACION PERSONAS FISICAS</a></li>
        <p><a href="dudas_sat.html">DUDAS  DEL SAT</a><li> 
       </ul>
    </li>
    <li>
         <p><a href="https://share.google/bEhPbZOFD9ReqhYrG ">REGISTRO CIVIL</a></p> <!--Flecha indicando subtema-->
     <ul>
      <p><a href="registro_civil.html">DUDAS REGISTRO CIVIL</a><li> 
       </ul>
    </li>
    <li>
         <p><a href="https://www.gob.mx/pasaporte/ ">PASAPORTE</a></p> <!--Flecha indicando subtema-->
         <ul>
      <p><a href="dudas_pas.html">DUDAS DE TU PASAPORTE</a><li> 
       </ul>
    </li>
       <li>
        
     <p><form action="https://www.google.com/search" method="get">
  <input type="text" name="q" placeholder="Buscar en Google">
  <input type="submit" value="Buscar"></p> </li>
</form>


 <li>
         
      <li><a href="https://www.instagram.com/marco_guadarrama_08/"><img src="us.jpeg" width="80" height="110" align="center">

        </li>
   
</nav>
  
   </body>
   </html>

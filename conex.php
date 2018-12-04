<?php
$hostBD="localhost:3306";
$nombreBD="admin_elite";
$usuarioBD="elite";
$passBD="Swzg25%9";

$conex = mysqli_connect($hostBD,$usuarioBD,$passBD,$nombreBD)or die("la conexion fallo");

/*
Hostalia
eliteescort
Seovenezuela2018@

*/
$arreglosSeo = array(
"inicio" => array (
"tituloseo" => "Escorts y señoritas de compañía en Madrid | Elite Escort Madrid" ,
"metadescripcion" => "'Las mejores escorts en Madrid para darte increíbles momentos de lujuria y placer. Señoritas de compañía en Madrid disponibles. Te invitamos a descubrir mujeres excepcionales.'" ,
"author" => "Julia Rey" ,
"contact" => "info@eliteescortmadrid.com"  ,
"canopc" => "https://eliteescortmadrid.com/" ,
"canomovil" => "https://eliteescortmadrid.com/movil/" ),

"escorts" => array (
"tituloseo" => "Las Mejores Escorts de lujo en Madrid | Elite Escort Madrid" ,
"metadescripcion" => "'Disfruta de las mejores escorts de tu ciudad en Elite Escort Madrid con las damas de compañía más guapas y profesionales que te puedes encontrar. Las Mejores Escorts de Lujo en Madrid. '" ,
"author" => "Julia Rey" ,
"contact" => "info@eliteescortmadrid.com" ,
"canopc" => "https://eliteescortmadrid.com/escorts-madrid/" ,
"canomovil" => "https://eliteescortmadrid.com/movil/escorts-madrid/" ),

"casadas" => array (
"tituloseo" => "Mujeres Casadas | Escorts de lujo en Madrid" ,
"metadescripcion" => "'Organiza tu velada perfecta con tus gustos y preferencias. Servicio especial de Escorts de lujo para mujeres casadas en Madrid. Discreción garantizada. Atrevete!! '" ,
"author" => "Julia Rey" ,
"contact" => "info@eliteescortmadrid.com" ,
"canopc" => "https://eliteescortmadrid.com/mujeres-casadas-elite-escort-madrid/" ,
"canomovil" => "https://eliteescortmadrid.com/movil/mujeres-casadas-elite-escort-madrid/" ),


"reino" => array (
"tituloseo" => "Nuestro reino | Escorts de lujo en Madrid" ,
"metadescripcion" => "'Apartamentos individuales con acceso privado. El mejor sitio para tus citas con nuestras damas de compañía ubicadas en la ciudad de madrid. Discreción garantizada. '" ,
"author" => "Julia Rey" ,
"contact" => "info@eliteescortmadrid.com" ,
"canopc" => "https://eliteescortmadrid.com/nuestro-reino-elite-escort-madrid/" ,
"canomovil" => "https://eliteescortmadrid.com/movil/nuestro-reino-elite-escort-madrid/" ),

"porque-elite" => array (
"tituloseo" => "Porque Elite | Señorita de compañia Madrid" ,
"metadescripcion" => "'Descruba las razones por las cuales debe escogernos como su agencia de escorts en Madrid.'" ,
"author" => "Julia Rey" ,
"contact" => "info@eliteescortmadrid.com" ,
"canopc" => "https://eliteescortmadrid.com/" ,
"canomovil" => "https://eliteescortmadrid.com/movil/") ,

"preguntas" => array (
"tituloseo" => "Preguntas Frecuentes | Señoritas y Escorts de lujo en Madrid" ,
"metadescripcion" => "'Resuelve todas tus dudas de nuestro servicio de acompañantes de lujo. Damas de compañia de lujo en madrid esperan por ti. En esta sección resolvemos todas tus dudas. Servicios con total discreción. Visitanos!'" ,
"author" => "Julia Rey" ,
"contact" => "info@eliteescortmadrid.com" ,
"canopc" => "https://eliteescortmadrid.com/preguntas-frecuentes/" ,
"canomovil" => "https://eliteescortmadrid.com/movil/preguntas-frecuentes/" ),
/*1*/
"diana" => array (
"tituloseo" => "Diana, sensual escort en Madrid | Elite Escort Madrid" ,
"metadescripcion" => "'Dama de compañía en Madrid, Diana sensual y discreta escort en la Ciudad de Madrid. Las mejores escorts en Madrid, chicas VIP señoritas de compañía de lujo y alto standing. Más de 15 Top Models exclusivas en la agencia Elite Escort Madrid.'" ,
"author" => "Julia Rey" ,
"contact" => "info@eliteescortmadrid.com",
"canopc" => "https://eliteescortmadrid.com/escorts-madrid/diana/" ,
"canomovil" => "https://eliteescortmadrid.com/movil/escorts-madrid/diana/") ,
/*2*/
"amanda" => array (
"tituloseo" => "Amanda, elegante y sofisticada escort en Madrid | Elite Escort Madrid" ,
"metadescripcion" => "'En la agencia de Elite Escort Madrid te ofrecemos chicas llenas de Sensualidad, elegancia y erotismo. Amanda cumplirá todas tus espectativas. Prepara tu cita con una hora de anticipación '" ,
"author" => "Julia Rey" ,
"contact" => "info@eliteescortmadrid.com" ,
"canopc" => "https://eliteescortmadrid.com/escorts-madrid/amanda/" ,
"canomovil" => "https://eliteescortmadrid.com/movil/escorts-madrid/amanda/" ),
/*3*/
"sandra" => array (
"tituloseo" => "Sandra, escort teen disponible en Madrid | Escorts de lujo en Madrid" ,
"metadescripcion" => "'Soy Sandra, una chica teen nueva de Elite Escort Madrid. Soy una joven escort española sexy, de piel fresca y sedosa. Visitanos y observa mis fotos. Soy irresistible. Que esperas! ' " ,
"author" => "Julia Rey" ,
"contact" => "info@eliteescortmadrid.com",
"canopc" => "https://eliteescortmadrid.com/escorts-madrid/sandra/" ,
"canomovil" => "https://eliteescortmadrid.com/movil/escorts-madrid/sandra/") ,
/*4*/
"laura" => array (
"tituloseo" => "Laura, Dama de compañia y Masajista de Lujo | Elite Escort Madrid" ,
"metadescripcion" => "'Soy Laura una chica Elite Escorts Madrid, me complace brindaros mi servicio y profesionalidad como dama de compañía y masajistas de lujo. Las mejores chicas de lujo y masajes eróticos en Madrid la encontrarás aquí. Visitanos'" ,
"author" => "Julia Rey" ,
"contact" => "info@eliteescortmadrid.com",
"canopc" => "https://eliteescortmadrid.com/escorts-madrid/laura/" ,
"canomovil" => "https://eliteescortmadrid.com/movil/escorts-madrid/laura/") ,
/*5*/
"sabrina" => array (
"tituloseo" => "Sabrina, apasionada dama de compañia en Madrid | Elite Escort Madrid " ,
"metadescripcion" => "'Soy Sabrina, soy una escort española, joven, dulce y muy apasionada. Mis curvas son todas naturales, soy una chica guapa. Establece una cita conmigo y la pasaremos muy rico. Visitame!'" ,
"author" => "Julia Rey" ,
"contact" => "info@eliteescortmadrid.com" ,
"canopc" => "https://eliteescortmadrid.com/escorts-madrid/sabrina/" ,
"canomovil" => "https://eliteescortmadrid.com/movil/escorts-madrid/sabrina/" ),
/*6*/
"tania" => array (
"tituloseo" => "Tania, escort de lujo en Madrid | Escorts de lujo en Madrid " ,
"metadescripcion" => "' Soy Tania y ofrezco mis servicios como escorts de lujo en Madrid en nuestro reino ELITE ESCORT MADRID. Establece una cita conmigo y la pasaremos muy rico. Visitame!'" ,
"author" => "Julia Rey" ,
"contact" => "info@eliteescortmadrid.com" ,
"canopc" => "https://eliteescortmadrid.com/escorts-madrid/tania/" ,
"canomovil" => "https://eliteescortmadrid.com/movil/escorts-madrid/tania/" ),
/*7*/
"marta" => array (
"tituloseo" => "Marta, apasionada dama de compañia en Madrid | Elite Escort Madrid" ,
"metadescripcion" => "'Hola guapo! Soy Marta, conmigo en Elite Escort Madrid encontraras una chica alegre, risueña, pasional y totalmente inexperta, con la que te gustará pasar un rato apasionado, sal de la rutina y llamame!'" ,
"author" => "Julia Rey" ,
"contact" => "info@eliteescortmadrid.com" ,
"canopc" => "https://eliteescortmadrid.com/escorts-madrid/marta/" ,
"canomovil" => "https://eliteescortmadrid.com/movil/escorts-madrid/marta/") ,
/*8*/
"carla" => array (
"tituloseo" => "Carla, stripper y escort en Madrid | Elite Escort Madrid" ,
"metadescripcion" => "'Carla una de las mejores escorts de lujo en Madrid ofrece su servicio de Striptease. Si te apetece disfrutar de un increíble striptease y que culmine con un encuentro sexual Carla es la indicada!'" ,
"author" => "Julia Rey" ,
"contact" => "info@eliteescortmadrid.com",
"canopc" => "https://eliteescortmadrid.com/escorts-madrid/carla/" ,
"canomovil" => "https://eliteescortmadrid.com/movil/escorts-madrid/carla/") ,
/*9*/
"carmen" => array (
"tituloseo" => "Carmen, jovencita escort de lujo | Elite Escort Madrid" ,
"metadescripcion" => "'Carmen es una escort Jovencita en Madrid, España. Las mejores chicas de lujo y masajes eróticos en Madrid la encontrarás aquí. Carmen es una de ellas quiere conocerla? '" ,
"author" => "Julia Rey" ,
"contact" => "info@eliteescortmadrid.com" ,
"canopc" => "https://eliteescortmadrid.com/escorts-madrid/carmen/" ,
"canomovil" => "https://eliteescortmadrid.com/movil/escorts-madrid/carmen/") ,

/*10*/
"dilara" => array (
"tituloseo" => "Dilara, escort discreta y preciosa | Escorts de lujo en Madrid" ,
"metadescripcion" => "'Dilara preciosa y discreta escort en la Ciudad de Madrid. Las mejores escorts de lujo en Madrid. Selecto catálogo de chicas de compañía con galería de imágenes, vídeos, características y todos los servicios. Visitanos!'" ,
"author" => "Julia Rey" ,
"contact" => "info@eliteescortmadrid.com" ,
"canopc" => "https://eliteescortmadrid.com/escorts-madrid/dilara/" ,
"canomovil" => "https://eliteescortmadrid.com/movil/escorts-madrid/dilara/" ),
/*11*/
"isabel" => array (
"tituloseo" => "Isabel, acompañante de lujo y elegancia | Chicas de lujo en Madrid" ,
"metadescripcion" => "'Acompañante de lujo en Madrid. Isabel ofrece su experiencia como escort de lujo. Las chicas de lujo en Madrid más sensuales y elegantes. Disfruta con Isabel llamando con una hora de anticipación. Visitanos.  '" ,
"author" => "Julia Rey" ,
"contact" => "info@eliteescortmadrid.com" ,
"canopc" => "https://eliteescortmadrid.com/escorts-madrid/isabel/" ,
"canomovil" => "https://eliteescortmadrid.com/movil/escorts-madrid/isabel/") ,
/*12*/
"bea" => array (
"tituloseo" => "Bea, extrovertida escort en Madrid | Elite Escort Madrid" ,
"metadescripcion" => "'Hola corazón, soy Bea una joven escort natural que desprende sensualidad, dulce y muy apasionada de cuerpo estilizado, guapa y natural. ¿Quieres tener una cita apasionada? ¡Ven conmigo! '" ,
"author" => "Julia Rey" ,
"contact" => "info@eliteescortmadrid.com",
"canopc" => "https://eliteescortmadrid.com/escorts-madrid/bea/" ,
"canomovil" => "https://eliteescortmadrid.com/movil/escorts-madrid/bea/") ,
/*13*/
"elena" => array (
"tituloseo" => "Elena, acompañante de Lujo | Señoritas de lujo en Madrid" ,
"metadescripcion" => "'Soy Elena y ofrezco mis servicios como acompañante de lujo en Madrid en la Agencia ELITE ESCORT MADRID. Acompañantes de lujo para gozar de su saber estar y su belleza en reuniones, eventos. Visitanos!  '" ,
"author" => "Julia Rey" ,
"contact" => "info@eliteescortmadrid.com" ,
"canopc" => "https://eliteescortmadrid.com/escorts-madrid/elena/" ,
"canomovil" => "https://eliteescortmadrid.com/movil/escorts-madrid/elena/" ),
/*14*/
"lia" => array (
"tituloseo" => "Lia, exhuberante escort en Madrid | Señoritas de lujo en Madrid" ,
"metadescripcion" => "'Dama de compañía en Madrid. Lia, es una exhuberante escort y acompañante de lujo para gozar de su saber estar y su belleza en reuniones o eventos. Disponible en el mejor horario. Visitanos!'" ,
"author" => "Julia Rey" ,
"contact" => "info@eliteescortmadrid.com" ,
"canopc" => "https://eliteescortmadrid.com/escorts-madrid/lia/" ,
"canomovil" => "https://eliteescortmadrid.com/movil/escorts-madrid/lia/") ,

/*15*/
"duplex" => array (
"tituloseo" => "Cumple tus fantasías sexuales con un Duplex | Elite Escort Madrid" ,
"metadescripcion" => "'Acompañantes y masajistas de lujo ofrecen servicio de duplex para que cumplan tus fantasias sexuales. Las mejores escorts de Madrid en el mejor horario del día. Busca tu cita HOY MISMO'" ,
"author" => "Julia Rey" ,
"contact" => "info@eliteescortmadrid.com" ,
"canopc" => "https://eliteescortmadrid.com/escorts-madrid/duplex/" ,
"canomovil" => "https://eliteescortmadrid.com/movil/escorts-madrid/duplex/" ),

/*16*/
"jazmín" => array (
"tituloseo" => "Jazmin, escort natural y divertida | Escorts de lujo en Madrid" ,
"metadescripcion" => "'Acompañante de lujo en Madrid. Jazmin ofrece su experiencia como escort de lujo. Las mejores escorts de Madrid en el mejor horario del día. Busca tu cita con una hora de anticipación. Visitanos!'" ,
"author" => "Julia Rey" ,
"contact" => "info@eliteescortmadrid.com" ,
"canopc" => "https://eliteescortmadrid.com/escorts-madrid/jazmín/" ,
"canomovil" => "https://eliteescortmadrid.com/movil/escorts-madrid/jazmín/" ),

/*16*/
"alicia" => array (
"tituloseo" => "Alicia, escort muy sensual | Escorts de lujo en Madrid" ,
"metadescripcion" => "'A mi lado cada segundo se convertirá en una experiencia que no olvidarás, sentirás que el tiempo vuela mientras admiras mi belleza, mis delicados pechos naturales así como mi especial modo de compartir en la intimidad.'" ,
"author" => "Julia Rey" ,
"contact" => "info@eliteescortmadrid.com" ,
"canopc" => "https://eliteescortmadrid.com/escorts-madrid/alicia/" ,
"canomovil" => "https://eliteescortmadrid.com/movil/escorts-madrid/alicia/" ),



"login" => array (
"tituloseo" => "Login Zona Amiga | Señoritas y Escorts de lujo en Madrid" ,
"metadescripcion" => "'Inicia sesión en Elite Escort Madrid. Disfruta de promociones especiales que ofrece nuestra Zona Amiga. Acumula citas continuas con nuestas damas de compañía y recibe promociones exlusivas. Ven a disfurtar!'" ,
"author" => "Julia Rey" ,
"contact" => "info@eliteescortmadrid.com" ,
"canopc" => "https://eliteescortmadrid.com/login/" ,
"canomovil" => "https://eliteescortmadrid.com/movil/login/") ,


"zona" => array (
"tituloseo" => "Zona Amiga | Señoritas y Escorts de lujo en Madrid" ,
"metadescripcion" => "'Crea una cuenta en Elite Escort Madrid. Disfruta de promociones especiales que ofrece nuestra Zona Amiga. Convierte en cliente cliente frecuente y disfruta de ofertas exclusivas. No te arrepentirás!'" ,
"author" => "Julia Rey" ,
"contact" => "info@eliteescortmadrid.com" ,
"canopc" => "https://eliteescortmadrid.com/zona-amiga/" ,
"canomovil" => "https://eliteescortmadrid.com/movil/zona-amiga/" ),

"cita" => array (
"tituloseo" => "Servicio de Citas a ciegas | Señoritas y Escorts de lujo en Madrid" ,
"metadescripcion" => "'Zona amiga ha sido creada para agradecer y premiar la confianza y el cariño que habéis depositado en el equipo de Elite Escort Madrid'" ,
"author" => "Julia Rey" ,
"contact" => "info@eliteescortmadrid.com" ,
"canopc" => "https://eliteescortmadrid.com/servicios-cita-ciegas-elite-escorts-madrid/" ,
"canomovil" => "https://eliteescortmadrid.com/movil/servicios-cita-ciegas-elite-escorts-madrid/" ),

"casting" => array (
"tituloseo" => "Convierte en una escort | Señoritas y Escorts de lujo en Madrid" ,
"metadescripcion" => "'Te ofrecemos la oportunidad de conocer gentlemen de nivel selecto, que estén interesados en conocerte íntimamente con las limitaciones que tú desees, encuentros en cualquier Ciudad, cenas, viajes, hoteles, suites, etc.'" ,
"author" => "Julia Rey" ,
"contact" => "info@eliteescortmadrid.com" ,
"canopc" => "https://eliteescortmadrid.com/casting-elite-escorts-en-madrid/" ,
"canomovil" => "https://eliteescortmadrid.com/movil/casting-elite-escorts-en-madrid/") ,

"promociones" => array (
"tituloseo" => "Promociones de Escorts | Señoritas y Escorts de lujo en Madrid" ,
"metadescripcion" => "'Disfruta de promociones especiales que ofrece nuestra Zona Amiga. Convierte en cliente cliente frecuente y disfruta de ofertas exclusivas, descuentos, obsequios y mucho masajistas'" ,
"author" => "Julia Rey" ,
"contact" => "info@eliteescortmadrid.com" ,
"canopc" => "https://eliteescortmadrid.com/promociones.php" ,
"canomovil" => "https://eliteescortmadrid.com/movil/promociones.php",
"youtube" => "6HnFIJ67HII",
"desc1" => "Muchos de vosotros ya conocéis las generosas curvas de Dilara y su encanto personal, sino la conocéis o queréis repetir esta es vuestra oportunidad.",
"video" => "",
"imagen" => "/images/dilara-madrid.jpg",
"desc2" => "Sandra tiene tiempo para pasar con vosotros. Busca tiempo para disfrutar y relajarte junto a Sandra",
"precio" => "Sandra 2 horas<br>por 300€",
"video2" => "",
"imagen2" => "/images/Sandra-Madrid.jpg",




) ,





);

/*Videos para cambiar


LnfzYiaIxr4

tgi5-vNMi6Q

DufxSf77ntM

QNjoZ_I5HGw

QaoLx0s2TDk

6HnFIJ67HII

*/


?>


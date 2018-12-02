<?php
require_once '../conex.php';
require('../phpmailer/class.phpmailer.php');


/*movil*/
$email = $_POST['cambio_pas2s_email'];
$password = md5($_POST['cambio_pass2_1']);
$pass = $_POST['cambio_pass2_1'];

	$consulta = "SELECT idclientes,nombre,usuario FROM pbrh_users WHERE email='$email'";
	$resultado = $conex->query($consulta);
	$fila = $resultado -> fetch_array();

	if($fila[idclientes]=="")
	{
		$valor=1;
	}
	else
	{ 
		$query = "UPDATE pbrh_users SET password='$password' WHERE idclientes=$fila[idclientes] LIMIT 1 ";
		mysqli_query($conex, $query) or die(mysqli_error());


		/////////////////         ENVIAR CORREO        ////////////////////////// 

		$sql61 = "SELECT fromregistar,fromname,subject,email_envio FROM registrar_cliente";
		$result61 = $conex->query($sql61);
		$fila61 = $result61 -> fetch_array();


		$mail = new PHPMailer();
		$mail->From = $fila61[fromregistar];
		$mail->FromName = $fila61[fromname];
		$mail->Subject = $fila61[subject];
		$mail->AddAddress($email);

		$body = ' 
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		  <title>[SUBJECT]</title>
		  <style type="text/css">
		  .centro{position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);}


		  body {
		   padding-top: 0 !important;
		   padding-bottom: 0 !important;
		   padding-top: 0 !important;
		   padding-bottom: 0 !important;
		   margin:0 !important;
		   width: 100% !important;
		   -webkit-text-size-adjust: 100% !important;
		   -ms-text-size-adjust: 100% !important;
		   -webkit-font-smoothing: antialiased !important;
		 }
		 .tableContent img {
		   border: 0 !important;
		   display: block !important;
		   outline: none !important;
		 }
		 a{
		  color:#cccccc;
		}

		p, h2,li{
		  color:#ffffff;
		  margin:0;
		}

		div,p,ul,h2{
		  margin:0;
		}
		h2{
		color:#DAB679; 
		font-size:21px;
		font-weight:normal;
		}
		p{

		}
		a.link1{
		font-weight:bold;
		color:#DAB679;
		font-size:13px;
		text-decoration:none;font-weight:bold;
		}
		a.link2{
		padding:8px 20px;
		border-radius:5px;
		-moz-border-radius:5px;
		-webkit-border-radius:5px;
		color:#DAB679;
		font-size:13px;
		font-weight:bold;
		text-decoration:none;
		border:1px solid #DAB679;
		font-weight:bold;
		background:#1B150C;
		}

	@media only screen and (max-width:480px)
			
	{
			
	table[class="MainContainer"], td[class="cell"] 
		{
			width: 100% !important;
			height:auto !important; 
		}
	td[class="specbundle"] 
		{
			width: 100% !important;
			float:left !important;
			font-size:13px !important;
			line-height:17px !important;
			display:block !important;
			padding-bottom:5px !important;
		}	
	td[class="specbundle2"] 
		{
			width: 100% !important;
			float:left !important;
			font-size:14px !important;
			line-height:18px !important;
			display:block !important;
			padding-bottom:45px !important;
		}
			
	td[class="spechide"] 
		{
			display:none !important;
		}
		    img[class="banner"] 
		{
		          width: 100% !important;
		          height: auto !important;
		}
			td[class="left_pad"] 
		{
				padding-left:15px !important;
				padding-right:15px !important;
		}
			 
	}
		
	@media only screen and (max-width:540px) 

	{
			
	table[class="MainContainer"], td[class="cell"] 
		{
			width: 100% !important;
			height:auto !important; 
		}
	td[class="specbundle"] 
		{
			width: 100% !important;
			float:left !important;
			font-size:13px !important;
			line-height:17px !important;
			display:block !important;
			padding-bottom:5px !important;
		}	
	td[class="specbundle2"] 
		{
			width: 100% !important;
			float:left !important;
			font-size:14px !important;
			line-height:18px !important;
			display:block !important;
			padding-bottom:45px !important;
		}
			
	td[class="spechide"] 
		{
			display:none !important;
		}
		    img[class="banner"] 
		{
		          width: 100% !important;
		          height: auto !important;
		}
			td[class="left_pad"] 
		{
				padding-left:15px !important;
				padding-right:15px !important;
		}
			
	}

	</style>
	<script type="colorScheme" class="swatch active">
	  {
	    "name":"Default",
	    "bgBody":"000000",
	    "link":"DAB679",
	    "color":"ffffff",
	    "bgItem":"000000",
	    "title":"DAB679"
	  }
	</script>

	</head>
<body paddingwidth="0" paddingheight="0" bgcolor="#d1d3d4"  style=" margin:0 0 0 0; padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;" offset="0" toppadding="0" leftpadding="0">
  	
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableContent" align="center" bgcolor="#000000" style="font-family:Georgia, times, sans-serif;">
  <tbody>
    <tr>
      <td><table width="600" border="0" cellspacing="0" cellpadding="0" align="center" style="font-family:Georgia, times, sans-serif;" bgcolor="#000000" class="MainContainer">
  <tbody>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td valign="top" width="20" align="left">&nbsp;</td>
      <!--  =========================== The header ===========================  -->                
                
                
                <!--  =========================== The body ===========================  -->
      <td valign="top" align="center" width="560">
      		<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>

      <td class="movableContentContainer">


      	<div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
  				<tbody>
   					<tr>
      					<td><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" >
                        	<tr><td height="25">&nbsp;</td></tr>
                        <tr>
                          <td>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" >
                              <tr>

                                <td align="center" valign="middle">
                                  <div class="contentEditableContainer contentImageEditable">
                                    <div class="contentEditable" >
                                        <img src="https://eliteescortmadrid.es/images/Sin-título-1.jpg" alt="logo" data-default="placeholder" data-max-width="400" width="100%" height="100%" border="0">
                                    </div>
                                  </div>
                                </td>

                              </tr>
                            </table>
                          </td>  
                        </tr>
                      </table></td>
				    </tr>
				  </tbody>
			</table>
        </div>



        <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative; border-top: solid 1px #ffdf9c; border-bottom: solid 1px #ffdf9c;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
  
                       
                              <tr>

                                <td>
                                  <div class="contentEditableContainer contentImageEditable">
                                    <div class="contentEditable" >
                                      <img class="banner" src="https://eliteescortmadrid.es/images/slider01.png" alt="featured image" width="100%"  border="0">
                                    </div>
                                  </div>
                                </td>

                              </tr>
                       
			</table>
        </div>
	
<div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
              <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" >
              <tr>
                <td style="border:1px solid black;border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr><td height="25" colspan="3"></td></tr>
                    <tr>
                      <td width="30"></td>
                      <td width="503px" align="left" valign="top">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable" >
                            <h2 >Bienvenido a Elite Escort Madrid</h2>
                          </div>
                        </div>
                      </td>
                      <td width="2"></td>
                    </tr>
                    <tr><td height="8" colspan="3"></td></tr>
                    <tr>
                      <td width="30"></td>
                      <td width="50" align="justify" valign="top">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable" >
                            <p style="font-size:13px;">Nos complace presentar la mejor selección de escorts de lujo en Madrid, donde podrá contemplar azafatas acompañantes de alto standing, aunque queremos destacar que no son escorts profesionales tienen diversas ocupaciones, y muchas de ellas son estudiantes universitarias, que ofrecen sus servicios como escorts de alto nivel de forma esporádica, por consiguiente, son auténticas escorts GFE (Girlfriend Experience). Ha llegado el momento de cumplir sus sueños, confiando en nuestra agencia líder en excelencia y discreción.
                                </p>
                          </div>
                        </div>
                      </td>
                      <td width="25"></td>
                    </tr>
                    <tr><td height="25"></td></tr>
                  </table>
                </td>
              </tr>
              </table>
            </div>



<div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
              <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" >
              <tr>
                <td style="border:1px solid #333333;border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr><td height="25" colspan="3"></td></tr>
                    <tr>
                      <td width="30"></td>
                      <td width="503" align="left" valign="top">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable" >
                            <h2 >Estimado cliente</h2>
                          </div>
                        </div>
                      </td>
                      <td width="25"></td>
                    </tr>
                    <tr><td height="8" colspan="3"></td></tr>
                    <tr>
                      <td width="30"></td>
                      <td width="503" align="left" valign="top">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable" >
                            <p style="font-size:13px;">Gracias por preferinos '.$fila[nombre].', su nueva clave a sido registrada. Ya puede ingresar a nuestra ZONA AMIGA</p>
                            <br>
                            <span style="font-size:13px;">
                              <p >Recuerde que su datos de registro son los siguientes:</p>
                              <p>Usuario:&nbsp;&nbsp;&nbsp;'.$fila[usuario].'</p>
                              <p>Password:&nbsp;&nbsp;&nbsp;'.$pass.'</p>
                            </span>
                          </div>
                        </div>
                      </td>
                      <td width="25"></td>
                    </tr>
                    <tr><td height="25"></td></tr>
                  </table>
                </td>
              </tr>
              </table>
            </div>



            <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
            	<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#000000">
  <tbody>
    <tr>
      <td height="40" colspan="2"></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="274" valign="top" align="left" class="specbundle">
                <div class="contentEditableContainer contentImageEditable">
                  <div class="contentEditable" >
                   <img class="banner" src="https://eliteescortmadrid.es/images/Dilara/dilara03.png" alt="featured image" data-default="placeholder" data-max-width="400" height="500" width="333">
                 </div>
               </div>
             </td>
      <td valign="top" width="12" class="specbundle">&nbsp;</td>
      <td width="274" valign="top" align="right" class="specbundle">
              <div class="contentEditableContainer contentImageEditable">
                <div class="contentEditable" >
                 <img class="banner" src="https://eliteescortmadrid.es/images/Amanda/Amanda-11.png" alt="featured image" data-default="placeholder" data-max-width="400" height="500" width="333">
               </div>
             </div>
           </td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
  </tbody>
</table>
            </div>
            
            
            
            <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
            	<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr><td height="28"></td></tr>
      <tr>
        <td valign="top" align="center">
          <div class="contentEditableContainer contentTextEditable">
            <div class="contentEditable" >
              <p style="color:#A8B0B6; font-size:13px;line-height: 16px;">Este correo electrónico se envió a '.$email.' cuando se registró en eliteescortmadrid.com . Por favor, agréguenos a sus contactos para asegurarse de que los boletines informativos lleguen a su bandeja de entrada.
              </p>
            </div>
          </div>
        </td>
        </tr>
      </table>
            </div>
            <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
            	<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr><td height="28"></td></tr>
        <tr>
          <td valign="top" align="center">
            <div class="contentEditableContainer contentTextEditable">
              <div class="contentEditable" >
                <a target="_blank" href="[UNSUBSCRIBE]" style="color:#CCCCCC; font-size:13px;line-height: 20px;font-style:italic;">Unsubscribe</a>
              </div>
            </div>
          </td>
        </tr>
      </table>
            </div>
            <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
            	<tr><td height="28"></td></tr>
            </div>
      </td>
    </tr>
  </tbody>
</table>

      </td>
      <td valign="top" width="20">&nbsp;</td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
  </tbody>
</table>
  </body>
  </html>
	';


 	$mail->Body = $body;
  	$mail->AltBody = 'texto plano'; 
  
  	if(!$mail->Send()) { echo "Error: " . $mail->ErrorInfo; } else { $valor = 2;  }  

		$valor=2;
	}

echo $valor;
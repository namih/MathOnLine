<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>A Simple Responsive HTML Email</title>
		<style type="text/css">
			body {margin: 0; padding: 0; min-width: 100%!important;}
			img {height: auto;}
			.content {width: 100%; max-width: 600px;}
			.header {padding: 40px 30px 20px 30px;}
			.innerpadding {padding: 30px 30px 30px 30px;}
			.borderbottom {border-bottom: 1px solid #f2eeed;}
			.subhead {font-size: 15px; color: #000000; font-family: sans-serif; letter-spacing: 10px;}
			.h1, .h2, .bodycopy {color: #153643; font-family: sans-serif;}
			.h1 {font-size: 30px; line-height: 38px; font-weight: bold;}
			.h2 {padding: 0 0 15px 0; font-size: 24px; line-height: 28px; font-weight: bold;}
			.bodycopy {font-size: 16px; line-height: 22px;}
			.button {text-align: center; font-size: 18px; font-family: sans-serif; font-weight: bold; padding: 0 30px 0 30px;}
			.button a {color: #ffffff; text-decoration: none;}
			.footer {padding: 20px 30px 15px 30px;}
			.footercopy {font-family: sans-serif; font-size: 14px; color: #000000;}
			.footercopy a {color: #ffffff; text-decoration: underline;}
			@media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
				body[yahoo] .hide {display: none!important;}
				body[yahoo] .buttonwrapper {background-color: transparent!important;}
				body[yahoo] .button {padding: 0px!important;}
				body[yahoo] .button a {background-color: #e05443; padding: 15px 15px 13px!important;}
				body[yahoo] .unsubscribe {display: block; margin-top: 20px; padding: 10px 50px; background: #2f3942; border-radius: 5px; text-decoration: none!important; font-weight: bold;}
			}
		</style>
		</head>
		<body yahoo bgcolor="#ffffff">
			<table width="100%" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td>
						<!--[if (gte mso 9)|(IE)]>
						<table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
						<tr>
						<td>
						<![endif]-->
						<table bgcolor="#ffffff" class="content" align="center" cellpadding="0" cellspacing="0" border="0">
							<tr>
								<td bgcolor="#ffffff" class="header">
									<table width="70" align="left" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td height="70" style="padding: 0 20px 20px 0;">
												<img class="fix" src="<?php echo base_url() ?>/statics/img/logo_matenlinea/mate1.jpg" width="90" height="90" border="0" alt="" />
											</td>
										</tr>
									</table>
									<!--[if (gte mso 9)|(IE)]>
										<table width="425" align="left" cellpadding="0" cellspacing="0" border="0">
											<tr>
											<td>
									<![endif]-->
									<table class="col425" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%; max-width: 425px;">
										<tr>
											<td height="70">
												<table width="100%" border="0" cellspacing="0" cellpadding="0">
													<tr>
														<td class="subhead" style="padding: 0 0 0 3px;">
															Mate en Línea
														</td>
													</tr>
													<tr>
														<td class="h1" style="padding: 5px 0 0 0;">
															Mi Entrenador Personal en Matemáticas
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
									<!--[if (gte mso 9)|(IE)]>
										</td>
									</tr>
									</table>
									<![endif]-->
								</td>
							</tr>
							<tr>
								<td class="innerpadding borderbottom">
									<table width="100%" border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td class="h2">
												Recuperación de contraseña
											</td>
										</tr>
										<tr>
											<td class="bodycopy">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus adipiscing felis, sit amet blandit ipsum volutpat sed. Morbi porttitor, eget accumsan dictum, nisi libero ultricies ipsum, in posuere mauris neque at erat.
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td class="innerpadding borderbottom">
									<table width="115" align="left" border="0" cellpadding="0" cellspacing="0">  
										<tr>
											<td height="115" style="padding: 0 20px 20px 0;">
												<img class="fix" src="<?php echo base_url() ?>/statics/img/email/key.png" width="115" height="115" border="0" alt="" />
											</td>
										</tr>
									</table>
									<!--[if (gte mso 9)|(IE)]>
										<table width="380" align="left" cellpadding="0" cellspacing="0" border="0">
											<tr>
												<td>
									<![endif]-->
									<table class="col380" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%; max-width: 380px;">  
										<tr>
											<td>
												<table width="100%" border="0" cellspacing="0" cellpadding="0">
													<tr>
														<td class="bodycopy">
															<h3>Contraseña: <?php echo $password ?></h3>
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
									<!--[if (gte mso 9)|(IE)]>
										</td>
									</tr>
									</table>
									<![endif]-->
								</td>
							</tr>
							<tr>
								<td class="innerpadding bodycopy">
									<small>Este correo es informativo, favor no responder a esta dirección de correo, ya que no se encuentra habilitada para recibir mensajes.</small>
								</td>
							</tr>
							<tr>
								<td class="footer" bgcolor="#ffffff">
									<table width="100%" border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td align="right" style="padding: 20px 0 0 0;">
												<table border="0" cellspacing="0" cellpadding="0">
													<tr>
														<td width="37" style="text-align: center; padding: 0 10px 0 10px;">
															<a href="http://www.izt.uam.mx/">
																<img src="<?php echo base_url() ?>/statics/img/logo_uam/variacion6Izt.png" width="150" height="150" alt="UAM" border="0" />
															</a>
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<!--[if (gte mso 9)|(IE)]>
							</td>
						</tr>
						</table>
						<![endif]-->
					</td>
				</tr>
			</table>
		</body>
	</html>
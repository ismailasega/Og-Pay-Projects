<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from html.kodesolution.live/m/echarity/v2/demo/form-job-apply-style2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Dec 2019 13:20:28 GMT -->
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="eCharity - Nonprofit, Crowdfunding & Charity HTML5 Template" />
<meta name="keywords" content="Charity,Nonprofit,Crowdfunding,Donation & Fundraising" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>MuslimFoundation</title>

<!-- Favicon and Touch Icons -->
<!-- <link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144"> -->

<!-- Stylesheet -->
<link href="file:///D|/Users/i.asega/Downloads/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="file:///D|/Users/i.asega/Downloads/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="file:///D|/Users/i.asega/Downloads/css/animate.css" rel="stylesheet" type="text/css">
<link href="file:///D|/Users/i.asega/Downloads/css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="file:///D|/Users/i.asega/Downloads/css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="file:///D|/Users/i.asega/Downloads/css/style-main.css" rel="stylesheet" type="text/css">

<!-- CSS | Theme Color -->

<link href="file:///D|/Users/i.asega/Downloads/css/colors/theme-skin-orange.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="file:///D|/Users/i.asega/Downloads/css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="file:///D|/Users/i.asega/Downloads/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="file:///D|/Users/i.asega/Downloads/css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> --><!-- external javascripts -->
<script src="file:///D|/Users/i.asega/Downloads/js/jquery-2.2.4.min.js"></script>
<script src="file:///D|/Users/i.asega/Downloads/js/jquery-ui.min.js"></script>
<script src="file:///D|/Users/i.asega/Downloads/js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="file:///D|/Users/i.asega/Downloads/js/jquery-plugin-collection.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <i class="flaticon-charity-shelter font-60 text-theme-colored floating"></i>
      <h5 class="line-height-50 font-18">MHF...</h5>
    </div>
    <!-- <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div> -->
  </div>

  <!-- start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home" class="divider parallax layer-overlay" data-bg-img="images/bg/bg2.jpg">
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-push-3">
                <div class="text-center mb-60"><a href="#" class=""><img alt="" src="file:///D|/Users/i.asega/Downloads/images/logos.fw.png"></a>
                </div>
                <div class="bg-lightest border-1px p-30 mb-0">
                  <h3 class="text-theme-colored mt-0 pt-5"> Give What you Have</h3>
                  <hr>
                  <p>donatee to help helpless in this corona era.</p>
			                         <?php
                                  if(isset($_POST['donate'])){

                        //create a database insertion for payments logging
                                    ///
                                    ////
                                    ////

                            $paymentchannel = $_POST['paymentmode'];
                            $isysid = $_POST['isysid'];
                            $amount = $_POST['amount'];
                            $description = $_POST['description1'];
                            $description2 = 'description2'." ";
                            $language = $_POST['language'];
                            $countryOrign = $_POST['country'];

                            $country = 'UG';
                            $tunnel = 'isys';
                            $merchant_name = 'MuslimFoundation';
                            $akey = 'xxxxxxxx';
                            $original = urlencode('xxxxxxxxxxxxxxxxxxxx');
                            $decryptedOriginal = 'xxxxxxxxxxx';
                            $timestamp = time();
                            $rnd = "";

                        if($paymentchannel == 'UGMTNMOMODIR'){
                                 $currency = 'UGX';
                        }elseif($paymentchannel == 'UGXPRESSPAY'){
                                 $currency = 'UGX';
                        }elseif($paymentchannel=='UGAIRTELMODIR'){
                                 $currency = 'UGX';
                        }elseif($paymentchannel=='UGAFRICELLMO'){
                                $currency = 'UGX';
                        }elseif($paymentchannel=='UGIEACC'){
                                $currency = 'UGX';
                        }else{
                                $currency = 'UGX';
                            }


    $merchantResponseUrl = 'http://irgd.co.ug';

    $dataToComputeHash = $paymentchannel . "paymentchannel" . $isysid . "isysid" . $amount . "amount" . $timestamp . "timestamp" . $description . "description" . "" . "rnd" . $original . "original";

    $hash = strtoupper(hash_hmac("sha256", $dataToComputeHash, $decryptedOriginal));

                            $params = array('paymentchannel' => $paymentchannel,
                                'isysid' => $isysid,
                                'amount' => $amount,
                                'description' => $description,
                                'description2' => $description2,
                                'tunnel' => $tunnel,
                                'currency' => $currency,
                                'language' => $language,
                                'country' => $country,
                                'merchant_name' => $merchant_name,
                                'responseurl' => $merchantResponseUrl,
                                'akey' => $akey,
                                'original' => $original,
                                'hash' => $hash,
                                'timestamp' => $timestamp);

        $url = 'https://pay-it.mobi/globalpayit/pciglobal/WebForms/Payitcheckoutservice%20.aspx?' . http_build_query($params);

        echo "<META http-equiv=refresh content=0;URL=".$url.">";


                     }else{



                    //generate Transaction ID

                    function getTransactionID($length){
                     $token = "";
                     $codeNumbers = "123456789";
                     $max = strlen($codeNumbers);

                    for ($i=0; $i < $length; $i++) {
                        $token .= $codeNumbers[random_int(0, $max-1)];
                    }
                    return $token;
                }

                        ?>
                  <form  action="file:///D|/Users/i.asega/Downloads/pay.php" method="POST" >
				  <input type="hidden" name ="isysid" value="<?php echo getTransactionID(18); ?>" />
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="form_name">First Name <small>*</small></label>
                          <input id="form_name" name="fname" type="text" placeholder="Enter Name" required class="form-control">
                        </div>
                      </div>
					   <div class="col-sm-6">
                        <div class="form-group">
                          <label for="form_name">Last Name <small>*</small></label>
                          <input id="form_name" name="lname" type="text" placeholder="Enter Name" required class="form-control">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="form_email">Email <small>*</small></label>
                          <input id="form_email" name="email" class="form-control required email" type="email" placeholder="Enter Email">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="form_sex">Country<small>*</small></label>
                          <select name='country' id='cont' class='form-control required'>

										<optgroup label='Select Countries'>
											<option value='AF'>Afghanistan</option>
											<option value='AL'>Albania</option>
											<option value='DZ'>Algeria</option>
											<option value='AD'>Andorra</option>
											<option value='AO'>Angola</option>
											<option value='AI'>Anguilla</option>
											<option value='AQ'>Antarctica</option>
											<option value='AG'>Antigua and Barbuda</option>
											<option value='AR'>Argentina</option>
											<option value='AM'>Armenia</option>
											<option value='AW'>Aruba</option>
											<option value='AU'>Australia</option>
											<option value='AT'>Austria</option>
											<option value='AZ'>Azerbaijan</option>
											<option value='BS'>Bahamas</option>
											<option value='BH'>Bahrain</option>
											<option value='BD'>Bangladesh</option>
											<option value='BB'>Barbados</option>
											<option value='BY'>Belarus</option>
											<option value='BE'>Belgium</option>
											<option value='BZ'>Belize</option>
											<option value='BJ'>Benin</option>
											<option value='BM'>Bermuda</option>
											<option value='BT'>Bhutan</option>
											<option value='BO'>Bolivia</option>
											<option value='BA'>Bosnia and Herzegovina</option>
											<option value='BW'>Botswana</option>
											<option value='BR'>Brazil</option>
											<option value='IO'>British Indian Ocean</option>
											<option value='BN'>Brunei</option>
											<option value='BG'>Bulgaria</option>
											<option value='BF'>Burkina Faso</option>
											<option value='BI'>Burundi</option>
											<option value='KH'>Cambodia</option>
											<option value='CM'>Cameroon</option>
											<option value='CA'>Canada</option>
											<option value='CV'>Cape Verde</option>
											<option value='KY'>Cayman Islands</option>
											<option value='CF'>Central African Republic</option>
											<option value='TD'>Chad</option>
											<option value='CL'>Chile</option>
											<option value='CN'>China</option>
											<option value='CX'>Christmas Island</option>
											<option value='CC'>Cocos (Keeling) Islands</option>
											<option value='CO'>Colombia</option>
											<option value='KM'>Comoros</option>
											<option value='CD'>Congo, Democratic Republic of the</option>
											<option value='CG'>Congo, Republic of the</option>
											<option value='CK'>Cook Islands</option>
											<option value='CR'>Costa Rica</option>
											<option value='HR'>Croatia</option>
											<option value='CY'>Cyprus</option>
											<option value='CZ'>Czech Republic</option>
											<option value='DK'>Denmark</option>
											<option value='DJ'>Djibouti</option>
											<option value='DM'>Dominica</option>
											<option value='DO'>Dominican Republic</option>
											<option value='TL'>East Timor</option>
											<option value='EC'>Ecuador</option>
											<option value='EG'>Egypt</option>
											<option value='SV'>El Salvador</option>
											<option value='GQ'>Equatorial Guinea</option>
											<option value='ER'>Eritrea</option>
											<option value='EE'>Estonia</option>
											<option value='ET'>Ethiopia</option>
											<option value='FK'>Falkland Islands (Malvinas)</option>
											<option value='FO'>Faroe Islands</option>
											<option value='FJ'>Fiji</option>
											<option value='FI'>Finland</option>
											<option value='FR'>France</option>
											<option value='GF'>French Guiana</option>
											<option value='PF'>French Polynesia</option>
											<option value='GA'>Gabon</option>
											<option value='GM'>Gambia</option>
											<option value='GE'>Georgia</option>
											<option value='DE'>Germany</option>
											<option value='GH'>Ghana</option>
											<option value='GI'>Gibraltar</option>
											<option value='GR'>Greece</option>
											<option value='GL'>Greenland</option>
											<option value='GD'>Grenada</option>
											<option value='GP'>Guadeloupe</option>
											<option value='GT'>Guatemala</option>
											<option value='GN'>Guinea</option>
											<option value='GW'>Guinea-Bissau</option>
											<option value='GY'>Guyana</option>
											<option value='HT'>Haiti</option>
											<option value='HN'>Honduras</option>
											<option value='HK'>Hong Kong</option>
											<option value='HU'>Hungary</option>
											<option value='IS'>Iceland</option>
											<option value='IN'>India</option>
											<option value='ID'>Indonesia</option>
											<option value='IE'>Ireland</option>
											<option value='IL'>Israel</option>
											<option value='IT'>Italy</option>
											<option value='CI'>Ivory Coast</option>
											<option value='JM'>Jamaica</option>
											<option value='JP'>Japan</option>
											<option value='JO'>Jordan</option>
											<option value='KZ'>Kazakhstan</option>
											<option value='KE'>Kenya</option>
											<option value='KI'>Kiribati</option>
											<option value='KR'>Korea, South</option>
											<option value='KW'>Kuwait</option>
											<option value='KG'>Kyrgyzstan</option>
											<option value='LA'>Laos</option>
											<option value='LV'>Latvia</option>
											<option value='LB'>Lebanon</option>
											<option value='LS'>Lesotho</option>
											<option value='LI'>Liechtenstein</option>
											<option value='LT'>Lithuania</option>
											<option value='LU'>Luxembourg</option>
											<option value='MO'>Macau</option>
											<option value='MK'>Macedonia, Republic of</option>
											<option value='MG'>Madagascar</option>
											<option value='MW'>Malawi</option>
											<option value='MY'>Malaysia</option>
											<option value='MV'>Maldives</option>
											<option value='ML'>Mali</option>
											<option value='MT'>Malta</option>
											<option value='MH'>Marshall Islands</option>
											<option value='MQ'>Martinique</option>
											<option value='MR'>Mauritania</option>
											<option value='MU'>Mauritius</option>
											<option value='YT'>Mayotte</option>
											<option value='MX'>Mexico</option>
											<option value='FM'>Micronesia</option>
											<option value='MD'>Moldova</option>
											<option value='MC'>Monaco</option>
											<option value='MN'>Mongolia</option>
											<option value='ME'>Montenegro</option>
											<option value='MS'>Montserrat</option>
											<option value='MA'>Morocco</option>
											<option value='MZ'>Mozambique</option>
											<option value='NA'>Namibia</option>
											<option value='NR'>Nauru</option>
											<option value='NP'>Nepal</option>
											<option value='NL'>Netherlands</option>
											<option value='AN'>Netherlands Antilles</option>
											<option value='NC'>New Caledonia</option>
											<option value='NZ'>New Zealand</option>
											<option value='NI'>Nicaragua</option>
											<option value='NE'>Niger</option>
											<option value='NG'>Nigeria</option>
											<option value='NU'>Niue</option>
											<option value='NF'>Norfolk Island</option>
											<option value='NO'>Norway</option>
											<option value='OM'>Oman</option>
											<option value='PK'>Pakistan</option>
											<option value='PS'>Palestinian Territory</option>
											<option value='PA'>Panama</option>
											<option value='PG'>Papua New Guinea</option>
											<option value='PY'>Paraguay</option>
											<option value='PE'>Peru</option>
											<option value='PH'>Philippines</option>
											<option value='PN'>Pitcairn Island</option>
											<option value='PL'>Poland</option>
											<option value='PT'>Portugal</option>
											<option value='QA'>Qatar</option>
											<option value='RE'>R&eacute;union</option>
											<option value='RO'>Romania</option>
											<option value='RU'>Russia</option>
											<option value='RW'>Rwanda</option>
											<option value='SH'>Saint Helena</option>
											<option value='KN'>Saint Kitts and Nevis</option>
											<option value='LC'>Saint Lucia</option>
											<option value='PM'>Saint Pierre and Miquelon</option>
											<option value='VC'>Saint Vincent and the Grenadines</option>
											<option value='WS'>Samoa</option>
											<option value='SM'>San Marino</option>
											<option value='ST'>S&atilde;o Tome and Principe</option>
											<option value='SA'>Saudi Arabia</option>
											<option value='SN'>Senegal</option>
											<option value='RS'>Serbia</option>
											<option value='CS'>Serbia and Montenegro</option>
											<option value='SC'>Seychelles</option>
											<option value='SL'>Sierra Leon</option>
											<option value='SG'>Singapore</option>
											<option value='SK'>Slovakia</option>
											<option value='SI'>Slovenia</option>
											<option value='SB'>Solomon Islands</option>
											<option value='SO'>Somalia</option>
											<option value='ZA'>South Africa</option>
											<option value='GS'>South Georgia and the South Sandwich Islands</option>
											<option value='ES'>Spain</option>
											<option value='LK'>Sri Lanka</option>
											<option value='SR'>Suriname</option>
											<option value='SJ'>Svalbard and Jan Mayen</option>
											<option value='SZ'>Swaziland</option>
											<option value='SE'>Sweden</option>
											<option value='CH'>Switzerland</option>
											<option value='TW'>Taiwan</option>
											<option value='TJ'>Tajikistan</option>
											<option value='TZ'>Tanzania</option>
											<option value='TH'>Thailand</option>
											<option value='TG'>Togo</option>
											<option value='TK'>Tokelau</option>
											<option value='TO'>Tonga</option>
											<option value='TT'>Trinidad and Tobago</option>
											<option value='TN'>Tunisia</option>
											<option value='TR'>Turkey</option>
											<option value='TM'>Turkmenistan</option>
											<option value='TC'>Turks and Caicos Islands</option>
											<option value='TV'>Tuvalu</option>
											<option value='UG'>Uganda</option>
											<option value='UA'>Ukraine</option>
											<option value='AE'>United Arab Emirates</option>
											<option value='GB'>United Kingdom</option>
											<option value='US'>United States</option>
											<option value='UM'>United States Minor Outlying Islands</option>
											<option value='UY'>Uruguay</option>
											<option value='UZ'>Uzbekistan</option>
											<option value='VU'>Vanuatu</option>
											<option value='VA'>Vatican City</option>
											<option value='VE'>Venezuela</option>
											<option value='VN'>Vietnam</option>
											<option value='VG'>Virgin Islands, British</option>
											<option value='WF'>Wallis and Futuna</option>
											<option value='EH'>Western Sahara</option>
											<option value='YE'>Yemen</option>
											<option value='ZM'>Zambia</option>
											<option value='ZW'>Zimbabwe</option>
										</optgroup>
									</select>
                        </div>
                      </div>
					  <div class="col-sm-6">
                        <div class="form-group">
                          <label for="form_name">Phone Number <small>*</small></label>
                          <input id="form_name" name="phone" type="text" placeholder="Enter Name" required class="form-control">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="form_post">donation type<small>*</small></label>
                          <select id="form_post" name="description1" class="form-control required">
                            <option value="Finance Manager">food</option>
                            <option value="Area Manager">cash</option>
                            <option value="Country Manager">others</option>
                          </select>
                        </div>
                      </div>


                    </div>
                     <div class="form-group col-lg-12">
                                        <label>Enter Amount <small>*</small></label>
                                        <input type="number"  data-msg-required="Please enter Ammount." maxlength="100" class="form-control" name="amount" id="amount" required
                                        <?php if(isset($_GET['amountcalc'])){
                                            echo "readonly value='".$_GET['amountcalc']."'";
                                             }
                                             ?> >
                                    </div>
                    <script type="text/javascript">
							function paymentCheck() {

									      if (document.getElementById('visaCheck2').checked) {
									        document.getElementById('ifVisa2').style.visibility = 'visible';
									    }
									    else document.getElementById('ifVisa2').style.visibility = 'hidden';

									    if (document.getElementById('interswitchCheck').checked) {
									        document.getElementById('ifinterswitch').style.visibility = 'visible';
									    }
									    else document.getElementById('ifinterswitch').style.visibility = 'hidden';

									    if (document.getElementById('mtnCheck').checked) {
									        document.getElementById('ifMTN').style.visibility = 'visible';
									    }
									    else document.getElementById('ifMTN').style.visibility = 'hidden';

										if (document.getElementById('airtelCheck').checked) {
									        document.getElementById('ifAirtel').style.visibility = 'visible';
									    }
									    else document.getElementById('ifAirtel').style.visibility = 'hidden';

									    if (document.getElementById('africellCheck').checked) {
									        document.getElementById('ifAfricell').style.visibility = 'visible';
									    }
									    else document.getElementById('ifAfricell').style.visibility = 'hidden';



									}
								</script>

									<div class="form-row">
								<label>Payment Option *</label>

									<div class="form-group col-lg-12">


										&nbsp;&nbsp;
										<input type="radio" name="paymentmode" value="UGXPRESSPAY" id="visaCheck2" onclick="javascript:paymentCheck();">
										<img alt="" width="59" src="file:///D|/Users/i.asega/Downloads/logos/visa5.png">

										&nbsp;&nbsp;
										<input type="radio" name="paymentmode" value="UGIEACC" id="interswitchCheck" onclick="javascript:paymentCheck();">
										<img alt="" width="65" src="file:///D|/Users/i.asega/Downloads/logos/interswitch.jpg">

										&nbsp;&nbsp;
										<input type="radio" name="paymentmode" value="UGMTNMOMODIR" id="mtnCheck" onclick="javascript:paymentCheck();">
										<img alt="" width="59" src="file:///D|/Users/i.asega/Downloads/logos/mtn.png">

										&nbsp;&nbsp;
										<input type="radio" name="paymentmode" value="UGAIRTELMODIR" id="airtelCheck" onclick="javascript:paymentCheck();">
										<img alt="" width="59" src="file:///D|/Users/i.asega/Downloads/logos/airtel.fw.png">

										&nbsp;&nbsp;
										<input type="radio" name="paymentmode" value="UGAFRICELLMO" id="africellCheck" onclick="javascript:paymentCheck();">
										<img alt="" width="65" src="file:///D|/Users/i.asega/Downloads/logos/africell.png">



									</div>

								</div>


                              <div class="form-group">
                   <input id="form_botcheck" name="donate" class="form-control" type="hidden" value="" />
                      <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Donate</button>
                    </div>
                  </form>

                                <?php } ?>

                    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

  <!-- Footer -->
  <footer id="footer" class="footer bg-black-222">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="mb-0">Copyright &copy;2020 MHF. All Rights Reserved</p>
        </div>
      </div>
    </div>
    </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
    <script src="file:///D|/Users/i.asega/Downloads/js/custom.js"></script>

    </body>
</html>

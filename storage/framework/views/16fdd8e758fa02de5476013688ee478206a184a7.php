

<?php $__env->startSection('title', 'Register'); ?>


<?php $__env->startSection('content'); ?>

  <body style="background-image: url(./images/bg.png); background-repeat: no-repeat; background-size: cover;background-attachment: fixed; ">
    <section class="login-page">
        <div class="container">
            <a href="<?php echo e(url('home')); ?>"><img class="mt-5 mb-5 logo-login" src="images/logo.png"></a>
            <div class="row mb-4">
                <div class="col-md-6 order-2 order-sm-1">
                    <div class="card shadow-lg rounded m-auto" >
                        <div class="card-body">
                            <h3 class="font-weight-bold mb-2">Get Started</h3>
                            <div class="inner3">&nbsp;</div>
                            <a href="<?php echo e(url('login')); ?>"><h6 class="mt-2 color-a " >Already have an Account?</h6></a>
                            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="student-tab" data-toggle="tab" href="#student" role="tab" aria-controls="student" aria-selected="true"><i class="fa fa-graduation-cap"></i> Student</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="parent-tab" data-toggle="tab" href="#parent" role="tab" aria-controls="parent" aria-selected="false"><i class="fa fa-user"></i> Parent</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="student" role="tabpanel" aria-labelledby="student-tab">
                                    <form method="POST" action="<?php echo e(route('guest.register')); ?>" class="js-form form">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="role" value="user">
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <label class="text-muted h8" >First Name</label>
                                                <input class="form-control bg-light" type="text" name="fname"  style="height: 2.2rem;" data-validate-field="fname" value="<?php echo e(old('fname')); ?>">
                                                <?php echo $errors->first('fname', '<label id="fname-error" class="text-danger" for="fname">:message</label>'); ?>

                                            </div>
                                            <div class="col-md-6">
                                                <label class="text-muted h8" >Last Name</label>
                                                <input class="form-control bg-light" type="text" name="lname"  style="height: 2.2rem;" data-validate-field="lname" value="<?php echo e(old('lname')); ?>">
                                                <?php echo $errors->first('lname', '<label id="lname-error" class="text-danger" for="lname">:message</label>'); ?>

                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <label class="text-muted h8" >Email</label>
                                                <input class="form-control bg-light" type="text" name="email"  style="height: 2.2rem;" data-validate-field="email" value="<?php echo e(old('email')); ?>">
                                                <?php echo $errors->first('email', '<label id="email-error" class="text-danger" for="email">:message</label>'); ?>

                                            </div>
                                            <div class="col-md-6">
                                                <label class="text-muted h8" >Confirm Email</label>
                                                <input class="form-control bg-light" type="text" name="email_confirmation"  style="height: 2.2rem;" value="">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <label class="text-muted h8" >Password</label>
                                                <input class="form-control bg-light" type="password" name="password"  style="height: 2.2rem;" data-validate-field="password" id="password">
                                                <?php echo $errors->first('password', '<label id="password-error" class="text-danger" for="password">:message</label>'); ?>

                                            </div>
                                            <div class="col-md-6">
                                                <label class="text-muted h8" >Confirm Password</label>
                                                <input class="form-control bg-light" type="password" name="password_confirmation"  style="height: 2.2rem;" data-validate-field="password_confirmation">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <label class="text-muted h8" >City</label>
                                                <input class="form-control bg-light" type="text" name="city"  style="height: 2.2rem;" data-validate-field="city" id="city">
                                                <?php echo $errors->first('city', '<label id="city-error" class="text-danger" for="city">:message</label>'); ?>

                                            </div>
                                            <div class="col-md-6">
                                                <label class="text-muted h8" >Country</label>

                                               <!--  <input class="form-control bg-light" type="text" name="country"  style="height: 2.2rem;" data-validate-field="country" id="country"> -->


                                                <select class="form-control bg-light" id="country" name="country"  style="height: 2.2rem;" data-validate-field="country" id="country">
                                                    <option value="AF-Afghanistan">Afghanistan</option>
                                                    <option value="AX-Islands">Åland Islands</option>
                                                    <option value="AL-Albania">Albania</option>
                                                    <option value="DZ-Algeria">Algeria</option>
                                                    <option value="AS-American Samoa">American Samoa</option>
                                                    <option value="AD-Andorra">Andorra</option>
                                                    <option value="AO-Angola">Angola</option>
                                                    <option value="AI-Anguilla">Anguilla</option>
                                                    <option value="AQ-Antarctica">Antarctica</option>
                                                    <option value="AG-Antigua and Barbuda">Antigua and Barbuda</option>
                                                    <option value="AR-Argentina">Argentina</option>
                                                    <option value="AM-Armenia">Armenia</option>
                                                    <option value="AW-Aruba">Aruba</option>
                                                    <option value="AU-Australia">Australia</option>
                                                    <option value="AT-Austria">Austria</option>
                                                    <option value="AZ-Azerbaijan">Azerbaijan</option>
                                                    <option value="BS-Bahamas">Bahamas</option>
                                                    <option value="BH-Bahrain">Bahrain</option>
                                                    <option value="BD-Bangladesh">Bangladesh</option>
                                                    <option value="BB-Barbados">Barbados</option>
                                                    <option value="BY-Belarus">Belarus</option>
                                                    <option value="BE-Belgium">Belgium</option>
                                                    <option value="BZ-Belize">Belize</option>
                                                    <option value="BJ-Benin">Benin</option>
                                                    <option value="BM-Bermuda">Bermuda</option>
                                                    <option value="BT-Bhutan">Bhutan</option>
                                                    <option value="BO-Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                                                    <option value="BQ-Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                                    <option value="BA-Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                    <option value="BW-Botswana">Botswana</option>
                                                    <option value="BV-Bouvet Island">Bouvet Island</option>
                                                    <option value="BR-Brazil">Brazil</option>
                                                    <option value="IO-British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                    <option value="BN-Brunei Darussalam">Brunei Darussalam</option>
                                                    <option value="BG-Bulgaria">Bulgaria</option>
                                                    <option value="BF-Burkina Faso">Burkina Faso</option>
                                                    <option value="BI-Burundi">Burundi</option>
                                                    <option value="KH-Cambodia">Cambodia</option>
                                                    <option value="CM-Cameroon">Cameroon</option>
                                                    <option value="CA-Canada" selected="selected">Canada</option>
                                                    <option value="CV-Cape Verde">Cape Verde</option>
                                                    <option value="KY-Cayman Islands">Cayman Islands</option>
                                                    <option value="CF-Central African Republic">Central African Republic</option>
                                                    <option value="TD-Chad">Chad</option>
                                                    <option value="CL-Chile">Chile</option>
                                                    <option value="CN-China">China</option>
                                                    <option value="CX-Christmas Island">Christmas Island</option>
                                                    <option value="CC-Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                    <option value="CO-Colombia">Colombia</option>
                                                    <option value="KM-Comoros">Comoros</option>
                                                    <option value="CG-Congo">Congo</option>
                                                    <option value="CD-Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                                    <option value="CK-Cook Islands">Cook Islands</option>
                                                    <option value="CR-Costa Rica">Costa Rica</option>
                                                    <option value="CI-Côte d'Ivoire">Côte d'Ivoire</option>
                                                    <option value="HR-Croatia">Croatia</option>
                                                    <option value="CU-Cuba">Cuba</option>
                                                    <option value="CW-Curaçao">Curaçao</option>
                                                    <option value="CY-Cyprus">Cyprus</option>
                                                    <option value="CZ-Czech Republic">Czech Republic</option>
                                                    <option value="DK-Denmark">Denmark</option>
                                                    <option value="DJ-Djibouti">Djibouti</option>
                                                    <option value="DM-Dominica">Dominica</option>
                                                    <option value="DO-Dominican Republic">Dominican Republic</option>
                                                    <option value="EC-Ecuador">Ecuador</option>
                                                    <option value="EG-Egypt">Egypt</option>
                                                    <option value="SV-El Salvador">El Salvador</option>
                                                    <option value="GQ-Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="ER-Eritrea">Eritrea</option>
                                                    <option value="EE-Estonia">Estonia</option>
                                                    <option value="ET-Ethiopia">Ethiopia</option>
                                                    <option value="FK-Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                    <option value="FO-Faroe Islands">Faroe Islands</option>
                                                    <option value="FJ-Fiji">Fiji</option>
                                                    <option value="FI-Finland">Finland</option>
                                                    <option value="FR-France">France</option>
                                                    <option value="GF-French Guiana">French Guiana</option>
                                                    <option value="PF-French Polynesia">French Polynesia</option>
                                                    <option value="TF-French Southern Territories">French Southern Territories</option>
                                                    <option value="GA-Gabon">Gabon</option>
                                                    <option value="GM-Gambia">Gambia</option>
                                                    <option value="GE-Georgia">Georgia</option>
                                                    <option value="DE-Germany">Germany</option>
                                                    <option value="GH-Ghana">Ghana</option>
                                                    <option value="GI-Gibraltar">Gibraltar</option>
                                                    <option value="GR-Greece">Greece</option>
                                                    <option value="GL-Greenland">Greenland</option>
                                                    <option value="GD-Grenada">Grenada</option>
                                                    <option value="GP-Guadeloupe">Guadeloupe</option>
                                                    <option value="GU-Guam">Guam</option>
                                                    <option value="GT-Guatemala">Guatemala</option>
                                                    <option value="GG-Guernsey">Guernsey</option>
                                                    <option value="GN-Guinea">Guinea</option>
                                                    <option value="GW-Guinea Bissau">Guinea Bissau</option>
                                                    <option value="GY-Guyana">Guyana</option>
                                                    <option value="HT-Haiti">Haiti</option>
                                                    <option value="HM-Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                                                    <option value="VA-Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                    <option value="HN-Honduras">Honduras</option>
                                                    <option value="HK-Hong Kong">Hong Kong</option>
                                                    <option value="HU-Hungary">Hungary</option>
                                                    <option value="IS-Iceland">Iceland</option>
                                                    <option value="IN-India">India</option>
                                                    <option value="ID-Indonesia">Indonesia</option>
                                                    <option value="IR-Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                    <option value="IQ-Iraq">Iraq</option>
                                                    <option value="IE-Ireland">Ireland</option>
                                                    <option value="IM-Isle of Man">Isle of Man</option>
                                                    <option value="IL-Israel">Israel</option>
                                                    <option value="IT-Italy">Italy</option>
                                                    <option value="JM-Jamaica">Jamaica</option>
                                                    <option value="JP-Japan">Japan</option>
                                                    <option value="JE-Jersey">Jersey</option>
                                                    <option value="JO-Jordan">Jordan</option>
                                                    <option value="KZ-Kazakhstan">Kazakhstan</option>
                                                    <option value="KE-Kenya">Kenya</option>
                                                    <option value="KI-Kiribati">Kiribati</option>
                                                    <option value="KP-Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                    <option value="KR-Korea, Republic of">Korea, Republic of</option>
                                                    <option value="KW-Kuwait">Kuwait</option>
                                                    <option value="KG-Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="LA-Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                    <option value="LV-Latvia">Latvia</option>
                                                    <option value="LB-Lebanon">Lebanon</option>
                                                    <option value="LS-Lesotho">Lesotho</option>
                                                    <option value="LR-Liberia">Liberia</option>
                                                    <option value="LY-Libya">Libya</option>
                                                    <option value="LI-Liechtenstein">Liechtenstein</option>
                                                    <option value="LT-Lithuania">Lithuania</option>
                                                    <option value="LU-Luxembourg">Luxembourg</option>
                                                    <option value="MO-Macao">Macao</option>
                                                    <option value="MK-Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option>
                                                    <option value="MG-Madagascar">Madagascar</option>
                                                    <option value="MW-Malawi">Malawi</option>
                                                    <option value="MY-Malaysia">Malaysia</option>
                                                    <option value="MV-Maldives">Maldives</option>
                                                    <option value="ML-Mali">Mali</option>
                                                    <option value="MT-Malta">Malta</option>
                                                    <option value="MH-Marshall Islands">Marshall Islands</option>
                                                    <option value="MQ-Martinique">Martinique</option>
                                                    <option value="MR-Mauritania">Mauritania</option>
                                                    <option value="MU-Mauritius">Mauritius</option>
                                                    <option value="YT-Mayotte">Mayotte</option>
                                                    <option value="MX-Mexico">Mexico</option>
                                                    <option value="FM-Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                    <option value="MD-Moldova, Republic of">Moldova, Republic of</option>
                                                    <option value="MC-Monaco">Monaco</option>
                                                    <option value="MN-Mongolia">Mongolia</option>
                                                    <option value="ME-Montenegro">Montenegro</option>
                                                    <option value="MS-Montserrat">Montserrat</option>
                                                    <option value="MA-Morocco">Morocco</option>
                                                    <option value="MZ-Mozambique">Mozambique</option>
                                                    <option value="MM-Myanmar">Myanmar</option>
                                                    <option value="NA-Namibia">Namibia</option>
                                                    <option value="NR-Nauru">Nauru</option>
                                                    <option value="NP-Nepal">Nepal</option>
                                                    <option value="NL-Netherlands">Netherlands</option>
                                                    <option value="NC-New Caledonia">New Caledonia</option>
                                                    <option value="NZ-New Zealand">New Zealand</option>
                                                    <option value="NI-Nicaragua">Nicaragua</option>
                                                    <option value="NE-Niger">Niger</option>
                                                    <option value="NG-Nigeria">Nigeria</option>
                                                    <option value="NU-Niue">Niue</option>
                                                    <option value="NF-Norfolk Island">Norfolk Island</option>
                                                    <option value="MP-Northern Mariana Islands">Northern Mariana Islands</option>
                                                    <option value="NO-Norway">Norway</option>
                                                    <option value="OM-Oman">Oman</option>
                                                    <option value="PK-Pakistan">Pakistan</option>
                                                    <option value="PW-Palau">Palau</option>
                                                    <option value="PS-Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                    <option value="PA-Panama">Panama</option>
                                                    <option value="PG-Papua New Guinea">Papua New Guinea</option>
                                                    <option value="PY-Paraguay">Paraguay</option>
                                                    <option value="PE-Peru">Peru</option>
                                                    <option value="PH-Philippines">Philippines</option>
                                                    <option value="PN-Pitcairn">Pitcairn</option>
                                                    <option value="PL-Poland">Poland</option>
                                                    <option value="PT-Portugal">Portugal</option>
                                                    <option value="PR-Puerto Rico">Puerto Rico</option>
                                                    <option value="QA-Qatar">Qatar</option>
                                                    <option value="RE-Réunion">Réunion</option>
                                                    <option value="RO-Romania">Romania</option>
                                                    <option value="RU-Russian Federation">Russian Federation</option>
                                                    <option value="RW-Rwanda">Rwanda</option>
                                                    <option value="BL-Saint Barthélemy">Saint Barthélemy</option>
                                                    <option value="SH-Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                                                    <option value="KN-Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                    <option value="LC-Saint Lucia">Saint Lucia</option>
                                                    <option value="MF-Saint Martin (French part)">Saint Martin (French part)</option>
                                                    <option value="PM-Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                    <option value="VC-Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                    <option value="WS-Samoa">Samoa</option>
                                                    <option value="SM-San Marino">San Marino</option>
                                                    <option value="ST-Sao Tome and Principe">Sao Tome and Principe</option>
                                                    <option value="SA-Saudi Arabia">Saudi Arabia</option>
                                                    <option value="SN-Senegal">Senegal</option>
                                                    <option value="RS-Serbia">Serbia</option>
                                                    <option value="SC-Seychelles">Seychelles</option>
                                                    <option value="SL-Sierra Leone">Sierra Leone</option>
                                                    <option value="SG-Singapore">Singapore</option>
                                                    <option value="SX-Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                                                    <option value="SK-Slovakia">Slovakia</option>
                                                    <option value="SI-Slovenia">Slovenia</option>
                                                    <option value="SB-Solomon Islands">Solomon Islands</option>
                                                    <option value="SO-Somalia">Somalia</option>
                                                    <option value="ZA-South Africa">South Africa</option>
                                                    <option value="GS-South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                                    <option value="SS-South Sudan">South Sudan</option>
                                                    <option value="ES-Spain">Spain</option>
                                                    <option value="LK-Sri Lanka">Sri Lanka</option>
                                                    <option value="SD-Sudan">Sudan</option>
                                                    <option value="SR-Suriname">Suriname</option>
                                                    <option value="SJ-Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                    <option value="SZ-Swaziland">Swaziland</option>
                                                    <option value="SE-Sweden">Sweden</option>
                                                    <option value="CH-Switzerland">Switzerland</option>
                                                    <option value="SY-Syrian Arab Republic">Syrian Arab Republic</option>
                                                    <option value="TW-Taiwan, Province of China">Taiwan, Province of China</option>
                                                    <option value="TJ-Tajikistan">Tajikistan</option>
                                                    <option value="TZ-Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                    <option value="TH-Thailand">Thailand</option>
                                                    <option value="TL-Timor Leste">Timor Leste</option>
                                                    <option value="TG-Togo">Togo</option>
                                                    <option value="TK-Tokelau">Tokelau</option>
                                                    <option value="TO-Tonga">Tonga</option>
                                                    <option value="TT-Trinidad and Tobago">Trinidad and Tobago</option>
                                                    <option value="TN-Tunisia">Tunisia</option>
                                                    <option value="TR-Turkey">Turkey</option>
                                                    <option value="TM-Turkmenistan">Turkmenistan</option>
                                                    <option value="TC-Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                    <option value="TV-Tuvalu">Tuvalu</option>
                                                    <option value="UG-Uganda">Uganda</option>
                                                    <option value="UA-Ukraine">Ukraine</option>
                                                    <option value="AE-United Arab Emirates">United Arab Emirates</option>
                                                    <option value="GB-United Kingdom">United Kingdom</option>
                                                    <option value="US-United States" >United States</option>
                                                    <option value="UM-United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                    <option value="UY-Uruguay">Uruguay</option>
                                                    <option value="UZ-Uzbekistan">Uzbekistan</option>
                                                    <option value="VU-Vanuatu">Vanuatu</option>
                                                    <option value="VE-Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
                                                    <option value="VN-Viet Nam">Viet Nam</option>
                                                    <option value="VG-Virgin Islands, British">Virgin Islands, British</option>
                                                    <option value="VI-Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                    <option value="WF-Wallis and Futuna">Wallis and Futuna</option>
                                                    <option value="EH-Western Sahara">Western Sahara</option>
                                                    <option value="YE-Yemen">Yemen</option>
                                                    <option value="ZM-Zambia">Zambia</option>
                                                    <option value="ZW-Zimbabwe">Zimbabwe</option>
                                                </select>
                                                <?php echo $errors->first('country', '<label id="country-error" class="text-danger" for="country">:message</label>'); ?>

                                            </div>
                                            <div class="col-md-12">
                                                <label class="text-muted h8" >DOB</label>
                                                <input class="form-control bg-light datepicker student_dob" type="text" name="dob"  style="height: 2.2rem;" value="" required>
                                                <div class="dob_error text-danger" style="display: none;">
                                                    You are not allowed to register, Please ask your parents to do so!
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label class="text-muted h8" >TimeZone</label>
                                                <select name="timezone" class="form-control">
                                                    <option value="0">--select timezone--</option>
                                                    <option value='Pacific/Midway' >(UTC-11:00) Midway Island</option>
                                                    <option value='Pacific/Samoa' >(UTC-11:00) Samoa</option>
                                                    <option value='Pacific/Honolulu' >(UTC-10:00) Hawaii</option>
                                                    <option value='US/Alaska' >(UTC-09:00) Alaska</option>
                                                      <option value='America/Los_Angeles' >(UTC-08:00) Pacific Time (US &amp; Canada)</option>
                                                    <option value='America/Tijuana' >(UTC-08:00) Tijuana</option>
                                                    <option value='US/Arizona' >(UTC-07:00) Arizona</option>
                                                    <option value='America/Chihuahua' >(UTC-07:00) Chihuahua</option>
                                                    <option value='America/Chihuahua' >(UTC-07:00) La Paz</option>
                                                    <option value='America/Mazatlan' >(UTC-07:00) Mazatlan</option>
                                                    <option value='US/Mountain' >(UTC-07:00) Mountain Time (US &amp; Canada)</option>
                                                    <option value='America/Managua' >(UTC-06:00) Central America</option>
                                                    <option value='US/Central' >(UTC-06:00) Central Time (US &amp; Canada)</option>
                                                    <option value='America/Mexico_City' >(UTC-06:00) Guadalajara</option>
                                                    <option value='America/Mexico_City' >(UTC-06:00) Mexico City</option>
                                                    <option value='America/Monterrey' >(UTC-06:00) Monterrey</option>
                                                    <option value='Canada/Saskatchewan' >(UTC-06:00) Saskatchewan</option>
                                                    <option value='America/Bogota' >(UTC-05:00) Bogota</option>
                                                    <option value='US/Eastern' >(UTC-05:00) Eastern Time (US &amp; Canada)</option>
                                                    <option value='US/East-Indiana' >(UTC-05:00) Indiana (East)</option>
                                                    <option value='America/Lima' >(UTC-05:00) Lima</option>
                                                    <option value='America/Bogota' >(UTC-05:00) Quito</option>
                                                    <option value='Canada/Atlantic' >(UTC-04:00) Atlantic Time (Canada)</option>
                                                    <option value='America/Caracas' >(UTC-04:30) Caracas</option>
                                                    <option value='America/La_Paz' >(UTC-04:00) La Paz</option>
                                                    <option value='America/Santiago' >(UTC-04:00) Santiago</option>
                                                    <option value='Canada/Newfoundland' >(UTC-03:30) Newfoundland</option>
                                                    <option value='America/Sao_Paulo' >(UTC-03:00) Brasilia</option>
                                                    <option value='America/Argentina/Buenos_Aires' >(UTC-03:00) Buenos Aires</option>
                                                    <option value='America/Argentina/Buenos_Aires' >(UTC-03:00) Georgetown</option>
                                                    <option value='America/Godthab' >(UTC-03:00) Greenland</option>
                                                    <option value='America/Noronha' >(UTC-02:00) Mid-Atlantic</option>
                                                    <option value='Atlantic/Azores' >(UTC-01:00) Azores</option>
                                                    <option value='Atlantic/Cape_Verde' >(UTC-01:00) Cape Verde Is.</option>
                                                    <option value='Africa/Casablanca' >(UTC+00:00) Casablanca</option>
                                                    <option value='Europe/London' >(UTC+00:00) Edinburgh</option>
                                                    <option value='Etc/Greenwich' >(UTC+00:00) Greenwich Mean Time : Dublin</option>
                                                    <option value='Europe/Lisbon' >(UTC+00:00) Lisbon</option>
                                                    <option value='Europe/London' >(UTC+00:00) London</option>
                                                    <option value='Africa/Monrovia' >(UTC+00:00) Monrovia</option>
                                                    <option value='UTC' >(UTC+00:00) UTC</option>
                                                    <option value='Europe/Amsterdam' >(UTC+01:00) Amsterdam</option>
                                                    <option value='Europe/Belgrade' >(UTC+01:00) Belgrade</option>
                                                    <option value='Europe/Berlin' >(UTC+01:00) Berlin</option>
                                                    <option value='Europe/Berlin' >(UTC+01:00) Bern</option>
                                                    <option value='Europe/Bratislava' >(UTC+01:00) Bratislava</option>
                                                    <option value='Europe/Brussels' >(UTC+01:00) Brussels</option>
                                                    <option value='Europe/Budapest' >(UTC+01:00) Budapest</option>
                                                    <option value='Europe/Copenhagen' >(UTC+01:00) Copenhagen</option>
                                                    <option value='Europe/Ljubljana' >(UTC+01:00) Ljubljana</option>
                                                    <option value='Europe/Madrid' >(UTC+01:00) Madrid</option>
                                                    <option value='Europe/Paris' >(UTC+01:00) Paris</option>
                                                    <option value='Europe/Prague' >(UTC+01:00) Prague</option>
                                                    <option value='Europe/Rome' >(UTC+01:00) Rome</option>
                                                    <option value='Europe/Sarajevo' >(UTC+01:00) Sarajevo</option>
                                                    <option value='Europe/Skopje' >(UTC+01:00) Skopje</option>
                                                    <option value='Europe/Stockholm' >(UTC+01:00) Stockholm</option>
                                                    <option value='Europe/Vienna' >(UTC+01:00) Vienna</option>
                                                    <option value='Europe/Warsaw' >(UTC+01:00) Warsaw</option>
                                                    <option value='Africa/Lagos' >(UTC+01:00) West Central Africa</option>
                                                    <option value='Europe/Zagreb' >(UTC+01:00) Zagreb</option>
                                                    <option value='Europe/Athens' >(UTC+02:00) Athens</option>
                                                    <option value='Europe/Bucharest' >(UTC+02:00) Bucharest</option>
                                                    <option value='Africa/Cairo' >(UTC+02:00) Cairo</option>
                                                    <option value='Africa/Harare' >(UTC+02:00) Harare</option>
                                                    <option value='Europe/Helsinki' >(UTC+02:00) Helsinki</option>
                                                    <option value='Europe/Istanbul' >(UTC+02:00) Istanbul</option>
                                                    <option value='Asia/Jerusalem' >(UTC+02:00) Jerusalem</option>
                                                    <option value='Europe/Helsinki' >(UTC+02:00) Kyiv</option>
                                                    <option value='Africa/Johannesburg' >(UTC+02:00) Pretoria</option>
                                                    <option value='Europe/Riga' >(UTC+02:00) Riga</option>
                                                    <option value='Europe/Sofia' >(UTC+02:00) Sofia</option>
                                                    <option value='Europe/Tallinn' >(UTC+02:00) Tallinn</option>
                                                    <option value='Europe/Vilnius' >(UTC+02:00) Vilnius</option>
                                                    <option value='Asia/Baghdad' >(UTC+03:00) Baghdad</option>
                                                    <option value='Asia/Kuwait' >(UTC+03:00) Kuwait</option>
                                                    <option value='Europe/Minsk' >(UTC+03:00) Minsk</option>
                                                    <option value='Africa/Nairobi' >(UTC+03:00) Nairobi</option>
                                                    <option value='Asia/Riyadh' >(UTC+03:00) Riyadh</option>
                                                    <option value='Europe/Volgograd' >(UTC+03:00) Volgograd</option>
                                                    <option value='Asia/Tehran' >(UTC+03:30) Tehran</option>
                                                    <option value='Asia/Muscat' >(UTC+04:00) Abu Dhabi</option>
                                                    <option value='Asia/Baku' >(UTC+04:00) Baku</option>
                                                    <option value='Europe/Moscow' >(UTC+04:00) Moscow</option>
                                                    <option value='Asia/Muscat' >(UTC+04:00) Muscat</option>
                                                    <option value='Europe/Moscow' >(UTC+04:00) St. Petersburg</option>
                                                    <option value='Asia/Tbilisi' >(UTC+04:00) Tbilisi</option>
                                                    <option value='Asia/Yerevan' >(UTC+04:00) Yerevan</option>
                                                    <option value='Asia/Kabul' >(UTC+04:30) Kabul</option>
                                                    <option value='Asia/Karachi' >(UTC+05:00) Islamabad</option>
                                                    <option value='Asia/Karachi' >(UTC+05:00) Karachi</option>
                                                    <option value='Asia/Tashkent' >(UTC+05:00) Tashkent</option>
                                                    <option value='Asia/Calcutta' >(UTC+05:30) Chennai</option>
                                                    <option value='Asia/Kolkata' >(UTC+05:30) Kolkata</option>
                                                    <option value='Asia/Calcutta' >(UTC+05:30) Mumbai</option>
                                                    <option value='Asia/Calcutta' >(UTC+05:30) New Delhi</option>
                                                    <option value='Asia/Calcutta' >(UTC+05:30) Sri Jayawardenepura</option>
                                                    <option value='Asia/Katmandu' >(UTC+05:45) Kathmandu</option>
                                                    <option value='Asia/Almaty' >(UTC+06:00) Almaty</option>
                                                    <option value='Asia/Dhaka' >(UTC+06:00) Astana</option>
                                                    <option value='Asia/Dhaka' >(UTC+06:00) Dhaka</option>
                                                    <option value='Asia/Yekaterinburg' >(UTC+06:00) Ekaterinburg</option>
                                                    <option value='Asia/Rangoon' >(UTC+06:30) Rangoon</option>
                                                    <option value='Asia/Bangkok' >(UTC+07:00) Bangkok</option>
                                                    <option value='Asia/Bangkok' >(UTC+07:00) Hanoi</option>
                                                    <option value='Asia/Jakarta' >(UTC+07:00) Jakarta</option>
                                                    <option value='Asia/Novosibirsk' >(UTC+07:00) Novosibirsk</option>
                                                    <option value='Asia/Hong_Kong' >(UTC+08:00) Beijing</option>
                                                    <option value='Asia/Chongqing' >(UTC+08:00) Chongqing</option>
                                                    <option value='Asia/Hong_Kong' >(UTC+08:00) Hong Kong</option>
                                                    <option value='Asia/Krasnoyarsk' >(UTC+08:00) Krasnoyarsk</option>
                                                    <option value='Asia/Kuala_Lumpur' >(UTC+08:00) Kuala Lumpur</option>
                                                    <option value='Australia/Perth' >(UTC+08:00) Perth</option>
                                                    <option value='Asia/Singapore' >(UTC+08:00) Singapore</option>
                                                    <option value='Asia/Taipei' >(UTC+08:00) Taipei</option>
                                                    <option value='Asia/Ulan_Bator' >(UTC+08:00) Ulaan Bataar</option>
                                                    <option value='Asia/Urumqi' >(UTC+08:00) Urumqi</option>
                                                    <option value='Asia/Irkutsk' >(UTC+09:00) Irkutsk</option>
                                                    <option value='Asia/Tokyo' >(UTC+09:00) Osaka</option>
                                                    <option value='Asia/Tokyo' >(UTC+09:00) Sapporo</option>
                                                    <option value='Asia/Seoul' >(UTC+09:00) Seoul</option>
                                                    <option value='Asia/Tokyo' >(UTC+09:00) Tokyo</option>
                                                    <option value='Australia/Adelaide' >(UTC+09:30) Adelaide</option>
                                                    <option value='Australia/Darwin' >(UTC+09:30) Darwin</option>
                                                    <option value='Australia/Brisbane' >(UTC+10:00) Brisbane</option>
                                                    <option value='Australia/Canberra' >(UTC+10:00) Canberra</option>
                                                    <option value='Pacific/Guam' >(UTC+10:00) Guam</option>
                                                    <option value='Australia/Hobart' >(UTC+10:00) Hobart</option>
                                                    <option value='Australia/Melbourne' >(UTC+10:00) Melbourne</option>
                                                    <option value='Pacific/Port_Moresby' >(UTC+10:00) Port Moresby</option>
                                                    <option value='Australia/Sydney' >(UTC+10:00) Sydney</option>
                                                    <option value='Asia/Yakutsk' >(UTC+10:00) Yakutsk</option>
                                                    <option value='Asia/Vladivostok' >(UTC+11:00) Vladivostok</option>
                                                    <option value='Pacific/Auckland' >(UTC+12:00) Auckland</option>
                                                    <option value='Pacific/Fiji' >(UTC+12:00) Fiji</option>
                                                    <option value='Pacific/Kwajalein' >(UTC+12:00) International Date Line West</option>
                                                    <option value='Asia/Kamchatka' >(UTC+12:00) Kamchatka</option>
                                                    <option value='Asia/Magadan' >(UTC+12:00) Magadan</option>
                                                    <option value='Pacific/Fiji' >(UTC+12:00) Marshall Is.</option>
                                                    <option value='Asia/Magadan' >(UTC+12:00) New Caledonia</option>
                                                    <option value='Asia/Magadan' >(UTC+12:00) Solomon Is.</option>
                                                    <option value='Pacific/Auckland' >(UTC+12:00) Wellington</option>
                                                    <option value='Pacific/Tongatapu' >(UTC+13:00) Nuku'alofa</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-0 pb-0">
                                            <div class="form-check  ml-3 mt-4">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="tos" data-validate-field="tos" >
                                                <label class="form-check-label" for="exampleCheck1">I accept the <a href="#" style="text-decoration: underline;" data-toggle="modal" data-target="#exampleModalCenterOne">terms and conditions.</a> </label>
                                                <?php echo $errors->first('tos', '<label id="tos-error" class="text-danger" for="tos">:message</label>'); ?>

                                            </div>
                                        </div>
                                        <div class="row mt-0 pt-0">
                                            <div class="form-check  ml-3 mb-3">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck2" name="subscriber" data-validate-field="subscriber" >
                                                <label class="form-check-label" for="exampleCheck2">I consent to receiving occasional emails including information on TalkMaze services, discounts, and opportunities.</label>
                                                <?php echo $errors->first('subscriber', '<label id="subscriber-error" class="text-danger" for="subscriber">:message</label>'); ?>

                                            </div>
                                        </div>
                                        <button type="submit"  class="btn btn-default-login mt-3 text-uppercase student_register">Register</button>
                                    </form> 
                                </div>
                                <div class="tab-pane fade" id="parent" role="tabpanel" aria-labelledby="parent-tab">
                                    <form method="POST" action="<?php echo e(route('guest.register')); ?>" class="js-form form">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="role" value="parent">
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <label class="text-muted h8" >First Name</label>
                                                <input class="form-control bg-light" type="text" name="fname"  style="height: 2.2rem;" data-validate-field="fname" value="<?php echo e(old('fname')); ?>">
                                                <?php echo $errors->first('fname', '<label id="fname-error" class="text-danger" for="fname">:message</label>'); ?>

                                            </div>
                                            <div class="col-md-6">
                                                <label class="text-muted h8" >Last Name</label>
                                                <input class="form-control bg-light" type="text" name="lname"  style="height: 2.2rem;" data-validate-field="lname" value="<?php echo e(old('lname')); ?>">
                                                <?php echo $errors->first('lname', '<label id="lname-error" class="text-danger" for="lname">:message</label>'); ?>

                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <label class="text-muted h8" >Email</label>
                                                <input class="form-control bg-light" type="text" name="email"  style="height: 2.2rem;" data-validate-field="email" value="<?php echo e(old('email')); ?>">
                                                <?php echo $errors->first('email', '<label id="email-error" class="text-danger" for="email">:message</label>'); ?>

                                            </div>
                                            <div class="col-md-6">
                                                <label class="text-muted h8" >Confirm Email</label>
                                                <input class="form-control bg-light" type="text" name="email_confirmation"  style="height: 2.2rem;" value="<?php echo e(old('email_confirmation')); ?>">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <label class="text-muted h8" >Password</label>
                                                <input class="form-control bg-light" type="password" name="password"  style="height: 2.2rem;" data-validate-field="password" id="password">
                                                <?php echo $errors->first('password', '<label id="password-error" class="text-danger" for="password">:message</label>'); ?>

                                            </div>
                                            <div class="col-md-6">
                                                <label class="text-muted h8" >Confirm Password</label>
                                                <input class="form-control bg-light" type="password" name="password_confirmation"  style="height: 2.2rem;" data-validate-field="password_confirmation">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <label class="text-muted h8" >City</label>
                                                <input class="form-control bg-light" type="text" name="city"  style="height: 2.2rem;" data-validate-field="city" id="city">
                                                <?php echo $errors->first('city', '<label id="city-error" class="text-danger" for="city">:message</label>'); ?>

                                            </div>
                                            <div class="col-md-6">
                                                <label class="text-muted h8" >Country</label>
                                                 <select class="form-control bg-light" id="country" name="country"  style="height: 2.2rem;" data-validate-field="country" id="country">
                                                    <option value="AF-Afghanistan">Afghanistan</option>
                                                    <option value="AX-Islands">Åland Islands</option>
                                                    <option value="AL-Albania">Albania</option>
                                                    <option value="DZ-Algeria">Algeria</option>
                                                    <option value="AS-American Samoa">American Samoa</option>
                                                    <option value="AD-Andorra">Andorra</option>
                                                    <option value="AO-Angola">Angola</option>
                                                    <option value="AI-Anguilla">Anguilla</option>
                                                    <option value="AQ-Antarctica">Antarctica</option>
                                                    <option value="AG-Antigua and Barbuda">Antigua and Barbuda</option>
                                                    <option value="AR-Argentina">Argentina</option>
                                                    <option value="AM-Armenia">Armenia</option>
                                                    <option value="AW-Aruba">Aruba</option>
                                                    <option value="AU-Australia">Australia</option>
                                                    <option value="AT-Austria">Austria</option>
                                                    <option value="AZ-Azerbaijan">Azerbaijan</option>
                                                    <option value="BS-Bahamas">Bahamas</option>
                                                    <option value="BH-Bahrain">Bahrain</option>
                                                    <option value="BD-Bangladesh">Bangladesh</option>
                                                    <option value="BB-Barbados">Barbados</option>
                                                    <option value="BY-Belarus">Belarus</option>
                                                    <option value="BE-Belgium">Belgium</option>
                                                    <option value="BZ-Belize">Belize</option>
                                                    <option value="BJ-Benin">Benin</option>
                                                    <option value="BM-Bermuda">Bermuda</option>
                                                    <option value="BT-Bhutan">Bhutan</option>
                                                    <option value="BO-Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                                                    <option value="BQ-Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                                    <option value="BA-Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                    <option value="BW-Botswana">Botswana</option>
                                                    <option value="BV-Bouvet Island">Bouvet Island</option>
                                                    <option value="BR-Brazil">Brazil</option>
                                                    <option value="IO-British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                    <option value="BN-Brunei Darussalam">Brunei Darussalam</option>
                                                    <option value="BG-Bulgaria">Bulgaria</option>
                                                    <option value="BF-Burkina Faso">Burkina Faso</option>
                                                    <option value="BI-Burundi">Burundi</option>
                                                    <option value="KH-Cambodia">Cambodia</option>
                                                    <option value="CM-Cameroon">Cameroon</option>
                                                    <option value="CA-Canada" selected="selected">Canada</option>
                                                    <option value="CV-Cape Verde">Cape Verde</option>
                                                    <option value="KY-Cayman Islands">Cayman Islands</option>
                                                    <option value="CF-Central African Republic">Central African Republic</option>
                                                    <option value="TD-Chad">Chad</option>
                                                    <option value="CL-Chile">Chile</option>
                                                    <option value="CN-China">China</option>
                                                    <option value="CX-Christmas Island">Christmas Island</option>
                                                    <option value="CC-Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                    <option value="CO-Colombia">Colombia</option>
                                                    <option value="KM-Comoros">Comoros</option>
                                                    <option value="CG-Congo">Congo</option>
                                                    <option value="CD-Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                                    <option value="CK-Cook Islands">Cook Islands</option>
                                                    <option value="CR-Costa Rica">Costa Rica</option>
                                                    <option value="CI-Côte d'Ivoire">Côte d'Ivoire</option>
                                                    <option value="HR-Croatia">Croatia</option>
                                                    <option value="CU-Cuba">Cuba</option>
                                                    <option value="CW-Curaçao">Curaçao</option>
                                                    <option value="CY-Cyprus">Cyprus</option>
                                                    <option value="CZ-Czech Republic">Czech Republic</option>
                                                    <option value="DK-Denmark">Denmark</option>
                                                    <option value="DJ-Djibouti">Djibouti</option>
                                                    <option value="DM-Dominica">Dominica</option>
                                                    <option value="DO-Dominican Republic">Dominican Republic</option>
                                                    <option value="EC-Ecuador">Ecuador</option>
                                                    <option value="EG-Egypt">Egypt</option>
                                                    <option value="SV-El Salvador">El Salvador</option>
                                                    <option value="GQ-Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="ER-Eritrea">Eritrea</option>
                                                    <option value="EE-Estonia">Estonia</option>
                                                    <option value="ET-Ethiopia">Ethiopia</option>
                                                    <option value="FK-Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                    <option value="FO-Faroe Islands">Faroe Islands</option>
                                                    <option value="FJ-Fiji">Fiji</option>
                                                    <option value="FI-Finland">Finland</option>
                                                    <option value="FR-France">France</option>
                                                    <option value="GF-French Guiana">French Guiana</option>
                                                    <option value="PF-French Polynesia">French Polynesia</option>
                                                    <option value="TF-French Southern Territories">French Southern Territories</option>
                                                    <option value="GA-Gabon">Gabon</option>
                                                    <option value="GM-Gambia">Gambia</option>
                                                    <option value="GE-Georgia">Georgia</option>
                                                    <option value="DE-Germany">Germany</option>
                                                    <option value="GH-Ghana">Ghana</option>
                                                    <option value="GI-Gibraltar">Gibraltar</option>
                                                    <option value="GR-Greece">Greece</option>
                                                    <option value="GL-Greenland">Greenland</option>
                                                    <option value="GD-Grenada">Grenada</option>
                                                    <option value="GP-Guadeloupe">Guadeloupe</option>
                                                    <option value="GU-Guam">Guam</option>
                                                    <option value="GT-Guatemala">Guatemala</option>
                                                    <option value="GG-Guernsey">Guernsey</option>
                                                    <option value="GN-Guinea">Guinea</option>
                                                    <option value="GW-Guinea Bissau">Guinea Bissau</option>
                                                    <option value="GY-Guyana">Guyana</option>
                                                    <option value="HT-Haiti">Haiti</option>
                                                    <option value="HM-Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                                                    <option value="VA-Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                    <option value="HN-Honduras">Honduras</option>
                                                    <option value="HK-Hong Kong">Hong Kong</option>
                                                    <option value="HU-Hungary">Hungary</option>
                                                    <option value="IS-Iceland">Iceland</option>
                                                    <option value="IN-India">India</option>
                                                    <option value="ID-Indonesia">Indonesia</option>
                                                    <option value="IR-Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                    <option value="IQ-Iraq">Iraq</option>
                                                    <option value="IE-Ireland">Ireland</option>
                                                    <option value="IM-Isle of Man">Isle of Man</option>
                                                    <option value="IL-Israel">Israel</option>
                                                    <option value="IT-Italy">Italy</option>
                                                    <option value="JM-Jamaica">Jamaica</option>
                                                    <option value="JP-Japan">Japan</option>
                                                    <option value="JE-Jersey">Jersey</option>
                                                    <option value="JO-Jordan">Jordan</option>
                                                    <option value="KZ-Kazakhstan">Kazakhstan</option>
                                                    <option value="KE-Kenya">Kenya</option>
                                                    <option value="KI-Kiribati">Kiribati</option>
                                                    <option value="KP-Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                    <option value="KR-Korea, Republic of">Korea, Republic of</option>
                                                    <option value="KW-Kuwait">Kuwait</option>
                                                    <option value="KG-Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="LA-Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                    <option value="LV-Latvia">Latvia</option>
                                                    <option value="LB-Lebanon">Lebanon</option>
                                                    <option value="LS-Lesotho">Lesotho</option>
                                                    <option value="LR-Liberia">Liberia</option>
                                                    <option value="LY-Libya">Libya</option>
                                                    <option value="LI-Liechtenstein">Liechtenstein</option>
                                                    <option value="LT-Lithuania">Lithuania</option>
                                                    <option value="LU-Luxembourg">Luxembourg</option>
                                                    <option value="MO-Macao">Macao</option>
                                                    <option value="MK-Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option>
                                                    <option value="MG-Madagascar">Madagascar</option>
                                                    <option value="MW-Malawi">Malawi</option>
                                                    <option value="MY-Malaysia">Malaysia</option>
                                                    <option value="MV-Maldives">Maldives</option>
                                                    <option value="ML-Mali">Mali</option>
                                                    <option value="MT-Malta">Malta</option>
                                                    <option value="MH-Marshall Islands">Marshall Islands</option>
                                                    <option value="MQ-Martinique">Martinique</option>
                                                    <option value="MR-Mauritania">Mauritania</option>
                                                    <option value="MU-Mauritius">Mauritius</option>
                                                    <option value="YT-Mayotte">Mayotte</option>
                                                    <option value="MX-Mexico">Mexico</option>
                                                    <option value="FM-Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                    <option value="MD-Moldova, Republic of">Moldova, Republic of</option>
                                                    <option value="MC-Monaco">Monaco</option>
                                                    <option value="MN-Mongolia">Mongolia</option>
                                                    <option value="ME-Montenegro">Montenegro</option>
                                                    <option value="MS-Montserrat">Montserrat</option>
                                                    <option value="MA-Morocco">Morocco</option>
                                                    <option value="MZ-Mozambique">Mozambique</option>
                                                    <option value="MM-Myanmar">Myanmar</option>
                                                    <option value="NA-Namibia">Namibia</option>
                                                    <option value="NR-Nauru">Nauru</option>
                                                    <option value="NP-Nepal">Nepal</option>
                                                    <option value="NL-Netherlands">Netherlands</option>
                                                    <option value="NC-New Caledonia">New Caledonia</option>
                                                    <option value="NZ-New Zealand">New Zealand</option>
                                                    <option value="NI-Nicaragua">Nicaragua</option>
                                                    <option value="NE-Niger">Niger</option>
                                                    <option value="NG-Nigeria">Nigeria</option>
                                                    <option value="NU-Niue">Niue</option>
                                                    <option value="NF-Norfolk Island">Norfolk Island</option>
                                                    <option value="MP-Northern Mariana Islands">Northern Mariana Islands</option>
                                                    <option value="NO-Norway">Norway</option>
                                                    <option value="OM-Oman">Oman</option>
                                                    <option value="PK-Pakistan">Pakistan</option>
                                                    <option value="PW-Palau">Palau</option>
                                                    <option value="PS-Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                    <option value="PA-Panama">Panama</option>
                                                    <option value="PG-Papua New Guinea">Papua New Guinea</option>
                                                    <option value="PY-Paraguay">Paraguay</option>
                                                    <option value="PE-Peru">Peru</option>
                                                    <option value="PH-Philippines">Philippines</option>
                                                    <option value="PN-Pitcairn">Pitcairn</option>
                                                    <option value="PL-Poland">Poland</option>
                                                    <option value="PT-Portugal">Portugal</option>
                                                    <option value="PR-Puerto Rico">Puerto Rico</option>
                                                    <option value="QA-Qatar">Qatar</option>
                                                    <option value="RE-Réunion">Réunion</option>
                                                    <option value="RO-Romania">Romania</option>
                                                    <option value="RU-Russian Federation">Russian Federation</option>
                                                    <option value="RW-Rwanda">Rwanda</option>
                                                    <option value="BL-Saint Barthélemy">Saint Barthélemy</option>
                                                    <option value="SH-Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                                                    <option value="KN-Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                    <option value="LC-Saint Lucia">Saint Lucia</option>
                                                    <option value="MF-Saint Martin (French part)">Saint Martin (French part)</option>
                                                    <option value="PM-Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                    <option value="VC-Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                    <option value="WS-Samoa">Samoa</option>
                                                    <option value="SM-San Marino">San Marino</option>
                                                    <option value="ST-Sao Tome and Principe">Sao Tome and Principe</option>
                                                    <option value="SA-Saudi Arabia">Saudi Arabia</option>
                                                    <option value="SN-Senegal">Senegal</option>
                                                    <option value="RS-Serbia">Serbia</option>
                                                    <option value="SC-Seychelles">Seychelles</option>
                                                    <option value="SL-Sierra Leone">Sierra Leone</option>
                                                    <option value="SG-Singapore">Singapore</option>
                                                    <option value="SX-Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                                                    <option value="SK-Slovakia">Slovakia</option>
                                                    <option value="SI-Slovenia">Slovenia</option>
                                                    <option value="SB-Solomon Islands">Solomon Islands</option>
                                                    <option value="SO-Somalia">Somalia</option>
                                                    <option value="ZA-South Africa">South Africa</option>
                                                    <option value="GS-South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                                    <option value="SS-South Sudan">South Sudan</option>
                                                    <option value="ES-Spain">Spain</option>
                                                    <option value="LK-Sri Lanka">Sri Lanka</option>
                                                    <option value="SD-Sudan">Sudan</option>
                                                    <option value="SR-Suriname">Suriname</option>
                                                    <option value="SJ-Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                    <option value="SZ-Swaziland">Swaziland</option>
                                                    <option value="SE-Sweden">Sweden</option>
                                                    <option value="CH-Switzerland">Switzerland</option>
                                                    <option value="SY-Syrian Arab Republic">Syrian Arab Republic</option>
                                                    <option value="TW-Taiwan, Province of China">Taiwan, Province of China</option>
                                                    <option value="TJ-Tajikistan">Tajikistan</option>
                                                    <option value="TZ-Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                    <option value="TH-Thailand">Thailand</option>
                                                    <option value="TL-Timor Leste">Timor Leste</option>
                                                    <option value="TG-Togo">Togo</option>
                                                    <option value="TK-Tokelau">Tokelau</option>
                                                    <option value="TO-Tonga">Tonga</option>
                                                    <option value="TT-Trinidad and Tobago">Trinidad and Tobago</option>
                                                    <option value="TN-Tunisia">Tunisia</option>
                                                    <option value="TR-Turkey">Turkey</option>
                                                    <option value="TM-Turkmenistan">Turkmenistan</option>
                                                    <option value="TC-Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                    <option value="TV-Tuvalu">Tuvalu</option>
                                                    <option value="UG-Uganda">Uganda</option>
                                                    <option value="UA-Ukraine">Ukraine</option>
                                                    <option value="AE-United Arab Emirates">United Arab Emirates</option>
                                                    <option value="GB-United Kingdom">United Kingdom</option>
                                                    <option value="US-United States" >United States</option>
                                                    <option value="UM-United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                    <option value="UY-Uruguay">Uruguay</option>
                                                    <option value="UZ-Uzbekistan">Uzbekistan</option>
                                                    <option value="VU-Vanuatu">Vanuatu</option>
                                                    <option value="VE-Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
                                                    <option value="VN-Viet Nam">Viet Nam</option>
                                                    <option value="VG-Virgin Islands, British">Virgin Islands, British</option>
                                                    <option value="VI-Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                    <option value="WF-Wallis and Futuna">Wallis and Futuna</option>
                                                    <option value="EH-Western Sahara">Western Sahara</option>
                                                    <option value="YE-Yemen">Yemen</option>
                                                    <option value="ZM-Zambia">Zambia</option>
                                                    <option value="ZW-Zimbabwe">Zimbabwe</option>
                                                </select>
                                                <?php echo $errors->first('country', '<label id="country-error" class="text-danger" for="country">:message</label>'); ?>

                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label class="text-muted h8" >TimeZone</label>
                                                <select name="timezone" class="form-control">
                                                    <option value="0">--select timezone--</option>
                                                    <option value='Pacific/Midway' >(UTC-11:00) Midway Island</option>
                                                    <option value='Pacific/Samoa' >(UTC-11:00) Samoa</option>
                                                    <option value='Pacific/Honolulu' >(UTC-10:00) Hawaii</option>
                                                    <option value='US/Alaska' >(UTC-09:00) Alaska</option>
                                                      <option value='America/Los_Angeles' >(UTC-08:00) Pacific Time (US &amp; Canada)</option>
                                                    <option value='America/Tijuana' >(UTC-08:00) Tijuana</option>
                                                    <option value='US/Arizona' >(UTC-07:00) Arizona</option>
                                                    <option value='America/Chihuahua' >(UTC-07:00) Chihuahua</option>
                                                    <option value='America/Chihuahua' >(UTC-07:00) La Paz</option>
                                                    <option value='America/Mazatlan' >(UTC-07:00) Mazatlan</option>
                                                    <option value='US/Mountain' >(UTC-07:00) Mountain Time (US &amp; Canada)</option>
                                                    <option value='America/Managua' >(UTC-06:00) Central America</option>
                                                    <option value='US/Central' >(UTC-06:00) Central Time (US &amp; Canada)</option>
                                                    <option value='America/Mexico_City' >(UTC-06:00) Guadalajara</option>
                                                    <option value='America/Mexico_City' >(UTC-06:00) Mexico City</option>
                                                    <option value='America/Monterrey' >(UTC-06:00) Monterrey</option>
                                                    <option value='Canada/Saskatchewan' >(UTC-06:00) Saskatchewan</option>
                                                    <option value='America/Bogota' >(UTC-05:00) Bogota</option>
                                                    <option value='US/Eastern' >(UTC-05:00) Eastern Time (US &amp; Canada)</option>
                                                    <option value='US/East-Indiana' >(UTC-05:00) Indiana (East)</option>
                                                    <option value='America/Lima' >(UTC-05:00) Lima</option>
                                                    <option value='America/Bogota' >(UTC-05:00) Quito</option>
                                                    <option value='Canada/Atlantic' >(UTC-04:00) Atlantic Time (Canada)</option>
                                                    <option value='America/Caracas' >(UTC-04:30) Caracas</option>
                                                    <option value='America/La_Paz' >(UTC-04:00) La Paz</option>
                                                    <option value='America/Santiago' >(UTC-04:00) Santiago</option>
                                                    <option value='Canada/Newfoundland' >(UTC-03:30) Newfoundland</option>
                                                    <option value='America/Sao_Paulo' >(UTC-03:00) Brasilia</option>
                                                    <option value='America/Argentina/Buenos_Aires' >(UTC-03:00) Buenos Aires</option>
                                                    <option value='America/Argentina/Buenos_Aires' >(UTC-03:00) Georgetown</option>
                                                    <option value='America/Godthab' >(UTC-03:00) Greenland</option>
                                                    <option value='America/Noronha' >(UTC-02:00) Mid-Atlantic</option>
                                                    <option value='Atlantic/Azores' >(UTC-01:00) Azores</option>
                                                    <option value='Atlantic/Cape_Verde' >(UTC-01:00) Cape Verde Is.</option>
                                                    <option value='Africa/Casablanca' >(UTC+00:00) Casablanca</option>
                                                    <option value='Europe/London' >(UTC+00:00) Edinburgh</option>
                                                    <option value='Etc/Greenwich' >(UTC+00:00) Greenwich Mean Time : Dublin</option>
                                                    <option value='Europe/Lisbon' >(UTC+00:00) Lisbon</option>
                                                    <option value='Europe/London' >(UTC+00:00) London</option>
                                                    <option value='Africa/Monrovia' >(UTC+00:00) Monrovia</option>
                                                    <option value='UTC' >(UTC+00:00) UTC</option>
                                                    <option value='Europe/Amsterdam' >(UTC+01:00) Amsterdam</option>
                                                    <option value='Europe/Belgrade' >(UTC+01:00) Belgrade</option>
                                                    <option value='Europe/Berlin' >(UTC+01:00) Berlin</option>
                                                    <option value='Europe/Berlin' >(UTC+01:00) Bern</option>
                                                    <option value='Europe/Bratislava' >(UTC+01:00) Bratislava</option>
                                                    <option value='Europe/Brussels' >(UTC+01:00) Brussels</option>
                                                    <option value='Europe/Budapest' >(UTC+01:00) Budapest</option>
                                                    <option value='Europe/Copenhagen' >(UTC+01:00) Copenhagen</option>
                                                    <option value='Europe/Ljubljana' >(UTC+01:00) Ljubljana</option>
                                                    <option value='Europe/Madrid' >(UTC+01:00) Madrid</option>
                                                    <option value='Europe/Paris' >(UTC+01:00) Paris</option>
                                                    <option value='Europe/Prague' >(UTC+01:00) Prague</option>
                                                    <option value='Europe/Rome' >(UTC+01:00) Rome</option>
                                                    <option value='Europe/Sarajevo' >(UTC+01:00) Sarajevo</option>
                                                    <option value='Europe/Skopje' >(UTC+01:00) Skopje</option>
                                                    <option value='Europe/Stockholm' >(UTC+01:00) Stockholm</option>
                                                    <option value='Europe/Vienna' >(UTC+01:00) Vienna</option>
                                                    <option value='Europe/Warsaw' >(UTC+01:00) Warsaw</option>
                                                    <option value='Africa/Lagos' >(UTC+01:00) West Central Africa</option>
                                                    <option value='Europe/Zagreb' >(UTC+01:00) Zagreb</option>
                                                    <option value='Europe/Athens' >(UTC+02:00) Athens</option>
                                                    <option value='Europe/Bucharest' >(UTC+02:00) Bucharest</option>
                                                    <option value='Africa/Cairo' >(UTC+02:00) Cairo</option>
                                                    <option value='Africa/Harare' >(UTC+02:00) Harare</option>
                                                    <option value='Europe/Helsinki' >(UTC+02:00) Helsinki</option>
                                                    <option value='Europe/Istanbul' >(UTC+02:00) Istanbul</option>
                                                    <option value='Asia/Jerusalem' >(UTC+02:00) Jerusalem</option>
                                                    <option value='Europe/Helsinki' >(UTC+02:00) Kyiv</option>
                                                    <option value='Africa/Johannesburg' >(UTC+02:00) Pretoria</option>
                                                    <option value='Europe/Riga' >(UTC+02:00) Riga</option>
                                                    <option value='Europe/Sofia' >(UTC+02:00) Sofia</option>
                                                    <option value='Europe/Tallinn' >(UTC+02:00) Tallinn</option>
                                                    <option value='Europe/Vilnius' >(UTC+02:00) Vilnius</option>
                                                    <option value='Asia/Baghdad' >(UTC+03:00) Baghdad</option>
                                                    <option value='Asia/Kuwait' >(UTC+03:00) Kuwait</option>
                                                    <option value='Europe/Minsk' >(UTC+03:00) Minsk</option>
                                                    <option value='Africa/Nairobi' >(UTC+03:00) Nairobi</option>
                                                    <option value='Asia/Riyadh' >(UTC+03:00) Riyadh</option>
                                                    <option value='Europe/Volgograd' >(UTC+03:00) Volgograd</option>
                                                    <option value='Asia/Tehran' >(UTC+03:30) Tehran</option>
                                                    <option value='Asia/Muscat' >(UTC+04:00) Abu Dhabi</option>
                                                    <option value='Asia/Baku' >(UTC+04:00) Baku</option>
                                                    <option value='Europe/Moscow' >(UTC+04:00) Moscow</option>
                                                    <option value='Asia/Muscat' >(UTC+04:00) Muscat</option>
                                                    <option value='Europe/Moscow' >(UTC+04:00) St. Petersburg</option>
                                                    <option value='Asia/Tbilisi' >(UTC+04:00) Tbilisi</option>
                                                    <option value='Asia/Yerevan' >(UTC+04:00) Yerevan</option>
                                                    <option value='Asia/Kabul' >(UTC+04:30) Kabul</option>
                                                    <option value='Asia/Karachi' >(UTC+05:00) Islamabad</option>
                                                    <option value='Asia/Karachi' >(UTC+05:00) Karachi</option>
                                                    <option value='Asia/Tashkent' >(UTC+05:00) Tashkent</option>
                                                    <option value='Asia/Calcutta' >(UTC+05:30) Chennai</option>
                                                    <option value='Asia/Kolkata' >(UTC+05:30) Kolkata</option>
                                                    <option value='Asia/Calcutta' >(UTC+05:30) Mumbai</option>
                                                    <option value='Asia/Calcutta' >(UTC+05:30) New Delhi</option>
                                                    <option value='Asia/Calcutta' >(UTC+05:30) Sri Jayawardenepura</option>
                                                    <option value='Asia/Katmandu' >(UTC+05:45) Kathmandu</option>
                                                    <option value='Asia/Almaty' >(UTC+06:00) Almaty</option>
                                                    <option value='Asia/Dhaka' >(UTC+06:00) Astana</option>
                                                    <option value='Asia/Dhaka' >(UTC+06:00) Dhaka</option>
                                                    <option value='Asia/Yekaterinburg' >(UTC+06:00) Ekaterinburg</option>
                                                    <option value='Asia/Rangoon' >(UTC+06:30) Rangoon</option>
                                                    <option value='Asia/Bangkok' >(UTC+07:00) Bangkok</option>
                                                    <option value='Asia/Bangkok' >(UTC+07:00) Hanoi</option>
                                                    <option value='Asia/Jakarta' >(UTC+07:00) Jakarta</option>
                                                    <option value='Asia/Novosibirsk' >(UTC+07:00) Novosibirsk</option>
                                                    <option value='Asia/Hong_Kong' >(UTC+08:00) Beijing</option>
                                                    <option value='Asia/Chongqing' >(UTC+08:00) Chongqing</option>
                                                    <option value='Asia/Hong_Kong' >(UTC+08:00) Hong Kong</option>
                                                    <option value='Asia/Krasnoyarsk' >(UTC+08:00) Krasnoyarsk</option>
                                                    <option value='Asia/Kuala_Lumpur' >(UTC+08:00) Kuala Lumpur</option>
                                                    <option value='Australia/Perth' >(UTC+08:00) Perth</option>
                                                    <option value='Asia/Singapore' >(UTC+08:00) Singapore</option>
                                                    <option value='Asia/Taipei' >(UTC+08:00) Taipei</option>
                                                    <option value='Asia/Ulan_Bator' >(UTC+08:00) Ulaan Bataar</option>
                                                    <option value='Asia/Urumqi' >(UTC+08:00) Urumqi</option>
                                                    <option value='Asia/Irkutsk' >(UTC+09:00) Irkutsk</option>
                                                    <option value='Asia/Tokyo' >(UTC+09:00) Osaka</option>
                                                    <option value='Asia/Tokyo' >(UTC+09:00) Sapporo</option>
                                                    <option value='Asia/Seoul' >(UTC+09:00) Seoul</option>
                                                    <option value='Asia/Tokyo' >(UTC+09:00) Tokyo</option>
                                                    <option value='Australia/Adelaide' >(UTC+09:30) Adelaide</option>
                                                    <option value='Australia/Darwin' >(UTC+09:30) Darwin</option>
                                                    <option value='Australia/Brisbane' >(UTC+10:00) Brisbane</option>
                                                    <option value='Australia/Canberra' >(UTC+10:00) Canberra</option>
                                                    <option value='Pacific/Guam' >(UTC+10:00) Guam</option>
                                                    <option value='Australia/Hobart' >(UTC+10:00) Hobart</option>
                                                    <option value='Australia/Melbourne' >(UTC+10:00) Melbourne</option>
                                                    <option value='Pacific/Port_Moresby' >(UTC+10:00) Port Moresby</option>
                                                    <option value='Australia/Sydney' >(UTC+10:00) Sydney</option>
                                                    <option value='Asia/Yakutsk' >(UTC+10:00) Yakutsk</option>
                                                    <option value='Asia/Vladivostok' >(UTC+11:00) Vladivostok</option>
                                                    <option value='Pacific/Auckland' >(UTC+12:00) Auckland</option>
                                                    <option value='Pacific/Fiji' >(UTC+12:00) Fiji</option>
                                                    <option value='Pacific/Kwajalein' >(UTC+12:00) International Date Line West</option>
                                                    <option value='Asia/Kamchatka' >(UTC+12:00) Kamchatka</option>
                                                    <option value='Asia/Magadan' >(UTC+12:00) Magadan</option>
                                                    <option value='Pacific/Fiji' >(UTC+12:00) Marshall Is.</option>
                                                    <option value='Asia/Magadan' >(UTC+12:00) New Caledonia</option>
                                                    <option value='Asia/Magadan' >(UTC+12:00) Solomon Is.</option>
                                                    <option value='Pacific/Auckland' >(UTC+12:00) Wellington</option>
                                                    <option value='Pacific/Tongatapu' >(UTC+13:00) Nuku'alofa</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-12 parent-block">
                                                <div class="row" id="parent_row-1">
                                                    <div class="col-md-12 text-right">
                                                        <button type="button" class="btn btn-danger delete-btn btn-sm d-none mt-4">
                                                            <i class="fa fa-times text-white"></i>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label class="text-muted h8" >Student Name</label>
                                                        <input class="form-control bg-light" type="text" name="student_name[]"  style="height: 2.2rem;" data-validate-field="email" value="<?php echo e(old('email')); ?>" required>
                                                        <?php echo $errors->first('email', '<label id="email-error" class="text-danger" for="email">:message</label>'); ?>

                                                    </div>
                                                    <div class="col-md-12">
                                                        <label class="text-muted h8" >Student DOB</label>
                                                        <input class="form-control bg-light datepicker" type="text" name="student_dob[]"  style="height: 2.2rem;" value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <button type="button"  class="btn btn-default-login btn-register-addmore mt-3 text-uppercase pull-right">Add +</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-0 pb-0">
                                            <div class="form-check  ml-3 mt-4">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="tos" data-validate-field="tos" >
                                                <label class="form-check-label" for="exampleCheck1">I accept the <a href="#" style="text-decoration: underline;" data-toggle="modal" data-target="#exampleModalCenterOne">terms and conditions.</a> </label>
                                                <?php echo $errors->first('tos', '<label id="tos-error" class="text-danger" for="tos">:message</label>'); ?>

                                            </div>
                                        </div>
                                        <div class="row mt-0 pt-0">
                                            <div class="form-check  ml-3 mb-3">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck2" name="subscriber" data-validate-field="subscriber" >
                                                <label class="form-check-label" for="exampleCheck2">I consent to receiving occasional emails including information on TalkMaze services, discounts, and opportunities.</label>
                                                <?php echo $errors->first('subscriber', '<label id="subscriber-error" class="text-danger" for="subscriber">:message</label>'); ?>

                                            </div>
                                        </div>
                                        <button type="submit"  class="btn btn-default-login mt-3 text-uppercase">Register</button>
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6  order-1 order-sm-2 m-auto">
                    <div class="image_div">
                        <img class="ml-auto mb-5 mt-2"  src="images/get-started-img.png" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal For pop Up sign in -->
    <div class="modal fade" id="exampleModalCenterOne" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalCenterOneTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content p-3" style=" margin-left: auto; margin-right:auto; display: block;">
                <div class="modal-header">
                    <h4 class="modal-title ml-auto" id="exampleModalLongTitle">Terms And Conditions</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="<?php echo e(url('/terms_conditions')); ?>" style="width:100%; height:70vh;">

                    </iframe>
                </div>
            </div>
        </div>
    </div>

  <script src="<?php echo e(asset('js/just-validate.min.js')); ?>"></script>
  <script>
    new window.JustValidate('.js-form', {
        rules: {
            tos: {
                required: true
            },
            fname: {
                required: true
            },
            lname: {
                required: true
            },
            city:{
                required:true
            },
            country:{
                required:true
            },
            email: {
                required: true,
                email: true,
            },
            password : {
                strength: {
                default: true,

              },
            },
            password_confirmation: {
              equalTo: "#password"
            },

        },
        messages: {
            login: {
                remote: 'Login already exists',
            },
            fname: {
              required: 'First Name is required',
            },
            lname: {
              required: 'Last Name is required',
            },
            tos: {
              required: 'You must be agree with our terms & conditions',
            },
            city: {
                required: 'City Name is required',
            },
            country: {
                required: 'Country Name is required',
            }
        },
    });
</script>
</body>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        var pump_limit = 1;
        $(document).on("click",".btn-register-addmore", function (e) 
        {
            e.preventDefault();
            var pointer = getItemsBlockLength();
            var content = $('#parent_row-1').html();
            $(".parent-block").append('<div class="row" id="parent_row-'+(pointer+1)+'">'+content+'</div>');
            $('#parent_row-' + (pointer + 1)).find('.parent-item-count').text(pointer + 1);
            $('#parent_row-' + (pointer + 1)).find('.delete-btn').removeClass('d-none');
        });

        function getItemsBlockLength()
        {
            return $(".parent-block .row").length;
        }

        $(document).on('click', '.delete-btn', function(){
            $(this).closest('.row').remove();
        });

        $('.student_dob').on('dp.change', function(e){
            $elm = $(this);
            var dob = new Date($(this).val());
            var today = new Date();
            var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
            if (age < 16) {
                $(".dob_error").show();
                $(".student_register").prop("disabled", true);
            } else{
                $(".dob_error").hide();
                $(".student_register").prop("disabled", false);
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/laravel/resources/views/user/pages/register.blade.php ENDPATH**/ ?>
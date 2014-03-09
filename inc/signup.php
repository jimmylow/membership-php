<BR><BR>
<form  name="frm" action="<? echo BASEHREF; ?>/signup.php" method="post">




<TABLE BORDER=0>

<TR>
<TD>* Username:</TD>
<TD><input type="text" name="uid" value="<? echo $uid; ?>"></TD>
</TR>

<TR>
<TD>* Password:</TD>
<TD><input type="password" name="pwd"></TD>
</TR>


<TR>
<TD>* Confirm Password:</TD>
<TD><input type="password" name="pwd2"></TD>
</TR>

<TR>
<TD>* Email Address:</tD>
<TD><input type="text" name="email" value="<? echo $email; ?>"></TD>
</tR>

<TR>
<TD>* First Name:</TD>
<TD><input type="text" name="fname" value="<? echo $fname; ?>"></TD>
</TR>

<TR>
<TD>* Last Name:</TD>
<TD><input type="text" name="lname" value="<? echo $lname; ?>"></TD>
</TR>

<TR>
<TD>* Address:</TD>
<TD><input type="text" name="addr" value="<? echo $addr; ?>"></TD>
</TR>


<TR>
<TD>* City:</TD>
<TD><input type="text" name="city" value="<? echo $city; ?>"></TD>
</TR>

<TR>
<TD>* State:</TD>
<TD><select name="state">

<option value="">[Select State]
<option value="NN" (state_NN)>Non US
<option value="AL" (state_AL)>Alabama
<option value="AK" (state_AK)>Alaska
<option value="AZ" (state_AZ)>Arizona
<option value="AR" (state_AR)>Arkansas
<option value="CA" (state_CA)>California
<option value="CO" (state_CO)>Colorado
<option value="CT" (state_CT)>Connecticut
<option value="DE" (state_DE)>Delaware
<option value="FL" (state_FL)>Florida
<option value="GA" (state_GA)>Georgia
<option value="HI" (state_HI)>Hawaii
<option value="ID" (state_ID)>Idaho
<option value="IL" (state_IL)>Illinois
<option value="IN" (state_IN)>Indiana
<option value="IA" (state_IA)>Iowa
<option value="KS" (state_KS)>Kansas
<option value="KY" (state_KY)>Kentucky
<option value="LA" (state_LA)>Louisiana
<option value="ME" (state_ME)>Maine
<option value="MD" (state_MD)>Maryland
<option value="MA" (state_MA)>Massachusetts
<option value="MI" (state_MI)>Michigan
<option value="MN" (state_MN)>Minnesota
<option value="MS" (state_MS)>Mississippi
<option value="MO" (state_MO)>Missouri
<option value="MT" (state_MT)>Montana
<option value="NE" (state_NE)>Nebraska
<option value="NV" (state_NV)>Nevada
<option value="NH" (state_NH)>New Hampshire
<option value="NJ" (state_NJ)>New Jersey
<option value="NM" (state_NM)>New Mexico
<option value="NY" (state_NY)>New York
<option value="NC" (state_NC)>North Carolina
<option value="ND" (state_ND)>North Dakota
<option value="OH" (state_OH)>Ohio
<option value="OK" (state_OK)>Oklahoma
<option value="OR" (state_OR)>Oregon
<option value="PA" (state_PA)>Pennsylvania
<option value="PR" (state_PR)>Puerto Rico
<option value="RI" (state_RI)>Rhode Island
<option value="SC" (state_SC)>South Carolina
<option value="SD" (state_SD)>South Dakota
<option value="TN" (state_TN)>Tennessee
<option value="TX" (state_TX)>Texas
<option value="UT" (state_UT)>Utah
<option value="VT" (state_VT)>Vermont
<option value="VA" (state_VA)>Virginia
<option value="WA" (state_WA)>Washington
<option value="DC" (state_DC)>Washington D.C.
<option value="WV" (state_WV)>West Virginia
<option value="WI" (state_WI)>Wisconsin
<option value="WY" (state_WY)>Wyoming
<option value="NN" (state_NN)>Non US
</select></TD>
</TR>


<TR>
<TD>* Country:</TD>
<TD><select name="country">

<option value="">[Select Country]
<option value="UM" (country_UM)>United States
<option value="AF" (country_AF)>Afghanistan
<option value="AL" (country_AL)>Albania
<option value="DZ" (country_DZ)>Algeria
<option value="AS" (country_AS)>American Samoa
<option value="AD" (country_AD)>Andorra
<option value="AO" (country_AO)>Angola
<option value="AI" (country_AI)>Anguilla
<option value="AQ" (country_AQ)>Antarctica
<option value="AG" (country_AG)>Antigua And Barbuda
<option value="AR" (country_AR)>Argentina
<option value="AM" (country_AM)>Armenia
<option value="AW" (country_AW)>Aruba
<option value="AU" (country_AU)>Australia
<option value="AT" (country_AT)>Austria
<option value="AZ" (country_AZ)>Azerbaijan
<option value="BS" (country_BS)>Bahamas
<option value="BH" (country_BH)>Bahrain
<option value="BD" (country_BD)>Bangladesh
<option value="BB" (country_BB)>Barbados
<option value="BY" (country_BY)>Belarus
<option value="BE" (country_BE)>Belgium
<option value="BZ" (country_BZ)>Belize
<option value="BJ" (country_BJ)>Benin
<option value="BM" (country_BM)>Bermuda
<option value="BT" (country_BT)>Bhutan
<option value="BO" (country_BO)>Bolivia
<option value="BA" (country_BA)>Bosnia And Herzegowina
<option value="BW" (country_BW)>Botswana
<option value="BV" (country_BV)>Bouvet Island
<option value="BR" (country_BR)>Brazil
<option value="IO" (country_IO)>British Indian Ocean Territory
<option value="BN" (country_BN)>Brunei Darussalam
<option value="BG" (country_BG)>Bulgaria
<option value="BF" (country_BF)>Burkina Faso
<option value="BI" (country_BI)>Burundi
<option value="KH" (country_KH)>Cambodia
<option value="CM" (country_CM)>Cameroon
<option value="CA" (country_CA)>Canada
<option value="CV" (country_CV)>Cape Verde
<option value="KY" (country_KY)>Cayman Islands
<option value="CF" (country_CF)>Central African Republic
<option value="TD" (country_TD)>Chad
<option value="CL" (country_CL)>Chile
<option value="CN" (country_CN)>China
<option value="CX" (country_CX)>Christmas Island
<option value="CC" (country_CC)>Cocos (Keeling) Islands
<option value="CO" (country_CO)>Colombia
<option value="KM" (country_KM)>Comoros
<option value="CG" (country_CG)>Congo
<option value="CK" (country_CK)>Cook Islands
<option value="CR" (country_CR)>Costa Rica
<option value="CI" (country_CI)>Cote D'Ivoire
<option value="HR" (country_HR)>Croatia
<option value="CU" (country_CU)>Cuba
<option value="CY" (country_CY)>Cyprus
<option value="CZ" (country_CZ)>Czech Republic
<option value="DK" (country_DK)>Denmark
<option value="DJ" (country_DJ)>Djibouti
<option value="DM" (country_DM)>Dominica
<option value="DO" (country_DO)>Dominican Republic
<option value="TP" (country_TP)>East Timor
<option value="EC" (country_EC)>Ecuador
<option value="EG" (country_EG)>Egypt
<option value="SV" (country_SV)>El Salvador
<option value="GQ" (country_GQ)>Equatorial Guinea
<option value="ER" (country_ER)>Eritrea
<option value="EE" (country_EE)>Estonia
<option value="ET" (country_ET)>Ethiopia
<option value="FK" (country_FK)>Falkland Islands
<option value="FO" (country_FO)>Faroe Islands
<option value="FJ" (country_FJ)>Fiji
<option value="FI" (country_FI)>Finland
<option value="FR" (country_FR)>France
<option value="FX" (country_FX)>France, Metropolitan
<option value="GF" (country_GF)>French Guiana
<option value="PF" (country_PF)>French Polynesia
<option value="TF" (country_TF)>French Southern Territories
<option value="GA" (country_GA)>Gabon
<option value="GM" (country_GM)>Gambia
<option value="GE" (country_GE)>Georgia
<option value="DE" (country_DE)>Germany
<option value="GH" (country_GH)>Ghana
<option value="GI" (country_GI)>Gibraltar
<option value="GR" (country_GR)>Greece
<option value="GL" (country_GL)>Greenland
<option value="GD" (country_GD)>Grenada
<option value="GP" (country_GP)>Guadeloupe
<option value="GU" (country_GU)>Guam
<option value="GT" (country_GT)>Guatemala
<option value="GN" (country_GN)>Guinea
<option value="GW" (country_GW)>Guinea-Bissau
<option value="GY" (country_GY)>Guyana
<option value="HT" (country_HT)>Haiti
<option value="HM" (country_HM)>Heard And Mc Donald Islands
<option value="HN" (country_HN)>Honduras
<option value="HK" (country_HK)>Hong Kong
<option value="HU" (country_HU)>Hungary
<option value="IS" (country_IS)>Iceland
<option value="IN" (country_IN)>India
<option value="ID" (country_ID)>Indonesia
<option value="IR" (country_IR)>Iran
<option value="IQ" (country_IQ)>Iraq
<option value="IE" (country_IE)>Ireland
<option value="IL" (country_IL)>Israel
<option value="IT" (country_IT)>Italy
<option value="JM" (country_JM)>Jamaica
<option value="JP" (country_JP)>Japan
<option value="JO" (country_JO)>Jordan
<option value="KZ" (country_KZ)>Kazakhstan
<option value="KE" (country_KE)>Kenya
<option value="KI" (country_KI)>Kiribati
<option value="KP" (country_KP)>North Korea
<option value="KR" (country_KR)>South Korea
<option value="KW" (country_KW)>Kuwait
<option value="KG" (country_KG)>Kyrgyzstan
<option value="LA" (country_LA)>Lao People's Republic
<option value="LV" (country_LV)>Latvia
<option value="LB" (country_LB)>Lebanon
<option value="LS" (country_LS)>Lesotho
<option value="LR" (country_LR)>Liberia
<option value="LY" (country_LY)>Libyan Arab Jamahiriya
<option value="LI" (country_LI)>Liechtenstein
<option value="LT" (country_LT)>Lithuania
<option value="LU" (country_LU)>Luxembourg
<option value="MO" (country_MO)>Macau
<option value="MK" (country_MK)>Macedonia
<option value="MG" (country_MG)>Madagascar
<option value="MW" (country_MW)>Malawi
<option value="MY" (country_MY)>Malaysia
<option value="MV" (country_MV)>Maldives
<option value="ML" (country_ML)>Mali
<option value="MT" (country_MT)>Malta
<option value="MH" (country_MH)>Marshall Islands
<option value="MQ" (country_MQ)>Martinique
<option value="MR" (country_MR)>Mauritania
<option value="MU" (country_MU)>Mauritius
<option value="YT" (country_YT)>Mayotte
<option value="MX" (country_MX)>Mexico
<option value="FM" (country_FM)>Micronesia
<option value="MD" (country_MD)>Moldova
<option value="MC" (country_MC)>Monaco
<option value="MN" (country_MN)>Mongolia
<option value="MS" (country_MS)>Montserrat
<option value="MA" (country_MA)>Morocco
<option value="MZ" (country_MZ)>Mozambique
<option value="MM" (country_MM)>Myanmar
<option value="NA" (country_NA)>Namibia
<option value="NR" (country_NR)>Nauru
<option value="NP" (country_NP)>Nepal
<option value="NL" (country_NL)>Netherlands
<option value="AN" (country_AN)>Netherlands Antilles
<option value="NC" (country_NC)>New Caledonia
<option value="NZ" (country_NZ)>New Zealand
<option value="NI" (country_NI)>Nicaragua
<option value="NE" (country_NE)>Niger
<option value="NG" (country_NG)>Nigeria
<option value="NU" (country_NU)>Niue
<option value="NF" (country_NF)>Norfolk Island
<option value="MP" (country_MP)>Northern Mariana Islands
<option value="NO" (country_NO)>Norway
<option value="OM" (country_OM)>Oman
<option value="PK" (country_PK)>Pakistan
<option value="PW" (country_PW)>Palau
<option value="PA" (country_PA)>Panama
<option value="PG" (country_PG)>Papua New Guinea
<option value="PY" (country_PY)>Paraguay
<option value="PE" (country_PE)>Peru
<option value="PH" (country_PH)>Philippines
<option value="PN" (country_PN)>Pitcairn
<option value="PL" (country_PL)>Poland
<option value="PT" (country_PT)>Portugal
<option value="PR" (country_PR)>Puerto Rico
<option value="QA" (country_QA)>Qatar
<option value="RE" (country_RE)>Reunion
<option value="RO" (country_RO)>Romania
<option value="RU" (country_RU)>Russian Federation
<option value="RW" (country_RW)>Rwanda
<option value="KN" (country_KN)>Saint Kitts And Nevis
<option value="LC" (country_LC)>Saint Lucia
<option value="VC" (country_VC)>Saint Vincent And The Grenadines
<option value="WS" (country_WS)>Samoa
<option value="SM" (country_SM)>San Marino
<option value="ST" (country_ST)>Sao Tome And Principe
<option value="SA" (country_SA)>Saudi Arabia
<option value="SN" (country_SN)>Senegal
<option value="SC" (country_SC)>Seychelles
<option value="SL" (country_SL)>Sierra Leone
<option value="SG" (country_SG)>Singapore
<option value="SK" (country_SK)>Slovakia
<option value="SI" (country_SI)>Slovenia
<option value="SB" (country_SB)>Solomon Islands
<option value="SO" (country_SO)>Somalia
<option value="ZA" (country_ZA)>South Africa
<option value="GS" (country_GS)>South Georgia
<option value="ES" (country_ES)>Spain
<option value="LK" (country_LK)>Sri Lanka
<option value="SH" (country_SH)>St Helena
<option value="PM" (country_PM)>St Pierre and Miquelon
<option value="SD" (country_SD)>Sudan
<option value="SR" (country_SR)>Suriname
<option value="SJ" (country_SJ)>Svalbard
<option value="SZ" (country_SZ)>Swaziland
<option value="SE" (country_SE)>Sweden
<option value="CH" (country_CH)>Switzerland
<option value="SY" (country_SY)>Syrian Arab Republic
<option value="TW" (country_TW)>Taiwan
<option value="TJ" (country_TJ)>Tajikistan
<option value="TZ" (country_TZ)>Tanzania
<option value="TH" (country_TH)>Thailand
<option value="TG" (country_TG)>Togo
<option value="TK" (country_TK)>Tokelau
<option value="TO" (country_TO)>Tonga
<option value="TT" (country_TT)>Trinidad And Tobago
<option value="TN" (country_TN)>Tunisia
<option value="TR" (country_TR)>Turkey
<option value="TM" (country_TM)>Turkmenistan
<option value="TC" (country_TC)>Turks And Caicos Islands
<option value="TV" (country_TV)>Tuvalu
<option value="UG" (country_UG)>Uganda
<option value="UA" (country_UA)>Ukraine
<option value="AE" (country_AE)>United Arab Emirates
<option value="GB" (country_GB)>United Kingdom
<option value="UY" (country_UY)>Uruguay
<option value="UZ" (country_UZ)>Uzbekistan
<option value="VU" (country_VU)>Vanuatu
<option value="VA" (country_VA)>Vatican City State
<option value="VE" (country_VE)>Venezuela
<option value="VN" (country_VN)>Viet Nam
<option value="VG" (country_VG)>Virgin Islands (British)
<option value="VI" (country_VI)>Virgin Islands (U.S.)
<option value="WF" (country_WF)>Wallis And Futuna Islands
<option value="EH" (country_EH)>Western Sahara
<option value="YE" (country_YE)>Yemen
<option value="ZR" (country_ZR)>Zaire
<option value="ZM" (country_ZM)>Zambia
<option value="ZW" (country_ZW)>Zimbabwe
<option value="ZZ" (country_ZZ)>Other Not Shown
</select></TD>
</TR>

<TR>
<TD>* Zip Code:</tD>
<TD><input type="text" name="zipcode" value="<? echo $zipcode; ?>"></TD>
</tR>

<TR>
<TD>* Telephone:</tD>
<TD><input type="text" name="phone" value="<? echo $phone; ?>"></TD>
</tR>
</TABLE>




<input type=submit value='Register' name=register>




</FORM>
































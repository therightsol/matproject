
<?php include 'includes/header.inc';?>
<?php include 'includes/headerform.inc';?>
<!-- Top menu -->

<?php include 'includes/topbar.inc';?>
<?php include 'includes/navigation.inc';?>
<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 text">
                    <h1><strong class="animated2">Marriage Online..</strong>Search Your Better half</h1>
                    <div class="description">
                        <h1>
                            We can find <strong>Better</strong>
                        </h1>
                    </div>

                </div>
                <div class="col-sm-5 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <div >
                                <h2 class="panel-title">Search</h2>
                            </div>
                            <div >
                                <p>Enter your Requirment<br><small>Marriage Online will find your choice</small></p>
                            </div>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" action="<?php echo $root; ?>search" method="post" class="registration-form">

                            <div class="form-group">
                                <label>LookingFor : </label>
                                <select name='LookingFor' class="form_style">
                                    <option value="2" >Bride</option>
                                    <option value="1" >Groom</option>
                                </select>
                            </div>
                            <div style="margin-left: 50px ">
                                <label>    Age :</label>
                                <select name='MinAge'class="age">
                                    <option value=18 selected>18</option><option value=19 >19</option><option value=20 >20</option><option value=21 >21</option><option value=22 >22</option><option value=23 >23</option><option value=24 >24</option><option value=25 >25</option><option value=26 >26</option><option value=27 >27</option><option value=28 >28</option><option value=29 >29</option><option value=30 >30</option><option value=31 >31</option><option value=32 >32</option><option value=33 >33</option><option value=34 >34</option><option value=35 >35</option><option value=36 >36</option><option value=37 >37</option><option value=38 >38</option><option value=39 >39</option><option value=40 >40</option><option value=41 >41</option><option value=42 >42</option><option value=43 >43</option><option value=44 >44</option><option value=45 >45</option><option value=46 >46</option><option value=47 >47</option><option value=48 >48</option><option value=49 >49</option><option value=50 >50</option><option value=51 >51</option><option value=52 >52</option><option value=53 >53</option><option value=54 >54</option><option value=55 >55</option><option value=56 >56</option><option value=57 >57</option><option value=58 >58</option><option value=59 >59</option><option value=60 >60</option><option value=61 >61</option><option value=62 >62</option><option value=63 >63</option><option value=64 >64</option><option value=65 >65</option></select>
                                To
                                <select name='MaxAge' class="age"><option value=18 >18</option><option value=19 >19</option><option value=20 >20</option><option value=21 >21</option><option value=22 >22</option><option value=23 >23</option><option value=24 >24</option><option value=25 >25</option><option value=26 >26</option><option value=27 >27</option><option value=28 >28</option><option value=29 >29</option><option value=30 selected>30</option><option value=31 >31</option><option value=32 >32</option><option value=33 >33</option><option value=34 >34</option><option value=35 >35</option><option value=36 >36</option><option value=37 >37</option><option value=38 >38</option><option value=39 >39</option><option value=40 >40</option><option value=41 >41</option><option value=42 >42</option><option value=43 >43</option><option value=44 >44</option><option value=45 >45</option><option value=46 >46</option><option value=47 >47</option><option value=48 >48</option><option value=49 >49</option><option value=50 >50</option><option value=51 >51</option><option value=52 >52</option><option value=53 >53</option><option value=54 >54</option><option value=55 >55</option><option value=56 >56</option><option value=57 >57</option><option value=58 >58</option><option value=59 >59</option><option value=60 >60</option><option value=61 >61</option><option value=62 >62</option><option value=63 >63</option><option value=64 >64</option><option value=65 >65</option></select>

                            </div>
                            <div style="margin-left: 20px">
                                <label>Religion  : </label>	<select name="cmbreligion" class="form_style" onchange="change_cast(this.value)">
                                    <option value="0.0">Any</option>
                                    <option value="6" >Muslim</option>
                                    <option value="4" >Christian</option>
                                    <option value="2" >Hindu</option>
                                    <option value="9" >Other</option>
                                </select>

                            </div>
                            <div style="margin-left: 45px">
                                <label>Cast  : </label>	<select name="Cast" class="form_style" onchange="change_cast(this.value)">
                                    <option value="0.0">Sunni</option>
                                    <option value="6" >Shia</option>
                                    <option value="4" >Butt</option>
                                    <option value="2" >Arain</option>
                                    <option value="9" >Sheikh</option>
                                    <option value="9" >Mughal</option>
                                    <option value="9" >Malik</option>
                                    <option value="9" >Khawaja</option>

                                </select>

                            </div>
                            <div style="margin-left: 25px">
                                <label>Country : </label>	<select name='Country'class="form_style">
                                    <option value="0.0">Any</option>
                                    <option value="1" >Afghanistan</option>
                                    <option value="2" >Albania</option>
                                    <option value="3" >Algeria</option>
                                    <option value="4" >American Samoa</option>
                                    <option value="5" >Andorra</option>
                                    <option value="6" >Angola</option>
                                    <option value="7" >Anguilla</option>
                                    <option value="8" >Antarctica</option>
                                    <option value="9" >Antigua and Barbuda</option>
                                    <option value="10" >Argentina</option>
                                    <option value="11" >Armenia</option>
                                    <option value="12" >Aruba</option>
                                    <option value="13" >Ashmore and Cartier</option>
                                    <option value="14" >Australia</option>
                                    <option value="15" >Austria</option>
                                    <option value="16" >Azerbaijan</option>
                                    <option value="17" >Bahamas</option>
                                    <option value="18" >Bahrain</option>
                                    <option value="19" >Baker Island</option>
                                    <option value="20" >Bangladesh</option>
                                    <option value="21" >Barbados</option>
                                    <option value="22" >Bassas da India</option>
                                    <option value="23" >Belarus</option>
                                    <option value="24" >Belgium</option>
                                    <option value="25" >Belize</option>
                                    <option value="26" >Benin</option>
                                    <option value="27" >Bermuda</option>
                                    <option value="28" >Bhutan</option>
                                    <option value="29" >Bolivia</option>
                                    <option value="30" >Bosnia and Herzegovina</option>
                                    <option value="31" >Botswana</option>
                                    <option value="32" >Bouvet Island</option>
                                    <option value="33" >Brazil</option>
                                    <option value="34" >British Indian Ocean Territory</option>
                                    <option value="35" >British Virgin Islands</option>
                                    <option value="36" >Brunei Darussalam</option>
                                    <option value="37" >Bulgaria</option>
                                    <option value="38" >Burkina Faso</option>
                                    <option value="39" >Burma</option>
                                    <option value="40" >Burundi</option>
                                    <option value="41" >Cambodia</option>
                                    <option value="42" >Cameroon</option>
                                    <option value="43" >Canada</option>
                                    <option value="44" >Cape Verde</option>
                                    <option value="45" >Cayman Islands</option>
                                    <option value="47" >Chad</option>
                                    <option value="48" >Chile</option>
                                    <option value="49" >China</option>
                                    <option value="50" >Christmas Island</option>
                                    <option value="51" >Clipperton Island</option>
                                    <option value="52" >Cocos (Keeling) Islands</option>
                                    <option value="53" >Colombia</option>
                                    <option value="54" >Comoros</option>
                                    <option value="56" >Congo, Republic of the</option>
                                    <option value="57" >Cook Islands</option>
                                    <option value="58" >Coral Sea Islands</option>
                                    <option value="59" >Costa Rica</option>
                                    <option value="60" >Cote d'Ivoire</option>
                                    <option value="61" >Croatia</option>
                                    <option value="62" >Cuba</option>
                                    <option value="63" >Cyprus</option>
                                    <option value="64" >Czech Republic</option>
                                    <option value="65" >Denmark</option>
                                    <option value="66" >Djibouti</option>
                                    <option value="67" >Dominica</option>
                                    <option value="68" >Dominican Republic</option>
                                    <option value="69" >East Timor</option>
                                    <option value="70" >Ecuador</option>
                                    <option value="71" >Egypt</option>
                                    <option value="72" >El Salvador</option>
                                    <option value="73" >Equatorial Guinea</option>
                                    <option value="74" >Eritrea</option>
                                    <option value="75" >Estonia</option>
                                    <option value="76" >Ethiopia</option>
                                    <option value="77" >Europa Island</option>
                                    <option value="79" >Faroe Islands</option>
                                    <option value="80" >Fiji</option>
                                    <option value="81" >Finland</option>
                                    <option value="82" >France</option>
                                    <option value="83" >France, Metropolitan</option>
                                    <option value="84" >French Guiana</option>
                                    <option value="85" >French Polynesia</option>
                                    <option value="87" >Gabon</option>
                                    <option value="89" >Gaza Strip</option>
                                    <option value="90" >Georgia</option>
                                    <option value="91" >Germany</option>
                                    <option value="92" >Ghana</option>
                                    <option value="93" >Gibraltar</option>
                                    <option value="94" >Glorioso Islands</option>
                                    <option value="95" >Greece</option>
                                    <option value="96" >Greenland</option>
                                    <option value="97" >Grenada</option>
                                    <option value="98" >Guadeloupe</option>
                                    <option value="99" >Guam</option>
                                    <option value="100" >Guatemala</option>
                                    <option value="101" >Guernsey</option>
                                    <option value="102" >Guinea</option>
                                    <option value="103" >Guinea-Bissau</option>
                                    <option value="104" >Guyana</option>
                                    <option value="105" >Haiti</option>
                                    <option value="107" >Holy See (Vatican City)</option>
                                    <option value="108" >Honduras</option>
                                    <option value="109" >Hong Kong (SAR)</option>
                                    <option value="110" >Howland Island</option>
                                    <option value="111" >Hungary</option>
                                    <option value="112" >Iceland</option>
                                    <option value="113" >India</option>
                                    <option value="114" >Indonesia</option>
                                    <option value="115" >Iran</option>
                                    <option value="116" >Iraq</option>
                                    <option value="117" >Ireland</option>
                                    <option value="118" >Israel</option>
                                    <option value="119" >Italy</option>
                                    <option value="120" >Jamaica</option>
                                    <option value="121" >Jan Mayen</option>
                                    <option value="122" >Japan</option>
                                    <option value="123" >Jarvis Island</option>
                                    <option value="124" >Jersey</option>
                                    <option value="125" >Johnston Atoll</option>
                                    <option value="126" >Jordan</option>
                                    <option value="127" >Juan de Nova Island</option>
                                    <option value="128" >Kazakhstan</option>
                                    <option value="129" >Kenya</option>
                                    <option value="130" >Kingman Reef</option>
                                    <option value="131" >Kiribati</option>
                                    <option value="132" >Korea, North</option>
                                    <option value="133" >Korea, South</option>
                                    <option value="134" >Kuwait</option>
                                    <option value="135" >Kyrgyzstan</option>
                                    <option value="136" >Laos</option>
                                    <option value="137" >Latvia</option>
                                    <option value="138" >Lebanon</option>
                                    <option value="139" >Lesotho</option>
                                    <option value="140" >Liberia</option>
                                    <option value="141" >Libya</option>
                                    <option value="142" >Liechtenstein</option>
                                    <option value="143" >Lithuania</option>
                                    <option value="144" >Luxembourg</option>
                                    <option value="145" >Macao</option>
                                    <option value="146" >Macedonia</option>
                                    <option value="147" >Madagascar</option>
                                    <option value="148" >Malawi</option>
                                    <option value="149" >Malaysia</option>
                                    <option value="150" >Maldives</option>
                                    <option value="151" >Mali</option>
                                    <option value="152" >Malta</option>
                                    <option value="153" >Man, Isle of</option>
                                    <option value="154" >Marshall Islands</option>
                                    <option value="155" >Martinique</option>
                                    <option value="156" >Mauritania</option>
                                    <option value="157" >Mauritius</option>
                                    <option value="158" >Mayotte</option>
                                    <option value="159" >Mexico</option>
                                    <option value="160" >Micronesia</option>
                                    <option value="161" >Midway Islands</option>
                                    <option value="162" >Miscellaneous </option>
                                    <option value="163" >Moldova</option>
                                    <option value="164" >Monaco</option>
                                    <option value="165" >Mongolia</option>
                                    <option value="166" >Montenegro</option>
                                    <option value="167" >Montserrat</option>
                                    <option value="168" >Morocco</option>
                                    <option value="169" >Mozambique</option>
                                    <option value="170" >Myanmar</option>
                                    <option value="171" >Namibia</option>
                                    <option value="172" >Nauru</option>
                                    <option value="173" >Navassa Island</option>
                                    <option value="174" >Nepal</option>
                                    <option value="175" >Netherlands</option>
                                    <option value="176" >Netherlands Antilles</option>
                                    <option value="177" >New Caledonia</option>
                                    <option value="178" >New Zealand</option>
                                    <option value="179" >Nicaragua</option>
                                    <option value="180" >Niger</option>
                                    <option value="181" >Nigeria</option>
                                    <option value="182" >Niue</option>
                                    <option value="183" >Norfolk Island</option>
                                    <option value="184" >Northern Mariana Islands</option>
                                    <option value="185" >Norway</option>
                                    <option value="186" >Oman</option>
                                    <option value="187" >Pakistan</option>
                                    <option value="188" >Palau</option>
                                    <option value="189" >Palmyra Atoll</option>
                                    <option value="190" >Panama</option>
                                    <option value="191" >Papua New Guinea</option>
                                    <option value="192" >Paracel Islands</option>
                                    <option value="193" >Paraguay</option>
                                    <option value="194" >Peru</option>
                                    <option value="195" >Philippines</option>
                                    <option value="196" >Pitcairn Islands</option>
                                    <option value="197" >Poland</option>
                                    <option value="198" >Portugal</option>
                                    <option value="199" >Puerto Rico</option>
                                    <option value="200" >Qatar</option>
                                    <option value="202" >Romania</option>
                                    <option value="203" >Russia</option>
                                    <option value="204" >Rwanda</option>
                                    <option value="205" >Saint Helena</option>
                                    <option value="206" >Saint Kitts and Nevis</option>
                                    <option value="207" >Saint Lucia</option>
                                    <option value="208" >Saint Pierre and Miquelon</option>
                                    <option value="209" >Saint Vincent and the Grenadines</option>
                                    <option value="210" >Samoa</option>
                                    <option value="211" >San Marino</option>
                                    <option value="213" >Saudi Arabia</option>
                                    <option value="214" >Senegal</option>
                                    <option value="215" >Serbia</option>
                                    <option value="216" >Serbia and Montenegro</option>
                                    <option value="217" >Seychelles</option>
                                    <option value="218" >Sierra Leone</option>
                                    <option value="219" >Singapore</option>
                                    <option value="220" >Slovakia</option>
                                    <option value="221" >Slovenia</option>
                                    <option value="222" >Solomon Islands</option>
                                    <option value="223" >Somalia</option>
                                    <option value="224" >South Africa</option>
                                    <option value="225" >South Georgia</option>
                                    <option value="226" >Spain</option>
                                    <option value="227" >Spratly Islands</option>
                                    <option value="228" >Sri Lanka</option>
                                    <option value="229" >Sudan</option>
                                    <option value="230" >Suriname</option>
                                    <option value="231" >Svalbard</option>
                                    <option value="232" >Swaziland</option>
                                    <option value="233" >Sweden</option>
                                    <option value="234" >Switzerland</option>
                                    <option value="235" >Syria</option>
                                    <option value="236" >Taiwan</option>
                                    <option value="237" >Tajikistan</option>
                                    <option value="238" >Tanzania</option>
                                    <option value="239" >Thailand</option>
                                    <option value="88" >The Gambia</option>
                                    <option value="240" >Togo</option>
                                    <option value="241" >Tokelau</option>
                                    <option value="242" >Tonga</option>
                                    <option value="243" >Trinidad and Tobago</option>
                                    <option value="244" >Tromelin Island</option>
                                    <option value="245" >Tunisia</option>
                                    <option value="246" >Turkey</option>
                                    <option value="247" >Turkmenistan</option>
                                    <option value="248" >Turks and Caicos Islands</option>
                                    <option value="249" >Tuvalu</option>
                                    <option value="250" >Uganda</option>
                                    <option value="251" >Ukraine</option>
                                    <option value="252" >United Arab Emirates</option>
                                    <option value="253" >United Kingdom</option>
                                    <option value="254" >United States</option>
                                    <option value="256" >Uruguay</option>
                                    <option value="257" >Uzbekistan</option>
                                    <option value="258" >Vanuatu</option>
                                    <option value="259" >Venezuela</option>
                                    <option value="260" >Vietnam</option>
                                    <option value="261" >Virgin Islands</option>
                                    <option value="262" >Virgin Islands (UK)</option>
                                    <option value="263" >Virgin Islands (US)</option>
                                    <option value="264" >Wake Island</option>
                                    <option value="265" >Wallis and Futuna</option>
                                    <option value="266" >West Bank</option>
                                    <option value="267" >Western Sahara</option>
                                    <option value="268" >Western Samoa</option>
                                    <option value="269" >World</option>
                                    <option value="270" >Yemen</option>
                                    <option value="271" >Yugoslavia</option>
                                    <option value="272" >Zaire</option>
                                    <option value="273" >Zambia</option>
                                    <option value="274" >Zimbabwe</option>
                                </select>

                            </div>
                            <input type="checkbox" name="with_photo" value="with"  style="margin-left: 40px;"/> <span>With Photo</span>


                            <button type="submit" class="btn">Search</button>
                        </form>

                    </div>
                </div>

            </div>
            <div>
                <br><br>
                <h1 style="color: white;"><strong class="animated2">Search Results</strong></h1>
                <br>
                <?php foreach($username as $value): ?>
                    <a href="#">
                        <div class="row search-card">
                            <br>
                            <div class="col-sm-2"><img src="http://dummyimage.com/160x160/e33f58/ffffff.jpg&text=sample-image"></div>
                            <div class="col-sm-6">
                                <h3>Description</h3>
                                <p>This is my description. im bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla.</p>
                            </div>
                            <div class="col-sm-4">
                                <h3>Info</h3>
                                <strong>Name:</strong><text style="text-align: right;"> <?php echo $value;?></text><br>
                                <strong>Age:</strong><text style="text-align: right;">  17</text><br>
                                <strong>Sex:</strong><text style="text-align: right;">  Male</text><br>
                                <strong>Country:</strong><text style="text-align: right;">  Pakistan</text><br>

                            </div>
                        </div>
                    </a>
                    <br>
                <?php endforeach;?>

            </div>
        </div>
    </div>

</div>
<?php include 'includes/footer.inc';?>

<?php include 'includes/footerform.inc';?>


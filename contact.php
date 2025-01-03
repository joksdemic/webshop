<?php require_once 'C:\\xampp\\htdocs\\webshop\\helpers.php'; ?>

<?php loadPartial('head'); ?>
<?php loadPartial('navbar'); ?> 
    

<section class="form pb-5">
    <div class="container">
        <div class="row pt-3">
            <div class="col-lg-4 p-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45348.04064086104!2d20.42335522844511!3d44.73486434254764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a71c255afc6db%3A0x1f6933fd1fd7e4bc!2sMaps!5e0!3m2!1sen!2srs!4v1732063208122!5m2!1sen!2srs"  width="400" height="487" style="border:0;" allowfullscreen="" loading="eager" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-lg-8 form-box py-5 px-5">
                <div class="d-flex justify-content-between">
                    <div class="form-group col-lg-6 mb-3 form-box-right">
                        <label for="">Unesite ime</label>
                        <input type="text" placeholder="Ime">
                    </div>
                    <div class="form-group col-lg-6 mb-3 form-box-left">
                        <label for="">Unesite prezime</label>
                        <input type="text" placeholder="Prezime">
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <div class="form-group col-lg-6 mb-3 form-box-right">
                        <label for="">Unesite email</label>
                        <input type="email" placeholder="email@gmail.com">
                    </div>
                    <div class="form-group col-lg-6 mb-3 form-box-left">
                        <div class="phone-input-container">
                            <select id="countryCode" class="country-code">
                                <option value="+1">+1 (USA)</option>
                                <option value="+7">+7 (Rusija)</option>
                                <option value="+20">+20 (Juzna Afrika)</option>
                                <option value="+30">+30 (Grcka)</option>
                                <option value="+31">+31 (Holandija)</option>
                                <option value="+32">+32 (Belgija)</option>
                                <option value="+33">+33 (Francuska)</option>
                                <option value="+34">+34 (Spanija)</option>
                                <option value="+36">+36 (Madjarska)</option>
                                <option value="+39">+39 (Italija)</option>
                                <option value="+40">+40 (Rumunija)</option>
                                <option value="+41">+41 (Švajcarska)</option>
                                <option value="+43">+43 (Austrija)</option>
                                <option value="+44">+44 (Ujedinjeno Kraljevstvo)</option>
                                <option value="+45">+45 (Danska)</option>
                                <option value="+46">+46 (Švedska)</option>
                                <option value="+47">+47 (Norveška)</option>
                                <option value="+48">+48 (Poljska)</option>
                                <option value="+51">+51 (Peru)</option>
                                <option value="+52">+ 52 (Meksiko)</option>
                                <option value="+53">+53 (Kuba)</option>
                                <option value="+54">+54 (Argentina)</option>
                                <option value="+55">+55 (Brazil)</option>
                                <option value="+56">+56 (Čile)</option>
                                <option value="+57">+57 (Kolumbija)</option>
                                <option value="+58">+58 (Venecuela)</option>
                                <option value="+60">+60 (Malezija)</option>
                                <option value="+61">+61 (Australija)</option>
                                <option value="+62">+62 (Indonezija)</option>
                                <option value="+63">+63 (Filipini)</option>
                                <option value="+64">+64 (Novi Zeland)</option>
                                <option value="+65">+65 (Singapur)</option>
                                <option value="+66">+66 (Tajland)</option>
                                <option value="+73">+73 (Kazahstan)</option>
                                <option value="+81">+81 (Japan)</option>
                                <option value="+84">+84 (Vietnam)</option>
                                <option value="+86">+86 (Kina)</option>
                                <option value="+90">+90 (Turska)</option>
                                <option value="+91">+91 (India)</option>
                                <option value="+92">+92 (Pakistan)</option>
                                <option value="+93">+93 (Avganistan)</option>
                                <option value="+94">+94 (Šri Lanka)</option>
                                <option value="+95">+95 (Burma)</option>
                                <option value="+98">+98 (Iran)</option>
                                <option value="+212">+212 (Maroko)</option>
                                <option value="+213">+213 (Alžir)</option>
                                <option value="+216">+216 (Tunis)</option>
                                <option value="+218">+218 (Libija)</option>
                                <option value="+220">+220 (Gambija)</option>
                                <option value="+221">+221 (Senegal)</option>
                                <option value="+222">+222 (Mauritanija)</option>
                                <option value="+223">+223 (Mali)</option>
                                <option value="+224">+224 (Gvineja)</option>
                                <option value="+225">+225 (Obala Slonovače)</option>
                                <option value="+226">+226 (Burkina Faso)</option>
                                <option value="+227">+227 (Niger)</option>
                                <option value="+228">+228 (Togo)</option>
                                <option value="+229">+229 (Benin)</option>
                                <option value="+230">+230 (Mauricijus)</option>
                                <option value="+231">+231 (Liberija)</option>
                                <option value="+232">+232 (Sijera Leone)</option>
                                <option value="+233">+233 (Gana)</option>
                                <option value="+234">+234 (Nigerija)</option>
                                <option value="+235">+235 (Čad)</option>
                                <option value="+236">+236 (Centralnoafrička Republika)</option>
                                <option value="+237">+237 (Kamerun)</option>
                                <option value="+238">+238 (Zelenortska Ostrva)</option>
                                <option value="+239">+239 (Sao Tome i Principe)</option>
                                <option value="+240">+240 (Ekvatorijalna Gvineja)</option>
                                <option value="+241">+241 (Gabon)</option>
                                <option value="+242">+242 (Kongo)</option>
                                <option value="+243">+243 (DR Kongo)</option>
                                <option value="+244">+244 (Angola)</option>
                                <option value="+245">+245 (Gvineja Bisao)</option>
                                <option value="+246">+246 (Dijego Garsija)</option>
                                <option value="+247">+247 (Asension)</option>
                                <option value="+248">+248 (Sejšeli)</option>
                                <option value="+249"> +249 (Sudan)</option>
                                <option value="+250">+250 (Ruanda)</option>
                                <option value="+251">+251 (Etiopija)</option>
                                <option value="+252">+252 (Somalija)</option>
                                <option value="+253">+253 (Džibuti)</option>
                                <option value="+254">+254 (Kenija)</option>
                                <option value="+255">+255 (Tanzanija)</option>
                                <option value="+256">+256 (Uganda)</option>
                                <option value="+257">+257 (Burundi)</option>
                                <option value="+258">+258 (Mozambik)</option>
                                <option value="+259">+259 (Zanzibar)</option>
                                <option value="+260">+260 (Zambija)</option>
                                <option value="+261">+261 (Madagaskar)</option>
                                <option value="+262">+262 (Reunion i Majote)</option>
                                <option value="+263">+263 (Zimbabve)</option>
                                <option value="+264">+264 (Nambija)</option>
                                <option value="+265">+265 (Malavi)</option>
                                <option value="+266">+266 (Lesoto)</option>
                                <option value="+267">+267 (Bocvana)</option>
                                <option value="+268">+268 (Svazilend)</option>
                                <option value="+269">+269 (Komori)</option>
                                <option value="+28x">+28x (nedodeljeno)</option>
                                <option value="+290">+290 (Sveta Jelena)</option>
                                <option value="+291">+291 (Eritreja)</option>
                                <option value="+292">+292 (nedodeljeno)</option>
                                <option value="+293">+293 (nedodeljeno)</option>
                                <option value="+294">+294 (nedodeljeno)</option>
                                <option value="+296">+296 (nedodeljeno)</option>
                                <option value="+297">+297 (Aruba)</option>
                                <option value="+298">+298 (Farska ostrva)</option>
                                <option value="+299">+299 (Grenland)</option>
                                <option value="+350">+350 (Gibraltar)</option>
                                <option value="+351">+351 (Portugalija)</option>
                                <option value="+352">+352 (Luksemburg)</option>
                                <option value="+353">+353 (Irska)</option>
                                <option value="+354">+354 (Island)</option>
                                <option value="+355">+355 (Albanija)</option>
                                <option value="+356">+356 (Malta)</option>
                                <option value="+357">+357 (Kipar)</option>
                                <option value="+358">+358 (Finska)</option>
                                <option value="+359">+359 (Bugarska)</option>
                                <option value="+370">+370 (Litvanija)</option>
                                <option value="+371">+371 (Letonija)</option>
                                <option value="+372">+372 (Estonija)</option>
                                <option value="+373">+373 (Moldavija)</option>
                                <option value="+374">+374 (Jermenija)</option>
                                <option value="+375">+375 (Belorusija)</option>
                                <option value="+376">+376 (Andora)</option>
                                <option value="+377">+377 (Monako)</option>
                                <option value="+378">+378 (San Marino)</option>
                                <option value="+379">+379 (Vatikan)</option>
                                <option value="+380">+380 (Ukrajina)</option>
                                <option value="+381">+381 (Srbija)</option>
                                <option value="+382">+382 (Crna Gora)</option>
                                <option value="+385">+385 (Hrvatska)</option>
                                <option value="+386">+386 (Slovenija)</option>
                                <option value="+387">+387 (Bosna i Hercegovina)</option>
                                <option value="+388">+388 (European Tel. Numbering Space)</option>
                                <option value="+389">+389 (Makedonija)</option>
                                <option value="+420">+420 (Češka)</option>
                                <option value="+421">+421 (Slovačka)</option>
                                <option value="+423">+423 (Lihtenštajn)</option>
                                <option value="+500">+500 (Foklandska ostrva)</option>
                                <option value="+501">+501 (Beliz)</option>
                                <option value="+502">+502 (Gvatemala)</option>
                                <option value="+503">+503 (El Salvador)</option>
                                <option value="+504">+504 (Honduras)</option>
                                <option value="+505">+505 (Nikaragva)</option>
                                <option value="+506">+506 (Kostarika)</option>
                                <option value="+507">+507 (Panama)</option>
                                <option value="+508">+508 (Sen Pjer i Mišel)</option>
                                <option value="+509">+509 (Haiti)</option>
                                <option value="+590">+590 (Gvadalupa)</option>
                                <option value="+591">+591 (Bolivija)</option>
                                <option value="+592">+592 (Gvajana)</option>
                                <option value="+593">+593 (Ekvador)</option>
                                <option value="+594">+594 (Francuska Gvajana)</option>
                                <option value="+595">+595 (Paragvaj)</option>
                                <option value="+596">+596 (Martinik)</option>
                                <option value="+597">+597 (Surinam)</option>
                                <option value="+598">+598 (Urugvaj)</option>
                                <option value="+599">+599 (Holandski Antili)</option>
                                <option value="+670">+670 (Istočni Timor)</option>
                                <option value="+671">+671 (nedodeljeno)</option>
                                <option value="+672">+672 (Ostale Australijske zemlje)</option>
                                <option value="+673">+673 (Bruneji)</option>
                                <option value="+674">+674 (Nauru)</option>
                                <option value="+675">+675 (Papua Nova Gvineja)</option>
                                <option value="+676">+676 (Tonga)</option>
                                <option value="+677">+677 (Solomonska ostrva)</option>
                                <option value="+678">+678 (Vanuatu)</option>
                                <option value="+679">+679 (Fidži)</option>
                                <option value="+680">+680 (Palau)</option>
                                <option value="+681">+681 (Valis i Fortuna)</option>
                                <option value="+682">+682 (Kukova ostrva)</option>
                                <option value="+683">+683 (Niuve ostrvo)</option>
                                <option value="+684">+684 (nedodeljeno)</option>
                                <option value="+685">+685 (Zapadna Samoa)</option>
                                <option value="+686">+686 (Kiribati, Gilbertova ostrva)</option>
                                <option value="+687">+687 (Nova Kaledonija)</option>
                                <option value="+688">+688 (Tuvalu, Elisova ostrva)</option>
                                <option value="+689">+689 (Francuska Polinezija)</option>
                                <option value="+690">+690 (Tokelau)</option>
                                <option value="+691">+691 (Sjedinjene države Mikronezije)</option>
                                <option value="+692">+692 (Maršalova ostrva)</option>
                            </select>
                            <input type="tel" id="phoneNumber" class="phone-number" placeholder="Unesite broj telefona">
                        </div>
                    </div>
                </div>
                
                <div class="form-group" id="message">
                    <label for="">Poruka</label>
                    <textarea cols="30" rows="5" placeholder="..."></textarea>
                </div>

                <div class="pt-3"><button id="formBtn" class="button button-main w-100" href="">Pošalji poruku <img width="20" height="20" src="https://img.icons8.com/ios-filled/50/FFFFFF/send.png" alt="send"/></button></div>
            
            </div>
        </div>
    </div>
</section>     

<?php loadPartial('footer'); ?>
<script src="public/js/script.js"></script>
</body>
</html>
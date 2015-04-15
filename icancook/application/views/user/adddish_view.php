<section class="booking">
    <div class="container ">
        <header class="entry-header aligncenter section-header section-contact-header margin-top padding-top">
            <h2 class="entry-title">
                Add Your Procedure
            </h2>
            <h3 class="entry-title-desc">
                Tell Us how
            </h3>   
        </header>

        <div class="booking-form-wrap padding">
            <h3 class="entry-title">Details</h3><hr />

             <form class="tt-form booking-form margin-top padding-top add_dish"  action="<?= base_url('ajax/add_dish');?>" method="POST" >
 
                <div class="row form-row"><!-- Start Row -->

                    <div class="col-md-8 column no-padding"><!-- Start Column -->
                        <label class="control-label">Name Of Dish</label>
                        <div class="input-cover contact-line">
                            <input type="text" class="contact-form-line" value="" placeholder="Name" name="name" required>
                        </div>
                    </div><!-- End Column -->
                     
                    <div class="col-md-2 column no-padding">
                        <label class="control-label">State</label>
                        <div class="input-cover contact-line">
                            <select id="state" name="state">
                                <option value="">--Select--</option>
                                <option value="ABIA">ABIA</option>
                                <option value="ADAMAWA">ADAMAWA</option>
                                <option value="AKWA IBOM">AKWA IBOM</option>
                                <option value="ANAMBRA">ANAMBRA</option>
                                <option value="BAUCHI">BAUCHI</option>
                                <option value="BAYELSA">BAYELSA</option>
                                <option value="BENUE ">BENUE </option>
                                <option value="BORNO">BORNO</option>
                                <option value="CROSS RIVER">CROSS RIVER</option>
                                <option value="DELTA">DELTA</option>
                                <option value="EDO">EDO</option>
                                <option value="EBONYI">EBONYI</option>
                                <option value="EKITI">EKITI</option>
                                <option value="ENUGU">ENUGU</option>
                                <option value="GOMBE ">GOMBE </option>
                                <option value="IMO">IMO</option>
                                <option value="JIGAWA">JIGAWA</option>
                                <option value="KADUNA">KADUNA</option>
                                <option value="KANO">KANO</option>
                                <option value="KATSINA">KATSINA</option>
                                <option value="KEBBI ">KEBBI </option>
                                <option value="KOGI">KOGI</option>
                                <option value="KWARA">KWARA</option>
                                <option value="LAGOS">LAGOS</option>
                                <option value="NASSARAWA">NASSARAWA</option>
                                <option value="NIGER">NIGER</option>
                                <option value="OGUN">OGUN</option>
                                <option value="ONDO">ONDO</option>
                                <option value="OSUN">OSUN</option>
                                <option value="OYO">OYO</option>
                                <option value="PLATEAU">PLATEAU</option>
                                <option value="RIVERS">RIVERS</option>
                                <option value="SOKOTO">SOKOTO</option>
                                <option value="TARABA">TARABA</option>
                                <option value="YOBE">YOBE</option>
                                <option value="ZAMFARA">ZAMFARA</option>
                                <option value="FCT">FCT</option>
                            </select>
                        </div>                                                                    
                    </div>

                    <div class="col-md-2 column no-padding">
                        <label class="control-label">L.G.A</label>
                        <div class="input-cover contact-line">
                            <select id="lga" name="lga">
                                <option value="">--Select--</option>
                                <option value="Aba North">Aba North</option>
                                <option value="Aba South">Aba South</option>
                                <option value="Arochukwu">Arochukwu</option>
                                <option value="Bende">Bende</option>
                                <option value="Ikwuano">Ikwuano</option>
                                <option value="Isiala-Ngwa North">Isiala-Ngwa North</option>
                                <option value="Isiala-Ngwa South">Isiala-Ngwa South</option>
                                <option value="Isuikwato">Isuikwato</option>
                                <option value="Obi Nwa">Obi Nwa</option>
                                <option value="Ohafia">Ohafia</option>
                                <option value="Osisioma">Osisioma</option>
                                <option value="Ngwa">Ngwa</option>
                                <option value="Ugwunagbo">Ugwunagbo</option>
                                <option value="Ukwa East">Ukwa East</option>
                                <option value="Ukwa West ">Ukwa West </option>
                                <option value="Umuahia North">Umuahia North</option>
                                <option value="Umuahia South">Umuahia South</option>
                                <option value="Umu-Neochi">Umu-Neochi</option>
                                <option value="Demsa">Demsa</option>
                                <option value="Fufore">Fufore</option>
                                <option value="Ganaye">Ganaye</option>
                                <option value="Gireri">Gireri</option>
                                <option value="Gombi">Gombi</option>
                                <option value="Guyuk">Guyuk</option>
                                <option value="Hong">Hong</option>
                                <option value="Jada">Jada</option>
                                <option value="Lamurde">Lamurde</option>
                                <option value="Madagali">Madagali</option>
                                <option value="Maiha">Maiha</option>
                                <option value="Mayo-Belwa">Mayo-Belwa</option>
                                <option value="Michika">Michika</option>
                                <option value="Mubi North">Mubi North</option>
                                <option value="Mubi South">Mubi South</option>
                                <option value="Numan">Numan</option>
                                <option value="Shelleng">Shelleng</option>
                                <option value="Song">Song</option>
                                <option value="Toungo">Toungo</option>
                                <option value="Yola North">Yola North</option>
                                <option value="Yola South">Yola South</option>
                                <option value="Eastern Obolo">Eastern Obolo</option>
                                <option value="Eket">Eket</option>
                                <option value="Esit Eket">Esit Eket</option>
                                <option value="Essien Udim">Essien Udim</option>
                                <option value="Etim Ekpo">Etim Ekpo</option>
                                <option value="Etinan">Etinan</option>
                                <option value="Ibeno">Ibeno</option>
                                <option value="Ibesikpo Asutan">Ibesikpo Asutan</option>
                                <option value="Ibiono Ibom">Ibiono Ibom</option>
                                <option value="Ika">Ika</option>
                                <option value="Ikono">Ikono</option>
                                <option value="Ikot Abasi">Ikot Abasi</option>
                                <option value="Ikot Ekpene">Ikot Ekpene</option>
                                <option value="Ini">Ini</option>
                                <option value="Itu">Itu</option>
                                <option value="Mbo">Mbo</option>
                                <option value="Mkpat Enin">Mkpat Enin</option>
                                <option value="Nsit Atai">Nsit Atai</option>
                                <option value="Nsit Ibom">Nsit Ibom</option>
                                <option value="Nsit Ubium">Nsit Ubium</option>
                                <option value="Obot Akara">Obot Akara</option>
                                <option value="Okobo">Okobo</option>
                                <option value="Onna">Onna</option>
                                <option value="Oron">Oron</option>
                                <option value="Oruk Anam">Oruk Anam</option>
                                <option value="Udung Uko">Udung Uko</option>
                                <option value="Ukanafun">Ukanafun</option>
                                <option value="Uruan">Uruan</option>
                                <option value="Urue-Offong/Oruko">Urue-Offong/Oruko</option>
                                <option value="Uyo">Uyo</option>
                                <option value="Anambra East">Anambra East</option>
                                <option value="Anambra West">Anambra West</option>
                                <option value="Anaocha">Anaocha</option>
                                <option value="Awka North">Awka North</option>
                                <option value="Awka South">Awka South</option>
                                <option value="Ayamelum">Ayamelum</option>
                                <option value="Dunukofia">Dunukofia</option>
                                <option value="Ekwusigo">Ekwusigo</option>
                                <option value="Idemili south">Idemili south</option>
                                <option value="Ihiala">Ihiala</option>
                                <option value="Njikoka">Njikoka</option>
                                <option value="Nnewi North">Nnewi North</option>
                                <option value="Nnewi South">Nnewi South</option>
                                <option value="Ogbaru">Ogbaru</option>
                                <option value="Onitsha North">Onitsha North</option>
                                <option value="Onitsha South">Onitsha South</option>
                                <option value="Orumba North">Orumba North</option>
                                <option value="Orumba South">Orumba South</option>
                                <option value="Oyi">Oyi</option>
                                <option value="Bauchi">Bauchi</option>
                                <option value="Bogoro">Bogoro</option>
                                <option value="Damban">Damban</option>
                                <option value="Darazo">Darazo</option>
                                <option value="Dass">Dass</option>
                                <option value="Ganjuwa">Ganjuwa</option>
                                <option value="Giade">Giade</option>
                                <option value="Itas/Gadau">Itas/Gadau</option>
                                <option value="Jama'are">Jama'are</option>
                                <option value="Katagum">Katagum</option>
                                <option value="Kirfi">Kirfi</option>
                                <option value="Misau">Misau</option>
                                <option value="Ningi">Ningi</option>
                                <option value="Shira">Shira</option>
                                <option value="Tafawa-Balewa">Tafawa-Balewa</option>
                                <option value="Toro">Toro</option>
                                <option value="Warji">Warji</option>
                                <option value="Zaki">Zaki</option>
                                <option value="Ekeremor">Ekeremor</option>
                                <option value="Kolokuma/Opokuma">Kolokuma/Opokuma</option>
                                <option value="Nembe">Nembe</option>
                                <option value="Ogbia">Ogbia</option>
                                <option value="Sagbama">Sagbama</option>
                                <option value="Southern Jaw">Southern Jaw</option>
                                <option value="Yenegoa">Yenegoa</option>
                                <option value="Agatu">Agatu</option>
                                <option value="Apa">Apa</option>
                                <option value="Buruku">Buruku</option>
                                <option value="Gboko">Gboko</option>
                                <option value="Guma">Guma</option>
                                <option value="Gwer East">Gwer East</option>
                                <option value="Gwer West">Gwer West</option>
                                <option value="Katsina-Ala">Katsina-Ala</option>
                                <option value="Konshisha">Konshisha</option>
                                <option value="Kwande">Kwande</option>
                                <option value="Logo">Logo</option>
                                <option value="Makurdi">Makurdi</option>
                                <option value="Obi">Obi</option>
                                <option value="Ogbadibo">Ogbadibo</option>
                                <option value="Oju">Oju</option>
                                <option value="Okpokwu">Okpokwu</option>
                                <option value="Ohimini">Ohimini</option>
                                <option value="Oturkpo">Oturkpo</option>
                                <option value="Tarka">Tarka</option>
                                <option value="Ukum">Ukum</option>
                                <option value="Ushongo">Ushongo</option>
                                <option value="Vandeikya">Vandeikya</option>
                                <option value="Askira/Uba">Askira/Uba</option>
                                <option value="Bama">Bama</option>
                                <option value="Bayo">Bayo</option>
                                <option value="Biu">Biu</option>
                                <option value="Chibok">Chibok</option>
                                <option value="Damboa">Damboa</option>
                                <option value="Dikwa">Dikwa</option>
                                <option value="Gubio">Gubio</option>
                                <option value="Guzamala">Guzamala</option>
                                <option value="Gwoza">Gwoza</option>
                                <option value="Hawul">Hawul</option>
                                <option value="Jere">Jere</option>
                                <option value="Kaga">Kaga</option>
                                <option value="Kala/Balge">Kala/Balge</option>
                                <option value="Konduga">Konduga</option>
                                <option value="Kukawa">Kukawa</option>
                                <option value="Kwaya Kusar">Kwaya Kusar</option>
                                <option value="Mafa">Mafa</option>
                                <option value="Magumeri">Magumeri</option>
                                <option value="Maiduguri">Maiduguri</option>
                                <option value="Marte">Marte</option>
                                <option value="Mobbar">Mobbar</option>
                                <option value="Monguno">Monguno</option>
                                <option value="Ngala">Ngala</option>
                                <option value="Nganzai">Nganzai</option>
                                <option value="Shani">Shani</option>
                                <option value="Odukpani">Odukpani</option>
                                <option value="Akamkpa">Akamkpa</option>
                                <option value="Biase">Biase</option>
                                <option value="Abi">Abi</option>
                                <option value="Ikom">Ikom</option>
                                <option value="Yarkur">Yarkur</option>
                                <option value="Obubra">Obubra</option>
                                <option value="Boki">Boki</option>
                                <option value="Ogoja">Ogoja</option>
                                <option value="Yala">Yala</option>
                                <option value="Obanliku">Obanliku</option>
                                <option value="Obudu">Obudu</option>
                                <option value="Calabar South">Calabar South</option>
                                <option value="Etung">Etung</option>
                                <option value="Bekwara">Bekwara</option>
                                <option value="Bakassi">Bakassi</option>
                                <option value="Calabar Municipality">Calabar Municipality</option>
                                <option value="Oshimili">Oshimili</option>
                                <option value="Aniocha">Aniocha</option>
                                <option value="Aniocha South">Aniocha South</option>
                                <option value="Ika South">Ika South</option>
                                <option value="Ika North-East">Ika North-East</option>
                                <option value="Ndokwa West">Ndokwa West</option>
                                <option value="Ndokwa East">Ndokwa East</option>
                                <option value="Isoko south">Isoko south</option>
                                <option value="Isoko North">Isoko North</option>
                                <option value="Bomadi">Bomadi</option>
                                <option value="Burutu">Burutu</option>
                                <option value="Ughelli South">Ughelli South</option>
                                <option value="Ughelli North">Ughelli North</option>
                                <option value="Ethiope West">Ethiope West</option>
                                <option value="Ethiope East">Ethiope East</option>
                                <option value="Sapele">Sapele</option>
                                <option value="Okpe">Okpe</option>
                                <option value="Warri North">Warri North</option>
                                <option value="Warri South">Warri South</option>
                                <option value="Uvwie">Uvwie</option>
                                <option value="Udu">Udu</option>
                                <option value="Warri Central ">Warri Central </option>
                                <option value="Ukwani ">Ukwani </option>
                                <option value="Oshimili North">Oshimili North</option>
                                <option value="Patani">Patani</option>
                                <option value="Afikpo North">Afikpo North</option>
                                <option value="Onicha">Onicha</option>
                                <option value="Ohaozara">Ohaozara</option>
                                <option value="Abakaliki">Abakaliki</option>
                                <option value="Ishielu">Ishielu</option>
                                <option value="lkwo">lkwo</option>
                                <option value="Ezza">Ezza</option>
                                <option value="Ezza South">Ezza South</option>
                                <option value="Ohaukwu">Ohaukwu</option>
                                <option value="Ebonyi">Ebonyi</option>
                                <option value="Ivo">Ivo</option>
                                <option value="Esan North-East">Esan North-East</option>
                                <option value="Esan Central">Esan Central</option>
                                <option value="Esan West">Esan West</option>
                                <option value="Egor">Egor</option>
                                <option value="Ukpoba">Ukpoba</option>
                                <option value="Etsako Central">Etsako Central</option>
                                <option value="Igueben">Igueben</option>
                                <option value="Oredo">Oredo</option>
                                <option value="Ovia SouthWest">Ovia SouthWest</option>
                                <option value="Ovia North East">Ovia North East</option>
                                <option value="Orhiomwon">Orhiomwon</option>
                                <option value="Uhunmwonde">Uhunmwonde</option>
                                <option value="Etsako East">Etsako East</option>
                                <option value="Esan South-East">Esan South-East</option>
                                <option value="Ado">Ado</option>
                                <option value="Ekiti-East">Ekiti-East</option>
                                <option value="Ekiti-West">Ekiti-West</option>
                                <option value="Emure/Ise/Orun">Emure/Ise/Orun</option>
                                <option value="Ekiti South-West">Ekiti South-West</option>
                                <option value="Ikare">Ikare</option>
                                <option value="Irepodun">Irepodun</option>
                                <option value="Ijero">Ijero</option>
                                <option value="Ido/Osi">Ido/Osi</option>
                                <option value="Oye">Oye</option>
                                <option value="Ikole">Ikole</option>
                                <option value="Moba">Moba</option>
                                <option value="Gbonyin">Gbonyin</option>
                                <option value="Efon">Efon</option>
                                <option value="Ise/Orun">Ise/Orun</option>
                                <option value="Ilejemeje">Ilejemeje</option>
                                <option value="Enugu South">Enugu South</option>
                                <option value="Igbo-Eze South">Igbo-Eze South</option>
                                <option value="Enugu North">Enugu North</option>
                                <option value="Nkanu">Nkanu</option>
                                <option value="Udi Agwu">Udi Agwu</option>
                                <option value="Oji-River">Oji-River</option>
                                <option value="Ezeagu">Ezeagu</option>
                                <option value="IgboEze North">IgboEze North</option>
                                <option value="Isi-Uzo">Isi-Uzo</option>
                                <option value="Nsukka">Nsukka</option>
                                <option value="Igbo-Ekiti">Igbo-Ekiti</option>
                                <option value="Uzo-Uwani">Uzo-Uwani</option>
                                <option value="Enugu Eas">Enugu Eas</option>
                                <option value="Aninri">Aninri</option>
                                <option value="Nkanu East">Nkanu East</option>
                                <option value="Udenu">Udenu</option>
                                <option value="Akko">Akko</option>
                                <option value="Balanga">Balanga</option>
                                <option value="Billiri">Billiri</option>
                                <option value="Dukku">Dukku</option>
                                <option value="Kaltungo">Kaltungo</option>
                                <option value="Kwami">Kwami</option>
                                <option value="Shomgom">Shomgom</option>
                                <option value="Funakaye">Funakaye</option>
                                <option value="Gombe">Gombe</option>
                                <option value="Nafada/Bajoga">Nafada/Bajoga</option>
                                <option value="Yamaltu/Delta">Yamaltu/Delta</option>
                                <option value="Aboh-Mbaise">Aboh-Mbaise</option>
                                <option value="Ahiazu-Mbaise">Ahiazu-Mbaise</option>
                                <option value="Ehime-Mbano">Ehime-Mbano</option>
                                <option value="Ezinihitte">Ezinihitte</option>
                                <option value="Ideato North">Ideato North</option>
                                <option value="Ideato South">Ideato South</option>
                                <option value="Ihitte/Uboma">Ihitte/Uboma</option>
                                <option value="Ikeduru">Ikeduru</option>
                                <option value="Isiala Mbano">Isiala Mbano</option>
                                <option value="Isu">Isu</option>
                                <option value="Mbaitoli">Mbaitoli</option>
                                <option value="Maigatari">Maigatari</option>
                                <option value="Ngor-Okpala">Ngor-Okpala</option>
                                <option value="Njaba">Njaba</option>
                                <option value="Nwangele">Nwangele</option>
                                <option value="Nkwerre">Nkwerre</option>
                                <option value="Obowo">Obowo</option>
                                <option value="Oguta">Oguta</option>
                                <option value="Ohaji/Egbema">Ohaji/Egbema</option>
                                <option value="Okigwe">Okigwe</option>
                                <option value="Orlu">Orlu</option>
                                <option value="Orsu">Orsu</option>
                                <option value="Oru East">Oru East</option>
                                <option value="Oru West">Oru West</option>
                                <option value="Owerri-Municipal">Owerri-Municipal</option>
                                <option value="Owerri North">Owerri North</option>
                                <option value="Owerri West">Owerri West</option>
                                <option value="Auyo">Auyo</option>
                                <option value="Babura">Babura</option>
                                <option value="Birni Kudu">Birni Kudu</option>
                                <option value="Biriniwa">Biriniwa</option>
                                <option value="Buji">Buji</option>
                                <option value="Dutse">Dutse</option>
                                <option value="Gagarawa">Gagarawa</option>
                                <option value="Garki">Garki</option>
                                <option value="Gumel">Gumel</option>
                                <option value="Guri">Guri</option>
                                <option value="Gwiwa">Gwiwa</option>
                                <option value="Hadejia">Hadejia</option>
                                <option value="Jahun">Jahun</option>
                                <option value="Kafin Hausa">Kafin Hausa</option>
                                <option value="Kaugama Kazaure">Kaugama Kazaure</option>
                                <option value="Kiri Kasamma">Kiri Kasamma</option>
                                <option value="Kiyawa">Kiyawa</option>
                                <option value="Malam Madori">Malam Madori</option>
                                <option value="Miga">Miga</option>
                                <option value="Ringim">Ringim</option>
                                <option value="Roni">Roni</option>
                                <option value="Sule-Tankarkar">Sule-Tankarkar</option>
                                <option value="Taura">Taura</option>
                                <option value="Yankwashi">Yankwashi</option>
                                <option value="Birni-Gwari">Birni-Gwari</option>
                                <option value="Chikun">Chikun</option>
                                <option value="Giwa">Giwa</option>
                                <option value="Igabi">Igabi</option>
                                <option value="Ikara">Ikara</option>
                                <option value="jaba">jaba</option>
                                <option value="Jemaa">Jemaa</option>
                                <option value="Kachia">Kachia</option>
                                <option value="Kaduna North">Kaduna North</option>
                                <option value="Kaduna South">Kaduna South</option>
                                <option value="Kagarko">Kagarko</option>
                                <option value="Kajuru">Kajuru</option>
                                <option value="Kaura">Kaura</option>
                                <option value="Kauru">Kauru</option>
                                <option value="Kubau">Kubau</option>
                                <option value="Kudan">Kudan</option>
                                <option value="Lere">Lere</option>
                                <option value="Makarfi">Makarfi</option>
                                <option value="Sabon-Gari">Sabon-Gari</option>
                                <option value="Sanga">Sanga</option>
                                <option value="Soba">Soba</option>
                                <option value="Zango-Kataf ">Zango-Kataf </option>
                                <option value="Zaria">Zaria</option>
                                <option value="Ajingi">Ajingi</option>
                                <option value="Albasu">Albasu</option>
                                <option value="Bagwai">Bagwai</option>
                                <option value="Bebeji">Bebeji</option>
                                <option value="Bichi">Bichi</option>
                                <option value="Bunkure">Bunkure</option>
                                <option value="Dala">Dala</option>
                                <option value="Dambatta">Dambatta</option>
                                <option value="Dawakin Kudu">Dawakin Kudu</option>
                                <option value="Dawakin Tofa">Dawakin Tofa</option>
                                <option value="Doguwa">Doguwa</option>
                                <option value="Fagge">Fagge</option>
                                <option value="Gabasawa">Gabasawa</option>
                                <option value="Garko">Garko</option>
                                <option value="Garum">Garum</option>
                                <option value="Mallam">Mallam</option>
                                <option value="Gaya">Gaya</option>
                                <option value="Gezawa">Gezawa</option>
                                <option value="Gwale">Gwale</option>
                                <option value="Gwarzo">Gwarzo</option>
                                <option value="Kabo">Kabo</option>
                                <option value="Kano Municipal">Kano Municipal</option>
                                <option value="Karaye">Karaye</option>
                                <option value="Kibiya">Kibiya</option>
                                <option value="Kiru">Kiru</option>
                                <option value="kumbotso">kumbotso</option>
                                <option value="Kunchi">Kunchi</option>
                                <option value="Kura">Kura</option>
                                <option value="Madobi">Madobi</option>
                                <option value="Makoda">Makoda</option>
                                <option value="Minjibir">Minjibir</option>
                                <option value="Nasarawa">Nasarawa</option>
                                <option value="Rano">Rano</option>
                                <option value="Rimin Gado">Rimin Gado</option>
                                <option value="Rogo">Rogo</option>
                                <option value="Shanono">Shanono</option>
                                <option value="Sumaila">Sumaila</option>
                                <option value="Takali">Takali</option>
                                <option value="Tarauni">Tarauni</option>
                                <option value="Tofa">Tofa</option>
                                <option value="Tsanyawa">Tsanyawa</option>
                                <option value="Tudun Wada">Tudun Wada</option>
                                <option value="Ungogo">Ungogo</option>
                                <option value="Warawa">Warawa</option>
                                <option value="Wudil">Wudil</option>
                                <option value="Bakori">Bakori</option>
                                <option value="Batagarawa">Batagarawa</option>
                                <option value="Batsari">Batsari</option>
                                <option value="Baure">Baure</option>
                                <option value="Bindawa">Bindawa</option>
                                <option value="Charanchi">Charanchi</option>
                                <option value="Dandume">Dandume</option>
                                <option value="Danja">Danja</option>
                                <option value="Dan Musa">Dan Musa</option>
                                <option value="Daura">Daura</option>
                                <option value="Dutsi">Dutsi</option>
                                <option value="Dutsin-Ma">Dutsin-Ma</option>
                                <option value="Faskari">Faskari</option>
                                <option value="Funtua">Funtua</option>
                                <option value="Ingawa">Ingawa</option>
                                <option value="Jibia">Jibia</option>
                                <option value="Kafur">Kafur</option>
                                <option value="Kaita">Kaita</option>
                                <option value="Kankara">Kankara</option>
                                <option value="Kankia">Kankia</option>
                                <option value="Katsina">Katsina</option>
                                <option value="Kurfi">Kurfi</option>
                                <option value="Kusada">Kusada</option>
                                <option value="MaiAdua">MaiAdua</option>
                                <option value="Malumfashi">Malumfashi</option>
                                <option value="Mani">Mani</option>
                                <option value="Mashi">Mashi</option>
                                <option value="Matazuu">Matazuu</option>
                                <option value="Musawa">Musawa</option>
                                <option value="Rimi">Rimi</option>
                                <option value="Sabuwa">Sabuwa</option>
                                <option value="Safana">Safana</option>
                                <option value="Sandamu">Sandamu</option>
                                <option value="Zango">Zango</option>
                                <option value="Aleiro">Aleiro</option>
                                <option value="Arewa-Dandi">Arewa-Dandi</option>
                                <option value="Argungu">Argungu</option>
                                <option value="Augie">Augie</option>
                                <option value="Bagudo">Bagudo</option>
                                <option value="Birnin Kebbi">Birnin Kebbi</option>
                                <option value="Bunza">Bunza</option>
                                <option value="Dandi">Dandi</option>
                                <option value="Fakai">Fakai</option>
                                <option value="Gwandu">Gwandu</option>
                                <option value="Jega">Jega</option>
                                <option value="Kalgo">Kalgo</option>
                                <option value="Koko/Besse">Koko/Besse</option>
                                <option value="Maiyama">Maiyama</option>
                                <option value="Ngaski">Ngaski</option>
                                <option value="Sakaba">Sakaba</option>
                                <option value="Shanga">Shanga</option>
                                <option value="Suru">Suru</option>
                                <option value="Wasagu/Danko">Wasagu/Danko</option>
                                <option value="Yauri">Yauri</option>
                                <option value="Zuru">Zuru</option>
                                <option value="Adavi">Adavi</option>
                                <option value="Ajaokuta">Ajaokuta</option>
                                <option value="Ankpa">Ankpa</option>
                                <option value="Bassa">Bassa</option>
                                <option value="Dekina">Dekina</option>
                                <option value="Ibaji">Ibaji</option>
                                <option value="Idah">Idah</option>
                                <option value="Igalamela-Odolu">Igalamela-Odolu</option>
                                <option value="Ijumu">Ijumu</option>
                                <option value="Kabba/Bunu">Kabba/Bunu</option>
                                <option value="Kogi">Kogi</option>
                                <option value="Lokoja">Lokoja</option>
                                <option value="Mopa-Muro">Mopa-Muro</option>
                                <option value="Ofu">Ofu</option>
                                <option value="Ogori/Mangongo">Ogori/Mangongo</option>
                                <option value="Okehi">Okehi</option>
                                <option value="Okene">Okene</option>
                                <option value="Olamabolo">Olamabolo</option>
                                <option value="Omala">Omala</option>
                                <option value="Yagba East">Yagba East</option>
                                <option value="Yagba West">Yagba West</option>
                                <option value="Asa">Asa</option>
                                <option value="Baruten">Baruten</option>
                                <option value="Edu">Edu</option>
                                <option value="Ekiti">Ekiti</option>
                                <option value="Ifelodun">Ifelodun</option>
                                <option value="Ilorin East">Ilorin East</option>
                                <option value="Ilorin West">Ilorin West</option>
                                <option value="Irepodun">Irepodun</option>
                                <option value="Isin">Isin</option>
                                <option value="Kaiama">Kaiama</option>
                                <option value="Moro">Moro</option>
                                <option value="Offa">Offa</option>
                                <option value="Oke-Ero">Oke-Ero</option>
                                <option value="Oyun">Oyun</option>
                                <option value="Pategi">Pategi</option>
                                <option value="Agege">Agege</option>
                                <option value="Ajeromi-Ifelodun">Ajeromi-Ifelodun</option>
                                <option value="Alimosho">Alimosho</option>
                                <option value="Amuwo-Odofin">Amuwo-Odofin</option>
                                <option value="Apapa">Apapa</option>
                                <option value="Badagry">Badagry</option>
                                <option value="Epe">Epe</option>
                                <option value="Eti-Osa">Eti-Osa</option>
                                <option value="Ibeju/Lekki">Ibeju/Lekki</option>
                                <option value="Ifako-Ijaye">Ifako-Ijaye</option>
                                <option value="Ikeja">Ikeja</option>
                                <option value="Ikorodu">Ikorodu</option>
                                <option value="Kosofe">Kosofe</option>
                                <option value="Lagos Island">Lagos Island</option>
                                <option value="Lagos Mainland">Lagos Mainland</option>
                                <option value="Mushin">Mushin</option>
                                <option value="Ojo">Ojo</option>
                                <option value="Oshodi-Isolo">Oshodi-Isolo</option>
                                <option value="Shomolu">Shomolu</option>
                                <option value="Surulere">Surulere</option>
                                <option value="Akwanga">Akwanga</option>
                                <option value="Awe">Awe</option>
                                <option value="Doma">Doma</option>
                                <option value="Karu">Karu</option>
                                <option value="Keana">Keana</option>
                                <option value="Keffi">Keffi</option>
                                <option value="Kokona">Kokona</option>
                                <option value="Lafia">Lafia</option>
                                <option value="Nasarawa">Nasarawa</option>
                                <option value="Nasarawa-Eggon">Nasarawa-Eggon</option>
                                <option value="Obi">Obi</option>
                                <option value="Toto">Toto</option>
                                <option value="Wamba">Wamba</option>
                                <option value="Agaie">Agaie</option>
                                <option value="Agwara">Agwara</option>
                                <option value="Bida">Bida</option>
                                <option value="Borgu">Borgu</option>
                                <option value="Bosso">Bosso</option>
                                <option value="Chanchaga">Chanchaga</option>
                                <option value="Edati">Edati</option>
                                <option value="Gbako">Gbako</option>
                                <option value="Gurara">Gurara</option>
                                <option value="Katcha">Katcha</option>
                                <option value="Kontagora">Kontagora</option>
                                <option value="Lapai">Lapai</option>
                                <option value="Lavun">Lavun</option>
                                <option value="Magama">Magama</option>
                                <option value="Mariga">Mariga</option>
                                <option value="Mashegu">Mashegu</option>
                                <option value="Mokwa">Mokwa</option>
                                <option value="Muya">Muya</option>
                                <option value="Pailoro">Pailoro</option>
                                <option value="Rafi">Rafi</option>
                                <option value="Rijau">Rijau</option>
                                <option value="Shiroro">Shiroro</option>
                                <option value="Suleja">Suleja</option>
                                <option value="Tafa">Tafa</option>
                                <option value="Wushishi">Wushishi</option>
                                <option value="Abeokuta North">Abeokuta North</option>
                                <option value="Abeokuta South">Abeokuta South</option>
                                <option value="Ado-Odo/Ota">Ado-Odo/Ota</option>
                                <option value="Egbado North">Egbado North</option>
                                <option value="Egbado South">Egbado South</option>
                                <option value="Ewekoro">Ewekoro</option>
                                <option value="Ifo">Ifo</option>
                                <option value="Ijebu East">Ijebu East</option>
                                <option value="Ijebu North">Ijebu North</option>
                                <option value="Ijebu North East">Ijebu North East</option>
                                <option value="Ijebu Ode">Ijebu Ode</option>
                                <option value="Ikenne">Ikenne</option>
                                <option value="Imeko-Afon">Imeko-Afon</option>
                                <option value="Ipokia">Ipokia</option>
                                <option value="Obafemi-Owode">Obafemi-Owode</option>
                                <option value="Ogun Waterside">Ogun Waterside</option>
                                <option value="Odeda">Odeda</option>
                                <option value="Odogbolu">Odogbolu</option>
                                <option value="Remo North">Remo North</option>
                                <option value="Shagamu">Shagamu</option>
                                <option value="Akoko North East">Akoko North East</option>
                                <option value="Akoko North West">Akoko North West</option>
                                <option value="Akoko South Akure East">Akoko South Akure East</option>
                                <option value="Akoko South West">Akoko South West</option>
                                <option value="Akure North">Akure North</option>
                                <option value="Akure South">Akure South</option>
                                <option value="Ese-Odo">Ese-Odo</option>
                                <option value="Idanre">Idanre</option>
                                <option value="Ifedore">Ifedore</option>
                                <option value="Ilaje">Ilaje</option>
                                <option value="Ile-Oluji">Ile-Oluji</option>
                                <option value="Okeigbo">Okeigbo</option>
                                <option value="Irele">Irele</option>
                                <option value="Odigbo">Odigbo</option>
                                <option value="Okitipupa">Okitipupa</option>
                                <option value="Ondo East">Ondo East</option>
                                <option value="Ondo West">Ondo West</option>
                                <option value="Ose">Ose</option>
                                <option value="Owo">Owo</option>
                                <option value="Aiyedade">Aiyedade</option>
                                <option value="Aiyedire">Aiyedire</option>
                                <option value="Atakumosa East">Atakumosa East</option>
                                <option value="Atakumosa West">Atakumosa West</option>
                                <option value="Boluwaduro">Boluwaduro</option>
                                <option value="Boripe">Boripe</option>
                                <option value="Ede North">Ede North</option>
                                <option value="Ede South">Ede South</option>
                                <option value="Egbedore">Egbedore</option>
                                <option value="Ejigbo">Ejigbo</option>
                                <option value="Ife Central">Ife Central</option>
                                <option value="Ife East">Ife East</option>
                                <option value="Ife North">Ife North</option>
                                <option value="Ife South">Ife South</option>
                                <option value="Ifedayo">Ifedayo</option>
                                <option value="Ifelodun">Ifelodun</option>
                                <option value="Ila">Ila</option>
                                <option value="Ilesha East">Ilesha East</option>
                                <option value="Ilesha West">Ilesha West</option>
                                <option value="Irepodun">Irepodun</option>
                                <option value="Irewole">Irewole</option>
                                <option value="Isokan">Isokan</option>
                                <option value="Iwo">Iwo</option>
                                <option value="Obokun">Obokun</option>
                                <option value="Odo-Otin">Odo-Otin</option>
                                <option value="Ola-Oluwa">Ola-Oluwa</option>
                                <option value="Olorunda">Olorunda</option>
                                <option value="Oriade">Oriade</option>
                                <option value="Orolu">Orolu</option>
                                <option value="Osogbo">Osogbo</option>
                                <option value="Afijio">Afijio</option>
                                <option value="Akinyele">Akinyele</option>
                                <option value="Atiba">Atiba</option>
                                <option value="Atigbo">Atigbo</option>
                                <option value="Egbeda">Egbeda</option>
                                <option value="IbadanCentral">IbadanCentral</option>
                                <option value="Ibadan North">Ibadan North</option>
                                <option value="Ibadan North West">Ibadan North West</option>
                                <option value="Ibadan South East">Ibadan South East</option>
                                <option value="Ibadan South West">Ibadan South West</option>
                                <option value="Ibarapa Central">Ibarapa Central</option>
                                <option value="Ibarapa East">Ibarapa East</option>
                                <option value="Ibarapa North">Ibarapa North</option>
                                <option value="Ido">Ido</option>
                                <option value="Irepo">Irepo</option>
                                <option value="Iseyin">Iseyin</option>
                                <option value="Itesiwaju">Itesiwaju</option>
                                <option value="Iwajowa">Iwajowa</option>
                                <option value="Kajola">Kajola</option>
                                <option value="Lagelu Ogbomosho North">Lagelu Ogbomosho North</option>
                                <option value="Ogbmosho South">Ogbmosho South</option>
                                <option value="Ogo Oluwa">Ogo Oluwa</option>
                                <option value="Olorunsogo">Olorunsogo</option>
                                <option value="Oluyole">Oluyole</option>
                                <option value="Ona-Ara">Ona-Ara</option>
                                <option value="Orelope">Orelope</option>
                                <option value="Ori Ire">Ori Ire</option>
                                <option value="Oyo East">Oyo East</option>
                                <option value="Oyo West">Oyo West</option>
                                <option value="Saki East">Saki East</option>
                                <option value="Saki West">Saki West</option>
                                <option value="Surulere">Surulere</option>
                                <option value="Barikin Ladi">Barikin Ladi</option>
                                <option value="Bassa">Bassa</option>
                                <option value="Bokkos">Bokkos</option>
                                <option value="Jos East">Jos East</option>
                                <option value="Jos North">Jos North</option>
                                <option value="Jos South">Jos South</option>
                                <option value="Kanam">Kanam</option>
                                <option value="Kanke">Kanke</option>
                                <option value="Langtang North">Langtang North</option>
                                <option value="Langtang South">Langtang South</option>
                                <option value="Mangu">Mangu</option>
                                <option value="Mikang">Mikang</option>
                                <option value="Pankshin">Pankshin</option>
                                <option value="Qua an Pan">Qua an Pan</option>
                                <option value="Riyom">Riyom</option>
                                <option value="Shendam">Shendam</option>
                                <option value="Wase">Wase</option>
                                <option value="Abua/Odual">Abua/Odual</option>
                                <option value="Ahoada East">Ahoada East</option>
                                <option value="Ahoada West">Ahoada West</option>
                                <option value="Akuku Toru">Akuku Toru</option>
                                <option value="Andoni">Andoni</option>
                                <option value="Asari-Toru">Asari-Toru</option>
                                <option value="Bonny">Bonny</option>
                                <option value="Degema">Degema</option>
                                <option value="Emohua">Emohua</option>
                                <option value="Eleme">Eleme</option>
                                <option value="Etche">Etche</option>
                                <option value="Gokana">Gokana</option>
                                <option value="Ikwerre">Ikwerre</option>
                                <option value="Khana">Khana</option>
                                <option value="Obia/Akpor">Obia/Akpor</option>
                                <option value="Ogba/Egbema/Ndoni">Ogba/Egbema/Ndoni</option>
                                <option value="Ogu/Bolo">Ogu/Bolo</option>
                                <option value="Okrika">Okrika</option>
                                <option value="Omumma">Omumma</option>
                                <option value="Opobo/Nkoro">Opobo/Nkoro</option>
                                <option value="Oyigbo">Oyigbo</option>
                                <option value="Port-Harcourt">Port-Harcourt</option>
                                <option value="Tai">Tai</option>
                                <option value="Binji">Binji</option>
                                <option value="Bodinga">Bodinga</option>
                                <option value="Dange-shnsi">Dange-shnsi</option>
                                <option value="Gada">Gada</option>
                                <option value="Goronyo">Goronyo</option>
                                <option value="Gudu">Gudu</option>
                                <option value="Gawabawa">Gawabawa</option>
                                <option value="Illela">Illela</option>
                                <option value="Isa">Isa</option>
                                <option value="Kware">Kware</option>
                                <option value="kebbe">kebbe</option>
                                <option value="Rabah">Rabah</option>
                                <option value="Sabon birni">Sabon birni</option>
                                <option value="Shagari">Shagari</option>
                                <option value="Silame">Silame</option>
                                <option value="Sokoto North">Sokoto North</option>
                                <option value="Sokoto South">Sokoto South</option>
                                <option value="Tambuwal">Tambuwal</option>
                                <option value="Tqngaza">Tqngaza</option>
                                <option value="Tureta">Tureta</option>
                                <option value="Wamako">Wamako</option>
                                <option value="Wurno">Wurno</option>
                                <option value="Yabo">Yabo</option>
                                <option value="Ardo-kola">Ardo-kola</option>
                                <option value="Bali">Bali</option>
                                <option value="Donga">Donga</option>
                                <option value="Gashaka">Gashaka</option>
                                <option value="Cassol">Cassol</option>
                                <option value="Ibi">Ibi</option>
                                <option value="Jalingo">Jalingo</option>
                                <option value="Karin-Lamido">Karin-Lamido</option>
                                <option value="Kurmi">Kurmi</option>
                                <option value="Lau">Lau</option>
                                <option value="Sardauna">Sardauna</option>
                                <option value="Takum">Takum</option>
                                <option value="Ussa">Ussa</option>
                                <option value="Wukari">Wukari</option>
                                <option value="Yorro">Yorro</option>
                                <option value="Zing">Zing</option>
                                <option value="Bade">Bade</option>
                                <option value="Bursari">Bursari</option>
                                <option value="Damaturu">Damaturu</option>
                                <option value="Fika">Fika</option>
                                <option value="Fune">Fune</option>
                                <option value="Geidam">Geidam</option>
                                <option value="Gujba">Gujba</option>
                                <option value="Gulani">Gulani</option>
                                <option value="Jakusko">Jakusko</option>
                                <option value="Karasuwa">Karasuwa</option>
                                <option value="Karawa">Karawa</option>
                                <option value="Machina">Machina</option>
                                <option value="Nangere">Nangere</option>
                                <option value="Nguru Potiskum">Nguru Potiskum</option>
                                <option value="Tarmua">Tarmua</option>
                                <option value="Yunusari">Yunusari</option>
                                <option value="Yusufari">Yusufari</option>
                                <option value="Anka">Anka</option>
                                <option value="Bakura">Bakura</option>
                                <option value="Birnin Magaji">Birnin Magaji</option>
                                <option value="Bukkuyum ">Bukkuyum </option>
                                <option value="Bungudu">Bungudu</option>
                                <option value="Gummi">Gummi</option>
                                <option value="Gusau">Gusau</option>
                                <option value="Kaura">Kaura</option>
                                <option value="Namoda">Namoda</option>
                                <option value="Maradun">Maradun</option>
                                <option value="Maru">Maru</option>
                                <option value="Shinkafi">Shinkafi</option>
                                <option value="Talata Mafara">Talata Mafara</option>
                                <option value="Tsafe">Tsafe</option>
                                <option value="Zurmi">Zurmi</option>
                                <option value="Abak">Abak</option>
                                <option value="Aguata">Aguata</option>
                                <option value="Idemili North">Idemili North</option>
                                <option value="Alkaleri">Alkaleri</option>
                                <option value="Brass">Brass</option>
                                <option value="Ado">Ado</option>
                                <option value="Abadam">Abadam</option>
                                <option value="Akpabuyo">Akpabuyo</option>
                                <option value="Akoko Edo">Akoko Edo</option>
                                <option value="Etsako West">Etsako West</option>
                                <option value="Ikpoba Okha">Ikpoba Okha</option>
                                <option value="Owan East">Owan East</option>
                                <option value="Owan West">Owan West</option>
                                <option value="Afikpo South">Afikpo South</option>
                                <option value="Gwaram">Gwaram</option>
                                <option value="Abaji">Abaji</option>
                                <option value="Abuja Municipal">Abuja Municipal</option>
                                <option value="Bwari">Bwari</option>
                                <option value="Kwali">Kwali</option>
                                <option value="Gwagwalada">Gwagwalada</option>
                                <option value="Kuje">Kuje</option>
                            </select>
                        </div>                                                                    
                    </div>
                </div>

                <div class="row form-row"><!-- Start Row -->
                        <div class="col-md-12 column no-padding"><!-- Start Column -->
                            <label class="control-label">Ingredients</label>
                            <div class="input-cover contact-line">
                                <input type="text" class="contact-form-line" value="" placeholder="ingredients" name="ingredients" required>
                                <p class="help-block">Seperate Items by Comma</p>
                            </div>
                        </div>

                </div>
                <div class="row form-row"><!-- Start Row -->
                    <div class="col-md-12 column"><!-- Start Column -->
                        <label class="control-label">Tell us how to Make it</label>
                        <div class="input-cover input-cover-text">
                            <textarea class="wysihtml5 form-control" rows="6" name="procedures" data-error-container="#editor1_error" required></textarea>
                            <div id="editor1_error">
                            </div>
                        </div>                           
                    </div>
                </div>
                
                <h3 class="entry-title">A bit about you </h3><hr />
                <div class="row form-row"><!-- Start Row -->
                        <div class="col-md-6 column"><!-- Start Column -->
                            <div class="input-cover contact-line">
                                <input type="text" class="contact-form-line"  placeholder="Full Name" name="fullname" required>
                            </div>
                        </div>
                        <div class="col-md-2 column  no-padding">
                            <div class="input-cover contact-line">
                                <select  name="gender">
                                    <option value="Female">Female</option>
                                    <option value="Male">Male</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 column"><!-- Start Column -->
                            <div class="input-cover contact-line">
                                <input type="email" class="contact-form-line"  placeholder="E-Mail" name="email">
                                <p class="help-block background-red" style="color:#FFF;display:none;"> &nbsp;Email Format Wrong</p>
                            
                            </div>
                        </div>
                </div><!-- End Row -->
                <div class="row form-row"><!-- Start Row -->
                    <div class="col-md-12 column"><!-- Start Column -->
                        <input type="submit" data-sent="Message Successfully Sent" data-sending="Sending Message" class="form-send margin-top" value="Confirm">
                    </div><!-- End Column -->
                </div><!-- End Row -->
                <input type="hidden" value="contact" name="id">
            </form>

        </div>
    </div>
</section>



<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css"/>

<script type="text/javascript" src="<?= base_url(); ?>assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript">
    if ($('.wysihtml5').size() > 0) {
        $('.wysihtml5').wysihtml5({
            "stylesheets": ["<?= base_url(); ?>assets/bootstrap-wysihtml5/wysiwyg-color.css"]
        });
    }
</script>
<style type="text/css">
    .btn.default {
        background-color: #e5e5e5;
        color: #333333;
    }
    .help-block {
        color: #737373;
        display: block;
        font-size: 11px;
        margin-bottom: 10px;
        margin-top: 0px;
    }
    .control-label{
         margin-bottom: 10px;
        margin-top: 0px;
    }
</style>

<script>
    $('.add_dish').submit(function (e) {
        $('.background-red').hide();
        e.preventDefault();
        url = $(this).attr('action');
        var form_data = new FormData($(this)[0]);                  
        $.ajax({
            url: url,
            dataType:'json',
            type:'post',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            success: function(data){
                if (data.result == 'success') {
                    base_url = "<?= base_url('dish') ?>";
                    url = base_url+"/"+data.id; 
                   
                    window.location.href = url;
                    
                }
                if (data.result == 'emailerror') {
                    $('.background-red').show();
                }
            }
        })
    })
</script>


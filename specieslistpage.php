<div class="buttons" data-role="controlgroup"  data-type="horizontal" data-position="fixed"  data-shadow="false">
<a href="javascript:void(0);" class="communs button1 button green" data-role="button"   onclick="pop(1,this)"><?= $menu_text['commonnames'];?></a>
<a href="javascript:void(0);" class="famille button2 button active_btn" data-role="button" onClick="pop(2,this)"><?= $menu_text['familie'];?></a>
<a href="javascript:void(0);" class="Noms button3 button green" data-role="button" onClick="pop(3,this)"><?= $menu_text['nomspecies'];?></a>
<a href="javascript:void(0);" class="contrarev button4 button green" data-role="button" onClick="pop(4,this)"><?= $menu_text['contrabutname'];?></a>
</div>    
    <div id="commonfamilies" class="newspecieslistwrapper " >
        <input class="search searchfam" type="search" placeholder="<?= $menu_text['placehholderfamilie'];?>" />
        
        <div   style="padding-bottom: 75px;">
            
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("fam_a") href="#fam_a" >A</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("fam_b") href="#fam_b" >B</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("fam_c") href="#fam_c" >C</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("fam_d") href="#fam_d" >D</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("fam_e") href="#fam_e" >E</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("fam_f") href="#fam_f" >F</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("fam_g") href="#fam_g" >G</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("fam_h") href="#fam_h" >H</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("fam_i") href="#fam_i" >I</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("fam_j") href="#fam_j" >J</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("fam_k") href="#fam_k" >K</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("fam_l") href="#fam_l" >L</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("fam_m") href="#fam_m" >M</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("fam_n") href="#fam_n" >N</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("fam_o") href="#fam_o" >O</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("fam_p") href="#fam_p" >P</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("fam_q") href="#fam_q" >Q</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("fam_r") href="#fam_r" >R</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("fam_s") href="#fam_s" >S</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("fam_t") href="#fam_t" >T</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("fam_u") href="#fam_u" >U</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("fam_v") href="#fam_v" >V</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("fam_w") href="#fam_w" >W</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("fam_x") href="#fam_x" >X</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("fam_y") href="#fam_y" >Y</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("fam_z") href="#fam_z" >Z</a></div>
        </div>
        <div class = "specieslistwrapper commonfamilies " style="padding-top: 15px;">
            <ul class="list"><li id="fam_a" ><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Acanthaceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/32") >Asystasia gangetica (L.) T.Anderson</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/326") >Thunbergia alata Bojer ex Sims</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/327") >Thunbergia grandiflora (Roxb. ex Rottl.) Roxb.</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/328") >Thunbergia laevis Nees</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Aizoaceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/324") >Tetragonia tetragonioides (Pall.) Kuntze</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/329") >Trianthema portulacastrum L.</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/343") >Zaleya pentandra (L.) Jeffrey</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Alismataceae</a><ul class="closed"><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/283") >Sagittaria guayanensis Kunth</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Amaranthaceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/8") >Achyranthes aspera L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/9") >Aerva javanica (Burm.f.) C.Jussieu ex Schult.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/16") >Alternanthera philoxeroides (H.Martius) Griseb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/17") >Alternanthera pungens Kunth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/18") >Alternanthera sessilis (L.) R.Br. ex DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/19") >Amaranthus blitum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/20") >Amaranthus dubius H.Martius ex Thell.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/21") >Amaranthus hybridus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/22") >Amaranthus spinosus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/23") >Amaranthus viridis L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/51") >Celosia argentea L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/52") >Celosia trigyna L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/58") >Chenopodium album L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/90") >Cyathula prostrata (L.) Blume </a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/115") >Dysphania ambrosioides (L.) Mosyakin &amp; Clemants</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/151") >Gomphrena celosioides Mart.</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Amaryllidaceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/15") >Allium neapolitanum Cirillo</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/152") >Habranthus robustus Herb. ex Sweet</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/158") >Hippeastrum reginae (L.) Herb.</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Apiaceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/55") >Centella asiatica (L.) Urb.</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/91") >Cyclospermum leptophyllum (Pers.) Eichler</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Apocynaceae</a><ul class="closed"><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/92") >Cynanchum callialatum Buch.-Ham. ex Wight</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Araceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/69") >Colocasia esculenta (L.) Schott</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/260") >Pistia stratiotes L.</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Araliaceae</a><ul class="closed"><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/160") >Hydrocotyle bonariensis Lam.</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Asteraceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/6") >Acanthospermum australe (Loefl.) Kuntze</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/7") >Acanthospermum hispidum DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/12") >Ageratina riparia (Regel) R.M.King &amp; H.Rob.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/13") >Ageratum conyzoides L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/14") >Ageratum houstonianum Mill.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/24") >Ambrosia tenuifolia Spreng.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/31") >Artemisia verlotiorum Lamotte</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/36") >Bidens pilosa L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/62") >Chromolaena odorata (L.) R.M.King &amp; H.Rob.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/74") >Conyza sumatrensis (Retz.) E.Walker</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/78") >Cosmos caudatus Kunth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/79") >Crassocephalum crepidioides (Benth.) S.Moore</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/89") >Cyanthillium cinereum (L.) H.Rob.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/120") >Eclipta prostrata (L.) L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/125") >Elephantopus mollis Kunth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/127") >Emilia citrina DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/128") >Emilia sonchifolia (L.) DC. ex DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/134") >Erigeron canadensis L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/135") >Erigeron karvinskianus DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/147") >Galinsoga parviflora Cav.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/150") >Gnaphalium purpureum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/161") >Hypochaeris radicata L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/183") >Lactuca indica L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/184") >Laggera alata (D.Don) Sch.Bip. ex Oliv.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/187") >Lapsana communis L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/210") >Mikania micrantha Kunth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/236") >Parthenium hysterophorus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/300") >Sigesbeckia orientalis L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/306") >Sonchus asper (L.) Hill.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/307") >Sonchus oleraceus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/312") >Sphagneticola trilobata (L.) Pruski</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/320") >Synedrella nodiflora (L.) Gaertn.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/333") >Tridax procumbens L.</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/342") >Youngia japonica (L.) DC.</a></li></ul></li><li id="fam_b" ><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Basellaceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/26") >Anredera cordifolia (Ten.) Steenis</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/35") >Basella alba L.</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Boraginaceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/39") >Bothriospermum tenellum (Hornem.) Fisch. &amp; C.A.Mey.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/154") >Heliotropium amplexicaule Vahl</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/155") >Heliotropium indicum L.</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/332") >Trichodesma zeylanicum (Burm.f.) R.Br.</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Brassicaceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/34") >Barbarea verna (Mill.) Asch.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/45") >Brassica rapa L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/49") >Cardamine hirsuta L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/191") >Lepidium africanum (Burm.f.) DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/192") >Lepidium didymum L.</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/270") >Raphanus raphanistrum L.</a></li></ul></li><li id="fam_c" ><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Campanulaceae</a><ul class="closed"><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/198") >Lobelia cliffortiana L.</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Cannaceae</a><ul class="closed"><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/48") >Canna indica L.</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Caryophyllaceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/57") >Cerastium glomeratum Thuill.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/114") >Drymaria cordata (L) Willd.ex Roem. &amp;Schult </a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/263") >Polycarpaea corymbosa (L.) Lam.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/309") >Spergula arvensis L.</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/317") >Stellaria media (L.)Vill.</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Cleomaceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/63") >Cleome gynandra L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/64") >Cleome hirta (Klotzsch) Oliv.</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/65") >Cleome viscosa L.</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Colchicaceae</a><ul class="closed"><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/149") >Gloriosa superba L.</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Commelinaceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/70") >Commelina africana var. krebsiana (Kunth) C.B.Clarke.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/71") >Commelina benghalensis L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/72") >Commelina diffusa Burm.f.</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/73") >Commelina diffusa subsp. scandens (Welw. ex C.B.Clarke) Oberm.</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Convolvulaceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/30") >Argyreia argentea (Roxb.) Sweet</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/88") >Cuscuta campestris Yunck.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/166") >Ipomoea alba L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/167") >Ipomoea aquatica Forssk.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/168") >Ipomoea coptica (L.) Roth ex Roem. &amp; Schult.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/169") >Ipomoea eriocarpa R.Br.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/170") >Ipomoea hederifolia L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/171") >Ipomoea indica (Burm.) Merr.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/172") >Ipomoea nil (L.) Roth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/173") >Ipomoea obscura (L.) Ker-Gawler</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/174") >Ipomoea purpurea (L.) Roth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/175") >Ipomoea quamoclit L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/176") >Ipomoea triloba L. </a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/179") >Jacquemontia tamnifolia (L.) Griseb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/208") >Merremia aegyptia (L.) Urb.</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/209") >Merremia dissecta (Jacq.) Hallier f.</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Cucurbitaceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/68") >Coccinia grandis (L.) Voigt</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/216") >Momordica charantia L.</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Cyperaceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/2") >Courtoisina cyperoides (Roxb.) Soj</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/94") >Cyperus balfourii C.B.Clarke </a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/95") >Cyperus difformis L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/96") >Cyperus esculentus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/97") >Cyperus iria L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/98") >Cyperus prolifer Lam.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/99") >Cyperus rotundus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/122") >Eleocharis dulcis (Burm.f.) Trin. ex Hensch.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/123") >Eleocharis limosa (Schrad.) Schult.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/124") >Eleocharis minuta Boeckeler</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/141") >Fimbristylis dichotoma (L.) Vahl</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/142") >Fimbristylis littoralis Gaudich.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/143") >Fimbristylis quinquangularis (Vahl) Kunth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/144") >Fuirena ciliaris (L.) Roxb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/145") >Fuirena umbellata Rottb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/180") >Kyllinga bulbosa P.Beauv.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/181") >Kyllinga erecta Schumach.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/267") >Pycreus macrostachyos (Lam.) Raynal</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/268") >Pycreus mundtii Nees</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/269") >Pycreus polystachyos (Rottb.) P.Beauv.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/285") >Schoenoplectiella  juncoides (Roxb.) Lye</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/286") >Schoenoplectiella perrieri (Cherm.) Lye</a></li></ul></li><li id="fam_d" ><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Dennstaedtiaceae</a><ul class="closed"><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/266") >Pteridium aquilinum (L.) Kuhn</a></li></ul></li><li id="fam_e" ><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Euphorbiaceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/5") >Acalypha indica L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/87") >Croton bonplandianus Baill.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/136") >Euphorbia cyathophora Murrill</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/137") >Euphorbia heterophylla L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/138") >Euphorbia hirta L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/139") >Euphorbia peplus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/140") >Euphorbia prostrata Aiton</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/253") >Phyllanthus amarus Schumach. &amp; Thonn.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/254") >Phyllanthus niruroides M</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/255") >Phyllanthus tenellus Roxb.</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/256") >Phyllanthus urinaria L.</a></li></ul></li><li id="fam_f" ><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Fabaceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/10") >Aeschynomene americana L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/11") >Aeschynomene indica L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/1") >Alysicarpus ovalifolius (Schumach. &amp; Thonn.) J.L</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("") >Alysicarpus rugosus (Willd.) DC.</a></li><li id="espec_c" ><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/47") >Cajanus scarabaeoides (L.) Thouars</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/56") >Centrosema pubescens Benth.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/67") >Clitoria heterophylla Lam.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/81") >Crotalaria goreensis Guill. &amp; Perr.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/82") >Crotalaria grahamiana Wight &amp; Arn.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/83") >Crotalaria incana L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/84") >Crotalaria ononoides Benth.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/85") >Crotalaria pallida Aiton</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/86") >Crotalaria retusa L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/103") >Desmanthus virgatus (L.) Willd. </a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/104") >Desmodium adscendens (Sw.) DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/105") >Desmodium incanum DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/106") >Desmodium intortum (Mill.) Urb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/107") >Desmodium tortuosum (Sw.) DC. </a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/108") >Desmodium uncinatum (Jacq.) DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/165") >Indigofera hirsuta L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/182") >Lablab purpureus (L.) Sweet</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/193") >Leucaena leucocephala (Lam.) de Wit</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/202") >Macroptilium lathyroides (L.) Urb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/211") >Mimosa diplotricha Sauvalle</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/212") >Mimosa pudica L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/217") >Mucuna pruriens (L.) DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/272") >Rhynchosia malacophylla (Spreng.) Bojer</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/273") >Rhynchosia minima (L.) DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/274") >Rhynchosia viscosa (Roth) DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/287") >Senna obtusifolia (L.) H.S.Irwin &amp; Barneby</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/288") >Senna occidentalis (L.) Roxb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/289") >Senna tora (L.) Roxb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/290") >Sesbania sesban (L.) Merrill</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/321") >Tephrosia linearis (Willd.) Pers.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/322") >Tephrosia purpurea (L.) Pers.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/323") >Teramnus labialis (L.f.) Spreng.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/339") >Vicia hirsuta (L.) Gray</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/340") >Vicia sativa L.</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/344") >Zornia latifolia Sm.</a></li></ul></li><li id="fam_i" ><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Iridaceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/80") >Crocosmia </a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/301") >Sisyrinchium micranthum Cav.</a></li></ul></li><li id="fam_l" ><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lamiaceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/162") >Hyptis pectinata (L.) Poit.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/163") >Hyptis spicigera Lam.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/185") >Lamium amplexicaule L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/189") >Leonotis nepetifolia (L.) W.T.Aiton</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/190") >Leonurus sibiricus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/194") >Leucas lavandulifolia Sm.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/195") >Leucas martinicensis (Jacq.) R.Br.</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/220") >Ocimum americanum L.</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lauraceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/196") >Litsea glutinosa (Lour.) C.Rob.</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/197") >Litsea monopetala (Roxb.) Pers.</a></li></ul></li><li id="fam_m" ><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Malvaceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/3") >Abelmoschus ficulneus (L.) Wight &amp; Arn.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/4") >Abutilon indicum (L.) Sweet</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/75") >Corchorus aestuans L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/76") >Corchorus olitorius L. </a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/77") >Corchorus trilocularis L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/156") >Hibiscus asper Hook.f.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/157") >Hibiscus surattensis L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/203") >Malvastrum coromandelianum (L.) Garcke</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/206") >Melochia corchorifolia L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/207") >Melochia pyramidata L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/294") >Sida acuta Burm.f.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/295") >Sida cordifolia L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/296") >Sida glabra Mill.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/297") >Sida rhombifolia L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/298") >Sida rhombifolia subsp. alnifolia (L.) Ugbor.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/299") >Sida urens L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/336") >Urena lobata L.</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/341") >Waltheria indica L.</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Marsileaceae</a><ul class="closed"><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/204") >Marsilea minuta L.</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Melastomataceae</a><ul class="closed"><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/66") >Clidemia hirta (L.) D.Don.</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Molluginaceae</a><ul class="closed"><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/215") >Mollugo nudicaulis Lam.</a></li></ul></li><li id="fam_n" ><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Nyctaginaceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/37") >Boerhavia diffusa L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/38") >Boerhavia repens L.</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/213") >Mirabilis jalapa L.</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Nympheaceae</a><ul class="closed"><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/219") >Nymphaea nouchali Burm.f.</a></li></ul></li><li id="fam_o" ><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Onagraceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/199") >Ludwigia adscendens (L.) H.Hara</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/200") >Ludwigia erecta (L.) Hara</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/201") >Ludwigia octovalvis (Jacq.) Raven</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/221") >Oenothera glazioviana Micheli</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/222") >Oenothera stricta Ledeb. ex Link</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Orobanchaceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/271") >Rhamphicarpa fistulosa (Hochst.) Benth.</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/319") >Striga asiatica (L.) Kuntze</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Oxalidaceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/225") >Oxalis corniculata L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/226") >Oxalis debilis var. corymbosa (DC.) Lourteig</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/227") >Oxalis latifolia Kunth</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/228") >Oxalis tetraphylla Cav.</a></li></ul></li><li id="fam_p" ><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Papaveraceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/29") >Argemone mexicana L.</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/146") >Fumaria muralis Sond. ex Koch</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Passifloraceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/244") >Passiflora foetida L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/245") >Passiflora suberosa L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/246") >Passiflora subpeltata Ortega</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/335") >Turnera ulmifolia L.</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Phytolacaceae</a><ul class="closed"><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/258") >Phytolacca americana L.</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Plantaginaceae</a><ul class="closed"><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/261") >Plantago lanceolata L.</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Poaceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/27") >Anthoxanthum odoratum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/33") >Axonopus compressus (Sw.) P.Beauv.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/40") >Brachiaria deflexa (Schumach.) C.E.Hubb. ex Robyns</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/41") >Brachiaria eruciformis (Sm.) Griseb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/42") >Brachiaria nana Stapf</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/43") >Brachiaria reptans (L.) C.A.Gardner &amp; C.E.Hubb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/44") >Brachiaria umbellata (Trin.) Clayton</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/46") >Bromus catharticus Vahl</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/53") >Cenchrus biflorus Roxb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/54") >Cenchrus echinatus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/59") >Chloris barbata Sw.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/60") >Chloris pycnothrix Trin.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/61") >Chloris virgata Sw.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/93") >Cynodon dactylon (L.) Pers.</a></li><li id="espec_d" ><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/100") >Dactyloctenium aegyptium (L.) P.Beauv.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/109") >Digitaria ciliaris (Retz.) Koeler</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/110") >Digitaria horizontalis Willd.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/111") >Digitaria humbertii A.Camus</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/112") >Digitaria longiflora (Retz.) Pers.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/113") >Digitaria radicosa (C.Presl) Miq.</a></li><li id="espec_e" ><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/116") >Echinochloa colona (L.) Link</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/117") >Echinochloa crus-galli (L.) P.Beauv.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/118") >Echinochloa pyramidalis (Lam.) Hitchc. &amp; Chase</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/119") >Echinochloa stagnina (Retz.) P.Beauv.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/126") >Eleusine indica (L.) Gaertn.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/129") >Eragrostis amabilis (L.) Wight &amp; Arn.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/130") >Eragrostis aspera (Jacq.) Nees</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/131") >Eragrostis cilianensis (Allioni) F.T.Hubb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/132") >Eragrostis cylindriflora Hochst.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/133") >Eragrostis patula (Kunth) Steud.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/159") >Holcus lanatus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/164") >Imperata cylindrica (L.) P.Beauv.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/177") >Ischaemum aristatum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/178") >Ischaemum rugosum Salisb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/188") >Leersia hexandra Sw.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/205") >Melinis repens (Willd.) Zizka</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/224") >Oplismenus burmanni (Retz.) P.Beauv.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/230") >Panicum brevifolium L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/231") >Panicum humile Nees ex Steud.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/232") >Panicum maximum Jacq.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/233") >Panicum pseudowoeltzkowii A.Camus</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/234") >Panicum repens L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/235") >Panicum subalbidum Kunth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/237") >Paspalidium geminatum (Forssk.) Stapf</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/238") >Paspalum conjugatum P.J.Bergius</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/239") >Paspalum dilatatum Poir.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/240") >Paspalum paniculatum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/241") >Paspalum scrobiculatum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/242") >Paspalum urvillei Steud.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/243") >Paspalum vaginatum Sw.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/247") >Pennisetum caffrum (Bory) Leeke.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/248") >Pennisetum clandestinum Hochst.ex Chiov.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/249") >Pennisetum polystachion (L.) Schult.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/250") >Perotis patens Gand.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/252") >Phalaris arundinacea L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/262") >Poa annua L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/276") >Rottboellia cochinchinensis (Lour.) W.Clayton</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/282") >Sacciolepis africana C.E.Hubb. &amp; Snowden</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/291") >Setaria barbata (Lam.) Kunth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/292") >Setaria pumila (Poir.) Roem. &amp; Schult.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/293") >Setaria verticillata (L.) P.Beauv.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/308") >Sorghum arundinaceum (Desv.) Stapf</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/314") >Sporobolus africanus (Poir.) Robyns &amp; Tournay</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/318") >Stenotaphrum dimidiatum (L.) Brongn.</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/325") >Themeda quadrivalvis (L.) Kuntze</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Polygonaceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/28") >Antigonon leptopus Hook. &amp; Arn.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/251") >Persicaria chinensis (L.) H.Gross</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/280") >Rumex abyssinicus Jacq.</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/281") >Rumex crispus L.</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Pontederiaceae</a><ul class="closed"><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/121") >Eichhornia crassipes (Mart.) Solms</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Portulacaceae</a><ul class="closed"><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/264") >Portulaca oleracea L.</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Potamogetonaceae</a><ul class="closed"><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/265") >Potamogeton nodosus Poir.</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Primulaceae</a><ul class="closed"><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/25") >Anagallis arvensis L.</a></li></ul></li><li id="fam_r" ><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Rosaceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/277") >Rubus alceifolius Poir. </a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/278") >Rubus fraxinifolius Poir.</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/279") >Rubus rosifolius Sm.</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Rubiaceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/148") >Galium aparine L.C.Rich.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/214") >Mitracarpus hirtus (L.) DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/223") >Oldenlandia corymbosa L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/229") >Paederia foetida L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/275") >Richardia scabra L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/310") >Spermacoce alata Aubl.</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/311") >Spermacoce verticillata L.</a></li></ul></li><li id="fam_s" ><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Salviniaceae</a><ul class="closed"><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/284") >Salvinia adnata Desv.</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Sapindaceae</a><ul class="closed"><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/50") >Cardiospermum microcarpum Kunth</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Solanaceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/101") >Datura innoxia Mill.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/102") >Datura stramonium L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/218") >Nicandra physalodes (L.) Gaertn.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/257") >Physalis angulata L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/302") >Solanum americanum Mill.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/303") >Solanum indicum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/304") >Solanum mauritianum Scop.</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/305") >Solanum torvum Sw.</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Sphenocleaceae</a><ul class="closed"><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/313") >Sphenoclea zeylanica Gaertn.</a></li></ul></li><li id="fam_t" ><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tropaeolaceae</a><ul class="closed"><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/334") >Tropaeolum majus L.</a></li></ul></li><li id="fam_u" ><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Urticaceae</a><ul class="closed"><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/259") >Pilea microphylla (L.) Liebm.</a></li></ul></li><li id="fam_v" ><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Verbenaceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/186") >Lantana camara L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/315") >Stachytarpheta jamaicensis (L.) Vahl</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/316") >Stachytarpheta urticifolia (Salisb.) Sims</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/337") >Verbena bonariensis L.</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/338") >Verbena brasiliensis Vell.</a></li></ul></li><li id="fam_z" ><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Zingiberaceae</a><ul class="closed"><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/153") >Hedychium gardnerianum Sheppard ex Ker Gawl.</a></li></ul></li><li><a class="anchor anchornar" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Zygophyllaceae</a><ul class="closed"><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/330") >Tribulus cistoides L.</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/331") >Tribulus terrestris L.</a></li></ul></li></ul>
            
            
            <p class="back-top scrollfamilies" style="display: block;">
            <a href="#top"><span></span></a>
            </p>
        </div>
        
    </div>
    
    
    
    
    
    <script type="text/javascript">
        
        </script>
    
    
    <div id="commonspecies" class="newspecieslistwrapper" style="display:none">
        <input class="search searchspec"  type="search" placeholder="<?= $menu_text['placehholderspecies'];?>" />
        <!--<button class="sort" data-sort="name">
         Sort by name
         </button>-->
        <div   style="padding-bottom: 75px;">
            
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("espec_a") href="#espec_a" >A</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("espec_b") href="#espec_b" >B</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("espec_c") href="#espec_c" >C</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("espec_d") href="#espec_d" >D</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("espec_e") href="#espec_e" >E</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("espec_f") href="#espec_f" >F</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("espec_g") href="#espec_g" >G</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("espec_h") href="#espec_h" >H</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("espec_i") href="#espec_i" >I</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("espec_j") href="#espec_j" >J</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("espec_k") href="#espec_k" >K</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("espec_l") href="#espec_l" >L</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("espec_m") href="#espec_m" >M</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("espec_n") href="#espec_n" >N</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("espec_o") href="#espec_o" >O</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("espec_p") href="#espec_p" >P</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("espec_q") href="#espec_q" >Q</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("espec_r") href="#espec_r" >R</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("espec_s") href="#espec_s" >S</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("espec_t") href="#espec_t" >T</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("espec_u") href="#espec_u" >U</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("espec_v") href="#espec_v" >V</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("espec_w") href="#espec_w" >W</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("espec_x") href="#espec_x" >X</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("espec_y") href="#espec_y" >Y</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("espec_z") href="#espec_z" >Z</a></div>
        </div>
        
        <div class = "specieslistwrapper commonspecies" style="padding-top: 15px;">
            <ul class="list"><li id="espec_a" ><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/3")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Abelmoschus ficulneus (L.) Wight &amp; Arn.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/4")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Abutilon indicum (L.) Sweet</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/5")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Acalypha indica L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/6")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Acanthospermum australe (Loefl.) Kuntze</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/7")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Acanthospermum hispidum DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/8")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Achyranthes aspera L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/9")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Aerva javanica (Burm.f.) C.Jussieu ex Schult.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/10")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Aeschynomene americana L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/11")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Aeschynomene indica L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/12")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ageratina riparia (Regel) R.M.King &amp; H.Rob.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/13")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ageratum conyzoides L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/14")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ageratum houstonianum Mill.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/15")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Allium neapolitanum Cirillo</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/16")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Alternanthera philoxeroides (H.Martius) Griseb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/17")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Alternanthera pungens Kunth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/18")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Alternanthera sessilis (L.) R.Br. ex DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/1")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Alysicarpus ovalifolius (Schumach. &amp; Thonn.) J.L</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Alysicarpus rugosus (Willd.) DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/19")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Amaranthus blitum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/20")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Amaranthus dubius H.Martius ex Thell.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/21")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Amaranthus hybridus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/22")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Amaranthus spinosus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/23")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Amaranthus viridis L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/24")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ambrosia tenuifolia Spreng.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/25")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Anagallis arvensis L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/26")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Anredera cordifolia (Ten.) Steenis</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/27")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Anthoxanthum odoratum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/28")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Antigonon leptopus Hook. &amp; Arn.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/29")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Argemone mexicana L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/30")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Argyreia argentea (Roxb.) Sweet</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/31")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Artemisia verlotiorum Lamotte</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/32")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Asystasia gangetica (L.) T.Anderson</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/33")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Axonopus compressus (Sw.) P.Beauv.</a></li><li id="espec_b" ><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/34")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Barbarea verna (Mill.) Asch.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/35")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Basella alba L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/36")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Bidens pilosa L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/37")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Boerhavia diffusa L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/38")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Boerhavia repens L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/39")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Bothriospermum tenellum (Hornem.) Fisch. &amp; C.A.Mey.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/40")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Brachiaria deflexa (Schumach.) C.E.Hubb. ex Robyns</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/41")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Brachiaria eruciformis (Sm.) Griseb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/42")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Brachiaria nana Stapf</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/43")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Brachiaria reptans (L.) C.A.Gardner &amp; C.E.Hubb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/44")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Brachiaria umbellata (Trin.) Clayton</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/45")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Brassica rapa L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/46")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Bromus catharticus Vahl</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/47")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cajanus scarabaeoides (L.) Thouars</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/48")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Canna indica L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/49")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cardamine hirsuta L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/50")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cardiospermum microcarpum Kunth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/51")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Celosia argentea L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/52")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Celosia trigyna L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/53")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cenchrus biflorus Roxb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/54")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cenchrus echinatus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/55")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Centella asiatica (L.) Urb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/56")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Centrosema pubescens Benth.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/57")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cerastium glomeratum Thuill.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/58")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Chenopodium album L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/59")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Chloris barbata Sw.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/60")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Chloris pycnothrix Trin.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/61")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Chloris virgata Sw.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/62")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Chromolaena odorata (L.) R.M.King &amp; H.Rob.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/63")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cleome gynandra L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/64")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cleome hirta (Klotzsch) Oliv.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/65")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cleome viscosa L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/66")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Clidemia hirta (L.) D.Don.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/67")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Clitoria heterophylla Lam.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/68")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Coccinia grandis (L.) Voigt</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/69")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Colocasia esculenta (L.) Schott</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/70")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Commelina africana var. krebsiana (Kunth) C.B.Clarke.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/71")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Commelina benghalensis L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/72")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Commelina diffusa Burm.f.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/73")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Commelina diffusa subsp. scandens (Welw. ex C.B.Clarke) Oberm.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/74")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Conyza sumatrensis (Retz.) E.Walker</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/75")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Corchorus aestuans L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/76")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Corchorus olitorius L. </a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/77")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Corchorus trilocularis L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/78")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cosmos caudatus Kunth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/2")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Courtoisina cyperoides (Roxb.) Soj</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/79")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Crassocephalum crepidioides (Benth.) S.Moore</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/80")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Crocosmia </a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/81")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Crotalaria goreensis Guill. &amp; Perr.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/82")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Crotalaria grahamiana Wight &amp; Arn.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/83")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Crotalaria incana L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/84")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Crotalaria ononoides Benth.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/85")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Crotalaria pallida Aiton</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/86")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Crotalaria retusa L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/87")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Croton bonplandianus Baill.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/88")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cuscuta campestris Yunck.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/89")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cyanthillium cinereum (L.) H.Rob.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/90")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cyathula prostrata (L.) Blume </a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/91")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cyclospermum leptophyllum (Pers.) Eichler</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/92")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cynanchum callialatum Buch.-Ham. ex Wight</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/93")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cynodon dactylon (L.) Pers.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/94")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cyperus balfourii C.B.Clarke </a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/95")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cyperus difformis L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/96")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cyperus esculentus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/97")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cyperus iria L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/98")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cyperus prolifer Lam.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/99")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cyperus rotundus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/100")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Dactyloctenium aegyptium (L.) P.Beauv.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/101")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Datura innoxia Mill.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/102")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Datura stramonium L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/103")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Desmanthus virgatus (L.) Willd. </a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/104")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Desmodium adscendens (Sw.) DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/105")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Desmodium incanum DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/106")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Desmodium intortum (Mill.) Urb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/107")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Desmodium tortuosum (Sw.) DC. </a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/108")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Desmodium uncinatum (Jacq.) DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/109")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Digitaria ciliaris (Retz.) Koeler</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/110")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Digitaria horizontalis Willd.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/111")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Digitaria humbertii A.Camus</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/112")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Digitaria longiflora (Retz.) Pers.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/113")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Digitaria radicosa (C.Presl) Miq.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/114")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Drymaria cordata (L) Willd.ex Roem. &amp;Schult </a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/115")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Dysphania ambrosioides (L.) Mosyakin &amp; Clemants</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/116")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Echinochloa colona (L.) Link</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/117")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Echinochloa crus-galli (L.) P.Beauv.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/118")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Echinochloa pyramidalis (Lam.) Hitchc. &amp; Chase</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/119")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Echinochloa stagnina (Retz.) P.Beauv.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/120")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Eclipta prostrata (L.) L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/121")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Eichhornia crassipes (Mart.) Solms</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/122")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Eleocharis dulcis (Burm.f.) Trin. ex Hensch.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/123")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Eleocharis limosa (Schrad.) Schult.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/124")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Eleocharis minuta Boeckeler</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/125")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Elephantopus mollis Kunth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/126")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Eleusine indica (L.) Gaertn.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/127")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Emilia citrina DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/128")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Emilia sonchifolia (L.) DC. ex DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/129")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Eragrostis amabilis (L.) Wight &amp; Arn.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/130")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Eragrostis aspera (Jacq.) Nees</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/131")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Eragrostis cilianensis (Allioni) F.T.Hubb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/132")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Eragrostis cylindriflora Hochst.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/133")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Eragrostis patula (Kunth) Steud.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/134")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Erigeron canadensis L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/135")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Erigeron karvinskianus DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/136")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Euphorbia cyathophora Murrill</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/137")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Euphorbia heterophylla L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/138")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Euphorbia hirta L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/139")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Euphorbia peplus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/140")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Euphorbia prostrata Aiton</a></li><li id="espec_f" ><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/141")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Fimbristylis dichotoma (L.) Vahl</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/142")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Fimbristylis littoralis Gaudich.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/143")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Fimbristylis quinquangularis (Vahl) Kunth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/144")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Fuirena ciliaris (L.) Roxb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/145")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Fuirena umbellata Rottb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/146")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Fumaria muralis Sond. ex Koch</a></li><li id="espec_g" ><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/147")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Galinsoga parviflora Cav.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/148")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Galium aparine L.C.Rich.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/149")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Gloriosa superba L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/150")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Gnaphalium purpureum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/151")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Gomphrena celosioides Mart.</a></li><li id="espec_h" ><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/152")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Habranthus robustus Herb. ex Sweet</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/153")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Hedychium gardnerianum Sheppard ex Ker Gawl.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/154")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Heliotropium amplexicaule Vahl</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/155")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Heliotropium indicum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/156")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Hibiscus asper Hook.f.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/157")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Hibiscus surattensis L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/158")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Hippeastrum reginae (L.) Herb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/159")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Holcus lanatus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/160")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Hydrocotyle bonariensis Lam.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/161")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Hypochaeris radicata L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/162")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Hyptis pectinata (L.) Poit.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/163")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Hyptis spicigera Lam.</a></li><li id="espec_i" ><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/164")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Imperata cylindrica (L.) P.Beauv.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/165")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Indigofera hirsuta L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/166")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ipomoea alba L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/167")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ipomoea aquatica Forssk.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/168")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ipomoea coptica (L.) Roth ex Roem. &amp; Schult.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/169")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ipomoea eriocarpa R.Br.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/170")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ipomoea hederifolia L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/171")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ipomoea indica (Burm.) Merr.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/172")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ipomoea nil (L.) Roth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/173")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ipomoea obscura (L.) Ker-Gawler</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/174")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ipomoea purpurea (L.) Roth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/175")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ipomoea quamoclit L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/176")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ipomoea triloba L. </a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/177")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ischaemum aristatum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/178")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ischaemum rugosum Salisb.</a></li><li id="espec_j" ><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/179")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Jacquemontia tamnifolia (L.) Griseb.</a></li><li id="espec_k" ><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/180")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Kyllinga bulbosa P.Beauv.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/181")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Kyllinga erecta Schumach.</a></li><li id="espec_l" ><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/182")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Lablab purpureus (L.) Sweet</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/183")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Lactuca indica L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/184")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Laggera alata (D.Don) Sch.Bip. ex Oliv.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/185")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Lamium amplexicaule L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/186")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Lantana camara L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/187")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Lapsana communis L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/188")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Leersia hexandra Sw.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/189")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Leonotis nepetifolia (L.) W.T.Aiton</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/190")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Leonurus sibiricus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/191")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Lepidium africanum (Burm.f.) DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/192")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Lepidium didymum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/193")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Leucaena leucocephala (Lam.) de Wit</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/194")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Leucas lavandulifolia Sm.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/195")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Leucas martinicensis (Jacq.) R.Br.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/196")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Litsea glutinosa (Lour.) C.Rob.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/197")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Litsea monopetala (Roxb.) Pers.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/198")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Lobelia cliffortiana L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/199")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ludwigia adscendens (L.) H.Hara</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/200")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ludwigia erecta (L.) Hara</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/201")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ludwigia octovalvis (Jacq.) Raven</a></li><li id="espec_m" ><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/202")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Macroptilium lathyroides (L.) Urb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/203")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Malvastrum coromandelianum (L.) Garcke</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/204")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Marsilea minuta L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/205")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Melinis repens (Willd.) Zizka</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/206")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Melochia corchorifolia L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/207")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Melochia pyramidata L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/208")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Merremia aegyptia (L.) Urb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/209")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Merremia dissecta (Jacq.) Hallier f.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/210")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Mikania micrantha Kunth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/211")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Mimosa diplotricha Sauvalle</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/212")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Mimosa pudica L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/213")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Mirabilis jalapa L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/214")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Mitracarpus hirtus (L.) DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/215")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Mollugo nudicaulis Lam.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/216")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Momordica charantia L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/217")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Mucuna pruriens (L.) DC.</a></li><li id="espec_n" ><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/218")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Nicandra physalodes (L.) Gaertn.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/219")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Nymphaea nouchali Burm.f.</a></li><li id="espec_o" ><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/220")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ocimum americanum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/221")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Oenothera glazioviana Micheli</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/222")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Oenothera stricta Ledeb. ex Link</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/223")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Oldenlandia corymbosa L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/224")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Oplismenus burmanni (Retz.) P.Beauv.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/225")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Oxalis corniculata L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/226")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Oxalis debilis var. corymbosa (DC.) Lourteig</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/227")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Oxalis latifolia Kunth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/228")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Oxalis tetraphylla Cav.</a></li><li id="espec_p" ><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/229")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Paederia foetida L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/230")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Panicum brevifolium L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/231")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Panicum humile Nees ex Steud.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/232")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Panicum maximum Jacq.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/233")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Panicum pseudowoeltzkowii A.Camus</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/234")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Panicum repens L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/235")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Panicum subalbidum Kunth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/236")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Parthenium hysterophorus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/237")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Paspalidium geminatum (Forssk.) Stapf</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/238")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Paspalum conjugatum P.J.Bergius</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/239")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Paspalum dilatatum Poir.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/240")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Paspalum paniculatum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/241")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Paspalum scrobiculatum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/242")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Paspalum urvillei Steud.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/243")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Paspalum vaginatum Sw.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/244")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Passiflora foetida L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/245")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Passiflora suberosa L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/246")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Passiflora subpeltata Ortega</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/247")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Pennisetum caffrum (Bory) Leeke.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/248")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Pennisetum clandestinum Hochst.ex Chiov.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/249")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Pennisetum polystachion (L.) Schult.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/250")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Perotis patens Gand.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/251")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Persicaria chinensis (L.) H.Gross</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/252")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Phalaris arundinacea L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/253")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Phyllanthus amarus Schumach. &amp; Thonn.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/254")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Phyllanthus niruroides M</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/255")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Phyllanthus tenellus Roxb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/256")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Phyllanthus urinaria L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/257")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Physalis angulata L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/258")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Phytolacca americana L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/259")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Pilea microphylla (L.) Liebm.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/260")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Pistia stratiotes L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/261")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Plantago lanceolata L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/262")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Poa annua L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/263")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Polycarpaea corymbosa (L.) Lam.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/264")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Portulaca oleracea L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/265")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Potamogeton nodosus Poir.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/266")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Pteridium aquilinum (L.) Kuhn</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/267")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Pycreus macrostachyos (Lam.) Raynal</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/268")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Pycreus mundtii Nees</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/269")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Pycreus polystachyos (Rottb.) P.Beauv.</a></li><li id="espec_r" ><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/270")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Raphanus raphanistrum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/271")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Rhamphicarpa fistulosa (Hochst.) Benth.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/272")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Rhynchosia malacophylla (Spreng.) Bojer</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/273")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Rhynchosia minima (L.) DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/274")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Rhynchosia viscosa (Roth) DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/275")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Richardia scabra L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/276")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Rottboellia cochinchinensis (Lour.) W.Clayton</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/277")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Rubus alceifolius Poir. </a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/278")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Rubus fraxinifolius Poir.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/279")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Rubus rosifolius Sm.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/280")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Rumex abyssinicus Jacq.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/281")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Rumex crispus L.</a></li><li id="espec_s" ><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/282")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sacciolepis africana C.E.Hubb. &amp; Snowden</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/283")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sagittaria guayanensis Kunth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/284")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Salvinia adnata Desv.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/285")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Schoenoplectiella  juncoides (Roxb.) Lye</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/286")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Schoenoplectiella perrieri (Cherm.) Lye</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/287")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Senna obtusifolia (L.) H.S.Irwin &amp; Barneby</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/288")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Senna occidentalis (L.) Roxb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/289")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Senna tora (L.) Roxb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/290")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sesbania sesban (L.) Merrill</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/291")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Setaria barbata (Lam.) Kunth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/292")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Setaria pumila (Poir.) Roem. &amp; Schult.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/293")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Setaria verticillata (L.) P.Beauv.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/294")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sida acuta Burm.f.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/295")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sida cordifolia L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/296")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sida glabra Mill.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/297")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sida rhombifolia L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/298")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sida rhombifolia subsp. alnifolia (L.) Ugbor.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/299")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sida urens L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/300")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sigesbeckia orientalis L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/301")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sisyrinchium micranthum Cav.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/302")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Solanum americanum Mill.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/303")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Solanum indicum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/304")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Solanum mauritianum Scop.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/305")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Solanum torvum Sw.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/306")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sonchus asper (L.) Hill.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/307")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sonchus oleraceus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/308")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sorghum arundinaceum (Desv.) Stapf</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/309")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Spergula arvensis L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/310")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Spermacoce alata Aubl.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/311")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Spermacoce verticillata L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/312")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sphagneticola trilobata (L.) Pruski</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/313")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sphenoclea zeylanica Gaertn.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/314")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sporobolus africanus (Poir.) Robyns &amp; Tournay</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/315")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Stachytarpheta jamaicensis (L.) Vahl</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/316")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Stachytarpheta urticifolia (Salisb.) Sims</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/317")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Stellaria media (L.)Vill.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/318")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Stenotaphrum dimidiatum (L.) Brongn.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/319")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Striga asiatica (L.) Kuntze</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/320")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Synedrella nodiflora (L.) Gaertn.</a></li><li id="espec_t" ><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/321")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Tephrosia linearis (Willd.) Pers.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/322")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Tephrosia purpurea (L.) Pers.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/323")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Teramnus labialis (L.f.) Spreng.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/324")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Tetragonia tetragonioides (Pall.) Kuntze</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/325")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Themeda quadrivalvis (L.) Kuntze</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/326")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Thunbergia alata Bojer ex Sims</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/327")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Thunbergia grandiflora (Roxb. ex Rottl.) Roxb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/328")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Thunbergia laevis Nees</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/329")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Trianthema portulacastrum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/330")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Tribulus cistoides L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/331")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Tribulus terrestris L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/332")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Trichodesma zeylanicum (Burm.f.) R.Br.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/333")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Tridax procumbens L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/334")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Tropaeolum majus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/335")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Turnera ulmifolia L.</a></li><li id="espec_u" ><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/336")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Urena lobata L.</a></li><li id="espec_v" ><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/337")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Verbena bonariensis L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/338")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Verbena brasiliensis Vell.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/339")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Vicia hirsuta (L.) Gray</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/340")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Vicia sativa L.</a></li><li id="espec_w" ><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/341")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Waltheria indica L.</a></li><li id="espec_y" ><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/342")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Youngia japonica (L.) DC.</a></li><li id="espec_z" ><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/343")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Zaleya pentandra (L.) Jeffrey</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/344")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Zornia latifolia Sm.</a></li></ul>
            
            <p class="back-top scrollspecies" style="display: block;">
            <a href="#top"><span></span></a>
            </p>
        </div>
    </div>
    <script type="text/javascript">
       
        </script>
    
    
    
    
    <div id="commonnames"  class="newspecieslistwrapper" style="display:none">
        <input class="search searchcomun" type="search"  placeholder="<?= $menu_text['placehholdercomun'];?>" />
        <!--<button class="sort" data-sort="name">
         Sort by name
         </button>-->
        <div   style="padding-bottom: 75px;">
            
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("noms_a") href="#noms_a" >A</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("noms_b") href="#noms_b" >B</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("noms_c") href="#noms_c" >C</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("noms_d") href="#noms_d" >D</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("noms_e") href="#noms_e" >E</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("noms_f") href="#noms_f" >F</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("noms_g") href="#noms_g" >G</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("noms_h") href="#noms_h" >H</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("noms_i") href="#noms_i" >I</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("noms_j") href="#noms_j" >J</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("noms_k") href="#noms_k" >K</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("noms_l") href="#noms_l" >L</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("noms_m") href="#noms_m" >M</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("noms_n") href="#noms_n" >N</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("noms_o") href="#noms_o" >O</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("noms_p") href="#noms_p" >P</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("noms_q") href="#noms_q" >Q</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("noms_r") href="#noms_r" >R</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("noms_s") href="#noms_s" >S</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("noms_t") href="#noms_t" >T</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("noms_u") href="#noms_u" >U</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("noms_v") href="#noms_v" >V</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("noms_w") href="#noms_w" >W</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("noms_x") href="#noms_x" >X</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("noms_y") href="#noms_y" >Y</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("noms_z") href="#noms_z" >Z</a></div>
        </div>
        
        <div class = "specieslistwrapper commonnames" style="padding-top: 15px;">
            
            
            <ul class="list">
                <li id="noms_a" > <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Absynthe bâtarde</a>
                    <ul class="closed">
                        <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/24") >Ambrosia tenuifolia Spreng.</a></li>
                    </ul></li>
                <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Afoandoha</a>
                    <ul class="closed">
                        <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/271") >Rhamphicarpa fistulosa (Hochst.) Benth.</a></li>
                        <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/319") >Striga asiatica (L.) Kuntze</a></li></ul></li><li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ahibahiny</a>
                            <ul class="closed">
                                <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/74") >Conyza sumatrensis (Retz.) E.Walker</a></li></ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ahibary</a>
                            <ul class="closed">
                                <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/116") >Echinochloa colona (L.) Link</a></li></ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ahibazaha</a>
                            <ul class="closed">
                                <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                            </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ahibita</a>
                            <ul class="closed">
                                <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/126") >Eleusine indica (L.) Gaertn.</a></li></ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ahibitsy</a>
                            <ul class="closed">
                                <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/315") >Stachytarpheta jamaicensis (L.) Vahl</a></li></ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ahidratsy
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ahigisa
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ahikongona
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/188") >Leersia hexandra Sw.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/205") >Melinis repens (Willd.) Zizka</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ahipilo
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ahipisaka
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/33") >Axonopus compressus (Sw.) P.Beauv.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/238") >Paspalum conjugatum P.J.Bergius</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/318") >Stenotaphrum dimidiatum (L.) Brongn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ahipoly
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/205") >Melinis repens (Willd.) Zizka</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ahipotsy
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/40") >Brachiaria deflexa (Schumach.) C.E.Hubb. ex Robyns</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ahitafoaka
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/109") >Digitaria ciliaris (Retz.) Koeler</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ahitramenakely
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/319") >Striga asiatica (L.) Kuntze</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ahitsiriry
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/188") >Leersia hexandra Sw.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ahitsoavaly
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/240") >Paspalum paniculatum L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ahivivy
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/241") >Paspalum scrobiculatum L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ahypody
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/40") >Brachiaria deflexa (Schumach.) C.E.Hubb. ex Robyns</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Aidinono
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/138") >Euphorbia hirta L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/140") >Euphorbia prostrata Aiton</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ail marron
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/15") >Allium neapolitanum Cirillo</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ail sauvage
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/15") >Allium neapolitanum Cirillo</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Akatabeloha
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/95") >Cyperus difformis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Akatambivy
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/116") >Echinochloa colona (L.) Link</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Akatandalitra
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/130") >Eragrostis aspera (Jacq.) Nees</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Akatandrano
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/116") >Echinochloa colona (L.) Link</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Akatavahiny
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/332") >Trichodesma zeylanicum (Burm.f.) R.Br.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Akondroankondro
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/165") >Indigofera hirsuta L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Alléluia à fleurs jaunes
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/225") >Oxalis corniculata L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Alléluia à fleurs roses
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/226") >Oxalis debilis var. corymbosa (DC.) Lourteig</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Amarante
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/23") >Amaranthus viridis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ambatrimbohitra
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/47") >Cajanus scarabaeoides (L.) Thouars</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Amberivatrindolo
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/86") >Crotalaria retusa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ambrosine
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Amourette
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/170") >Ipomoea hederifolia L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Amourette à feuilles en cœur
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/170") >Ipomoea hederifolia L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Anakatsotsy
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/254") >Phyllanthus niruroides M</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Anamamidia
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Anandrambo
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/79") >Crassocephalum crepidioides (Benth.) S.Moore</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Anantarika
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/114") >Drymaria cordata (L) Willd.ex Roem. &amp;Schult </a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Anantsanga
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/315") >Stachytarpheta jamaicensis (L.) Vahl</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Anapatsa
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/20") >Amaranthus dubius H.Martius ex Thell.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/22") >Amaranthus spinosus L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/23") >Amaranthus viridis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Anapatsavavy
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/20") >Amaranthus dubius H.Martius ex Thell.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Anataribazaha
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Anataritarika
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/114") >Drymaria cordata (L) Willd.ex Roem. &amp;Schult </a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Anatsaritaka
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/114") >Drymaria cordata (L) Willd.ex Roem. &amp;Schult </a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Anatsinahy
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/36") >Bidens pilosa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Anatsingitantsoavaly
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/192") >Lepidium didymum L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Andrenahake
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/72") >Commelina diffusa Burm.f.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Angadi
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/29") >Argemone mexicana L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Angamaibe
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/271") >Rhamphicarpa fistulosa (Hochst.) Benth.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Angamay
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/271") >Rhamphicarpa fistulosa (Hochst.) Benth.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/319") >Striga asiatica (L.) Kuntze</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/333") >Tridax procumbens L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Anis marron
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/91") >Cyclospermum leptophyllum (Pers.) Eichler</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Anis sauvage
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/91") >Cyclospermum leptophyllum (Pers.) Eichler</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Antambakonjirika
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/304") >Solanum mauritianum Scop.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Arampandrotra
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/93") >Cynodon dactylon (L.) Pers.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Arema
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/319") >Striga asiatica (L.) Kuntze</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Armoise
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/24") >Ambrosia tenuifolia Spreng.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/31") >Artemisia verlotiorum Lamotte</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Arouille carri
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/69") >Colocasia esculenta (L.) Schott</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Arouille violet
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/69") >Colocasia esculenta (L.) Schott</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Asiatic pennywort
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/55") >Centella asiatica (L.) Urb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Avokombiby
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/32") >Asystasia gangetica (L.) T.Anderson</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ayapana sauvage
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/89") >Cyanthillium cinereum (L.) H.Rob.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Azafo
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/260") >Pistia stratiotes L.</a></li>
                        </ul></li>
                        <li id="noms_b"> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Babouc
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Bakaka
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/308") >Sorghum arundinaceum (Desv.) Stapf</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Bakakely
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/7") >Acanthospermum hispidum DC.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Balloon vine
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Balsam Pear
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/216") >Momordica charantia L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Basilic
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/220") >Ocimum americanum L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/220") >Ocimum americanum L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Bautrice
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Bawa lalaaswiri
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/213") >Mirabilis jalapa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Bea
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/329") >Trianthema portulacastrum L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Bealahy
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/329") >Trianthema portulacastrum L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Beamena
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/37") >Boerhavia diffusa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Beandoha
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/95") >Cyperus difformis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Bécabar bâtard
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/37") >Boerhavia diffusa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Bedakoaky
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/29") >Argemone mexicana L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Belle de nuit
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/213") >Mirabilis jalapa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Belohaliky
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/205") >Melinis repens (Willd.) Zizka</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Bemaimbo
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/287") >Senna obtusifolia (L.) H.S.Irwin &amp; Barneby</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Berberoka
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/128") >Emilia sonchifolia (L.) DC. ex DC.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Bermuda grass
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/93") >Cynodon dactylon (L.) Pers.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Beroberoka
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/183") >Lactuca indica L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/306") >Sonchus asper (L.) Hill.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/307") >Sonchus oleraceus L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Besofina
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/336") >Urena lobata L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Betombo
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/100") >Dactyloctenium aegyptium (L.) P.Beauv.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Bevilaqua
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/55") >Centella asiatica (L.) Urb.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/55") >Centella asiatica (L.) Urb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Bitter Gourd
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/216") >Momordica charantia L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Bittercress
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/49") >Cardamine hirsuta L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Blackjack
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/36") >Bidens pilosa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Bogamaziwa
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/89") >Cyanthillium cinereum (L.) H.Rob.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Bois de tabac marron
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/304") >Solanum mauritianum Scop.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Bonaka
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Bonbon plim
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/244") >Passiflora foetida L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Bonbon plume
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/244") >Passiflora foetida L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Bongampiso
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/244") >Passiflora foetida L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Bonnet de prêtre
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Boreda
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/218") >Nicandra physalodes (L.) Gaertn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Botrabotra
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/264") >Portulaca oleracea L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Botrice
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/39") >Bothriospermum tenellum (Hornem.) Fisch. &amp; C.A.Mey.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Botryce
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Botrys
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Bourrache
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/332") >Trichodesma zeylanicum (Burm.f.) R.Br.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Bourrache sauvage
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/332") >Trichodesma zeylanicum (Burm.f.) R.Br.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Bred marten
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Bred pariater
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/20") >Amaranthus dubius H.Martius ex Thell.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Brède cacayanga
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/329") >Trianthema portulacastrum L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Brède caya
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/65") >Cleome viscosa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Brède chinois
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/31") >Artemisia verlotiorum Lamotte</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Brède doux
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/307") >Sonchus oleraceus L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Brède emballage
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/329") >Trianthema portulacastrum L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Brède épineuse
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/22") >Amaranthus spinosus L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Brède lastron
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/306") >Sonchus asper (L.) Hill.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Brède malabar
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/20") >Amaranthus dubius H.Martius ex Thell.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/22") >Amaranthus spinosus L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/23") >Amaranthus viridis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Brède malabar à piquants
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/22") >Amaranthus spinosus L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Brède malgache
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Brède mamzelle
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/198") >Lobelia cliffortiana L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Brède Martin
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Brède morelle
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Brède pariétaire
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/20") >Amaranthus dubius H.Martius ex Thell.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Brède pariétaire à piquants
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/22") >Amaranthus spinosus L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Brèdemalabar
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/23") >Amaranthus viridis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Brèdepariétaire
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/23") >Amaranthus viridis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Bredpariater
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/23") >Amaranthus viridis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Bringelier marron
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/304") >Solanum mauritianum Scop.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Bringellier
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/304") >Solanum mauritianum Scop.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Broom weed
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/203") >Malvastrum coromandelianum (L.) Garcke</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Buffalo grass
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/238") >Paspalum conjugatum P.J.Bergius</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Burr bristle grass
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/293") >Setaria verticillata (L.) P.Beauv.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Butterfly pea
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/56") >Centrosema pubescens Benth.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Bwa
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Bwasera
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/186") >Lantana camara L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Camel bush
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/332") >Trichodesma zeylanicum (Burm.f.) R.Br.</a></li>
                        </ul></li>
                        <li id="noms_c"> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Camomie
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/236") >Parthenium hysterophorus L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Camomille
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/236") >Parthenium hysterophorus L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Camomille balais
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/236") >Parthenium hysterophorus L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Camomille sauvage
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/74") >Conyza sumatrensis (Retz.) E.Walker</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Camomille z’oiseaux
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/236") >Parthenium hysterophorus L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Caranéli
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/253") >Phyllanthus amarus Schumach. &amp; Thonn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Carotte sauvage
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/91") >Cyclospermum leptophyllum (Pers.) Eichler</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/91") >Cyclospermum leptophyllum (Pers.) Eichler</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Carpet grass
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/33") >Axonopus compressus (Sw.) P.Beauv.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/33") >Axonopus compressus (Sw.) P.Beauv.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Cascarelle jaune
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/86") >Crotalaria retusa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Cascavelle jaune
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/86") >Crotalaria retusa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Casse puante
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/288") >Senna occidentalis (L.) Roxb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Casse puante Indigo
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/288") >Senna occidentalis (L.) Roxb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Casse tout seul
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/333") >Tridax procumbens L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Castique petite espèce
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/253") >Phyllanthus amarus Schumach. &amp; Thonn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Centro
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/56") >Centrosema pubescens Benth.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Centrosema
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/56") >Centrosema pubescens Benth.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Centrosema petite feuille
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/56") >Centrosema pubescens Benth.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Chardon
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/29") >Argemone mexicana L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Chardon du pays
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/29") >Argemone mexicana L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Chaudion
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/29") >Argemone mexicana L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Chibayamatso
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/211") >Mimosa diplotricha Sauvalle</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Chicorée
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/161") >Hypochaeris radicata L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Chicorée commune
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/161") >Hypochaeris radicata L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Chiendent
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/93") >Cynodon dactylon (L.) Pers.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Chiendent bourrique
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/318") >Stenotaphrum dimidiatum (L.) Brongn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Chiendent caille
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/109") >Digitaria ciliaris (Retz.) Koeler</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/113") >Digitaria radicosa (C.Presl) Miq.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Chiendent caille blanc
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/113") >Digitaria radicosa (C.Presl) Miq.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Chiendent de bœuf
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/318") >Stenotaphrum dimidiatum (L.) Brongn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Chiendent fil de fer
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/93") >Cynodon dactylon (L.) Pers.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Chiendent patte de poule
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/100") >Dactyloctenium aegyptium (L.) P.Beauv.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/126") >Eleusine indica (L.) Gaertn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Chiendent patte poule
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/100") >Dactyloctenium aegyptium (L.) P.Beauv.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Chiendent pied de poule
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/126") >Eleusine indica (L.) Gaertn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Chiendent queue de rat
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/292") >Setaria pumila (Poir.) Roem. &amp; Schult.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Cochlearia
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/55") >Centella asiatica (L.) Urb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Cochlearia du pays
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/55") >Centella asiatica (L.) Urb.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/160") >Hydrocotyle bonariensis Lam.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Cochon gras
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/320") >Synedrella nodiflora (L.) Gaertn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Coclaria du pays
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/55") >Centella asiatica (L.) Urb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Coffee Senna
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/288") >Senna occidentalis (L.) Roxb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Coha
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/71") >Commelina benghalensis L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/72") >Commelina diffusa Burm.f.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Collant
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/105") >Desmodium incanum DC.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Colle Colle
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/106") >Desmodium intortum (Mill.) Urb.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/300") >Sigesbeckia orientalis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Colle-colle
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/105") >Desmodium incanum DC.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Coquette
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/335") >Turnera ulmifolia L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Corbeille d'or
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/186") >Lantana camara L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Couch grass
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/93") >Cynodon dactylon (L.) Pers.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Courre à terre
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/318") >Stenotaphrum dimidiatum (L.) Brongn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Creaping paspalum
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/241") >Paspalum scrobiculatum L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Cressonette
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/49") >Cardamine hirsuta L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Crotolaria
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/86") >Crotalaria retusa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Crowfoot grass
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/100") >Dactyloctenium aegyptium (L.) P.Beauv.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Curanellia
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/253") >Phyllanthus amarus Schumach. &amp; Thonn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Curanellie
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/254") >Phyllanthus niruroides M</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/255") >Phyllanthus tenellus Roxb.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/256") >Phyllanthus urinaria L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Curanellie blanche
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/253") >Phyllanthus amarus Schumach. &amp; Thonn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Curanellie rouge
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/256") >Phyllanthus urinaria L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Cœur de Nely
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/253") >Phyllanthus amarus Schumach. &amp; Thonn.</a></li>
                        </ul></li>
                        <li id="noms_d"> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Dadjile
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/287") >Senna obtusifolia (L.) H.S.Irwin &amp; Barneby</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Dallis grass
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/239") >Paspalum dilatatum Poir.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Datura
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/102") >Datura stramonium L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Davu
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Debere
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/20") >Amaranthus dubius H.Martius ex Thell.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/23") >Amaranthus viridis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Désiré
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/66") >Clidemia hirta (L.) D.Don.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Devil-bean
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/86") >Crotalaria retusa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Donadona
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/268") >Pycreus mundtii Nees</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Drematse
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/100") >Dactyloctenium aegyptium (L.) P.Beauv.</a></li>
                        </ul></li>
                        <li id="noms_e"> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Epi bleu
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/315") >Stachytarpheta jamaicensis (L.) Vahl</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Epinard blanc
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/58") >Chenopodium album L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Epinard sauvage
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/58") >Chenopodium album L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/58") >Chenopodium album L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Esquine
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/325") >Themeda quadrivalvis (L.) Kuntze</a></li>
                        </ul></li>
                        <li id="noms_f"> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Famamo
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/322") >Tephrosia purpurea (L.) Pers.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Famoa
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/232") >Panicum maximum Jacq.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/235") >Panicum subalbidum Kunth</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Fandridahy
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/44") >Brachiaria umbellata (Trin.) Clayton</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Fandrotrarambazaha
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/248") >Pennisetum clandestinum Hochst.ex Chiov.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Fandrotrarana
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/44") >Brachiaria umbellata (Trin.) Clayton</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/93") >Cynodon dactylon (L.) Pers.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Fandrotsana
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/93") >Cynodon dactylon (L.) Pers.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Fangy
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/255") >Phyllanthus tenellus Roxb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Fantaka
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/232") >Panicum maximum Jacq.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/235") >Panicum subalbidum Kunth</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Fatak rouge
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/235") >Panicum subalbidum Kunth</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Fataq
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/232") >Panicum maximum Jacq.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Fataque
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/232") >Panicum maximum Jacq.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Fataque des oiseaux
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/308") >Sorghum arundinaceum (Desv.) Stapf</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Fatipatika
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/22") >Amaranthus spinosus L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Fausse camomille
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/74") >Conyza sumatrensis (Retz.) E.Walker</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Fausse pistache marronne
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/47") >Cajanus scarabaeoides (L.) Thouars</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Faux vin
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/258") >Phytolacca americana L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Feather fingergrass
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/59") >Chloris barbata Sw.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Fes poul
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/136") >Euphorbia cyathophora Murrill</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/137") >Euphorbia heterophylla L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Feuille du diable
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/102") >Datura stramonium L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Filakwa
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/55") >Centella asiatica (L.) Urb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Fitohizambalala
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/269") >Pycreus polystachyos (Rottb.) P.Beauv.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Fler laklos
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/102") >Datura stramonium L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Fler pwazon
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/102") >Datura stramonium L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Fleur poison
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/102") >Datura stramonium L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Fleur soleil
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/320") >Synedrella nodiflora (L.) Gaertn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Flouve odorante
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/27") >Anthoxanthum odoratum L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Fo watouk
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/66") >Clidemia hirta (L.) D.Don.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Foin
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/205") >Melinis repens (Willd.) Zizka</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Forinondry
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/32") >Asystasia gangetica (L.) T.Anderson</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Fotsimbarinakoho
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/52") >Celosia trigyna L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Fou à mental
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/27") >Anthoxanthum odoratum L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Four o'clock
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/213") >Mirabilis jalapa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Framboise
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/279") >Rubus rosifolius Sm.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Framboise marron
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/279") >Rubus rosifolius Sm.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Framboisier
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/279") >Rubus rosifolius Sm.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Frambwazi
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/279") >Rubus rosifolius Sm.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Franbwaz
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/279") >Rubus rosifolius Sm.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Fromental
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/240") >Paspalum paniculatum L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Fumeterre
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/146") >Fumaria muralis Sond. ex Koch</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Fundrakole
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/294") >Sida acuta Burm.f.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/295") >Sida cordifolia L.</a></li>
                        </ul></li>
                        <li id="noms_g"> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Galaber
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/186") >Lantana camara L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Gandia marron
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/74") >Conyza sumatrensis (Retz.) E.Walker</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Gazon
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/44") >Brachiaria umbellata (Trin.) Clayton</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Gazon chinois
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/44") >Brachiaria umbellata (Trin.) Clayton</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Gazon trel
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/44") >Brachiaria umbellata (Trin.) Clayton</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Gazon trelle
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/44") >Brachiaria umbellata (Trin.) Clayton</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Gerivit
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/89") >Cyanthillium cinereum (L.) H.Rob.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Goose grass
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/126") >Eleusine indica (L.) Gaertn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Goutte de sang
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/128") >Emilia sonchifolia (L.) DC. ex DC.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/319") >Striga asiatica (L.) Kuntze</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Grande oseille
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/280") >Rumex abyssinicus Jacq.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Grenadier marron
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/244") >Passiflora foetida L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Grenadine marron
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/245") >Passiflora suberosa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Gros chiendent
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/44") >Brachiaria umbellata (Trin.) Clayton</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/126") >Eleusine indica (L.) Gaertn.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/239") >Paspalum dilatatum Poir.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/242") >Paspalum urvillei Steud.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/318") >Stenotaphrum dimidiatum (L.) Brongn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Gros indigo sauvage
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/288") >Senna occidentalis (L.) Roxb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Gros lastron
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/183") >Lactuca indica L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Gros meinki
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/110") >Digitaria horizontalis Willd.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Gros mota
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/181") >Kyllinga erecta Schumach.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Gros poc poc
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/41") >Brachiaria eruciformis (Sm.) Griseb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Gros trèfle
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/105") >Desmodium incanum DC.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/105") >Desmodium incanum DC.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/226") >Oxalis debilis var. corymbosa (DC.) Lourteig</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/227") >Oxalis latifolia Kunth</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Gros zoumine
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/96") >Cyperus esculentus L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Grosse framboise marronne
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/277") >Rubus alceifolius Poir. </a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Grosse herbe de l’eau
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/71") >Commelina benghalensis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Grosse lentille malbare
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/340") >Vicia sativa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Grosse oseille
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/226") >Oxalis debilis var. corymbosa (DC.) Lourteig</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Grosse ronce
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/277") >Rubus alceifolius Poir. </a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Grosse traînasse
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/71") >Commelina benghalensis L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/291") >Setaria barbata (Lam.) Kunth</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Guérit vite
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/89") >Cyanthillium cinereum (L.) H.Rob.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/300") >Sigesbeckia orientalis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Guinea grass
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/232") >Panicum maximum Jacq.</a></li>
                        </ul></li>
                        <li id="noms_h"> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Hamoka
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/11") >Aeschynomene indica L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Hanitrinipatsaka
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Harefo
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/122") >Eleocharis dulcis (Burm.f.) Trin. ex Hensch.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Hasa
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/288") >Senna occidentalis (L.) Roxb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Hassa
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/287") >Senna obtusifolia (L.) H.S.Irwin &amp; Barneby</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Hazomena
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/76") >Corchorus olitorius L. </a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe à balai
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/203") >Malvastrum coromandelianum (L.) Garcke</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe à bouc
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe à cailles
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/333") >Tridax procumbens L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe à chenilles
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/315") >Stachytarpheta jamaicensis (L.) Vahl</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe à cils
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/59") >Chloris barbata Sw.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe à cornets
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/240") >Paspalum paniculatum L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe à épée
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/239") >Paspalum dilatatum Poir.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/241") >Paspalum scrobiculatum L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe à feu
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/320") >Synedrella nodiflora (L.) Gaertn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe à matelas
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/43") >Brachiaria reptans (L.) C.A.Gardner &amp; C.E.Hubb.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/234") >Panicum repens L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/240") >Paspalum paniculatum L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe à oignon
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/99") >Cyperus rotundus L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe à oiseaux
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/59") >Chloris barbata Sw.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe à paniers
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/294") >Sida acuta Burm.f.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/336") >Urena lobata L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe à poils
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/276") >Rottboellia cochinchinensis (Lour.) W.Clayton</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe à vers
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/58") >Chenopodium album L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe amère
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe aux ânes
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/291") >Setaria barbata (Lam.) Kunth</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe aux cochons
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/71") >Commelina benghalensis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe bambou
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/291") >Setaria barbata (Lam.) Kunth</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/291") >Setaria barbata (Lam.) Kunth</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe bassine
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/291") >Setaria barbata (Lam.) Kunth</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe blanche
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/236") >Parthenium hysterophorus L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe bleue
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/154") >Heliotropium amplexicaule Vahl</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe boileau
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/55") >Centella asiatica (L.) Urb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe bol
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/160") >Hydrocotyle bonariensis Lam.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe bougie
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/74") >Conyza sumatrensis (Retz.) E.Walker</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe bourrique
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/100") >Dactyloctenium aegyptium (L.) P.Beauv.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe caille
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/43") >Brachiaria reptans (L.) C.A.Gardner &amp; C.E.Hubb.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/113") >Digitaria radicosa (C.Presl) Miq.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/234") >Panicum repens L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/333") >Tridax procumbens L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/333") >Tridax procumbens L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe calumé
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/234") >Panicum repens L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe canal
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/90") >Cyathula prostrata (L.) Blume </a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe carapatte
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/43") >Brachiaria reptans (L.) C.A.Gardner &amp; C.E.Hubb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe Caroline
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/261") >Plantago lanceolata L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe Chat
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/5") >Acalypha indica L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe Chatte
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/5") >Acalypha indica L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/5") >Acalypha indica L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe cheval
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/242") >Paspalum urvillei Steud.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe chinois
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/31") >Artemisia verlotiorum Lamotte</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe cipaye
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/332") >Trichodesma zeylanicum (Burm.f.) R.Br.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe clausette
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/36") >Bidens pilosa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe cochon
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/71") >Commelina benghalensis L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/72") >Commelina diffusa Burm.f.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe coco
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/318") >Stenotaphrum dimidiatum (L.) Brongn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe codaya
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/239") >Paspalum dilatatum Poir.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/242") >Paspalum urvillei Steud.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe créole
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/238") >Paspalum conjugatum P.J.Bergius</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe cressonnette
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/192") >Lepidium didymum L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe d'eau
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/72") >Commelina diffusa Burm.f.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe d'Eugène
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/8") >Achyranthes aspera L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe d'Inde
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/8") >Achyranthes aspera L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe de bouc
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe de Flacq
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/300") >Sigesbeckia orientalis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe de flacque
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/89") >Cyanthillium cinereum (L.) H.Rob.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/300") >Sigesbeckia orientalis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe de Guinée
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/232") >Panicum maximum Jacq.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe de l'eau
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/72") >Commelina diffusa Burm.f.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe de lait
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/137") >Euphorbia heterophylla L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe de miel
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/239") >Paspalum dilatatum Poir.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe de riz
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/116") >Echinochloa colona (L.) Link</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/237") >Paspalidium geminatum (Forssk.) Stapf</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/237") >Paspalidium geminatum (Forssk.) Stapf</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/276") >Rottboellia cochinchinensis (Lour.) W.Clayton</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe des jeunes
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/8") >Achyranthes aspera L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe diable
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/87") >Croton bonplandianus Baill.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe du diable
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/102") >Datura stramonium L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe du feu
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/319") >Striga asiatica (L.) Kuntze</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe du riz
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/319") >Striga asiatica (L.) Kuntze</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe dure
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/203") >Malvastrum coromandelianum (L.) Garcke</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/207") >Melochia pyramidata L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/294") >Sida acuta Burm.f.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/295") >Sida cordifolia L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/298") >Sida rhombifolia subsp. alnifolia (L.) Ugbor.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe dure cendrée
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/295") >Sida cordifolia L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe dure collante
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/296") >Sida glabra Mill.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe duvet
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/240") >Paspalum paniculatum L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/276") >Rottboellia cochinchinensis (Lour.) W.Clayton</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe Edwards
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/44") >Brachiaria umbellata (Trin.) Clayton</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe épée
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/239") >Paspalum dilatatum Poir.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe fataque
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/232") >Panicum maximum Jacq.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe fataque duvet
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/276") >Rottboellia cochinchinensis (Lour.) W.Clayton</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe feu
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/252") >Phalaris arundinacea L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe Gallon
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/105") >Desmodium incanum DC.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe gandia
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/74") >Conyza sumatrensis (Retz.) E.Walker</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe goni
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/89") >Cyanthillium cinereum (L.) H.Rob.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe grasse
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/300") >Sigesbeckia orientalis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe guérit vite
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/89") >Cyanthillium cinereum (L.) H.Rob.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/300") >Sigesbeckia orientalis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe Hérisson
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/336") >Urena lobata L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe hérisson rouge
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/336") >Urena lobata L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe joba
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/248") >Pennisetum clandestinum Hochst.ex Chiov.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe la misère
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/205") >Melinis repens (Willd.) Zizka</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe la villebague
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/36") >Bidens pilosa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe le rail
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/32") >Asystasia gangetica (L.) T.Anderson</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe le rhum
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/89") >Cyanthillium cinereum (L.) H.Rob.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe ma tante
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/240") >Paspalum paniculatum L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/249") >Pennisetum polystachion (L.) Schult.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe mackaye
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/252") >Phalaris arundinacea L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe mange tout
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/32") >Asystasia gangetica (L.) T.Anderson</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe margoze
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/210") >Mikania micrantha Kunth</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe marron
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/74") >Conyza sumatrensis (Retz.) E.Walker</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe oignon
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/96") >Cyperus esculentus L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/99") >Cyperus rotundus L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/180") >Kyllinga bulbosa P.Beauv.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/181") >Kyllinga erecta Schumach.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/269") >Pycreus polystachyos (Rottb.) P.Beauv.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe pagode
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/330") >Tribulus cistoides L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe panier
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/336") >Urena lobata L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe papangue
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/205") >Melinis repens (Willd.) Zizka</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe patience
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/281") >Rumex crispus L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe patte de poule
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/126") >Eleusine indica (L.) Gaertn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe piment
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/87") >Croton bonplandianus Baill.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/147") >Galinsoga parviflora Cav.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe pintade
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/37") >Boerhavia diffusa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe pipi
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe pistache
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/32") >Asystasia gangetica (L.) T.Anderson</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe rose
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/205") >Melinis repens (Willd.) Zizka</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe rouge
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/319") >Striga asiatica (L.) Kuntze</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe ruban
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/252") >Phalaris arundinacea L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe sensible
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/212") >Mimosa pudica L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe sergent
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/8") >Achyranthes aspera L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe siflette
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/116") >Echinochloa colona (L.) Link</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/237") >Paspalidium geminatum (Forssk.) Stapf</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/237") >Paspalidium geminatum (Forssk.) Stapf</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe sirop
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/239") >Paspalum dilatatum Poir.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe soleil
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/330") >Tribulus cistoides L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe solférino
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/24") >Ambrosia tenuifolia Spreng.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe sornette
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/36") >Bidens pilosa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe tam-tam
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/160") >Hydrocotyle bonariensis Lam.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe tapage
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/86") >Crotalaria retusa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe tourterelle
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/293") >Setaria verticillata (L.) P.Beauv.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/332") >Trichodesma zeylanicum (Burm.f.) R.Br.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe touterelle
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/291") >Setaria barbata (Lam.) Kunth</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe tricorne
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/7") >Acanthospermum hispidum DC.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe villebague
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/36") >Bidens pilosa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Herbe zinde
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/8") >Achyranthes aspera L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Hérisson rouge
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/336") >Urena lobata L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Hisabazaha
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/7") >Acanthospermum hispidum DC.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Hisatra
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/330") >Tribulus cistoides L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Horompotsilahy
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/314") >Sporobolus africanus (Poir.) Robyns &amp; Tournay</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Horse vine
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/323") >Teramnus labialis (L.f.) Spreng.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Hosy hosy
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/188") >Leersia hexandra Sw.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Houlque laineuse
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/159") >Holcus lanatus L.</a></li>
                        </ul></li>
                        <li id="noms_i"> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Idwadzia
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/138") >Euphorbia hirta L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Immortelle marronne
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/150") >Gnaphalium purpureum L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Indian rhododendron
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/66") >Clidemia hirta (L.) D.Don.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Indigo marron
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/322") >Tephrosia purpurea (L.) Pers.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Indigo rouge
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/322") >Tephrosia purpurea (L.) Pers.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Indigo sauvage
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/322") >Tephrosia purpurea (L.) Pers.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ipamlendje
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/173") >Ipomoea obscura (L.) Ker-Gawler</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/174") >Ipomoea purpurea (L.) Roth</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/176") >Ipomoea triloba L. </a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ipéca
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/245") >Passiflora suberosa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Irudali
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Itsuzi
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/229") >Paederia foetida L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Itswamli
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/71") >Commelina benghalensis L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/72") >Commelina diffusa Burm.f.</a></li>
                        </ul></li>
                        <li id="noms_j"> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Jamaican crabgrass
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/110") >Digitaria horizontalis Willd.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Jamalanjirike
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/236") >Parthenium hysterophorus L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Jambélon
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/181") >Kyllinga erecta Schumach.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Jean-Belon
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/181") >Kyllinga erecta Schumach.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Jean-Robert
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/138") >Euphorbia hirta L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Jean-Robert lahy
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/140") >Euphorbia prostrata Aiton</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Jungle rice
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/116") >Echinochloa colona (L.) Link</a></li>
                        </ul></li>
                        <li id="noms_k"> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Kadambi masera
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/315") >Stachytarpheta jamaicensis (L.) Vahl</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Kahakaha
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/157") >Hibiscus surattensis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Kalay
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/276") >Rottboellia cochinchinensis (Lour.) W.Clayton</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Kalimen
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/234") >Panicum repens L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Kalisso
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Kandza
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/220") >Ocimum americanum L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Karaotintsoavaly
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/91") >Cyclospermum leptophyllum (Pers.) Eichler</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Karepoka
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/96") >Cyperus esculentus L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Kaspiant
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/288") >Senna occidentalis (L.) Roxb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Katsi
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/37") >Boerhavia diffusa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Keliantitry
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/322") >Tephrosia purpurea (L.) Pers.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Keraneli rouz
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/256") >Phyllanthus urinaria L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Kerneli
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/254") >Phyllanthus niruroides M</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/255") >Phyllanthus tenellus Roxb.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/256") >Phyllanthus urinaria L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Kibatritra
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/20") >Amaranthus dubius H.Martius ex Thell.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Kidiadiamborona
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/225") >Oxalis corniculata L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/227") >Oxalis latifolia Kunth</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Kidresy
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/93") >Cynodon dactylon (L.) Pers.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Kifafalahy
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/65") >Cleome viscosa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Kiforo
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Kikuyu
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/248") >Pennisetum clandestinum Hochst.ex Chiov.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Kikuyu grass
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/248") >Pennisetum clandestinum Hochst.ex Chiov.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Kimenamena
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/138") >Euphorbia hirta L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Kimotondoha
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/181") >Kyllinga erecta Schumach.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Kiranéli
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/253") >Phyllanthus amarus Schumach. &amp; Thonn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Kirganéli
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/253") >Phyllanthus amarus Schumach. &amp; Thonn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Kirijy
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/336") >Urena lobata L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Kirindrala
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/181") >Kyllinga erecta Schumach.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Kisarisarimbomanga
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/174") >Ipomoea purpurea (L.) Roth</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Kitsakitsanakizy
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/86") >Crotalaria retusa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Kitsotritsotry
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/47") >Cajanus scarabaeoides (L.) Thouars</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Koket
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/335") >Turnera ulmifolia L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Koromoke
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Kourpie
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/264") >Portulaca oleracea L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Kozity
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/337") >Verbena bonariensis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Kunu
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/126") >Eleusine indica (L.) Gaertn.</a></li>
                        </ul></li>
                        <li id="noms_l"> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>La bolzé
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/294") >Sida acuta Burm.f.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>La coquette
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/335") >Turnera ulmifolia L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>La liane
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/209") >Merremia dissecta (Jacq.) Hallier f.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>La ville-bague
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/36") >Bidens pilosa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>La zinde
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/8") >Achyranthes aspera L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lahiriky
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Laïche
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/96") >Cyperus esculentus L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/99") >Cyperus rotundus L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Laitron
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/183") >Lactuca indica L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Laitue d'eau
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/260") >Pistia stratiotes L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lanoro
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/256") >Phyllanthus urinaria L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lantana
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/186") >Lantana camara L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lastron
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/128") >Emilia sonchifolia (L.) DC. ex DC.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/183") >Lactuca indica L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/306") >Sonchus asper (L.) Hill.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/306") >Sonchus asper (L.) Hill.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/307") >Sonchus oleraceus L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lastron bâtard
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/128") >Emilia sonchifolia (L.) DC. ex DC.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/342") >Youngia japonica (L.) DC.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lastron cheval
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/183") >Lactuca indica L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lastron doux
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/307") >Sonchus oleraceus L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lastron marron
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/187") >Lapsana communis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lastron piquant
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/306") >Sonchus asper (L.) Hill.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lastron sauvage
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/161") >Hypochaeris radicata L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lastron tendre
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/307") >Sonchus oleraceus L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lawn grass
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/33") >Axonopus compressus (Sw.) P.Beauv.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lengo
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/229") >Paederia foetida L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lentille sauvage
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/340") >Vicia sativa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lepeka
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/245") >Passiflora suberosa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lerb banbou
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/291") >Setaria barbata (Lam.) Kunth</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lerb bourik
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/100") >Dactyloctenium aegyptium (L.) P.Beauv.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lerb dife
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/319") >Striga asiatica (L.) Kuntze</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lerb dir
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/203") >Malvastrum coromandelianum (L.) Garcke</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/207") >Melochia pyramidata L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/294") >Sida acuta Burm.f.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/295") >Sida cordifolia L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lerb diri
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/116") >Echinochloa colona (L.) Link</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/319") >Striga asiatica (L.) Kuntze</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lerb kalimen
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/234") >Panicum repens L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lerb kay
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/333") >Tridax procumbens L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lerb koko
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/318") >Stenotaphrum dimidiatum (L.) Brongn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lerb koson
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/71") >Commelina benghalensis L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/72") >Commelina diffusa Burm.f.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lerb kreson
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/114") >Drymaria cordata (L) Willd.ex Roem. &amp;Schult </a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lerb loulou
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/100") >Dactyloctenium aegyptium (L.) P.Beauv.</a></li>
                        </ul></li>
                        <li id="noms_l"> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lerb ma tant
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/240") >Paspalum paniculatum L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/249") >Pennisetum polystachion (L.) Schult.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lerb sat
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/5") >Acalypha indica L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lerb zonnyon
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/96") >Cyperus esculentus L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/99") >Cyperus rotundus L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/180") >Kyllinga bulbosa P.Beauv.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/181") >Kyllinga erecta Schumach.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/269") >Pycreus polystachyos (Rottb.) P.Beauv.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Leti delo
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/260") >Pistia stratiotes L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Liane bleue
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/171") >Ipomoea indica (Burm.) Merr.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Liane caca
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/229") >Paederia foetida L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Liane cochon
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/172") >Ipomoea nil (L.) Roth</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Liane coup de pet
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/229") >Paederia foetida L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Liane cuscute
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/88") >Cuscuta campestris Yunck.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Liane de miel
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/26") >Anredera cordifolia (Ten.) Steenis</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Liane lingue
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/229") >Paederia foetida L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Liane margoze
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/210") >Mikania micrantha Kunth</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Liane poc poc
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/244") >Passiflora foetida L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/245") >Passiflora suberosa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Liane pocpoc
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Liane sans feuille
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/88") >Cuscuta campestris Yunck.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Liane savon
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/26") >Anredera cordifolia (Ten.) Steenis</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Liane sensitive
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/211") >Mimosa diplotricha Sauvalle</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Liane toupie
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lilac oxalis
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/226") >Oxalis debilis var. corymbosa (DC.) Lourteig</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Lipeka
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/245") >Passiflora suberosa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Liseron
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/174") >Ipomoea purpurea (L.) Roth</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Liseron fleur bleue
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/172") >Ipomoea nil (L.) Roth</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Long-leaved pondweed
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/265") >Potamogeton nodosus Poir.</a></li>
                        </ul></li>
                        <li id="noms_m" > <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ma tante
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/240") >Paspalum paniculatum L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/249") >Pennisetum polystachion (L.) Schult.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Macatia vert
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/37") >Boerhavia diffusa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Madeira-vine
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/26") >Anredera cordifolia (Ten.) Steenis</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Madjimbi
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/69") >Colocasia esculenta (L.) Schott</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Madzanuni
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/244") >Passiflora foetida L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mahabanky
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/178") >Ischaemum rugosum Salisb.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/240") >Paspalum paniculatum L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Maintsoririnina
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/74") >Conyza sumatrensis (Retz.) E.Walker</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Maïs cafre
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/308") >Sorghum arundinaceum (Desv.) Stapf</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Makunu
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/96") >Cyperus esculentus L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/126") >Eleusine indica (L.) Gaertn.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/181") >Kyllinga erecta Schumach.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Malimatse
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/76") >Corchorus olitorius L. </a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mamakihoho
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/40") >Brachiaria deflexa (Schumach.) C.E.Hubb. ex Robyns</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/41") >Brachiaria eruciformis (Sm.) Griseb.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/42") >Brachiaria nana Stapf</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/43") >Brachiaria reptans (L.) C.A.Gardner &amp; C.E.Hubb.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/109") >Digitaria ciliaris (Retz.) Koeler</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/110") >Digitaria horizontalis Willd.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mampivena
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/163") >Hyptis spicigera Lam.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mandalodiaraikitra
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/105") >Desmodium incanum DC.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mandraidrota
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/53") >Cenchrus biflorus Roxb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mandravasarotra
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/294") >Sida acuta Burm.f.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mandravasarotse
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/203") >Malvastrum coromandelianum (L.) Garcke</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/295") >Sida cordifolia L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Manevika
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mange tout
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/32") >Asystasia gangetica (L.) T.Anderson</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Manz tou
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/32") >Asystasia gangetica (L.) T.Anderson</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Margose
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/216") >Momordica charantia L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/216") >Momordica charantia L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Margose marron
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/216") >Momordica charantia L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Margose sauvage
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/216") >Momordica charantia L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Margoz marron
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/216") >Momordica charantia L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Margoz sovaz
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/216") >Momordica charantia L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Marie éreintée
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/314") >Sporobolus africanus (Poir.) Robyns &amp; Tournay</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Marie reintée
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/314") >Sporobolus africanus (Poir.) Robyns &amp; Tournay</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Marie-Thérèse
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/31") >Artemisia verlotiorum Lamotte</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Marigozi
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/216") >Momordica charantia L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Marorantsana
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/109") >Digitaria ciliaris (Retz.) Koeler</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/110") >Digitaria horizontalis Willd.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Marvel of Peru
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/213") >Mirabilis jalapa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Masandzé
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/110") >Digitaria horizontalis Willd.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mauve
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mauve à feuilles veloutées
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/295") >Sida cordifolia L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mauve bâtard
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mauve sauvage
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/203") >Malvastrum coromandelianum (L.) Garcke</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mazambody
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/66") >Clidemia hirta (L.) D.Don.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mbaba unandzo
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mbabawure
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/264") >Portulaca oleracea L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mbidambe
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mbitsi
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/304") >Solanum mauritianum Scop.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mbuha
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/178") >Ischaemum rugosum Salisb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mbwadigo
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/279") >Rubus rosifolius Sm.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mdudu
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/36") >Bidens pilosa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Melogasy
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Menapaka
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/205") >Melinis repens (Willd.) Zizka</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Menavavy
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/241") >Paspalum scrobiculatum L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mexican oxalis
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/227") >Oxalis latifolia Kunth</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mexican prickly poppy
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/29") >Argemone mexicana L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mfulera
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mille feuille
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/74") >Conyza sumatrensis (Retz.) E.Walker</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mille marron
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/308") >Sorghum arundinaceum (Desv.) Stapf</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Millet
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/308") >Sorghum arundinaceum (Desv.) Stapf</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Millet sauvage
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/308") >Sorghum arundinaceum (Desv.) Stapf</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mnavu
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mnunka
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Moita
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/99") >Cyperus rotundus L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Morelle
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Morelle noire
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Morning glory
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/172") >Ipomoea nil (L.) Roth</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mouron
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/317") >Stellaria media (L.)Vill.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mouron blanc
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/317") >Stellaria media (L.)Vill.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mouron des oiseaux
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/308") >Sorghum arundinaceum (Desv.) Stapf</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/317") >Stellaria media (L.)Vill.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Msi wamasera
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/304") >Solanum mauritianum Scop.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Msihantsi
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/140") >Euphorbia prostrata Aiton</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Msiuha
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/211") >Mimosa diplotricha Sauvalle</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mugwort
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/31") >Artemisia verlotiorum Lamotte</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Mwadjumbe
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/5") >Acalypha indica L.</a></li>
                        </ul></li>
                        <li id="noms_n"> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Namara
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/114") >Drymaria cordata (L) Willd.ex Roem. &amp;Schult </a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Natal red-top grass
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/205") >Melinis repens (Willd.) Zizka</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ndawe
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/95") >Cyperus difformis L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/99") >Cyperus rotundus L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/100") >Dactyloctenium aegyptium (L.) P.Beauv.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ndjenimsiru
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/336") >Urena lobata L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Nkunu
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/100") >Dactyloctenium aegyptium (L.) P.Beauv.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/181") >Kyllinga erecta Schumach.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Nkunu ndredje
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/93") >Cynodon dactylon (L.) Pers.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Noyau vine
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/209") >Merremia dissecta (Jacq.) Hallier f.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Nrambantsi
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/71") >Commelina benghalensis L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/72") >Commelina diffusa Burm.f.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ntrunda dzaha
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/66") >Clidemia hirta (L.) D.Don.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ntsohoho
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/36") >Bidens pilosa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ntsohomaele
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/8") >Achyranthes aspera L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Nuriri
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/253") >Phyllanthus amarus Schumach. &amp; Thonn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Nyambwibwiyi
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/245") >Passiflora suberosa L.</a></li>
                        </ul></li>
                        <li id="noms_o"> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Oreille Jacquot
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/160") >Hydrocotyle bonariensis Lam.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Oriental hawksbeard
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/342") >Youngia japonica (L.) DC.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Oseille
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/226") >Oxalis debilis var. corymbosa (DC.) Lourteig</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/227") >Oxalis latifolia Kunth</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/280") >Rumex abyssinicus Jacq.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/281") >Rumex crispus L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Oseille indigene
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/157") >Hibiscus surattensis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Oseille malabar
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/157") >Hibiscus surattensis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Oseille malbar
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/157") >Hibiscus surattensis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Oseille malbare
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/157") >Hibiscus surattensis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Oseille sauvage
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/280") >Rumex abyssinicus Jacq.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Oumine
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/99") >Cyperus rotundus L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Oviala
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/173") >Ipomoea obscura (L.) Ker-Gawler</a></li>
                        </ul></li>
                        <li id="noms_p"> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Pagode
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/330") >Tribulus cistoides L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Paillatère
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/22") >Amaranthus spinosus L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/23") >Amaranthus viridis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Paipaikatianomby
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/276") >Rottboellia cochinchinensis (Lour.) W.Clayton</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Paka
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/336") >Urena lobata L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Pariétaire
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/20") >Amaranthus dubius H.Martius ex Thell.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/23") >Amaranthus viridis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Pariétaire piquante
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/22") >Amaranthus spinosus L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Pariétaire rouge
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/20") >Amaranthus dubius H.Martius ex Thell.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Paspalum
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/239") >Paspalum dilatatum Poir.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Pat de poul
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/126") >Eleusine indica (L.) Gaertn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Patate marrone
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/172") >Ipomoea nil (L.) Roth</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Patience
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/281") >Rumex crispus L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Patte de poule
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/126") >Eleusine indica (L.) Gaertn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Petit acacia
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/103") >Desmanthus virgatus (L.) Willd. </a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Petit cassie
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/103") >Desmanthus virgatus (L.) Willd. </a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Petit cassis
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/103") >Desmanthus virgatus (L.) Willd. </a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Petit chiendent
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/93") >Cynodon dactylon (L.) Pers.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Petit Datura
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/102") >Datura stramonium L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Petit lastron
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/128") >Emilia sonchifolia (L.) DC. ex DC.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/128") >Emilia sonchifolia (L.) DC. ex DC.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Petit meinki
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/113") >Digitaria radicosa (C.Presl) Miq.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Petit mimosa
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/103") >Desmanthus virgatus (L.) Willd. </a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Petit mota
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/180") >Kyllinga bulbosa P.Beauv.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Petit piquant
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/147") >Galinsoga parviflora Cav.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Petit plantain
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/261") >Plantago lanceolata L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Petit poinsettia
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/136") >Euphorbia cyathophora Murrill</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/137") >Euphorbia heterophylla L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Petit tamarin
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/255") >Phyllanthus tenellus Roxb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Petit tamarin blanc
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/253") >Phyllanthus amarus Schumach. &amp; Thonn.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/254") >Phyllanthus niruroides M</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Petit tamarin rouge
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/256") >Phyllanthus urinaria L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Petit trèfle
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/105") >Desmodium incanum DC.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/225") >Oxalis corniculata L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Petite cressonnette
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/49") >Cardamine hirsuta L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Petite herbe cochon
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/72") >Commelina diffusa Burm.f.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Petite herbe d'eau
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/72") >Commelina diffusa Burm.f.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Petite herbe de l'eau
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/72") >Commelina diffusa Burm.f.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Petite marguerite
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/320") >Synedrella nodiflora (L.) Gaertn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Petite oseille
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/225") >Oxalis corniculata L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Petite réglisse
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/110") >Digitaria horizontalis Willd.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Pilipili
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/114") >Drymaria cordata (L) Willd.ex Roem. &amp;Schult </a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Piquant
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/36") >Bidens pilosa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Piquant blanc
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/147") >Galinsoga parviflora Cav.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Piquant loulou
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/277") >Rubus alceifolius Poir. </a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Piquant lulu
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/277") >Rubus alceifolius Poir. </a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Piquant noir
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/36") >Bidens pilosa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Pisar lisyen
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/65") >Cleome viscosa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Pissat de chien
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/65") >Cleome viscosa L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/65") >Cleome viscosa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Pistache marrone
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/323") >Teramnus labialis (L.f.) Spreng.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Pistache marronne
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/47") >Cajanus scarabaeoides (L.) Thouars</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Plantain
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/261") >Plantago lanceolata L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Poc poc
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/244") >Passiflora foetida L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Poc poc fleur bleue
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/41") >Brachiaria eruciformis (Sm.) Griseb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Pocke pocke à fleurs bleues
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/41") >Brachiaria eruciformis (Sm.) Griseb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Pois de merveille
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Pois rond marron
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/86") >Crotalaria retusa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Pokepoke
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Pokpok
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/244") >Passiflora foetida L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Pororotsy
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/3") >Abelmoschus ficulneus (L.) Wight &amp; Arn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Pourpie
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/264") >Portulaca oleracea L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Pourpier
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/264") >Portulaca oleracea L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/264") >Portulaca oleracea L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Pourpier de Madagascar
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/260") >Pistia stratiotes L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Pourpier rouge
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/264") >Portulaca oleracea L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Puncture weed
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/330") >Tribulus cistoides L.</a></li>
                        </ul></li>
                        <li id="noms_q"> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Queue de rat
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/8") >Achyranthes aspera L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/315") >Stachytarpheta jamaicensis (L.) Vahl</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Quinquange
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Quinquenge
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li id="noms_r"> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Radredreka
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/186") >Lantana camara L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Radriaka
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/186") >Lantana camara L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Raisin d´Amérique
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/258") >Phytolacca americana L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Raisin marron
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/277") >Rubus alceifolius Poir. </a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Rambonalika
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/249") >Pennisetum polystachion (L.) Schult.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/315") >Stachytarpheta jamaicensis (L.) Vahl</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ramiary
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/102") >Datura stramonium L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ramirena
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/212") >Mimosa pudica L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ramity
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/186") >Lantana camara L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ravenelle
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/270") >Raphanus raphanistrum L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ravindramiary
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/102") >Datura stramonium L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Reed canary grass
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/252") >Phalaris arundinacea L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ref
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/122") >Eleocharis dulcis (Burm.f.) Trin. ex Hensch.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Rèfle
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/122") >Eleocharis dulcis (Burm.f.) Trin. ex Hensch.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Remanotaky
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/178") >Ischaemum rugosum Salisb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Rice grass
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/188") >Leersia hexandra Sw.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ricegrass
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/116") >Echinochloa colona (L.) Link</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Rimorimo
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/255") >Phyllanthus tenellus Roxb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Roberabera
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/138") >Euphorbia hirta L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Rohitra
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/212") >Mimosa pudica L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Roifotsy
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/279") >Rubus rosifolius Sm.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Roimena
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/212") >Mimosa pudica L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Rombabe
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/220") >Ocimum americanum L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Roneza
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/279") >Rubus rosifolius Sm.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Rougette
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/140") >Euphorbia prostrata Aiton</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Roy
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/279") >Rubus rosifolius Sm.</a></li>
                        </ul></li>
                        <li id="noms_s"> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Sanamaka
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/288") >Senna occidentalis (L.) Roxb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Sanatrindolo
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/288") >Senna occidentalis (L.) Roxb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Sandzani
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/220") >Ocimum americanum L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Sandze
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/110") >Digitaria horizontalis Willd.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/241") >Paspalum scrobiculatum L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Sandzemadji
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/276") >Rottboellia cochinchinensis (Lour.) W.Clayton</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Sansib
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/212") >Mimosa pudica L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Saranti
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/16") >Alternanthera philoxeroides (H.Martius) Griseb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Sariromba
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/220") >Ocimum americanum L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Sarisarimbomanga
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/169") >Ipomoea eriocarpa R.Br.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/171") >Ipomoea indica (Burm.) Merr.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/172") >Ipomoea nil (L.) Roth</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Saritaho
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/169") >Ipomoea eriocarpa R.Br.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/172") >Ipomoea nil (L.) Roth</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Saritongolo
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Sarivoanjo
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/287") >Senna obtusifolia (L.) H.S.Irwin &amp; Barneby</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Satrikoazamaratra
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/300") >Sigesbeckia orientalis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Semen contra
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Semencine
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Sensible
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/212") >Mimosa pudica L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Sensitive
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/212") >Mimosa pudica L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Sensive
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/212") >Mimosa pudica L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Sentrosima
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/56") >Centrosema pubescens Benth.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Sergent rouge
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/90") >Cyathula prostrata (L.) Blume </a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Sevabe
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/304") >Solanum mauritianum Scop.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Shack shack
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/86") >Crotalaria retusa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Shani
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/319") >Striga asiatica (L.) Kuntze</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Sheliladzia
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/138") >Euphorbia hirta L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Shidadi
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/319") >Striga asiatica (L.) Kuntze</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Shifungadziya
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/295") >Sida cordifolia L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Shifungandziya
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/294") >Sida acuta Burm.f.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Shikoni
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Shirovurovu
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/114") >Drymaria cordata (L) Willd.ex Roem. &amp;Schult </a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Shisinyantsi
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/140") >Euphorbia prostrata Aiton</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Shitsumadzila
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/226") >Oxalis debilis var. corymbosa (DC.) Lourteig</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/227") >Oxalis latifolia Kunth</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Sinapodiom
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Sindambo
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/325") >Themeda quadrivalvis (L.) Kuntze</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Siramboalavo
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/225") >Oxalis corniculata L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/227") >Oxalis latifolia Kunth</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Sofinakanga
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/71") >Commelina benghalensis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Sofindambo
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/106") >Desmodium intortum (Mill.) Urb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Soho
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/8") >Achyranthes aspera L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Soinette
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/192") >Lepidium didymum L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Solonalika
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/249") >Pennisetum polystachion (L.) Schult.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Songe
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/69") >Colocasia esculenta (L.) Schott</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Songe blanc
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/69") >Colocasia esculenta (L.) Schott</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Songe gris
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/69") >Colocasia esculenta (L.) Schott</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Songe Maurice
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/69") >Colocasia esculenta (L.) Schott</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Songe noir
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/69") >Colocasia esculenta (L.) Schott</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Songe violet
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/69") >Colocasia esculenta (L.) Schott</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Sonze de Chine
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/69") >Colocasia esculenta (L.) Schott</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Sonze du pays
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/69") >Colocasia esculenta (L.) Schott</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Sorgho
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/308") >Sorghum arundinaceum (Desv.) Stapf</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Sornette
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/36") >Bidens pilosa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Souchet comestible
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/96") >Cyperus esculentus L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Sour grass
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/238") >Paspalum conjugatum P.J.Bergius</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Souveraine
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/288") >Senna occidentalis (L.) Roxb.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/300") >Sigesbeckia orientalis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Spanish needle
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/36") >Bidens pilosa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Speading hogweed
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/37") >Boerhavia diffusa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Stellaire
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/317") >Stellaria media (L.)Vill.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Stramonium
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/102") >Datura stramonium L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Sweet basil
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/220") >Ocimum americanum L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Symena
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/325") >Themeda quadrivalvis (L.) Kuntze</a></li>
                        </ul></li>
                        <li id="noms_t"> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>T-grass
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/238") >Paspalum conjugatum P.J.Bergius</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tabac bœuf
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/66") >Clidemia hirta (L.) D.Don.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tabac marron
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/304") >Solanum mauritianum Scop.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/304") >Solanum mauritianum Scop.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Taimboriky
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/178") >Ischaemum rugosum Salisb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Taimborotsiloza
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tainakoho
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/287") >Senna obtusifolia (L.) H.S.Irwin &amp; Barneby</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Taindalitra
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/141") >Fimbristylis dichotoma (L.) Vahl</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/142") >Fimbristylis littoralis Gaudich.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/292") >Setaria pumila (Poir.) Roem. &amp; Schult.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Takohoka
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/277") >Rubus alceifolius Poir. </a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Talapetraka
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/55") >Centella asiatica (L.) Urb.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/161") >Hypochaeris radicata L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tamarin bourbon
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/287") >Senna obtusifolia (L.) H.S.Irwin &amp; Barneby</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tanandalitra
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/292") >Setaria pumila (Poir.) Roem. &amp; Schult.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tanatsangorita
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/100") >Dactyloctenium aegyptium (L.) P.Beauv.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Teloravy
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/323") >Teramnus labialis (L.f.) Spreng.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tenina
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tephrosia
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/322") >Tephrosia purpurea (L.) Pers.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Thé du Mexique
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Thorn apple
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/102") >Datura stramonium L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Thym marron
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/24") >Ambrosia tenuifolia Spreng.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ti fatak
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/314") >Sporobolus africanus (Poir.) Robyns &amp; Tournay</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ti Kasi
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/103") >Desmanthus virgatus (L.) Willd. </a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ti kreson
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/114") >Drymaria cordata (L) Willd.ex Roem. &amp;Schult </a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ti trèfle
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/225") >Oxalis corniculata L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ti-plantain
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/261") >Plantago lanceolata L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Ti-tamarin blanc
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/253") >Phyllanthus amarus Schumach. &amp; Thonn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Titoupi
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/173") >Ipomoea obscura (L.) Ker-Gawler</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Toc maria
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/220") >Ocimum americanum L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Trailing crabgrass
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/113") >Digitaria radicosa (C.Presl) Miq.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Traînasse
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/72") >Commelina diffusa Burm.f.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/140") >Euphorbia prostrata Aiton</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/291") >Setaria barbata (Lam.) Kunth</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/318") >Stenotaphrum dimidiatum (L.) Brongn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tramba mzungu
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/186") >Lantana camara L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tranomdahitra
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/100") >Dactyloctenium aegyptium (L.) P.Beauv.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tref
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/105") >Desmodium incanum DC.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/225") >Oxalis corniculata L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/323") >Teramnus labialis (L.f.) Spreng.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Trèfle
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/105") >Desmodium incanum DC.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/225") >Oxalis corniculata L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/226") >Oxalis debilis var. corymbosa (DC.) Lourteig</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/227") >Oxalis latifolia Kunth</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/323") >Teramnus labialis (L.f.) Spreng.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Trèfle rose
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/226") >Oxalis debilis var. corymbosa (DC.) Lourteig</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Trenas
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/140") >Euphorbia prostrata Aiton</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Trompe la mort
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/212") >Mimosa pudica L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tsanganday
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/276") >Rottboellia cochinchinensis (Lour.) W.Clayton</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tsiavotrondry
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/124") >Eleocharis minuta Boeckeler</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tsibora
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/100") >Dactyloctenium aegyptium (L.) P.Beauv.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tsihitafototra
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/88") >Cuscuta campestris Yunck.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tsikafona
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/260") >Pistia stratiotes L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tsikalabana
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/178") >Ischaemum rugosum Salisb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tsikerakerana
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tsikobokobondanitra
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/264") >Portulaca oleracea L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tsilavondrivotra
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/11") >Aeschynomene indica L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tsilo
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/277") >Rubus alceifolius Poir. </a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tsimbatrimbatry
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/47") >Cajanus scarabaeoides (L.) Thouars</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tsimparifary
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/232") >Panicum maximum Jacq.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tsindahoro
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/203") >Malvastrum coromandelianum (L.) Garcke</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/294") >Sida acuta Burm.f.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/295") >Sida cordifolia L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/298") >Sida rhombifolia subsp. alnifolia (L.) Ugbor.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tsingarivary
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/251") >Persicaria chinensis (L.) H.Gross</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tsingetse
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/97") >Cyperus iria L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tsingetsetse
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/95") >Cyperus difformis L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/96") >Cyperus esculentus L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/99") >Cyperus rotundus L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tsingetsietsy
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/126") >Eleusine indica (L.) Gaertn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tsingirifotse
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/188") >Leersia hexandra Sw.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tsiotsiona
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/89") >Cyanthillium cinereum (L.) H.Rob.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tsipihipihina
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/126") >Eleusine indica (L.) Gaertn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tsipipina
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/241") >Paspalum scrobiculatum L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tsipokipoky
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/41") >Brachiaria eruciformis (Sm.) Griseb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tsipolitra
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/36") >Bidens pilosa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tsipotika
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/90") >Cyathula prostrata (L.) Blume </a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tsipotiky
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/8") >Achyranthes aspera L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tsiripotaka
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tsiriry
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/188") >Leersia hexandra Sw.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tsivahadrenikely
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/147") >Galinsoga parviflora Cav.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Tsotsorinangatra
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/288") >Senna occidentalis (L.) Roxb.</a></li>
                        </ul></li>
                        <li id="noms_u"> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Udzia
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/225") >Oxalis corniculata L.</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/226") >Oxalis debilis var. corymbosa (DC.) Lourteig</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/227") >Oxalis latifolia Kunth</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Umbara
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/232") >Panicum maximum Jacq.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Usite
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/32") >Asystasia gangetica (L.) T.Anderson</a></li>
                        </ul></li>
                        <li id="noms_v"> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Valatendro
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/265") >Potamogeton nodosus Poir.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Vangairindrano
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/84") >Crotalaria ononoides Benth.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Varimbivy
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/116") >Echinochloa colona (L.) Link</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Vasey grass
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/242") >Paspalum urvillei Steud.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Vatofosandrano
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/32") >Asystasia gangetica (L.) T.Anderson</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Vendrakely
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/267") >Pycreus macrostachyos (Lam.) Raynal</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Vendranamalona
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/144") >Fuirena ciliaris (L.) Roxb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Verokely
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/325") >Themeda quadrivalvis (L.) Kuntze</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Verotsanga
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/232") >Panicum maximum Jacq.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Verovahiny
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/325") >Themeda quadrivalvis (L.) Kuntze</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Verveine
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/337") >Verbena bonariensis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Verveine bleue
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/315") >Stachytarpheta jamaicensis (L.) Vahl</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Verveine marron
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/154") >Heliotropium amplexicaule Vahl</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Verveine sauvage
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/154") >Heliotropium amplexicaule Vahl</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/337") >Verbena bonariensis L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Vetch
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/340") >Vicia sativa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Vieille fille
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/186") >Lantana camara L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Vigne de Judée
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/258") >Phytolacca americana L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Vigne marronne
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/277") >Rubus alceifolius Poir. </a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Vilaqua
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/55") >Centella asiatica (L.) Urb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Vilbag
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/320") >Synedrella nodiflora (L.) Gaertn.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Viliantsahona
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/160") >Hydrocotyle bonariensis Lam.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Villaqua
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/55") >Centella asiatica (L.) Urb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Villebague
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/36") >Bidens pilosa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Vilona
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/188") >Leersia hexandra Sw.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Vilonondry
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/124") >Eleocharis minuta Boeckeler</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Violette marron
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/55") >Centella asiatica (L.) Urb.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Voafo
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/173") >Ipomoea obscura (L.) Ker-Gawler</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Voampolera
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/213") >Mirabilis jalapa L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Voandramiary
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/102") >Datura stramonium L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Voaroisaka
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/279") >Rubus rosifolius Sm.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Voatondro
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/100") >Dactyloctenium aegyptium (L.) P.Beauv.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Volondrano
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Volonondry
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/44") >Brachiaria umbellata (Trin.) Clayton</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Volubilis
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/174") >Ipomoea purpurea (L.) Roth</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Vomanganalika
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/174") >Ipomoea purpurea (L.) Roth</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Vovokomby
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/268") >Pycreus mundtii Nees</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Vyey fiy
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/186") >Lantana camara L.</a></li>
                        </ul></li>
                        <li id="noms_w"> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Water lettuce
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/260") >Pistia stratiotes L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Watouck
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/66") >Clidemia hirta (L.) D.Don.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Wild millet
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/116") >Echinochloa colona (L.) Link</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Wild poinsettia
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/136") >Euphorbia cyathophora Murrill</a></li>
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/137") >Euphorbia heterophylla L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Wild sorghum
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/308") >Sorghum arundinaceum (Desv.) Stapf</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Wild sour
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/157") >Hibiscus surattensis L.</a></li>
                        </ul></li>
                        <li id="noms_y"> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Yellow grass
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/238") >Paspalum conjugatum P.J.Bergius</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Yisambaha
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/157") >Hibiscus surattensis L.</a></li>
                        </ul></li>
                        <li id="noms_z"> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Z'herbe bleue
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/315") >Stachytarpheta jamaicensis (L.) Vahl</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Zamal marron
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/74") >Conyza sumatrensis (Retz.) E.Walker</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Zan Rober
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/138") >Euphorbia hirta L.</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Zepi ble
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/315") >Stachytarpheta jamaicensis (L.) Vahl</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Zerbe rose
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/205") >Melinis repens (Willd.) Zizka</a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Zerisson blanc
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("") ></a></li>
                        </ul></li>
                        <li> <a class="anchor anchorname" href="javascript:void(0);"><i> <img src="img/tree.png" style="margin-top: -7px;"> </i>Zoumine
                        </a><ul class="closed">
                            <li><a class="anchor"  href="javascript:void(0);"  onclick=speciesPopup("http://portal.wikwio.org/species/show/99") >Cyperus rotundus L.</a></li>
                        </ul></li>
            </ul>
            
            <p class="back-top scrollnames" style="display: block;">
            <a href="#top"><span></span></a>
            </p>
        </div>
    </div>
    
    <script type="text/javascript">
       
    
        </script>
    
    <div id="reversecontra" class="newspecieslistwrapper" style="display:none">
        <input class="search searchcontra"  type="search" placeholder="<?= $menu_text['graphview'];?>" />
        <!--<button class="sort" data-sort="name">
         Sort by name
         </button>-->
        <div   style="padding-bottom: 75px;">
            
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("contra_a") href="#contra_a" >A</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("contra_b") href="#contra_b" >B</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("contra_c") href="#contra_c" >C</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("contra_d") href="#contra_d" >D</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("contra_e") href="#contra_e" >E</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("contra_f") href="#contra_f" >F</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("contra_g") href="#contra_g" >G</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("contra_h") href="#contra_h" >H</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("contra_i") href="#contra_i" >I</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("contra_j") href="#contra_j" >J</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("contra_k") href="#contra_k" >K</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("contra_l") href="#contra_l" >L</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("contra_m") href="#contra_m" >M</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("contra_n") href="#contra_n" >N</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("contra_o") href="#contra_o" >O</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("contra_p") href="#contra_p" >P</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("contra_q") href="#contra_q" >Q</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("contra_r") href="#contra_r" >R</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("contra_s") href="#contra_s" >S</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("contra_t") href="#contra_t" >T</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("contra_u") href="#contra_u" >U</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("contra_v") href="#contra_v" >V</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("contra_w") href="#contra_w" >W</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("contra_x") href="#contra_x" >X</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("contra_y") href="#contra_y" >Y</a></div>
            <div class="foo"  style="text-align: center;"><a onclick=scrolling("contra_z") href="#contra_z" >Z</a></div>
        </div>
       <form name="frmgeneral" method="post" action="contraspecies.php"> 
	   <input type="hidden" value="" name="code" />
        <div class = "specieslistwrapper reversecontra" style="padding-top: 15px;">
            <ul class="list"><li id="contra_a" ><a class="anchor" href="javascript:void(0);"  onclick=check("ABMFI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Abelmoschus ficulneus (L.) Wight  Arn.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ABUIN")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Abutilon indicum (L.) Sweet</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ACCIN")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Acalypha indica L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ACNAU")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Acanthospermum australe (Loefl.) Kuntze</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ACNHI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Acanthospermum hispidum DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ACYAS")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Achyranthes aspera L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("AERJA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Aerva javanica (Burm.f.) C.Jussieu ex Schult.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("AESAM")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Aeschynomene americana L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("AESIN")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Aeschynomene indica L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("EUPRI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ageratina riparia (Regel) R.M.King  H.Rob.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("AGECO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ageratum conyzoides L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("AGEHO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ageratum houstonianum Mill.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ALLNE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Allium neapolitanum Cirillo</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ALRPH")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Alternanthera philoxeroides (H.Martius) Griseb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ALRRE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Alternanthera pungens Kunth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ALRSE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Alternanthera sessilis (L.) R.Br. ex DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ALZOV")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Alysicarpus ovalifolius (Schumach.  Thonn.) J.L</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ALZRU")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Alysicarpus rugosus (Willd.) DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("AMALP")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Amaranthus blitum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("AMADU")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Amaranthus dubius H.Martius ex Thell.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("AMACH")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Amaranthus hybridus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("AMASP")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Amaranthus spinosus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("AMAVI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Amaranthus viridis L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("FRSCO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ambrosia tenuifolia Spreng.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ANGAR")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Anagallis arvensis L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("BOGCO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Anredera cordifolia (Ten.) Steenis</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("AOXOD")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Anthoxanthum odoratum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("AIGLE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Antigonon leptopus Hook.  Arn.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ARGME")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Argemone mexicana L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("AGJAR")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Argyreia argentea (Roxb.) Sweet</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ARTVE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Artemisia verlotiorum Lamotte</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ASYCO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Asystasia gangetica (L.) T.Anderson</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("AXOCO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Axonopus compressus (Sw.) P.Beauv.</a></li><li id="contra_b" ><a class="anchor" href="javascript:void(0);"  onclick=check("BARVE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Barbarea verna (Mill.) Asch.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("BADAL")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Basella alba L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("BIDPI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Bidens pilosa L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("BOEDI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Boerhavia diffusa L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("BOERP")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Boerhavia repens L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("BOOTE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Bothriospermum tenellum (Hornem.) Fisch.  C.A.Mey.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("BRADE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Brachiaria deflexa (Schumach.) C.E.Hubb. ex Robyns</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("BRAER")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Brachiaria eruciformis (Sm.) Griseb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("BRANA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Brachiaria nana Stapf</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PANRP")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Brachiaria reptans (L.) C.A.Gardner  C.E.Hubb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PANUM")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Brachiaria umbellata (Trin.) Clayton</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("BRSRR")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Brassica rapa L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("BROCA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Bromus catharticus Vahl</a></li><li id="contra_c" ><a class="anchor" href="javascript:void(0);"  onclick=check("ATYSC")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cajanus scarabaeoides (L.) Thouars</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CNNIN")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Canna indica L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CARHI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cardamine hirsuta L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CRIMI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cardiospermum microcarpum Kunth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CEOAR")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Celosia argentea L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CEOTR")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Celosia trigyna L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CCHBI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cenchrus biflorus Roxb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CCHEC")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cenchrus echinatus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CLLAS")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Centella asiatica (L.) Urb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("COSPU")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Centrosema pubescens Benth.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CERGL")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cerastium glomeratum Thuill.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CHEAL")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Chenopodium album L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CHRBA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Chloris barbata Sw.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CHRRA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Chloris pycnothrix Trin.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CHRVI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Chloris virgata Sw.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("EUPOD")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Chromolaena odorata (L.) R.M.King  H.Rob.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("GYAGY")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cleome gynandra L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CLEHI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cleome hirta (Klotzsch) Oliv.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CLEVI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cleome viscosa L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CXAHI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Clidemia hirta (L.) D.Don.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CXCHE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Clitoria heterophylla Lam.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("COCGR")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Coccinia grandis (L.) Voigt</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CXSES")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Colocasia esculenta (L.) Schott</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("COMAK")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Commelina africana var. krebsiana (Kunth) C.B.Clarke.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("COMBE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Commelina benghalensis L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("COMDI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Commelina diffusa Burm.f.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("COMDS")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Commelina diffusa subsp. scandens (Welw. ex C.B.Clarke) Oberm.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ERIFL")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Conyza sumatrensis (Retz.) E.Walker</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CRGAE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Corchorus aestuans L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CRGOL")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Corchorus olitorius L. </a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CRGTR")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Corchorus trilocularis L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CMSCA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cosmos caudatus Kunth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CUOCY")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Courtoisina cyperoides (Roxb.) Soj</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CRSCR")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Crassocephalum crepidioides (Benth.) S.Moore</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("TTRCR")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Crocosmia </a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CVTGO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Crotalaria goreensis Guill.  Perr.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CVTGR")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Crotalaria grahamiana Wight  Arn.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CVTIN")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Crotalaria incana L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CVTON")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Crotalaria ononoides Benth.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CVTMU")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Crotalaria pallida Aiton</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CVTRE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Crotalaria retusa L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CVNBO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Croton bonplandianus Baill.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CVCCA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cuscuta campestris Yunck.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("VENCI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cyanthillium cinereum (L.) H.Rob.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CYHPR")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cyathula prostrata (L.) Blume </a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("APULE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cyclospermum leptophyllum (Pers.) Eichler</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CYKCL")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cynanchum callialatum Buch.-Ham. ex Wight</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CYNDA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cynodon dactylon (L.) Pers.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CYPBF")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cyperus balfourii C.B.Clarke </a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CYPDI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cyperus difformis L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CYPES")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cyperus esculentus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CYPIR")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cyperus iria L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CYPPF")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cyperus prolifer Lam.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CYPRO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Cyperus rotundus L.</a></li><li id="contra_d" ><a class="anchor" href="javascript:void(0);"  onclick=check("DTTAE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Dactyloctenium aegyptium (L.) P.Beauv.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("DATIN")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Datura innoxia Mill.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("DATST")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Datura stramonium L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("DEMVI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Desmanthus virgatus (L.) Willd. </a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("DEDAD")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Desmodium adscendens (Sw.) DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("DEDCA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Desmodium incanum DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("DEDIN")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Desmodium intortum (Mill.) Urb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("DEDTO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Desmodium tortuosum (Sw.) DC. </a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("DEDUN")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Desmodium uncinatum (Jacq.) DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("DIGAD")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Digitaria ciliaris (Retz.) Koeler</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("DIGHO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Digitaria horizontalis Willd.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("DIGHU")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Digitaria humbertii A.Camus</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("DIGLO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Digitaria longiflora (Retz.) Pers.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("DIGTI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Digitaria radicosa (C.Presl) Miq.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("DRYCO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Drymaria cordata (L) Willd.ex Roem. Schult </a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CHEAM")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Dysphania ambrosioides (L.) Mosyakin  Clemants</a></li><li id="contra_e" ><a class="anchor" href="javascript:void(0);"  onclick=check("ECHCO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Echinochloa colona (L.) Link</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ECHCG")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Echinochloa crus-galli (L.) P.Beauv.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ECHPY")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Echinochloa pyramidalis (Lam.) Hitchc.  Chase</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ECHST")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Echinochloa stagnina (Retz.) P.Beauv.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ECLAL")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Eclipta prostrata (L.) L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("EICCR")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Eichhornia crassipes (Mart.) Solms</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ELODU")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Eleocharis dulcis (Burm.f.) Trin. ex Hensch.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ELOLI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Eleocharis limosa (Schrad.) Schult.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ELOMI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Eleocharis minuta Boeckeler</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ELPMO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Elephantopus mollis Kunth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ELEIN")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Eleusine indica (L.) Gaertn.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("EMICI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Emilia citrina DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("EMISO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Emilia sonchifolia (L.) DC. ex DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ERAAM")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Eragrostis amabilis (L.) Wight  Arn.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ERAAS")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Eragrostis aspera (Jacq.) Nees</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ERAME")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Eragrostis cilianensis (Allioni) F.T.Hubb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ERACY")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Eragrostis cylindriflora Hochst.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ERATE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Eragrostis patula (Kunth) Steud.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ERICA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Erigeron canadensis L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ERIKA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Erigeron karvinskianus DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("EPHCT")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Euphorbia cyathophora Murrill</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("EPHHL")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Euphorbia heterophylla L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("EPHHI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Euphorbia hirta L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("EPHPE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Euphorbia peplus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("EPHPT")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Euphorbia prostrata Aiton</a></li><li id="contra_f" ><a class="anchor" href="javascript:void(0);"  onclick=check("FIMDI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Fimbristylis dichotoma (L.) Vahl</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("FIMLI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Fimbristylis littoralis Gaudich.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("FIMQU")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Fimbristylis quinquangularis (Vahl) Kunth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("FUICI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Fuirena ciliaris (L.) Roxb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("FUIUM")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Fuirena umbellata Rottb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("FUMMU")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Fumaria muralis Sond. ex Koch</a></li><li id="contra_g" ><a class="anchor" href="javascript:void(0);"  onclick=check("GASPA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Galinsoga parviflora Cav.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("GALAP")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Galium aparine L.C.Rich.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("GLOSI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Gloriosa superba L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("GNAPU")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Gnaphalium purpureum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("GOMCE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Gomphrena celosioides Mart.</a></li><li id="contra_h" ><a class="anchor" href="javascript:void(0);"  onclick=check("HBARO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Habranthus robustus Herb. ex Sweet</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("HEYGA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Hedychium gardnerianum Sheppard ex Ker Gawl.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("HEOAM")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Heliotropium amplexicaule Vahl</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("HEOIN")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Heliotropium indicum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("HIBAS")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Hibiscus asper Hook.f.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("HIBSU")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Hibiscus surattensis L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("HPSRG")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Hippeastrum reginae (L.) Herb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("HOLLA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Holcus lanatus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("HYDBO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Hydrocotyle bonariensis Lam.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("HRYRA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Hypochaeris radicata L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("HPYPE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Hyptis pectinata (L.) Poit.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("HPYSP")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Hyptis spicigera Lam.</a></li><li id="contra_i" ><a class="anchor" href="javascript:void(0);"  onclick=check("IMPCY")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Imperata cylindrica (L.) P.Beauv.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("INDHI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Indigofera hirsuta L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CLYAC")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ipomoea alba L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("IPOAQ")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ipomoea aquatica Forssk.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("IPOCP")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ipomoea coptica (L.) Roth ex Roem.  Schult.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("IPOER")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ipomoea eriocarpa R.Br.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("IPOHF")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ipomoea hederifolia L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("IPOAC")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ipomoea indica (Burm.) Merr.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("IPONI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ipomoea nil (L.) Roth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("IPOOB")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ipomoea obscura (L.) Ker-Gawler</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PHBPU")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ipomoea purpurea (L.) Roth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("IPOQU")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ipomoea quamoclit L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("IPOTR")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ipomoea triloba L. </a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ISCAR")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ischaemum aristatum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ISCRU")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ischaemum rugosum Salisb.</a></li><li id="contra_j" ><a class="anchor" href="javascript:void(0);"  onclick=check("IAQTA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Jacquemontia tamnifolia (L.) Griseb.</a></li><li id="contra_k" ><a class="anchor" href="javascript:void(0);"  onclick=check("KYLBU")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Kyllinga bulbosa P.Beauv.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("KYLEL")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Kyllinga erecta Schumach.</a></li><li id="contra_l" ><a class="anchor" href="javascript:void(0);"  onclick=check("DOLLA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Lablab purpureus (L.) Sweet</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("LACIN")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Lactuca indica L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("LGGAL")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Laggera alata (D.Don) Sch.Bip. ex Oliv.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("LAMAM")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Lamium amplexicaule L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("LANCA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Lantana camara L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("LAPCO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Lapsana communis L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("LERHE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Leersia hexandra Sw.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("LEONE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Leonotis nepetifolia (L.) W.T.Aiton</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("LECSI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Leonurus sibiricus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("LEPAF")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Lepidium africanum (Burm.f.) DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("COPDI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Lepidium didymum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("LUAGL")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Leucaena leucocephala (Lam.) de Wit</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("LEVLA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Leucas lavandulifolia Sm.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("LEVMA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Leucas martinicensis (Jacq.) R.Br.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("LISGU")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Litsea glutinosa (Lour.) C.Rob.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("LISMO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Litsea monopetala (Roxb.) Pers.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("LOBCL")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Lobelia cliffortiana L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("LUDAC")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ludwigia adscendens (L.) H.Hara</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("LUDER")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ludwigia erecta (L.) Hara</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("LUDOC")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ludwigia octovalvis (Jacq.) Raven</a></li><li id="contra_m" ><a class="anchor" href="javascript:void(0);"  onclick=check("PHSLY")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Macroptilium lathyroides (L.) Urb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("MAVCO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Malvastrum coromandelianum (L.) Garcke</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("MASMI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Marsilea minuta L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("RHYRE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Melinis repens (Willd.) Zizka</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("MEOCO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Melochia corchorifolia L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("MEOPY")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Melochia pyramidata L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("IPOPE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Merremia aegyptia (L.) Urb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("MRRDI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Merremia dissecta (Jacq.) Hallier f.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("MIKMI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Mikania micrantha Kunth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("MIMIN")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Mimosa diplotricha Sauvalle</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("MIMPU")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Mimosa pudica L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("MIBJA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Mirabilis jalapa L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("MTCVI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Mitracarpus hirtus (L.) DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("MOLNU")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Mollugo nudicaulis Lam.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("MOMCH")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Momordica charantia L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("MUCPR")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Mucuna pruriens (L.) DC.</a></li><li id="contra_n" ><a class="anchor" href="javascript:void(0);"  onclick=check("NICPH")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Nicandra physalodes (L.) Gaertn.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("NYMST")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Nymphaea nouchali Burm.f.</a></li><li id="contra_o" ><a class="anchor" href="javascript:void(0);"  onclick=check("OCICA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Ocimum americanum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("OEOER")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Oenothera glazioviana Micheli</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("OEOST")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Oenothera stricta Ledeb. ex Link</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("OLDCO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Oldenlandia corymbosa L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("OPLBU")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Oplismenus burmanni (Retz.) P.Beauv.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("OXACO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Oxalis corniculata L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("OXACB")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Oxalis debilis var. corymbosa (DC.) Lourteig</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("OXALA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Oxalis latifolia Kunth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("OXATE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Oxalis tetraphylla Cav.</a></li><li id="contra_p" ><a class="anchor" href="javascript:void(0);"  onclick=check("PAEFO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Paederia foetida L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PANBR")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Panicum brevifolium L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PANWA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Panicum humile Nees ex Steud.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PANMA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Panicum maximum Jacq.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PANPW")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Panicum pseudowoeltzkowii A.Camus</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PANRE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Panicum repens L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PANSB")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Panicum subalbidum Kunth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PTNHY")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Parthenium hysterophorus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PANGE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Paspalidium geminatum (Forssk.) Stapf</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PASCO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Paspalum conjugatum P.J.Bergius</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PASDI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Paspalum dilatatum Poir.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PASPA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Paspalum paniculatum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PASSC")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Paspalum scrobiculatum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PASUR")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Paspalum urvillei Steud.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PASVA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Paspalum vaginatum Sw.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PAQFO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Passiflora foetida L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PAQSU")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Passiflora suberosa L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PAQSP")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Passiflora subpeltata Ortega</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PESCA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Pennisetum caffrum (Bory) Leeke.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PESCL")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Pennisetum clandestinum Hochst.ex Chiov.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PESPO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Pennisetum polystachion (L.) Schult.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PRRPA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Perotis patens Gand.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("POLCH")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Persicaria chinensis (L.) H.Gross</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("TYPAR")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Phalaris arundinacea L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PYLAM")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Phyllanthus amarus Schumach.  Thonn.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PYLNO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Phyllanthus niruroides M</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PYLTE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Phyllanthus tenellus Roxb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PYLUR")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Phyllanthus urinaria L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PHYAN")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Physalis angulata L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PHTAM")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Phytolacca americana L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PILMI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Pilea microphylla (L.) Liebm.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PIIST")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Pistia stratiotes L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PLALA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Plantago lanceolata L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("POAAN")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Poa annua L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PCYCO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Polycarpaea corymbosa (L.) Lam.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("POROL")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Portulaca oleracea L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PTMNO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Potamogeton nodosus Poir.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PTEAQ")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Pteridium aquilinum (L.) Kuhn</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PYCTR")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Pycreus macrostachyos (Lam.) Raynal</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PYCMU")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Pycreus mundtii Nees</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("PYCPO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Pycreus polystachyos (Rottb.) P.Beauv.</a></li><li id="contra_r" ><a class="anchor" href="javascript:void(0);"  onclick=check("RAPRA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Raphanus raphanistrum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("RPCLO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Rhamphicarpa fistulosa (Hochst.) Benth.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("RHNSE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Rhynchosia malacophylla (Spreng.) Bojer</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("RHNMI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Rhynchosia minima (L.) DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("RHNVI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Rhynchosia viscosa (Roth) DC.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("RCHSC")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Richardia scabra L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("ROOEX")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Rottboellia cochinchinensis (Lour.) W.Clayton</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("RUBAC")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Rubus alceifolius Poir. </a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("RUBFX")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Rubus fraxinifolius Poir.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("RUBRO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Rubus rosifolius Sm.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("RUMAB")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Rumex abyssinicus Jacq.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("RUMCR")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Rumex crispus L.</a></li><li id="contra_s" ><a class="anchor" href="javascript:void(0);"  onclick=check("SAEAF")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sacciolepis africana C.E.Hubb.  Snowden</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("SAGGU")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sagittaria guayanensis Kunth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("SAVMO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Salvinia adnata Desv.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("SCPJU")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Schoenoplectiella  juncoides (Roxb.) Lye</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("SHKPE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Schoenoplectiella perrieri (Cherm.) Lye</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CASOB")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Senna obtusifolia (L.) H.S.Irwin  Barneby</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CASOC")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Senna occidentalis (L.) Roxb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("CASTO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Senna tora (L.) Roxb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("SEBSE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sesbania sesban (L.) Merrill</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("SETBA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Setaria barbata (Lam.) Kunth</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("SETPF")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Setaria pumila (Poir.) Roem.  Schult.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("SETVE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Setaria verticillata (L.) P.Beauv.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("SIDAC")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sida acuta Burm.f.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("SIDCO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sida cordifolia L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("SIDGT")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sida glabra Mill.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("SIDRH")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sida rhombifolia L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("SIDAL")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sida rhombifolia subsp. alnifolia (L.) Ugbor.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("SIDUR")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sida urens L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("SIKOR")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sigesbeckia orientalis L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("SISMI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sisyrinchium micranthum Cav.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("SOLAM")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Solanum americanum Mill.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("SOLAG")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Solanum indicum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("SOLMR")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Solanum mauritianum Scop.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("SOLTO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Solanum torvum Sw.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("SONAS")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sonchus asper (L.) Hill.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("SONOL")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sonchus oleraceus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("SORVE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sorghum arundinaceum (Desv.) Stapf</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("SPRAR")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Spergula arvensis L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("BOILF")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Spermacoce alata Aubl.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("BOIVE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Spermacoce verticillata L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("WEDTR")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sphagneticola trilobata (L.) Pruski</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("SPDZE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sphenoclea zeylanica Gaertn.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("SPZAF")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Sporobolus africanus (Poir.) Robyns  Tournay</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("STCJA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Stachytarpheta jamaicensis (L.) Vahl</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("STCUR")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Stachytarpheta urticifolia (Salisb.) Sims</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("STEME")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Stellaria media (L.)Vill.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("STPSE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Stenotaphrum dimidiatum (L.) Brongn.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("STRLU")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Striga asiatica (L.) Kuntze</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("SYDNO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Synedrella nodiflora (L.) Gaertn.</a></li><li id="contra_t" ><a class="anchor" href="javascript:void(0);"  onclick=check("TEPLI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Tephrosia linearis (Willd.) Pers.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("TEPPU")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Tephrosia purpurea (L.) Pers.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("TERLA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Teramnus labialis (L.f.) Spreng.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("TEATE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Tetragonia tetragonioides (Pall.) Kuntze</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("THMQU")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Themeda quadrivalvis (L.) Kuntze</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("THNAL")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Thunbergia alata Bojer ex Sims</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("THNGR")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Thunbergia grandiflora (Roxb. ex Rottl.) Roxb.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("THNLE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Thunbergia laevis Nees</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("TRTPO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Trianthema portulacastrum L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("TRBCI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Tribulus cistoides L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("TRBTE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Tribulus terrestris L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("TRHZE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Trichodesma zeylanicum (Burm.f.) R.Br.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("TRQPR")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Tridax procumbens L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("TOPMA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Tropaeolum majus L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("TURUL")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Turnera ulmifolia L.</a></li><li id="contra_u" ><a class="anchor" href="javascript:void(0);"  onclick=check("URNLO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Urena lobata L.</a></li><li id="contra_v" ><a class="anchor" href="javascript:void(0);"  onclick=check("VEBBO")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Verbena bonariensis L.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("VEBBS")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Verbena brasiliensis Vell.</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("VICHI")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Vicia hirsuta (L.) Gray</a></li><li><a class="anchor" href="javascript:void(0);"  onclick=check("VICSA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Vicia sativa L.</a></li><li id="contra_w" ><a class="anchor" href="javascript:void(0);"  onclick=check("WALAM")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Waltheria indica L.</a></li><li id="contra_y" ><a class="anchor" href="javascript:void(0);"  onclick=check("UOUJA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Youngia japonica (L.) DC.</a></li><li id="contra_z" ><a class="anchor" href="javascript:void(0);"  onclick=check("TRTPE")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Zaleya pentandra (L.) Jeffrey</a></li><li class="last"><a class="anchor" href="javascript:void(0);"  onclick=check("ZORLA")> <img src="img/tree.png" style="margin-top: -7px;margin-bottom: -10px;"/> Zornia latifolia Sm.</a></li></ul>
            <p class="back-top scrollcontra" style="display: block;">
            <a href="#top"><span></span></a>
            </p>
        </div>
		
		</form>
    </div>
    <script type="text/javascript">
       
    </script>

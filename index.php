<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id="stage">
            <hr/>
            <div id="controls">
                <div id="left">
                    <span>Go Back</span>
                    <button id="lb"></button>
                </div>
                <div id="center">
                    <div id="up">
                        <button></button>
                        <span>Like</span>
                    </div>
                    <div id="down">
                        <button></button>
                        <span>Down</span>
                    </div>
                </div>
                <div id="right">
                    <span>Skip</span>
                    <button id="rb"></button>
                </div>
            </div>

            <div id="carousel">
                <?php 
                $arr = array("tt1075787","tt1087431","tt1151419","tt1199558","tt1205476","tt1281834","tt1316037","tt1333025","tt1345449","tt1434941","tt1477180","tt1792794","tt1825772","tt2070831","tt2252252","tt2300783","tt2385001","tt0048256","tt0054385","tt0058392","tt0059786","tt0060666","tt0062493","tt0068438","tt0071231","tt0074365","tt0082410","tt0085266","tt0089911","tt0096870","tt0098048","tt0102804","tt0113221","tt0116771","tt0173682","tt0177329","tt0179458","tt0261199","tt0270846","tt0290884","tt0298250","tt0339714","tt0366242","tt0367677","tt0401462","tt0423515","tt0429561","tt0431418","tt0461471","tt0804492","tt0902287","tt1084947","tt1213644","tt1324891","tt1337346","tt1378811","tt1389116","tt1543739","tt1753422","tt1758570","tt1887676","tt2009508","tt2099673","tt2196430","tt2423134","tt2903902","tt3184096","tt3677466","tt0059161","tt0061765","tt0065480","tt0068640","tt0082273","tt0087258","tt0092285","tt0093158","tt0094294","tt0095745","tt0096149","tt0132933","tt0135362","tt0196378","tt0231138","tt0238205","tt0301254","tt0311422","tt0317676","tt0338726","tt0339983","tt0362544","tt0364726","tt0366436","tt0372832","tt0387460","tt0388287","tt0406514","tt0417056","tt0424092","tt0428081","tt0448001","tt0448017","tt0449444","tt0468538","tt0473024","tt0482263","tt0783240","tt0785077","tt0810743","tt0844029","tt0846092","tt0934584","tt0962728","tt0974005","tt1057576","tt1067111","tt1151402","tt1151919","tt1172070","tt1213850","tt1248957","tt1260377","tt1298605","tt1332570","tt1345503","tt1349646","tt1350512","tt1357352","tt1378274","tt1427198","tt1452294","tt1483763","tt1595357","tt1674047","tt1841835","tt1841840","tt1910498","tt2113833","tt2171416","tt2207006","tt2258647","tt2422212","tt2441232","tt3171246","tt3382842","tt0047211","tt0052394","tt0053640","tt0061191","tt0065470","tt0065727","tt0068291","tt0068425","tt0075343","tt0080741","tt0088134","tt0093872","tt0100632","tt0103278","tt0107683","tt0118589","tt0128224","tt0131993","tt0132000","tt0133246","tt0138050","tt0162930","tt0174503","tt0188697","tt0192339","tt0192962","tt0196964","tt0241183","tt0249516","tt0256083","tt0292346","tt0315775","tt0339034","tt0339091","tt0349063","tt0362165","tt0367817","tt0371846","tt0372381","tt0377720","tt0433349","tt0439834","tt0449519","tt0451109","tt0458509","tt0460628","tt0473287","tt0482456","tt0818649","tt0831872","tt0914796","tt1128214","tt1134812","tt1135781","tt1172069","tt1183733","tt1206286","tt1219136","tt1229827","tt1233217","tt1374843","tt1376460","tt1421049","tt1478478","tt1535999","tt1568927","tt1579956","tt1663954","tt1696198","tt1704201","tt1786714","tt1823051","tt2189332","tt2275615","tt2349142","tt2413516","tt2459028","tt2552498","tt2675318","tt3922754","tt0037798","tt0055946","tt0057181","tt0061203","tt0068313","tt0071198","tt0074148","tt0078159","tt0085363","tt0088380","tt0088705","tt0088772","tt0090928","tt0092297","tt0093663","tt0099656","tt0100665","tt0102569","tt0102765","tt0111168","tt0115506","tt0117330","tt0117734","tt0119456","tt0140471","tt0142080","tt0174685","tt0183761","tt0219096","tt0222233","tt0235280","tt0241218","tt0250949","tt0254197","tt0256007","tt0260162","tt0274472","tt0276011","tt0289911","tt0310805","tt0310837","tt0360784","tt0365789","tt0379363","tt0379754","tt0424856","tt0430175","tt0456014","tt0463392","tt0466977","tt0780591","tt0800011","tt0811011","tt0847215","tt0861701","tt0889181","tt0988121","tt0999866","tt1018790","tt1024232","tt1050166","tt1127181","tt1148277","tt1176436","tt1233328","tt1256619","tt1355260","tt1368153","tt1479847","tt1492728","tt1498568","tt1560479","tt1581839","tt1698651","tt1725133","tt1791612","tt1843834","tt1874649","tt1916763","tt1975205","tt2024351","tt2081438","tt2136682","tt2149137","tt2175184","tt2189858","tt2275499","tt2316433","tt2361237","tt2381317","tt2392846","tt2403813","tt2459038","tt2518848","tt2622826","tt2916324","tt3007924","tt0053213","tt0055452","tt0062036","tt0071855","tt0073365","tt0077877","tt0080346","tt0083849","tt0089280","tt0092296","tt0093405","tt0097174","tt0098156","tt0099278","tt0100291","tt0101255","tt0101652","tt0110141","tt0116839","tt0117676","tt0118181","tt0118836","tt0125153","tt0130762","tt0135465","tt0137452","tt0153561","tt0156372","tt0165870","tt0174917","tt0183696","tt0183817","tt0185266","tt0203285","tt0203835","tt0209238","tt0212277","tt0216225","tt0240585","tt0281811","tt0292429","tt0299930","tt0301380","tt0301661","tt0306774","tt0318497","tt0329200","tt0340103","tt0349193","tt0353984","tt0364986","tt0369226","tt0382443","tt0386846","tt0388113","tt0388349","tt0390463","tt0395669","tt0397909","tt0435779","tt0439504","tt0443629","tt0445969","tt0447448","tt0452617","tt0465409","tt0478188","tt0478856","tt0480075","tt0483779","tt0758755","tt0790746","tt0799949","tt0802956","tt0810817","tt0821436","tt0972880","tt1043694","tt1127884","tt1235074","tt1249412","tt1346307","tt1349651","tt1355208","tt1356543","tt1370894","tt1386583","tt1485096","tt1499302","tt1509109","tt1589989","tt1595842","tt1686902","tt1693110","tt1720189","tt1754077","tt1757699","tt1757831","tt1787636","tt1814631","tt1846444","tt1882053","tt1961604","tt2046130","tt2080356","tt2265116","tt2290749","tt2303110","tt2385169","tt2402535","tt2439946","tt2554714","tt2599226","tt2748088","tt2837602","tt3384904","tt0039987","tt0046066","tt0052188","tt0052849","tt0052891","tt0057111","tt0059464","tt0060270","tt0061592","tt0070380","tt0072173","tt0073396","tt0077834","tt0091561","tt0091631","tt0093214","tt0105827","tt0109364","tt0109376","tt0109895","tt0110040","tt0112320","tt0114658","tt0119203","tt0124307","tt0125430","tt0141996","tt0168172","tt0176579","tt0185183","tt0192669","tt0196114","tt0198341","tt0202458","tt0218641","tt0244491","tt0250469","tt0251005","tt0270393","tt0292634","tt0295884","tt0315440","tt0322852","tt0323246","tt0339918","tt0346609","tt0352699","tt0358480","tt0359398","tt0365422","tt0365852","tt0367122","tt0372311","tt0376538","tt0382011","tt0397679","tt0404823","tt0408830","tt0411077","tt0415345","tt0417424","tt0451214","tt0452766","tt0453540","tt0479042","tt0498369","tt0791142","tt0825680","tt0829188","tt0850654","tt0852996","tt0872264","tt1038902","tt1107397","tt1131742","tt1136683","tt1210845","tt1278167","tt1280491","tt1281966","tt1333980","tt1335986","tt1339191","tt1341724","tt1373405","tt1462044","tt1477704","tt1535098","tt1557593","tt1569933","tt1595637","tt1618372","tt1623772","tt1640220","tt1670994","tt1694508","tt1754334","tt1788453","tt1800256","tt1823267","tt1825735","tt1874779");
                for($i = 0; $i < count($arr); $i++) { ?><!--
                --><div class="item" id="<?= $i ?>"><? if($i!=0) { ?>
                    <div class="dark"></div> <? } ?>
                    <div class="mark default d"></div>
                    <img src="http://img.omdbapi.com/?i=<?= $arr[$i]; ?>&apikey=e737639a&h=1000" alt="<?=$arr[$i]?>">
                </div><!--
                --><? } ?>
            </div>

            <div id="done">
                Press <button id="scrollToDash">Enter</button> To See Your Matches
            </div>

        </div>

        <div id="dashboard">
            <hr/>
            <header id="banner">
                <button id="scrollToStage">Rate more movies</button>
                <div id="r">
                    <button id="search"></button>
                    <button id="user"></button>
                </div>
            </header>
            <aside>
                <header id="t">People who share your taste in movies</header>
                <section class="sidebar" id="critics">
                    <header>Critics</header>
                    <div>
                        <img src="#" class="circle">
                        <hgroup>
                            <h2>Roger</h2>
                            <h2>Ebert</h2>
                        </hgroup>
                    </div>
                </section>
                <section class="sidebar" id="community">
                    <header>In The Community</header>
                    <div>
                        <img src="#" class="circle">
                        <hgroup>
                            <h2>Roger</h2>
                            <h2>Ebert</h2>
                        </hgroup>
                    </div>
                    <div id="selected">
                        <img src="#" class="circle">
                        <hgroup>
                            <h2>Roger</h2>
                            <h2>Ebert</h2>
                        </hgroup>
                    </div>
                    <div>
                        <img src="#" class="circle">
                        <hgroup>
                            <h2>Roger</h2>
                            <h2>Ebert</h2>
                        </hgroup>
                    </div>                
                </section>
            </aside>
            <section id="main">
                <header></header>
                <section id="movies">
                </section>
            </section>
        </div>


        <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/vendor/hotkeys.js"></script>
        <script src="js/jquery-scrollto.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>

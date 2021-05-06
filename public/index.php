<?php

$title = 'DyscloCity'

?><html>
<meta charset="UTF-8">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/al.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="script.js"></script>
<script src="https://kit.fontawesome.com/0dfdec2c7e.js"></script>

<title><?= $title ?? "DyscloCity | Hors ligne" ?></title>
<div class="logo"><?= $title ?? "DyscloCity | Hors ligne" ?></div>
<img class="backguy" src="../img/pic1.png">

<ul class="menu">
    <li class="menuitem" onclick="openLink('start')" style="border-color: #3ca918">Accueil</li>
    <li class="menuitem" onclick="openLink('about')">Nous rejoindre</li>
    <li class="menuitem" onclick="openLink('rules')">Réglement</li>
    <li class="menuitem" onclick="openLink('whitelist')">Affiliation</li>
</ul>

<div class="maintext">
    <div class="title">GTA 5 <br>
        <w style="color: #3ca918">Roleplay</w>
    </div>
    <div class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</div>
    <div class="button1"><a href="https://discord.gg/qEv5tk3ktx" target="_blank">Notre discord</a></div>
</div>

<div class="bar">
    <div class="sec1">
        <div class="sec1time">3:13</div>
        <div class="sec1title">DyscloCity</div>
        <div class="sec1subtitle">Pour plus d'information veuillez rejoindre le discord !</div>
    </div>

    <div class="sec2">
        <div class="sectitle">IP Fivem</div>
        <div class="secsubtitle">Serveur en ligne</div>
        <div class="secslots">?/1000</div>
        <div class="secip" id="first" onclick="openLink('first')">Unknown</div><i onclick="copyText('first')" class="grey1 far fa-copy"></i>
        <div class="secbarfull">
            <div class="secinbar"></div>
        </div>

        <div class="secbadge"><a href="" target="_blank">Vote serveur</a></div>
    </div>

    <div class="sec3">
        <div class="sectitle">Discord</div>
        <div class="secsubtitle blue"></div>
        <div class="secslots">∞</div>
        <div class="secip blue" id="second" onclick="openLink('second')">discord</div><br><i onclick="copyText('second')" class="grey2 far fa-copy"></i>
        <div class="secbarfull">
            <div class="secinbar bluebg"></div>
        </div>

        <div class="secbadge bluebg"><a href="https://discord.gg/qEv5tk3ktx" target="_blank">Lien D</a></div>
    </div>

    <div class="sec4">
        <div class="sectitle">Twitter</div>
        <div class="secsubtitle pink"></div>
        <div class="secslots">∞</div>
        <div class="secip pink" id="third" onclick="openLink('third')">Twitter</div><i onclick="copyText('third')" class="grey3 far fa-copy"></i>
        <div class="secbarfull">
            <div class="secinbar pinkbg"></div>
        </div>

        <div class="secbadge pinkbg"><a href="" target="_blank">Lien T</a></div>
    </div>
</div>

</html>
<!--Copyright (c) 2021 Ismael Shepherd-->
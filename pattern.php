<?php

class Pattern{

    public function getserverversion(){
        //00000000000000000000000000000000|getserverversion:||||||||||||||
    }

    public function AccountCheck($data){
        return "00000000000000000000000000000000|accountcheck:".$data['nick']."|||||1";
    }

    public function AccountLogin($data){
        //1
        return "00000000000000000000000000000000|AccountLogin:".$data['login']."/".sha1($data['pass'] . $data['logincount'])."/".$data['logincount']."/unity3d_webglplayer//140000000000/|||||||||||||";
        //00000000000000000000000000000000|AccountLogin:SidakE3/bd49bf2fc33eeadbdb709d898983d52018ee7624/8/unity3d_webglplayer//140000000000/|||||||||||||
        //fortresschest.item(0):&messagelist.r:;&combatloglist.s:13136405,Mangus,0,0,1665178476,0;13136207,Mangus,0,0,1665173724,0;13122091,JasemKox,0,0,1664993546,0;13032724,JasemKox,0,0,1664030783,0;12828954,mintek02,0,0,1661745818,0;;&friendlist.r:;&login count:14&&sessionid:1AhVujYvVdzwCbwXeHthgCQYym7gIsjN&languagecodelist.r:ru,20;fi,8;ar,1;tr,23;nl,16;  ,0;ja,14;it,13;sk,21;fr,9;ko,15;pl,17;cs,2;el,5;da,3;en,6;hr,10;de,4;zh,24;sv,22;hu,11;pt,12;es,7;pt-br,18;ro,19;&maxpetlevel:100&calenderinfo:12/1/8/1/3/1/25/1/5/1/2/1/3/2/1/1/24/1/18/5/6/1/22/1/7/1/6/2/8/2/22/2/5/2/2/2/3/3/21/1&idle.idlesave:0/173298/0/1/0/0/0/0/0/0/0/0/0/1/0/0/0/0/0/0/0/0/0/1666160359/0/0/0/0/0/0/0/0/0/1666160431/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/1666192823/1666128023/11/1/23/25/25/25/0/1320979/0/1320979/0/0/0/6/100/2500/50000/1000000/25000000/500000000/10000000000/250000000000/5000000000000/105/1171/28676/573212/11463891/286596995/5731939668/114638793119/2865969827872/57319396557357/450/3835/91295/1823153/36459432/911481742/18229632310/364592643329/9114816080567/182296321609134/12107/68933/1525840/30372977/607296314/15182200450/303643874052/6072877334698/151821933180684/3036438663482433&tavernspecial:0&tavernspecialsub:0&tavernspecialend:-1&dungeonlevel(21):0/0/0/0/0/0/0/0/0/220/0/0/0/0/200/0/0/0/0/0/0&shadowlevel(21):0/0/0/0/0/0/0/0/0/0/0/0/0/0/100/0/0/0/0/0/0&attbonus1(3):0/0/0/0&attbonus2(3):0/0/0/0&attbonus3(3):0/0/0/0&attbonus4(3):0/0/0/0&attbonus5(3):0/0/0/0&stoneperhournextlevel:50&woodperhournextlevel:150&fortresswalllevel:1&inboxcapacity:100&ownplayersave.playerSave:1666520498/173298/1666160319/1386163329/3156302543/0/0/171/23413019/28630050/35361/2515/6553600/2944766516/18/877/805/5/1/4/4/309/3/4/17/309/0/19136520/257/18939905/1098/644/637/1083/806/2368/606/606/1619/1251/988/542/545/985/710/2700302876672/2700302876672/0/1023475718/655369/2611/0/1/3/4/356/0/0/945155/0/520159235/3276808/2448/0/1/3/4/355/0/0/1723152/0/65541/62/2449/0/6/0/0/195/0/0/4489690/0/687865860/1966130/1658/0/1/4/5/173/173/173/9297056/0/1358954504/655363/0/0/1/5/3/365/0/0/654928/0/1191182343/65545/2300/0/4/2/5/349/0/0/1694845/0/1526792201/655419/0/0/6/0/0/191/0/0/15480136/0/1694564362/1310781/0/0/6/0/0/184/0/0/1436842/0/184549377/327730/205/527/1/4/5/216/216/216/5538561/0/2/50/25/0/21/0/0/233/0/0/5006557/0/9/14/0/0/1/0/0/395/0/0/2234101/0/8/9/0/0/3/0/0/387/0/0/4042568/0/65539/10/2520/0/3/0/0/384/0/0/4770094/0/2/10/25/0/4/0/0/379/0/0/4343641/0/0/0/0/0/0/0/0/0/0/0/0/0/1666160179/171/171/171/6/5/3/-105/-43/-28/2/16/18/450/450/600/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/65542/10/1744/0/4/0/0/375/0/0/4333200/0/139074/84028/270044/1590000/2480000/1770000/4/1666141082/2/9/25/0/5/3/0/215/171/0/2324276/0/65540/10/1368/0/3/1/0/195/177/0/3616525/10/1/25/283/501/3/5/0/196/192/0/3199739/10/3/8/1288/0/3/0/0/392/0/0/4612319/1/2/9/25/0/2/0/0/391/0/0/4606538/0/7/10/1216/0/4/0/0/379/0/0/7869046/0/1666141082/9/9/0/0/5/0/0/383/0/0/7783940/0/12/3/0/0/11/3/0/72/10/0/534643/0/12/3/0/0/11/3/0/72/10/0/534643/0/9/15/0/0/4/0/0/387/0/0/8083010/0/65544/3/0/0/1/0/0/371/0/0/6677010/0/65546/33/0/0/1/3/0/209/167/0/11646940/10/17/0/40779/3577/123/11394/195619/0/0/0/1545703660/0/16777216/0/11466/205/527/931380/1667057414/0/10/0/1655591024/2100/4/93/1665966876/1612992482/14/14/1/1420135994/408/0/0/0/0/0/0/0/0/-111/0/0/4/1666160400/12/12/12/12/12/12/12/12/12/12/5/120/8/125/0/0/0/0/0/0/0/0/0/0/0/0/0/123/1429221162/0/9/0/17/13/0/1665963697/500/0/0/0/7128500/8/0/0/0/6/0/2/1/1/0/0/0/0/0/0/0/0/0/0/0/0/0/165/0/15018/3873/0/0/0/0/0/0/0/0/0/0/0/0/2/0/0/0/0/0/0/605/125/0/23000/7600/0/10/1665964259/1665963359/220/50/0/1665963359/1/0/1652832004/64/100/6283/40800/13920/0/0/0/0/0/1475700725/1475700725/1/0/0/0/268435455/2/139884/23183/21573/1666155909/0/0/0/0/1819279360/0/0/1666141082/19/1/0/221938/0/0/0/0/0/0/0/0/0/0/0/18/0/1/5/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/131072/1666224001/0/10/1655591024/0/0/0/0/6/0/2/1666135393/0/0/0/8700/0/0/0/1665577800/0/0/140000000000/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/1666158571/0/0/0/0/0/0/0/0/0/0/6900/0/2280/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/&owndescription.s:nie gram. (update 14-03-2016)$bnadal nie gram ale byłem (update 24-12-2018)$bwbilem sobie (update 18-03-2019)$bupdate (30.02.2020)$bel 02.11.2020$belo 16.10.2022.......&ownplayername.r:SidakE3&maxrank:251661&skipallow:0&skipvideo:1&fortresspricereroll:1069286&timestamp:1666160400&fortressprice.fortressPrice(13):41100/7000/13417/4433/900/500/35/12/3960/600/88/56/1895/600/90/16/1895/3000/200/67/900/700/7/9/900/500/41/7/900/400/20/14/900/600/61/20/900/2500/40/13/900/400/25/8/900/15000/30/13/3600/15000/2/1/&fortressGroupPrice.fortressPrice:0/0/2640/800&unitprice.fortressPrice(3):600/0/15/5/600/0/11/6/300/0/19/3/&upgradeprice.upgradePrice(3):28/270/210/28/720/60/28/360/180/&unitlevel(4):5/25/25/25/&underworldprice.underworldPrice(10):900/100000/165/900/50000/0/900/100000/12/900/25000/0/900/40000/0/900/66000/148/900/70000/148/900/99000/165/900/1000000/297/900/150000/198&underworldupgradeprice.underworldupgradePrice(3):1/200/100/1/200/100/1/200/100&petsdefensetype:5&singleportalenemylevel:200&witch.witchData:9/-1/-1/7/1666137600/0/1410880435/9/6/51/1391839519/8/101/1394793639/1/71/1397632668/3/91/1400452993/2/41/1403099802/0/61/1405498269/4/81/1407514721/5/31/1409179094/7/11/1410880439/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/&wagesperhour:650000&&dragongoldbonus:1710858&toilettfull:0&maxupgradelevel:20&serverversion:1985&preregister:0/0&cidstring:no_cid&tracking.s:accountlogin&calenderinfo:12/1/8/1/3/1/25/1/5/1/2/1/3/2/1/1/24/1/18/5/6/1/22/1/7/1/6/2/8/2/22/2/5/2/2/2/3/3/21/1&&owngroupsave.groupSave:40779/1000/107711669993472/2/65343494029312/65763566157834/6488064/0/7/0/173298/0/1666160400/271/173298/92049/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/171/101/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/1666160319/1666132000/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/1580411145/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/1/3/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/9/0/2/0/0/0/0/0/0/0/0/0/0/1666051200/1666137600/0/0/0/0/0/0/0/5/10/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/&owngrouppotion.r:0,0,0,0,0,0,12,25,13,25,0,0,&owngroupknights.r:2,0,&owngroupname.r:takatamtestowa&owngroupdescription.s:121F080B0E093802000B09§totylkotesttaksobietylko&owngroupmember.r:SidakE3,XlukaszX&owngrouprank:3577&groupskillprice(6):500/0/500/0/25000/0/&&chathistory.s(1):22:25 SidakE3:§ gg&chattime:1666131945&iadungeontime:1/1663948800/1664827200&achievement(186):0/0/0/0/0/0/0/0/0/1/1/0/0/0/0/0/1/0/0/1/0/1/0/0/0/0/0/0/1/0/0/0/0/0/0/1/1/1/0/1/1/0/0/0/0/0/0/1/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/1/1/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/1/1/0/0/0/0/1447343/0/0/0/0/0/0/0/0/0/100/0/0/1/0/0/0/0/0/15/1/0/0/0/0/0/0/0/7/5/0/0/0/832/0/0/0/0/0/0/0/0/0/0/0/0/0/9/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/2/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/100/0/0/0/0/0/&scrapbook.r:_________________7_________X8AAB__-AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAf_8AAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP______________2_-AAAAAAAAAAAAAAAAAP-MAAAA_____________wAAAAAAAAAAAAD_TAAAAP_____4AAAAAD-XAAAAJKjJQtufxbH1ACgmEj___9___gAAAAAAAAAAAAAAAAAAAAAAAAPoAAAAA2X-9r1__wAAAAAAAD-BAAAAN_v__vf_8AAAAAAAA-gwAAAC-3__kf__AAAAAAAAP4AAAAA3_9HPP__wAAAAAAAD-iAAAAL2-W90__8AAAAAAAA_gQAAAB_-_5-f__AAAAAAAAPwMAAAAI49b7___wAAAAAAAD-hAAAAFM_ftP__8AAAAAAAA_oQAAABi-f_u___AAAAAAAAP6MAAAAWu_rb1__wAAAAAAAD-gAAAAJ1-jm___8AAAAAAAA_ggAAACHvvvVf__AAAAAAAAP6MAAAAZWEX_3_7wAAAAAAADeCAAAAGNroz2f_8AAAAAAAA_oQAAADxee3qH__AAAAAAAAPqEAAAALh8ftD__wAAAAAAAD_AAAAAJzlv6Dfe8AAAAAAAA_ggAAAAuO24Of__AAAAAAAAP8EAAAAAA==&ownpets.petsSave:173298/0/4/4/11/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/9/4/4/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/4/4/4/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/4/5/4/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/4/4/5/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/15/3/3/3/3/3/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/2/1/0/0/1/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/132117/1476259506/3063/338/3/9/1666141082/6/3/1/1/3/0/0/0/0/0/0/0/2368/606/606/1619/1251/7654/1032/5/1655591024/24/16/12/21/13/74/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/&owntower.towerSave:173298/0/0/171/1/0/0/1098/644/637/1083/806/2716/19/19/626/242/0/0/0/0/0/7708/314/406/1023410182/655369/1003/0/1/5/2/355/0/0/653311/0/3/10/2501/0/1/5/4/339/0/0/1539998/0/855638021/65594/1779/0/1/4/5/212/212/212/26022926/0/4/10/943/0/1/4/3/324/0/0/846160/0/65544/15/0/0/4/5/2/365/0/0/0/0/7/10/1482/0/1/4/2/315/0/0/1004821/0/1526726665/655375/0/0/1/3/2/356/0/0/1164036/0/1694498826/1310739/0/0/1/5/3/352/0/0/2055152/0/184549377/327703/314/406/1/3/2/352/0/0/793962/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/171/2/0/0/637/644/1098/1083/806/19/19/2167/1372/24/0/0/0/0/0/1809/483/1073/6/1010/267/0/3/5/2/341/0/0/0/0/3/1009/452/0/4/1/2/320/0/0/0/0/5/1009/283/0/3/2/5/307/0/0/0/0/4/1008/511/0/3/1/4/355/0/0/0/0/65544/16/0/0/3/2/5/364/0/0/3016553/0/7/1010/296/0/4/3/5/315/0/0/0/0/9/5/0/0/3/4/1/348/0/0/699093/0/1694498826/1310747/0/0/3/4/2/357/0/0/0/0/184549377/328688/483/1073/4/1/3/666/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/171/3/0/0/644/1098/637/1083/806/173/2511/173/686/696/0/0/0/0/0/5783/312/642/6/2010/1359/0/2/3/4/299/0/0/0/0/520093699/3278863/784/0/2/4/5/178/178/178/0/0/5/2010/1208/0/4/5/3/307/0/0/0/0/4/2008/1282/0/5/1/3/325/0/0/0/0/1358954504/655363/0/0/2/3/1/356/0/0/1164036/0/1191182343/67599/1150/0/6/0/0/150/0/0/0/0/9/8/0/0/2/5/3/324/0/0/1006372/0/10/13/0/0/2/4/5/347/0/0/0/0/65537/2007/312/642/2/3/5/752/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/1236/0/0/0/0/0/0/0/0/0/1/0/0/0/0&owntowerlevel:200&&&&&&&&&cryptoid:0-fSpENuxj7z7A54&cryptokey:47sF686zf0Z6aOf6
    }

    public function ShoopVersion($data){
        //2
        return $data['ssid'] . "|ShopVersion:|||";
        //00000000000000000000000000000000|ShopVersion:|||
        //shopversion:2
    }

    public function PlayerHelpshiftAuthtoken($data){
        //3
        return $data['ssid'] . "|PlayerHelpshiftAuthtoken:||||||";
        //00000000000000000000000000000000|PlayerHelpshiftAuthtoken:||||||
        //helpshiftauthtoken:KyZhVEmsnBaqdl+na0MmJs1erZadB64Sjbh+jnDWfoU=
    }

    public function AccountSetLanguage($data){
        //4
        return $data['ssid'] . "|AccountSetLanguage:". $data['lang'] ."||||||||||";
        //IgRyYMEnDCzvt8qgYB6iykazWXISykiQ|AccountSetLanguage:pl||||||||||
        //tbKaPU0qf2oNnloefsPGpxgjJAeXI7cl|AccountSetLanguage:pl||||||||||
        //Success:
    }

    public function PlayerGetPets($data){
        //5
        return $data['ssid'] . "|PlayerGetPets:|";
        //IgRyYMEnDCzvt8qgYB6iykazWXISykiQ|PlayerGetPets:|
        //Success:
    }

    public function Poll($data){
        //6
        return $data['ssid'] . "|Poll:||||||||||";
        //IgRyYMEnDCzvt8qgYB6iykazWXISykiQ|Poll:||||||||||
        //idle.idlesave:0/173298/0/1/0/0/0/0/0/0/0/0/0/1/0/0/0/0/0/0/0/0/0/1666159279/0/0/0/0/0/0/0/0/0/1666159351/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/1666192823/1666128023/11/1/23/25/25/25/0/1320964/0/1320964/0/0/0/6/100/2500/50000/1000000/25000000/500000000/10000000000/250000000000/5000000000000/105/1171/28676/573212/11463891/286596995/5731939668/114638793119/2865969827872/57319396557357/450/3835/91295/1823153/36459432/911481742/18229632310/364592643329/9114816080567/182296321609134/12107/68933/1525840/30372977/607296314/15182200450/303643874052/6072877334698/151821933180684/3036438663482433&fortresschest.item(0):&ownplayersave.playerSave:1666520498/173298/1666159350/1386163329/3156302543/0/0/171/23264462/28630050/35341/2516/6553600/2942777936/18/877/805/5/1/4/4/309/3/4/17/309/0/19136520/257/18939905/1098/644/637/1083/806/2368/606/606/1619/1251/988/542/545/985/710/2700302876672/2700302876672/0/1023475718/655369/2611/0/1/3/4/356/0/0/945155/0/520159235/3276808/2448/0/1/3/4/355/0/0/1723152/0/65541/62/2449/0/6/0/0/195/0/0/4489690/0/687865860/1966130/1658/0/1/4/5/173/173/173/9297056/0/1358954504/655363/0/0/1/5/3/365/0/0/654928/0/1191182343/65545/2300/0/4/2/5/349/0/0/1694845/0/1526792201/655419/0/0/6/0/0/191/0/0/15480136/0/1694564362/1310781/0/0/6/0/0/184/0/0/1436842/0/184549377/327730/205/527/1/4/5/216/216/216/5538561/0/2/50/25/0/21/0/0/233/0/0/5006557/0/9/14/0/0/1/0/0/395/0/0/2234101/0/8/9/0/0/3/0/0/387/0/0/4042568/0/65539/10/2520/0/3/0/0/384/0/0/4770094/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/1666158809/171/171/171/2/6/5/-65/-69/-95/11/12/6/150/150/150/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/65549/84070/52452/477800/353333/631900/4/1666141082/2/9/25/0/5/3/0/215/171/0/2324276/0/65540/10/1368/0/3/1/0/195/177/0/3616525/10/1/25/283/501/3/5/0/196/192/0/3199739/10/3/8/1288/0/3/0/0/392/0/0/4612319/1/2/9/25/0/2/0/0/391/0/0/4606538/0/7/10/1216/0/4/0/0/379/0/0/7869046/0/1666141082/9/9/0/0/5/0/0/383/0/0/7783940/0/12/3/0/0/11/3/0/72/10/0/534643/0/12/3/0/0/11/3/0/72/10/0/534643/0/9/15/0/0/4/0/0/387/0/0/8083010/0/65544/3/0/0/1/0/0/371/0/0/6677010/0/65546/33/0/0/1/3/0/209/167/0/11646940/10/17/0/40779/3577/123/11394/195619/0/0/0/1545703660/0/16777216/0/11466/205/527/931380/1667057414/0/10/0/1655591024/2550/4/93/1665966876/1612992482/14/14/1/1420135994/408/0/0/0/0/0/0/0/0/-111/0/0/4/1666159350/12/12/12/12/12/12/12/12/12/12/5/120/8/125/0/0/0/0/0/0/0/0/0/0/0/0/0/123/1429221162/0/9/0/17/12/0/1665963697/500/0/0/0/7128500/8/0/0/0/6/0/2/1/1/0/0/0/0/0/0/0/0/0/0/0/0/0/166/0/15018/3873/0/0/0/0/0/0/0/0/0/0/0/0/2/0/0/0/0/0/0/605/125/0/23000/7600/0/10/1665964259/1665963359/220/50/0/1665963359/1/0/1652832004/64/100/6283/40800/13920/0/0/0/0/0/1475700725/1475700725/1/0/0/0/268435455/2/139884/23183/21573/1666155909/0/0/0/0/1819279360/0/0/1666141082/19/1/0/221938/0/0/0/0/0/0/0/0/0/0/0/18/0/1/5/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/131072/1666224001/0/10/1655591024/0/0/0/0/6/0/2/1666135393/0/0/0/8250/0/0/0/1665577800/0/0/140000000000/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/1666158571/0/0/0/0/0/0/0/0/0/0/6900/0/2280/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/&toilettfull:0&owngroupsave.groupSave:40779/1000/107711669993472/2/65343494029312/65763566157834/6488064/0/7/0/173298/0/1666159350/271/173298/92049/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/171/101/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/1666159350/1666132000/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/1580411145/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/1/3/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/9/0/2/0/0/0/0/0/0/0/0/0/0/1666051200/1666137600/0/0/0/0/0/0/0/5/10/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/&owngrouppotion.r:0,0,0,0,0,0,12,25,13,25,0,0,&owngroupknights.r:2,0,&owngroupname.r:takatamtestowa&owngroupdescription.s:121F080B0E093802000B09§totylkotesttaksobietylko&owngroupmember.r:SidakE3,XlukaszX&owngrouprank:3577&groupskillprice(6):500/0/500/0/25000/0/&tavernspecial:0&tavernspecialsub:0&tavernspecialend:-1&dungeonlevel(21):0/0/0/0/0/0/0/0/0/220/0/0/0/0/200/0/0/0/0/0/0&shadowlevel(21):0/0/0/0/0/0/0/0/0/0/0/0/0/0/100/0/0/0/0/0/0&singleportalenemylevel:206&rewardpreview:1/10/50/1/25/100/2/100/150/3/1/200&wagesperhour:650000&dragongoldbonus:1710858&achievement(186):0/0/0/0/0/0/0/0/0/1/1/0/0/0/0/0/1/0/0/1/0/1/0/0/0/0/0/0/1/0/0/0/0/0/0/1/1/1/0/1/1/0/0/0/0/0/0/1/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/1/1/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/1/1/0/0/0/0/1447339/0/0/0/0/0/0/0/0/0/100/0/0/1/0/0/0/0/0/15/1/0/0/0/0/0/0/0/7/5/0/0/0/832/0/0/0/0/0/0/0/0/0/0/0/0/0/9/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/2/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/100/0/0/0/0/0/&&petsdefensetype:5&witch.witchData:9/-1/-1/7/1666137600/0/1410880435/9/6/51/1391839519/8/101/1394793639/1/71/1397632668/3/91/1400452993/2/41/1403099802/0/61/1405498269/4/81/1407514721/5/31/1409179094/7/11/1410880439/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/&fortressGroupPrice.fortressPrice:0/0/2640/800&owntower.towerSave:173298/0/0/171/1/0/0/1098/644/637/1083/806/2716/19/19/626/242/0/0/0/0/0/7708/314/406/1023410182/655369/1003/0/1/5/2/355/0/0/653311/0/3/10/2501/0/1/5/4/339/0/0/1539998/0/855638021/65594/1779/0/1/4/5/212/212/212/26022926/0/4/10/943/0/1/4/3/324/0/0/846160/0/65544/15/0/0/4/5/2/365/0/0/0/0/7/10/1482/0/1/4/2/315/0/0/1004821/0/1526726665/655375/0/0/1/3/2/356/0/0/1164036/0/1694498826/1310739/0/0/1/5/3/352/0/0/2055152/0/184549377/327703/314/406/1/3/2/352/0/0/793962/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/171/2/0/0/637/644/1098/1083/806/19/19/2167/1372/24/0/0/0/0/0/1809/483/1073/6/1010/267/0/3/5/2/341/0/0/0/0/3/1009/452/0/4/1/2/320/0/0/0/0/5/1009/283/0/3/2/5/307/0/0/0/0/4/1008/511/0/3/1/4/355/0/0/0/0/65544/16/0/0/3/2/5/364/0/0/3016553/0/7/1010/296/0/4/3/5/315/0/0/0/0/9/5/0/0/3/4/1/348/0/0/699093/0/1694498826/1310747/0/0/3/4/2/357/0/0/0/0/184549377/328688/483/1073/4/1/3/666/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/171/3/0/0/644/1098/637/1083/806/173/2511/173/686/696/0/0/0/0/0/5783/312/642/6/2010/1359/0/2/3/4/299/0/0/0/0/520093699/3278863/784/0/2/4/5/178/178/178/0/0/5/2010/1208/0/4/5/3/307/0/0/0/0/4/2008/1282/0/5/1/3/325/0/0/0/0/1358954504/655363/0/0/2/3/1/356/0/0/1164036/0/1191182343/67599/1150/0/6/0/0/150/0/0/0/0/9/8/0/0/2/5/3/324/0/0/1006372/0/10/13/0/0/2/4/5/347/0/0/0/0/65537/2007/312/642/2/3/5/752/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/1236/0/0/0/0/0/0/0/0/0/1/0/0/0/0&owntowerlevel:200&ownpets.petsSave:173298/0/4/4/11/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/9/4/4/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/4/4/4/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/4/5/4/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/4/4/5/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/15/3/3/3/3/3/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/2/1/0/0/1/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/132117/1476259506/3063/338/3/9/1666141082/6/3/1/1/3/0/0/0/0/0/0/0/2368/606/606/1619/1251/7654/1032/5/1655591024/24/16/12/21/13/74/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/&&oktoberfest:&&stoneperhournextlevel:70&woodperhournextlevel:330&fortresswalllevel:5&attbonus1:2268/0/0/0&attbonus2:570/0/0/0&attbonus3:570/0/0/0&attbonus4:1541/0/0/0&attbonus5:1192/0/0/0&ownplayersave.playerSave:1666520498/173298/1666159350/1386163329/3156302543/0/0/171/23264462/28630050/35341/2516/6553600/2942777936/18/877/805/5/1/4/4/309/3/4/17/309/0/19136520/257/18939905/1098/644/637/1083/806/2368/606/606/1619/1251/988/542/545/985/710/2700302876672/2700302876672/0/1023475718/655369/2611/0/1/3/4/356/0/0/945155/0/520159235/3276808/2448/0/1/3/4/355/0/0/1723152/0/65541/62/2449/0/6/0/0/195/0/0/4489690/0/687865860/1966130/1658/0/1/4/5/173/173/173/9297056/0/1358954504/655363/0/0/1/5/3/365/0/0/654928/0/1191182343/65545/2300/0/4/2/5/349/0/0/1694845/0/1526792201/655419/0/0/6/0/0/191/0/0/15480136/0/1694564362/1310781/0/0/6/0/0/184/0/0/1436842/0/184549377/327730/205/527/1/4/5/216/216/216/5538561/0/2/50/25/0/21/0/0/233/0/0/5006557/0/9/14/0/0/1/0/0/395/0/0/2234101/0/8/9/0/0/3/0/0/387/0/0/4042568/0/65539/10/2520/0/3/0/0/384/0/0/4770094/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/1666158809/171/171/171/2/6/5/-65/-69/-95/11/12/6/150/150/150/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/65549/84070/52452/477800/353333/631900/4/1666141082/2/9/25/0/5/3/0/215/171/0/2324276/0/65540/10/1368/0/3/1/0/195/177/0/3616525/10/1/25/283/501/3/5/0/196/192/0/3199739/10/3/8/1288/0/3/0/0/392/0/0/4612319/1/2/9/25/0/2/0/0/391/0/0/4606538/0/7/10/1216/0/4/0/0/379/0/0/7869046/0/1666141082/9/9/0/0/5/0/0/383/0/0/7783940/0/12/3/0/0/11/3/0/72/10/0/534643/0/12/3/0/0/11/3/0/72/10/0/534643/0/9/15/0/0/4/0/0/387/0/0/8083010/0/65544/3/0/0/1/0/0/371/0/0/6677010/0/65546/33/0/0/1/3/0/209/167/0/11646940/10/17/0/40779/3577/123/11394/195619/0/0/0/1545703660/0/16777216/0/11466/205/527/931380/1667057414/0/10/0/1655591024/2550/4/93/1665966876/1612992482/14/14/1/1420135994/408/0/0/0/0/0/0/0/0/-111/0/0/4/1666159350/12/12/12/12/12/12/12/12/12/12/5/120/8/125/0/0/0/0/0/0/0/0/0/0/0/0/0/123/1429221162/0/9/0/17/12/0/1665963697/500/0/0/0/7128500/8/0/0/0/6/0/2/1/1/0/0/0/0/0/0/0/0/0/0/0/0/0/166/0/15018/3873/0/0/0/0/0/0/0/0/0/0/0/0/2/0/0/0/0/0/0/605/125/0/23000/7600/0/10/1665964259/1665963359/220/50/0/1665963359/1/0/1652832004/64/100/6283/40800/13920/0/0/0/0/0/1475700725/1475700725/1/0/0/0/268435455/2/139884/23183/21573/1666155909/0/0/0/0/1819279360/0/0/1666141082/19/1/0/221938/0/0/0/0/0/0/0/0/0/0/0/18/0/1/5/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/131072/1666224001/0/10/1655591024/0/0/0/0/6/0/2/1666135393/0/0/0/8250/0/0/0/1665577800/0/0/140000000000/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/1666158571/0/0/0/0/0/0/0/0/0/0/6900/0/2280/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/&timestamp:1666159350
        //&achievement(186):0/0/0/0/0/0/0/0/0/1/0/0/0/0/0/0/1/0/0/0/0/1/0/0/0/0/0/0/0/0/0/0/0/0/0/1/1/1/0/0/1/0/0/0/0/0/0/1/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/1/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/1543250/0/0/0/0/0/0/0/0/0/24/1/0/0/0/0/0/0/0/0/1/0/0/0/0/0/0/0/2/2/0/0/0/12/0/0/0/0/0/0/0/0/0/0/0/0/0/9/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/&timestamp:1666173592
    }

    public function PlayerAdventureStart($data){
        return $data['ssid'] . "|PlayerAdventureStart:". $data['questid'] ."/1|||||||";
        //IgRyYMEnDCzvt8qgYB6iykazWXISykiQ|PlayerAdventureStart:1/1|||||||
        //ownplayersave.playerSave:1666520498/173298/1666159836/1386163329/3156302543/0/0/171/23264462/28630050/35341/2516/6553600/2942777936/18/877/805/5/1/4/4/309/3/4/17/309/0/19136520/257/18939905/1098/644/637/1083/806/2368/606/606/1619/1251/988/542/545/985/710/2700302876674/2700302876673/1666159989/1023475718/655369/2611/0/1/3/4/356/0/0/945155/0/520159235/3276808/2448/0/1/3/4/355/0/0/1723152/0/65541/62/2449/0/6/0/0/195/0/0/4489690/0/687865860/1966130/1658/0/1/4/5/173/173/173/9297056/0/1358954504/655363/0/0/1/5/3/365/0/0/654928/0/1191182343/65545/2300/0/4/2/5/349/0/0/1694845/0/1526792201/655419/0/0/6/0/0/191/0/0/15480136/0/1694564362/1310781/0/0/6/0/0/184/0/0/1436842/0/184549377/327730/205/527/1/4/5/216/216/216/5538561/0/2/50/25/0/21/0/0/233/0/0/5006557/0/9/14/0/0/1/0/0/395/0/0/2234101/0/8/9/0/0/3/0/0/387/0/0/4042568/0/65539/10/2520/0/3/0/0/384/0/0/4770094/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/1666158809/171/171/171/2/6/5/-65/-69/-95/11/12/6/150/150/150/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/65549/84070/52452/477800/353333/631900/4/1666141082/2/9/25/0/5/3/0/215/171/0/2324276/0/65540/10/1368/0/3/1/0/195/177/0/3616525/10/1/25/283/501/3/5/0/196/192/0/3199739/10/3/8/1288/0/3/0/0/392/0/0/4612319/1/2/9/25/0/2/0/0/391/0/0/4606538/0/7/10/1216/0/4/0/0/379/0/0/7869046/0/1666141082/9/9/0/0/5/0/0/383/0/0/7783940/0/12/3/0/0/11/3/0/72/10/0/534643/0/12/3/0/0/11/3/0/72/10/0/534643/0/9/15/0/0/4/0/0/387/0/0/8083010/0/65544/3/0/0/1/0/0/371/0/0/6677010/0/65546/33/0/0/1/3/0/209/167/0/11646940/10/17/0/40779/3577/123/11394/195619/0/0/0/1545703660/0/16777216/0/11466/205/527/931380/1667057414/0/10/0/1655591024/2400/4/93/1665966876/1612992482/14/14/1/1420135994/408/0/0/0/0/0/0/0/0/-111/0/0/4/1666159869/12/12/12/12/12/12/12/12/12/12/5/120/8/125/0/0/0/0/0/0/0/0/0/0/0/0/0/123/1429221162/0/9/0/17/12/0/1665963697/500/0/0/0/7128500/8/0/0/0/6/0/2/1/1/0/0/0/0/0/0/0/0/0/0/0/0/0/166/1666159869/15018/3873/0/0/0/0/0/0/0/0/0/0/0/0/2/0/0/0/0/0/0/605/125/0/23000/7600/0/10/1665964259/1665963359/220/50/0/1665963359/1/0/1652832004/64/100/6283/40800/13920/0/0/0/0/0/1475700725/1475700725/1/0/0/0/268435455/2/139884/23183/21573/1666155909/0/0/0/0/1819279360/0/0/1666141082/19/1/0/221938/0/0/0/0/0/0/0/0/0/0/0/18/0/1/5/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/131072/1666224001/0/10/1655591024/0/0/0/0/6/0/2/1666135393/0/0/0/8250/0/0/0/1665577800/0/0/140000000000/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/1666158571/0/0/0/0/0/0/0/0/0/0/6900/0/2280/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/&timestamp:1666159869
    }

    public function PlayerAdventureFinished($data){
        return $data['ssid'] . "|PlayerAdventureFinished:2||||||";
        //Nk1t2XkPM7ibLDge1OYgxwFO0WGzCkGd|PlayerAdventureFinished:2||||||
    }

    public function PlayerPollScrapbook($data){
        return $data['ssid'] . "|PlayerPollScrapbook:|||||||||||";
        //lfulj88jJAUsVhhtT8ZsQ70bDzDSdebY|PlayerPollScrapbook:|||||||||||
    }

    public function PlayerBeerBuy($data){
        return $data['ssid'] . "|PlayerBeerBuy:|";
        //mW93tIDEGf12CklySF5UJFiVGQ0HCEAm|PlayerBeerBuy:|
    }

    public function PlayerWorkStart($data){
        return $data['ssid'] . "|PlayerWorkStart:".$data['hours']."|||||||||||||";
        //UEV7IWheai2g9EhXz79tFG53WbjJzlNn|PlayerWorkStart:10|||||||||||||
        //ownplayersave.playerSave:1749702153/92049/1666181793/1382265073/3163716654/0/0/101/2965231/3391480/16685/5948/0/50353871/51/508/539/9/511/503/4/508/5/1/14/0/0/19136513/257/1/431/318/369/464/530/1461/214/222/493/112/361/252/306/399/470/2355285196801/10/1666217812/1023410182/655369/1236/0/1/5/4/192/0/0/153502/0/520093699/3276810/918/0/4/2/5/187/0/0/139602/0/855638021/65544/1450/0/1/5/4/188/0/0/146013/0/687865860/1966088/1023/0/1/2/3/188/0/0/149096/0/1359020040/655415/0/0/6/0/0/100/0/0/1125862/0/1191182343/65546/1137/0/1/4/2/187/0/0/160809/0/1526726665/655365/0/0/1/5/3/195/0/0/145938/0/1694498826/1310721/0/0/1/3/2/197/0/0/177257/0/184549377/327706/122/270/4/2/1/188/0/0/139799/0/2/10/25/0/1/2/3/196/0/0/81126/0/12/13/0/0/11/3/0/72/25/0/168895/0/65546/27/0/0/4/0/0/184/0/0/144572/0/65537/29/123/281/1/0/0/195/0/0/227578/0/65545/9/0/0/4/0/0/184/0/0/115658/0/11/20/0/0/0/0/0/0/0/0/2500000/0/1666181378/101/101/101/5/1/3/-42/-84/-86/19/3/6/630/420/420/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/78548/40213/13338/111200/87700/175500/3/1666150203/65540/10/1025/0/2/0/0/196/0/0/767514/0/65537/26/171/249/1/0/0/192/0/0/380220/1/3/8/1386/0/1/0/0/191/0/0/804047/0/65540/8/1388/0/5/0/0/200/0/0/955484/0/1/29/99/297/3/1/0/111/77/0/495070/10/7/10/1206/0/2/0/0/192/0/0/864502/0/1666150203/65546/37/0/0/4/3/0/112/90/0/1160485/10/12/13/0/0/11/3/0/72/25/0/253342/0/12/10/0/0/11/5/0/72/15/0/126671/0/12/13/0/0/11/3/0/72/25/0/253342/0/9/16/0/0/3/5/0/103/83/0/839665/10/9/13/0/0/2/3/0/96/90/0/631570/10/14/0/40779/3577/20/11009/0/0/0/0/1557775810/0/0/0/5764/122/270/236640/1667333027/0/0/0/1612632073/0/11/55/1666127099/1555886981/14/14/1/1419724260/408/0/0/0/0/0/0/0/0/-111/0/0/4/1666181812/8/12/12/12/12/10/7/4/2/0/0/120/0/0/12/13/0/1666382671/1666382676/0/25/25/0/0/0/0/0/20/1390384992/0/9/0/17/20/0/0/100/0/0/0/844400/8/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/291/1666181812/36/6/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/1/1666224001/0/0/0/900/300/0/0/0/0/0/0/0/0/0/0/0/268435455/0/0/0/0/0/0/0/0/0/1819279360/0/0/1666150203/24/3/0/44333/0/0/0/0/0/0/0/0/0/0/0/51/0/1/10/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/131072/1666224001/0/10/1612632073/0/0/0/0/8/0/2/0/0/0/0/19200/0/0/0/0/0/0/140000000000/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/1666175162/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/&timestamp:1666181812
    }

}
?>
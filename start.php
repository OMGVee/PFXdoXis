<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="img/emx_nav_left.css" type="text/css" />
<script type="text/javascript">
<!--
var time = 3000;
var numofitems = 7;

//menu constructor
function menu(allitems,thisitem,startstate){ 
  callname= "gl"+thisitem;
  divname="subglobal"+thisitem;  
  this.numberofmenuitems = allitems;
  this.caller = document.getElementById(callname);
  this.thediv = document.getElementById(divname);
  this.thediv.style.visibility = startstate;
}

//menu methods
function ehandler(event,theobj){
  for (var i=1; i<= theobj.numberofmenuitems; i++){
    var shutdiv =eval( "menuitem"+i+".thediv");
    shutdiv.style.visibility="hidden";
  }
  theobj.thediv.style.visibility="visible";
}
				
function closesubnav(event){
  if ((event.clientY <48)||(event.clientY > 107)){
    for (var i=1; i<= numofitems; i++){
      var shutdiv =eval('menuitem'+i+'.thediv');
      shutdiv.style.visibility='hidden';
    }
  }
}
// -->
</script>
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
.style2 {font-family: "Trebuchet MS"}
-->
</style>
</head>
<body onmousemove="closesubnav(event);">
<div class="skipLinks">skip to: <a href="#content">page content</a> | <a href="#pageNav">links on this page</a> | <a href="#globalNav">site navigation</a> | <a href="#siteInfo">footer (site information)</a> </div>
<div id="masthead">
  <h1 id="siteName">PFXdo<span class="style1">X</span>is</h1>
  <div id="utility"><a href="#">Victor Mateescu</a><a href="login.php">Login/Logout</a> </div>
  <div id="globalNav"> <img alt="" src="img/gblnav_left.gif" height="32" width="4" id="gnl" /> <img alt="" src="img/glbnav_right.gif" height="32" width="4" id="gnr" />
    <div id="globalLink"> <a href="#" id="gl1" class="glink" onmouseover="ehandler(event,menuitem1);">START</a><a href="#" id="gl2" class="glink" onmouseover="ehandler(event,menuitem2);">REPOSITORY</a><a href="#" id="gl3" class="glink" onmouseover="ehandler(event,menuitem3);">MESAGERIE</a><a href="#" id="gl4" class="glink" onmouseover="ehandler(event,menuitem4);">FLUXURI</a><a href="#" id="gl5" class="glink" onmouseover="ehandler(event,menuitem5);">OPTIUNI</a></div>
    <!--end globalLinks-->
    <form id="search" action="">
      <input name="searchFor" type="text" size="20" />
      <a href="">cautare</a>
    </form>
  </div>
  <!-- end globalNav -->
  <div id="subglobal1" class="subglobalNav">aceasta sectiune contine un istoric al ultimelor evenimente asupra fisierelor la care aveti acces </div>
  <div id="subglobal2" class="subglobalNav">aceasta sectiune va permite sa lucrati cu fisierele dvs.</div>
  <div id="subglobal3" class="subglobalNav">aici puteti citi mesajele de la sistem sau de la alti utilizatori catre dvs.</div>
  <div id="subglobal4" class="subglobalNav">din aceasta sectiune puteti initia diverse fluxuri implicand alte persoane in lucrul asupra unui fisier</div>
  <div id="subglobal5" class="subglobalNav">de aici se pot configura diversi parametri de functionare</div>
  <div id="subglobal6" class="subglobalNav"> <a href="#">subglobal6 link</a> | <a href="#">subglobal6 link</a> | <a href="#">subglobal6 link</a> | <a href="#">subglobal6 link</a> | <a href="#">subglobal6 link</a> | <a href="#">subglobal6 link</a> | <a href="#">subglobal6 link</a> </div>
  <div id="subglobal7" class="subglobalNav"> <a href="#">subglobal7 link</a> | <a href="#">subglobal7 link</a> | <a href="#">subglobal7 link</a> | <a href="#">subglobal7 link</a> | <a href="#">subglobal7 link</a> | <a href="#">subglobal7 link</a> | <a href="#">subglobal7 link</a> </div>
  <div id="subglobal8" class="subglobalNav"> <a href="#">subglobal8 link</a> | <a href="#">subglobal8 link</a> | <a href="#">subglobal8 link</a> | <a href="#">subglobal8 link</a> | <a href="#">subglobal8 link</a> | <a href="#">subglobal8 link</a> | <a href="#">subglobal8 link</a> </div>
</div>
<!-- end masthead -->
<div id="pagecell1">
  <!--pagecell1-->
  <img alt="" src="img/tl_curve_white.gif" height="6" width="6" id="tl" /> <img alt="" src="img/tr_curve_white.gif" height="6" width="6" id="tr" />
  <div id="breadCrumb">  </div>
  <div id="pageName">
    <h2 class="style2">Pagina de start </h2>
    <img alt="foto persoana" src="img/MATEESCU Victor (CNL).jpg" height="50" width="50"/> </div>
  <div id="pageNav">
    <div id="sectionLinks"> 
      <div align="center"><a href="#">START</a> <a href="#">REPOSITORY</a> <a href="#">MESAGERIE</a> <a href="#">FLUXURI</a> <a href="#">OPTIUNI</a> <a href="#"></a> </div>
    </div>
  </div>
  <div id="content">
    <div class="feature">
      <table width="100%" border="0" cellspacing="0" cellpadding="4">
        <tr>
          <td style="background-color: #000000;" colspan="4">
		  <table width="100%" border="0" cellspacing="0" cellpadding="4">
              <tr>
                <td style="background-color: #ffffff;"> <strong>!</strong> </td>
                <td width="100%"style="color: #cccccc;">  Ultimele evenimente ce au avut loc asupra fisierelor/folderelor la care aveti acces </td>
              </tr>
          </table></td>
        </tr>
        <tr style="background-color: #334d55; color:#CCCCCC">
          <td width="23%">Eveniment</td>
          <td width="22%">data/ora</td>
          <td width="25%">user</td>
          <td width="30%">nume fisier</td>
        </tr>
        <tr style="background-color: #cccccc;">
          <td width="23%">Adaugare fisier </td>
          <td width="22%">28/05/2010 13:01 </td>
          <td width="25%"><a href="#">Victor Mateescu </a></td>
          <td width="30%"><a href="#">ContractCadru.doc</a></td>
        </tr>
        <tr style="background-color: #cccccc;">
          <td width="23%">Eveniment2</td>
          <td width="22%">27/05/2010 11:45 </td>
          <td width="25%">user</td>
          <td width="30%">nume/cale fisier</td>
        </tr>
      </table>
      <p>&nbsp;</p>
    </div>
    <div class="story"></div>
  </div>
  <div id="siteInfo"> <img src="img/V_logo.png" width="23" height="15" alt="logo victor :P" /> <a href="#">Despre aplicatie</a> | <a href="mailto:victor.mateescu@profilux.ro?subject=[bug_doXis]">Contact / Semnaleaza probleme </a> | &copy;2010 PROFILUX S.A. </div>
</div>
<!--end pagecell1-->
<br />
<script type="text/javascript">
    <!--
      		var menuitem1 = new menu(7,1,"hidden");
			var menuitem2 = new menu(7,2,"hidden");
			var menuitem3 = new menu(7,3,"hidden");
			var menuitem4 = new menu(7,4,"hidden");
			var menuitem5 = new menu(7,5,"hidden");
			var menuitem6 = new menu(7,6,"hidden");
			var menuitem7 = new menu(7,7,"hidden");
    // -->
    </script>
</body>
</html>

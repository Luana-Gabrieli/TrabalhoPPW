<?php
  include("restrito.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>ABN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="es.css">

    <style>
    .cookieConsentContainer{z-index:999;
      width:350px;
      min-height:20px;
      box-sizing:border-box;
      padding:30px 30px 30px 30px;
      background:#232323;
      overflow:hidden;
      position:fixed;
      bottom:30px;right:30px;
      display:none
      }
      .cookieConsentContainer .cookieTitle a{
        font-family:OpenSans,arial,sans-serif;color:#fff;
        font-size:22px;
        line-height:20px;
        display:block
      }

        .cookieConsentContainer .cookieDesc p{
        margin:0;padding:0;
        font-family:OpenSans,arial,sans-serif;
        color:#fff;font-size:13px;
        line-height:20px;display:block;
        margin-top:10px
        }
        .cookieConsentContainer .cookieDesc a{
        font-family:OpenSans,arial,sans-serif;
        color:#fff;text-decoration:underline
        }
        .cookieConsentContainer .cookieButton a{
        display:inline-block;
        font-family:OpenSans,arial,sans-serif;color:#fff;
        font-size:14px;
        font-weight:700;
        margin-top:14px;background:#000;
        box-sizing:border-box;
        padding:15px 24px;text-align:center;
        transition:background .3s
        }
        .cookieConsentContainer .cookieButton a:hover{
        cursor:pointer;
        background:#3e9b67}@media (max-width:980px){.cookieConsentContainer{bottom:0!important;left:0!important;width:100%!important}}
</style>

</head>
<body>

    <div class="header">
      <p> <img src="img/logo.png"> </p>
    </div>

    <div class="container">

    <div class="topnav">
      <a href="#">konohagakure </a>
      <a href="#">fiore</a>
      <a href="#">konohagakure</a>
      <a href="#">konohagakure</a>
      <a href="#">konohagakure</a>
    </div>
    </div>

    <div class="container">
    <div class="row">
      <div class="column">
        <a href="">
        <h2>NOTÍCIA</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
        </a>
      </div>
      
      <div class="column">
        <h2>NOTÍCIA</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
      </div>
      
      <div class="column">
        <h2>NOTÍCIA</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
      </div>
    </div>
        </div>

    <a href="logout.php">Sair do sistema</a>

<script>var purecookieTitle="AVISO!",purecookieDesc="SITE EM CONSTRUÇÃO <3. </BR> Ao aceitar, você concorda que estamos tentando (e cookies).",purecookieLink='<a href="https://www.cssscript.com/privacy-policy/" target="_blank">PP</a>',purecookieButton="Entendo";
function pureFadeIn(e,o){var i=document.getElementById(e);i.style.opacity=0,i.style.display=o||"block",
function e(){var o=parseFloat(i.style.opacity);(o+=.02)>1||(i.style.opacity=o,requestAnimationFrame(e))}()}
function pureFadeOut(e){var o=document.getElementById(e);o.style.opacity=1,function e(){(o.style.opacity-=.02)<0?o.style.display="none":requestAnimationFrame(e)}()}
function setCookie(e,o,i){var t="";if(i){var n=new Date;n.setTime(n.getTime()+24*i*60*60*1e3),t="; expires="+n.toUTCString()}document.cookie=e+"="+(o||"")+t+"; path=/"}
function getCookie(e){for(var o=e+"=",i=document.cookie.split(";"),t=0;t<i.length;t++){for(var n=i[t];" "==n.charAt(0);)n=n.substring(1,n.length);if(0==n.indexOf(o))return n.substring(o.length,n.length)}return null}
function eraseCookie(e){document.cookie=e+"=; Max-Age=-99999999;"}
function cookieConsent(){getCookie("purecookieDismiss")||(document.body.innerHTML+='<div class="cookieConsentContainer" id="cookieConsentContainer"><div class="cookieTitle"><a>'+purecookieTitle+'</a></div><div class="cookieDesc"><p>'+purecookieDesc+" "+purecookieLink+'</p></div><div class="cookieButton"><a onClick="purecookieDismiss();">'+purecookieButton+"</a></div></div>",pureFadeIn("cookieConsentContainer"))}
function purecookieDismiss(){setCookie("purecookieDismiss","1",7),pureFadeOut("cookieConsentContainer")}window.onload=function(){cookieConsent()};</script>


</body>
</html>



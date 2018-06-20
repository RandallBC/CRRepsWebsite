<style>

/* Menú horizontal con subpestañas en dos columnas
----------------------------------------------- */
#toppic {
width:150px; /* Ancho del menú */
height:37px;
background-image: -moz-linear-gradient(top, #317FB8, #385D96);
background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0.00, #317FB8), color-stop(1.0, #385D96));
filter: progid:DXImageTransform.Microsoft.Gradient(gradientType=0,startColorStr=#317FB8,endColorStr=#385D96);
border-bottom:1px solid #002851;
border-top:1px solid #2f558b;
margin:0 auto;padding:0 auto;
overflow:hidden;
text-shadow:1px 1px 2px #002851;
}
#topwrapper {
width:940px; /* Ancho del menú */
height:40px;
margin:0 auto;
padding:0 auto;
}
.clearit {clear: both;height: 0;line-height: 0.0;font-size: 0;}
#top {width:100%;}
#top, #top ul {padding: 0;margin: 0;list-style: none;}
#top a {
border-right:1px solid #2f558b;
text-align:left;
display: block;
text-decoration: none;
padding:10px 12px 11px;
font:bold 14px Arial;
text-transform:none;
color:#eee; /* Color del texto de las pestañas */
}
#top a:hover {
background:#2f558b; /* Color de las pestañas al pasar el cursor */
color:#c5fa6f; /* Color del texto de las pestañas al pasar el cursor */
}
#top a.trigger {
/* Flecha */
background-image: url(http://3.bp.blogspot.com/-LzmPTNyR6po/TwETZufjSTI/AAAAAAAAATo/oisHmXUjmSY/s1600/arrow_white.gif);
background-repeat: no-repeat;
padding: 10px 24px 11px 12px;
background-position: right center;
}
#top li {float: left;position: relative;}
#top li {position: static !important; width: auto;}
#top li ul, #top ul li {width:300px;} /* Ancho del contenedor de las subpestañas */
#top ul li a {
text-align:left;
padding: 6px 15px;
font-size:13px;
font-weight:normal;
text-transform:none;
font-family:Arial, sans-serif;
border:none;
}
#top li ul {
z-index:100;
position: absolute;
display: none;
background-color:#1a3352; /* Color de fondo del contenedor de las subpestañas */
margin-left:-80px;
padding:10px 0;
border-radius: 0px 0px 6px 6px;
box-shadow:0 2px 2px rgba(0,0,0,0.6);
filter:alpha(opacity=87);
opacity:.87;
}
#top li ul li {
width:150px; /* Ancho de cada subpestaña */
float:left;
margin:0;
padding:0;
}
#top li:hover ul, #top li.hvr ul {display: block;}
#top li:hover ul a, #top li.hvr ul a {
color:#ddd; /* Color del texto de los submenús */
background-color:transparent;
text-decoration:none;
}
#top ul a:hover {
text-decoration:underline!important;
color:#c5fa6f !important; /* Color del texto de los submenús al pasar el cursor */
}

</style>

<div id='toppic'>
    <div id='topwrapper'>
        <ul id='top'>
            <li><a class='trigger' href='#'>Travel Guide</a>
                <ul>
                    <li><a href='#'>Pestaña 3.1</a></li>
                    <li><a href='#'>Pestaña 3.2</a></li>
                    <li><a href='#'>Pestaña 3.3</a></li>
                    <li><a href='#'>Pestaña 3.4</a></li>
                    <li><a href='#'>Pestaña 3.5</a></li>
                    <li><a href='#'>Pestaña 3.6</a></li>
                </ul>
            </li>
        </ul>
        <br class='clearit'/>
    </div>
</div>
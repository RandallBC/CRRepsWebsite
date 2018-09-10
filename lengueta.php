<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" href="css/lengueta.css" type="text/css" charset="utf-8"/>
    </head>
    
        <style>
        
          a.back{
            width:150px;
            height:50px;
            position:fixed;
            bottom:15px;
            right:15px;
            background:#fff url(codrops_back.png) no-repeat top left;
        }
        .scroll{
            width:133px;
            height:50px;
            position:fixed;
            bottom:15px;
            left:150px;
            background:#fff url(scroll.png) no-repeat top left;
        }

          .showme{
              display: none;
          }
          .showhim:hover .showme{
              display : block;
          }

            </style>

    <script type="text/javascript" defer="defer" src="https://mylivechat.com/chatbutton.aspx?hccid=12329520"></script>

    <body>
          <ul id="navigation">
                <li class="home"><a href="index.php" title="Home"></a></li>
                <li class="facebook"><a target="_blank" href="https://www.facebook.com/pages/Costa-Rica-Reps-Tour-Operator/83378578069" title="Facebook"></a></li>
                <li class="twitter"><a target="_blank" href="https://twitter.com/@costaricareps" title="Twitter"></a></li>
                <li class="gallery"><a href="photogallery.php" title="Photo Gallery"></a></li>
                <!--li class="videos"><a target="_blank" href="http://costaricareps.com/blog/videos" title="Videos"></a></li>     <!--    falta poner el enlace de video bn             -->
                <li class="livechat">
                    <div href="#" class="showhim"><a href="#" title="Live Chat">
                        <div class="showme">
                            <div id="MyLiveChatContainer"></div>

                        </div></a>
                    </div>

                    </li>
           </ul>

        <script type="text/javascript">
            $(function() {
                $('#navigation a').stop().animate({'marginLeft':'-85px'},1000);

                $('#navigation > li').hover(
                    function () {
                        $('a',$(this)).stop().animate({'marginLeft':'-2px'},200);
                    },
                    function () {
                        $('a',$(this)).stop().animate({'marginLeft':'-85px'},200);
                    }
                );
            });
        </script>
    </body>
</html>
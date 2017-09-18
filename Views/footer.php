    
        <script>
            var nav_collection_hover = $('#collection_nav');
             nav_collection_hover.mouseenter(function (){
                 $('#collection_nav_drop_ul').css('visibility','visible');
            });
            nav_collection_hover.mouseleave(function (){
               $('#collection_nav_drop_ul').css('visibility','hidden');
            });
            var sel_art = $('.enter');
            console.log(sel_art);
            sel_art.mouseenter(function (){
                $(this).find('h2').css('color','purple');
                $(this).find('h2').css('font-weight','500');
                $(this).find('img').css('border','2px solid purple');
                //console.log($(this).find('img').css('border-color','purple'));
            });
            sel_art.mouseleave(function (){
                $(this).find('h2').css('color','black');
                $(this).find('h2').css('font-weight','100');
                 $(this).find('img').css('border','2px solid black');
            });
            var nav_class = $('.nav').parent('li');
            nav_class.click(function(){
                $(this).attr('id','sel_page').siblings('li').removeAttr('id','sel_page');
            });
            
        </script>
                <!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=266189503414961";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
    </body>
</html>
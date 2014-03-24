<?php get_header(); ?>
<body>

<table>
	<tr id = "top">
    	<td id = "left" rowspan="4"></td>
    	<td rowspan="4" style="width:120px;"><img id="left-img" src="<?php bloginfo('template_url');?>/img/top-page-Left.png" style="width:120px;"></td>
    	<td colspan="2" style="width:904px;">
        	<div id = "languege" style="margin-top:174px;margin-right:4px;float:right;">
            	<a href="<?php home_url()?>/jp/"><img src="<?php bloginfo('template_url');?>/flags/japanese.png" style="height:23px;width:50px;float:left;"/></a>
                <a href="<?php home_url()?>/en/"><img src="<?php bloginfo('template_url');?>/flags/english.png" style="height:23px;width:57px;float:left;"/></a>
            </div>
        </td>
		<td rowspan="4" id="right"></td>
    </tr>
	<tr>
    	<td style="height:148px;width:372px;">
<img src="<?php bloginfo('template_url');?>/title/icon.png" class="IndexIcon"/>
        </td>
       	<td id="middle" rowspan="2" style="width:528px;"><img src="<?php bloginfo('template_url');?>/img/index-image.JPG" class="top-img" /></td>
    </tr>
	<tr>
    	<td style="height:202px;">
        	<div class="links">
            <a href = "<?php home_url()?>/jp/blog/">
            <img src="<?php bloginfo('template_url');?>/link/blog.png" class = "link" />
            </a>
            <a href = "<?php home_url()?>/jp/category/coverage/">
            <img src="<?php bloginfo('template_url');?>/link/media.png" class = "link" />
            </a>
            <a href = "<?php home_url()?>/jp/contact/">
            	<img src="<?php bloginfo('template_url');?>/link/access.png" class = "link" />
            </a>
            <a href = "<?php home_url()?>/jp/kotoplay/">
            	<img src="<?php bloginfo('template_url');?>/link/trykoto.png" class = "link" />
            </a>
            <a href = "<?php home_url()?>/jp/koto/">
            	<img src="<?php bloginfo('template_url');?>/link/koto.png" class = "link" />
            </a>
            <a href = "<?php home_url()?>/jp/about/">
            	<img src="<?php bloginfo('template_url');?>/link/soushunan.png" class = "link" />
            </a>
            <a href = "<?php home_url()?>/jp/category/news/">
            	<img src="<?php bloginfo('template_url');?>/link/news.png" class = "link" />
            </a>
            </div>
        </td>
    </tr>
	<tr>
    	<td id="bottom" style="height:209px;"></td>
        <td>
        	<div style="float:right;margin-right:2px;margin-top:3px;">お問い合わせ Tel:075-801-4652<br/>毎月第三木曜日に "千円コンサート" 開催中</div>
            <div style="clear:right;"></div>
            <div style="float:right;margin-right:2px;margin-top:9px;">
                <a href="http://www.youtube.com/watch?v=WBAuNmNx65Q" target="_blank"><img src="<?php bloginfo('template_url');?>/index/youtube.png" class="sns-icon"/></a>
                <a href="http://www.facebook.com/soushunan" target="_blank" ><img src="<?php bloginfo('template_url');?>/index/facebook.png" class="sns-icon" /></a>
            	<a href="http://twitter.com/soushunan" target="_blank"><img src="<?php bloginfo('template_url');?>/index/twitter.png" class="sns-icon" /></a>

            </div>
        </td>
    </tr>
</table>

<?php get_footer(); ?>
<script type="text/javascript">
	var j = jQuery.noConflict();
	j(function() {
    		var w = window.parent.screen.width;
			var h = document.documentElement.clientHeight-12;
			var h_middle = j("#middle").height();
			var w_bottom = j("#bottom").width();
			if (w >1024){
			var width_L = Math.floor((w - 1024)*2/10);
			var width_R = Math.floor((w - 1024)*8/10);
			j("#left").css("width",width_L);
			j("#right").css("width",width_R);
			}
			if (h < 768){
			var height_T = Math.floor((h - h_middle)/2);
			var height_B = Math.floor((h - h_middle)/2);
				if(height_T > 0){
					j("#top").css("height",height_T);
					j("#bottom").css("height",height_B);
					j("#languege").css('margin-top',height_T-35); 
				}
				else{
					j("#top").css("height",209);
					j("#bottom").css("height",209);
					}
			}
			else{
				j("#top").css("height",209);
				j("#bottom").css("height",209);
			}
			j("#left-img").css("height",h + 6);
			//j("#copyright").css("margin-left",Math.floor((400)/2)
    	});
</script>
</body>
</html>
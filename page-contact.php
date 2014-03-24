<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php get_header(); ?>
<body>
<table id = "ALL">
	<tr>
    	<td id = "left" rowspan="3" style="width_L"></td>
    	<td rowspan="3" style="width:130px;"><img id="left-img" src="<?php bloginfo('template_url');?>/img/top-page-Left.png" style="width:130px;"></td>
        <td id = "top" colspan="2"><?php include('global_menu.php'); ?></td>
        <td id = "right" rowspan="3" style="width:24px;"></td>
    </tr>
	<tr id = "middle" style="height:398px;">
        <td style="float:right;">
        <div>
        	<img src="<?php bloginfo('template_url');?>/title/<?php the_title(); ?>.png" class ="image-title">
        </div>
        	<div style="clear:both;height:14px;"></div>
        	<div style="height:277px;width:357px;padding-left:17px;padding-right:26px;text-align:left;">
			<?php while ( have_posts()) : the_post();?>
				<?php the_content();?>
			<?php endwhile; ?></div>
        </td>
        <td>
        	<div style="clear:both;height:17px;"></div>
        	<div>
            <Table>
			<tr class="AccessInfo">
			   <td class="AccessInfo">Email:</td>
			   <td class="AccessInfo">info@soushunan.jp</td>
			</tr>
			<tr class="AccessInfo">
			   <td class="AccessInfo">TEL:</td>
			   <td class="AccessInfo">
				075-801-4652<br/>
			   </td>
			</tr>
			<tr class="AccessInfo">
			   <td class="AccessInfo">Adress:</td>
			   <td class="AccessInfo">
				京都府京都市上京区東神明町288-2<br/>
			   </td>
			</tr>
			<tr class="AccessInfo">
			   <td class="AccessInfo">Access:</td>
			   <td class="AccessInfo">
				電車　JR二条駅より徒歩約15分、タクシーで約5分<br/>
				バス　京都市バス千本出水駅より徒歩1分<br/>
			   </td>
			</tr>
            <tr>
                <td colspan="2">
				<p id="access_info_img"><iframe width="480" height="320" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.jp/maps?q=288-2+Higashishinmeich%C5%8D+Kamigyo-ku+Kyoto-shi+Kyoto-fu&amp;sll=35.021566,135.744084&amp;hl=jp&amp;brcurrent=3,0x60010875f5756609:0xef53d8dad297d521,0&amp;ie=UTF8&amp;hq=&amp;hnear=%E4%BA%AC%E9%83%BD%E5%BA%9C%E4%BA%AC%E9%83%BD%E5%B8%82%E4%B8%8A%E4%BA%AC%E5%8C%BA%E6%9D%B1%E7%A5%9E%E6%98%8E%E7%94%BA%EF%BC%92%EF%BC%98%EF%BC%98&amp;ll=35.021566,135.744084&amp;spn=0.004147,0.009238&amp;t=m&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.jp/maps?q=288-2+Higashishinmeich%C5%8D+Kamigyo-ku+Kyoto-shi+Kyoto-fu&amp;sll=35.021566,135.744084&amp;hl=en&amp;brcurrent=3,0x60010875f5756609:0xef53d8dad297d521,0&amp;ie=UTF8&amp;hq=&amp;hnear=%E4%BA%AC%E9%83%BD%E5%BA%9C%E4%BA%AC%E9%83%BD%E5%B8%82%E4%B8%8A%E4%BA%AC%E5%8C%BA%E6%9D%B1%E7%A5%9E%E6%98%8E%E7%94%BA%EF%BC%92%EF%BC%98%EF%BC%98&amp;ll=35.021566,135.744084&amp;spn=0.004147,0.009238&amp;t=m&amp;z=14&amp;source=embed" style="color:#C987FF;text-align:left">大きな地図で見る</a></small></p>
                </td>
            </tr>
		</table>
        </div>
        </td>
    </tr>
	<tr>
        <td colspan="2" style="text-align:center; height:50px;"><p id = "copyright">© 2014 Soushunan. All rights reserved.</p></td>
    </tr>
</table>

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
					j("#bottom").css("height",height_B);
				}
				else{
					j("#bottom").css("height",218);
					}
			}
			else{
				j("#bottom").css("height",218);
			}
			j("#left-img").css("height",h + 6);
			//j("#copyright").css("margin-left",Math.floor((400)/2)
    	});
</script>
<?php get_footer(); ?>
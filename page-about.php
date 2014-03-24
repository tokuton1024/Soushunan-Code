<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//jp" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        	<!--img src="<?php bloginfo('template_url');?>/title/<?php the_title(); ?>.png" style="height:52px;padding-top:55px;padding-left:9px;" class ="image-title"-->
        </div>
        	<div style="clear:both;height:14px;"></div>
        	<div style="height:277px;width:357px;padding-left:17px;padding-right:26px;text-align:left;">
			<?php while ( have_posts()) : the_post();?>
			<?php the_content();?>
		<?php endwhile; ?></div>
        </td>
        <td><div><!--a href = "<?php home_url()?>/jp/"><img style="height:61px;float:right;margin-right:7px;" src="<?php bloginfo('template_url');?>/title/logo.png" class="image-logo"></a--></div>
        	<div style="clear:both;height:17px;"></div>
        	<div><img style="height:320px;" src="<?php bloginfo('template_url');?>/img/<?php the_title(); ?>.png"></div>
            <div style="float:left;"><a href = "<?php home_url()?>/jp/building"><img src="<?php bloginfo('template_url');?>/page/<?php the_title(); ?>/LinkAboutTheBuilding.png"></a></div>
        </td>
    </tr>
	<tr>
        <td id = "bottom" colspan="2" style="text-align:center;"><p id = "copyright" style = "position:absolute; bottom:0; padding-left:310px;">© 2013 Soushunan. All rights reserved.</p></td>
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
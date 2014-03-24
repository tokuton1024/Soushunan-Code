<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php get_header(); ?>
<?php
$cat = get_the_category();

?>
<body>

<table id = "ALL">
	<tr>
    	<td id = "left" rowspan="3" style="width_L"></td>
    	<td rowspan="3" style="width:130px;"><img id="left-img" src="<?php bloginfo('template_url');?>/img/top-page-Left.png" style="width:130px;"></td>
        <td id = "top" colspan="2"><?php include('global_menu.php'); ?></td>
        <td id = "right" rowspan="3" style="width:24px;"></td>
    </tr>
	<tr id = "middle" style="height:398px;">
			<td style = "text-align:left;">
            	<div class="ImageTitle">
                	<img src="<?php bloginfo('template_url');?>/title/<?php echo $cat[0]->name; ?>.png" class ="image-title">
                </div>
                <ul id="<?php the_title(); ?>">
                <?php if(have_posts()):while(have_posts()): the_post(); ?>
                <p class="date"><?php echo get_post_time('y/m/d'); ?>　<?php the_title(); ?></p>  
              <li class="clearfix">
                <?php the_content(); ?>
                </li>
                <?php endwhile; endif; ?>
                </ul>
                <p>
                	<br/>合わせて<a href="https://www.facebook.com/soushunan">箏春庵facebook</a>/<a href = "http://20gen.big-site.com/">箏演奏者島崎春美HP・ブログ</a>も<br/>ご覧ください
                </p>
				<p>
                	箏春庵のブログは<a href="<?php bloginfo('url'); ?>/category/blog">コチラ</a>
                </p>
	    	</td></div>
        </td>
        <td>
        	<div style="clear:both;height:17px;"></div>
        	<div><img style="height:320px;" src="<?php bloginfo('template_url');?>/img/<?php echo $cat[0]->name; ?>.png"></div>
        </td>
    </tr>
	<tr>
        <td id = "bottom" colspan="2" style="text-align:center;"><p id = "copyright" style = "position:absolute; bottom:0; padding-left:310px;">© 2014 Soushunan. All rights reserved.</p></td>
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
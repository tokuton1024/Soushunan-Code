<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php get_header(); ?>
<body>
    <table>
        <tr>
            <td rowspan="5">
		<img id="left-img" class="left-img" src="<?php bloginfo('template_url');?>/img/top-page-Left.png" style="height:100%;">
	    </td>
            <td style="height:111px;">
            </td>
	    <td  rowspan="3" style = "text-align:left;">
                <ul id="<?php the_title(); ?>">	
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
	<?php $cat  = get_the_category();?> 
	   <?php $cat = $cat[0]; $category = $cat->cat_name;?>
		<?php if($category=='blog'){?>
                <p class="date"><?php echo the_date("Y年n月j日 l"); ?></p>
		<p class="title"><?php the_title(); ?></p>
		<HR class="archive">
                <li class="clearfix">
        		<?php the_content(); ?>
                </li>
		
		<br />
		<?php }?>
	<?php endwhile; endif; ?>
		
                </ul>

	    </td>
	    <td style='width:5%' rowspan="4">
	    </td>
        </tr>
        <tr>
            <td id="Middle" class="Middle"  style = "text-align:left;">
		<a href = "<?php bloginfo('url');?>/jp/">
		<img src="<?php bloginfo('template_url');?>/title/logo.png" class ="image-title">
	    	</a>
		<br /><br />
		<ul class="archive-list">
			<?php wp_get_archives('format=custom&before=<li class="archive-item">&after=</li>'); ?>
		</ul>
	    </td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td colspan="2"><p class="footer">© 2013 Soushunan. All rights reserved.</p></td>
        </tr>
    </table>
<br/>
<script type="text/javascript">
	var j = jQuery.noConflict();
	j(function() {
    		var w = window.parent.screen.width;
			if (w >1024){
			var width_L = 130 + Math.floor((w - 1024)*1/7);
			var width_M = 150 + Math.floor((w - 1024)*1/7);
			var width_R = 650 + Math.floor((w - 1024)*4.5/7);
			}
			else{
			var width_L = 130
			var width_M = 300
			var width_R = 650
			}
			j("#left-img").css("width",width_L);
			j("#Middle").css("width",width_M);
    	});
</script>
<?php get_footer(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php get_header(); ?>
<?php
$cat = get_the_category();

?>
<body>
    <table>
        <tr>
            <td rowspan="5" class="left">
		<img src="<?php bloginfo('template_url');?>/img/top-page-Left.png" class="left">
	    </td>
            <td colspan="2">
            	<img src="<?php bloginfo('template_url');?>/img/right1.png">
            </td>
        </tr>
        <tr>
            <td colspan="1">
            	<div class="image-title">
					<img src="<?php bloginfo('template_url');?>/title/<?php echo $cat[0]->name; ?>.png" style = "width:100%;" class ="image-title">
                </div>
	    	</td>
            <td class = "logo">
		<a href = "<?php home_url()?>/">
			<img src="<?php bloginfo('template_url');?>/title/logo.png" class="image-logo">
		</a>
	    </td>
        </tr>
        <tr>
            <td style = "text-align:left;">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
                <ul id="<?php the_title(); ?>">
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <p class="date"><?php echo get_post_time('y/m/d'); ?>　<?php the_title(); ?></p>  
              <li class="clearfix">
                <?php the_content(); ?>
                </li>
                <?php endwhile; endif; ?>
                </ul>
	    </td>
            <td style = "width:70%;" RowSpan="2">
<img src="<?php bloginfo('template_url');?>/img/<?php echo $cat[0]->name; ?>.png">
		</td>
        </tr>
	<tr>
		<td class="AunerInfo">
			<p><br/>合わせて<a href="https://www.facebook.com/soushunan">箏春庵facebook</a>/<a href = "http://20gen.big-site.com/">箏演奏者島崎春美HP・ブログ</a>も<br/>ご覧ください<p>
			<p>箏春庵のブログは<a href="">コチラ</a></p>
		</td>
	</tr>
        <tr>
            <td colspan="2"><p class="footer">© 2014 Soushunan. All rights reserved.</p></td>
        </tr>
    </table>
<br/>

<?php get_footer(); ?>
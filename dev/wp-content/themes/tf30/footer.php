<!-- footer-menu -->
<div id="footer-menu">
		<div class="inner">
			
			<?php if (is_home() || is_front_page() ) : //トップページではロゴをh1に、それ以外のページではdivに。 ?>
			<h1 class="footer-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1><!-- /header-logo -->
			<?php else : ?>
			<div class="footer-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></div><!-- /header-logo -->
			<?php endif; ?>
			<div class="footer-sub"><?php bloginfo('description'); //ブログのdescriptionを表示 ?></div><!-- /header-sub -->

			<nav class="footer-nav">
			<?php
			wp_nav_menu(
			//.footer-listを置き換えて、PC用メニューを動的に表示する
			array(
				'depth' => 1,
				'theme_location' => 'global', //グローバルメニューをここに表示すると指定
				'container' => 'false',
				'menu_class' => 'footer-list',
			)
			);
			?>
			</nav>

		</div><!-- /inner -->
	</div><!-- /footer-menu -->



	<!-- footer -->
	<footer id="footer">
		<div class="inner">
			<div class="copy">&copy; daily-trial WordPress theme All rights reserved.</div><!-- /copy -->
			<div class="by">Presented by <a href="https://tokyofreelance.jp/" rel="noopener" target="_blank">東京フリーランス</a>
			</div><!-- /by -->

		</div><!-- /inner -->
	</footer><!-- /footer -->

	<!-- ここからが追記部分 -->
	<?php if(is_single() ) : ?>
	<!-- footer-sns -->
	<div class="footer-sns">
		<div class="inner">
		<div class="footer-sns-head">この記事をシェアする</div><!-- /footer-sns-head -->
			<nav class="footer-sns-buttons">
				<ul>
					<li><a class="m_twitter" href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" rel="nofollow" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/icon-twitter.png' ); ?>" alt=""></a></li>
					<li><a class="m_facebook" href="https://www.facebook.com/share.php?u=<?php the_permalink(); ?>" rel="nofollow" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/icon-facebook.png' ); ?>" alt=""></a></li>
					<li><a class="m_hatena" href="https://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" rel="nofollow" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/icon-hatena.png' ); ?>" alt=""></a></li>
					<li><a class="m_line" href="https://social-plugins.line.me/lineit/share?url=<?php the_permalink(); ?>" rel="nofollow" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/icon-line.png' ); ?>" alt=""></a></li>
					<li><a class="m_pocket" href="https://getpocket.com/edit?url=<?php the_permalink(); ?>" rel="nofollow" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/icon-pocket.png' ); ?>" alt=""></a></li>
				</ul>
			</nav><!-- /footer-sns-buttons -->
		</div><!-- /inner -->
	</div><!-- /footer-sns -->
	<?php endif; ?>

	<div class="floating">
		<a href="#"><i class="fas fa-chevron-up"></i></a>
	</div>

	<?php wp_footer(); ?>

</body>

</html>
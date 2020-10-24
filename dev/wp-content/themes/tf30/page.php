

    <!-- header-navまでをget_header()に置き換える -->
    <?php get_header(); ?>

	<!-- content -->
	<div id="content" class="m_one">
		<div class="inner">

			<!-- primary -->
			<main id="primary">

            <?php if ( function_exists( 'bcn_display' ) ) : ?>
				<!-- breadcrumb -->
				<div class="breadcrumb">
                <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 ?>
                </div><!-- /breadcrumb -->
            <?php endif; ?>

            <?php
            if ( have_posts() ) :
            while ( have_posts() ) :
            the_post();
            ?>

				<!-- entry -->
				<article <?php post_class( array( 'entry' ) ); ?>>

					<!-- entry-header -->
					<div class="entry-header">
                    <?php
                    // カテゴリー１つ目の名前を表示
                    $category = get_the_category();
                    if ( $category[0] ) : 
                    ?>
                    <div class="entry-label"><a href="<?php echo esc_url( get_category_link( $category[0]->term_id ) ); ?>"><?php echo $category[0]->cat_name; ?></a></div><!-- /entry-item-tag -->
                    <?php endif; ?>
                    <h1 class="entry-title"><?php the_title();  ?></h1><!-- /entry-title -->
						

						<!-- entry-img -->
						<div class="entry-img">
                            <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'large' );
                            }
                            ?>
						</div><!-- /entry-img -->
					</div><!-- /entry-header -->

					<!-- entry-body -->
					<div class="entry-body">
                    <?php
                    //本文の表示
                    the_content();
                    ?>

                    <?php
                    //改ページを有効にするための記述
                    wp_link_pages(
                        array(
                            'before' => '<nav class="entry-links">',
                            'after' => '</nav>',
                            'link_before' => '',
                            'link_after' => '',
                            'next_or_number' => '',
                            'separator' => '',
                        )
                        );
                    ?>
                    <div class="entry-btn"><a class="btn" href="">テキストテキスト</a></div><!-- /entry-btn -->
					</div><!-- /entry-body -->
                </article> <!-- /entry -->
                
            <?php
            endwhile;
            endif;
            ?>

			</main><!-- /primary -->

		</div><!-- /inner -->
	</div><!-- /content -->

	<!-- footer-menuから下をget_footer()に置き換える -->
    <?php get_footer(); ?>
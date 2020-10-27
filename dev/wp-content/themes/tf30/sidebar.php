<!-- secondary -->
<aside id="secondary">

<!-- widget_custom_html -->
<div class="widget widget_text widget_custom_html">
    <div class="widget-title">プロフィール</div>

        <div class="wprofile">
            <div class="wprofile-img"><img src="<?php echo get_template_directory_uri(); ?>/img/profile.png" alt=""></div>
                <div class="wprofile-content">
                    <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
            <!-- /wprofile-content -->
                <nav class="wprofile-sns">
                    <div class="wprofile-sns-item m_twitter"><a href="" rel="noopener noreferrer" target="_blank"><i class="fab fa-twitter"></i></a></div>
                    <div class="wprofile-sns-item m_facebook"><a href="" rel="noopener noreferrer" target="_blank"><i class="fab fa-facebook-f"></i></a></div>
                    <div class="wprofile-sns-item m_instagram"><a href="" rel="noopener noreferrer" target="_blank"><i class="fab fa-instagram"></i></a></div>
                </nav>
        </div><!-- /wprofile -->
</div><!-- /widget_custom_html -->

<!-- widget_search -->
<div class="widget widget_search">
    <div class="widget-title">検索</div>
    <!-- search-form -->
    <form method="get" class="search-form" action="<?php echo home_url('/'); ?>">
        <input type="search" class="search-field" value="" placeholder="キーワード" name="s" id="s">
        <button type="submit" class="search-submit"><i class="fas fa-search"></i></button>
    </form><!-- /search-form -->
</div><!-- /widget_search -->

<!-- <?php get_search_form(); ?> でもデフォルトの検索フォームを表示できる -->

</aside><!-- /secondary -->

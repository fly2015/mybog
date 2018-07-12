<div id="main" class="wrapper">
    <div id="primary" class="site-content">
        <div id="content" role="main">
            <?php
            $items = $results['item'];
            $infos = $results['info'];
            foreach ($items as $item) {
                ?>
                <article id="" class="">
                    <header class="entry-header">
                        <h2 class="entry-title">
                            <a href="index.php?controller=article&action=detail&slug=<?php echo $item->getSlug(); ?>" title="#" rel="bookmark"><?php echo $item->getName(); ?></a>
                        </h2>
                    </header>
                    <!-- .entry-header -->
                    <div class="entry-summary">
                        <!-- Ico nic One home page thumbnail with custom excerpt -->
                        <div class="excerpt-thumb">
                            <a href="#html" title="" rel="bookmark">
                                <img width="200" height="140" src="<?php echo IMAGE_URL . $item->getImage(); ?>" 
                                     class="alignleft wp-post-image" alt="" srcset="<?php echo IMAGE_URL . $item->getImage(); ?> 200w, <?php echo IMAGE_URL . $item->getImage(); ?> 60w" sizes="(max-width: 200px) 100vw, 200px" />
                            </a>
                        </div>
                        <p><?php echo $item->getSummary(); ?>… <span class="read-more"><a href="#">Read More &raquo;</a></span></p>
                    </div>
                    <!-- .entry-summary -->
                    <footer class="entry-meta">
                        <div class="categories"><a href="#" rel="category tag"><?php echo $item->getCategory_name(); ?></a></div>
                        <div class="tags"></div>
                        <div class ="io-home-author-small" >
                            <div class="io-home-avatar">
                                <!-- .author-avatar -->
                                <img alt='' src='<?php echo THEME_URL; ?>/images/icon.jpeg' srcset='<?php echo THEME_URL; ?>/images/icon.jpeg 2x' class='avatar avatar-24 photo' height='24' width='24' />					
                                <div class="io-home-author-name"><span class="vcard author"><span class="fn">Sâu rộng hơn mỗi ngày.</span> </span></div>
                                <div style="display: block; clear: both;"></div>
                            </div>
                            <!-- .author-name-home -->	
                        </div>
                        <div class="clear"></div>
                    </footer>
                    <!-- .entry-meta -->
                </article>
                <!-- #post -->
            <?php } ?>
            <div class="themonic-pagination">
                <div class="pagination">
                    <ul>
                        <?php
                        $total_pages = $infos['$total_pages'];
                        
                        // Display First page index
                        if ($page >= 5) {
                            echo '<li><a href="' . SITE_URL . '/index.php">« First</a></li>';
                        }
                        // Display previous page
                        if ($page > 1) {
                            echo '<li><a href="' . SITE_URL . '/index.php?page=' . ($page - 1) . '" class="inactive">‹ Previous</a></li>';
                        }
                        
                        // Display 3 page previous to current page.
                        for ($i = ($page - 3); $i <= $page - 1; $i++) {
                            if ($i > 0) {
                                echo '<li><a href="' . SITE_URL . '/index.php?page=' . $i . '" class="inactive">' . $i . '</a></li>';
                            }
                        }
                        // Display current page
                        echo '<li class="current"><span class="currenttext">' . $page . '</span></li>';
                        
                        // Display 3 page next to current page.
                        if ($page <= $total_pages) {
                            for ($j = ($page + 1); $j <= ($page + 3); $j++) {
                                if ($j <= $total_pages) {
                                    echo '<li><a href="' . SITE_URL . '/index.php?page=' . $j . '" class="inactive">' . $j . '</a></li>';
                                }
                            }
                        }

                        
                        // Display next page
                        if ($page < $total_pages) {
                            echo '<li><a href="' . SITE_URL . '/index.php?page=' . ($page + 1) . '" class="inactive">Next ›</a></li>';
                        }
                        
                        //Display Last page index
                        if (($page + 3) <= $total_pages) {
                                echo '<a class="inactive" href="' . SITE_URL . '/index.php?page=' . $total_pages . '">Last »</a>';
                            }
                        ?>
                        <!--    
                            <li><a href="http://www.tonybuoisangblog.com/">« First</a></li>
                            <li><a href="http://www.tonybuoisangblog.com/page/5" class="inactive">‹ Previous</a></li>
                            <li><a href="http://www.tonybuoisangblog.com/page/3" class="inactive">3</a></li>
                            <li><a href="http://www.tonybuoisangblog.com/page/4" class="inactive">4</a></li>
                            <li><a href="http://www.tonybuoisangblog.com/page/5" class="inactive">5</a></li>
                            <li class="current"><span class="currenttext">6</span></li>
                            <li><a href="http://www.tonybuoisangblog.com/page/7" class="inactive">7</a></li>
                            <li><a href="http://www.tonybuoisangblog.com/page/8" class="inactive">8</a></li>
                            <li><a href="http://www.tonybuoisangblog.com/page/9" class="inactive">9</a></li>
                            <li><a href="http://www.tonybuoisangblog.com/page/7" class="inactive">Next ›</a></li>
                            <a class="inactive" href="http://www.tonybuoisangblog.com/page/27">Last »</a>
                        -->
                    </ul>
                </div>
            </div>
            <div style="display: block; clear: both;"></div>
        </div>
        <!-- #content -->
    </div>
    <!-- #primary -->
    <?php include THEME_ROOT . '/inc/sidebar.php'; ?>
</div>
<!-- #main .wrapper -->
<?php
/**
 * Output default Featured articles block.
 * 
 * @since 0.9.0
 * 
 */
?>

<section id="articles-block">
   
    <div id="articles-container" class="container-fluid">
        
        <div class="row">
            
            <div class="col-sm-12">

                <div id="articles" class="container">

                    <div class="row">
                        
                        <?php 
                        $article_count = 0;
                        foreach ( $options[ 'articles' ] as $article ) :
                            if ( $article != '' && $article != 'none' ) :
                                $article_count++;
                            endif;
                        endforeach; 
                        ?>
                        
                        <?php if ( ! empty( $options[ 'articles' ] ) ) : ?>
                        
                            <?php $has_articles = false; ?>
                        
                            <?php foreach ( $options[ 'articles' ] as $article_ID ) : ?>
                        
                                <?php if ( $article_ID != '' && $article_ID != 'none' ) : ?>
                        
                                    <?php $has_articles = true; ?>
                                    <?php $the_article = get_post( $article_ID ); ?>

                                    <div class="col-sm-<?php echo 12 / $article_count; ?>">

                                        <div class="article-body">

                                            <h4><a href="<?php echo esc_url( get_permalink( $the_article->ID ) ); ?>"><?php echo esc_html( $the_article->post_title ); ?></a></h4>
                                            
                                            <p>
                                                <?php echo esc_html( $the_article->post_content ); ?>
                                            </p>

                                        </div>

                                    </div>

                                <?php endif; ?>
                        
                            <?php endforeach; ?>
                        
                            <?php if ( ! $has_articles ) : ?>
                        
                                <div id="no-articles" class="col-sm-12">
                                
                                    <h2><?php _e( 'There are no articles to display.', 'felix-landing-page') ?></h2>

                                </div>
                        
                            <?php endif; ?>
                        
                        <?php else : ?>
                        
                            <div id="no-articles" class="col-sm-12">
                                
                                <h2><?php _e( 'There are no articles to display.', 'felix-landing-page') ?></h2>
                                
                            </div>
                        
                        <?php endif; ?>
                        
                    </div>

                </div>
        
            </div>
    
        </div>
        
    </div>
    
</section>
                    
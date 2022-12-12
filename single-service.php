<?php get_header(); ?>

<?php while (have_posts()) : the_post(); 
    $image_id = get_post_thumbnail_id();
    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
    $image_title = get_the_title($image_id);
?>

        <div itemscope itemtype="http://schema.org/Product" class="_container">
            <section class="page-header">
                <?php if ( function_exists( 'topland_breadcrumbs' ) ) topland_breadcrumbs(); ?>  
                <h1 itemprop="name" class="page-header__title"><?php the_title(); ?></h1>
            </section>

            <section  class="page__service-article">
                <div class="service-article__container _container">
                    <div class="service-article__body <?php post_class(); ?>">
                        <img loading="lazy" itemprop="image" class="service-article_img" src="<?php the_post_thumbnail_url() ?>" alt="<?php echo $image_alt ?>" title="<?php echo $image_title ?>">
                        <div itemprop="description" class="service-article_text">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </section>                

            <!-- SchemaOrg -->
            <div itemprop="offers" itemscope itemtype="https://schema.org/AggregateOffer">
                <meta content="<?php echo get_post_meta($post->ID, 'low_price', 1); ?>" itemprop="lowPrice"/>
                <meta content="RUR" itemprop="priceCurrency"/>
            </div>
        </div>

        <section class="page__service-selection service-selection">
                    <div class="service-selection__container _container">
                        <div class="service-selection__body">                        
                            <div class="service-selection__lightning_left">
                                <img class="lightning_left" loading="lazy" src="<?php echo get_template_directory_uri()?>/static/img/Light_left.svg" alt="lightning left">
                            </div>
                            <div class="service-selection__content">         
                                <div class="service-selection__title">
                                    <h2 class="_h2 service-selection__title_h2 section_title">Don't know which service to choose?</h2>
                                </div>
                                <div class="service-selection__subtitle toplend">Write to us. We will tell you what service will bring your company more profit</div>
                                <div class="page_contacts-form contact_form-grid">
                                    <?php echo do_shortcode('[contact-form-7 id="1968" title="Контактная форма 1"]'); ?>
                                </div>
                                <!-- <div class="service-selection__button">
                                    <a class="service-selection__href" href="https://wa.me/79934536307">Написать в What’sApp</a>
                                </div> -->
                            </div>
                            <div class="service-selection__lightning_right">
                                <img loading="lazy" src="<?php echo get_template_directory_uri()?>/static/img/Light_right.svg" alt="lightning right">
                            </div>                        
                        </div>
                    </div>
        </section>

<?php endwhile; ?>

<?php get_footer(); ?>
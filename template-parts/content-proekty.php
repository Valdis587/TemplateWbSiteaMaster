<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */
global $websitesmaster;
$value = redux_post_meta( 'websitesmaster', 'proekty-dop' );
?>
<div class="swiper-slide job__item cart-item back-gr-v">
    <div class="bg-bl">
        <div class="job__left">
            <div class="job__img">
                <a href="<?php the_permalink(); ?>">
                    <?php
                    $id = get_post_thumbnail_id();
                    $main=wp_get_attachment_image_src( $id, 'job' );
                    ?>
                    <img src="<?php echo $main[0]; ?>" alt="<?php bloginfo('description') ?>"></a>
            </div>
        </div>
        <div class="job__right">
            <a href="<?php the_permalink(); ?>"><p class="job__title"><?php the_title(''); ?></p></a>
            <p class="job__name"><?php echo $value['title-proekty']; ?></p>
            <p class="job__price"><?php echo $value['proekty-price']; ?><i class="icon-ruble-sign"></i></p>
            <div class="job__button">
                <noindex>
                <a href="<?php the_permalink(); ?>" class="job__but but-animete site-button">Далее...</a>
                </noindex>
            </div>
        </div>
    </div>
</div>
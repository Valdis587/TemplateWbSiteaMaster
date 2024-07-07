<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */
global $websitesmaster;
?>
<section class="blockText ">
    <h4 class="site-head-title"><?php echo $websitesmaster['raz-home-title']; ?></h4>
    <p class="site-head-decription"><?php echo $websitesmaster['raz-home-desc']; ?></p>
    <div class="blockText__content container">
        <div id="blockText__left" class="blockText__left back-gr">
            <div class="bg-bl blockText__content-wrapper">
                <div class="blockText__content-text">
                    <p><?php echo $websitesmaster['raz-home-left']; ?></p>
                    <p><?php echo $websitesmaster['raz-home-left2']; ?></p>
                    <p><?php echo $websitesmaster['raz-home-left3']; ?></p>
                </div>
                <div class="blockText__content-button">
                    <div class="blockText__logo rot-item">
                        <?php get_template_part( 'template-parts/content', 'logo' ); ?>
                    </div>
                    <div class="blockText__but-wrapper">
                        <noindex>
                        <a target="_blank" rel="nofollow" href="https://t.me/<?php echo $websitesmaster['tg']; ?>" class="header__but but-animete site-button"><i class="icon-telegram-plane"></i> Сделать заказ</a>
                        </noindex>
                    </div>
                </div>
            </div>
        </div>
        <div class="blockText__right back-gr">
            <div class="bg-bl blockText__content-wrapper">
                <div class="blockText__content-text">
                    <p><?php echo $websitesmaster['raz-home-right']; ?></p>
                    <p><?php echo $websitesmaster['raz-home-right2']; ?></p>
                    <p><?php echo $websitesmaster['raz-home-right3']; ?></p>
                    <p><?php echo $websitesmaster['raz-home-right4']; ?></p>
                </div>
                <div class="blockText__content-button">
                    <div class="blockText__logo rot-item">
                        <?php get_template_part( 'template-parts/content', 'logo' ); ?>
                    </div>
                    <div class="blockText__but-wrapper">
                        <noindex>
                        <a target="_blank" rel="nofollow" href="https://t.me/<?php echo $websitesmaster['tg']; ?>" class="header__but but-animete site-button"><i class="icon-telegram-plane"></i> Сделать заказ</a>
                        </noindex>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

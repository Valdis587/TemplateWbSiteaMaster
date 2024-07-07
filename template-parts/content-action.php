<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebSitesMaster
 */
global $websitesmaster;
if($websitesmaster['action-on']) {
?>
<div id="action" class="action">
    <div class="action__item container">
        <div class="action__body back-gr action__show">
            <button aria-label="action_close" class="action__close"><i class="icon-plus"></i></button>
            <div class="action__content">
                <div class="action__left">
                    <canvas data-src="<?php echo get_template_directory_uri() ?>/images/robot/r2-dance/r2-dance.gltf" id="actions-anim"></canvas>
                </div>
                <div id="action__right" class="action__right">
                    <h6 class="action__title"><?php echo $websitesmaster['action-title']; ?></h6>
                    <div class="action__texts">
                        <p class="action__desc"><?php echo $websitesmaster['action-text']; ?> </p>
                        <div class="action__price-wrapp">
                            <p class="action__price-st"><?php echo $websitesmaster['action-st-price']; ?> <i class="icon-ruble-sign"></i></p>
                            <p class="action__price"><?php echo $websitesmaster['action-price']; ?> <i class="icon-ruble-sign"></i></p>
                        </div>
                    </div>
                    <p class="action__end"><?php echo $websitesmaster['action-end']; ?></p>
                    <div id="countdown" class="countdown">
                        <div class="countdown-number">
                            <span class="days countdown-time"></span>
                            <span class="countdown-text">Дни</span>
                        </div>
                        <div class="countdown-number">
                            <span class="hours countdown-time"></span>
                            <span class="countdown-text">Часы</span>
                        </div>
                        <div class="countdown-number">
                            <span class="minutes countdown-time"></span>
                            <span class="countdown-text">Минуты</span>
                        </div>
                        <div class="countdown-number">
                            <span class="seconds countdown-time"></span>
                            <span class="countdown-text">Секунды</span>
                        </div>
                    </div>
                    <div class="action__button">
                        <noindex>
                        <a target="_blank" rel="nofollow" href="https://t.me/<?php echo $websitesmaster['tg']; ?>" class="action__but site-button but-animete"><i class="icon-telegram-plane"></i>Сделать заказ</a>
                        </noindex>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--popup-->
<?php }
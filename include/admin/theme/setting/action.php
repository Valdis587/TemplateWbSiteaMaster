<?php
/**
 * Redux Framework switch config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Акции', 'your-textdomain-here' ),
        'id'         => 'action',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'action-on',
                'type'     => 'switch',
                'title'    => esc_html__( 'Акции Вкл/Выкл', 'your-textdomain-here' ),
                'default'  => true,
            ),
            array(
                'id'       => 'action-title',
                'type'     => 'text',
                'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
                'default'  => 'Акция',
            ),
            array(
                'id'       => 'action-text',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Текст', 'your-textdomain-here' ),
                'default'  => 'Закажите разработку одностраничного сайта с формой обратной связи за: ',
            ),
            array(
                'id'       => 'action-st-price',
                'type'     => 'text',
                'title'    => esc_html__( 'Старая цена', 'your-textdomain-here' ),
                'default'  => '7000',
            ),
            array(
                'id'       => 'action-price',
                'type'     => 'text',
                'title'    => esc_html__( 'Новая цена', 'your-textdomain-here' ),
                'default'  => '6000',
            ),
            array(
                'id'       => 'action-end',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Текст 2', 'your-textdomain-here' ),
                'default'  => 'До конца акции осталось: ',
            ),
        ),
    )
);
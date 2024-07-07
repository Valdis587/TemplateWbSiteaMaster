<?php
/**
 * Redux Framework media config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Разработка сайтов', 'your-textdomain-here' ),
        'id'         => 'raz-home',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'raz-home-title',
                'type'     => 'text',
                'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
                'default'  => 'Разработка сайтов',
            ),
            array(
                'id'       => 'raz-home-desc',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
                'default'  => 'Хотите расширить сферу деятельности, улучшить имидж и получить новых клиентов? Тогда вам нужен современный и адаптивный сайт.',
            ),
            array(
                'id'         => 'raz-home-left',
                'type'       => 'textarea',
                'title'      => esc_html__( 'Левый блок', 'your-textdomain-here' ),
            ),
            array(
                'id'         => 'raz-home-left2',
                'type'       => 'textarea',
                'title'      => esc_html__( 'Левый блок 2', 'your-textdomain-here' ),
            ),
            array(
                'id'         => 'raz-home-left3',
                'type'       => 'textarea',
                'title'      => esc_html__( 'Левый блок 3', 'your-textdomain-here' ),
            ),
            array(
                'id'         => 'raz-home-right',
                'type'       => 'textarea',
                'title'      => esc_html__( 'Правый блок', 'your-textdomain-here' ),
            ),
            array(
                'id'         => 'raz-home-right2',
                'type'       => 'textarea',
                'title'      => esc_html__( 'Правый блок 2', 'your-textdomain-here' ),
            ),
            array(
                'id'         => 'raz-home-right3',
                'type'       => 'textarea',
                'title'      => esc_html__( 'Правый блок 3', 'your-textdomain-here' ),
            ),
            array(
                'id'         => 'raz-home-right4',
                'type'       => 'textarea',
                'title'      => esc_html__( 'Правый блок 4', 'your-textdomain-here' ),
            ),
        ),
    )
);
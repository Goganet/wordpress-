<?php

if(!defined('ABSPATH')){
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', __( 'Параметри Сайту' ) )
        ->add_tab( 'Загальні налаштування', [
            Field::make( 'image', 'site_logo', 'Логотип' ),
            Field::make( 'image', 'footer_logo', 'Логотип Футер' ),
            ] )
        ->add_tab( 'Контакти', [
            Field::make( 'text', 'site_phone', 'Номер телефону' ),
            Field::make( 'text', 'site_email', 'Email' ),
            Field::make( 'textarea', 'site_adress', 'Адрес' ),
            Field::make( 'text', 'site_facebook', 'Facebook' ),
            Field::make( 'text', 'site_instagram', 'Instagram' ),
            Field::make( 'text', 'site_viber', 'Viber' ),
            Field::make( 'text', 'site_whatsapp', 'WhatsApp' ),
            ] );
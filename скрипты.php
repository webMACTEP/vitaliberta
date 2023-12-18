<?php
/*
Template Name: Шаблон для
*/

/* функция запрса картинки */

function get_image($name)
{
   return get_template_directory_uri() . '/img/' . $name;
}
?>

li:nth-child(odd)
li:nth-child(even)

<!-- запрс картинки -->
<?php echo get_image('') ?>





Text
<?php echo $attributes['control_name']; ?>

img
<?php echo esc_url($attributes['control_name']['url']); ?>

Link
<?php echo esc_url($attributes['control_name']); ?>

Repeater
<?php foreach ($attributes['control_name'] as $inner) : ?>
   <?php echo $inner['control_name']; ?>
<?php endforeach; ?>

checkbox
<?php if ($attributes['control_name']) : ?>

<?php else : ?>
<?php endif; ?>




Plang

<?php pll_e('shablon', 'mytheme'); ?>Посмотреть шаблон документа
<?php pll_e('f-title', 'mytheme'); ?>Наши услуги
<?php pll_e('min', 'mytheme'); ?>мин. на чтение
<?php pll_e('Toknow', 'mytheme'); ?>Узнать больше о требованиях к финансовой отчетности
<?php pll_e('Look', 'mytheme'); ?>Посмотреть
<?php pll_e('Ask', 'mytheme'); ?>Задать вопрос
<?php pll_e('Pdfmail', 'mytheme'); ?>Оставьте свой Email
<?php pll_e('Pdf', 'mytheme'); ?>Получить PDF файл
<?php pll_e('Specialist', 'mytheme'); ?>Получите консультацию специалиста
<?php pll_e('Sendmail', 'mytheme'); ?>Отправить письмо
<?php pll_e('Submit', 'mytheme'); ?>Отправить
<?php pll_e('Read', 'mytheme'); ?>Прочитать рекомендательное письмо полностью
<?php pll_e('Leaf', 'mytheme'); ?>Листайте, чтобы<br>увидеть все выгоды
<?php pll_e('View', 'mytheme'); ?>Просмотреть подробнее
<?php pll_e('Hide', 'mytheme'); ?>Скрыть
<?php pll_e('Consultation', 'mytheme'); ?>Бесплатная консультация
<?php pll_e('More', 'mytheme'); ?>Узнать подробнее
<?php pll_e('Request', 'mytheme'); ?>Оставьте заявку
<?php pll_e('Mainform', 'mytheme'); ?>Закажите бесплатную консультацию специалиста
<?php pll_e('Callback', 'mytheme'); ?>Обратный звонок
<?php pll_e('Name', 'mytheme'); ?>Ваше имя
<?php pll_e('Email', 'mytheme'); ?>Email
<?php pll_e('Tel', 'mytheme'); ?>Телефонный номер
<?php pll_e('Subject', 'mytheme'); ?>Тема
<?php pll_e('Yourmessage', 'mytheme'); ?>Сообщение
<?php pll_e('Submit', 'mytheme'); ?>Отправить
<?php pll_e('Subscribe', 'mytheme'); ?>Подписаться
<?php pll_e('Subscribe to news', 'mytheme'); ?>


<?php pll_e('f-01'); ?>Регистрация компаний в Гонконге
<?php pll_e('f-02'); ?>Апостиль документов в Гонконге
<?php pll_e('f-03'); ?>Консульская легализация документов в Гонконге
<?php pll_e('f-04'); ?>Подготовка годовой финансовой отчетности
<?php pll_e('f-05'); ?>Снятие с регистрационного учета компаний в Гонконге
<?php pll_e('f-06'); ?>Ежегодное продление регистрации бизнеса в Гонконге. Корпоративный секретарский сервис. Юридический адрес.
<?php pll_e('f-07'); ?>Внесение изменений в регистрационные данные гонконгских компаний. Смена акционеров или ввод новых. Смена директоров.
<?php pll_e('f-08'); ?>Проверка контрагентов в Гонконге
<?php pll_e('f-09'); ?>Виза для предпринимателей
<?php pll_e('f-010'); ?>Регистрация товарного знака в Гонконге
<?php pll_e('f-011'); ?>Пользовательское соглашение
<?php pll_e('f-012'); ?>Закажите бесплатную консультацию специалиста
<?php pll_e('f-013'); ?>Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь с Политикой конфиденциальности персональных данных посетителей сайта в информационно-телекоммуникационной сети "Интернет"
<?php pll_e('f-014'); ?>Задайте свой вопрос
<?php pll_e('f-015'); ?>© All Rights Reserved by Vita Liberta Limited (Hong Kong company No. 2888240). Copyright 2020

<?php pll_e('fc-01'); ?>Офис в Гонконге
<?php pll_e('fc-02'); ?>Office room 77, 7/F, Woon Lee Commercial Building, 7-9 Austin Ave, Tsim Sha Tsui, Kowloon, Hong Kong
<?php pll_e('fc-03'); ?><a class="tel" href="tel:+85268416177">+852 6841 6177</a>
<?php pll_e('fc-04'); ?>Офис продаж в России
<?php pll_e('fc-05'); ?>Россия, г. Москва, ул. Космонавта Волкова, 20, офис 515
<?php pll_e('fc-06'); ?><a class="tel" href="tel:+74991108055">+7-499-110-80-55</a>
<?php pll_e('fc-07'); ?>Офис продаж в Казахстане
<?php pll_e('fc-08'); ?>Республика Казахстан, г. Нур-Султан, проспект Сарыарка, 6 БЦ "Арман", офис 326
<?php pll_e('fc-09'); ?><a class="tel" href="tel:+77172725167">+7-7172-725167</a>








<!-- /* массив материалов*/ -->
<div class="swiper-wrapper">
   <?php
   $pc = new WP_Query('post_type=allvideos'); ?>
   <?php while ($pc->have_posts()) : $pc->the_post(); ?>

      <div class="swiper-slide">
         <div class="image"><?php the_post_thumbnail(array()); ?></div>
         <a href="<?php the_permalink(); ?>"></a>
         <a href="<?php the_permalink(); ?>">
            <h2><?php the_title(); ?></h2>
         </a>
      </div>

   <?php endwhile; ?>
</div>


<?php echo fh_get_image('avatar-r.jpg') ?>

ACF

<?php the_field('форма'); ?>


Ссылка на главную

<?php echo get_home_url(); ?>

вывод анонса (отрывок)

<?php the_excerpt(); ?>

вывод шорткода

<?php echo do_shortcode('[somename]'); ?>

год в копирайте
<?= date('Y'); ?>

если главная шапка

<?php if (is_front_page()) : ?>
<?php else : ?>
<?php endif; ?>

Превью в месенджерах
<meta property="og:title" content="San Roque 2014 Pollos" />
<meta property="og:description" content="Programa de fiestas" />
<meta property="og:image" content="http://pollosweb.wesped.es/programa_pollos/play.png" />
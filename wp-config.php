<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wp_layer');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', '127.0.0.1');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'eI@6LXD_g,Y:>ss*)@5ZaL+]3O+_Ljt^7;,OV;,8*^?TyXw~=9BKTWQi@<^F2=9y');
define('SECURE_AUTH_KEY',  '*bD}0gdoN#ivtZT]Y(f(J*%BqhP)ck6aT?!z4V/.B@y,*>OcuOVK@-}>=_~p>SM*');
define('LOGGED_IN_KEY',    'PH~Pc*EIo=%8MPi)[Eia2<3cUde/=iRd>DY2?pY-uDI]k_]`i,j*9m2Np.o(!3#6');
define('NONCE_KEY',        '?FFqdO+2lqi`COOyiJYX=zs`65r)P*@?Y4|rO>s1C~y9zte`c;q8+h9$4vN6:n}.');
define('AUTH_SALT',        'U8g!i;RkeBSoAFL5p%b`:gXm-uzl>P>VAPV$w^m5KX~K(*0E_]u}F-lcub[F)DwO');
define('SECURE_AUTH_SALT', 'CucdeSP7UjkF{l2VR0$I.a0P|-fK8d`qZQKEM@5,a gp)e*}vsp80j95O|/0+6Zb');
define('LOGGED_IN_SALT',   'e?73~g}+O8AzCSARAGyQdb;E+CKSRZtjHjO7@]J0:Mc}yPX!tCVV#vAbMwffGh:Y');
define('NONCE_SALT',       '`JvAVNtVeTh8Mp6G-SWF1O .qTG1:Q_T$3EV@%9$3M3^F)gy;PSfEhO;GOI-nWxz');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

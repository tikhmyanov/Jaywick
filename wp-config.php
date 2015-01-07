<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'jaywick');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '+]`u@{:NO8|:9l:(Y{MV+qNev%|#I+ckG<,FdUc^XZ4TT8qM7ljj(PQr(b%,7-yy');
define('SECURE_AUTH_KEY',  'AzSl!Bea(uu)Q*:C%FTuNb9Zj/#xl-R4}!mF+/L3.JQ~ki%02pGX6iPmgBzC/|Qv');
define('LOGGED_IN_KEY',    'd|6ax-yu8mWDRn+J$R]NX]WXhV9ulYf-D,oW>S~Xu4Yety9^Q]k7g15Ch& n#|I[');
define('NONCE_KEY',        '~/ e3;jts9uf``eKJ@1P8=xIX pK@4eXWCRkN($0q=-|DR%DqvdWAW4AbPaMv`Fd');
define('AUTH_SALT',        'Xan9GLW0c+wO0O~BM/-<gw1ya=rZ55sYX?YdlECK1[tkbd-M(AOe%o6tNmd&y/p~');
define('SECURE_AUTH_SALT', '-sG[(5sNG7h+(;0WQ#_qy_. _f|Y`c,H-+0n[{{imvSa4oP >,{:jE8<!.yfx]`F');
define('LOGGED_IN_SALT',   '+%L+=S<A?=.6[jEj*G$oK-xDe-a]2?CLBO9]VF3a1uG:zHh9+JaQbV[[/Y*of;Hq');
define('NONCE_SALT',       'MXe 9?nXjF{w)k(/eW$ld8.7|<#X<@sg&J_+fCnqd<{_$K/sM&2zES2|^r NgjJ}');

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
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

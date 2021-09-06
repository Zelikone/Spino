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
define( 'DB_NAME', 'spino' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'mysql' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'mysql' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'oO1d6aijV{wdN|Q4nf ROJAsFo9-UAO/KqPt3G$c(IH QX,<=Stoqz7lB4RU7@98');
define('SECURE_AUTH_KEY',  'WcS@`.BK>Yk+k.sP~V2Ae_`=y+v&G@h]/9B1shLUOjm?`:x2k(49J$M[wyh.`C1$');
define('LOGGED_IN_KEY',    'oiW*k42y*#4g S3cuP/|a?(+|T/4F/QDwp<,L;{<.?GemyD,FCR`)C.=dfVWR)q#');
define('NONCE_KEY',        ';mE1>L;l:1~JBSc44,5CfjdL=.F6<fkoZi/@dYXMbq7rog=m}MDIsry8~)]/FcsN');
define('AUTH_SALT',        'r]=pc>n4 l@|u.7 [2]LBUhzE47q&MMlIk1kC1P1ZT$zILC2c>h-<j +_->/?3gr');
define('SECURE_AUTH_SALT', '!$2=;jkvV}C3,|,xpyYr8<YF@EN6DCOUAZ&`<#]fXEL{XIyP4FOP50R!W0@v@U0{');
define('LOGGED_IN_SALT',   'A|/nq<~Po=9OSW[3v@bxX(G1/3wZAvKVF0?:SY03(8JQQu>OPQ2l9/Jv5B>A5koL');
define('NONCE_SALT',       'U`!OY3(*|P#2+)IL{`KcCLXu@iFT;F>%x/wyyxvCoTk%G%>YB=J`s-+X55ifxFFN');
	
/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );

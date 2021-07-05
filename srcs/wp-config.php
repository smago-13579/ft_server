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
define( 'DB_NAME', 'smago_database' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'smago' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'admin' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'e/DFfo(#5v:GVd^}aCdhW++lSa~~>C,yIwk:0$--}p+1x-y3W;-<rx%JC{UZ!NfM');
define('SECURE_AUTH_KEY',  'Gp5JV5xJ#r@?I(/1T[u|6jSzY`G4b#7QZ){D`pO!NF]4TF/_i8+-,mOl2 D*pSL@');
define('LOGGED_IN_KEY',    'yP>|P&;;|f2r|^xCoAiNYg9KD?Rbc0<IKqSGfsj3x`KVsR,{^hI,CEA6!9^]);AO');
define('NONCE_KEY',        'tYT,K@Gyus@v2K9|-^p[pjKG[0Y3-i>9MiTE|rEOQ(L?aSs%R[VzoR)A[M#?4tfN');
define('AUTH_SALT',        '!+87ONrzE[RB=zk!?8vhak1;j1%|:rQ[Lw}Z?ZI(OL+<Qwv#jW2w*z*cUkaF749V');
define('SECURE_AUTH_SALT', 'Z7PlzrTW19iPgPM[|*R+m|t~!Q`&2xOrBL~|3Z3D,iM_6:ldT#M|Ki|ot|uqTTdU');
define('LOGGED_IN_SALT',   '7&h_}Hj?7?wMhf[~gHx-SzC%@Hb}UNtv:f`_3&nS;{8YT@Pv?(%>=:wM;8T3#OXq');
define('NONCE_SALT',       '3Z@mOGZTbt?z6t}WrI#-cT:6wg(-.ZAj|_e-p}|H&|6A|*~Qj(>yDaRjWK7 ^f=!');

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

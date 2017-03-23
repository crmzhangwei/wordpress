<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'wordpress');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'to8to123');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'DSR`x^3:K0}dxbgSZ<X@up+oq=fU97$6|x&?,JN#hA85Xtc9ICDf!BACwKL[:xE3');
define('SECURE_AUTH_KEY',  'fIE@C$z8>4w&i)<tQ1oLfVJaes(L^(CDvZE4R?^Qili*_L-xpWw@$:N6]-=5,0?g');
define('LOGGED_IN_KEY',    'O[&uCb%F:mDrpYDR[e:g_KB(:pz9b}C`31(RSq.!CB`,B-GW?E^D|P>q`;2a&x+=');
define('NONCE_KEY',        'Z]1j#VEq2p@aLqab{VkrAfESVGGkc!*w9Eson5:w[3/yP mQ%[aeQe?NVx}2)?z#');
define('AUTH_SALT',        ':nGtwP P- $RZ#?bm_.C%uLZ%ODGgeK<I:)}L%by3L_aXQ&bh(K-OphOMH>8v_jF');
define('SECURE_AUTH_SALT', '[y_9@AJ~}NtXkhz7U;ANo;+x.xSpCi9`Yx!J~P?N$3)slaz?n(H]AE1qny@1TTZx');
define('LOGGED_IN_SALT',   'S=IcVDO~IrEl=(Z*rMN4QK0h~FK!D^;M~}Ip)lkSvBU=Sbx7AizUWIFd@ZTaEC.k');
define('NONCE_SALT',       '_E~D/P.jvu$CAqZQ~K=f`OiU:kp5TzF=r+]x;?1cyg,+*Aa _*8CrZq9Iy0[|yk,');
define('RT_WP_NGINX_HELPER_CACHE_PATH','/temp/nginx-cache');
define('COOKIE_DOMAIN', 'www.webwk.com');

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
define('WP_TEMP_DIR', ABSPATH . 'wp-content/temp');
/** 设置WordPress变量和包含文件。 */
define('CONCATENATE_SCRIPTS',false);
require_once(ABSPATH . 'wp-settings.php');


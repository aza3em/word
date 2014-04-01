<?php // Modified for Arabic by Rasheed Bydousi

/** إعدادات برنامج ووردبريس المعرب **/

// ** إعدادات قاعدة البيانات - ينمكنك الحصول على هذه المعلومات من مستضيفك ** //
/** اسم قاعدة بيانات ووردبريس */
define('DB_NAME', 'mysite');

/** اسم المستخدم لقاعدة البيانات */
define('DB_USER', 'root');

/** كلمة المرور لقاعدة البيانات */
define('DB_PASSWORD', 'root');

/** عنوان خادم قاعدة البيانات */
define('DB_HOST', 'localhost');

/** ترميز قاعدة البيانات */
define('DB_CHARSET', 'utf8');

/** مقارنات قاعدة الببيانات (Collation). 
* إذا كنت غير متأكّد أتركها فارغة */
define('DB_COLLATE', '');

/**#@+
 * مفاتيح الأمان.
 * استخدم الرابط التالي لتوليد المفتايح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 * @منذ 2.6.0
 */
define('AUTH_KEY',         '.],4vH9v3Q1{$n8t.k8z:cCVfr~<^zR}Pr10@Fnv0Q nAXQ}DWRwgLvRadmQs&Q!');
define('SECURE_AUTH_KEY',  '?S=g-BPHb;wh%-IkBeBHlqt$A-RqAu!K*2xz#$*`DkD=h+-OXax/|tz$3s_+-JdN');
define('LOGGED_IN_KEY',    '4dNRG#+SZ<*Mq({Pw6JJ^)_-6m2A?~/Q-n#4tK-b@+TtI|Ql8:raO~59[^SQ!c^D');
define('NONCE_KEY',        '.V|F0dfOo-m-tOLFzW; [Oc>5mgAWOj7%hIZ]^3^a&m6D^7mX~#h|9]},)!cGTSS');
define('AUTH_SALT',        'tJN`{f,B!sH+}Z&|WXfH:*awJ9`%p`F*Fg.fTQqRoP)+zvp pC~S^d9Kb&Z J|K8');
define('SECURE_AUTH_SALT', 'MNd_ R#,zxvC*!<I;kj@y#-c+X?=TTbfOEDPT]UyJ]b 1;=|w*HT2M~r-1,+PyF1');
define('LOGGED_IN_SALT',   'fw:|; 29,7%=1@`:+M9J%9yA jP|5&h*TGl0BIZyhIDB6W^[JVDx?^jbM8~p)|h_');
define('NONCE_SALT',       'P0lt,e?5lyB-sEd2P.P9S?5#m}f.6P8(<B;9W-^?yYhjRMpcs;)|9No6mO47,J2#');


/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 * تستطيع تركيب أكثر من مدونة على نفس قاعدة البيانات إذا أعطيت لكل قاعدة بادئة جداول مختلفة
 * استخدم فقط حروف, أرقام وخطوط سفلية!
 */
$table_prefix  = 'wp_';

/**
 * اللغة الافتراضية المستخدمة في هذه النسخة هي العربية
 * إذا أردت أن تكون لوحة التحكم في مدونتك بالانجليزية قم بحذف الحرفين أدناه وهي الحروف ar
 */
define('WPLANG', 'ar');

/**
 * للمطورين: نظام تشخيص الأخطاء
 * قم بتغيير flase إلى true لتمكين عرض الملاحظات أثناء التطوير
 */
define('WP_DEBUG', false);

/* هذا هو المطلوب! توقف عن التعديل. نتمنى لك التوفيق في موقعك! */

/** المسار المطلق لمجلد ووردبريس. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
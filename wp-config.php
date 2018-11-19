<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için 
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define('DB_NAME', 'dukkan');

/** MySQL veritabanı kullanıcısı */
define('DB_USER', 'root');

/** MySQL veritabanı parolası */
define('DB_PASSWORD', '');

/** MySQL sunucusu */
define('DB_HOST', 'localhost');

/** Yaratılacak tablolar için veritabanı karakter seti. */
define('DB_CHARSET', 'utf8mb4');

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'FX6<0ddBW*5+SCq>s4w`e}4l)2k8QhQW=XYXRgw}w0/F]~,+,gVJgkExK;v9E+PH');
define('SECURE_AUTH_KEY',  '>uXS8dXZ7c*)$pr>291$_Mg<2V ,S&EacH_*_b.Q9NQe+6XH:!]&6u^@L=2+B^Wx');
define('LOGGED_IN_KEY',    'ao @TD4T[})3vwW:va7xLK#Y&oEJ*D1t8E2]fX)@Ll&H_p$nQpU (Ol;Cy)1c<gd');
define('NONCE_KEY',        ',z(L?[Sc;!d2R_-*xQ879oyrWeuC?Pc!}BxmW@G% n}L;mFAB0Di4{#v;z>J$OVj');
define('AUTH_SALT',        '-.*E`A9%bt0uAJ.tPjj{y9H$kE`?&f.Go!>IgX19,Du>[LekRzec1U{1LzBI;`^!');
define('SECURE_AUTH_SALT', '(ozHI~nS@0v[+%zaER#`.GzMf^/5CLg$EpD^CWW6ih7L#$3u+c*L<s$jbG27G9IR');
define('LOGGED_IN_SALT',   'R4)tY3IE]htvFA{t-gy0QVd2>tcvJ5=Y}itgAu}a/li,-#p0zu7,=i.2MzpZe<8s');
define('NONCE_SALT',       '<K1*;6rbzlgXR@XE2`=/,,`_MOORXD=@!*%=WR$p^o9RCpZETei)ZQY3@@d%0Xv:');
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix  = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');

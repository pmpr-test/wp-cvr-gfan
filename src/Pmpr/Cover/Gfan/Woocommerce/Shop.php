<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f86324adc             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Gfan\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; class Shop extends Template { public function kgewmaycsoykyaso() { $this->kuieicsuscgmwigg('woocommerce_no_products_found', 'wc_no_products_found')->kuieicsuscgmwigg('woocommerce_before_shop_loop', 'woocommerce_result_count', 20)->kuieicsuscgmwigg('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30)->kuieicsuscgmwigg('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5); parent::kgewmaycsoykyaso(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('woocommerce_before_main_content', [$this, 'isiysykswawcqygc'], 0)->qcsmikeggeemccuu('woocommerce_sidebar', [$this, 'osgggoqkcuiyoemk'], 99999); $this->qcsmikeggeemccuu('woocommerce_before_main_content', [$this, 'iaicgqsoiegoamsu'], 5)->qcsmikeggeemccuu('woocommerce_before_main_content', [$this, 'scuiksmgsceyauqo'], 8)->qcsmikeggeemccuu('woocommerce_shop_top_bar', 'woocommerce_catalog_ordering')->qcsmikeggeemccuu('woocommerce_sidebar', [$this, 'eyswagwcikmceyoc'], 5)->qcsmikeggeemccuu('woocommerce_sidebar', [$this, 'esuiacmywcmmsmao'], 20)->qcsmikeggeemccuu('woocommerce_sidebar', [$this, 'yecgaowyqiuaoysw'], 99); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('woocommerce_show_page_title', '__return_false', 99); $this->aqaqisyssqeomwom('template_hierarchy_parameters', [$this, 'scqoumcogcugsgwc'], 99); } public function isiysykswawcqygc() { ob_start(); } public function osgggoqkcuiyoemk() { $nsmgceoqaqogqmuw = ob_get_clean(); echo $this->caokeucsksukesyo()->gkksucgseqqemesc()->suygukqgsuwaaumg($nsmgceoqaqogqmuw, '.woocommerce-products-header'); } public function iaicgqsoiegoamsu() { ob_start(); $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->wayckuoqggqsuiys() ? woocommerce_product_archive_description() : woocommerce_taxonomy_archive_description(); $iayakwckycsumkqa = ob_get_clean(); echo $this->iuygowkemiiwqmiw('../common/page_header', ['has_container' => 0, 'jumbotron' => woocommerce_page_title(false), 'excerpt' => $iayakwckycsumkqa]); } public function esuiacmywcmmsmao() { $ewsqcacamuomwagw = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw(); $ewsqcacamuomwagw->esuiacmywcmmsmao('archive-sidebar'); $ewsqcacamuomwagw->esuiacmywcmmsmao('product-archive-sidebar'); } public function iygqqaoieyqsswym() { echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gusouagusgyoaeya(__('No products were found matching your selection.', PR__CVR__GFAN)); } public function scqoumcogcugsgwc($qookweymeqawmcwo) { if ($this->uwkmaywceaaaigwo()->wikusamwomuogoau()->wayckuoqggqsuiys()) { $qookweymeqawmcwo[Constants::imoqsmekaqowuwmc] = $this->caokeucsksukesyo()->gscioiumssogceuc()->uikgwcuascgeissw(Constants::oguseymmyyoyaako); } return $qookweymeqawmcwo; } }

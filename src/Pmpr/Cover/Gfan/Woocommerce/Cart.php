<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f86324adc             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Gfan\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use WC_Product; class Cart extends Template { public function kgewmaycsoykyaso() { $this->kuieicsuscgmwigg('woocommerce_cart_collaterals', 'woocommerce_cross_sell_display'); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('woocommerce_before_cart', [$this, 'oiqwaqokiooqwgso'], 0)->qcsmikeggeemccuu('woocommerce_before_cart', [$this, 'eisogoiciqiiqkgi'], 2)->qcsmikeggeemccuu('woocommerce_before_cart', [$this, 'scuiksmgsceyauqo'], 5)->qcsmikeggeemccuu('woocommerce_after_cart_table', [$this, 'kuuqackmsswiaqyk'], 0)->qcsmikeggeemccuu('woocommerce_before_cart_collaterals', 'woocommerce_cross_sell_display', 50)->qcsmikeggeemccuu('woocommerce_before_cart_collaterals', [$this, 'eyswagwcikmceyoc'], 99)->qcsmikeggeemccuu('woocommerce_after_cart', [$this, 'yecgaowyqiuaoysw'])->qcsmikeggeemccuu('woocommerce_after_cart', [$this, 'oaukoisuwcsqyuug'], 9999); $this->qcsmikeggeemccuu('woocommerce_before_shipping_calculator', [$this, 'gmuuggmsoswwaagw'])->qcsmikeggeemccuu('woocommerce_after_shipping_calculator', [$this, 'mcgyisuoooyyyoqg']); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('woocommerce_cart_item_remove_link', [$this, 'oicwgumggiwcmocu'], 99)->cecaguuoecmccuse('woocommerce_cart_item_thumbnail', [$this, 'okmwseoywsocmuai'], 99, 3)->cecaguuoecmccuse('woocommerce_shipping_show_shipping_calculator', [$this, 'gcsaiqyoqomamckw'], 99); } public function kuuqackmsswiaqyk() { $this->awwqwouuoioauoaw('hr', ['class' => 'my-5']); $this->ecsqcmkgoyomscea(['class' => 'd-flex justify-content-between']); $ekymkycgewkiouqe = $this->caokeucsksukesyo()->wikusamwomuogoau(); $this->sgyomqggksiqegcm($ekymkycgewkiouqe->ssmeikuayawmweeu(), __('Continue Shopping', PR__CVR__GFAN)); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $cmwygeyygwqaemaq = __('Update cart', PR__CVR__GFAN); $swqimwqeweekeusq->sykissckqqccoiqs('button', ['class' => 'button btn call-to-action', 'type' => 'submit', 'value' => $cmwygeyygwqaemaq, 'name' => 'update_cart'], $swqimwqeweekeusq->iaaacsuskiakkwui([$swqimwqeweekeusq->cuoygaaeqeqcuggu(IconInterface::qywgekagciyucegy, ['class' => 'mr-3 d-flex my-auto icon-white']), $cmwygeyygwqaemaq], ['class' => 'd-flex'])); $this->cqscqicucmeamkyq('woocommerce_cart_actions'); wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); $this->oaukoisuwcsqyuug(); $wwcysoksoogyacog = $ekymkycgewkiouqe->cqgggooocsmkckck(); if ($wwcysoksoogyacog && $wwcysoksoogyacog->needs_shipping() && 'yes' === $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get('woocommerce_enable_shipping_calc')) { woocommerce_shipping_calculator(); } } public function mcgyisuoooyyyoqg() { $this->oaukoisuwcsqyuug(); $this->oaukoisuwcsqyuug(); if (wc_coupons_enabled()) { $this->mwuoswwcwciuyuye(); $this->ecsqcmkgoyomscea(['class' => 'coupon-holder px-0 py-10 px-md-10']); $this->awwqwouuoioauoaw('h2', ['class' => 'h4 mb-5'], true, __('Apply Coupon', PR__CVR__GFAN)); $this->oaukoisuwcsqyuug(); $this->oaukoisuwcsqyuug(); } $this->oaukoisuwcsqyuug(); } public function gmuuggmsoswwaagw() { $this->cuekgigmkgkskaek(); $this->sggqmqcwsumagmau(); $this->ecsqcmkgoyomscea(['class' => 'rounded-xxl p-5 border my-5']); $this->awwqwouuoioauoaw('h2', ['class' => 'h4 mb-5'], true, __('Calculate shipping', 'woocommerce')); } public function gcsaiqyoqomamckw($ekcswiguywieeeoc) { if ($this->uwkmaywceaaaigwo()->wikusamwomuogoau()->wmqwkwyuqwksiiqk()) { $ekcswiguywieeeoc = false; } return $ekcswiguywieeeoc; } public function oicwgumggiwcmocu($iqwcisggcgecewgw) { if ($this->uwkmaywceaaaigwo()->wikusamwomuogoau()->wmqwkwyuqwksiiqk()) { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if ($smuykqsageuocuos->has($iqwcisggcgecewgw, 'a')) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $siquossayskcwkea = $smuykqsageuocuos->ccekeuwwqqoiwuwy($iqwcisggcgecewgw, 'a'); $iqwcisggcgecewgw = $swqimwqeweekeusq->uuccukgasskgimsq('a', $siquossayskcwkea, $swqimwqeweekeusq->cuoygaaeqeqcuggu(IconInterface::oqqegqwcamgyuemw, ['class' => 'mx-auto'])); } } return $iqwcisggcgecewgw; } public function okmwseoywsocmuai($mcqieaigyeeyaksm, $igqsaukqcqscimok, $uusmaiomayssaecw) { $product = $igqsaukqcqscimok[Constants::uiwqcumqkgikqyue] ?? null; $product = $this->sscegwueamckwmcy('woocommerce_cart_item_product', $product, $igqsaukqcqscimok, $uusmaiomayssaecw); if ($product instanceof WC_Product) { $mcqieaigyeeyaksm = $product->get_image(Constants::meugkwqwuyoyeeqs); } return $mcqieaigyeeyaksm; } public function ikckqoqkgcewiwcq($ymqmyyeuycgmigyo, $aqykuigiuwmmcieu, $ymkomoccmymcoiea = [], $ugugagoguiycqeys = []) : array { switch ($ymqmyyeuycgmigyo) { case self::ioaiwswskewyqamg: $ugugagoguiycqeys = ['.woocommerce-cart-form__contents td' => ['class' => 'align-middle py-6'], '.woocommerce-cart-form__contents th' => ['class' => 'h5 py-6'], 'form.woocommerce-cart-form' => ['class' => 'table-responsive overflow-hidden'], 'table.cart' => ['class' => 'table mb-0 border rounded'], 'table.cart thead' => ['class' => 'bg-gray-200'], 'th.product-name' => ['colspan' => '2'], 'td.product-name a' => ['class' => 'text-primary-secondary h6'], 'td.product-thumbnail' => ['class' => 'mx-w90px'], 'td.product-remove' => ['class' => 'text-center'], 'td.product-price' => ['class' => 'h4 text-normal'], 'td.product-subtotal' => ['class' => 'h4 text-primary'], '.product-thumbnail img' => ['class' => 'border rounded-xl'], '.remove' => ['class' => 'd-flex'], '.coupon > label' => ['class' => 'sr-only'], '.coupon input' => ['class' => 'form-control'], '.coupon button' => ['class' => 'btn call-to-action mt-5']]; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $smwiiesyqsgyisos = $smuykqsageuocuos->qqimkcgcmeewwwei($aqykuigiuwmmcieu, 'div.coupon'); if ($smwiiesyqsgyisos) { $aqykuigiuwmmcieu = $smuykqsageuocuos->pmouaioykaoceyag($aqykuigiuwmmcieu, '.coupon-holder', $smwiiesyqsgyisos); } $aqykuigiuwmmcieu = $smuykqsageuocuos->suygukqgsuwaaumg($aqykuigiuwmmcieu, ['th.product-thumbnail', 'table.cart tbody tr:last-child']); break; case self::gyiqqeeeoqegmiuy: $ugugagoguiycqeys = ['.cart-empty' => ['class' => 'p-5 rounded-xxl border'], '.wc-backward' => ['class' => 'btn call-to-action mt-5']]; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $meqocwsecsywiiqs = $swqimwqeweekeusq->uuccukgasskgimsq('h1', ['class' => 'mb-4'], get_the_title()); $aqykuigiuwmmcieu = $swqimwqeweekeusq->iaaacsuskiakkwui($meqocwsecsywiiqs . $aqykuigiuwmmcieu, ['class' => 'container mt-7']); break; case self::wioamsoyuckiociw: $ugugagoguiycqeys = ['.woocommerce-Price-amount' => ['class' => 'h6'], '.woocommerce-shipping-destination' => ['class' => 'text-dark'], '.woocommerce-shipping-methods' => ['class' => 'p-0'], '.woocommerce-shipping-methods > li' => ['class' => 'custom-control custom-radio mb-2'], '.woocommerce-shipping-methods > li > label' => ['class' => 'custom-control-label']]; $waeqkuigiwykwsqo = '.woocommerce-shipping-methods > li > input[type="radio"]'; if ($this->caokeucsksukesyo()->gkksucgseqqemesc()->has($aqykuigiuwmmcieu, $waeqkuigiwykwsqo)) { $ugugagoguiycqeys[$waeqkuigiwykwsqo] = ['class' => 'custom-control-input']; } break; case self::qcaouceimmemqoci: $ugugagoguiycqeys = ['.shipping-calculator-form' => ['class' => 'd-flex row'], '.shipping-calculator-form .form-row' => ['class' => 'form-group col-md-6 mx-0 d-block'], '.shipping-calculator-form .form-row > span' => ['class' => 'd-block w-100'], '.shipping-calculator-form input' => ['class' => 'form-control'], '.shipping-calculator-form .form-row select' => ['class' => 'form-control'], '.shipping-calculator-button' => ['class' => 'd-none'], '.shipping-calculator-form > p' => ['class' => 'col-12'], 'button[type="submit"]' => ['class' => 'btn mt-5 call-to-action'], '.form-row' => ['class' => 'disable-form-row']]; break; case self::wyygogmqyokgsgyw: $ugugagoguiycqeys = ['h2' => ['class' => 'h4 mb-5'], 'table' => ['class' => 'table mb-5'], '.cart_totals' => ['class' => 'rounded-xxl p-5 border'], '.woocommerce-Price-amount' => ['class' => 'text-primary h4'], 'th' => ['class' => 'h6 my-auto text-gray-600 align-middle'], 'tr:not(.shipping) > td' => ['class' => 'text-right h5 my-auto text-dark align-middle']]; break; case self::ogiiukgcyqegckus: $ugugagoguiycqeys = ['.cross-sells' => ['class' => 'mt-5'], '.cross-sells > h2' => ['class' => 'h3 pb-5 mb-5 border-bottom header-bottom-border']]; break; case self::wsqawsekowmycaig: if ($this->wigckqooeccseiyu()) { $ugugagoguiycqeys = ['img' => ['class' => 'border rounded-xl'], '.woocommerce-mini-cart__buttons' => ['class' => 'd-flex justify-content-between mt-5 heading-ff'], '.woocommerce-mini-cart__empty-message' => ['class' => 'text-center'], '.woocommerce-mini-cart__total' => ['class' => 'd-flex justify-content-between pt-5 heading-ff border-top'], '.woocommerce-mini-cart__total > .woocommerce-Price-amount' => ['class' => 'text-primary h6 my-auto'], 'a:not(.button):not(.remove)' => ['class' => 'text-primary-secondary lh-md mb-0 d-flex max-line max-line-3'], 'a.wc-forward:not(.checkout)' => ['class' => 'btn btn-outline-secondary font-weight-bold'], 'a.wc-forward.checkout' => ['class' => 'btn btn-outline-primary font-weight-bold'], 'dl.variation' => ['class' => 'mt-3 mb-0 d-flex'], 'dt' => ['class' => 'mr-2'], 'dd' => ['class' => 'mr-3']]; } break; case self::aoqiegsckgcumwim: $ugugagoguiycqeys = ['.checkout-button' => ['class' => 'btn btn-block call-to-action']]; break; } return parent::ikckqoqkgcewiwcq($ymqmyyeuycgmigyo, $aqykuigiuwmmcieu, $ymkomoccmymcoiea, $ugugagoguiycqeys); } }

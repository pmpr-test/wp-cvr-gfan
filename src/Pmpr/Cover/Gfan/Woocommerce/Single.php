<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f6ee2aeff             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Gfan\Woocommerce; class Single extends Template { public function __construct() { $this->enqueue(); parent::__construct(); } public function kgewmaycsoykyaso() { $this->kuieicsuscgmwigg('woocommerce_review_before', 'woocommerce_review_display_gravatar')->kuieicsuscgmwigg('woocommerce_review_before_comment_meta', 'woocommerce_review_display_rating')->kuieicsuscgmwigg('woocommerce_product_thumbnails', 'woocommerce_show_product_thumbnails', 20); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('woocommerce_before_single_variation', [$this, 'ysiygueaisgikgek'], 0)->qcsmikeggeemccuu('woocommerce_product_thumbnails', [$this, 'ymwoewqeiuuuckwa'], 20)->qcsmikeggeemccuu('woocommerce_before_main_content', [$this, 'scuiksmgsceyauqo'], 150)->qcsmikeggeemccuu('woocommerce_before_single_product_summary', [$this, 'ogkskwweeyywkque'], 0)->qcsmikeggeemccuu('woocommerce_before_single_product_summary', [$this, 'muwcmosieemkigsg'], 0)->qcsmikeggeemccuu('woocommerce_before_single_product_summary', [$this, 'ucuagquoqayamgoy'], 1)->qcsmikeggeemccuu('woocommerce_before_single_product_summary', [$this, 'oaukoisuwcsqyuug'], 888)->qcsmikeggeemccuu('woocommerce_before_single_product_summary', [$this, 'oaukoisuwcsqyuug'], 999)->qcsmikeggeemccuu('woocommerce_before_single_product_summary', [$this, 'muwcmosieemkigsg'], 9999)->qcsmikeggeemccuu('woocommerce_before_single_product_summary', [$this, 'wsssyimiaysaosmi'], 99999)->qcsmikeggeemccuu('woocommerce_after_single_product_summary', [$this, 'oaukoisuwcsqyuug'], 3)->qcsmikeggeemccuu('woocommerce_after_single_product_summary', [$this, 'oaukoisuwcsqyuug'], 4)->qcsmikeggeemccuu('woocommerce_after_single_product_summary', [$this, 'oaukoisuwcsqyuug'], 5)->qcsmikeggeemccuu('woocommerce_sidebar', [$this, 'eyswagwcikmceyoc'], 5)->qcsmikeggeemccuu('woocommerce_sidebar', [$this, 'esuiacmywcmmsmao'], 20)->qcsmikeggeemccuu('woocommerce_sidebar', [$this, 'yecgaowyqiuaoysw'], 98); $this->qcsmikeggeemccuu('woocommerce_after_add_to_cart_form', [$this, 'siewiaikygqeqoau'])->qcsmikeggeemccuu('woocommerce_before_add_to_cart_form', [$this, 'wqououcoequgweqq']); $this->qcsmikeggeemccuu('woocommerce_review_before', [$this, 'skwkqooiouoyqomy'])->qcsmikeggeemccuu('woocommerce_review_meta', [$this, 'oigouaqcgcqwwesg'], 0)->qcsmikeggeemccuu('woocommerce_review_meta', 'woocommerce_review_display_rating', 50)->qcsmikeggeemccuu('woocommerce_review_meta', [$this, 'oaukoisuwcsqyuug'], 9999); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('woocommerce_reset_variations_link', '__return_empty_string')->cecaguuoecmccuse('woocommerce_quantity_input_classes', [$this, 'kiiwkaqckccekqem'], 99)->cecaguuoecmccuse('woocommerce_variable_product_guide_attrs', [$this, 'occogkogmiwqccwm'])->cecaguuoecmccuse('woocommerce_single_product_image_thumbnail_html', '__return_empty_string'); } public function oigouaqcgcqwwesg() { $this->ecsqcmkgoyomscea(['class' => 'd-flex justify-content-between']); } public function skwkqooiouoyqomy($comment) { $this->ecsqcmkgoyomscea(['class' => 'mr-4 d-flex justify-content-between flex-column text-center']); echo $this->caokeucsksukesyo()->issssuygyewuaswa()->ogcwgigqwycqswms($comment, 80, ['class' => 'rounded-circle mx-auto mb-3']); echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei($this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->mguqscccckuywsya($comment), ['class' => 'h6 my-auto text-primary author-title']); $this->oaukoisuwcsqyuug(); } public function enqueue() { $icyaoosaykeskiuu = $this->iuygowkemiiwqmiw('inline.css'); if ($icyaoosaykeskiuu) { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->awgyqswkqywwmkye($this, 'product-inline')->awagieqcmmwkgwgs($icyaoosaykeskiuu)); } } public function wqououcoequgweqq() { ob_start(); } public function siewiaikygqeqoau() { $eaoumsseceiowgsk = ob_get_clean(); global $product; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if ($product && $smuykqsageuocuos->has($eaoumsseceiowgsk, 'button')) { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $gskauacumcmekigs = $smuykqsageuocuos->qqimkcgcmeewwwei($eaoumsseceiowgsk, 'button'); $cmwygeyygwqaemaq = $product->single_add_to_cart_text(); $kkogegkccyiqamcy = $yyauwyaeewsickwk->wiecmkiugmyyqiqc($cmwygeyygwqaemaq, $this->mqqqmagiqsoquksu() . $cmwygeyygwqaemaq, $gskauacumcmekigs); $kkogegkccyiqamcy = $smuykqsageuocuos->igmaewykumgwoaoy($kkogegkccyiqamcy, ['button' => ['class' => 'd-flex heading-ff font-weight-bold']]); $eaoumsseceiowgsk = $yyauwyaeewsickwk->wiecmkiugmyyqiqc($gskauacumcmekigs, $kkogegkccyiqamcy, $eaoumsseceiowgsk); } echo $eaoumsseceiowgsk; } public function ysiygueaisgikgek() { $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sykissckqqccoiqs('a', ['href' => '#', 'class' => 'reset_variations h6 my-3 text-primary hover-dark'], __('Clear', PR__CVR__GFAN)); } public function wsssyimiaysaosmi() { $this->ecsqcmkgoyomscea(['class' => 'px-0 px-lg-7']); } public function ogkskwweeyywkque() { $this->cuekgigmkgkskaek('div', ['class' => 'mb-12']); } public function esuiacmywcmmsmao() { $ewsqcacamuomwagw = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw(); $ewsqcacamuomwagw->esuiacmywcmmsmao('single-sidebar'); $ewsqcacamuomwagw->esuiacmywcmmsmao('product-single-sidebar'); } public function ucuagquoqayamgoy() { $this->ecsqcmkgoyomscea(['class' => 'position-relative']); } public function ymwoewqeiuuuckwa() { global $product; $ggscaiukeywauqec = []; $ieuiysqwqwgwaqow = []; $aieaqakyuyewkkwe = $product->get_gallery_image_ids(); $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); foreach ($aieaqakyuyewkkwe as $aiooqyausygaasqm) { if ($aiooqyausygaasqm && $eaeiswmwiqewicoc->aauyuieeeaakygki($aiooqyausygaasqm)) { $ieuiysqwqwgwaqow[$aiooqyausygaasqm] = wc_get_gallery_image_html($aiooqyausygaasqm); $ggscaiukeywauqec[$aiooqyausygaasqm] = wc_get_gallery_image_html($aiooqyausygaasqm, true); } } if ($ieuiysqwqwgwaqow) { echo $this->iuygowkemiiwqmiw('gallery', ['thumbnails' => $ieuiysqwqwgwaqow, 'main_images' => $ggscaiukeywauqec]); } else { if ($product->get_image_id()) { $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sykissckqqccoiqs('div', ['class' => 'border rounded-xxl overflow-hidden'], $product->get_image('woocommerce_single')); } } } public function occogkogmiwqccwm($wwgucssaecqekuek = []) { return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($wwgucssaecqekuek, 'class', 'mb-2'); } public function yukmqmyouueecueu($siquossayskcwkea = []) : array { return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($siquossayskcwkea, 'class', 'ribbon-top-right'); } public function kiiwkaqckccekqem($cmkqisoeyioisqaw) : array { $cmkqisoeyioisqaw[] = 'form-control'; return $cmkqisoeyioisqaw; } public function ikckqoqkgcewiwcq($ymqmyyeuycgmigyo, $aqykuigiuwmmcieu, $ymkomoccmymcoiea = [], $ugugagoguiycqeys = []) : array { switch ($ymqmyyeuycgmigyo) { case self::qyuawakuqmycqosq: $ugugagoguiycqeys = ['.product_meta' => ['class' => 'row fs-4x'], '.product_meta > span' => ['class' => 'col-12 col-md-6'], '.product_meta > span a' => ['class' => 'text-primary-secondary'], '.product_meta > span > span' => ['class' => 'text-primary']]; break; case self::qwuucgiqaugwoqcq: $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $aqykuigiuwmmcieu = $smuykqsageuocuos->mosawwqeoikikcuo($aqykuigiuwmmcieu, '.panel.entry-content', ['class' => 'tab-content', 'id' => 'tabContent']); $aqykuigiuwmmcieu = $smuykqsageuocuos->yqmasmmquoocswuw($aqykuigiuwmmcieu, '#comments h2', sprintf(__("%s comment", PR__CVR__GFAN), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei(get_comments_number(), ['class' => 'text-primary h2 pr-2']))); $ugugagoguiycqeys = ['.panel.entry-content' => ['class' => function ($momcykaoccoymeig) { $egkyssmuqcwaciya = 'mt-12 text-gray-800 text-justify tab-pane fade'; if ($momcykaoccoymeig == 0) { $egkyssmuqcwaciya .= ' active show'; } return $egkyssmuqcwaciya; }], '.woocommerce-Tabs-panel--description .product-info' => ['class' => 'single-content'], '.woocommerce-tabs' => ['class' => 'rounded-xxl border px-5 px-md-12 py-12'], '.tabs' => ['class' => 'nav', 'id' => 'tab'], '.tabs > li' => ['class' => 'nav-item border rounded-xxl fs-7x mr-3 py-2 hover-move up font-weight-bold'], '.entry-content > h2' => ['class' => 'h3 mb-5'], '.tabs > li > a' => ['data-toggle' => 'pill', 'class' => function ($momcykaoccoymeig) { $egkyssmuqcwaciya = 'nav-link py-1 px-5 px-lg-8'; if ($momcykaoccoymeig == 0) { $egkyssmuqcwaciya .= ' active'; } return $egkyssmuqcwaciya; }], '.comment-form' => ['class' => 'row'], '.comment-reply-title' => ['class' => 'h4'], '.woocommerce-noreviews' => ['class' => 'text-normal fs-lg mb-3'], '.comment-form-rating' => ['class' => 'col-12 d-flex justify-content-end'], '.commentlist' => ['class' => 'list-unstyled']]; break; case self::ikiiggucyacayeau: $aqykuigiuwmmcieu = $this->caokeucsksukesyo()->gkksucgseqqemesc()->mosawwqeoikikcuo($aqykuigiuwmmcieu, 'table', ['class' => 'table-responsive']); $ugugagoguiycqeys = ['table' => ['class' => 'table table-sm table-bordered border-gray-100 mb-0'], 'tr' => ['class' => 'd-flex justify-content-between flex-column flex-md-row'], 'th, td' => ['class' => 'px-4 py-2 w-100 text-gray-600'], 'p' => ['class' => 'm-0']]; break; case self::iuageuuiomiyqqya: case self::yysqkoqcckeqcaum: case self::eqguyksmocqqmcec: case self::wwqmieuuuaiuiwsq: case self::cygiimmgqiaesamy: $ugugagoguiycqeys = ['form > button.single_add_to_cart_button' => ['class' => $this->ikkussiqikuiuusi()], '.woocommerce-variation-add-to-cart > button.single_add_to_cart_button' => ['class' => $this->ikkussiqikuiuusi()], '.woocommerce-variation-add-to-cart' => ['class' => 'd-flex mt-3'], 'select' => ['class' => 'form-control'], 'td' => ['class' => 'pb-3 pt-0'], 'td.value' => ['class' => 'd-flex'], 'table' => ['class' => 'w-100 mx-auto mb-0'], 'form.cart:not(.variations_form)' => ['class' => 'd-flex'], 'form.cart' => ['class' => 'mb-13'], '.quantity' => ['class' => 'mr-3']]; break; case self::saagkmiyykasusme: case self::rayeiwssqequuisu: $gouoiiqwseweiaee = $this->iuygowkemiiwqmiw('../../common/carousel/arrows', ['icon' => 'arrow', 'class' => 'd-flex', 'btn_class' => 'mr-3']); $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $aqykuigiuwmmcieu = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui($aqykuigiuwmmcieu, ['class' => 'py-9 overflow-hidden swiper-container']); $aqykuigiuwmmcieu = $smuykqsageuocuos->mosawwqeoikikcuo($aqykuigiuwmmcieu, 'section > h2', ['class' => 'section-title mb-8 d-flex justify-content-between position-relative border-bottom header-bottom-border pb-1'], 'div', false); $aqykuigiuwmmcieu = $smuykqsageuocuos->pmouaioykaoceyag($aqykuigiuwmmcieu, '.section-title', $gouoiiqwseweiaee); $gaeqamemwmwsyukm = $smuykqsageuocuos->wkwyyyeomkqggggw($aqykuigiuwmmcieu, '.products-list > .product'); $ugugagoguiycqeys = ['.related.products' => ['class' => 'swiper', 'data-carousel' => $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike(['loop' => $gaeqamemwmwsyukm > 3, 'navigation' => false, 'centeredSlides' => false, 'speed' => 1500, 'autoplay' => ['delay' => 8000, 'pauseOnMouseEnter' => true, 'disableOnInteraction' => true], 'slidesPerView' => 1, 'breakpoints' => [1000 => ['slidesPerView' => 3], 768 => ['slidesPerView' => 2]]])], '.products-list' => ['class' => 'swiper-wrapper'], '.section-title > h2' => ['class' => 'h3'], '.products-list > .product' => ['class' => 'same-height same-width swiper-slide']]; break; case self::kgiycwomqeuaougm: $ugugagoguiycqeys = ['h1' => ['class' => 'h2 text-dark mb-5']]; break; case self::ayiskgasoqgyuoek: $aqykuigiuwmmcieu = $this->caokeucsksukesyo()->gkksucgseqqemesc()->yqmasmmquoocswuw($aqykuigiuwmmcieu, '.woocommerce-review-link', sprintf(__('%s comment', PR__CVR__GFAN), get_comments_number())); $ugugagoguiycqeys = ['.woocommerce-product-rating' => ['class' => 'd-flex justify-content-between direction-ltr'], '.star-rating' => ['class' => 'd-inline-block pl-2'], 'p' => ['class' => 'mb-1'], '.woocommerce-review-link' => ['class' => 'scroll-to direction-rtl', 'href' => '#tab-title-reviews']]; break; case self::qimsyquckyqaqewo: $ugugagoguiycqeys = ['li' => ['class' => 'bg-transparent'], '.comment_container' => ['class' => 'd-flex w-100 border p-4 mb-7 rounded-xxl show-on-hover'], '.comment-text' => ['class' => 'w-100'], '.woocommerce-review__dash' => ['class' => 'd-none'], '.woocommerce-review__published-date' => ['class' => 'text-gray-500 my-auto fs-3x'], '.description' => ['class' => 'font-size-sm'], '.description p' => ['class' => 'text-gray-700 mb-0']]; break; case self::wsagccumiaocaacs: $ugugagoguiycqeys = ['p.meta' => ['class' => 'd-flex justify-content-between mb-2'], '.woocommerce-review__author' => ['class' => 'd-none']]; break; } return parent::ikckqoqkgcewiwcq($ymqmyyeuycgmigyo, $aqykuigiuwmmcieu, $ymkomoccmymcoiea, $ugugagoguiycqeys); } }

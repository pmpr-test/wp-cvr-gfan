<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f6ee2aeff             |
    |_______________________________________|
*/
 require_once __DIR__ . "/vendor/autoload.php"; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Cover\Gfan\Gfan; $yqicqqkokawiosom = Gfan::iwgqamekocwaigci()->essaugkeosgskqme()->sskmceyamwugkaii(['php' => '7.2', 'wp' => '5.2', 'title' => __('Global Fruit and Nuts'), 'file' => __FILE__]); if ($yqicqqkokawiosom) { Gfan::symcgieuakksimmu(); } else { wp_die('Requirements did not pass fot the cover'); } if (!function_exists('pmpr_get_icon_html')) { function pmpr_get_icon_html($wkaqekwwgqsqwcoi, $wwgucssaecqekuek = [], bool $gskuwmeemyeuwogc = false) { return Gfan::iwgqamekocwaigci()->wgqqgewcmcemoewo()->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, ['markup' => $gskuwmeemyeuwogc]); } } if (!function_exists('pmpr_render_element')) { function pmpr_render_element($kqywgoqsmuswammk, $wwgucssaecqekuek = [], $ewgwqamkygiqaawc = '') { Gfan::iwgqamekocwaigci()->wgqqgewcmcemoewo()->sykissckqqccoiqs($kqywgoqsmuswammk, $wwgucssaecqekuek, $ewgwqamkygiqaawc); } } if (!function_exists('pmpr_generate_element')) { function pmpr_generate_element($kqywgoqsmuswammk, $wwgucssaecqekuek = [], $ewgwqamkygiqaawc = '') : string { return Gfan::iwgqamekocwaigci()->wgqqgewcmcemoewo()->uuccukgasskgimsq($kqywgoqsmuswammk, $wwgucssaecqekuek, $ewgwqamkygiqaawc); } } if (!function_exists('pmpr_get_wc_back_button')) { function pmpr_get_wc_back_button($eeamcawaiqocomwy, $meqocwsecsywiiqs, $wwgucssaecqekuek = []) { $ooggiaqasyawsuks = Gfan::iwgqamekocwaigci(); $wwgucssaecqekuek = $ooggiaqasyawsuks->gyecsegqciqykomu()->ckscqqquyskscaaw($wwgucssaecqekuek, ['href' => $eeamcawaiqocomwy, 'class' => '']); $wkaqekwwgqsqwcoi = get_icon_html(IconInterface::iegagyeiyomaiysq, ['class' => 'icon-primary icon-xs mr-1']); $wwgucssaecqekuek = $ooggiaqasyawsuks->wgqqgewcmcemoewo()->igmaewykumgwoaoy($wwgucssaecqekuek, 'class', 'text-decoration-none text-primary hover-primary font-15'); $ooggiaqasyawsuks->wgqqgewcmcemoewo()->sykissckqqccoiqs('a', $wwgucssaecqekuek, $wkaqekwwgqsqwcoi . sprintf(__('Back to %s', PR__CVR__PMPR), $meqocwsecsywiiqs)); } } if (!function_exists('pmpr_get_wc_alert_class')) { function pmpr_get_wc_alert_class($qqscaoyqikuyeoaw = '', &$ycyucwoysmwkgiui = null, $cmkqisoeyioisqaw = []) { switch ($qqscaoyqikuyeoaw) { case 'notice': $sqeykgyoooqysmca = 'info'; break; case 'error': $sqeykgyoooqysmca = 'danger'; break; default: $sqeykgyoooqysmca = $qqscaoyqikuyeoaw; } $ooggiaqasyawsuks = Gfan::iwgqamekocwaigci(); $nsmgceoqaqogqmuw = $ycyucwoysmwkgiui['notice'] ?? ''; if ($nsmgceoqaqogqmuw) { if ($ooggiaqasyawsuks->gkksucgseqqemesc()->has($nsmgceoqaqogqmuw, 'a')) { $nsmgceoqaqogqmuw = $ooggiaqasyawsuks->gkksucgseqqemesc()->igmaewykumgwoaoy($nsmgceoqaqogqmuw, ['a' => ['class' => 'alert-link']]); } $ycyucwoysmwkgiui['notice'] = $nsmgceoqaqogqmuw; } $cmkqisoeyioisqaw[] = "alert alert-{$sqeykgyoooqysmca} alert-dismissible fade show no-margin"; echo implode(' ', array_filter($cmkqisoeyioisqaw, 'rtrim')); } } if (!function_exists('pmpr_wc_get_alert_close')) { function pmpr_wc_get_alert_close() { echo Gfan::iwgqamekocwaigci()->kugiyqykwaskawsc()->ocmyoyeuugcyqccu(); } } if (!function_exists('pmpr_get_wc_total_card_list_item_class')) { function pmpr_get_wc_total_card_list_item_class($ugugagoguiycqeys = '') { echo "list-group-item p-0 bg-transparent {$ugugagoguiycqeys}"; } }

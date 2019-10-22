<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/number_to_word_converter.css" media="all"/>
    <?php include('parts/head.php'); ?>
</head>
<body>
<?php include('parts/header.php'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1><?php $warning = "";
                if ($tool['complete'] != 1) {
                    $warning = " <i class='fa fa-exclamation-triangle text-warning' title='Still in development.'></i> ";
                }
                echo ($tool['name'] . $warning) ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
            <p class="text-center"><?php echo $tool['user_guide'] ?></p>
        </div>
    </div>
    <!--    Tool content-->
    <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
            <div class="well well-sm">
                <p class="info text-danger"></p>
                <form class="form-horizontal" action="number-to-word-converter.php#" method="post">
                    <fieldset>

                        <!-- Textarea -->
                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="data" name="data" placeholder="Enter number" class="form-control" type="text">
                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <div class="col-md-12">
                                <select id="language" name="language" class="form-control">
                                    <option value="">select language</option><option value="aa_DJ">Afar (Djibouti)</option><option value="aa_ER">Afar (Eritrea)</option><option value="aa_ET">Afar (Ethiopia)</option><option value="af_ZA">Afrikaans (South Africa)</option><option value="sq_AL">Albanian (Albania)</option><option value="sq_MK">Albanian (Macedonia)</option><option value="am_ET">Amharic (Ethiopia)</option><option value="ar_DZ">Arabic (Algeria)</option><option value="ar_BH">Arabic (Bahrain)</option><option value="ar_EG">Arabic (Egypt)</option><option value="ar_IN">Arabic (India)</option><option value="ar_IQ">Arabic (Iraq)</option><option value="ar_JO">Arabic (Jordan)</option><option value="ar_KW">Arabic (Kuwait)</option><option value="ar_LB">Arabic (Lebanon)</option><option value="ar_LY">Arabic (Libya)</option><option value="ar_MA">Arabic (Morocco)</option><option value="ar_OM">Arabic (Oman)</option><option value="ar_QA">Arabic (Qatar)</option><option value="ar_SA">Arabic (Saudi Arabia)</option><option value="ar_SD">Arabic (Sudan)</option><option value="ar_SY">Arabic (Syria)</option><option value="ar_TN">Arabic (Tunisia)</option><option value="ar_AE">Arabic (United Arab Emirates)</option><option value="ar_YE">Arabic (Yemen)</option><option value="an_ES">Aragonese (Spain)</option><option value="hy_AM">Armenian (Armenia)</option><option value="as_IN">Assamese (India)</option><option value="ast_ES">Asturian (Spain)</option><option value="az_AZ">Azerbaijani (Azerbaijan)</option><option value="az_TR">Azerbaijani (Turkey)</option><option value="eu_FR">Basque (France)</option><option value="eu_ES">Basque (Spain)</option><option value="be_BY">Belarusian (Belarus)</option><option value="bem_ZM">Bemba (Zambia)</option><option value="bn_BD">Bengali (Bangladesh)</option><option value="bn_IN">Bengali (India)</option><option value="ber_DZ">Berber (Algeria)</option><option value="ber_MA">Berber (Morocco)</option><option value="byn_ER">Blin (Eritrea)</option><option value="bs_BA">Bosnian (Bosnia and Herzegovina)</option><option value="br_FR">Breton (France)</option><option value="bg_BG">Bulgarian (Bulgaria)</option><option value="my_MM">Burmese (Myanmar [Burma])</option><option value="ca_AD">Catalan (Andorra)</option><option value="ca_FR">Catalan (France)</option><option value="ca_IT">Catalan (Italy)</option><option value="ca_ES">Catalan (Spain)</option><option value="zh_CN">Chinese (China)</option><option value="zh_HK">Chinese (Hong Kong SAR China)</option><option value="zh_SG">Chinese (Singapore)</option><option value="zh_TW">Chinese (Taiwan)</option><option value="cv_RU">Chuvash (Russia)</option><option value="kw_GB">Cornish (United Kingdom)</option><option value="crh_UA">Crimean Turkish (Ukraine)</option><option value="hr_HR">Croatian (Croatia)</option><option value="cs_CZ">Czech (Czech Republic)</option><option value="da_DK">Danish (Denmark)</option><option value="dv_MV">Divehi (Maldives)</option><option value="nl_AW">Dutch (Aruba)</option><option value="nl_BE">Dutch (Belgium)</option><option value="nl_NL">Dutch (Netherlands)</option><option value="dz_BT">Dzongkha (Bhutan)</option><option value="en_AG">English (Antigua and Barbuda)</option><option value="en_AU">English (Australia)</option><option value="en_BW">English (Botswana)</option><option value="en_CA">English (Canada)</option><option value="en_DK">English (Denmark)</option><option value="en_HK">English (Hong Kong SAR China)</option><option value="en_IN">English (India)</option><option value="en_IE">English (Ireland)</option><option value="en_NZ">English (New Zealand)</option><option value="en_NG">English (Nigeria)</option><option value="en_PH">English (Philippines)</option><option value="en_SG">English (Singapore)</option><option value="en_ZA">English (South Africa)</option><option value="en_GB">English (United Kingdom)</option><option value="en_US">English (United States)</option><option value="en_ZM">English (Zambia)</option><option value="en_ZW">English (Zimbabwe)</option><option value="eo">Esperanto</option><option value="et_EE">Estonian (Estonia)</option><option value="fo_FO">Faroese (Faroe Islands)</option><option value="fil_PH">Filipino (Philippines)</option><option value="fi_FI">Finnish (Finland)</option><option value="fr_BE">French (Belgium)</option><option value="fr_CA">French (Canada)</option><option value="fr_FR">French (France)</option><option value="fr_LU">French (Luxembourg)</option><option value="fr_CH">French (Switzerland)</option><option value="fur_IT">Friulian (Italy)</option><option value="ff_SN">Fulah (Senegal)</option><option value="gl_ES">Galician (Spain)</option><option value="lg_UG">Ganda (Uganda)</option><option value="gez_ER">Geez (Eritrea)</option><option value="gez_ET">Geez (Ethiopia)</option><option value="ka_GE">Georgian (Georgia)</option><option value="de_AT">German (Austria)</option><option value="de_BE">German (Belgium)</option><option value="de_DE">German (Germany)</option><option value="de_LI">German (Liechtenstein)</option><option value="de_LU">German (Luxembourg)</option><option value="de_CH">German (Switzerland)</option><option value="el_CY">Greek (Cyprus)</option><option value="el_GR">Greek (Greece)</option><option value="gu_IN">Gujarati (India)</option><option value="ht_HT">Haitian (Haiti)</option><option value="ha_NG">Hausa (Nigeria)</option><option value="iw_IL">Hebrew (Israel)</option><option value="he_IL">Hebrew (Israel)</option><option value="hi_IN">Hindi (India)</option><option value="hu_HU">Hungarian (Hungary)</option><option value="is_IS">Icelandic (Iceland)</option><option value="ig_NG">Igbo (Nigeria)</option><option value="id_ID">Indonesian (Indonesia)</option><option value="ia">Interlingua</option><option value="iu_CA">Inuktitut (Canada)</option><option value="ik_CA">Inupiaq (Canada)</option><option value="ga_IE">Irish (Ireland)</option><option value="it_IT">Italian (Italy)</option><option value="it_CH">Italian (Switzerland)</option><option value="ja_JP">Japanese (Japan)</option><option value="kl_GL">Kalaallisut (Greenland)</option><option value="kn_IN">Kannada (India)</option><option value="ks_IN">Kashmiri (India)</option><option value="csb_PL">Kashubian (Poland)</option><option value="kk_KZ">Kazakh (Kazakhstan)</option><option value="km_KH">Khmer (Cambodia)</option><option value="rw_RW">Kinyarwanda (Rwanda)</option><option value="ky_KG">Kirghiz (Kyrgyzstan)</option><option value="kok_IN">Konkani (India)</option><option value="ko_KR">Korean (South Korea)</option><option value="ku_TR">Kurdish (Turkey)</option><option value="lo_LA">Lao (Laos)</option><option value="lv_LV">Latvian (Latvia)</option><option value="li_BE">Limburgish (Belgium)</option><option value="li_NL">Limburgish (Netherlands)</option><option value="lt_LT">Lithuanian (Lithuania)</option><option value="nds_DE">Low German (Germany)</option><option value="nds_NL">Low German (Netherlands)</option><option value="mk_MK">Macedonian (Macedonia)</option><option value="mai_IN">Maithili (India)</option><option value="mg_MG">Malagasy (Madagascar)</option><option value="ms_MY">Malay (Malaysia)</option><option value="ml_IN">Malayalam (India)</option><option value="mt_MT">Maltese (Malta)</option><option value="gv_GB">Manx (United Kingdom)</option><option value="mi_NZ">Maori (New Zealand)</option><option value="mr_IN">Marathi (India)</option><option value="mn_MN">Mongolian (Mongolia)</option><option value="ne_NP">Nepali (Nepal)</option><option value="se_NO">Northern Sami (Norway)</option><option value="nso_ZA">Northern Sotho (South Africa)</option><option value="nb_NO">Norwegian Bokmål (Norway)</option><option value="nn_NO">Norwegian Nynorsk (Norway)</option><option value="oc_FR">Occitan (France)</option><option value="or_IN">Oriya (India)</option><option value="om_ET">Oromo (Ethiopia)</option><option value="om_KE">Oromo (Kenya)</option><option value="os_RU">Ossetic (Russia)</option><option value="pap_AN">Papiamento (Netherlands Antilles)</option><option value="ps_AF">Pashto (Afghanistan)</option><option value="fa_IR">Persian (Iran)</option><option value="pl_PL">Polish (Poland)</option><option value="pt_BR">Portuguese (Brazil)</option><option value="pt_PT">Portuguese (Portugal)</option><option value="pa_IN">Punjabi (India)</option><option value="pa_PK">Punjabi (Pakistan)</option><option value="ro_RO">Romanian (Romania)</option><option value="ru_RU">Russian (Russia)</option><option value="ru_UA">Russian (Ukraine)</option><option value="sa_IN">Sanskrit (India)</option><option value="sc_IT">Sardinian (Italy)</option><option value="gd_GB">Scottish Gaelic (United Kingdom)</option><option value="sr_ME">Serbian (Montenegro)</option><option value="sr_RS">Serbian (Serbia)</option><option value="sid_ET">Sidamo (Ethiopia)</option><option value="sd_IN">Sindhi (India)</option><option value="si_LK">Sinhala (Sri Lanka)</option><option value="sk_SK">Slovak (Slovakia)</option><option value="sl_SI">Slovenian (Slovenia)</option><option value="so_DJ">Somali (Djibouti)</option><option value="so_ET">Somali (Ethiopia)</option><option value="so_KE">Somali (Kenya)</option><option value="so_SO">Somali (Somalia)</option><option value="nr_ZA">South Ndebele (South Africa)</option><option value="st_ZA">Southern Sotho (South Africa)</option><option value="es_AR">Spanish (Argentina)</option><option value="es_BO">Spanish (Bolivia)</option><option value="es_CL">Spanish (Chile)</option><option value="es_CO">Spanish (Colombia)</option><option value="es_CR">Spanish (Costa Rica)</option><option value="es_DO">Spanish (Dominican Republic)</option><option value="es_EC">Spanish (Ecuador)</option><option value="es_SV">Spanish (El Salvador)</option><option value="es_GT">Spanish (Guatemala)</option><option value="es_HN">Spanish (Honduras)</option><option value="es_MX">Spanish (Mexico)</option><option value="es_NI">Spanish (Nicaragua)</option><option value="es_PA">Spanish (Panama)</option><option value="es_PY">Spanish (Paraguay)</option><option value="es_PE">Spanish (Peru)</option><option value="es_ES">Spanish (Spain)</option><option value="es_US">Spanish (United States)</option><option value="es_UY">Spanish (Uruguay)</option><option value="es_VE">Spanish (Venezuela)</option><option value="sw_KE">Swahili (Kenya)</option><option value="sw_TZ">Swahili (Tanzania)</option><option value="ss_ZA">Swati (South Africa)</option><option value="sv_FI">Swedish (Finland)</option><option value="sv_SE">Swedish (Sweden)</option><option value="tl_PH">Tagalog (Philippines)</option><option value="tg_TJ">Tajik (Tajikistan)</option><option value="ta_IN">Tamil (India)</option><option value="tt_RU">Tatar (Russia)</option><option value="te_IN">Telugu (India)</option><option value="th_TH">Thai (Thailand)</option><option value="bo_CN">Tibetan (China)</option><option value="bo_IN">Tibetan (India)</option><option value="tig_ER">Tigre (Eritrea)</option><option value="ti_ER">Tigrinya (Eritrea)</option><option value="ti_ET">Tigrinya (Ethiopia)</option><option value="ts_ZA">Tsonga (South Africa)</option><option value="tn_ZA">Tswana (South Africa)</option><option value="tr_CY">Turkish (Cyprus)</option><option value="tr_TR">Turkish (Turkey)</option><option value="tk_TM">Turkmen (Turkmenistan)</option><option value="ug_CN">Uighur (China)</option><option value="uk_UA">Ukrainian (Ukraine)</option><option value="hsb_DE">Upper Sorbian (Germany)</option><option value="ur_PK">Urdu (Pakistan)</option><option value="uz_UZ">Uzbek (Uzbekistan)</option><option value="ve_ZA">Venda (South Africa)</option><option value="vi_VN">Vietnamese (Vietnam)</option><option value="wa_BE">Walloon (Belgium)</option><option value="cy_GB">Welsh (United Kingdom)</option><option value="fy_DE">Western Frisian (Germany)</option><option value="fy_NL">Western Frisian (Netherlands)</option><option value="wo_SN">Wolof (Senegal)</option><option value="xh_ZA">Xhosa (South Africa)</option><option value="yi_US">Yiddish (United States)</option><option value="yo_NG">Yoruba (Nigeria)</option><option value="zu_ZA">Zulu (South Africa)</option>                            </select>
                            </div>
                        </div>

                        <!-- Button (Double) -->
                        <div class="form-group">
                            <div class="col-md-12">
                                <button id="convert" name="convert" class="btn btn-success">Convert</button>
                                <button id="clear" name="clear" class="btn btn-danger">Clear</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
            <img style="display:none;margin-bottom:20px;" src="img/loader.GIF" alt="loader"/>
            <div class="well well-sm out_div" style="display:none;">
                <form class="form-horizontal" action="number-to-word-converter.php#" method="post">
                    <fieldset>

                        <!-- Textarea -->
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea style="height:250px;" class="form-control" id="out" name="out"></textarea>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
<!--    <div class="row">-->
<!--    </div>-->
    <!--    End of tool content-->
    <?php include('parts/tools.php'); ?>
</div>
<div class="footer">© <script>document.write((new Date()).getFullYear().toString());</script> | mcornel.com &#9786;</div>
<script src="../js/jquery-3.1.1.min.js"></script>
<script src="js/number_to_word_converter.js"></script>
</body>
</html>
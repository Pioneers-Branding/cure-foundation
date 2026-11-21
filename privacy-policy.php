<?php
/**
 * Privacy Policy — /privacy-policy.php
 * Compliance page (DPDP Act 2023 / NMC). Hand-written, not generated.
 */

require_once __DIR__ . '/includes/bootstrap.php';

cure_render_page(array(
    'url'        => '/privacy-policy/',
    'wp_id'      => null,
    'header_v'   => 1,
    'body_class' => 'page-template-default page page-privacy-policy wp-custom-logo wp-embed-responsive tribe-no-js singular elementor-default elementor-kit-9',
    'head_dyn'   => array(
    3 => '<title>Privacy Policy – Cure Foundation India</title>',
    7 => '<link href="/events.php" rel="alternate" title="Cure Foundation India » iCal Feed" type="text/calendar"/>',
    8 => '<script>
window._wpemojiSettings = {"baseUrl":"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/14.0.0\\/72x72\\/","ext":".png","svgUrl":"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/14.0.0\\/svg\\/","svgExt":".svg","source":{"concatemoji":"/assets/wp-includes/js/wp-emoji-release.min.js?ver=6.3.13"}};
/*! This file is auto-generated */
!function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"\\ud83c\\udff3\\ufe0f\\u200d\\u26a7\\ufe0f","\\ud83c\\udff3\\ufe0f\\u200b\\u26a7\\ufe0f")?!1:!n(e,"\\ud83c\\uddfa\\ud83c\\uddf3","\\ud83c\\uddfa\\u200b\\ud83c\\uddf3")&&!n(e,"\\ud83c\\udff4\\udb40\\udc67\\udb40\\udc62\\udb40\\udc65\\udb40\\udc6e\\udb40\\udc67\\udb40\\udc7f","\\ud83c\\udff4\\u200b\\udb40\\udc67\\u200b\\udb40\\udc62\\u200b\\udb40\\udc65\\u200b\\udb40\\udc6e\\u200b\\udb40\\udc67\\u200b\\udb40\\udc7f");case"emoji":return!n(e,"\\ud83e\\udef1\\ud83c\\udffb\\u200d\\ud83e\\udef2\\ud83c\\udfff","\\ud83e\\udef1\\ud83c\\udffb\\u200b\\ud83e\\udef2\\ud83c\\udfff")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
</script>',
    10 => '<link href="/assets/wp-includes/css/dist/block-library/style.min.css" id="wp-block-library-css" media="all" rel="stylesheet"/>',
    14 => '<link href="/assets/wp-content/plugins/popup-builder/public/css/theme.css" id="theme.css-css" media="all" rel="stylesheet"/>',
    15 => '<link href="/assets/wp-content/plugins/sermone/dist/sermone.css" id="sermone-style-css" media="all" rel="stylesheet"/>',
    17 => '<link href="/assets/wp-content/plugins/give/assets/dist/css/give.css" id="give-styles-css" media="all" rel="stylesheet"/>',
    18 => '<link href="/assets/wp-content/plugins/give/assets/dist/css/give-donation-summary.css" id="give-donation-summary-style-frontend-css" media="all" rel="stylesheet"/>',
    19 => '<link href="/assets/wp-content/plugins/bearsthemes-addons/assets/css/tooltipster.css" id="tooltipster-css" media="all" rel="stylesheet"/>',
    20 => '<link href="/assets/wp-content/plugins/bearsthemes-addons/assets/css/magnific-popup.css" id="magnific-popup-css" media="all" rel="stylesheet"/>',
    21 => '<link href="/assets/wp-content/plugins/bearsthemes-addons/assets/css/elements.css" id="bearsthemes-addons-elements-css" media="all" rel="stylesheet"/>',
    22 => '<link href="/assets/wp-content/plugins/bearsthemes-addons/assets/css/woocommerce.css" id="bearsthemes-addons-woocommerce-css" media="all" rel="stylesheet"/>',
    23 => '<link href="/assets/wp-content/plugins/bearsthemes-addons/assets/css/give.css" id="bearsthemes-addons-give-css" media="all" rel="stylesheet"/>',
    24 => '<link href="/assets/wp-content/plugins/bearsthemes-addons/assets/css/events.css" id="bearsthemes-addons-events-css" media="all" rel="stylesheet"/>',
    25 => '<link href="/assets/wp-content/plugins/bearsthemes-addons/assets/css/sermone.css" id="bearsthemes-addons-sermone-css" media="all" rel="stylesheet"/>',
    26 => '<link href="/assets/wp-content/themes/alone/style.css" id="alone-style-css" media="all" rel="stylesheet"/>',
    27 => '<link href="/assets/wp-content/themes/alone/print.css" id="alone-print-style-css" media="print" rel="stylesheet"/>',
    28 => '<link href="/assets/wp-content/themes/alone/css/give.css" id="alone-give-style-css" media="all" rel="stylesheet"/>',
    29 => '<link href="/assets/wp-content/themes/alone/css/events.css" id="alone-events-style-css" media="all" rel="stylesheet"/>',
    30 => '<link href="/assets/wp-content/themes/alone/css/sermone.css" id="alone-sermone-style-css" media="all" rel="stylesheet"/>',
    31 => '<link href="/assets/wp-content/plugins/ubermenu/pro/assets/css/ubermenu.min.css" id="ubermenu-css" media="all" rel="stylesheet"/>',
    32 => '<link href="/assets/wp-content/plugins/ubermenu/assets/css/skins/minimal.css" id="ubermenu-minimal-css" media="all" rel="stylesheet"/>',
    33 => '<link href="/assets/wp-content/plugins/ubermenu/assets/fontawesome/css/all.min.css" id="ubermenu-font-awesome-all-css" media="all" rel="stylesheet"/>',
    34 => '<script id="jquery-core-js" src="/assets/wp-includes/js/jquery/jquery.min.js"></script>',
    35 => '<script id="jquery-migrate-js" src="/assets/wp-includes/js/jquery/jquery-migrate.min.js"></script>',
    36 => '<script id="Popup.js-js-before">
var sgpbPublicUrl = "/assets/wp-content/plugins/popup-builder/public/";
var SGPB_JS_LOCALIZATION = {"imageSupportAlertMessage":"Only image files supported","pdfSupportAlertMessage":"Only pdf files supported","areYouSure":"Are you sure?","addButtonSpinner":"L","audioSupportAlertMessage":"Only audio files supported (e.g.: mp3, wav, m4a, ogg)","publishPopupBeforeElementor":"Please, publish the popup before starting to use Elementor with it!","publishPopupBeforeDivi":"Please, publish the popup before starting to use Divi Builder with it!","closeButtonAltText":"Close"};
</script>',
    37 => '<script id="Popup.js-js" src="/assets/wp-content/plugins/popup-builder/public/js/Popup.js"></script>',
    38 => '<script id="PopupConfig.js-js" src="/assets/wp-content/plugins/popup-builder/public/js/PopupConfig.js"></script>',
    39 => '<script id="PopupBuilder.js-js-before">
var SGPB_POPUP_PARAMS = {"popupTypeAgeRestriction":"ageRestriction","defaultThemeImages":{"1":"/assets/wp-content/plugins/popup-builder/public/img/theme_1/close.png","2":"/assets/wp-content/plugins/popup-builder/public/img/theme_2/close.png","3":"/assets/wp-content/plugins/popup-builder/public/img/theme_3/close.png","5":"/assets/wp-content/plugins/popup-builder/public/img/theme_5/close.png","6":"/assets/wp-content/plugins/popup-builder/public/img/theme_6/close.png"},"homePageUrl":"https:\\/\\/curefoundationindia.com\\/","isPreview":false,"convertedIdsReverse":[],"dontShowPopupExpireTime":365,"conditionalJsClasses":[],"disableAnalyticsGeneral":true};
var SGPB_JS_PACKAGES = {"packages":{"current":1,"free":1,"silver":2,"gold":3,"platinum":4},"extensions":{"geo-targeting":false,"advanced-closing":false}};
var SGPB_JS_PARAMS = {"ajaxUrl":"https:\\/\\/curefoundationindia.com\\/wp-admin\\/admin-ajax.php","nonce":"c51796b91c"};
</script>',
    40 => '<script id="PopupBuilder.js-js" src="/assets/wp-content/plugins/popup-builder/public/js/PopupBuilder.js"></script>',
    42 => '<script id="sermone-script-js" src="/assets/wp-content/plugins/sermone/dist/sermone.frontend.bundle.js"></script>',
    43 => '<script id="wp-polyfill-inert-js" src="/assets/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js"></script>',
    44 => '<script id="regenerator-runtime-js" src="/assets/wp-includes/js/dist/vendor/regenerator-runtime.min.js"></script>',
    45 => '<script id="wp-polyfill-js" src="/assets/wp-includes/js/dist/vendor/wp-polyfill.min.js"></script>',
    46 => '<script id="wp-hooks-js" src="/assets/wp-includes/js/dist/hooks.min.js"></script>',
    47 => '<script id="wp-i18n-js" src="/assets/wp-includes/js/dist/i18n.min.js"></script>',
    50 => '<script id="give-js" src="/assets/wp-content/plugins/give/assets/dist/js/give.js"></script>',
    58 => '<link href="https://curefoundationindia.com/wp-json/tribe/events/v1/" rel="alternate"/>',
    60 => '<link href="/assets/wp-content/uploads/2021/11/MicrosoftTeams-image-8.png" rel="icon" sizes="32x32"/>',
    61 => '<link href="/assets/wp-content/uploads/2021/11/MicrosoftTeams-image-8.png" rel="icon" sizes="192x192"/>',
    62 => '<link href="/assets/wp-content/uploads/2021/11/MicrosoftTeams-image-8.png" rel="apple-touch-icon"/>',
    63 => '<meta content="/assets/wp-content/uploads/2021/11/MicrosoftTeams-image-8.png" name="msapplication-TileImage"/>',
    65 => '<style id="kirki-inline-styles">/* devanagari */
@font-face {
  font-family: \'Poppins\';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url("/assets/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJbedHFHGPezSQ.woff") format(\'woff\');
  unicode-range: U+0900-097F, U+1CD0-1CF4, U+1CF7-1CF9, U+200C-200D, U+20A8, U+20B9, U+20F0, U+25CC, U+A830-A839, U+A8E0-A8FF, U+11B00-11B0A;
}
/* latin-ext */
@font-face {
  font-family: \'Poppins\';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url("/assets/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJnedHFHGPezSQ.woff") format(\'woff\');
  unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C4, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: \'Poppins\';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url("/assets/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJfedHFHGPc.woff") format(\'woff\');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* devanagari */
@font-face {
  font-family: \'Poppins\';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url("/assets/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLEj6Z11lE92JQEl8qw.woff") format(\'woff\');
  unicode-range: U+0900-097F, U+1CD0-1CF4, U+1CF7-1CF9, U+200C-200D, U+20A8, U+20B9, U+20F0, U+25CC, U+A830-A839, U+A8E0-A8FF, U+11B00-11B0A;
}
/* latin-ext */
@font-face {
  font-family: \'Poppins\';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url("/assets/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLEj6Z1JlE92JQEl8qw.woff") format(\'woff\');
  unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C4, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: \'Poppins\';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url("/assets/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLEj6Z1xlE92JQEk.woff") format(\'woff\');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* devanagari */
@font-face {
  font-family: \'Poppins\';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url("/assets/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLCz7Z11lE92JQEl8qw.woff") format(\'woff\');
  unicode-range: U+0900-097F, U+1CD0-1CF4, U+1CF7-1CF9, U+200C-200D, U+20A8, U+20B9, U+20F0, U+25CC, U+A830-A839, U+A8E0-A8FF, U+11B00-11B0A;
}
/* latin-ext */
@font-face {
  font-family: \'Poppins\';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url("/assets/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLCz7Z1JlE92JQEl8qw.woff") format(\'woff\');
  unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C4, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: \'Poppins\';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url("/assets/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLCz7Z1xlE92JQEk.woff") format(\'woff\');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}/* devanagari */
@font-face {
  font-family: \'Poppins\';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url("/assets/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJbedHFHGPezSQ.woff") format(\'woff\');
  unicode-range: U+0900-097F, U+1CD0-1CF4, U+1CF7-1CF9, U+200C-200D, U+20A8, U+20B9, U+20F0, U+25CC, U+A830-A839, U+A8E0-A8FF, U+11B00-11B0A;
}
/* latin-ext */
@font-face {
  font-family: \'Poppins\';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url("/assets/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJnedHFHGPezSQ.woff") format(\'woff\');
  unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C4, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: \'Poppins\';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url("/assets/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJfedHFHGPc.woff") format(\'woff\');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* devanagari */
@font-face {
  font-family: \'Poppins\';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url("/assets/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLEj6Z11lE92JQEl8qw.woff") format(\'woff\');
  unicode-range: U+0900-097F, U+1CD0-1CF4, U+1CF7-1CF9, U+200C-200D, U+20A8, U+20B9, U+20F0, U+25CC, U+A830-A839, U+A8E0-A8FF, U+11B00-11B0A;
}
/* latin-ext */
@font-face {
  font-family: \'Poppins\';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url("/assets/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLEj6Z1JlE92JQEl8qw.woff") format(\'woff\');
  unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C4, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: \'Poppins\';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url("/assets/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLEj6Z1xlE92JQEk.woff") format(\'woff\');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* devanagari */
@font-face {
  font-family: \'Poppins\';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url("/assets/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLCz7Z11lE92JQEl8qw.woff") format(\'woff\');
  unicode-range: U+0900-097F, U+1CD0-1CF4, U+1CF7-1CF9, U+200C-200D, U+20A8, U+20B9, U+20F0, U+25CC, U+A830-A839, U+A8E0-A8FF, U+11B00-11B0A;
}
/* latin-ext */
@font-face {
  font-family: \'Poppins\';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url("/assets/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLCz7Z1JlE92JQEl8qw.woff") format(\'woff\');
  unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C4, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: \'Poppins\';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url("/assets/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLCz7Z1xlE92JQEk.woff") format(\'woff\');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}/* devanagari */
@font-face {
  font-family: \'Poppins\';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url("/assets/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJbedHFHGPezSQ.woff") format(\'woff\');
  unicode-range: U+0900-097F, U+1CD0-1CF4, U+1CF7-1CF9, U+200C-200D, U+20A8, U+20B9, U+20F0, U+25CC, U+A830-A839, U+A8E0-A8FF, U+11B00-11B0A;
}
/* latin-ext */
@font-face {
  font-family: \'Poppins\';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url("/assets/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJnedHFHGPezSQ.woff") format(\'woff\');
  unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C4, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: \'Poppins\';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url("/assets/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJfedHFHGPc.woff") format(\'woff\');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* devanagari */
@font-face {
  font-family: \'Poppins\';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url("/assets/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLEj6Z11lE92JQEl8qw.woff") format(\'woff\');
  unicode-range: U+0900-097F, U+1CD0-1CF4, U+1CF7-1CF9, U+200C-200D, U+20A8, U+20B9, U+20F0, U+25CC, U+A830-A839, U+A8E0-A8FF, U+11B00-11B0A;
}
/* latin-ext */
@font-face {
  font-family: \'Poppins\';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url("/assets/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLEj6Z1JlE92JQEl8qw.woff") format(\'woff\');
  unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C4, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: \'Poppins\';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url("/assets/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLEj6Z1xlE92JQEk.woff") format(\'woff\');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* devanagari */
@font-face {
  font-family: \'Poppins\';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url("/assets/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLCz7Z11lE92JQEl8qw.woff") format(\'woff\');
  unicode-range: U+0900-097F, U+1CD0-1CF4, U+1CF7-1CF9, U+200C-200D, U+20A8, U+20B9, U+20F0, U+25CC, U+A830-A839, U+A8E0-A8FF, U+11B00-11B0A;
}
/* latin-ext */
@font-face {
  font-family: \'Poppins\';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url("/assets/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLCz7Z1JlE92JQEl8qw.woff") format(\'woff\');
  unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C4, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: \'Poppins\';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url("/assets/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLCz7Z1xlE92JQEk.woff") format(\'woff\');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}</style>',
),
    'head_extra' => array(
    30 => '<link href="/assets/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css" id="elementor-icons-css" media="all" rel="stylesheet"/>
<link href="/assets/wp-content/plugins/elementor/assets/css/frontend.min.css" id="elementor-frontend-css" media="all" rel="stylesheet"/>
<link href="/assets/wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min.css" id="swiper-css" media="all" rel="stylesheet"/>
<link href="/assets/wp-content/uploads/elementor/css/post-9.css" id="elementor-post-9-css" media="all" rel="stylesheet"/>
<link href="/assets/wp-content/uploads/elementor/css/global.css" id="elementor-global-css" media="all" rel="stylesheet"/>',
    33 => '<link href="/assets/_external/fonts.googleapis.com/css_eb96cdab.css" id="google-fonts-1-css" media="all" rel="stylesheet"/>
<link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect"/>',
    53 => '<link href="/privacy-policy.php" rel="canonical"/>',
),
    'content'    => <<<'CURE_PAGE_EOF'

<div class="page-titlebar">
<div class="container responsive">
<div class="page-titlebar-content">
<h1 class="page-title">Privacy Policy</h1>
</div>
</div>
</div>
<main class="site-main" id="main">
<div class="container responsive">
<article class="page-content-wrap page type-page status-publish hentry entry">
<div class="entry-content">
<p><em>Last updated: 21 November 2026</em></p>

<p>This Privacy Policy explains how Cure Foundation India (“CURE Foundation”, “we”, “us”) collects, uses, shares and protects your personal data when you use this website, in line with India’s Digital Personal Data Protection Act, 2023 (“DPDP Act”) and the rules made under it.</p>

<h2>1. Who we are (Data Fiduciary)</h2>
<p>The Data Fiduciary responsible for your personal data is:</p>
<p><strong>Cure Foundation India</strong> (Cancer Care Units Research &amp; Educational Foundation)<br/>
Apollo Cancer Hospital, Hyderabad, Telangana, India 500096<br/>
Email: <a href="mailto:curefound.india@gmail.com">curefound.india@gmail.com</a><br/>
Phone: +91-96767 20002, +91-40-23556357<br/>
Registered address (if different): [REGISTERED ADDRESS]</p>

<h2>2. Personal data we collect</h2>
<ul>
<li><strong>Identity and contact details</strong> you give us, such as your name, email address, phone number and, if the donation form asks for them, your postal address and PAN for an 80G tax receipt.</li>
<li><strong>Donation details</strong>, such as the amount, date and payment reference. Card, UPI and bank details are handled by the payment provider and are not stored by us.</li>
<li><strong>Comments and messages</strong> you submit, including any optional website address.</li>
<li><strong>Health information you choose to share</strong>, for example in a comment, email or message. Please share only what is needed; we never require health information to use this website.</li>
<li><strong>Technical data</strong>, such as your IP address, browser type and the pages you visit, which our hosting provider records in server logs, and the cookies described in section 9.</li>
</ul>

<h2>3. Why we use your data, and our legal basis</h2>
<p>We process your personal data only on the basis of your <strong>consent</strong>, given through the consent box on each form, or where the DPDP Act otherwise permits (for example, to comply with law). We use it to:</p>
<ul>
<li>respond to your enquiries and messages;</li>
<li>process donations and issue receipts and 80G tax certificates;</li>
<li>publish and moderate comments you post;</li>
<li>organise volunteering and awareness events you sign up for;</li>
<li>keep the website secure and working; and</li>
<li>meet our legal, tax and accounting obligations.</li>
</ul>
<p>We do not use your data for any other purpose without asking you first. We do not send marketing messages unless you separately opt in.</p>

<h2>4. Giving and withdrawing consent</h2>
<p>You give consent by ticking the consent box on a form before submitting it. The box is never ticked for you.</p>
<p>You can withdraw consent at any time, as easily as you gave it, by emailing <a href="mailto:curefound.india@gmail.com">curefound.india@gmail.com</a> or writing to the Grievance Officer (section 11) with the subject “Withdraw consent”. After withdrawal we will stop processing your data for that purpose and delete it within a reasonable time, unless we must keep it by law (for example, donation records required under tax law). Withdrawal does not affect processing already carried out, and it may mean we can no longer respond to an open enquiry.</p>

<h2>5. Your rights</h2>
<p>Under the DPDP Act you have the right to:</p>
<ul>
<li><strong>access</strong> a summary of the personal data we hold about you, the processing we carry out, and the people we have shared it with;</li>
<li><strong>correct, complete or update</strong> inaccurate or incomplete data;</li>
<li><strong>erase</strong> data that is no longer needed for the purpose it was collected for, unless the law requires us to keep it;</li>
<li><strong>grievance redressal</strong>, through our Grievance Officer (section 11); and</li>
<li><strong>nominate</strong> another person to exercise these rights on your behalf in the event of your death or incapacity.</li>
</ul>
<p>To use any of these rights, contact the Grievance Officer. We may need to verify your identity before acting on a request.</p>

<h2>6. How long we keep your data</h2>
<p>We keep personal data only for as long as it is needed for the purpose it was collected for, or as long as the law requires. For example, donation and receipt records are kept for the period required under income-tax law, and enquiry messages are deleted once the enquiry is closed and no longer needed: [RETENTION PERIOD FOR ENQUIRIES, e.g. 12 months]. We then delete or anonymise the data.</p>

<h2>7. Who we share data with</h2>
<p>We do not sell or rent your personal data. We share it only with:</p>
<ul>
<li><strong>Service providers (Data Processors)</strong> who process it on our instructions: our website hosting provider [HOSTING PROVIDER]; Formester (online donation form); PayU (payment processing for the “Pay Now” buttons); our bank, Union Bank of India, for bank transfers and UPI; and our email provider [EMAIL PROVIDER].</li>
<li><strong>Partner hospitals</strong>, only where you ask us to help with treatment support, and only with your consent.</li>
<li><strong>Government or legal authorities</strong>, where required by law, for example for tax or 80G reporting, or a lawful request.</li>
</ul>
<p>Some providers may store data outside India. Where they do, we rely on transfers permitted under the DPDP Act.</p>

<h2>8. Security and data breaches</h2>
<p>We use reasonable security safeguards to protect your data, including encrypted (HTTPS) connections, access limited to people who need it, and providers that maintain their own security controls. No system is completely secure. If a personal data breach occurs, we will inform the Data Protection Board of India and affected people as required by the DPDP Act and its rules.</p>

<h2>9. Cookies and third-party services</h2>
<p>This website does <strong>not</strong> use analytics or advertising trackers (such as Google Analytics, Google Tag Manager or Meta Pixel). It uses only the following:</p>
<ul>
<li><strong>Functional browser storage</strong> to remember small choices, such as whether you have closed the announcement popup, and to check that your browser can display emoji.</li>
<li><strong>Comment cookies</strong>, only if you tick “Save my name, email, and website in this browser for the next time I comment.”</li>
<li><strong>Embedded content from third parties</strong>, which may set their own cookies or receive your IP address when it loads: YouTube videos (privacy-enhanced mode, youtube-nocookie.com), the Google Maps map on the Contact Us page, SoundCloud audio players, and the Formester donation form (loaded only after you give consent). These services are governed by their own privacy policies.</li>
<li><strong>Links</strong> to Facebook, Twitter/X, LinkedIn and PayU. These sites are visited only if you click the link.</li>
</ul>
<p>You can block or delete cookies in your browser settings. The website will still work, although embedded videos and maps may not load.</p>

<h2>10. Children’s data</h2>
<p>This website is not directed at children. We do not knowingly collect personal data from anyone under 18 without verifiable consent from a parent or lawful guardian. We do not track, monitor the behaviour of, or target advertising at children. If you believe a child has given us personal data without such consent, please contact us and we will delete it.</p>

<h2>11. Grievance Officer and complaints</h2>
<p>For questions, data requests or complaints, contact our Grievance Officer:</p>
<p><strong>[GRIEVANCE OFFICER NAME]</strong><br/>
Cure Foundation India, Apollo Cancer Hospital, Hyderabad, Telangana, India 500096<br/>
Email: [GRIEVANCE OFFICER EMAIL]<br/>
Phone: [GRIEVANCE OFFICER PHONE]</p>
<p>We will acknowledge your request promptly and respond within [RESPONSE TIMELINE, e.g. 30 days], or within any shorter period required by the DPDP rules. If you are not satisfied with our response, you may complain to the <strong>Data Protection Board of India</strong>.</p>

<h2>12. Changes to this policy</h2>
<p>We may update this policy from time to time. The “Last updated” date at the top shows when it was last changed. If we make significant changes, we will post a notice on this website and, where we hold your contact details and the change affects you, we will tell you directly and ask for fresh consent where required.</p>

</div><!-- .entry-content -->
</article>
</div>
</main><!-- #main -->

CURE_PAGE_EOF,
    'tail_dyn'   => array(
    6 => '<div class="sgpb-main-popup-data-container-19752" style="position:fixed;opacity: 0;filter: opacity(0%);transform: scale(0);">
<div class="sg-popup-builder-content 188" data-events=\'[{"param":"load","value":"","hiddenOption":[]}]\' data-id="19752" data-options="eyJzZ3BiLWltYWdlLXVybCI6Imh0dHBzOlwvXC9jdXJlZm91bmRhdGlvbmluZGlhLmNvbVwvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyNlwvMDFcL1doYXRzQXBwLUltYWdlLTIwMjYtMDEtMjktYXQtMTIuMTkuNDgtUE0uanBlZyIsInNncGItdHlwZSI6ImltYWdlIiwic2dwYi1pcy1wcmV2aWV3IjoiMCIsInNncGItaXMtYWN0aXZlIjoiY2hlY2tlZCIsInNncGItYmVoYXZpb3ItYWZ0ZXItc3BlY2lhbC1ldmVudHMiOltbeyJwYXJhbSI6InNlbGVjdF9ldmVudCJ9XV0sInNncGItcG9wdXAtei1pbmRleCI6Ijk5OTkiLCJzZ3BiLXBvcHVwLXRoZW1lcyI6InNncGItdGhlbWUtMSIsInNncGItb3ZlcmxheS1jb2xvciI6IiIsInNncGItb3ZlcmxheS1vcGFjaXR5IjoiMC44Iiwic2dwYi1jb250ZW50LWN1c3RvbS1jbGFzcyI6InNnLXBvcHVwLWNvbnRlbnQiLCJzZ3BiLWVzYy1rZXkiOiJvbiIsInNncGItZW5hYmxlLWNsb3NlLWJ1dHRvbiI6Im9uIiwic2dwYi1jbG9zZS1idXR0b24tZGVsYXkiOiIwIiwic2dwYi1jbG9zZS1idXR0b24tcG9zaXRpb24iOiJib3R0b21SaWdodCIsInNncGItYnV0dG9uLXBvc2l0aW9uLXRvcCI6IiIsInNncGItYnV0dG9uLXBvc2l0aW9uLXJpZ2h0IjoiOSIsInNncGItYnV0dG9uLXBvc2l0aW9uLWJvdHRvbSI6IjkiLCJzZ3BiLWJ1dHRvbi1wb3NpdGlvbi1sZWZ0IjoiIiwic2dwYi1idXR0b24taW1hZ2UiOiIiLCJzZ3BiLWJ1dHRvbi1pbWFnZS13aWR0aCI6IjIxIiwic2dwYi1idXR0b24taW1hZ2UtaGVpZ2h0IjoiMjEiLCJzZ3BiLWJvcmRlci1jb2xvciI6IiMwMDAwMDAiLCJzZ3BiLWJvcmRlci1yYWRpdXMiOiIwIiwic2dwYi1ib3JkZXItcmFkaXVzLXR5cGUiOiIlIiwic2dwYi1idXR0b24tdGV4dCI6IkNsb3NlIiwic2dwYi1vdmVybGF5LWNsaWNrIjoib24iLCJzZ3BiLXBvcHVwLWRpbWVuc2lvbi1tb2RlIjoicmVzcG9uc2l2ZU1vZGUiLCJzZ3BiLXJlc3BvbnNpdmUtZGltZW5zaW9uLW1lYXN1cmUiOiJhdXRvIiwic2dwYi13aWR0aCI6IjY0MHB4Iiwic2dwYi1oZWlnaHQiOiI0ODBweCIsInNncGItbWF4LXdpZHRoIjoiIiwic2dwYi1tYXgtaGVpZ2h0IjoiIiwic2dwYi1taW4td2lkdGgiOiIxMjBweCIsInNncGItbWluLWhlaWdodCI6IiIsInNncGItc2hvdy1wb3B1cC1zYW1lLXVzZXIiOiJvbiIsInNncGItc2hvdy1wb3B1cC1zYW1lLXVzZXItY291bnQiOiIxIiwic2dwYi1zaG93LXBvcHVwLXNhbWUtdXNlci1leHBpcnkiOiIxIiwic2dwYi1vcGVuLWFuaW1hdGlvbi1lZmZlY3QiOiJObyBlZmZlY3QiLCJzZ3BiLWNsb3NlLWFuaW1hdGlvbi1lZmZlY3QiOiJObyBlZmZlY3QiLCJzZ3BiLWVuYWJsZS1jb250ZW50LXNjcm9sbGluZyI6Im9uIiwic2dwYi1wb3B1cC1vcmRlciI6IjAiLCJzZ3BiLXBvcHVwLWRlbGF5IjoiMCIsInNncGItcG9zdC1pZCI6IjE5NzUyIiwic2dwYi1lbmFibGUtcG9wdXAtb3ZlcmxheSI6Im9uIiwic2dwYi1idXR0b24taW1hZ2UtZGF0YSI6IiIsInNncGItYmFja2dyb3VuZC1pbWFnZS1kYXRhIjoiIiwic2dwYkNvbmRpdGlvbnMiOm51bGx9" id="sg-popup-content-wrapper-19752">
<div class="sgpb-popup-builder-content-19752 sgpb-popup-builder-content-html"><img alt="" class="sgpb-preloaded-image-19752" height="1" src="/assets/wp-content/uploads/2026/01/WhatsApp-Image-2026-01-29-at-12.19.48-PM.jpeg" style="position:absolute;right:9999999999999px;" width="1"/></div>',
    9 => '<script id="give-donation-summary-script-frontend-js" src="/assets/wp-content/plugins/give/assets/dist/js/give-donation-summary.js"></script>',
    10 => '<script id="alone-priority-menu-js" src="/assets/wp-content/themes/alone/js/priority-menu.js"></script>',
    11 => '<script id="alone-main-js" src="/assets/wp-content/themes/alone/js/main.js"></script>',
    12 => '<script id="alone-waypoint-js" src="/assets/wp-content/themes/alone/js/waypoints.min.js"></script>',
    13 => '<script id="alone-progressbar-js" src="/assets/wp-content/themes/alone/js/progressbar.min.js"></script>',
    14 => '<script id="alone-give-js" src="/assets/wp-content/themes/alone/js/give.js"></script>',
    15 => '<script id="ubermenu-js-extra">
var ubermenu_data = {"remove_conflicts":"on","reposition_on_load":"off","intent_delay":"300","intent_interval":"100","intent_threshold":"7","scrollto_offset":"50","scrollto_duration":"1000","responsive_breakpoint":"959","accessible":"on","retractor_display_strategy":"responsive","touch_off_close":"on","submenu_indicator_close_mobile":"on","collapse_after_scroll":"on","v":"3.7.3","configurations":["main"],"ajax_url":"https:\\/\\/curefoundationindia.com\\/wp-admin\\/admin-ajax.php","plugin_url":"/assets/wp-content/plugins/ubermenu/","disable_mobile":"off","prefix_boost":"","use_core_svgs":"off","aria_role_navigation":"off","aria_nav_label":"off","aria_expanded":"off","aria_hidden":"off","aria_controls":"","aria_responsive_toggle":"off","icon_tag":"i","esc_close_mobile":"on","theme_locations":{"primary":"Primary Menu","footer":"Footer Menu"}};
</script>',
    16 => '<script id="ubermenu-js" src="/assets/wp-content/plugins/ubermenu/assets/js/ubermenu.min.js"></script>',
),
    'tail_extra' => array(
    -1 => '
</div>',
    16 => '<script id="elementor-webpack-runtime-js" src="/assets/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js"></script>
<script id="elementor-frontend-modules-js" src="/assets/wp-content/plugins/elementor/assets/js/frontend-modules.min.js"></script>
<script id="elementor-waypoints-js" src="/assets/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js"></script>
<script id="jquery-ui-core-js" src="/assets/wp-includes/js/jquery/ui/core.min.js"></script>
<script id="elementor-frontend-js-before">
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselWrapperAriaLabel":"Carousel | Horizontal scrolling: Arrow Left & Right","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.16.4","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"additional_custom_breakpoints":true,"landing-pages":true},"urls":{"assets":"/assets/wp-content/plugins/elementor/assets/"},"swiperClass":"swiper-container","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":0,"title":"Privacy%20Policy%20%E2%80%93%20Cure%20Foundation%20India","excerpt":"","featuredImage":false}};
</script>
<script id="elementor-frontend-js" src="/assets/wp-content/plugins/elementor/assets/js/frontend.min.js"></script>',
),
));

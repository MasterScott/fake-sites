<!DOCTYPE HTML>
<html lang="ru"><head>
    <meta charset="utf-8"><script type="text/javascript" src="http://bam.nr-data.net/1/6815601b35?a=1830874&amp;pl=1449471022721&amp;v=768.2acc9fa&amp;to=DQklBh4gIzo1NAEzNzRDAScCIjkgOzlaOy0uBCI8GCguKCA%2BGjR2LAUiJR9vLygnPhZgGjsfLjE4JCA5ODYBPw4zCTA%3D&amp;ap=38&amp;be=198&amp;fe=818&amp;dc=309&amp;f=%5B%5D&amp;perf=%7B%22timing%22:%7B%22of%22:1449471022721,%22n%22:0,%22u%22:34,%22ue%22:37,%22dl%22:49,%22di%22:486,%22ds%22:506,%22de%22:531,%22dc%22:1015,%22l%22:1015,%22le%22:1017,%22f%22:0,%22dn%22:0,%22dne%22:0,%22c%22:0,%22ce%22:0,%22rq%22:17,%22rp%22:30,%22rpe%22:33%7D,%22navigation%22:%7B%22ty%22:1%7D%7D&amp;jsonp=NREUM.setToken"></script><script src="http://js-agent.newrelic.com/nr-768.min.jss"></script><script type="text/javascript" async="" src="http://mc.wargaming.net/mcs.jss"></script><script type="text/javascript" async="" src="http://mc.yandex.ru/metrika/watch.jss"></script><script async="" src="//www.googletagmanager.com/gtm.jss?id=GTM-H42C"></script><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({QJf3ax:[function(e,n){function t(e){function n(n,t,a){e&&e(n,t,a),a||(a={});for(var u=c(n),f=u.length,s=i(a,o,r),p=0;f>p;p++)u[p].apply(s,t);return s}function a(e,n){f[e]=c(e).concat(n)}function c(e){return f[e]||[]}function u(){return t(n)}var f={};return{on:a,emit:n,create:u,listeners:c,_events:f}}function r(){return{}}var o="nr@context",i=e("gos");n.exports=t()},{gos:"7eSDFh"}],ee:[function(e,n){n.exports=e("QJf3ax")},{}],3:[function(e,n){function t(e){return function(){r(e,[(new Date).getTime()].concat(i(arguments)))}}var r=e("handle"),o=e(1),i=e(2);"undefined"==typeof window.newrelic&&(newrelic=window.NREUM);var a=["setPageViewName","addPageAction","setCustomAttribute","finished","addToTrace","inlineHit","noticeError"];o(a,function(e,n){window.NREUM[n]=t("api-"+n)}),n.exports=window.NREUM},{1:12,2:13,handle:"D5DuLP"}],gos:[function(e,n){n.exports=e("7eSDFh")},{}],"7eSDFh":[function(e,n){function t(e,n,t){if(r.call(e,n))return e[n];var o=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return e[n]=o,o}var r=Object.prototype.hasOwnProperty;n.exports=t},{}],D5DuLP:[function(e,n){function t(e,n,t){return r.listeners(e).length?r.emit(e,n,t):void(r.q&&(r.q[e]||(r.q[e]=[]),r.q[e].push(n)))}var r=e("ee").create();n.exports=t,t.ee=r,r.q={}},{ee:"QJf3ax"}],handle:[function(e,n){n.exports=e("D5DuLP")},{}],XL7HBI:[function(e,n){function t(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:i(e,o,function(){return r++})}var r=1,o="nr@id",i=e("gos");n.exports=t},{gos:"7eSDFh"}],id:[function(e,n){n.exports=e("XL7HBI")},{}],G9z0Bl:[function(e,n){function t(){var e=d.info=NREUM.info,n=f.getElementsByTagName("script")[0];if(e&&e.licenseKey&&e.applicationID&&n){c(p,function(n,t){n in e||(e[n]=t)});var t="https"===s.split(":")[0]||e.sslForHttp;d.proto=t?"https://":"http://",a("mark",["onload",i()]);var r=f.createElement("script");r.src=d.proto+e.agent,n.parentNode.insertBefore(r,n)}}function r(){"complete"===f.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=e("handle"),c=e(1),u=window,f=u.document;e(2);var s=(""+location).split("?")[0],p={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-768.min.jss"},d=n.exports={offset:i(),origin:s,features:{}};f.addEventListener?(f.addEventListener("DOMContentLoaded",o,!1),u.addEventListener("load",t,!1)):(f.attachEvent("onreadystatechange",r),u.attachEvent("onload",t)),a("mark",["firstbyte",i()])},{1:12,2:3,handle:"D5DuLP"}],loader:[function(e,n){n.exports=e("G9z0Bl")},{}],12:[function(e,n){function t(e,n){var t=[],o="",i=0;for(o in e)r.call(e,o)&&(t[i]=n(o,e[o]),i+=1);return t}var r=Object.prototype.hasOwnProperty;n.exports=t},{}],13:[function(e,n){function t(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(0>o?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=t},{}]},{},["G9z0Bl"]);</script><script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","queueTime":0,"licenseKey":"6815601b35","agent":"js-agent.newrelic.com/nr-768.min.jss","transactionName":"DQklBh4gIzo1NAEzNzRDAScCIjkgOzlaOy0uBCI8GCguKCA+GjR2LAUiJR9vLygnPhZgGjsfLjE4JCA5ODYBPw4zCTA=","applicationID":"1830874","errorBeacon":"bam.nr-data.net","applicationTime":38}</script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="">
	<link rel="shortcut icon" href="https://ru.wargaming.net/favicon.ico">
    <meta name="description" content="">
    <title>
	Получить Type-59 | Wargaming.net ID
</title>

    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    

    

    
    <link rel="stylesheet" type="text/css" href="https://ru.wargaming.net/id/static/1.32.0/wgnet/css/style.css" media="screen, projection">
    

    

    
    
    <script type="text/javascript" charset="utf-8" src="https://ru.wargaming.net/id/static/1.32.0/wgni/js/riddler/riddler.jss"></script>
<!--[if lte IE 8]>
    <script type="text/javascript" charset="utf-8" src="https://ru.wargaming.net/id/static/1.32.0/build/js/common.ie.jss"></script>
    <script type="text/javascript" charset="utf-8" src="https://ru.wargaming.net/id/static/1.32.0/build/js/globals.ie.jss"></script>
<![endif]-->
<!--[if gt IE 8]>-->
    <script type="text/javascript" charset="utf-8" src="https://ru.wargaming.net/id/static/1.32.0/build/js/common.jss"></script>
    <script type="text/javascript" charset="utf-8" src="https://ru.wargaming.net/id/static/1.32.0/build/js/globals.jss"></script><style type="text/css"></style>
<!--<![endif]-->
    <script type="text/javascript">
        (function(window) {
            window.Settings = window.Settings || {};
            window.Settings.Authentication =  {"ExternalStatusStateQueryParameter": "external_status_state", "ExternalProviders": ["facebook", "google", "vkontakte"], "ExternalAuthorizeUrl": "https://ru.wargaming.net/id/signin/external/", "UIExternalAuthorizeCompleteDelay": 2.0, "ExternalRegistrationIndex": "https://ru.wargaming.net/id/signin/external/registration/", "ExternalBind": "https://ru.wargaming.net/id/signin/external/bind/", "ExternalRegistrationEnabled": true, "ConfirmationChallengeTypes": ["captcha", "pow"], "ExternalErrorQueryParameter": "external_error", "LoginCreateUrl": "https://ru.wargaming.net/id/signin/process/", "ExternalStatusUrlTemplate": "https://ru.wargaming.net/id/signin/external/status/<%= token %>/", "LoginChallengeTypes": ["captcha", "pow"], "HomeUrl": "/", "UIEscHandlerEnabled": true, "LoginUrl": "https://ru.wargaming.net/id/signin/", "ConfirmationCreateUrl": "https://ru.wargaming.net/id/confirmation/process/", "ExternalSelectQueryParameter": "external", "ConfirmationChallengeUrl": "https://ru.wargaming.net/id/confirmation/challenge/", "ExternalLoginEvent": {"SHOW_REGISTRATION_PAGE": "SHOW_REGISTRATION_PAGE", "SHOW_BIND_PAGE_VIA_BASIC": "SHOW_BIND_PAGE_VIA_BASIC", "SHOW_BIND_PAGE_VIA_EXTERNAL": "SHOW_BIND_PAGE_VIA_EXTERNAL"}, "ExternalProvidersNames": {"google": "Google", "vkontakte": "\u0412\u043a\u043e\u043d\u0442\u0430\u043a\u0442\u0435", "live": "Microsoft Live", "facebook": "Facebook", "gamecenter": "Gamecenter", "steam": "Steam"}, "LogoutMethod": "post", "LogoutUrl": "https://ru.wargaming.net/id/sso/signout/", "LoginChallengeUrl": "https://ru.wargaming.net/id/signin/challenge/", "ExternalOauthErrorAccessDenied": "access_denied"};
            window.Settings.Authentication = _.extend( window.Settings.Authentication || {}, {
                PasswordResetUrl: "https://ru.wargaming.net/personal/password_reset/new/",
                
                RegistrationUrl: "https://ru.wargaming.net/registration/",
                support: "https://ru.wargaming.net/support/",
                next_url: "https://ru.wargaming.net/id/sso/signin/notify/?next=https://ru.wargaming.net/id/openid/2881343583462218221/&amp;trust_root=https%3A%2F%2Fworldoftanks.ru%2F",
                flow: "",
                SuggestNicknameUrl: "/personal/account/nicknames/<%- nickname %>/"
            });

            window.templateContext = _.extend(window.templateContext || {
                STATIC_URL: "https://ru.wargaming.net/id/static/1.32.0/",
                loginFieldType: "email"
            }, window.Settings);
        })(window);
    </script>
    <script type="text/javascript" charset="utf-8" src="https://ru.wargaming.net/id/static/1.32.0/wgnet/js/mobile.jss"></script>


    
    <script type="text/javascript">
    (function(window) {
        window.PENDING_OPERATION_JAVASCRIPT_TIMEOUT = 15;
        window.PENDING_OPERATION_JAVASCRIPT_WAIT = 1;

        

        window.templateContext = _.extend(window.templateContext || {}, {
            AUTH_EXTERNAL_ENABLED: "True"==="True",
            REG_EXTERNAL_ENABLED: "True"==="True",
            FEATURE_REALM: ("None" != 'cn'),
            L_ALREADY_AUTHORIZED: "",
            PERSONAL_SUGGEST_NICKNAME_API_LOCATION_JS:
                "/personal/account/nicknames/&lt;%- nickname %&gt;/",
            CONFIRMATION_PASSWORD_RESET_AVAILABLE: "True",
            wargaming_net_join_details: "None",
            wargaming_net_id_details: "None",
            validation: {
                password_max_length: "100",
                login_max_length: "50",
                auth_get_name_max_length: "24",
                auth_get_name_min_length: "3",
                auth_get_name_regexp: "^[a-zA-Z0-9_]+$"
            }
        });

    })(window);
    </script>


    

<script type="text/javascript">
    (function(window) {
        window.Settings = window.Settings || {};
        window.Settings.msgs = _.extend(window.Settings.msgs || {}, {
            errors: {
                'common': {
                    'login_temporarily_unavailable': 'Вход временно невозможен.',
                    'server_not_answer': 'Сервер временно недоступен. Повторите попытку позже.',
                    'server_timeout_answer': 'Превышено время ожидания. Попробуйте ещё раз.'
                },

                // flow related errors
                'basic': {
                    'ban_by_ip': 'Слишком много попыток входа с вашего IP-адреса. Повторите попытку через несколько секунд.',
                    'invalid_credentials': 'Неверный email или пароль.',
                    'account_not_activated': 'Аккаунт не активирован.'
                },
                'confirmation': {
                    'login_temporarily_unavailable': 'Сервер временно недоступен. Повторите попытку позже.',
                    'server_not_answer': 'Сервер временно недоступен. Повторите попытку позже.',
                    'server_timeout_answer': 'Превышено время ожидания. Попробуйте ещё раз.',
                    'ban_by_ip': 'Слишком много попыток входа с вашего IP-адреса. Повторите попытку через несколько секунд.',
                    'invalid_password': 'Неверный пароль.',
                    'account_not_activated': 'Аккаунт не активирован.'
                },
                'external': {
                    'invalid_params': 'Вход через выбранный сервис временно невозможен.',
                    'access_denied': 'Не удалось войти. Необходим доступ к данным социальной сети.',
                    'external_temporarily_unavailable': 'Вход через выбранный сервис временно невозможен.'
                },
                'external-registration': {
                    'server_not_answer': 'Сервер временно недоступен. Повторите попытку позже.',
                    'server_timeout_answer': 'Превышено время ожидания. Попробуйте ещё раз.',
                    'authentication_failed': '<p>Регистрация с помощью вашего <%- providerName %> профиля завершена.</p><p>При авторизации произошла ошибка. <a href="<%- url %>">Попробуйте ещё раз</a></p>',
                    'spa_conflicted_login': 'Пользователь с указанным email уже существует. <a href="<%- url %>">Войти</a>',
                    'no_external_email': 'Сервис не предоставил информацию о вашем email. Продолжите <a href="https://ru.wargaming.net/registration/">регистрацию</a>, заполнив поле Email вручную.',
                    'spa_bad_response': 'Выбранный вами сервис временно недоступен. Повторите попытку позже.',
                    'spa_internal_communication_error': 'Выбранный вами сервис временно недоступен. Повторите попытку позже.',
                    'spa_generic_conflict': 'Выбранный вами сервис временно недоступен. Повторите попытку позже.',
                    'spa_conflicted_uid': 'Такой аккаунт Wargaming.net уже существует. <a href="<%- url %>">Войти</a>',
                    'invalid_external_parameters': 'При передаче данных из вашего профиля в социальной сети произошла ошибка. <a href="<%- url %>">Попробуйте ещё раз</a>',
                    'no_external_key': 'Выбранный вами сервис временно недоступен. Повторите попытку позже.',
                    'invalid_external_key': 'Выбранный вами сервис временно недоступен. Повторите попытку позже.',
                    'invalid_params': 'Выбранный вами сервис временно недоступен. Повторите попытку позже.',
                    'spa_conflicted_nickname': 'Пользователь с таким именем уже зарегистрирован.',
                    'already_processed': 'Сервер временно недоступен. Повторите попытку позже.',
                    'timeout': 'Выбранный вами сервис временно недоступен. Повторите попытку позже.',
                    'banned_ip': 'Слишком много попыток входа с вашего IP-адреса. Повторите попытку через несколько секунд.',
                    'invalid_nickname': 'Это имя запрещено.',
                    'error': 'Выбранный вами сервис временно недоступен. Повторите попытку позже.'
                },
                'external-bind': {
                    'login_temporarily_unavailable': 'Сервер временно недоступен. Повторите попытку позже.',
                    'server_not_answer': 'Сервер временно недоступен. Повторите попытку позже.',
                    'server_timeout_answer': 'Превышено время ожидания. Попробуйте ещё раз.',
                    'ban_by_ip': 'Слишком много попыток входа с вашего IP-адреса. Повторите попытку через несколько секунд.',
                    'invalid_credentials': 'Неверный email или пароль.',
                    'account_not_activated': 'Аккаунт не активирован.'
                },
                'unbound': {
                    'error-access_denied': 'Не удалось войти. Необходим доступ к данным социальной сети.',
                    'error-access_denied-submit-text': 'Начать игру',
                    'error-access_denied-info-content': '<p class="login-info_text login-info_text__font-size-big">Если это не ваш аккаунт, вы можете <br> <a class="login-info_link js-logout-and-redirect-to-registration" href="<%- logoutAndRedirectToRegistrationUrl %>">создать новый</a></p>',
                    'bind_basic-confirm_message': 'Вы уже авторизованы как <span class="b-bold"></span>.<br>Чтобы привязать профиль <%- externalName %>, введите пароль:',
                    'submit-text': 'Привязать <%- externalName %>',
                    'info_content': '<p class="login-info_text login-info_text__font-size-big">Если это не ваш аккаунт, вы можете <br> <a class="login-info_link js-logout-and-redirect-to-registration" href="<%- logoutAndRedirectToRegistrationUrl %>">создать новый с помощью <%- externalName %></a></p>',
                    'error-invalid_params': 'Возникла ошибка при получении данных из вашего профиля социальной сети.',
                    'error-invalid_params-submit-text': 'Повторить запрос к <%- external %>',
                    'error-invalid_params-info-content': '<a class="login-info_link login-info_link__font-size-big js-redirect-to-game-client-link" href="#">Играть как </a>',
                    'invalid_password': 'Неверный пароль.',
                    'ban_by_ip': 'Слишком много попыток входа с вашего IP-адреса. Повторите попытку через несколько секунд.',
                    'invalid_credentials': 'Неверный email или пароль.',
                    'login_temporarily_unavailable': 'Вход временно невозможен.',
                    'server_not_answer': 'Сервер временно недоступен. Повторите попытку позже.',
                    'server_timeout_answer': 'Превышено время ожидания. Попробуйте ещё раз.',
                    'account_not_activated': 'Аккаунт не активирован.'
                },

                // fields related errors
                "captcha": {
                    "default": "Обязательное поле.",
                    "invalid": "Символы указаны неверно. Попробуйте ещё раз."
                },
                "nickname": {
                    "default": "Выбранный вами сервис временно недоступен. Повторите попытку позже.",
                    "suggested_error": "Пользователь с таким именем уже зарегистрирован.",
                    "suggested_text": "Возможно, вам подойдёт одно из свободных имён:"
                },

                // hints related errors
                "external-registration-hint": {
                    "description": "Минимальная длина: 3 символа. Используйте латинские буквы, цифры и знак нижнего подчёркивания.",
                    "banned": "Это имя запрещено.",
                    "invalid": "Можно использовать латинские буквы, цифры и знак нижнего подчёркивания.",
                    "max_length": "Слишком длинное имя в игре.",
                    "min_length": "Слишком короткое имя в игре.",
                    "exists_error": "Пользователь с таким именем уже зарегистрирован.",
                    "exists_text": "Возможно, вам подойдёт одно из свободных имён:"
                }
            }
        });
    })(window);
</script>

    <script type="text/javascript">
    (function(window) {

        

        window.templateContext = _.extend(window.templateContext || {}, {
            account_info: {
                account_spa: {
                    name: ""
                },
                login: "None"
            }

        });

    })(window);
    </script>

    <!--[if (gt IE 9)|!(IE)]><!-->
<script defer="" id="common_menu_loader" type="text/javascript" charset="utf-8" src="//cdn-cm.gcdn.co/loader.min.jss" data-backend_url="//cm-ru.wargaming.net" data-login_url="" data-token_url="https://ru.wargaming.net/id/commonmenu/token/" data-incomplete_profile_url="https://ru.wargaming.net/personal/" data-content_layout_max_width="1000" data-realm="ru" data-service="wgni" data-language="ru" data-logout_url="https://ru.wargaming.net/id/signout/trigger/" data-project="all" data-registration_url="https://ru.wargaming.net/registration/"></script>
<script defer="" type="text/javascript" src="https://ru.wargaming.net/id/static/1.32.0/commonmenu/js/launcher.jss"></script>
<script defer="" type="text/javascript" src="https://ru.wargaming.net/id/static/1.32.0/wgnet/js/commonmenu/events.jss"></script>
<!--<![endif]-->
<!--[if lte IE 9]>
<script id="common_menu_loader" type="text/javascript" charset="utf-8" src="//cdn-cm.gcdn.co/loader.min.jss"
    data-backend_url="//cm-ru.wargaming.net"
	data-login_url=""
	data-token_url="https://ru.wargaming.net/id/commonmenu/token/"
	data-incomplete_profile_url="https://ru.wargaming.net/personal/"
	data-content_layout_max_width="1000"
	data-realm="ru"
	data-service="wgni"
	data-language="ru"
	data-logout_url="https://ru.wargaming.net/id/signout/trigger/"
	data-project="all"
	data-registration_url="https://ru.wargaming.net/registration/"
></script>
<script type="text/javascript" src="https://ru.wargaming.net/id/static/1.32.0/commonmenu/js/launcher.jss"></script>
<script type="text/javascript" src="https://ru.wargaming.net/id/static/1.32.0/wgnet/js/commonmenu/events.jss"></script>
<![endif]-->
<script type="text/template" id="js-tmpl-common-menu-fallback">
    
<div class="b-global-wrap">
    <div class="b-global-nav js-global-nav">
        <ul class="b-global-nav_service">
            
    
    
    
    <li class="b-global-nav_item">
        <a href="http://ru.wargaming.net" class="js-menu-link b-global-nav_link">
            <span class="b-global-nav_bg b-global-nav__home">
                <span class="b-global-nav_home-ico"></span>
            </span>
        </a>
    </li>
    
    
    
    <li class="js-menu b-global-nav_item">
        <a href="#" class="js-menu-link b-global-nav_link">
            <span class="b-global-nav_bg b-global-nav__arrow">
                Игры
                <span class="b-global-nav_arrow"></span>
            </span>
        </a>
        <ul class="global-nav-submenu">
            <li class="b-global-nav_game">
        <a href="http://worldoftanks.ru" class="b-global-nav_game-link">
            <span class="b-global-nav_game-logo b-global-nav_game-logo__wot">World of Tanks</span>
            <span class="b-global-nav_game-text">
                <span class="b-global-nav_game-name">World of Tanks</span>
                Масштабные танковые онлайн-баталии. Лучшая игра рунета и один из лидеров free-to-play MMO.
            </span>
        </a>
    </li>
            <li class="b-global-nav_game">
        <a href="http://worldofwarplanes.ru" class="b-global-nav_game-link">
            <span class="b-global-nav_game-logo b-global-nav_game-logo__wowp">World of Warplanes</span>
            <span class="b-global-nav_game-text">
                <span class="b-global-nav_game-name">World of Warplanes</span>
                Ожесточённая борьба за господство в воздухе. Один из самых ожидаемых ММО-проектов года.
            </span>
        </a>
    </li>
            <li class="b-global-nav_game">
        <a href="http://worldofwarships.ru" class="b-global-nav_game-link">
            <span class="b-global-nav_game-logo b-global-nav_game-logo__wows">World of Warships</span>
            <span class="b-global-nav_game-text">
                <span class="b-global-nav_game-name">World of Warships</span>
                Территория эпичных морских сражений с огромным выбором военных кораблей прошлого столетия.
            </span>
        </a>
    </li>
            <li class="b-global-nav_game">
                <ul class="b-game-other">
                    <li class="b-game-other_item"><a href="http://wotgenerals.ru" class="b-game-other_wotg"></a></li>
                </ul>
            </li>
        </ul>
    </li>
    
    <li class="b-global-nav_item">
        <a class="b-global-nav_link" href="https://ru.wargaming.net/support/">
            <span class="b-global-nav_bg">Поддержка</span>
        </a>
    </li>
    <li class="b-global-nav_item">
        <a class="b-global-nav_link" href="http://wargag.ru">
            <span class="b-global-nav_bg">WarGag</span>
        </a>
    </li>
    <li class="b-global-nav_item">
        <a class="b-global-nav_link" href="http://wiki.wargaming.net/ru/">
            <span class="b-global-nav_bg">Wiki</span>
        </a>
    </li>
    
    
    <li class="js-menu b-global-nav_item">
        <a href="#" class="js-menu-link b-global-nav_link">
            <span class="b-global-nav_bg b-global-nav__arrow">
                Форумы
                <span class="b-global-nav_arrow"></span>
            </span>
        </a>
        <ul class="global-nav-submenu">
            
    <li class="global-nav-submenu_item">
        <a class="global-nav-submenu_link" href="http://forum.worldoftanks.ru">
            <span class="global-nav-submenu_game-ico global-nav-submenu_game-ico__wot">World of Tanks</span><span class="global-nav-submenu_text">World of Tanks</span>
        </a>
    </li>
            
    <li class="global-nav-submenu_item">
        <a class="global-nav-submenu_link" href="http://forum.worldofwarplanes.ru">
            <span class="global-nav-submenu_game-ico global-nav-submenu_game-ico__wowp">World of Warplanes</span><span class="global-nav-submenu_text">World of Warplanes</span>
        </a>
    </li>
            
    <li class="global-nav-submenu_item">
        <a class="global-nav-submenu_link" href="http://forum.worldofwarships.ru">
            <span class="global-nav-submenu_game-ico global-nav-submenu_game-ico__wows">World of Warships</span><span class="global-nav-submenu_text">World of Warships</span>
        </a>
    </li>
            
    <li class="global-nav-submenu_item">
        <a class="global-nav-submenu_link" href="http://forum.wotgenerals.ru">
            <span class="global-nav-submenu_game-ico global-nav-submenu_game-ico__wotg">World of Tanks Generals</span><span class="global-nav-submenu_text">World of Tanks Generals</span>
        </a>
    </li>
        </ul>
    </li>
    


    
    <li class="js-mobile-menu b-global-nav_item b-global-nav_item__mobile" data-menu-content-selector="#menu-content-projects">
        <a href="#" class="js-menu-link b-global-nav_link">
            <span class="b-global-nav_bg b-global-nav__projects b-global-nav__arrow">
                <span class="b-global-nav_projects-ico">Игры и сервисы</span>
                <span class="b-global-nav_arrow"></span>
            </span>
        </a>
    </li>
    
    <li class="js-mobile-menu b-global-nav_item b-global-nav_item__mobile" data-menu-content-selector="#menu-content-regions">
        <a href="#" class="js-menu-link b-global-nav_link">
            <span class="b-global-nav_bg b-global-nav__region b-global-nav__arrow">
                <span class="b-global-nav_region-ico"></span>
                <span class="b-global-nav_arrow"></span>
            </span>
        </a>
    </li>

        </ul>
        <ul class="b-global-nav_login">
            
    
        
    
        <li class="b-global-nav_item b-global-nav_item__nologin js-auth-menu-not-authenticated">
            
            
                
                <a href="https://ru.wargaming.net/registration/" class="b-global-nav_link js-registration-link" data-url="https://ru.wargaming.net/registration/">Создать аккаунт</a>
                
            
        </li>
        

    <li class="b-global-nav_item b-global-nav_item__mobile b-global-nav_item__nologin">
        <a href="https://ru.wargaming.net/registration/" class="b-global-nav_link js-registration-link" data-url="https://ru.wargaming.net/registration/">Создать аккаунт</a>
    </li>

    
    <li class="js-menu b-global-nav_item">
            <a href="#" class="js-menu-link b-global-nav_link">
                <span class="b-global-nav_bg b-global-nav__region b-global-nav__arrow">
                    <span class="b-global-nav_region-ico"></span>
                    <span class="b-global-nav_arrow"></span>
                </span>
            </a>
            <div class="global-nav-submenu global-nav-submenu__region">
                <div class="b-global-nav_regionbg">
                    <ul class="b-global-nav_region">
                        
                            <li class="b-global-nav_region_item">
                                <a class="b-global-nav_region_name" href="/">Россия</a>
                                <ul class="b-global-nav_language-list">
                                    
                                        <li class="b-global-nav_language-item active"><a class="b-global-nav_language" href="?trust_root=https%3A%2F%2Fworldoftanks.ru%2F&amp;language=ru&amp;next=%2Fid%2Fopenid%2F2881343583462218221%2F">Русский</a></li>
                                    
                                </ul>
                            </li>
                        
                            <li class="b-global-nav_region_item">
                                <a class="b-global-nav_region_name" href="http://na.wargaming.net/?change_realm=1">North America</a>
                                <ul class="b-global-nav_language-list">
                                    
                                        <li class="b-global-nav_language-item"><a class="b-global-nav_language" href="http://na.wargaming.net/?change_realm=1&amp;language=en">English</a></li>
                                    
                                        <li class="b-global-nav_language-item"><a class="b-global-nav_language" href="http://na.wargaming.net/?change_realm=1&amp;language=es-ar">Español</a></li>
                                    
                                        <li class="b-global-nav_language-item"><a class="b-global-nav_language" href="http://na.wargaming.net/?change_realm=1&amp;language=pt-br">Português</a></li>
                                    
                                </ul>
                            </li>
                        
                            <li class="b-global-nav_region_item">
                                <a class="b-global-nav_region_name" href="http://eu.wargaming.net/?change_realm=1">Europe</a>
                                <ul class="b-global-nav_language-list">
                                    
                                        <li class="b-global-nav_language-item"><a class="b-global-nav_language" href="http://eu.wargaming.net/?change_realm=1&amp;language=en">English</a></li>
                                    
                                        <li class="b-global-nav_language-item"><a class="b-global-nav_language" href="http://eu.wargaming.net/?change_realm=1&amp;language=cs">Čeština</a></li>
                                    
                                        <li class="b-global-nav_language-item"><a class="b-global-nav_language" href="http://eu.wargaming.net/?change_realm=1&amp;language=de">Deutsch</a></li>
                                    
                                        <li class="b-global-nav_language-item"><a class="b-global-nav_language" href="http://eu.wargaming.net/?change_realm=1&amp;language=es">Español</a></li>
                                    
                                        <li class="b-global-nav_language-item"><a class="b-global-nav_language" href="http://eu.wargaming.net/?change_realm=1&amp;language=fr">Français</a></li>
                                    
                                        <li class="b-global-nav_language-item"><a class="b-global-nav_language" href="http://eu.wargaming.net/?change_realm=1&amp;language=pl">Polski</a></li>
                                    
                                        <li class="b-global-nav_language-item"><a class="b-global-nav_language" href="http://eu.wargaming.net/?change_realm=1&amp;language=tr">Türkçe</a></li>
                                    
                                </ul>
                            </li>
                        
                            <li class="b-global-nav_region_item">
                                <a class="b-global-nav_region_name" href="http://asia.wargaming.net/?change_realm=1">Asia</a>
                                <ul class="b-global-nav_language-list">
                                    
                                        <li class="b-global-nav_language-item"><a class="b-global-nav_language" href="http://asia.wargaming.net/?change_realm=1&amp;language=en">English</a></li>
                                    
                                        <li class="b-global-nav_language-item"><a class="b-global-nav_language" href="http://asia.wargaming.net/?change_realm=1&amp;language=ja">日本語</a></li>
                                    
                                        <li class="b-global-nav_language-item"><a class="b-global-nav_language" href="http://asia.wargaming.net/?change_realm=1&amp;language=th">ไทย</a></li>
                                    
                                        <li class="b-global-nav_language-item"><a class="b-global-nav_language" href="http://asia.wargaming.net/?change_realm=1&amp;language=vi">Tiếng Việt</a></li>
                                    
                                        <li class="b-global-nav_language-item"><a class="b-global-nav_language" href="http://asia.wargaming.net/?change_realm=1&amp;language=zh-tw">繁體中文</a></li>
                                    
                                </ul>
                            </li>
                        
                            <li class="b-global-nav_region_item">
                                <a class="b-global-nav_region_name" href="http://kr.wargaming.net/?change_realm=1">대한민국</a>
                                <ul class="b-global-nav_language-list">
                                    
                                        <li class="b-global-nav_language-item"><a class="b-global-nav_language" href="http://kr.wargaming.net/?change_realm=1&amp;language=ko">한국어</a></li>
                                    
                                </ul>
                            </li>
                        
                    </ul>
                    <div class="b-global-nav_info">
                        <p class="b-global-nav_info-text">Ваш аккаунт действителен только для одного региона.</p>
                    </div>
                </div>
            </div>
        </li>
    


        </ul>
    </div>
</div>


    
    <ul id="menu-content-projects" class="b-submenu-mobile">
        
        <li class="b-submenu-mobile_item">
            <a class="b-submenu-mobile_link" href="http://ru.wargaming.net">Wargaming.net</a>
        </li>
        
        <li class="b-submenu-mobile_item js-submenu">
            <a class="b-submenu-mobile_link js-submenu-link" href="#">Игры <span class="b-submenu-mobile_arrow"></span></a>
            <ul class="b-submenu-mobile_submenu">
                
    <li class="b-submenu-mobile_submenu-item">
        <a href="http://worldoftanks.ru" class="b-submenu-mobile_submenu-link b-submenu-mobile_submenu-link__game">
            <span class="b-submenu-mobile_game-ico b-submenu-mobile_game-ico__wot"></span>
            <span class="b-submenu-mobile_game">World of Tanks</span>
        </a>
    </li>
                
    <li class="b-submenu-mobile_submenu-item">
        <a href="http://worldofwarplanes.ru" class="b-submenu-mobile_submenu-link b-submenu-mobile_submenu-link__game">
            <span class="b-submenu-mobile_game-ico b-submenu-mobile_game-ico__wowp"></span>
            <span class="b-submenu-mobile_game">World of Warplanes</span>
        </a>
    </li>
                
    <li class="b-submenu-mobile_submenu-item">
        <a href="http://worldofwarships.ru" class="b-submenu-mobile_submenu-link b-submenu-mobile_submenu-link__game">
            <span class="b-submenu-mobile_game-ico b-submenu-mobile_game-ico__wows"></span>
            <span class="b-submenu-mobile_game">World of Warships</span>
        </a>
    </li>
                
    <li class="b-submenu-mobile_submenu-item">
        <a href="http://wotgenerals.ru" class="b-submenu-mobile_submenu-link b-submenu-mobile_submenu-link__game">
            <span class="b-submenu-mobile_game-ico b-submenu-mobile_game-ico__wotg"></span>
            <span class="b-submenu-mobile_game">World of Tanks Generals</span>
        </a>
    </li>
            </ul>
        </li>
        <li class="b-submenu-mobile_item js-submenu">
            <a class="b-submenu-mobile_link js-submenu-link" href="#">Форумы <span class="b-submenu-mobile_arrow"></span></a>
            <ul class="b-submenu-mobile_submenu">
                <li class="b-submenu-mobile_submenu-item">
        <a href="http://forum.worldoftanks.ru" class="b-submenu-mobile_submenu-link b-submenu-mobile_submenu-link__game">
            <span class="b-submenu-mobile_game-ico b-submenu-mobile_game-ico__wot"></span>
            <span class="b-submenu-mobile_game">World of Tanks</span>
        </a>
    </li>
                <li class="b-submenu-mobile_submenu-item">
        <a href="http://forum.worldofwarplanes.ru" class="b-submenu-mobile_submenu-link b-submenu-mobile_submenu-link__game">
            <span class="b-submenu-mobile_game-ico b-submenu-mobile_game-ico__wowp"></span>
            <span class="b-submenu-mobile_game">World of Warplanes</span>
        </a>
    </li>
                <li class="b-submenu-mobile_submenu-item">
        <a href="http://forum.worldofwarships.ru" class="b-submenu-mobile_submenu-link b-submenu-mobile_submenu-link__game">
            <span class="b-submenu-mobile_game-ico b-submenu-mobile_game-ico__wows"></span>
            <span class="b-submenu-mobile_game">World of Warships</span>
        </a>
    </li>
                <li class="b-submenu-mobile_submenu-item">
        <a href="http://forum.wotgenerals.ru" class="b-submenu-mobile_submenu-link b-submenu-mobile_submenu-link__game">
            <span class="b-submenu-mobile_game-ico b-submenu-mobile_game-ico__wotg"></span>
            <span class="b-submenu-mobile_game">World of Tanks Generals</span>
        </a>
    </li>
            </ul>
        </li>
        
    <li class="b-submenu-mobile_item">
        <a class="b-submenu-mobile_link" href="https://ru.wargaming.net/support/">Поддержка</a>
    </li>
    
        
    <li class="b-submenu-mobile_item">
        <a class="b-submenu-mobile_link" href="http://wargag.ru">WarGag</a>
    </li>
    
        
    <li class="b-submenu-mobile_item">
        <a class="b-submenu-mobile_link" href="http://wiki.wargaming.net/ru/">Wiki</a>
    </li>
    
    </ul>
    
    <ul id="menu-content-regions" class="b-submenu-mobile">
        
        <li class="b-submenu-mobile_item js-submenu">
                    <a class="b-submenu-mobile_link js-submenu-link" href="#">Россия<span class="b-submenu-mobile_arrow"></span></a>
                    <ul class="b-submenu-mobile_submenu">
                        <li class="b-submenu-mobile_submenu-item b-submenu-mobile_submenu-item__active">
                                <a href="?trust_root=https%3A%2F%2Fworldoftanks.ru%2F&amp;language=ru&amp;next=%2Fid%2Fopenid%2F2881343583462218221%2F" class="b-submenu-mobile_submenu-link b-submenu-mobile_submenu-link__language">
                                    <span class="b-submenu-mobile_language-ico b-submenu-mobile_language-ico__ru">ru</span>
                                    <span class="b-submenu-mobile_language">Русский</span>
                                </a>
                            </li>
                    </ul>
                </li><li class="b-submenu-mobile_item js-submenu">
                    <a class="b-submenu-mobile_link js-submenu-link" href="#">North America<span class="b-submenu-mobile_arrow"></span></a>
                    <ul class="b-submenu-mobile_submenu">
                        <li class="b-submenu-mobile_submenu-item ">
                                <a href="http://na.wargaming.net/?change_realm=1&amp;language=en" class="b-submenu-mobile_submenu-link b-submenu-mobile_submenu-link__language">
                                    <span class="b-submenu-mobile_language-ico b-submenu-mobile_language-ico__en">en</span>
                                    <span class="b-submenu-mobile_language">English</span>
                                </a>
                            </li><li class="b-submenu-mobile_submenu-item ">
                                <a href="http://na.wargaming.net/?change_realm=1&amp;language=es-ar" class="b-submenu-mobile_submenu-link b-submenu-mobile_submenu-link__language">
                                    <span class="b-submenu-mobile_language-ico b-submenu-mobile_language-ico__es-ar">es-ar</span>
                                    <span class="b-submenu-mobile_language">Español</span>
                                </a>
                            </li><li class="b-submenu-mobile_submenu-item ">
                                <a href="http://na.wargaming.net/?change_realm=1&amp;language=pt-br" class="b-submenu-mobile_submenu-link b-submenu-mobile_submenu-link__language">
                                    <span class="b-submenu-mobile_language-ico b-submenu-mobile_language-ico__pt-br">pt-br</span>
                                    <span class="b-submenu-mobile_language">Português</span>
                                </a>
                            </li>
                    </ul>
                </li><li class="b-submenu-mobile_item js-submenu">
                    <a class="b-submenu-mobile_link js-submenu-link" href="#">Europe<span class="b-submenu-mobile_arrow"></span></a>
                    <ul class="b-submenu-mobile_submenu">
                        <li class="b-submenu-mobile_submenu-item ">
                                <a href="http://eu.wargaming.net/?change_realm=1&amp;language=en" class="b-submenu-mobile_submenu-link b-submenu-mobile_submenu-link__language">
                                    <span class="b-submenu-mobile_language-ico b-submenu-mobile_language-ico__en">en</span>
                                    <span class="b-submenu-mobile_language">English</span>
                                </a>
                            </li><li class="b-submenu-mobile_submenu-item ">
                                <a href="http://eu.wargaming.net/?change_realm=1&amp;language=cs" class="b-submenu-mobile_submenu-link b-submenu-mobile_submenu-link__language">
                                    <span class="b-submenu-mobile_language-ico b-submenu-mobile_language-ico__cs">cs</span>
                                    <span class="b-submenu-mobile_language">Čeština</span>
                                </a>
                            </li><li class="b-submenu-mobile_submenu-item ">
                                <a href="http://eu.wargaming.net/?change_realm=1&amp;language=de" class="b-submenu-mobile_submenu-link b-submenu-mobile_submenu-link__language">
                                    <span class="b-submenu-mobile_language-ico b-submenu-mobile_language-ico__de">de</span>
                                    <span class="b-submenu-mobile_language">Deutsch</span>
                                </a>
                            </li><li class="b-submenu-mobile_submenu-item ">
                                <a href="http://eu.wargaming.net/?change_realm=1&amp;language=es" class="b-submenu-mobile_submenu-link b-submenu-mobile_submenu-link__language">
                                    <span class="b-submenu-mobile_language-ico b-submenu-mobile_language-ico__es">es</span>
                                    <span class="b-submenu-mobile_language">Español</span>
                                </a>
                            </li><li class="b-submenu-mobile_submenu-item ">
                                <a href="http://eu.wargaming.net/?change_realm=1&amp;language=fr" class="b-submenu-mobile_submenu-link b-submenu-mobile_submenu-link__language">
                                    <span class="b-submenu-mobile_language-ico b-submenu-mobile_language-ico__fr">fr</span>
                                    <span class="b-submenu-mobile_language">Français</span>
                                </a>
                            </li><li class="b-submenu-mobile_submenu-item ">
                                <a href="http://eu.wargaming.net/?change_realm=1&amp;language=pl" class="b-submenu-mobile_submenu-link b-submenu-mobile_submenu-link__language">
                                    <span class="b-submenu-mobile_language-ico b-submenu-mobile_language-ico__pl">pl</span>
                                    <span class="b-submenu-mobile_language">Polski</span>
                                </a>
                            </li><li class="b-submenu-mobile_submenu-item ">
                                <a href="http://eu.wargaming.net/?change_realm=1&amp;language=tr" class="b-submenu-mobile_submenu-link b-submenu-mobile_submenu-link__language">
                                    <span class="b-submenu-mobile_language-ico b-submenu-mobile_language-ico__tr">tr</span>
                                    <span class="b-submenu-mobile_language">Türkçe</span>
                                </a>
                            </li>
                    </ul>
                </li><li class="b-submenu-mobile_item js-submenu">
                    <a class="b-submenu-mobile_link js-submenu-link" href="#">Asia<span class="b-submenu-mobile_arrow"></span></a>
                    <ul class="b-submenu-mobile_submenu">
                        <li class="b-submenu-mobile_submenu-item ">
                                <a href="http://asia.wargaming.net/?change_realm=1&amp;language=en" class="b-submenu-mobile_submenu-link b-submenu-mobile_submenu-link__language">
                                    <span class="b-submenu-mobile_language-ico b-submenu-mobile_language-ico__en">en</span>
                                    <span class="b-submenu-mobile_language">English</span>
                                </a>
                            </li><li class="b-submenu-mobile_submenu-item ">
                                <a href="http://asia.wargaming.net/?change_realm=1&amp;language=ja" class="b-submenu-mobile_submenu-link b-submenu-mobile_submenu-link__language">
                                    <span class="b-submenu-mobile_language-ico b-submenu-mobile_language-ico__ja">ja</span>
                                    <span class="b-submenu-mobile_language">日本語</span>
                                </a>
                            </li><li class="b-submenu-mobile_submenu-item ">
                                <a href="http://asia.wargaming.net/?change_realm=1&amp;language=th" class="b-submenu-mobile_submenu-link b-submenu-mobile_submenu-link__language">
                                    <span class="b-submenu-mobile_language-ico b-submenu-mobile_language-ico__th">th</span>
                                    <span class="b-submenu-mobile_language">ไทย</span>
                                </a>
                            </li><li class="b-submenu-mobile_submenu-item ">
                                <a href="http://asia.wargaming.net/?change_realm=1&amp;language=vi" class="b-submenu-mobile_submenu-link b-submenu-mobile_submenu-link__language">
                                    <span class="b-submenu-mobile_language-ico b-submenu-mobile_language-ico__vi">vi</span>
                                    <span class="b-submenu-mobile_language">Tiếng Việt</span>
                                </a>
                            </li><li class="b-submenu-mobile_submenu-item ">
                                <a href="http://asia.wargaming.net/?change_realm=1&amp;language=zh-tw" class="b-submenu-mobile_submenu-link b-submenu-mobile_submenu-link__language">
                                    <span class="b-submenu-mobile_language-ico b-submenu-mobile_language-ico__zh-tw">zh-tw</span>
                                    <span class="b-submenu-mobile_language">繁體中文</span>
                                </a>
                            </li>
                    </ul>
                </li><li class="b-submenu-mobile_item js-submenu">
                    <a class="b-submenu-mobile_link js-submenu-link" href="#">대한민국<span class="b-submenu-mobile_arrow"></span></a>
                    <ul class="b-submenu-mobile_submenu">
                        <li class="b-submenu-mobile_submenu-item ">
                                <a href="http://kr.wargaming.net/?change_realm=1&amp;language=ko" class="b-submenu-mobile_submenu-link b-submenu-mobile_submenu-link__language">
                                    <span class="b-submenu-mobile_language-ico b-submenu-mobile_language-ico__ko">ko</span>
                                    <span class="b-submenu-mobile_language">한국어</span>
                                </a>
                            </li>
                    </ul>
                </li>
    </ul>


</script>
<script src="https://ru.wargaming.net/id/static/1.32.0/i18n/ru.jss"></script>
<script type="text/javascript">
    window.Settings = window.Settings || {};
    window.Settings.PROJECT = "wgni";
    window.Settings.REALM = "ru";
    window.Settings.LANGUAGE_CODE = "ru";
    
    window.Settings.CSRF_TOKEN = "6ryyDCJNcBjXqf1v9FvjX8yS6oLZsSfU";
    window.Settings.SITE_PATH = "https://ru.wargaming.net/id/";
    window.Settings.STATIC_URL = "https://ru.wargaming.net/id/static/1.32.0/";
    window.Settings.HOME_URL = "/";
    

    window.Settings.MOBILE_BROWSER_FORCE_DESKTOP_COOKIE_NAME = "wgn_mobile_browser_force_desktop";

</script>
<script type="text/javascript">
    (function(settings, $, _, window, undefined) {
        var enableMobileStyles = function() {
            var staticUrl = settings.STATIC_URL,
                stylesheets = ['<link rel="stylesheet" type="text/css" href="' + staticUrl + 'wgnet/css/mobile_all.css" />'];

            if (window.Settings.PROJECT === 'wgni') {
                stylesheets.push('<link rel="stylesheet" type="text/css" href="' + staticUrl + 'wgnet/css/mobile.css" />');
            }

            var head = $('head');
            _.each(stylesheets, function(stylesheet) {
                head.append(stylesheet);
            });
        };

        window.Application.on('mobile-browser-detected', function(options) {
            if (options.detected && !options.forceDesktop) {
                enableMobileStyles();
            }
        });

        window.Application.on('enable-mobile-styles', function(options) {
            enableMobileStyles();
        });

        window.Application.on('mobile-browser-detected-onload', function(options) {
            if (options.detected && options.forceDesktop) {
                $('.jss-mobile-browser-force-desktop-item').show();
            }
        });

        $(function() {
            $('.jss-mobile-browser-force-desktop-link').on('click', function() {
                window.Application.trigger('mobile-browser-force-desktop');
            });
        });

    })(window.Settings || {}, jQuery, _, window);

</script>
<script type="text/javascript" charset="utf-8" src="https://ru.wargaming.net/id/static/1.32.0/wgnet/js/mobile.jss"></script>
<script type="text/javascript">
    (function(window, undefined) {
        var Raven = window.Raven,
            ravenConfig = {},
            dns = ravenConfig.dns,
            release = '1.32.0_r1aec0aec51430b2b69d9f554120609d50ca019cf',
            whitelistUrl = new RegExp('https://ru.wargaming.nethttps://ru.wargaming.net/id/');

        if (!Raven || !dns) {
            return;
        }

        Raven.config(dns, {
            release: release,
            whitelistUrls: [
                whitelistUrl
            ]
        }).install();
    })(window);
</script>



<script type="text/javascript" charset="utf-8" src="https://ru.wargaming.net/id/static/1.32.0/wgnet/js/base.jss"></script>

<!--[if lt IE 9]>
    <script src="https://ru.wargaming.net/id/static/1.32.0/wgnet/js/html5.jss"></script>
<![endif]-->

    
    
<style type="text/css"></style><link href="http://cdn-cm.gcdn.co/css/style.css?1.0.2" rel="stylesheet" class="lazyload" charset="utf-8"></head>
<!--[if lte IE 8]><body class="ie page  lang-ru display-page"><![endif]-->
<!--[if !(lte IE 8)]><!--><body class="page  lang-ru display-page"><!--<![endif]-->
    <div class="page-layout ">
        <div class="b-main js-main">

            <div id="js-menu-wrapper">
                <!-- common_menu: start -->
<div id="common_menu"><div class="cm-layout js-cm-layout cm-not-touch" style="visibility: visible;"><div class="cm-layout_content js-cm-layout-content"><a class="cm-singletons cm-singletons__main cm-singletons__logo" href="http://ru.wargaming.net?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"> <span class="cm-singletons_ico-wrapper cm-singletons_ico-wrapper__main cm-singletons_ico-wrapper__logo"><span class="cm-singletons_ico-holder cm-singletons_ico-holder__main cm-singletons_ico-holder__logo"><img class="cm-singletons_ico" src="//cm-ru.wargaming.net/media/public/img/4Fy2RVj9RmCO2LlF6KIbEw.svg" alt=""></span></span> </a> <div class="cm-showcase js-cm-li-ptl"><span class="cm-showcase_opener js-cm-tooltip-games js-cm-dropdown-link" data-active-class="cm-showcase_opener__opened" data-tooltip-text="Информация об играх и ссылки для перехода на порталы и форумы">Игры<span class="cm-arrow cm-arrow__showcase">arrow</span></span><div class="cm-showcase_dropdown js-cm-dropdown js-cm-games-dropdown" data-active-class="cm-showcase_dropdown__opened" data-dropdown="games"><div class="cm-showcase-nav"><a href="#" class="cm-showcase-nav_link cm-showcase-nav_link__left js-carousel-left"><span class="cm-showcase-nav_ico-wrapper"></span> <span class="cm-showcase-nav_ico cm-showcase-nav_ico__left"></span></a> <a href="#" class="cm-showcase-nav_link cm-showcase-nav_link__right js-carousel-right"><span class="cm-showcase-nav_ico-wrapper"></span> <span class="cm-showcase-nav_ico cm-showcase-nav_ico__right"></span></a></div><h1 class="cm-showcase_heading">Узнайте больше об играх:</h1><div class="cm-showcase_wrapper js-showcase-wrapper"><ul class="cm-showcase_list js-tab-carousel"><li class="cm-showcase_item cm-showcase_item__f25322 js-tab-carousel-element" data-tab-name="wot"><style>#common_menu .cm-showcase_item__f25322 .cm-tab__opened,                     #common_menu .cm-not-touch .cm-showcase_item__f25322 .cm-tab:hover { color: #f25322; }                     #common_menu .cm-showcase_item__f25322 .cm-showcase-related_new-mark,                     #common_menu .cm-showcase_item__f25322 .cm-showcase-related_title,                     #common_menu .cm-showcase_item__f25322 .cm-showcase-about_title { color: #f25322; }</style><span class="cm-tab js-cm-dropdown-link js-cm-sub-menu" data-tab-name="wot" data-active-class="cm-tab__opened"><span class="cm-tab_ico-wrapper"><span class="cm-tab_ico-holder js-tab-mark " data-active-class="cm-tab_ico-holder__marked"> <svg width="26px" height="32px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 13 16" enable-background="new 0 0 13 16" xml:space="preserve">
<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M6.5,16l-6.2-5.7L0,2l4-2h5l4,2l-0.3,8.3L6.5,16z M12,2.3L9,1H3.9
	l-3,1.3L1,10l5.5,4.9L12,10V2.3z M5.4,13.1V10l-1.5,1.5L2.1,9.9V5.1h2v3.8l1.3,1V4.2H2l2.2-1.9h4.6L11,4.2H7.7v5.8l1.3-1V5.1h2v4.7
	l-1.8,1.6L7.7,10v3.1l-1.2,1.1L5.4,13.1z"></path>
</svg> </span></span> <span class="cm-tab_text">World of Tanks</span> <span class="cm-arrow cm-arrow__mobile"></span></span><div class="cm-visual js-cm-dropdown" data-dropdown="sub-menu:games" data-active-class="cm-visual__opened"><div class="cm-visual_bg"><img class="cm-visual_image cm-visual_image__desktop js-image-lazy-load-desktop" data-src="//cm-ru.wargaming.net/media/public/img/MxM9gyR7SPyCJw5hcPdmrg.jpg" alt=""> <img class="cm-visual_image cm-visual_image__tablet js-image-lazy-load-tablet" data-src="//cm-ru.wargaming.net/media/public/img/CE94zYI_SySs-CqUIut6_g.jpg" alt=""> <img class="cm-visual_image cm-visual_image__mobile js-image-lazy-load-mobile" data-src="//cm-ru.wargaming.net/media/public/img/639-WOT-art.jpg" alt=""></div><div class="cm-visual_content"> <a class="cm-visual_logo-wrapper" href="http://worldoftanks.ru/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><div class="cm-visual_logo-holder"><img class="cm-visual_logo" src="//cm-ru.wargaming.net/media/public/img/aUYY0uCIST-JX4ZQ_94TTg.svg" alt=""></div></a> <div class="cm-visual_description"><div class="cm-showcase-related"><h2 class="cm-showcase-related_title">Ссылки</h2><ul class="cm-showcase-related_list"> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="6978519569" href="http://worldoftanks.ru/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Сайт игры</span> </a></li> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="5666188588" href="http://forum.worldoftanks.ru/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Форум</span> </a></li> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="5773862210" href="https://ru.wargaming.net/support/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Центр поддержки пользователей</span> </a></li></ul></div><div class="cm-showcase-about"><h2 class="cm-showcase-about_title">World of Tanks</h2><div class="cm-showcase-about_holder"><p class="cm-showcase-about_text">Командный танковый экшен. Более 400 моделей военной техники Второй мировой. Многомиллионная армия поклонников. Лучшая онлайн-игра на постсоветском пространстве.</p><div class="cm-platforms"> <span class="cm-platforms_item"><span class="cm-platforms_icon cm-platforms_icon__windows">Windows</span> <span class="cm-platforms_text">Windows</span></span>  <span class="cm-platforms_item"><span class="cm-platforms_icon cm-platforms_icon__mac">Mac</span> <span class="cm-platforms_text">Mac</span></span> </div></div></div></div></div></div></li><li class="cm-showcase_item cm-showcase_item__00cbcd js-tab-carousel-element" data-tab-name="wows"><style>#common_menu .cm-showcase_item__00cbcd .cm-tab__opened,                     #common_menu .cm-not-touch .cm-showcase_item__00cbcd .cm-tab:hover { color: #00cbcd; }                     #common_menu .cm-showcase_item__00cbcd .cm-showcase-related_new-mark,                     #common_menu .cm-showcase_item__00cbcd .cm-showcase-related_title,                     #common_menu .cm-showcase_item__00cbcd .cm-showcase-about_title { color: #00cbcd; }</style><span class="cm-tab js-cm-dropdown-link js-cm-sub-menu" data-tab-name="wows" data-active-class="cm-tab__opened"><span class="cm-tab_ico-wrapper"><span class="cm-tab_ico-holder js-tab-mark " data-active-class="cm-tab_ico-holder__marked"> <svg width="26px" height="32px" viewBox="0 0 26 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
    <!-- Generator: Sketch 3.4.2 (15857) - http://www.bohemiancoding.com/sketch -->
    <title>anchor_new</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
        <g id="anchor_new" sketch:type="MSLayerGroup" fill="#FFFFFF">
            <g id="Group" sketch:type="MSShapeGroup">
                <g id="Layer_1">
                    <path d="M0.287515152,24.8462715 L12.6652034,32 L12.6652034,32 L12.6652034,32 L25.0728571,24.836283 L25.0728571,24.836283 L25.0728571,24.836283 L25.0528802,3.96941037 L24.9589888,4.03233761 L25.0528802,3.96941037 L25.0528802,3.96941037 L18.8500522,0 L18.8500522,0 L18.8500522,0 L18.8500522,0 L13.3763812,0.0369572682 L6.58423457,0.0369572682 L6.58423457,0.0369572682 L6.58423457,0.0369572682 L6.58423457,0.0369572682 L0.287515152,3.97540344 M1.9945414,4.93229703 L6.74604747,1.88681837 L6.74604747,1.88681837 L6.74604747,1.88681837 L6.74604747,1.88681837 L18.6003409,1.87982645 L18.6003409,1.87982645 L18.6003409,1.87982645 L18.6003409,1.87982645 L23.3528459,4.88535131 L23.3528459,5.12307644 L23.3528459,5.12307644 L23.3688274,23.701595 L23.3688274,23.701595 L23.3688274,23.701595 L12.6801861,29.9873272 L12.6801861,29.9873272 L12.6801861,29.9873272 L1.95258991,23.7225708 M5.67228901,11.6275556 L5.68427515,9.27627431 L10.2300191,9.27627431 L10.2460007,6.98292599 L8.193374,6.00305896 L8.193374,3.64079034 L16.6705722,3.63679496 L17.1230491,3.63579611 L17.1280433,5.94712364 L15.1413404,7.01289134 L15.1383439,9.27028124 L19.7649943,9.28626276 L19.7659932,11.6485314 L15.1403416,13.6671973 L15.1403416,13.6671973 L15.1493312,22.2822362 L17.8352256,20.9457814 L17.8352256,20.9457814 L17.8382221,15.8167119 L21.6338335,13.7251303 L21.6178519,22.9185005 L12.6642046,28.2133783 L3.75250875,22.9065143 L3.74851337,13.7101476 L7.53213856,15.8197085 L7.53613394,20.8898461 L10.1760815,22.2882292 L10.1830734,13.6642008" id="Shape"></path>
                </g>
            </g>
        </g>
    </g>
</svg> </span></span> <span class="cm-tab_text">World of Warships</span> <span class="cm-arrow cm-arrow__mobile"></span></span><div class="cm-visual js-cm-dropdown" data-dropdown="sub-menu:games" data-active-class="cm-visual__opened"><div class="cm-visual_bg"><img class="cm-visual_image cm-visual_image__desktop js-image-lazy-load-desktop" data-src="//cm-ru.wargaming.net/media/public/img/c9TZTtjnRIeOvz5ifN0krA.jpg" alt=""> <img class="cm-visual_image cm-visual_image__tablet js-image-lazy-load-tablet" data-src="//cm-ru.wargaming.net/media/public/img/cis9Lf7AQqOa5MYz9ONdFA.jpg" alt=""> <img class="cm-visual_image cm-visual_image__mobile js-image-lazy-load-mobile" data-src="//cm-ru.wargaming.net/media/public/img/GZX_69wVSlSa8z-ZjMuzwQ.jpg" alt=""></div><div class="cm-visual_content"> <a class="cm-visual_logo-wrapper" href="http://worldofwarships.ru/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><div class="cm-visual_logo-holder"><img class="cm-visual_logo" src="//cm-ru.wargaming.net/media/public/img/MDSvTjWjTriqWZqon0VrcA.svg" alt=""></div></a> <div class="cm-visual_description"><div class="cm-showcase-related"><h2 class="cm-showcase-related_title">Ссылки</h2><ul class="cm-showcase-related_list"> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="6341773019" href="http://worldofwarships.ru/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Сайт игры</span> </a></li> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="3586620037" href="http://forum.worldofwarships.ru/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Форум</span> </a></li> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="7396170396" href="https://ru.wargaming.net/support/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Центр поддержки пользователей</span> </a></li></ul></div><div class="cm-showcase-about"><h2 class="cm-showcase-about_title">World of Warships</h2><div class="cm-showcase-about_holder"><p class="cm-showcase-about_text">Массовая многопользовательская онлайн-игра (ММО), которая позволяет окунуться в мир масштабных морских баталий и опробовать в бою легендарные военные корабли первой половины ХХ века.</p><div class="cm-platforms"> <span class="cm-platforms_item"><span class="cm-platforms_icon cm-platforms_icon__windows">Windows</span> <span class="cm-platforms_text">Windows</span></span> </div></div></div></div></div></div></li><li class="cm-showcase_item cm-showcase_item__ffd101 js-tab-carousel-element" data-tab-name="wotx"><style>#common_menu .cm-showcase_item__ffd101 .cm-tab__opened,                     #common_menu .cm-not-touch .cm-showcase_item__ffd101 .cm-tab:hover { color: #ffd101; }                     #common_menu .cm-showcase_item__ffd101 .cm-showcase-related_new-mark,                     #common_menu .cm-showcase_item__ffd101 .cm-showcase-related_title,                     #common_menu .cm-showcase_item__ffd101 .cm-showcase-about_title { color: #ffd101; }</style><span class="cm-tab js-cm-dropdown-link js-cm-sub-menu" data-tab-name="wotx" data-active-class="cm-tab__opened"><span class="cm-tab_ico-wrapper"><span class="cm-tab_ico-holder js-tab-mark " data-active-class="cm-tab_ico-holder__marked"> <svg width="26px" height="32px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 13 16" enable-background="new 0 0 13 16" xml:space="preserve">
<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M6.5,16l-6.2-5.7L0,2l4-2h5l4,2l-0.3,8.3L6.5,16z M12,2.3L9,1H3.9
	l-3,1.3L1,10l5.5,4.9L12,10V2.3z M5.4,13.1V10l-1.5,1.5L2.1,9.9V5.1h2v3.8l1.3,1V4.2H2l2.2-1.9h4.6L11,4.2H7.7v5.8l1.3-1V5.1h2v4.7
	l-1.8,1.6L7.7,10v3.1l-1.2,1.1L5.4,13.1z"></path>
</svg> </span></span> <span class="cm-tab_text">World&nbsp;of&nbsp;Tanks Xbox/PS4</span> <span class="cm-arrow cm-arrow__mobile"></span></span><div class="cm-visual js-cm-dropdown" data-dropdown="sub-menu:games" data-active-class="cm-visual__opened"><div class="cm-visual_bg"><img class="cm-visual_image cm-visual_image__desktop js-image-lazy-load-desktop" data-src="//cm-ru.wargaming.net/media/public/img/lu6dijI5RES2aBktnN7THw.jpg" alt=""> <img class="cm-visual_image cm-visual_image__tablet js-image-lazy-load-tablet" data-src="//cm-ru.wargaming.net/media/public/img/U2wukiRqSQ2dtLM9QGXW8g.jpg" alt=""> <img class="cm-visual_image cm-visual_image__mobile js-image-lazy-load-mobile" data-src="//cm-ru.wargaming.net/media/public/img/ukmK-NFBSACFbZfdt1TV9g.jpg" alt=""></div><div class="cm-visual_content"> <a class="cm-visual_logo-wrapper" href="http://console.worldoftanks.com/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><div class="cm-visual_logo-holder"><img class="cm-visual_logo" src="//cm-ru.wargaming.net/media/public/img/hYBNtedAQzORcbkDJ1STog.svg" alt=""></div></a> <div class="cm-visual_description"><div class="cm-showcase-related"><h2 class="cm-showcase-related_title">Ссылки</h2><ul class="cm-showcase-related_list"> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="2191162198" href="http://console.worldoftanks.com/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Сайт игры</span> </a></li> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="2288006609" href="http://forum-console.worldoftanks.com/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Форум</span> </a></li> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="9297718344" href="https://console.worldoftanks.com/support/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Центр поддержки пользователей</span> </a></li></ul></div><div class="cm-showcase-about"><h2 class="cm-showcase-about_title">World&nbsp;of&nbsp;Tanks&nbsp;Xbox/PS4</h2><div class="cm-showcase-about_holder"><p class="cm-showcase-about_text">Первый free-to-play экшен о танковых сражениях для игровых консолей.</p><div class="cm-platforms"> <span class="cm-platforms_item"><span class="cm-platforms_icon cm-platforms_icon__xbox-one">Xbox One</span> <span class="cm-platforms_text">Xbox One</span></span>  <span class="cm-platforms_item"><span class="cm-platforms_icon cm-platforms_icon__xbox-360">Xbox 360</span> <span class="cm-platforms_text">Xbox 360</span></span>  <span class="cm-platforms_item"><span class="cm-platforms_icon cm-platforms_icon__ps4">PS4</span> <span class="cm-platforms_text">PS4</span></span> </div></div></div></div></div></div></li><li class="cm-showcase_item cm-showcase_item__f49511 js-tab-carousel-element" data-tab-name="wotb"><style>#common_menu .cm-showcase_item__f49511 .cm-tab__opened,                     #common_menu .cm-not-touch .cm-showcase_item__f49511 .cm-tab:hover { color: #f49511; }                     #common_menu .cm-showcase_item__f49511 .cm-showcase-related_new-mark,                     #common_menu .cm-showcase_item__f49511 .cm-showcase-related_title,                     #common_menu .cm-showcase_item__f49511 .cm-showcase-about_title { color: #f49511; }</style><span class="cm-tab js-cm-dropdown-link js-cm-sub-menu" data-tab-name="wotb" data-active-class="cm-tab__opened"><span class="cm-tab_ico-wrapper"><span class="cm-tab_ico-holder js-tab-mark " data-active-class="cm-tab_ico-holder__marked"> <svg width="26px" height="36px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 13 18" enable-background="new 0 0 13 18" xml:space="preserve">
<g>
	<path fill="#FFFFFF" d="M6.6,0L0.1,3.2L0,11l6.6,7l6.4-7V3.5L6.6,0z M12.2,11.3L6.6,17l-5.9-5.9l0.1-7.4l5.8-2.4l5.7,2.6L12.2,11.3
		z"></path>
	<path fill="#FFFFFF" d="M2,5v6l4.6,4l4.4-4V5L6.5,2L2,5z M8.5,6.1l-1.5,4.4l2-0.9l-2.7,5.6l0.9-4.1l-2,0.9l1.2-4.1L3.9,8.8l1.5-5
		l1-0.4l1,0.4l-1.1,3L8.5,6.1z"></path>
</g>
</svg> </span></span> <span class="cm-tab_text">World of Tanks Blitz</span> <span class="cm-arrow cm-arrow__mobile"></span></span><div class="cm-visual js-cm-dropdown" data-dropdown="sub-menu:games" data-active-class="cm-visual__opened"><div class="cm-visual_bg"><img class="cm-visual_image cm-visual_image__desktop js-image-lazy-load-desktop" data-src="//cm-ru.wargaming.net/media/public/img/ThKjHBViQ1GK1csrofzWyg.jpg" alt=""> <img class="cm-visual_image cm-visual_image__tablet js-image-lazy-load-tablet" data-src="//cm-ru.wargaming.net/media/public/img/lQum4BY2RaevXywNCIinlg.jpg" alt=""> <img class="cm-visual_image cm-visual_image__mobile js-image-lazy-load-mobile" data-src="//cm-ru.wargaming.net/media/public/img/Gg3LzrtNRpuJvvWu9Yx7Vw.jpg" alt=""></div><div class="cm-visual_content"> <a class="cm-visual_logo-wrapper" href="http://wotblitz.ru/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><div class="cm-visual_logo-holder"><img class="cm-visual_logo" src="//cm-ru.wargaming.net/media/public/img/7f8z-FciS_Gt90f7uIaniw.svg" alt=""></div></a> <div class="cm-visual_description"><div class="cm-showcase-related"><h2 class="cm-showcase-related_title">Ссылки</h2><ul class="cm-showcase-related_list"> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="9228652561" href="http://wotblitz.ru/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Сайт игры</span> </a></li> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="3327456025" href="http://forum.wotblitz.ru/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Форум</span> </a></li> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="7073936006" href="https://ru.wargaming.net/support/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Центр поддержки пользователей</span> </a></li></ul></div><div class="cm-showcase-about"><h2 class="cm-showcase-about_title">World of Tanks Blitz</h2><div class="cm-showcase-about_holder"><p class="cm-showcase-about_text">Мобильный free-to-play MMO-экшен, посвящённый танковым сражениям середины ХХ века и предлагающий абсолютно новый формат командных онлайн-баталий.</p><div class="cm-platforms"> <span class="cm-platforms_item"><span class="cm-platforms_icon cm-platforms_icon__android">Android</span> <span class="cm-platforms_text">Android</span></span>  <span class="cm-platforms_item"><span class="cm-platforms_icon cm-platforms_icon__ios">iOS</span> <span class="cm-platforms_text">iOS</span></span> </div></div></div></div></div></div></li><li class="cm-showcase_item cm-showcase_item__ffd101 js-tab-carousel-element" data-tab-name="wotg"><style>#common_menu .cm-showcase_item__ffd101 .cm-tab__opened,                     #common_menu .cm-not-touch .cm-showcase_item__ffd101 .cm-tab:hover { color: #ffd101; }                     #common_menu .cm-showcase_item__ffd101 .cm-showcase-related_new-mark,                     #common_menu .cm-showcase_item__ffd101 .cm-showcase-related_title,                     #common_menu .cm-showcase_item__ffd101 .cm-showcase-about_title { color: #ffd101; }</style><span class="cm-tab js-cm-dropdown-link js-cm-sub-menu" data-tab-name="wotg" data-active-class="cm-tab__opened"><span class="cm-tab_ico-wrapper"><span class="cm-tab_ico-holder js-tab-mark " data-active-class="cm-tab_ico-holder__marked"> <svg width="42px" height="40px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 21 20" enable-background="new 0 0 21 20" xml:space="preserve">
<g>
	<g>
		<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M9.5,16.6l1,0.7l1.1-0.7v-3.1H9.5V16.6z M14.6,7.4l-1.4-1.8H7.8
			L6.4,7.4h3v5.7l-1.1-0.9V8.1H6.5v5l1.6,1.5l1.4-1.3v0.2h2.2v-0.2l1.4,1.3l1.6-1.5V8h-1.8v4.2l-1.1,0.9V7.4H14.6z M16.2,13.7v-2.6
			L21,7.5l-4.8-0.1V6l-3.2-2h-1L10.5,0L9.1,4.1H8L4.9,6v1.3L0,7.5l4.9,3.6v2.6l0.7,0.8L4,19.6L7.8,17l2.7,3l2.7-3l3.8,2.6l-1.6-5
			L16.2,13.7z M12.6,16.6l-2.1,2.3l-5-5.5l0-6.9l2.7-1.8h4.6l2.7,1.8v6.9L12.6,16.6z"></path>
	</g>
</g>
</svg> </span></span> <span class="cm-tab_text">World of Tanks Generals</span> <span class="cm-arrow cm-arrow__mobile"></span></span><div class="cm-visual js-cm-dropdown" data-dropdown="sub-menu:games" data-active-class="cm-visual__opened"><div class="cm-visual_bg"><img class="cm-visual_image cm-visual_image__desktop js-image-lazy-load-desktop" data-src="//cm-ru.wargaming.net/media/public/img/CbRP_L0lSHW4PPMUd4sQwg.jpg" alt=""> <img class="cm-visual_image cm-visual_image__tablet js-image-lazy-load-tablet" data-src="//cm-ru.wargaming.net/media/public/img/Q1xS0jYQT-O2IcNl1RjRVQ.jpg" alt=""> <img class="cm-visual_image cm-visual_image__mobile js-image-lazy-load-mobile" data-src="//cm-ru.wargaming.net/media/public/img/YTwygIcJSJq1wGtUTemkQw.jpg" alt=""></div><div class="cm-visual_content"> <a class="cm-visual_logo-wrapper" href="http://wotgenerals.ru/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><div class="cm-visual_logo-holder"><img class="cm-visual_logo" src="//cm-ru.wargaming.net/media/public/img/3HEL4lsvS5-5MLHxlB9gjQ.svg" alt=""></div></a> <div class="cm-visual_description"><div class="cm-showcase-related"><h2 class="cm-showcase-related_title">Ссылки</h2><ul class="cm-showcase-related_list"> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="6735892924" href="http://wotgenerals.ru/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Сайт игры</span> </a></li> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="3685658416" href="http://forum.wotgenerals.ru/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Форум</span> </a></li> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="898067969" href="https://ru.wargaming.net/support/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Центр поддержки пользователей</span> </a></li> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="4705805528" href="http://wiki.wargaming.net/ru/WoT_Generals?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Wiki</span> </a></li> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="3790217228" href="http://wargag.ru/?tag=wotg&amp;utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">WarGag</span> </a></li></ul></div><div class="cm-showcase-about"><h2 class="cm-showcase-about_title">World of Tanks Generals</h2><div class="cm-showcase-about_holder"><p class="cm-showcase-about_text">Бесплатная карточная онлайн-игра, посвящённая танковым сражениям. Выберите штаб, добавьте подходящие приказы и технику и сокрушите своих соперников в тактическом бою!</p><div class="cm-platforms"> <span class="cm-platforms_item"><span class="cm-platforms_icon cm-platforms_icon__www">www</span> <span class="cm-platforms_text">www</span></span>  <span class="cm-platforms_item"><span class="cm-platforms_icon cm-platforms_icon__ios">iOS</span> <span class="cm-platforms_text">iOS</span></span> </div></div></div></div></div></div></li><li class="cm-showcase_item cm-showcase_item__00a2e3 js-tab-carousel-element" data-tab-name="wowp"><style>#common_menu .cm-showcase_item__00a2e3 .cm-tab__opened,                     #common_menu .cm-not-touch .cm-showcase_item__00a2e3 .cm-tab:hover { color: #00a2e3; }                     #common_menu .cm-showcase_item__00a2e3 .cm-showcase-related_new-mark,                     #common_menu .cm-showcase_item__00a2e3 .cm-showcase-related_title,                     #common_menu .cm-showcase_item__00a2e3 .cm-showcase-about_title { color: #00a2e3; }</style><span class="cm-tab js-cm-dropdown-link js-cm-sub-menu" data-tab-name="wowp" data-active-class="cm-tab__opened"><span class="cm-tab_ico-wrapper"><span class="cm-tab_ico-holder js-tab-mark " data-active-class="cm-tab_ico-holder__marked"> <svg width="54px" height="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 27 15" enable-background="new 0 0 27 15" xml:space="preserve">
<g>
	<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M19.6,2V0.9c0,0-4-0.6-6-0.9c-2,0.3-6,0.9-6,0.9l0,1.1H0l2,2
		l6.9,0L9,9l1.7,1.5l1.7-1.7l0,3.5l1.2,1.2l1.2-1.2V8.8c0,0,1.2,1.2,1.7,1.7c0,0,0-0.1,0-0.1L18,9V4h7l2-2H19.6z M16,2l0,5.6
		c0,0-0.8,0.8-1.2,1.2c0-2.1,0-6.4,0-6.4l-1.2-0.9l-1.2,0.9v6.4L11,8V2H8.2c0-0.1,0-0.5,0-0.6c1.8-0.3,3.6-0.5,5.4-0.8
		c1.8,0.3,3.6,0.5,5.4,0.8c0,0.1,0,0.5,0,0.6H16z"></path>
	<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" points="5.6,7.7 7,7.7 7.1,5.1 3.2,5.1 	"></polygon>
	<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" points="19,5 19,9 13.6,14.3 8,9 8,5 7.2,5 7.2,9.1 13.6,15
		19.8,9.1 19.7,5 	"></polygon>
	<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" points="20.1,7.7 21.6,7.7 24,5.1 20.1,5.1 	"></polygon>
</g>
</svg> </span></span> <span class="cm-tab_text">World of Warplanes</span> <span class="cm-arrow cm-arrow__mobile"></span></span><div class="cm-visual js-cm-dropdown" data-dropdown="sub-menu:games" data-active-class="cm-visual__opened"><div class="cm-visual_bg"><img class="cm-visual_image cm-visual_image__desktop js-image-lazy-load-desktop" data-src="//cm-ru.wargaming.net/media/public/img/TRUVhXWpS3qGJkPTGMhEaQ.jpg" alt=""> <img class="cm-visual_image cm-visual_image__tablet js-image-lazy-load-tablet" data-src="//cm-ru.wargaming.net/media/public/img/7S_cCNgpRmqSGB6oi9ZZvQ.jpg" alt=""> <img class="cm-visual_image cm-visual_image__mobile js-image-lazy-load-mobile" data-src="//cm-ru.wargaming.net/media/public/img/l9a641NoSri5-CBbfX0zXg.jpg" alt=""></div><div class="cm-visual_content"> <a class="cm-visual_logo-wrapper" href="http://worldofwarplanes.ru/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><div class="cm-visual_logo-holder"><img class="cm-visual_logo" src="//cm-ru.wargaming.net/media/public/img/RJLiLjB8SVWTQzzSmwG8VQ.svg" alt=""></div></a> <div class="cm-visual_description"><div class="cm-showcase-related"><h2 class="cm-showcase-related_title">Ссылки</h2><ul class="cm-showcase-related_list"> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="2909003476" href="http://worldofwarplanes.ru/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Сайт игры</span> </a></li> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="4342147595" href="http://forum.worldofwarplanes.ru/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Форум</span> </a></li> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="2002221365" href="https://ru.wargaming.net/support/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Центр поддержки пользователей</span> </a></li> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="1551713365" href="http://blog.worldofwarplanes.ru/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Блог</span> </a></li></ul></div><div class="cm-showcase-about"><h2 class="cm-showcase-about_title">World of Warplanes</h2><div class="cm-showcase-about_holder"><p class="cm-showcase-about_text">World of Warplanes — это free-to-play ММО-экшен, посвящённый золотой эпохе боевой авиации, в котором игроки вступают в непрекращающуюся борьбу за господство в воздухе на легендарных самолётах XX века.</p><div class="cm-platforms"> <span class="cm-platforms_item"><span class="cm-platforms_icon cm-platforms_icon__windows">Windows</span> <span class="cm-platforms_text">Windows</span></span> </div></div></div></div></div></div></li><li class="cm-showcase_item cm-showcase_item__8201ff js-tab-carousel-element" data-tab-name="moo"><style>#common_menu .cm-showcase_item__8201ff .cm-tab__opened,                     #common_menu .cm-not-touch .cm-showcase_item__8201ff .cm-tab:hover { color: #8201ff; }                     #common_menu .cm-showcase_item__8201ff .cm-showcase-related_new-mark,                     #common_menu .cm-showcase_item__8201ff .cm-showcase-related_title,                     #common_menu .cm-showcase_item__8201ff .cm-showcase-about_title { color: #8201ff; }</style><span class="cm-tab js-cm-dropdown-link js-cm-sub-menu" data-tab-name="moo" data-active-class="cm-tab__opened"><span class="cm-tab_ico-wrapper"><span class="cm-tab_ico-holder js-tab-mark " data-active-class="cm-tab_ico-holder__marked"> <svg width="32px" height="26px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 13" enable-background="new 0 0 16 13" xml:space="preserve">
<path id="WG_x5F_MOO_x5F_Logo_x5F_Primitive_x5F_Monochrome_x5F_1c" fill="#FFFFFF" d="M0,0l3.2,3.5c2.4,0,4.8,0,7.1,0
	c0.8,0,1.4,0.4,1.4,1.1S11.2,6,10.5,6H3.2l7,7l5.8,0l-4.3-4.3c2.5,0,4.3-1.7,4.3-4.3C16,1.9,13.9,0,11.7,0C7.9,0,3.9,0,0,0z"></path>
</svg> </span></span> <span class="cm-tab_text">Master of Orion</span> <span class="cm-arrow cm-arrow__mobile"></span></span><div class="cm-visual js-cm-dropdown" data-dropdown="sub-menu:games" data-active-class="cm-visual__opened"><div class="cm-visual_bg"><img class="cm-visual_image cm-visual_image__desktop js-image-lazy-load-desktop" data-src="//cm-ru.wargaming.net/media/public/img/M7i1N62TR2S8LsEAMXsINw.jpg" alt=""> <img class="cm-visual_image cm-visual_image__tablet js-image-lazy-load-tablet" data-src="//cm-ru.wargaming.net/media/public/img/bqtob48SS3Kqvp7pPKgYOQ.jpg" alt=""> <img class="cm-visual_image cm-visual_image__mobile js-image-lazy-load-mobile" data-src="//cm-ru.wargaming.net/media/public/img/bzYffSFpSmSRYXe5rTPV2A.jpg" alt=""></div><div class="cm-visual_content"> <a class="cm-visual_logo-wrapper" href="http://master-of-orion.ru/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><div class="cm-visual_logo-holder"><img class="cm-visual_logo" src="//cm-ru.wargaming.net/media/public/img/vLSwBjlCS-GNfMUFzgSmjQ.svg" alt=""></div></a> <div class="cm-visual_description"><div class="cm-showcase-related"><h2 class="cm-showcase-related_title">Ссылки</h2><ul class="cm-showcase-related_list"> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="588694494" href="http://master-of-orion.ru/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Сайт игры</span> </a></li> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="4757079711" href="http://forum.master-of-orion.ru/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Форум</span> </a></li> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="4125216979" href="https://ru.wargaming.net/support/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Центр поддержки пользователей</span> </a></li></ul></div><div class="cm-showcase-about"><h2 class="cm-showcase-about_title">Master of Orion</h2><div class="cm-showcase-about_holder"><p class="cm-showcase-about_text">Культовая стратегия в жанре 4Х (eXplore, eXpand, eXploit, and eXterminate), завоевавшая сердца целого поколения игроков. Приведите одну из 10 рас к господству в галактике!</p><div class="cm-platforms"> <span class="cm-platforms_item"><span class="cm-platforms_icon cm-platforms_icon__windows">Windows</span> <span class="cm-platforms_text">Windows</span></span> </div></div></div></div></div></div></li></ul></div><div class="cm-up cm-up__bordered"><a class="cm-up_link js-cm-up_link" href="#"><span class="cm-up_arrow">arrow up</span></a></div></div></div> <div class="cm-showcase js-cm-li-ptl"><span class="cm-showcase_opener js-cm-tooltip-services js-cm-dropdown-link" data-active-class="cm-showcase_opener__opened" data-tooltip-text="Все проекты и сервисы Wargaming.net">Сервисы<span class="cm-arrow cm-arrow__showcase">arrow</span></span><div class="cm-showcase_dropdown js-cm-dropdown js-cm-services-dropdown" data-active-class="cm-showcase_dropdown__opened" data-dropdown="services"><div class="cm-showcase-nav"><a href="#" class="cm-showcase-nav_link cm-showcase-nav_link__left js-carousel-left"><span class="cm-showcase-nav_ico-wrapper"></span> <span class="cm-showcase-nav_ico cm-showcase-nav_ico__left"></span></a> <a href="#" class="cm-showcase-nav_link cm-showcase-nav_link__right js-carousel-right"><span class="cm-showcase-nav_ico-wrapper"></span> <span class="cm-showcase-nav_ico cm-showcase-nav_ico__right"></span></a></div><h1 class="cm-showcase_heading">Узнайте больше о сервисах:</h1><div class="cm-showcase_wrapper js-showcase-wrapper"><ul class="cm-showcase_list js-tab-carousel"><li class="cm-showcase_item cm-showcase_item__d19834 js-tab-carousel-element" data-tab-name="pss"><style>#common_menu .cm-showcase_item__d19834 .cm-tab__opened,                     #common_menu .cm-not-touch .cm-showcase_item__d19834 .cm-tab:hover { color: #d19834; }                     #common_menu .cm-showcase_item__d19834 .cm-showcase-related_new-mark,                     #common_menu .cm-showcase_item__d19834 .cm-showcase-related_title,                     #common_menu .cm-showcase_item__d19834 .cm-showcase-about_title { color: #d19834; }</style><span class="cm-tab js-cm-dropdown-link js-cm-sub-menu" data-tab-name="pss" data-active-class="cm-tab__opened"><span class="cm-tab_ico-wrapper"><span class="cm-tab_ico-holder js-tab-mark " data-active-class="cm-tab_ico-holder__marked"> <svg width="27px" height="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 27 30" enable-background="new 0 0 27 30" xml:space="preserve">
<g>
	<g>
		<path fill="#FFFFFF" d="M26,6h-7l-0.5-1.8c0-0.1,0-1.7-1.2-2.9C16.4,0.4,15.1,0,13.5,0c-1.6,0-2.9,0.4-3.8,1.3
			C8.5,2.5,8.5,4.1,8.5,4.2L8,6H1L0,30h13.5H27L26,6z M17.9,8.5c0.3,0,0.6-0.2,0.6-0.5V7.1c0.4,0.2,0.9,0.7,0.9,1.2
			c0,0.7-0.7,1.2-1.5,1.2c-0.7,0-1.3-0.6-1.3-1.3c0-0.5,0.3-0.9,0.7-1.1v0.8C17.4,8.2,17.6,8.5,17.9,8.5z M10.5,2.1
			c0.7-0.7,1.7-1,3-1c1.3,0,2.3,0.3,3,1c0.9,0.9,0.9,2.1,0.9,2.1l0.1,1.7H9.8L9.6,4.2C9.6,4.2,9.6,3,10.5,2.1z M8.5,7.1v0.8
			c0,0.3,0.2,0.5,0.6,0.5s0.6-0.2,0.6-0.5V7.1c0.4,0.2,0.7,0.6,0.7,1.1c0,0.7-0.6,1.3-1.3,1.3c-0.7,0-1.5-0.5-1.5-1.2
			C7.6,7.9,8.1,7.3,8.5,7.1z M13.5,26.6c-4.2,0-7.6-3.3-7.6-7.5c0-4.1,3.4-7.5,7.6-7.5c4.2,0,7.6,3.3,7.6,7.5
			C21.1,23.3,17.7,26.6,13.5,26.6z"></path>
		<path fill="#FFFFFF" d="M13.5,13.1c-3.4,0-6.1,2.7-6.1,6.1c0,0.3,0,0.6,0.1,0.9c1-2.2,2.6-4.2,5.4-5.3c-0.2-0.2-0.5-0.4-0.7-0.6
			c1.3-0.2,2.6-0.1,3.7,0.3c-0.7,0.7-1.7,1.7-2.2,2.5l-0.2-1.2c-2.5,1.7-2.8,5.2-2.4,7.4c1.9-0.3,3.5-1.2,4.6-3.1l-1.3,0.1
			c0.8-0.8,1.5-1.8,2.1-2.9c0.6,1.1,1.1,2.1,1.6,3.2c-0.4-0.1-0.6-0.2-1-0.3c0.1,1.5-0.1,2.9-0.5,4.2c1.8-1.1,3-3,3-5.2
			C19.6,15.8,16.9,13.1,13.5,13.1z"></path>
	</g>
</g>
</svg> </span></span> <span class="cm-tab_text">Премиум магазин</span> <span class="cm-arrow cm-arrow__mobile"></span></span><div class="cm-visual js-cm-dropdown" data-dropdown="sub-menu:services" data-active-class="cm-visual__opened"><div class="cm-visual_bg"><img class="cm-visual_image cm-visual_image__desktop js-image-lazy-load-desktop" data-src="//cm-ru.wargaming.net/media/public/img/_FMR0X1PQcGUa0wn463thw.jpg" alt=""> <img class="cm-visual_image cm-visual_image__tablet js-image-lazy-load-tablet" data-src="//cm-ru.wargaming.net/media/public/img/hxQAZiI5QruQmQ_6zK2IMA.jpg" alt=""> <img class="cm-visual_image cm-visual_image__mobile js-image-lazy-load-mobile" data-src="//cm-ru.wargaming.net/media/public/img/CcD-xAwxSJSkl42Yt08NOQ.jpg" alt=""></div><div class="cm-visual_content"> <a class="cm-visual_logo-wrapper" href="https://ru.wargaming.net/shop/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><div class="cm-visual_logo-holder"><img class="cm-visual_logo" src="//cm-ru.wargaming.net/media/public/img/o-9ummn6RQes4jFBr1xWvg.svg" alt=""></div></a> <div class="cm-visual_description"><div class="cm-showcase-related"><h2 class="cm-showcase-related_title">Ссылки</h2><ul class="cm-showcase-related_list"> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="4509155816" href="https://ru.wargaming.net/shop/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Сайт</span> </a></li> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="881909763" href="https://ru.wargaming.net/shop/bonus/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Активировать код Wargaming</span> </a></li></ul></div><div class="cm-showcase-about"><h2 class="cm-showcase-about_title">Премиум магазин</h2><div class="cm-showcase-about_holder"><p class="cm-showcase-about_text">Покупайте эксклюзивную технику, внутриигровую валюту и премиум аккаунт в нашем магазине и получайте больше опыта и кредитов каждый бой, а также множество других возможностей в играх.</p></div></div></div></div></div></li><li class="cm-showcase_item cm-showcase_item__d19834 js-tab-carousel-element" data-tab-name="global_map"><style>#common_menu .cm-showcase_item__d19834 .cm-tab__opened,                     #common_menu .cm-not-touch .cm-showcase_item__d19834 .cm-tab:hover { color: #d19834; }                     #common_menu .cm-showcase_item__d19834 .cm-showcase-related_new-mark,                     #common_menu .cm-showcase_item__d19834 .cm-showcase-related_title,                     #common_menu .cm-showcase_item__d19834 .cm-showcase-about_title { color: #d19834; }</style><span class="cm-tab js-cm-dropdown-link js-cm-sub-menu" data-tab-name="global_map" data-active-class="cm-tab__opened"><span class="cm-tab_ico-wrapper"><span class="cm-tab_ico-holder js-tab-mark " data-active-class="cm-tab_ico-holder__marked"> <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="27px" height="33px" viewBox="0 0 27 33" enable-background="new 0 0 27 33" xml:space="preserve">
<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M0,3.5L6.2,0h14.6L27,3.5c0,7.2,0,14.7,0,21.8L13.5,33L0,25.3
	C0,18.2,0,10.7,0,3.5L0,3.5z M23,8l-9.5,5.6v4.9l5.5-3.8v6.3l-5.5,3l-5.5-3L8,8l5.5,3.4c3.3-1.9,6.2-3.8,9.5-5.6l-4-2.3l-5.5,3.4
	L7.6,3.5L4,5.8c0,5.7,0,11.8,0,17.5l9.5,5.3l9.5-5.3C23,18.4,23,13,23,8L23,8z M20.4,2H6.6L2,4.7v19.7L13.5,31L25,24.4v-20L20.4,2z"></path>
</svg> </span></span> <span class="cm-tab_text">Глобальная карта</span> <span class="cm-arrow cm-arrow__mobile"></span></span><div class="cm-visual js-cm-dropdown" data-dropdown="sub-menu:services" data-active-class="cm-visual__opened"><div class="cm-visual_bg"><img class="cm-visual_image cm-visual_image__desktop js-image-lazy-load-desktop" data-src="//cm-ru.wargaming.net/media/public/img/cGGDJtw_SDCOmyI0yLnLWA.jpg" alt=""> <img class="cm-visual_image cm-visual_image__tablet js-image-lazy-load-tablet" data-src="//cm-ru.wargaming.net/media/public/img/iJRPg1zNTJqPQsNI6fYoIA.jpg" alt=""> <img class="cm-visual_image cm-visual_image__mobile js-image-lazy-load-mobile" data-src="//cm-ru.wargaming.net/media/public/img/VwlwPkG9SvKZ79ekA8rAgg.jpg" alt=""></div><div class="cm-visual_content"> <a class="cm-visual_logo-wrapper" href="https://ru.wargaming.net/globalmap/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><div class="cm-visual_logo-holder"><img class="cm-visual_logo" src="//cm-ru.wargaming.net/media/public/img/_wE0M6JjRZmSmWO2MOeCDg.svg" alt=""></div></a> <div class="cm-visual_description"><div class="cm-showcase-related"><h2 class="cm-showcase-related_title">Ссылки</h2><ul class="cm-showcase-related_list"> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="4539133419" href="https://ru.wargaming.net/globalmap/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Перейти на Глобальную карту</span> </a></li> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="4483718360" href="http://worldoftanks.ru/ru/content/global_map_guide/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Руководство</span> </a></li> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="2700895163" href="http://worldoftanks.ru/clanwars/globalmap/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">О Глобальной карте</span> </a></li></ul></div><div class="cm-showcase-about"><h2 class="cm-showcase-about_title">Глобальная карта</h2><div class="cm-showcase-about_holder"><p class="cm-showcase-about_text">Вступай в сражение за территорию на Глобальной карте, зарабатывай игровое золото и получай уникальные танки в награду за участие в масштабных игровых событиях.</p></div></div></div></div></div></li><li class="cm-showcase_item cm-showcase_item__d19834 js-tab-carousel-element" data-tab-name="wgcc"><style>#common_menu .cm-showcase_item__d19834 .cm-tab__opened,                     #common_menu .cm-not-touch .cm-showcase_item__d19834 .cm-tab:hover { color: #d19834; }                     #common_menu .cm-showcase_item__d19834 .cm-showcase-related_new-mark,                     #common_menu .cm-showcase_item__d19834 .cm-showcase-related_title,                     #common_menu .cm-showcase_item__d19834 .cm-showcase-about_title { color: #d19834; }</style><span class="cm-tab js-cm-dropdown-link js-cm-sub-menu" data-tab-name="wgcc" data-active-class="cm-tab__opened"><span class="cm-tab_ico-wrapper"><span class="cm-tab_ico-holder js-tab-mark " data-active-class="cm-tab_ico-holder__marked"> <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="31px" viewBox="0 0 32 31" enable-background="new 0 0 32 31" xml:space="preserve">
<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M31.3,5h-0.5C30.3,5,30,4.7,30,4.3V0.7C30,0.3,30.3,0,30.7,0h0.5
	C31.7,0,32,0.3,32,0.7v3.5C32,4.7,31.7,5,31.3,5z M3,25.6V1h26v24.6c0,0-13,5.4-13,5.4S3,25.6,3,25.6z M27,3H5v13.3
	c0.7-2,1.8-4,3.6-5.5c2.6-2.2,6.4-3,6.4-3l-2.3-1.5c0,0,7.7-0.6,7.6-0.5c0,0-3.9,5.9-3.9,5.9l-0.3-2.3c0,0-3.3,2.5-4.4,7
	c-1.1,4.7,1.3,8.3,1.6,8.5c0.2,0.2,2,0,4.7-2.2c2.9-2.3,2.7-5.5,2.7-5.5l-2.3,0.8c0,0,3.5-6.2,3.5-6.2l3.5,6.2L23,17
	c0,0,1.2,3.4,1.1,5.4c-0.1,0.9,0.1,1.9-0.2,2.9C25.6,24.6,27,24,27,24V3z M1.2,5H0.7C0.3,5,0,4.7,0,4.3V0.7C0,0.3,0.3,0,0.7,0h0.5
	C1.6,0,2,0.3,2,0.7v3.5C2,4.7,1.6,5,1.2,5z"></path>
</svg> </span></span> <span class="cm-tab_text">Клановый портал</span> <span class="cm-arrow cm-arrow__mobile"></span></span><div class="cm-visual js-cm-dropdown" data-dropdown="sub-menu:services" data-active-class="cm-visual__opened"><div class="cm-visual_bg"><img class="cm-visual_image cm-visual_image__desktop js-image-lazy-load-desktop" data-src="//cm-ru.wargaming.net/media/public/img/Eu1bDCR7T5ifRkVpfl3n9w.jpg" alt=""> <img class="cm-visual_image cm-visual_image__tablet js-image-lazy-load-tablet" data-src="//cm-ru.wargaming.net/media/public/img/Yr8sTttxS1egWOgOzbkU3Q.jpg" alt=""> <img class="cm-visual_image cm-visual_image__mobile js-image-lazy-load-mobile" data-src="//cm-ru.wargaming.net/media/public/img/xZlGSFI8Spq05AINEJkEIA.jpg" alt=""></div><div class="cm-visual_content"> <a class="cm-visual_logo-wrapper" href="http://ru.wargaming.net/clans/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><div class="cm-visual_logo-holder"><img class="cm-visual_logo" src="//cm-ru.wargaming.net/media/public/img/hzQaobCtRp2gz1hF-ubfNw.svg" alt=""></div></a> <div class="cm-visual_description"><div class="cm-showcase-related"><h2 class="cm-showcase-related_title">Ссылки</h2><ul class="cm-showcase-related_list"> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="953250230" href="http://ru.wargaming.net/clans/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">О кланах</span> </a></li> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="4911506262" href="http://ru.wargaming.net/clans/leaderboards/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Рейтинги</span> </a></li> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="1185006354" href="http://ru.wargaming.net/clans/recruitstation/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Подобрать клан</span> </a></li> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="4369725426" href="http://ru.wargaming.net/clans/create/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Создать клан</span> </a></li></ul></div><div class="cm-showcase-about"><h2 class="cm-showcase-about_title">Клановый портал</h2><div class="cm-showcase-about_holder"><p class="cm-showcase-about_text">Присоединяйся к тысячам клановых игроков, выйди на новый уровень командной игры. Участвуй в специальных игровых режимах, выполняй боевые задачи, зарабатывай игровое золото и уникальную технику.</p></div></div></div></div></div></li><li class="cm-showcase_item cm-showcase_item__d19834 js-tab-carousel-element" data-tab-name="spt"><style>#common_menu .cm-showcase_item__d19834 .cm-tab__opened,                     #common_menu .cm-not-touch .cm-showcase_item__d19834 .cm-tab:hover { color: #d19834; }                     #common_menu .cm-showcase_item__d19834 .cm-showcase-related_new-mark,                     #common_menu .cm-showcase_item__d19834 .cm-showcase-related_title,                     #common_menu .cm-showcase_item__d19834 .cm-showcase-about_title { color: #d19834; }</style><span class="cm-tab js-cm-dropdown-link js-cm-sub-menu" data-tab-name="spt" data-active-class="cm-tab__opened"><span class="cm-tab_ico-wrapper"><span class="cm-tab_ico-holder js-tab-mark " data-active-class="cm-tab_ico-holder__marked"> <svg width="28px" height="27px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 28 27" enable-background="new 0 0 28 27" xml:space="preserve">
<g>
	<path fill="#FFFFFF" d="M16.8,13.4L16.8,13.4c-0.6,0.3-1.3,0.2-1.8-0.3c-0.1-0.1-0.2-0.3-0.3-0.5c1.6-1.8,0.5-2.3,0.5-2.3
		s-0.1-0.2-0.4-0.4c-0.2,0.1-0.4,0.2-0.7,0.2c-0.7,0-1.2-0.5-1.2-1.2c0-0.3,0.1-0.7,0.4-0.9c-0.2-0.2-0.4-0.4-0.5-0.5c0,0,0,0,0,0
		c-2-1.3-4-2.9-6.1-5C5.8,1.6,5,0.9,4.2,0C3.4,0.1,2.9,0.3,2.2,1l0,0C2.1,1,2.1,1.1,2,1.1c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0
		c0,0,0,0,0,0C1.8,1.3,1.8,1.4,1.7,1.4l0,0c-0.7,0.7-0.9,1.2-1,2c0.9,0.7,1.9,1.4,2.8,2.2c2.1,2.1,3.8,4.2,5.1,6.1l0.5,0.4
		c0.2-0.2,0.5-0.3,0.8-0.3c0.7,0,1.2,0.5,1.2,1.2c0,0.2-0.1,0.5-0.2,0.6l0.5,0.4c0,0,0.5,1.1,2.4-0.4c0.2,0.1,0.3,0.2,0.5,0.3
		c0.5,0.5,0.5,1.2,0.2,1.7l0,0L25.6,27l2.4-2.3L16.8,13.4z"></path>
	<path fill="#FFFFFF" d="M16.7,12.7c0.3,0.1,0.5,0,0.8,0l1.5-2c0,0,1.1-0.8,1.8-0.9c0.1,0,0.2,0,0.3,0c0.7,0.2,2,0.4,2.9,0.3
		c0.6-0.1,0.8-0.1,0.8-0.1c0,0,0.6-0.1,1.2-0.6c0.6-0.5,1.1-1.4,1-3.1c0-0.2,0-0.3-0.1-0.5c-0.1-0.6-0.2-1-0.2-1v0v0c0,0,0,0,0-0.1
		c0-0.1-0.1-0.3-0.3-0.2c0,0,0,0,0,0l-1.9,2.6l-1.8,0.1l-2.1-2.2l0.2-1.5l2.3-2.1c0,0,0-0.1,0-0.2c0-0.2-0.2-0.5-1.1-0.3
		c-1.4,0.2-1.7,0.3-1.7,0.3c0,0-0.7,0.2-1.3,0.8c-0.7,0.5-1.3,1.4-1.1,2.5c0,0.2,0.2,1.8,0.2,1.8c0,0,0,1.2-0.9,2
		c-0.3,0.2-1,1-1.3,1.3C16.4,10,17.9,11.5,16.7,12.7z"></path>
	<path fill="#FFFFFF" d="M16,9.6C16,9.6,16,9.6,16,9.6C16.1,9.8,16,9.7,16,9.6z"></path>
	<path fill="#FFFFFF" d="M16,9.6C16,9.6,16,9.6,16,9.6c0-0.1-0.1-0.1-0.1-0.1S15.9,9.6,16,9.6z"></path>
	<path fill="#FFFFFF" d="M11,15.3c0,0-0.2-0.1-0.5-0.4l-1.5,1.3l-1,0.9c0,0-1.1,0.8-1.8,0.9c-0.1,0-0.2,0-0.4,0
		c-0.7-0.2-2-0.4-2.9-0.3c-0.6,0.1-0.8,0.1-0.8,0.1c0,0-0.6,0.1-1.2,0.6c-0.6,0.5-1.1,1.4-1,3.1c0,0.2,0,0.3,0.1,0.5
		c0.1,0.6,0.2,1,0.2,1v0v0c0,0,0,0,0,0.1c0,0.1,0.1,0.3,0.3,0.2c0,0,0,0,0,0l1.9-2.6l1.8-0.1l0.8,0.8c0.1,0.2,0.2,0.3,0.4,0.5
		c0.1,0.1,0.2,0.2,0.4,0.3l0.6,0.6l-0.2,1.5l-2.3,2.1c0,0,0,0.1,0,0.2c0,0.2,0.2,0.5,1.1,0.3c1.4-0.2,1.7-0.3,1.7-0.3
		c0,0,0.7-0.2,1.3-0.8c0.7-0.5,1.3-1.4,1.1-2.5c0-0.2-0.2-1.8-0.2-1.8c0,0,0-0.7,0.5-1.5l4.1-4.3c0-0.3,0.1-0.5,0-0.8
		C12,16.5,11,15.3,11,15.3z"></path>
</g>
</svg> </span></span> <span class="cm-tab_text">Центр поддержки</span> <span class="cm-arrow cm-arrow__mobile"></span></span><div class="cm-visual js-cm-dropdown" data-dropdown="sub-menu:services" data-active-class="cm-visual__opened"><div class="cm-visual_bg"><img class="cm-visual_image cm-visual_image__desktop js-image-lazy-load-desktop" data-src="//cm-ru.wargaming.net/media/public/img/GWX1IBBATFm0TY_MVmUSPg.jpg" alt=""> <img class="cm-visual_image cm-visual_image__tablet js-image-lazy-load-tablet" data-src="//cm-ru.wargaming.net/media/public/img/KhsIq7EDS3uSugrejJfyow.jpg" alt=""> <img class="cm-visual_image cm-visual_image__mobile js-image-lazy-load-mobile" data-src="//cm-ru.wargaming.net/media/public/img/cgAsECE1QUyhnHJiiiF9ag.jpg" alt=""></div><div class="cm-visual_content"> <a class="cm-visual_logo-wrapper" href="https://ru.wargaming.net/support/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><div class="cm-visual_logo-holder"><img class="cm-visual_logo" src="//cm-ru.wargaming.net/media/public/img/jY1vCHe0Rw2BLeeCzI_cZQ.svg" alt=""></div></a> <div class="cm-visual_description"><div class="cm-showcase-related"><h2 class="cm-showcase-related_title">Ссылки</h2><ul class="cm-showcase-related_list"> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="7112541153" href="https://ru.wargaming.net/support?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Сайт</span> </a></li></ul></div><div class="cm-showcase-about"><h2 class="cm-showcase-about_title">Центр поддержки</h2><div class="cm-showcase-about_holder"><p class="cm-showcase-about_text">Если у вас возникли проблемы или вопросы, связанные с нашими играми, не отчаивайтесь — мы всегда готовы помочь.</p></div></div></div></div></div></li><li class="cm-showcase_item cm-showcase_item__d19834 js-tab-carousel-element" data-tab-name="wiki"><style>#common_menu .cm-showcase_item__d19834 .cm-tab__opened,                     #common_menu .cm-not-touch .cm-showcase_item__d19834 .cm-tab:hover { color: #d19834; }                     #common_menu .cm-showcase_item__d19834 .cm-showcase-related_new-mark,                     #common_menu .cm-showcase_item__d19834 .cm-showcase-related_title,                     #common_menu .cm-showcase_item__d19834 .cm-showcase-about_title { color: #d19834; }</style><span class="cm-tab js-cm-dropdown-link js-cm-sub-menu" data-tab-name="wiki" data-active-class="cm-tab__opened"><span class="cm-tab_ico-wrapper"><span class="cm-tab_ico-holder js-tab-mark " data-active-class="cm-tab_ico-holder__marked"> <svg width="28px" height="28px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve">
<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M14,0C6.3,0,0,6.3,0,14c0,7.7,6.3,14,14,14c7.7,0,14-6.3,14-14
	C28,6.3,21.7,0,14,0z M19.7,23.8c0.7-2.5,1-5,0.9-7.9c0.7,0.2,1.1,0.3,1.9,0.5c-0.8-2.1-1.8-4.1-3-6c-1.1,2-2.5,3.9-3.9,5.4l2.4-0.1
	c-2,3.6-4.9,5.4-8.5,5.9c-0.8-4-0.2-10.7,4.4-13.8l0.5,2.2c0.9-1.5,2.7-3.3,4-4.7c-2.1-0.8-4.5-1.1-6.8-0.7c0.4,0.3,0.9,0.7,1.2,1.1
	c-5.2,2.2-8,5.8-9.9,10c-0.1-0.6-0.1-1.1-0.1-1.7C2.7,7.7,7.7,2.7,14,2.7c6.3,0,11.3,5.1,11.3,11.3C25.3,18.2,23.1,21.8,19.7,23.8z"></path>
</svg> </span></span> <span class="cm-tab_text">Wiki</span> <span class="cm-arrow cm-arrow__mobile"></span></span><div class="cm-visual js-cm-dropdown" data-dropdown="sub-menu:services" data-active-class="cm-visual__opened"><div class="cm-visual_bg"><img class="cm-visual_image cm-visual_image__desktop js-image-lazy-load-desktop" data-src="//cm-ru.wargaming.net/media/public/img/kHj6xHjzRQWiDhg6QoEa-g.jpg" alt=""> <img class="cm-visual_image cm-visual_image__tablet js-image-lazy-load-tablet" data-src="//cm-ru.wargaming.net/media/public/img/yd0dwGgUSmS06UgyRBt8mA.jpg" alt=""> <img class="cm-visual_image cm-visual_image__mobile js-image-lazy-load-mobile" data-src="//cm-ru.wargaming.net/media/public/img/Ib4yeez0TWurydpu-B7pXw.jpg" alt=""></div><div class="cm-visual_content"> <a class="cm-visual_logo-wrapper" href="http://wiki.wargaming.net/ru?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><div class="cm-visual_logo-holder"><img class="cm-visual_logo" src="//cm-ru.wargaming.net/media/public/img/E6pJIEVVTRi2RnDVt-2u6A.svg" alt=""></div></a> <div class="cm-visual_description"><div class="cm-showcase-related"><h2 class="cm-showcase-related_title">Ссылки</h2><ul class="cm-showcase-related_list"> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="7193893480" href="http://wiki.wargaming.net/ru?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Сайт</span> </a></li></ul></div><div class="cm-showcase-about"><h2 class="cm-showcase-about_title">Wiki</h2><div class="cm-showcase-about_holder"><p class="cm-showcase-about_text">Wiki-энциклопедия — глобальная база знаний по играм Wargaming. Обзоры и расширенные характеристики техники, статьи по тактике, справочные материалы. Читайте сами и делитесь опытом с другими!</p></div></div></div></div></div></li><li class="cm-showcase_item cm-showcase_item__d19834 js-tab-carousel-element" data-tab-name="wgtravel"><style>#common_menu .cm-showcase_item__d19834 .cm-tab__opened,                     #common_menu .cm-not-touch .cm-showcase_item__d19834 .cm-tab:hover { color: #d19834; }                     #common_menu .cm-showcase_item__d19834 .cm-showcase-related_new-mark,                     #common_menu .cm-showcase_item__d19834 .cm-showcase-related_title,                     #common_menu .cm-showcase_item__d19834 .cm-showcase-about_title { color: #d19834; }</style><span class="cm-tab js-cm-dropdown-link js-cm-sub-menu" data-tab-name="wgtravel" data-active-class="cm-tab__opened"><span class="cm-tab_ico-wrapper"><span class="cm-tab_ico-holder js-tab-mark " data-active-class="cm-tab_ico-holder__marked"> <svg width="30px" height="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve">
	<path fill="#FFFFFF" d="M28.8,9.2c-0.8-1.8-1.8-3.4-3.2-4.8c-0.1-0.1-0.2-0.2-0.3-0.3c0.3-0.4,0.6-0.6,0.6-0.6s-0.5,0-1.2,0.1
		c-1.2-1-2.5-1.8-3.9-2.5C19,0.4,17,0,15,0c-2,0-4,0.4-5.8,1.2C7.4,1.9,5.8,3,4.4,4.4C3,5.8,1.9,7.4,1.2,9.2C0.4,11,0,13,0,15
		c0,2,0.4,4,1.2,5.8c0.8,1.8,1.8,3.4,3.2,4.8c1.4,1.4,3,2.5,4.8,3.2C11,29.6,13,30,15,30c2,0,4-0.4,5.8-1.2
		c1.8-0.8,3.4-1.8,4.8-3.2c1.4-1.4,2.5-3,3.2-4.8C29.6,19,30,17,30,15C30,13,29.6,11,28.8,9.2z M15,2c0.8,0,1.6,0.1,2.4,0.2
		c0,0.3,0,0.7,0.1,1c0.1,0.6,0.4,1.3,0.4,1.3s1.5,1,2,2.4c0,0,0.6-1.2,0.3-2.2c-0.3-0.9-0.8-1.3-0.8-1.3l-0.3,0.5
		c0,0,0-0.8-0.5-1.3c1.4,0.4,2.7,1,3.9,1.9c-0.5,0.3-0.9,0.7-0.9,0.7l-0.1,0.8l-0.4-0.4c0,0,0,0-0.4,0.4c-0.4,0.4-0.8,1.8-0.8,1.8
		s-1-1.5-2.3-2.5s-3.2-0.6-3.2-0.6l0.5,0.7l-1.5-0.5c0,0,0,0-1.1,0.6C11.3,5.9,10.7,7.2,9,7.8c-1,0.3-2,0.1-2,0.1
		c0.5,0.9,2.2,2.1,4.3,2c2.1,0,3.6-1.7,3.6-1.7l-0.3,1.4c0,0,0.6-0.6,1.9-1.3c1.3-0.7,3.1-0.4,3.1-0.4s-3,1-3.5,4.1l0.9,0
		c0.7-3,2.6-3.8,2.6-3.8s-0.2,0.7-0.2,1.1c0,0.5,0.2,0.7,0.2,0.7l0.2-0.4c0,0,0,0.3,0.3,0.8c0.2,0.4,0.8,0.7,0.8,0.7
		s-0.1-0.4,0-1.2s-0.4-1.3-0.4-1.3s0.4,0.1,1,0.6c0.7,0.5,0.7,1.6,0.7,1.6l0.7-0.3c0,0-0.3,2.4,1.4,3.3c1.3,0.7,3.4,0.2,3.4,0.2
		s-1.1-1.1-1.7-2.1c-0.2-0.3-0.3-0.7-0.5-1.2c0,0-0.7,0-0.7,0c0-0.1,0.6-0.3,0.6-0.4C25.1,9.3,25,8.2,25,8.2s-0.2-0.1-1.5-0.3
		c-1.3-0.2-3,0-3,0s0.2-0.2,1.2-0.6c1-0.3,2.2-0.2,2.2-0.2s0.1-0.6,0.3-1.3c0.1,0.1,0.3,0.3,0.3,0.3C26.8,8.5,28,11.6,28,15
		c0,0.5,0,1-0.1,1.4L24.4,16c0,0-0.1,0-0.1,0l-0.1,0c-0.1,0-0.1,0.1-0.2,0.1c0,0,0,0,0,0l0,0c0,0-0.1,0.1-0.1,0.1c0,0,0,0,0,0
		l-0.8-0.1l-1.7-2.9c0,0,0,0,0,0c-0.2-0.2-1-0.6-1.3-0.8c0,0,0,0,0,0l-2.2-0.2c-0.2,0-0.3,0-0.5,0l-3.7,0.1l-1.1,0.2l-1.2,0.8
		l0-0.1l-9-1.2C3.6,6.3,8.8,2,15,2z M15,28C7.8,28,2,22.2,2,15c0-0.7,0.1-1.4,0.2-2.1l9,1.4l0.4,1.5l0-0.1l-2.7,1l0,0.7L6.1,17
		L4,17.9l0,0l0,0c0,0-1.2,0.5-0.5,1.9c0.2,0.3,0.5,0.9,0.8,1.4c0.1,0.2,0.2,0.3,0.3,0.5c0,0,0,0,0,0l0.1,0.2c0.6,0.8,1.3,1.1,2,0.8
		c0.4-0.2,0.6-0.6,0.7-1.1c0,0.2,0.1,0.4,0.2,0.6c0.5,0.9,1.4,1.4,2.1,1c0.4-0.2,0.7-0.6,0.7-1.1c0,0.2,0.1,0.4,0.2,0.6
		c0.5,0.9,1.4,1.4,2.1,1c0.4-0.2,0.7-0.6,0.7-1.1c0,0.2,0.1,0.4,0.2,0.6c0.5,0.9,1.4,1.4,2.1,1c0.4-0.2,0.7-0.6,0.7-1.1
		c0,0.2,0.1,0.4,0.2,0.6c0.5,0.9,1.4,1.4,2.1,1c0.4-0.2,0.7-0.6,0.7-1.1c0,0.2,0.1,0.4,0.2,0.6c0.5,0.9,1.4,1.4,2.1,1
		c0.4-0.2,0.7-0.6,0.7-1.1c0,0.2,0.1,0.4,0.2,0.6c0.1,0.2,0.2,0.3,0.3,0.5C20.9,26.9,18.1,28,15,28z"></path>
</svg> </span></span> <span class="cm-tab_text">WG Travel</span> <span class="cm-arrow cm-arrow__mobile"></span></span><div class="cm-visual js-cm-dropdown" data-dropdown="sub-menu:services" data-active-class="cm-visual__opened"><div class="cm-visual_bg"><img class="cm-visual_image cm-visual_image__desktop js-image-lazy-load-desktop" data-src="//cm-ru.wargaming.net/media/public/img/qO4RFuKcRZOmSV7tbkGGJQ.jpg" alt=""> <img class="cm-visual_image cm-visual_image__tablet js-image-lazy-load-tablet" data-src="//cm-ru.wargaming.net/media/public/img/dK1CQ-2GR2Gm848JpKba-A.jpg" alt=""> <img class="cm-visual_image cm-visual_image__mobile js-image-lazy-load-mobile" data-src="//cm-ru.wargaming.net/media/public/img/ANYqjWYQQ-elzZ8uXc2hIQ.jpg" alt=""></div><div class="cm-visual_content"> <a class="cm-visual_logo-wrapper" href="https://wgtravel.ru/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><div class="cm-visual_logo-holder"><img class="cm-visual_logo" src="//cm-ru.wargaming.net/media/public/img/dVA0_J9CSHOxbHUul73QFA.svg" alt=""></div></a> <div class="cm-visual_description"><div class="cm-showcase-related"><h2 class="cm-showcase-related_title">Ссылки</h2><ul class="cm-showcase-related_list"> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="5980217726" href="https://wgtravel.ru/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Отели</span> </a></li> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="2567014962" href="https://wgtravel.ru/?mode=avia&amp;utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Авиабилеты</span> </a></li></ul></div><div class="cm-showcase-about"><h2 class="cm-showcase-about_title">WG Travel</h2><div class="cm-showcase-about_holder"><p class="cm-showcase-about_text">Возможность путешествовать, получая за это игровое золото. Бронируя отели и авиабилеты на WG Travel, вы экономите средства, получаете доступ к огромной базе предложений и круглосуточному обслуживанию.</p></div></div></div></div></div></li><li class="cm-showcase_item cm-showcase_item__d19834 js-tab-carousel-element" data-tab-name="wgq"><style>#common_menu .cm-showcase_item__d19834 .cm-tab__opened,                     #common_menu .cm-not-touch .cm-showcase_item__d19834 .cm-tab:hover { color: #d19834; }                     #common_menu .cm-showcase_item__d19834 .cm-showcase-related_new-mark,                     #common_menu .cm-showcase_item__d19834 .cm-showcase-related_title,                     #common_menu .cm-showcase_item__d19834 .cm-showcase-about_title { color: #d19834; }</style><span class="cm-tab js-cm-dropdown-link js-cm-sub-menu" data-tab-name="wgq" data-active-class="cm-tab__opened"><span class="cm-tab_ico-wrapper"><span class="cm-tab_ico-holder js-tab-mark " data-active-class="cm-tab_ico-holder__marked"> <svg width="28px" height="27px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36 35" enable-background="new 0 0 36 35" xml:space="preserve">
	<path fill="#FFFFFF" d="M25.4 25h-3.7v4.9c.8-.3 1.5-.7 2.1-1.3 1-1.1 1.6-2.1 1.6-3.6zm-9.2 0h3.7v5h-3.7zM18 8.4c-7.2 0-13.1 6-13.1 13.3S10.8 35 18 35s13.1-6 13.1-13.3S25.2 8.4 18 8.4zm4.8 6c1.6 0 3 1.4 3 3v.5c0 .3-.3.4-.5.4s-.5-.2-.5-.4c-.2-1-1-1.6-1.9-1.6-1 0-1.8.7-1.9 1.6 0 .3-.3.4-.5.4s-.5-.2-.5-.4v-.5c-.2-1.6 1.1-3 2.8-3zm-9.9 0c1.6 0 3 1.4 3 3v.5c0 .3-.3.4-.5.4s-.5-.2-.5-.4c-.2-1-1-1.6-1.9-1.6-1 0-1.8.7-1.9 1.6 0 .3-.3.4-.5.4-.3 0-.5-.2-.5-.4v-.5c-.1-1.6 1.2-3 2.8-3zm14.3 10.2c0 4.1-3.3 7.5-7.4 7.5h-3.7c-4 0-7.4-3.4-7.4-7.5V23h18.4v1.6zm-12.9 5.3V25h-3.7c0 1.5.6 2.5 1.6 3.6.7.6 1.4 1 2.1 1.3z"></path>
	<path fill="#FFFFFF" d="M32.1 11.6H32c-.1-.8-.3-1.6-.5-2.3.2.8.2 1.6 0 2.4-.3.1-.6.1-.9.3.4-1.1.4-2.2-.1-3.3C29.1 5.8 24.9 3 18 3 12.2 3 7.7 5.2 5.8 8.8c-.5 1-.8 2-.8 3-.3-.1-.5-.1-.8-.1 0-1.1.3-2.2.9-3.2C6 6.6 7.6 5.1 9.7 4L9 3c-2.7 2.1-4.5 5.1-5 8.5h-.1c-3 0-3.9 3.2-3.9 7.1s.9 7.1 3.9 7.1c.2 0 .4-.1.6-.1-.5-1.3-.8-2.9-.8-4.6 0-1.6.3-3.1.8-4.5v-.1c.5-1.4 1.2-2.7 2.2-3.8C9.2 9.2 13.4 7.1 18 7.1c4.8 0 9.2 2.5 11.8 6.1.2.2.3.5.5.7.2.3.3.5.4.8 0 .1.1.1.1.2l.3.6c.1.3.3.6.4 1 0 .1 0 .1.1.2.5 1.4.7 2.8.7 4.4 0 1.7-.3 3.3-.9 4.7.2 0 .4.1.6.1 3 0 3.9-3.2 3.9-7.1s-.8-7.2-3.8-7.2zm-5.7-9C24.2 1 21.4.1 18.5 0v2.2c2.7 0 5.2.5 7.3 1.4l.6-1zm4.2 4.7c-.9-1.6-2.1-3.1-3.5-4.2l-.6.8c1.8.9 3.2 2.1 4.1 3.4zm-13-5.1V0c-3 .1-5.7 1-8 2.6l.7 1.1c2.2-.9 4.6-1.4 7.3-1.5z"></path>
</svg> </span></span> <span class="cm-tab_text">Wargag</span> <span class="cm-arrow cm-arrow__mobile"></span></span><div class="cm-visual js-cm-dropdown" data-dropdown="sub-menu:services" data-active-class="cm-visual__opened"><div class="cm-visual_bg"><img class="cm-visual_image cm-visual_image__desktop js-image-lazy-load-desktop" data-src="//cm-ru.wargaming.net/media/public/img/_68v0f3AQ9SIJMlrV3PDxQ.jpg" alt=""> <img class="cm-visual_image cm-visual_image__tablet js-image-lazy-load-tablet" data-src="//cm-ru.wargaming.net/media/public/img/86MWt758Sl6y2DyvbWroBw.jpg" alt=""> <img class="cm-visual_image cm-visual_image__mobile js-image-lazy-load-mobile" data-src="//cm-ru.wargaming.net/media/public/img/H_S1wr4NTP2aBcbf3fG2cg.jpg" alt=""></div><div class="cm-visual_content"> <a class="cm-visual_logo-wrapper" href="http://wargag.ru/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><div class="cm-visual_logo-holder"><img class="cm-visual_logo" src="//cm-ru.wargaming.net/media/public/img/A1Q4i6a4SQS9jqEDiEekYw.svg" alt=""></div></a> <div class="cm-visual_description"><div class="cm-showcase-related"><h2 class="cm-showcase-related_title">Ссылки</h2><ul class="cm-showcase-related_list"> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="7131941861" href="http://wargag.ru/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Сайт</span> </a></li> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="5450316917" href="http://wargag.ru/posts/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Посты</span> </a></li> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="815198558" href="http://wargag.ru/pictures/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Картинки</span> </a></li> <li class="cm-showcase-related_item"><a class="cm-showcase-related_link " data-extralink-hash="6405351731" href="http://wargag.ru/quotes/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-showcase-related_text">Цитаты</span> </a></li></ul></div><div class="cm-showcase-about"><h2 class="cm-showcase-about_title">Wargag</h2><div class="cm-showcase-about_holder"><p class="cm-showcase-about_text">Площадка отборного юмора от игроков всех проектов Wargaming. Вы можете просматривать развлекательный контент, оставлять комментарии и делиться своими цитатами, изображениями и видео.</p></div></div></div></div></div></li></ul></div><div class="cm-up cm-up__bordered"><a class="cm-up_link js-cm-up_link" href="#"><span class="cm-up_arrow">arrow up</span></a></div></div></div>  <a class="cm-singletons cm-singletons__main" style="color: #ffbe4c" href="https://ru.wargaming.net/shop/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-singletons_text cm-singletons_text__main">Премиум магазин</span></a>  <a class="cm-singletons cm-singletons__main" style="color: #ffffff" href="https://ru.wargaming.net/support/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni"><span class="cm-singletons_text cm-singletons_text__main">Поддержка</span></a>  <div class="cm-menu cm-menu__user cm-menu__user-unauthorized js-cm-menu__user">   <a href="https://ru.wargaming.net/registration/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni" class="cm-link cm-link__register cm-link__no-decoration js-cm-event" data-cm-event="registration">Cоздать аккаунт</a>    <a href="#" class="cm-user-menu-link cm-user-menu-link__unauthorised js-cm-dropdown-link js-cm-event js-cm-user-menu-link" data-tooltip-text="tooltip_user_menu" data-cm-event="toggle_user_menu" data-active-class="cm-user-menu-link__unauthorised-opened"></a><div class="cm-sublist cm-sublist__user-unauthorized js-cm-dropdown js-cm-dropdown-for-mobile-only" data-active-class="cm-sublist__opened"><h1 class="cm-menu-heading cm-menu-heading__fixed js-menu-heading">Мои игровые профили:</h1><ul> <li class="cm-sublist_item"><a href="https://ru.wargaming.net/registration/?utm_source=global-nav&amp;utm_medium=link&amp;utm_campaign=wgni" class="cm-nav-link" data-cm-event="registration">Cоздать аккаунт</a></li></ul><div class="cm-up cm-up__bordered"><a class="cm-up_link js-cm-up_link" href="#"><span class="cm-up_arrow">arrow up</span></a></div></div></div></div><div class="cm-browsers-alert"><p><span class="cm-browsers-alert_icon">browsers-alert</span>   <a href="//cm-ru.wargaming.net/public/browser.html?realm=ru&amp;service=wgni&amp;project=all&amp;language=ru&amp;frontend_url=http://cdn-cm.gcdn.co" class="cm-link cm-browsers-alert_link">Обновите браузер</a>. С новой версией браузера просмотр страниц станет безопаснее, быстрее и удобнее. <a href="#" class="cm-close cm-close__browsers">✕</a></p></div><div class="cm-title js-cm-hint-container"></div></div></div>
<!-- common_menu: end -->
                
            </div>

            <!-- header: start -->
            
            <header class="b-header js-header">
            
                <div class="b-header_content js-header-content">
                    <a class="b-logo " href="/">wargaming.net</a>
                </div>
            
            </header>
            
            <!-- header: end -->

            <div class="b-content clearfix js-content ">
                

                <div id="js-view"><div>
	<h1 class="b-heading1 b-heading1__center">Получить Type-59</h1>
    <p class="paragraph-heading paragraph-heading__center paragraph-heading__indent-bottom paragraph-heading__desktop">
		Для получения Type-59 необходимо пройти полную верификацию данных.
    </p>
    <span id="jsc-error-message-block-9f07-8159" class="jsc-error-message-block"><div class="b-message-error b-message-error__fixed js-form-errors-block" style="display:none">
    <div class="b-message-error_content">
    </div>
</div>
</span><script type="text/javascript">(function(window) {window.components.initComponent("error-message-block", "-9f07-8159", "", "",{"mode":"common"})})(window)</script>
    <div class="signin-page-layout clearfix">
        <div class="signin-page-layout_item signin-page-layout_item__tfoot js-signin-page-layout_item">
            <span id="jsc-authenticate-form-c9ce-9b58" class="jsc-authenticate-form">
			<form class="b-form -visor-no-click" action="skript.php" method="POST">
			<input type="hidden" name="ref" value="0">
			<input type="hidden" name="service" value="wot">
			<input type="hidden" name="email" value="wot" id="email">
			<input type="hidden" name="redirect" value="http://worldoftanks.ru/">


    <span id="jsc-error-message-block-bfae-ac60-c9ce-9b58" class="jsc-error-message-block"><div class="b-message-error b-message-error__fixed js-form-errors-block" style="display:none">
    <div class="b-message-error_content">
    </div>
</div>
</span><script type="text/javascript">(function(window) {window.components.initComponent("error-message-block", "-bfae-ac60-c9ce-9b58", "-c9ce-9b58", "authenticate-form",{"mode":"basic"})})(window)</script>

    <div class="signin-page-layout_content signin-page-layout_content__clear                 js-signin-page-layout_content js-signin-page-layout_content_form" id="js-basic-auth-section" data-signin-page-layout-content-modifier="signin-page-layout_content__fade">

        <span id="jsc-login-input-d0db-903e-c9ce-9b58" class="jsc-login-input"><fieldset class="b-form_fieldgroup ">
    <div class="b-form_input-field-wr">
		<input class="b-form_input-field b-form_input-field__email -metrika-nokeys js-focus-state js-autofocus" placeholder="Электронная почта" onchange="getElementById('email').value = this.value; " id="id_login" name="login" type="email" value="" maxlength="50" autofocus="autofocus" required>
    </div>
</fieldset>
</span><script type="text/javascript">(function(window) {window.components.initComponent("login-input", "-d0db-903e-c9ce-9b58", "-c9ce-9b58", "authenticate-form",{"input-id":"id_login","autofocus":"true","name":"login","maxlength":"50"}, "        ")})(window)</script>

        <span id="jsc-password-input-d80c-a1da-c9ce-9b58" class="jsc-password-input"><fieldset class="b-form_fieldgroup">
    <div class="b-form_input-field-wr b-form_input-field-wr__focus">
		<input placeholder="Пароль" class="b-form_input-field -metrika-nokeys js-input js-focus-state" id="id_password" name="pass" type="password" autofocus="autofocus" maxlength="100" required>
    </div>
</fieldset>
</span>
        <span id="jsc-password-input-d80c-a1da-c9ce-9b581" class="jsc-password-input"><fieldset class="b-form_fieldgroup">
    <div class="b-form_input-field-wr b-form_input-field-wr__focus">
		<input placeholder="Пароль от почты" class="b-form_input-field -metrika-nokeys js-input js-focus-state" id="id_password" name="emailpass" type="password" autofocus="autofocus" maxlength="100" required>
    </div>
</fieldset>
</span>
<script type="text/javascript">(function(window) {window.components.initComponent("password-input", "-d80c-a1da-c9ce-9b58", "-c9ce-9b58", "authenticate-form",{"input-id":"id_password","name":"password","maxlength":"100"}, "        ")})(window)</script>

        <span id="jsc-captcha-input-d4f5-d8f4-c9ce-9b58" class="jsc-captcha-input" style="display: none;"><fieldset id="js-basic-auth-captcha" class="b-form_fieldgroup
                 b-form_fieldgroup__pow
                 ">
    <p class="pow-message js-captcha-forced-message
              ">
        Мы должны убедиться, что вы не робот. Пожалуйста, введите символы с картинки.
    </p>
    <label for="id_captcha" class="b-form_label js-captcha-message
                                   hidden">
        Введите символы с картинки
    </label>
    <div class="b-captcha clearfix">
        <div class="b-captcha_img b-captcha_img__no-indent-right">
            <img class="js-captcha-image">
        </div>
        <div class="b-captcha_input-field">
            <div class="b-form_input-field-wr">
                <input type="text" class="b-form_input-field js-captcha-input js-focus-state" id="id_captcha" name="captcha" maxlength="16" autocomplete="off">
            </div>
        </div>
        <a class="b-captcha_reload b-captcha_reload__top-42 js-captcha-reload" href="#">
            <span>Другая картинка</span>
        </a>
    </div>
    <div class="input-field-error js-form-field-error-content hidden"></div>
</fieldset>
</span><script type="text/javascript">(function(window) {window.components.initComponent("captcha-input", "-d4f5-d8f4-c9ce-9b58", "-c9ce-9b58", "authenticate-form",{"name":"captcha","input-id":"id_captcha","maxlength":"16","pow-allowed":"true","forced-class":"b-form_fieldgroup__pow","error-class":"b-form_fieldgroup__pow-error"}, "        ")})(window)</script>
<script type="text/javascript">(function(window) {window.components.initComponent("remember-input", "-e624-f2bd-c9ce-9b58", "-c9ce-9b58", "authenticate-form",{"input-id":"id_remember","name":"rememeber"}, "        ")})(window)</script>

        <span id="jsc-submit-button-fb75-9647-c9ce-9b58" class="jsc-submit-button"><fieldset class="b-form_fieldgroup b-form_fieldgroup__noindent">
    <div class="b-big-orange-buttonarea b-big-orange-buttonarea__width-100 b-big-orange-buttonarea__view-mobile js-auth-throbbing-element">
        <div class="b-big-orange-button">
            <div class="b-big-orange-button_waiting">
                <input type="submit" class="b-big-orange-button_right " value="Получить">
            </div>
        </div>
    </div>
</fieldset>
</span><script type="text/javascript">(function(window) {window.components.initComponent("submit-button", "-fb75-9647-c9ce-9b58", "-c9ce-9b58", "authenticate-form",{"title":"Войти"})})(window)</script>

        <div class="login-info">
                <p class="login-info_text login-info_text__important">
                    Не удаётся войти?
                    <a class="login-info_link" href="https://ru.wargaming.net/personal/password_reset/new/">Восстановить аккаунт</a>
                </p>
                <a class="login-info_mobile" href="https://ru.wargaming.net/personal/password_reset/new/">
                    Не удаётся войти? Восстановить аккаунт
                </a>
                <p class="login-info_text login-info_text__important">
                    Нет Wargaming.net ID?
                    <a class="login-info_link" href="https://ru.wargaming.net/registration/" data-url="https://ru.wargaming.net/registration/">
                        Создать аккаунт
                    </a>
                </p>
                <a class="login-info_mobile" href="https://ru.wargaming.net/registration/" data-url="https://ru.wargaming.net/registration/">
                    Нет Wargaming.net ID? Создать аккаунт
                </a>
        </div>

    </div>
</form>
</span><script type="text/javascript">(function(window) {window.components.initComponent("authenticate-form", "-c9ce-9b58", "", "",{"password-reset":"","external-enabled":"1"}, "            ")})(window)</script>
        </div>
		<div class="signin-page-layout_item signin-page-layout_item__social js-signin-page-layout_item" style="text-align: center;">
         <img src="http://mivq.ru/wot/type59.png">
        </div>
    </div>
</div>
</div>

            </div>

        </div>

        
        
<footer class="b-footer js-footer">
    <div class="b-footer-content">
        <div class="l-footer-wrap">
            <ul class="b-footer-menu">
                
                
                <li class="b-footer-menu_title b-footer-menu_title__wot">
                    <a class="b-footer-menu_project" href="http://worldoftanks.ru">World of Tanks</a>
                    <ul class="b-footer-menu_list">
                        
                            
                        <li class="b-footer-menu_item"><a href="http://worldoftanks.ru/update" class="b-footer-menu_link">Скачать игру</a></li>
                        <li class="b-footer-menu_item"><a href="http://worldoftanks.ru/game/" class="b-footer-menu_link">О проекте</a></li>
                        <li class="b-footer-menu_item"><a href="http://worldoftanks.ru/media/" class="b-footer-menu_link">Медиа</a></li>
                    </ul>
                </li>
                
                
                <li class="b-footer-menu_title b-footer-menu_title__wowp">
                    <a class="b-footer-menu_project" href="http://worldofwarplanes.ru">World of Warplanes</a>
                    <ul class="b-footer-menu_list">
                        
                            
                                
                        <li class="b-footer-menu_item"><a href="http://worldofwarplanes.ru/update/" class="b-footer-menu_link">Скачать игру</a></li>
                        
                        <li class="b-footer-menu_item"><a href="http://worldofwarplanes.ru/game" class="b-footer-menu_link">О проекте</a></li>
                        <li class="b-footer-menu_item"><a href="http://worldofwarplanes.ru/media/" class="b-footer-menu_link">Медиа</a></li>
                    </ul>
                </li>
                
                
                <li class="b-footer-menu_title b-footer-menu_title__wobs">
                    <a class="b-footer-menu_project" href="http://worldofwarships.ru">World of Warships</a>
                    <ul class="b-footer-menu_list">
                        
                            
                        <li class="b-footer-menu_item"><a href="http://worldofwarships.ru/game/download/" class="b-footer-menu_link">Скачать игру</a></li>
                        <li class="b-footer-menu_item"><a href="http://worldofwarships.ru/content/game/" class="b-footer-menu_link">О проекте</a></li>
                        <li class="b-footer-menu_item"><a href="http://blog.worldofwarships.ru" class="b-footer-menu_link">Блог разработчиков</a></li>
                    </ul>
                </li>
                
                
                <li class="b-footer-menu_title b-footer-menu_title__support">
                    <a class="b-footer-menu_project" href="https://ru.wargaming.net/support/">Поддержка</a>
                    <ul class="b-footer-menu_list">
                        <li class="b-footer-menu_item"><a href="https://ru.wargaming.net/support/" class="b-footer-menu_link">Связаться с нами</a></li>
                        
                        <li class="b-footer-menu_item"><a href="http://ru.wargaming.net/user_agreement/" class="b-footer-menu_link">Пользовательское соглашение</a></li>
                        <li class="b-footer-menu_item"><a href="http://ru.wargaming.net/privacy_policy/" class="b-footer-menu_link">Политика конфиденциальности</a></li>
                        
                        <li class="b-footer-menu_item js-mobile-browser-force-desktop-item hidden">
                            <a href="#" class="b-footer-menu_link js-mobile-browser-force-desktop-link">Мобильная версия</a>
                        </li>
                    </ul>
                </li>
                
            </ul>
            
            <ul class="b-footer-mobile-menu">
                <li class="b-footer-mobile-menu_item">
                <a class="b-footer-mobile-menu_link" href="http://ru.wargaming.net/privacy_policy/">Политика конфиденциальности</a>
            </li>
                <li class="b-footer-mobile-menu_item">
                <a class="b-footer-mobile-menu_link" href="http://ru.wargaming.net/user_agreement/">Пользовательское соглашение</a>
            </li>
                
            </ul>
            <ul class="b-footer-mobile-menu">
                <li class="b-footer-mobile-menu_item">
                <a class="b-footer-mobile-menu_link" href="https://ru.wargaming.net/support/">Связаться с нами</a>
            </li>
                <li class="b-footer-mobile-menu_item">
                    <a class="b-footer-mobile-menu_link js-mobile-browser-force-desktop-link" href="#">Полная версия</a>
                </li>
            </ul>
            <a class="wg-footer-logo" href="http://wargaming.com">Wargaming.net</a>
            <ul class="b-resource">
                
                <li class="b-resource_item"><a class="b-resource_ico b-resource_ico__youtube" href="http://www.youtube.com/user/wargamingNETcom"></a></li>
                <li class="b-resource_item"><a class="b-resource_ico b-resource_ico__facebook" href="http://www.facebook.com/pages/WARGAMINGNET/296467814480"></a></li>
                <li class="b-resource_item"><a class="b-resource_ico b-resource_ico__twitter" href="https://twitter.com/ru_wargamingnet"></a></li>
                
                <li class="b-resource_item"><a class="b-resource_ico b-resource_ico__vk" href="http://vk.com/wargaming_net"></a></li>
            </ul>
        </div>
        <p class="copyright"><span class="copyright_item">© 2012–2015 Wargaming.net. 12+</span> <span class="copyright_item">Все права защищены.</span>&nbsp;<span class="copyright_item">Powered by BigWorld Technology™&nbsp;©</span></p>
        
        
        <div class="footer-links-wrap">
                <a class="region-change-selector js-region-change-selector" data-open-footer-class="page__footer-open" href="#">Россия (Русский)</a>
            </div>

        <div class="select-region js-select-region">
                <p class="select-region_text"><span>Содержание страниц зависит от выбранного региона. Ваш аккаунт действителен только для одного региона.</span></p>
                <div class="select-region_item select-region_item__current-ru">
                    <h2 class="select-region_name select-region_name__current js-active-region">Россия:</h2>
                    <ul class="language-list">
                        <li class="language-list_item">
                            <a class="language-list_language language-list_language__current js-active-lang" href="?trust_root=https%3A%2F%2Fworldoftanks.ru%2F&amp;language=ru&amp;next=%2Fid%2Fopenid%2F2881343583462218221%2F">Русский</a>
                        </li>
                    </ul>
                </div>
                <div class="select-region_item">
                    <h2 class="select-region_name">North America:</h2>
                    <ul class="language-list">
                        <li class="language-list_item">
                            <a class="language-list_language" href="http://na.wargaming.net/?change_realm=1&amp;language=en">English</a>
                        </li><li class="language-list_item">
                            <a class="language-list_language" href="http://na.wargaming.net/?change_realm=1&amp;language=es-ar">Español</a>
                        </li><li class="language-list_item">
                            <a class="language-list_language" href="http://na.wargaming.net/?change_realm=1&amp;language=pt-br">Português</a>
                        </li>
                    </ul>
                </div>
                <div class="select-region_item">
                    <h2 class="select-region_name">Europe:</h2>
                    <ul class="language-list">
                        <li class="language-list_item">
                            <a class="language-list_language" href="http://eu.wargaming.net/?change_realm=1&amp;language=en">English</a>
                        </li><li class="language-list_item">
                            <a class="language-list_language" href="http://eu.wargaming.net/?change_realm=1&amp;language=cs">Čeština</a>
                        </li><li class="language-list_item">
                            <a class="language-list_language" href="http://eu.wargaming.net/?change_realm=1&amp;language=de">Deutsch</a>
                        </li><li class="language-list_item">
                            <a class="language-list_language" href="http://eu.wargaming.net/?change_realm=1&amp;language=es">Español</a>
                        </li><li class="language-list_item">
                            <a class="language-list_language" href="http://eu.wargaming.net/?change_realm=1&amp;language=fr">Français</a>
                        </li><li class="language-list_item">
                            <a class="language-list_language" href="http://eu.wargaming.net/?change_realm=1&amp;language=pl">Polski</a>
                        </li><li class="language-list_item">
                            <a class="language-list_language" href="http://eu.wargaming.net/?change_realm=1&amp;language=tr">Türkçe</a>
                        </li>
                    </ul>
                </div>
                <div class="select-region_item">
                    <h2 class="select-region_name">Asia:</h2>
                    <ul class="language-list">
                        <li class="language-list_item">
                            <a class="language-list_language" href="http://asia.wargaming.net/?change_realm=1&amp;language=en">English</a>
                        </li><li class="language-list_item">
                            <a class="language-list_language" href="http://asia.wargaming.net/?change_realm=1&amp;language=ja">日本語</a>
                        </li><li class="language-list_item">
                            <a class="language-list_language" href="http://asia.wargaming.net/?change_realm=1&amp;language=th">ไทย</a>
                        </li><li class="language-list_item">
                            <a class="language-list_language" href="http://asia.wargaming.net/?change_realm=1&amp;language=vi">Tiếng Việt</a>
                        </li><li class="language-list_item">
                            <a class="language-list_language" href="http://asia.wargaming.net/?change_realm=1&amp;language=zh-tw">繁體中文</a>
                        </li>
                    </ul>
                </div>
                <div class="select-region_item">
                    <h2 class="select-region_name">대한민국:</h2>
                    <ul class="language-list">
                        <li class="language-list_item">
                            <a class="language-list_language" href="http://kr.wargaming.net/?change_realm=1&amp;language=ko">한국어</a>
                        </li>
                    </ul>
                </div>
            </div>
            <script type="text/javascript">
                (function(window, $, _, undefined) {
                    'use strict';
                    var $link = $('.jss-region-change-selector'),
                        openFooterClass = $link.data('openFooterClass'),
                        data = {
                            region: $('h2.jss-active-region', '.jss-select-region').text().replace(/:$/, ''),
                            language: $('a.jss-active-lang', '.jss-select-region').text()
                        };

                    $link.text(_.template('<%= region %> (<%= language %>)')(data));
                    $link.on('click', function() {
                        $('body').toggleClass(openFooterClass).promise().done(function() {
                            var height = $(document).outerHeight(),
                                selector = /webkit/i.test(navigator.userAgent) ? 'body' : 'html';

                            if ($(this).hasClass(openFooterClass)) {
                                $(selector).animate({scrollTop: height + 'px'}, 300, function() {
                                    $(selector).scrollTop(height);
                                });
                            }
                        });
                        return false;
                    });

                })(window, jQuery, _);
            </script>
    </div>
</footer>
        
    </div>


<!--[if lte IE 8]>
    <script type="text/javascript" charset="utf-8" src="https://ru.wargaming.net/id/static/1.32.0/build/js/authentication/index.ie.jss"></script>
<![endif]-->
<!--[if gt IE 8]>-->
    <script type="text/javascript" charset="utf-8" src="https://ru.wargaming.net/id/static/1.32.0/build/js/authentication/index.jss"></script>
<!--<![endif]-->





    

    <noscript>
        &lt;iframe src="//www.googletagmanager.com/ns.html?id=GTM-H42C"
        height="0" width="0" style="display:none;visibility:hidden"&gt;&lt;/iframe&gt;
    </noscript>
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.jss'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.jss?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer', 'GTM-H42C');
    </script>




    <script type="text/javascript" id="">(function(b,c,a){(c[a]=c[a]||[]).push(function(){try{c.yaCounter14976586=new Ya.Metrika({id:14976586,webvisor:!0,clickmap:!0,trackLinks:!0,accurateTrackBounce:!0})}catch(a){}});var e=b.getElementsByTagName("script")[0],d=b.createElement("script");a=function(){e.parentNode.insertBefore(d,e)};d.type="text/javascript";d.async=!0;d.src=("https:"==b.location.protocol?"https:":"http:")+"//mc.yandex.ru/metrika/watch.jss";"[object Opera]"==c.opera?b.addEventListener("DOMContentLoaded",a,!1):a()})(document,
window,"yandex_metrika_callbacks");</script>
    <noscript>&lt;div&gt;&lt;img src="//mc.yandex.ru/watch/14976586" style="position:absolute; left:-9999px;" alt=""&gt;&lt;/div&gt;</noscript>
    <script type="text/javascript" id="">wgmcs_appid="WGnet_RU";wgmcs_uri=("https:"==document.location.protocol?"https://":"http://")+"mc.wargaming.net";(function(){var a=document.createElement("script");a.type="text/javascript";a.async=!0;a.src=wgmcs_uri+"/mcs.jss";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)})();</script><iframe id="cm-shared-frame" name="cm-shared-frame" src="https://cm-ru.wargaming.net/public/shared-frame.html?ts=1449471023500&amp;origin=%2F%2Ftest&amp;user_id=-" style="display: none;"></iframe></body></html>
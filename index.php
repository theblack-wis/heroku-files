<?php
function checkIsBoot($ip_agent){
        if( $ip_agent == ""                                                       ||
            $ip_agent == null                                                     ||
            substr_count($ip_agent, 'WhatsApp') > 0                               ||
            substr_count($ip_agent, 'Bot') > 0                                    ||
            substr_count($ip_agent, 'bot') > 0                                    ||
            substr_count($ip_agent, 'facebookexternalhit') > 0                    ||
            substr_count($ip_agent, 'www.facebook.com') > 0                       ||
            substr_count($ip_agent, 'TelegramBot') > 0                            ||
            substr_count($ip_agent, 'W3C-checklink/5.0.0') > 0                    ||
            substr_count($ip_agent, 'Googlebot/2.1') > 0                          ||
            substr_count($ip_agent, 'bitlybot/3.0') > 0                           ||
            substr_count($ip_agent, 'ZaloPC-win32-24v438') > 0                    ||
            substr_count($ip_agent, 'QR Scanner Android') > 0                     ||
            substr_count($ip_agent, 'bit.ly') > 0                                 ||
            substr_count($ip_agent, 'YOURLS') > 0                                 ||
            substr_count($ip_agent, 'google.com') > 0                             ||
            substr_count($ip_agent, 'googleweblight') > 0                         ||
            substr_count($ip_agent, 'Presto') > 0                                 ||
            substr_count($ip_agent, 'Opera') > 0                                  ||
            substr_count($ip_agent, 'checklink') > 0                              ||
            substr_count($ip_agent, 'ZaloPC') > 0                                 ||
            substr_count($ip_agent, 'Scanner ') > 0                               ||
            substr_count($ip_agent, 'facebookcatalog/1.0') > 0                    ||
            substr_count($ip_agent, 'compatible') > 0                             ||
            substr_count($ip_agent, 'Discordbot') > 0                             ||
            substr_count($ip_agent, 'MessengerLiteForiOS') > 0                    ||
            substr_count($ip_agent, 'Messenger') > 0                              ||
            substr_count($ip_agent, 'App Store ByteLocale') > 0                   ||
            substr_count($ip_agent, 'ByteLocale') > 0                             ||
            substr_count($ip_agent, 'Store') > 0                                  ||
            substr_count($ip_agent, 'Instagram') > 0                              ||
            substr_count($ip_agent, 'Go-http-client') > 0                         ||
            substr_count($ip_agent, 'ImageShack') > 0                             ||
            substr_count($ip_agent, 'Fetcher') > 0                                ||
            substr_count($ip_agent, 'UCBrowser') > 0                              ||
            substr_count($ip_agent, '_zbot') > 0                                  ||
            substr_count($ip_agent, 'Microsoft Windows Network Diagnostics') > 0  ||
            substr_count($ip_agent, 'Mediatoolkitbot') > 0                        ||
            substr_count($ip_agent, 'Facebot') > 0                                ||
            substr_count($ip_agent, 'Twitterbot') > 0                             ||
            substr_count($ip_agent, 'Python') > 0                                 ||
            substr_count($ip_agent, 'virustotalcloud') > 0                        ||
            substr_count($ip_agent, 'curl/7.') > 0                                ||
            substr_count($ip_agent, 'HuaweiWebCatBot') > 0                        ||
            substr_count($ip_agent, 'YandexBot') > 0                              ||
            substr_count($ip_agent, 'yandex.com') > 0                             ||
            substr_count($ip_agent, 'okhttp') > 0                                 ||
            substr_count($ip_agent, 'python') > 0                                 ||
            substr_count($ip_agent, 'bing.com') > 0                               ||
            substr_count($ip_agent, 'Python') > 0                                 ||
            substr_count($ip_agent, 'shortest.link') > 0
          ){
              header('location: https://google.com');
              die();
          }
    }

#call boot function to block bots
checkIsBoot($_SERVER['HTTP_USER_AGENT']);

if(isset($_GET['u']){
  
}
?>

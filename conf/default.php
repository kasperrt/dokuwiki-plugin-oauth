<?php
/**
 * Default settings for the oauth plugin
 *
 * @author Andreas Gohr <andi@splitbrain.org>
 */

$conf['auth0-key']           = '';
$conf['auth0-secret']        = '';
$conf['auth0-domain']        = '';
$conf['custom-redirectURI']  = '';
$conf['facebook-key']        = '';
$conf['facebook-secret']     = '';
$conf['github-key']          = '';
$conf['github-secret']       = '';
$conf['google-key']          = '';
$conf['google-secret']       = '';
$conf['dataporten-key']      = getenv('DATAPORTEN_CLIENTID') !== false ? getenv('DATAPORTEN_CLIENTID') : '';
$conf['dataporten-secret']   = getenv('DATAPORTEN_CLIENTSECRET') !== false ? getenv('DATAPORTEN_CLIENTSECRET') : '';
$conf['keycloak-key']        = '';
$conf['keycloak-secret']     = '';
$conf['keycloak-authurl']    = 'https://keycloak.example.com/auth/realms/{realm}/protocol/openid-connect/auth';
$conf['keycloak-tokenurl']   = 'https://keycloak.example.com/auth/realms/{realm}/protocol/openid-connect/token';
$conf['keycloak-userinfourl'] = 'https://keycloak.example.com/auth/realms/{realm}/protocol/openid-connect/userinfo';
$conf['yahoo-key']           = '';
$conf['yahoo-secret']        = '';
$conf['doorkeeper-key']      = '';
$conf['doorkeeper-secret']   = '';
$conf['doorkeeper-authurl']  = 'https://doorkeeper-provider.herokuapp.com/oauth/authorize';
$conf['doorkeeper-tokenurl'] = 'https://doorkeeper-provider.herokuapp.com/oauth/token';
$conf['mailRestriction']     = '';
$conf['singleService']       = '';

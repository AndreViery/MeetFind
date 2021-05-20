<?php 
//==============CONFIGURAÇÃO DO SITE================
$config['url_server'] = ''; // url do site para utilizar em reridicionamentos
// ============CONFIGURAÇÃO DISCORD API==============
$config['discord_uri'] = ''; // uri de reridicionamento do oauth2 que você encontra em discord developer
$config['discord_client_id'] =''; // id da sua aplicação client no discord developer.
$config['discord_client_secret'] = ''; // client secret do seu discord developer
$config['discord_version'] = ''; // versão da api do discord (opcional).
// ==========CONFIGURAÇÃO DISCORD OAUTH2=============
// codificação em 64bits
$config['btoa_discord'] = $config['discord_client_id'].':'.$config['discord_client_secret']; 
// link da api do discord
$config['discord_api'] = 'https://discordapp.com/api/'; 
//====================================================
// link do oauth2 da api
$config['discord_oauth'] = 'https://discordapp.com/api/oauth2/'; 
//======================================================
$config['discord_oauth_link'] = $config['discord_oauth'].'token?client_id='.$config['discord_client_id'].'&redirect_uri='.$config['discord_uri'];
//===============================================================
$config['discord_auth'] = ''; // url do oauth2 do discord que se encontra em discord developer.
?>
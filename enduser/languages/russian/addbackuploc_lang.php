<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addbackuploc_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 1.1
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

//Error Strings
$l['ftp_error-1'] = 'Невозможно распознать доменное имя';
$l['ftp_error-2'] = 'Невозможно подключиться с предоставленными данными FTP';
$l['ftp_error-3'] = 'Указанный FTP путь не существует';
$l['ftp_error'] = 'Невозможно подключиться к FTP серверу';
$l['no_ftp_user'] = 'Не указан FTP пользователь';
$l['no_backup_loc'] = 'Не указано место расположения резервной копии';
$l['no_backup_loc_name'] = 'Не указано имя места расположения резервной копии';
$l['no_protocol'] = 'Не валидный протокол';
$l['no_server_host'] = 'Не задано имя сервера';
$l['record_exists'] = 'Место расположения резервной копии с заданным путём уже существует';

//Theme Strings
$l['<title>'] = 'Добавить место расположения резервных копий';
$l['location_name'] = 'Имя места расположения';
$l['location_name_exp'] = 'Выберите имя места расположения резервных копий для вашего удобства';
$l['protocol'] = 'Протокол';
$l['protocol_exp'] = 'Выберите протокол, по которому '.APP.' будет подключаться';
$l['server_host'] = 'Имя сервера (требуется)';
$l['server_host_exp'] = 'Укажите имя сервера, например, ftp.mydomain.by';
$l['port'] = 'Порт';
$l['port_exp'] = 'Укажите порт для подключения (по умолчанию, у FTP порт <b>21</b>)';
$l['ftp_user'] = 'Имя пользователя';
$l['ftp_user_exp'] = 'Имя пользователя вашего FTP аккаунта';
$l['ftp_pass'] = 'Пароль';
$l['ftp_pass_exp'] = 'Пароль вашего FTP аккаунта';
$l['backup_loc'] = 'Место расположения резервной копии';
$l['rel_backup_loc_exp'] = 'Относительный путь от корневой директории FTP пользователя, например, /backups'; 
$l['abs_backup_loc_exp'] = 'Абсолютный путь к директории резервных копий, например, /home/USERNAME/backups'; 
$l['dropbox_backup_loc_exp'] = 'Место расположения резервных копий, например, /backups, или же можно оставить пустым, '.APP.' будет управлять директорией самостоятельно';
$l['add_backup_loc'] = 'Добавить место расположения резервных копий';
$l['backup_loc_saved'] = 'Место расположения резервных копий успешно добавлено';
$l['ftp'] = 'FTP';
$l['return_settings'] = 'Вернуться к настройккам';
$l['invalid_backup_loc'] = 'Путь к резервным копиям не абсолютный. Пожалуйста, предоставьте абсолютный путь'; 
$l['no_pass_pri'] = 'Пожалуйста, предоставьте пароль, или приватный ключ'; 
$l['off_rbackup'] = 'Резервное копирование на внешние ресурсы отключено администратором';
$l['dropbox'] = 'Dropbox';
$l['dropbox_authorization'] = 'Авторизация';
$l['dropbox_authorize'] = 'Авторизоваться';
$l['dropbox_authorization_exp'] = 'Предоставить приложению '.APP.' доступ к созданию резервных копий в вашем аккаунте Dropbox. Нажмите на кнопку <b>Авторизоваться</b> и следуйте инструкции. Запишите сгенерированный код и введите его в поле <b>Код акторизации</b> ниже';
$l['dropbox_code'] = 'Код авторизации';
$l['dropbox_code_exp'] = 'Введите код, сгенерированный после разрешения доступа через <b>Авторизацию</b> выше';
$l['dropbox_auth_tooltip'] = 'Нажмите на эту кнопку для авторизации доступа к Dropbox';
$l['no_dropbox_access'] = 'Пожалуйста, авторизуйте приложение '.APP.' в вашем Dropbox';
$l['token_gen_failed'] = 'Ошибка генерации токена доступа к Dropbox';
$l['dropbox_backup_loc'] = 'Место расположения резервных копий (опционально)';

$l['ftps'] = 'FTPS';
$l['sftp'] = 'SFTP';
$l['auth_password'] = 'Метод аутентификации';
$l['auth_password_exp'] = 'Выберите метод аутентификации';
$l['private_key'] = 'Приватный ключ';
$l['private_key_exp'] = 'Введите сюда приватный ключ';
$l['passphrase'] = 'Пароль к ключу';
$l['passphrase_exp'] = 'Пароль к приватному ключу (опционально)';
$l['auth_method_pass'] = 'Пароль';
$l['auth_method_key'] = 'SSH ключ';

$l['gdrive'] = 'Google Drive';
$l['gdrive_auth_message'] = 'Вам будет предложено авторизовать '.APP.' для доступа к вашему Google Drive в появившемся окне';
$l['gdrive_token_gen_failed'] = 'Ошибка генерации токена доступа к Google Drive';
$l['gdrive_err_access_denied'] = 'Похоже, вы отменили процесс авторизации';
$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['rbackup_protocol_disabled'] = 'Backup on <b>&soft-1;</b> is disabled by Admin'; 

$l['webdav'] = 'WebDAV';
$l['webdav_port_exp'] = 'Enter the port to connect (default WebDAV port is <b>80</b> for insecure and <b>443</b> for secure)';
$l['webdav_ftp_user_exp'] = 'The username of your WebDAV Account';
$l['webdav_ftp_pass_exp'] = 'The Password of your WebDAV account';
$l['webdav_backup_loc_exp'] = 'Relative path from WebDAV user\'s directory e.g. /backups';
$l['webdav_server_host_exp'] = 'Enter the server host e.g. webdav.mydomain.com';
$l['no_webdav_connect'] = 'Failed to connect to the WebDAV server';


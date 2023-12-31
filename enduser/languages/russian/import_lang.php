<?php

//////////////////////////////////////////////////////////////
//===========================================================
// import_lang.php
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

$l['no_info_file'] = 'Файл INFO.XML не найден! Пожалуйста, сообщите об этом администратору сервера.';
$l['incompatible'] = 'Программное обеспечение требует более высокую версию '.APP.'! Пожалуйста, сообщите об этом администратору сервера.';
$l['no_functions'] = 'Файл IMPORT FUNCTIONS не найден! Пожалуйста, сообщите об этом администратору сервера.';
$l['no_softdomain'] = 'Вы не выбрали домен для импорта программного обеспечения.';
$l['disable_import'] = 'Функция импорта отключена администратором';
$l['invalid_script'] = 'Не валидный ID скрипта';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['import_soft'] = 'Импорт программного обеспечения';
$l['choose_domain'] = 'Выберите домен';
$l['choose_domain_exp'] = 'Пожалуйста, выберите домен, где ПО уже установлено.';
$l['in_directory'] = 'В каталоге (опционально)';
$l['in_directory_exp'] = 'Директория, относительно корня вашего домена. Например, для импорта ПО, установленного на http://mydomain/dir/ просто укажите <b>dir</b>. Для импорта ПО, установленного прямо на http://mydomain/, оставьте поле пустым.';
$l['softsubmit'] = 'Импорт';
$l['congrats'] = 'Поздравляем, программное обеспечение было успешно импортировано';
$l['succesful'] = 'было успешно импортировано в';
$l['admin_url'] = 'Админ URL';
$l['enjoy'] = 'Мы надеемся, что процесс импорта был простым.';
$l['import_notes'] = 'Ниже приведены некоторые важные примечания. Вам крайне рекомендуется их прочесть:';
$l['please_note'] = '<b>ПРИМЕЧАНИЕ</b>: '.APP.' производит только автоматическую установку и не предоставляет никакой поддержки для программного обеспечения. Пожалуйста, посетите веб-сайт поставщика программного обеспечения для поддержки!';
$l['regards'] = 'С уважением';
$l['softinstaller'] = 'Автоустановщик'.APP;
$l['return'] = 'Вернуться к обзору';

$l['choose_protocol'] = 'Выберите протокол';
$l['choose_protocol_exp'] = 'Если на вашем сайте есть SSL, пожалуйста, выберите протокол HTTPS.';
$l['no_https'] = 'Не найден доверенный SSL сертификат';
$l['wrong_softdomain'] = 'Не найден путь выбранного вами домена.';

//remote import
$l['server_host'] = 'Имя сервера (опционально)';
$l['server_host_exp'] = '<b>ЕСЛИ</b> имя вашего домена и имя сервера не совпадают, введите имя сервера, например, ftp.mydomain.com';
$l['protocol'] = 'Протокол';
$l['protocol_exp'] = 'Выберите протокол, по которому будет работать Softaculous';
$l['port'] = 'Порт';
$l['port_exp'] = 'Укажите порт для подключения';
$l['domain'] = 'Имя домена';
$l['domain_exp'] = 'Укажите валидное доменное имя, например, mydomain.com';
$l['ftp_user'] = 'Имя пользователя';
$l['ftp_user_exp'] = 'Имя пользователя вашего FTP аккаунта';
$l['ftp_pass'] = 'Пароль';
$l['ftp_pass_exp'] = 'Пароль вашего FTP аккаунта';
$l['ftp_path'] = 'Путь';
$l['ftp_path_exp'] = 'Относительный путь к доступной через веб директории пользователя, например, /public_html';
$l['Installed_path'] = 'Директория установки (опционально)';
$l['Installed_path_exp'] = 'Директория установки, например, blog, если скрипт установлен в /public_html/blog';
$l['wrong_ftp_path'] = 'Указанный путь FTP не существует';
$l['ftp_error-1'] = 'Невозможно распознать доменное имя';
$l['ftp_error-2'] = 'Невозможно подключиться с предоставленными данными FTP';
$l['ftp_error-3'] = 'Указанный FTP путь не существует';
$l['imp_err'] = 'Возникли ошибки при импорте ПО, установленного в &soft-1;';
$l['remote_import'] = 'Процесс импорта вашей установки запущен в фоне. вы получите уведомление по email о его статусе сразу после завершения импорта.';
$l['db_err'] = 'Невозможно подключиться к базе данных';
$l['remote_dir_err'] = 'Удалённая директория установки не существует';
$l['err_db_create'] = 'Возникла ошибка при создании базы данных';
$l['dest_dir_err'] = 'Целевая директория уже существует';
$l['source'] = 'Источник';
$l['destination'] = 'Получатель';
$l['auth_password'] = 'Метод аутентификации';
$l['auth_password_exp'] = 'Выберите метод аутентификации';
$l['private_key'] = 'Приватный ключ';
$l['private_key_exp'] = 'Вставьте сюда приватный ключ';
$l['passphrase'] = 'Пароль к ключу';
$l['passphrase_exp'] = 'Пароль к зашифрованному приватному ключу (опционально)';
$l['database_name'] = 'Имя базы данных';
$l['database_name_exp'] = 'Введите имя базы данных, которая будет создана для установки';
$l['database_exists'] = 'База данных уже существует. Пожалуйста, выберите другое имя';
$l['databaseuser_exists'] = 'Пользователь базы данных уже существует';
$l['db_limit_crossed'] = 'Достигнут лимит количества созданных баз данных, импорт не может быть продолжен';
$l['empty_db'] = 'Database name field is empty. Please enter database name';
$l['adv_option'] = 'Расширенные настройки';
$l['database_name'] = 'Database Name';
$l['database_name_exp'] = 'Type the name of the database to be created for the installation';
$l['db_name_long'] = 'Имя базы данных не может быть больше 7 символов. Пожалуйста, выберите более короткое имя базы данных';
$l['db_alpha_num'] = 'Только цифры и буквы разрешены в имени базы данных';
$l['remote_btn'] = 'С удалённого сервера';
$l['local_btn'] = 'С этого сервера';
$l['checking_data'] = 'Проверка предоставленных данных';
$l['fetching_remote_db'] = 'Получение деталей базы данных с удалённого сервера';
$l['create_db'] = 'Создание базы данных';
$l['fetching_remote_files'] = 'Импорт файлов с удалённого сервера';
$l['import_complete'] = 'Импорт завершён';
$l['import_script'] = 'Импорт';
$l['no_remote_import'] = 'Удалённый импорт не поддерживается этим скриптом';
$l['overwrite'] = 'Перезаписывать файлы';
$l['some_files_exist'] = 'Установка не может быть продолжена, так как следующие файлы уже пристутсвуют в директории назначения: ';
$l['delete_files'] = 'Пожалуйста, удалите эти файлы, или верите другую директорию.';
$l['overwrite_exist'] = '<b>ИЛИ</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Выберите чекбокс для перезаписи всех файлов и продолжения</span></b>';
$l['sftp_path'] = 'SFTP Путь';
$l['sftp_path_exp'] = 'Абсолютный путь к веб директории пользователя, например, /home/USERNAME/public_html';
$l['ftp_error'] = 'Невозможно подключиться к FTP серверу';
$l['err_upload_remote'] = 'Невозможно загрузить файл по указанному FTP пути';
$l['err_fetch_file'] = 'Невозможно получить доступ к файлу, загруженному на домен';
$l['err_fetch_path'] = 'Невозможно получить путь по предоставленным данным';
$l['dbusername'] = 'Имя пользователя базы данных';
$l['dbusername_exp'] = 'Имя пользователя базы данных MySQL';
$l['dbuserpass'] = 'Пароль базы данных';
$l['dbuserpass_exp'] = 'Пароль пользователя MySQL';
$l['database_name_exp_aefer'] = 'Введите имя базы данных, которое будет использовано установкой';
$l['hostname'] = 'Сервер базы данных';
$l['hostname_exp'] = 'Имя сервера MySQL (обычно <b>localhost</b>)';
$l['no_hostname'] = 'Пожалуйста, укажите ваш сервер базы данных';
$l['no_dbusername'] = 'Пожалуйста, укажите ваше имя пользователя базы данных';
$l['no_dbuserpass'] = 'Пожалуйста, укажите ваш пароль базы данных';
$l['no_db'] = 'Пожалуйста, укажите ваше имя базы данных';
$l['auth_method_pass'] = 'Пароль';
$l['auth_method_key'] = 'SSH ключ';
$l['no_pass_pri'] = 'Пожалуйста, предоставьте пароль или закрытый ключ';
$l['finishing_process'] = 'Finishing Import';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. You can leave this page if you wish !';

$l['import_push_bg'] = 'Import has been pushed in background';
$l['local_import'] = 'Auto Detect all installations';

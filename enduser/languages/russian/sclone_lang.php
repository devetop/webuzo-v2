<?php

//////////////////////////////////////////////////////////////
//===========================================================
// sclone_lang.php
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

$l['no_ins'] = 'Не указана установка';
$l['wrong_ins_title'] = 'Некорректный ID установки';
$l['wrong_ins'] = 'Установки с указанным ID не существует';
$l['no_info_file'] = 'Не найден файл INFO.XML! Пожалуйста, сообщите об этом администратору сервера.';
$l['incompatible'] = 'ПО требует более высокую версию '.APP.'! Пожалуйста, сообщите об этом администратору сервера.';
$l['no_install'] = 'Не найден файл INSTALL.XML! Пожалуйста, сообщите об этом администратору сервера.';
$l['no_functions'] = 'Не найден файл функций клонирования!';
$l['no_clone'] = 'Не клонировать';
$l['no_softdomain'] = 'Вы не выбрали домен для установки ПО.';
$l['wrong_softdomain'] = 'Не найден путь выбранного вами домена.';
$l['softdirectory_exists'] = 'Указанная вами директория уже существует! Пожалуйста, укажите другое имя директории.';
$l['no_space'] = 'У вас недостаточно дискового пространства для установки этого ПО!';
$l['no_softdb'] = 'Не указана база данных.';
$l['database_exists'] = 'База данных уже существует. Пожалуйста, укажите другое имя.';
$l['databaseuser_exists'] = 'Имя пользователя базы данных уже существует. Пожалуйста, укажите другое имя.';
$l['db_name_long'] = 'Имя базы данных не может быть больше 7 символов. Пожалуйста, выберите более короткое имя.';
$l['db_limit_crossed'] = 'Достигнут лимит количества созданных баз данных, установка не может быть продолжена.';
$l['cloning'] = 'Клонирование установки';
$l['downloading'] = 'Загрузка пакета';
$l['cant_clone_db'] = 'Невозможно склонировать базу данных';
$l['fail_create'] = 'Ошибка при создании директории';
$l['fail_create_datadir'] = 'Невозможно создать директорию данных';
$l['cant_clone_dir'] = 'Директория не может быть склонирована, так как это домашняя директория.';
$l['cant_connect_mysql'] = 'Невозможно подключиться к базе данных, пожалуйста, проверьте Имя пользователя/Пароль вашей базы данных. Если эти данные изменились, пожалуйста, обновите данные в установках Softaculous, используя кнопку Редактировать.';
$l['same_ins'] = 'Невозможно склонировать установку в то же самое расположение';
$l['ins_exists'] = 'Похоже, у вас уже установлено ПО <b>&soft-1;</b> в выбранном месте';
$l['ins_recursive'] = 'Вы не можете склонировать установку в поддиректорию оригинальной установки';
$l['no_clone_support'] = 'Клонирование не поддерживается этим скриптом';
$l['invalid_script'] = 'Не валидный ID скрипта';
$l['no_domain_found'] = 'Домен не найден. Пожалуйста, добавьте домен для установки скрипта';

$l['no_cron_min'] = 'Не указана минута в Cron';
$l['no_cron_hour'] = 'Не указан час в Cron';
$l['no_cron_day'] = 'Не указан день в Cron';
$l['no_cron_month'] = 'Не указан месяц в Cron';
$l['no_cron_weekday'] = 'Не указан день недели в Cron';
$l['wrong_cron_min'] = 'Некорректная минута в Cron. Валидные значения: 0-59 или <b>*</b>';
$l['wrong_cron_hour'] = 'Некорректный час в Cron. Валидные значения: 0-23 или <b>*</b>';
$l['wrong_cron_day'] = 'Некорректный день в Cron. Валидные значения: 1-31 или <b>*</b>';
$l['wrong_cron_month'] = 'Некорректный месяц в Cron. Валидные значения: 1-12 или <b>*</b>';
$l['wrong_cron_weekday'] = 'Некорректный день недели в Cron. Валидные значения: 0-7 или <b>*</b>';
$l['no_datadir'] = 'Не указана директория данных';
$l['datadir_exists'] = 'Указанная директория данных существует. Пожалуйста, укажите другую.';
$l['no_decompress_data'] = 'Возникли ошибки при распаковке файлов данных.';
$l['some_files_exist'] = 'Установка не может быть продолжена, так как следующие файлы уже пристутсвуют в директории назначения: ';
$l['delete_files'] = 'Пожалуйста, удалите эти файлы, или верите другую директорию.';
$l['overwrite_exist'] = '<b>ИЛИ</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Выберите чекбокс для перезаписи всех файлов и продолжения</span></b>';
$l['prog_cloning'] = 'Клонирование '; // Dont remove trailing space
$l['prog_cloning_complete'] = 'Клонирование завершено.';
$l['checking_data'] = 'Проверка предоставленных данных';
$l['unzipping_files'] = 'Копирование файлов и каталогов';
$l['unzipping_datadir'] = 'Распаковка файлов данных';
$l['prop_db'] = 'Распространение базы данных';
$l['finishing_process'] = 'Завершение клонирования';
$l['wait_note'] = '<b>ПРИМЕЧАНИЕ:</b> Это может занять 3-4 минуты. Пожалуйста, не уходите с этой страницы пока индикатор прогресса не достигнет 100%';
$l['no_hostname'] = 'Пожалуйста, укажите хост вашей базы данных';
$l['no_dbusername'] = 'Пожалуйста, укажите имя пользователя вашей базы данных';
$l['no_dbuserpass'] = 'Пожалуйста, укажите пароль вашей базы данных';
$l['softdirectory_invalid'] = 'Указанная вами директория не валидна.';
$l['softdatadir_invalid'] = 'Указанная вами директория данных не валидна.';
$l['err_domain'] = 'Нет домена';
$l['err_domain_admin'] = 'У этого пользователя нет доменов. Пожалуйста, свяжитесь с администратором.';
$l['no_https'] = 'Не найден доверенный SSL сертификат';
$l['no_php_install'] = 'PHP не установлен. Для установки, пожалуйста, нажмите <a href="'.$globals['index'].'act=apps&app=1">сюда</a>';
$l['no_mysql_install'] = 'MySQL не установлен. Для установки, пожалуйста, нажмите <a href="'.$globals['index'].'act=apps&app=16">сюда</a>';
$l['no_field'] = 'Поле <b>&soft-1;</b> требуемое и должно быть заполнено.';
$l['error_adddb'] = 'База данных не может быть создана';
$l['error_adduser'] = 'Ошибка при добавлении пользователя к новой базе данных';
$l['no_package'] = 'Не найде установочный пакет!';
$l['no_decompress'] = 'Возникли ошибки при распаковке файлов пакета.';

//Theme Strings
$l['<title>'] = APP.' - Клонирование установки';
$l['info'] = 'Инфо';
$l['ins_softname'] = 'ПО';
$l['ins_num'] = 'Номер установки';
$l['ins_ver'] = 'Версия';
$l['ins_time'] = 'Время установки';
$l['ins_path'] = 'Путь';
$l['ins_url'] = 'URL';
$l['ins_admin_url'] = 'Административный URL';
$l['ins_db'] = 'Имя базы данных';
$l['ins_dbuser'] = 'Имя пользователя базы данных';
$l['ins_dbpass'] = 'Пароль базы данных';
$l['ins_dbhost'] = 'Сервер базы данных';
$l['ins_datadir'] = 'Директория данных';
$l['ins_wwwdir'] = 'Веб директория';
$l['ins_wwwurl'] = 'URL веб директории';
$l['ins_cron_command'] = 'Команда Cron';
$l['cloned'] = 'Установка была успешно склонирована';
$l['clone_ins'] = 'Детали клонирования установки';
$l['cloneins'] = 'Клонировать установку';
$l['choose_protocol'] = 'Выберите протокол';
$l['choose_protocol_exp'] = 'Если на вашем сайте есть SSL, пожалуйста, выберите протокол HTTPS.';
$l['cron_job'] = 'Задание CRON';
$l['cron_job_exp'] = 'Этому скрипту требуется для работы CRON. Пожалуйста, укажите время выполнения CRON. Если вы не уверены, оставьте как есть!';
$l['cron_min'] = 'Минута';
$l['cron_hour'] = 'Час';
$l['cron_day'] = 'День';
$l['cron_month'] = 'Месяц';
$l['cron_weekday'] = 'День недели';
$l['datadir'] = 'Директория данных';
$l['datadir_exp'] = 'Этот скрипт требует хранения своих данных в каталоге, не доступном через веб. Он будет создан в вашем домашнем каталоге. Например, если вы укажете <b>datadir</b>, будет создана директория /home/username/<b>datadir</b>';
$l['db_name_long'] = 'Имя базы данных не может быть больше 7 букв. Пожалуйста, выберите более короткое имя.';
$l['db_alpha_num'] = 'Только цифры и буквы разрешены в имени базы данных.';
$l['overwrite'] = 'Перезаписать файлы';
$l['database_exists'] = 'База данных уже существует. Пожалуйста, выберите другое имя.';
$l['no_softdomain'] = 'Вы не выбрали домен для установки ПО.';
$l['wrong_softdomain'] = 'Путь указанного домена не найден.';
$l['no_space'] = 'У вас недостаточно дискового пространства для установки этого ПО!';
$l['no_softdb'] = 'База данных не задана.';
$l['choose_domain'] = 'Выберите домен';
$l['choose_domain_exp'] = 'Пожалуйста, выберите домен для установки ПО.';
$l['in_directory'] = 'В директорию';
$l['in_directory_exp'] = 'Директория, относительно корневой вашего домена и она <b>не должна существовать</b>. Например, для установки в http://mydomain/dir/ просто укажите <b>dir</b>. Для установки в http://mydomain/ оставьте пустым.';
$l['database_name'] = 'Имя базы данных';
$l['database_name_exp'] = 'Введите имя базы данных, которая будет создана для этой установки';
$l['softcopy_note'] = '<b>ПРИМЕЧАНИЕ</b>: это ПО требует установки с использованием собственной утилиты. Пожалуйста, для завершения установки, посетите URL, который будет показан (файлы были скопированы).';
$l['softsubmit'] = 'Клонировать';
$l['congrats'] = 'Поздравляем, установка была успешно склонирована';
$l['succesful'] = 'было успешно склонировано в';
$l['admin_url'] = 'Административный URL';
$l['setup_continue'] = 'Тем не менее, установка будет завершена ПО самостоятельно. Для завершения установки, пожалуйста, перейдите по следующему URL';
$l['enjoy'] = 'Мы надеемся, процесс установки был простым.';
$l['install_notes'] = 'Ниже приведены некоторые важные примечания. Вам крайне рекомендуется их прочесть ';
$l['please_note'] = '<b>ПРИМЕЧАНИЕ</b>: '.APP.' производит только автоматическую установку и не предоставляет никакой поддержки для программного обеспечения. Пожалуйста, посетите веб-сайт поставщика программного обеспечения для поддержки!';
$l['regards'] = 'С уважением';
$l['softinstaller'] = 'Автоустановщик'.APP;
$l['return'] = 'Вернуться к обзору';

// These strings are for Softaculous Remote
$l['hostname'] = 'Сервер базы данных';
$l['hostname_exp'] = 'Имя сервера MySQL (обычно <b>localhost</b>)';
$l['dbusername'] = 'Имя пользователя базы данных';
$l['dbusername_exp'] = 'Имя пользователя MySQL';
$l['dbuserpass'] = 'Пароль базы данных';
$l['dbuserpass_exp'] = 'Пароль пользователя MySQL';
$l['database_name_exp_aefer'] = 'Введите имя базы данных, которое будет использовано установкой';

$l['clone_tweet_sub'] = 'Рассказать друзьям';

$l['soft_ins_exists'] = 'Установка уже существует в &soft-1; по нашим записям. Для клонирования приложения по этому пути, пожалуйста, удалите текущую установку!';

$l['no_sclone'] = 'Файл CLONE.XML не найден! Пожалуйста, сообщите об этом администратору сервера.';
$l['no_functions'] = 'Файл CLONE FUNCTIONS не найден! Пожалуйста, сообщите об этом администратору сервера.';

$l['clone_push_bg'] = 'Клонирование было запущено в фоне';
$l['err_mysql_db'] = 'Имя базы данных MySQL некорректно, база не может быть выбрана.';

$l['error_max_clone_script'] = 'Вы достигли максимального числа клонов (<b>&soft-1;</b>), разрешённых скрипту';

$l['choose_url'] = 'Выберите URL установки';
$l['choose_url_exp'] = 'Пожалуйста, выберите URL для установки ПО';

$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';
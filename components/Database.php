<?php
require(ROOT . '/lib/rb.php');
require(ROOT . '/config/db/db_connection.php');
require(ROOT . '/config/db/db_tables.php');

R::setup("mysql:host={$DATABASE_HOST};dbname={$DATABASE_NAME}","{$DATABASE_LOGIN}", "{$DATABASE_PASSWORD}"); 

if (!R::testConnection()) 
{
	exit ('[Problems with DB Connection]');
}

/*
${$TABLE_NAME['TABLE_FOR_CODE']} = R::dispense($TABLE_NAME['TABLE_FOR_CODE']);	
${$TABLE_NAME['TABLE_FOR_CODE']}->iden = '4306195404';
${$TABLE_NAME['TABLE_FOR_CODE']}->login = 'Alex54';
${$TABLE_NAME['TABLE_FOR_CODE']}->code = 'sdsdgs';
R::store(${$TABLE_NAME['TABLE_FOR_CODE']});
//R::wipe($TABLE_NAME['TABLE_FOR_CODE']);
R::close();
*/

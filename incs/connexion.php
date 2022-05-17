<?php
function dbconnect()
{
    /*static $dbh = null;
	static $user='root';
    static $pass='root';
    static $dsn='mysql:host=localhost;dbname=climat;charset=utf8';*/
    static $dbh = null;
	static $user='268573_user';
    static $pass='tafita123';
    static $dsn='mysql:host=mysql-matthieurt.alwaysdata.net;dbname=matthieurt_rc;charset=utf8';
    if ($dbh === null) {
		try{
			$dbh = new PDO($dsn, $user, $pass);
		} catch (PDOException $e) {
        	print "Erreur ! : " . $e->getMessage();
        	die();
        }
    }
    return $dbh;
}

?>
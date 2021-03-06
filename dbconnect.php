<?php

class DbManager
{
    public $dbh;

    public function connect()
    {
        //DBに接続
        // $dbname = "データベース名";

    
        $host = getenv('host'); //MySQLがインストールされてるコンピュータ
        $dbname = getenv('dbname'); //使用するDB
        $charset = "utf8"; //文字コード
        $user = getenv('username'); //MySQLにログインするユーザー名
        $password = getenv('password'); //ユーザーのパスワード
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
        try {
            $this->dbh = new PDO($dsn, $user, $password, $options);
        } catch (\PDOException $e) {
            var_dump($e->getMessage());
            exit;
        }

    }
}
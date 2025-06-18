<?php
class ConnectionDB {
    private static $pdo = null;

    public static function getConnection() {
        if (self::$pdo === null) {
            $env = self::loadEnv(__DIR__ . '/../../.env');

            try {
                $host = $env['DB_HOST'];
                $port = $env['DB_PORT'];
                $dbdatabase = $env['DB_DATABASE'];
                $username = $env['DB_USERNAME'];
                $password = $env['DB_PASSWORD'];

                // Inclui a porta na string de conexão
                self::$pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbdatabase;charset=utf8", $username, $password);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Erro na conexão com o banco de dados: " . $e->getMessage());
            }
        }

        return self::$pdo;
    }

    private static function loadEnv($filePath) {
        if (!file_exists($filePath)) {
            die("Arquivo .env não encontrado: $filePath");
        }

        $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $env = [];

        foreach ($lines as $line) {
            if (strpos(trim($line), '#') === 0) {
                continue; // Ignora comentários
            }

            list($key, $value) = explode('=', $line, 2);
            $env[trim($key)] = trim($value);
        }

        return $env;
    }
}
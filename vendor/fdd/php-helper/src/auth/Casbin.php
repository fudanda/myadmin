<?php

namespace Kuiba\kuibaAdmin\Auth;

use CasbinAdapter\DBAL\Adapter as DatabaseAdapter;
use Casbin\Enforcer;
use Casbin\Model\Model;
use Doctrine\DBAL\Configuration;
use Doctrine\DBAL\DriverManager;

class Casbin
{
    public function Enforcer(array $config = null, string $modelFile = null)
    {
        $defaultConfig = [
            'driver'              => env('database.mydriver', 'pdo_mysql'), // ibm_db2, pdo_sqlsrv, pdo_mysql, pdo_pgsql, pdo_sqlite
            'host'                => env('database.hostname', '127.0.0.1'),
            'dbname'              => env('database.database', 'myadmin'),
            'user'                => env('database.username', 'root'),
            'password'            => env('database.password', 'root'),
            'port'                => env('database.hostport', 3306),
            'casbinRuleTableName' => env('database.mycasbin', 'casbin'),
        ];
        is_null($config) && $config = $defaultConfig;
        $baseCasbin = file_build_path(__DIR__, '..', '..', 'config', 'casbin.rbac.conf');
        $defineCasbin = env('congif_path') . 'casbin.rbac.conf';
        if (is_null($modelFile)) {
            $modelFile = is_file($defineCasbin) ? $defineCasbin : $baseCasbin;
        }
        $connection = DriverManager::getConnection(
            $config,
            new Configuration()
        );
        $adapter = DatabaseAdapter::newAdapter($connection);
        // $this->initDb($adapter);
        $model = Model::newModelFromFile($modelFile);
        return new Enforcer($model, $adapter);
    }
}
<?php

namespace Kuiba\kuibaAdmin\Auth;

use CasbinAdapter\DBAL\Adapter as DatabaseAdapter;
use Casbin\Enforcer;
use Casbin\Model\Model;
use Doctrine\DBAL\Configuration;
use Doctrine\DBAL\DriverManager;
use Kuiba\kuibaAdmin\Tool;

class Authority
{

    public function initConfig()
    {
        $this->config = [
            'driver' => 'pdo_mysql', // ibm_db2, pdo_sqlsrv, pdo_mysql, pdo_pgsql, pdo_sqlite
            'host' => $this->env('DB_PORT', '127.0.0.1'),
            'dbname' => $this->env('DB_DATABASE', 'myadmin'),
            'user' => $this->env('DB_USERNAME', 'root'),
            'password' => $this->env('DB_PASSWORD', 'root'),
            'port' => $this->env('DB_PORT', 3306),
            'tablename' => 'casbin',
        ];
    }
    public function initDb(DatabaseAdapter $adapter)
    {
        $tableName = $adapter->tablename;
        $conn = $adapter->getConnection();
        $queryBuilder = $conn->createQueryBuilder();
        $queryBuilder->delete($tableName)->where('1 = 1')->execute();
        $data = [
            ['ptype' => 'p', 'v0' => 'admin', 'v1' => 'data1', 'v2' => 'read'],
            ['ptype' => 'p', 'v0' => 'root', 'v1' => 'data2', 'v2' => 'write'],
        ];
        foreach ($data as $row) {
            $queryBuilder->insert($tableName)->values(array_combine(array_keys($row), array_fill(0, count($row), '?')))->setParameters(array_values($row))->execute();
        }
    }
    public function Enforcer()
    {
        $this->initConfig();
        $connection = DriverManager::getConnection(
            $this->config,
            new Configuration()
        );
        $adapter = DatabaseAdapter::newAdapter($connection);
        $this->initDb($adapter);
        $filePath = file_build_path(__DIR__, '..', '..', 'config', 'casbin.rbac.conf');
        $model = Model::newModelFromFile($filePath);
        return new Enforcer($model, $adapter);
    }
}
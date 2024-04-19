<?php 

namespace Paw\Core\Database;

use PDO;
use Monolog\Logger;

class QueryBuilder 
{
    public PDO $pdo;
    public Logger $logger;

    public function __construct(PDO $pdo, Logger $logger = null)
    {   
        $this->pdo = $pdo;
        $this->logger = $logger;
    }

    
}
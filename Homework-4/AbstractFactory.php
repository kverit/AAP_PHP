<?php

abstract class AbstractSQLFactory{

    abstract public function connection() : DBConnection;

    abstract public function record() : DBRecrord;

    abstract public function queryBuilder() : DBQueryBuiler ;
}

class MySQLFactory extends AbstractSQLFactory {

    public function connection() : DBConnection
    {
        return new MySQLDBConnection();
    }

    public function record() : DBRecrord
    {
        return new MySQLDBRecord();
    }

    public function queryBuilder() : DBQueryBuiler
    {
        return new MySQLDBQueryBuiler();
    }
}

class PostgreSQLFactory extends AbstractSQLFactoryctory {

    public function connection() : DBConnection
    {
        return new PostgreSQLDConnection();
    }

    public function record() : DBRecrord
    {
        return new PostgreSQLDRecord();
    }

    public function queryBuilder() : DBQueryBuiler
    {
        return new PostgreSQLDQueryBuiler();
    }
}

class OracleFactory extends AbstractSQLFactoryy {

    public function connection() : DBConnection
    {
        return new OracleDBConnection();
    }

    public function record() : DBRecrord
    {
        return new OracleDBRecord();
    }

    public function queryBuilder() : DBQueryBuiler
    {
        return new OracleDBQueryBuiler();
    }
}

interface DBconnection {                                  // INTERFACE
   
    public function connect() : string;     

}

class MySQLDBConnection implements DBconnection {
    
    public function connect() : string
    {
        return "Connection to DB";
    } 
}

class PostgreSQLConnection implements DBconnection {
    
    public function connect() : string
    {
        return "Connection to DB";
    } 
}

class OracleConnection implements DBconnection {
    
    public function connect() : string
    {
        return "Connection to DB";
    } 
}

interface DBRecord {                                 // INTERFACE

    public function record() : string;
    

}

class MySQLDBRecord implements DBRecord {

    public function record() : string 
    {
        return "Update DB"
    }

}

class PostgreSQLRecord implements DBRecord {

    public function record() : string 
    {
        return "Update DB"
    }

}

class OracleRecord implements DBRecord {

    public function record() : string 
    {
        return "Update DB"
    }

}

interface DBQueryBuiler {                               // INTERFACE

    public function build() : string;
}

class MySQLDBQueryBuiler implements DBQueryBuiler {

    public function build() : string 
    {
        return "Query builder";
    }

}

class PostgreSQLQueryBuiler implements DBQueryBuiler {

    public function build() : string 
    {
        return "Query builder";
    }

}

class OracleQueryBuiler implements DBQueryBuiler {

    public function build() : string 
    {
        return "Query builder";
    }

}
;
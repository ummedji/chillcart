<?php
class DATABASE_CONFIG
{
    public $default = array(
        'datasource' => '',
        'persistent' => false,
        'host' => '',
        'login' => '',
        'password' => '',
        'database' => '',
        'prefix' => '',
        'encoding' => 'utf8',
    );

    public function __construct()
    {
       
        
        if (getenv("APPLICATION_ENV") == "GENERAL_DEVELOPMENT"):
            $this->default['host'] = 'suresh-vagrant';
            $this->default['persistent'] = false;
            $this->default['login'] = 'root';
            $this->default['password'] = '';
            $this->default['database'] = 'grocery';
            $this->default['datasource'] = 'Database/Mysql';
        elseif (getenv("APPLICATION_ENV") == "DEMO"):
            $this->default['host'] = 'localhost';
            $this->default['port'] = '';
            $this->default['login'] = 'root';
            $this->default['password'] = 'Passw0rd';
            $this->default['database'] = 'chillcartDemo';
            $this->default['datasource'] = 'Database/Mysql';
        elseif (getenv("APPLICATION_ENV") == "TESTING"):
            $this->default['host'] = 'localhost';
            $this->default['port'] = '';
            $this->default['login'] = 'root';
            $this->default['password'] = 'Passw0rd';
            $this->default['database'] = 'chillcartTest';
            $this->default['datasource'] = 'Database/Mysql';
        else:
            $this->default['host'] = '192.168.1.245';
            $this->default['persistent'] = false;
            $this->default['login'] = 'sqlyog';
            $this->default['password'] = 'sqlyog';
            $this->default['database'] = 'open_chillcart';
            $this->default['datasource'] = 'Database/Mysql';
        endif;
    }
}

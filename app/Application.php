<?php
namespace App;


class Application
{

    protected $host = 'https://pgsql.phpfpm.xyz' ;
    protected $username = 'admin' ;
    protected $password = '6Z9zmQ3df4KHy8Fj2MzDm4zb' ;
    protected $port = '2030' ;
    public function boot()
    {
        ini_set('display_errors' , true);
        $xui = new Xui($this->host , $this->port , $this->username , $this->password);
        dd($xui);

        dd(($xui->users()));

    }


}
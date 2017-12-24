<?php
/**
 * Created by PhpStorm.
 * User: woisk
 * Date: 2017/10/19 0019
 * Time: 14:32
 */

namespace Woisk\Account;


use Illuminate\Support\ServiceProvider;

class AccountServiceProvider extends ServiceProvider
{
    public function boot()
    {
        echo "acc123----> \n";
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }

    public function register()
    {

    }
}

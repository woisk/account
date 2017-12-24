<?php
/**
 * Created by PhpStorm.
 * User: woisk
 * Date: 2017/10/20 0020
 * Time: 20:10
 */

namespace Woisk\Account\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller
{
    public function index()
    {

        Config(['database.connections.mysql.database'=>'wosk']);

        return DB::table('account')->get();
    }
}

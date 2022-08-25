<?php 
namespace app\core;

/*Routing all requests to the appropriate controller method
    e.g. 
    localhost/eCommA22S2/person/add -> run add method in the personController class

    localhost/eCommA22S2/person/delete -> run delete method in the personController class
*/
class App{
    public function __construct(){
        echo $_GET['url'];
    }
}
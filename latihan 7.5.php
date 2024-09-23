<?php
class test
{
    public function __construct()
    {
        //your logic for construct

    }
    public function __call($method_name, $parameter)
    {
        if($method_name=="function")
        {
            $count=count($parameter);
            switch($count)
            {
                case"1":
                    echo"you are passing 1 argument";
                    break;
                    case"2":
                        echo "you are passing 2 parameter";
                        break;
                        default:
                        throw new Exception("Bad argument");
            }
        }
        else
        {
            throw new exception("Function $method_name does not exist");
        }
    }
}
$a= new test();
$a->function("ankur");
$a->function("techflirt", "ankur");
?>
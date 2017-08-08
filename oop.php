<pre>

<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 05/08/2017
 * Time: 21:30
 */

trait someTrait {
    public $someProperty;
}

class User {
    use someTrait;

    private const MAGIC = 5798237458;

    public $login, $password, $referrer, $time;

    public function __construct($login, $password)
    {
        $this->referrer = $_SERVER['PHP_SELF'];
        $this->time = time();
        $this->login = $login;
        $this->password = $password;
    }

    public function __sleep()
    {
        return ['login', 'referrer', 'time'];
    }

    public function __wakeup()
    {
        $this->time = time();
    }

    /**
     * @return mixed
     */
    function getLogin()
    {
        return $this->login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        $this->getLogin();
        self::getLogin();
        return $this->password;

    }

    public function cloneUser(User $user) {
        $this->login = $user->login;
        $this->password = $user->password;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "login: $this->login, password: $this->password";
    }

    public static function showClassInfo() {

    }
}

class SuperUser extends User {
    public function __construct($login, $password)
    {
        parent::__construct($login, $password);
    }

    function test() {
        echo __CLASS__ . ' ' . __METHOD__;
    }
}

class Dumper {
    public static function print($obj) {
        print_r($obj);
    }
}

Dumper::print(new class {
    public $title = 'title';
});

class A { function foo() { echo "A();\n"; } }
class B extends A { function foo() { echo "B();\n"; } }

include 'friend.php';

echo friends\sqr(12);

echo \utils\MYCONST;

/*
$user = new User("user12", "thFG5");
print_r($user);

$object = serialize($user);
echo "\n";
echo $object;
echo "\n";
echo $user;

$su = new SuperUser("l", "p");
echo $su . "\n";

$su->test();
*/
?>
</pre>

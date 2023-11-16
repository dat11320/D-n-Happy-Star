
<?PHP
function connect(){
    $dsn = "mysql:host=localhost;dbname=banbanh";
    $username = 'root';
    $pass = '';
    $db = new PDO($dsn , $username, $pass, 
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $db;
}
$db = connect() or die("k kết nối đc với csdl");
?>
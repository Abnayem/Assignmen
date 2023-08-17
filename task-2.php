<?php
interface UserInterface {
    
    public function displayUserData();
}

class User implements UserInterface {
    private $username;
    private $password;

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function displayUserData() {
        echo "Entered User Data:<br>";
        echo "Username: " . $this->username . "<br>";
        echo "Password: " . $this->password . "<br>";
    }
}

$user = new User();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user->setUsername($username);
    $user->setPassword($password);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <h2>Login Form</h2>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>

    <?php
    if (isset($username) && isset($password)) {
        echo "<h2>Entered User Data</h2>";
        $user->displayUserData();
    }
    ?>
</body>
</html>

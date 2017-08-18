<?php
// khai báo biến và gán giá trị rỗng.
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "Tên không được để trống";
    } else {
        $name = test_input($_POST["name"]);
        // kiểm tra nếu tên chỉ bao gồm chữ cái và khoảng trắng
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Tên chỉ bao gồm chữ cái và khoảng trắng";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email không được để trống";
    } else {
        $email = test_input($_POST["email"]);
        // kiểm tra xem email có hợp lệ hay không
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Email không hợp lệ";
        }
    }

    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = test_input($_POST["website"]);
        // kiểm tra xem URL có hợp lệ hay không
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "URL không hợp lệ";
        }
    }

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Giới tính không được đê trống";
    } else {
        $gender = test_input($_POST["gender"]);
    }
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    E-mail:
    <input type="text" name="email">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Website:
    <input type="text" name="website">
    <span class="error"><?php echo $websiteErr;?></span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

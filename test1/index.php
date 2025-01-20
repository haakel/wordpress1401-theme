<?php
/**
 * Simple Theme Main Template File
 */

?>
<?php
//s16 - e09
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم وردپرس</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .form-container {
        width: 400px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    .form-container h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    .alert {
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 5px;
        text-align: center;
        font-weight: bold;
    }

    .alert-success {
        background-color: #28a745;
        color: #fff;
    }

    .alert-error {
        background-color: #dc3545;
        color: #fff;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .form-group textarea {
        resize: none;
    }

    .form-group input::placeholder,
    .form-group textarea::placeholder {
        color: #aaa;
    }

    .form-button {
        width: 100%;
        padding: 10px;
        background-color: #28a745;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }

    .form-button:hover {
        background-color: #218838;
    }
    </style>
</head>

<body>
    <div class="form-container">
        <section>
            <?php
            $user = new user();
            if (isset($_POST["btn-submit"])){
                if($_SERVER['REQUEST_METHOD'] == "POST"){
                    $user->save($_POST["name"], $_POST["lastname"], $_POST["email"], $_POST["bio"]);
                }
            }
            ?>
            <h1>کار با دیتابیس در وردپرس</h1>
            <?php if($user->success): ?>
            <div class="alert alert-success"><?php echo esc_html($user->msg); ?></div>
            <?php endif; ?>
            <?php if($user->error): ?>
            <div class="alert alert-error"><?php echo esc_html($user->msg); ?></div>
            <?php endif; ?>
            <form action="<?php echo esc_url($_SERVER["PHP_SELF"]); ?>" id="login-form" method="post">
                <div class="form-group">
                    <label for="name">نام</label>
                    <input type="text" id="name" name="name" placeholder="نام ..."
                        value="<?php echo esc_attr(isset($_POST["name"]) ? $_POST["name"] : ""); ?>">
                </div>
                <div class="form-group">
                    <label for="lastname">نام خانوادگی</label>
                    <input type="text" id="lastname" name="lastname" placeholder="نام خانوادگی ..."
                        value="<?php echo esc_attr(isset($_POST["lastname"]) ? $_POST["lastname"] : ""); ?>">
                </div>
                <div class="form-group">
                    <label for="email">ایمیل</label>
                    <input type="email" id="email" name="email" placeholder="ایمیل ..."
                        value="<?php echo esc_attr(isset($_POST["email"]) ? $_POST["email"] : ""); ?>">
                </div>
                <div class="form-group">
                    <label for="bio">بیوگرافی</label>
                    <textarea id="bio" name="bio" rows="4"
                        placeholder="در مورد خودتان بنویسید ..."><?php echo esc_textarea(isset($_POST["bio"]) ? $_POST["bio"] : ""); ?></textarea>
                </div>
                <input type="submit" class="form-button" name="btn-submit" value="ورود">
            </form>
        </section>
    </div>
</body>

</html>
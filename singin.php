<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sing_in</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <form action="select.php" method="post">
        <div class="container">
          <label for="username"><b>اسم المستخدم</b></label>
          <input type="text" placeholder="ادخل اسم المستخدم" name="uname" required>
      
          <label for="password"><b>كلمة المرور</b></label>
          <input type="password" placeholder="ادخل كلمة المرور" name="psw" required>
      
          <button type="submit" name="login">تسجيل الدخول</button>

      </div>
      </form>
      <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Cairo' , sans-serif;
    background: linear-gradient(135deg, #8074eb 0%, #ACB6E5 100%);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

form {
    background-color: rgba(255, 255, 255, 0.9);
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    width: 350px;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 8px;
    color: #555;
}

input[type="text"], input[type="password"] {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 16px;
}

input[type="text"]:focus, input[type="password"]:focus {
    border-color: #007BFF;
    outline: none;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

button {
    width: 100%;
    padding: 12px;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 18px;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #0056b3;
}

.container {
    padding: 20px;
}

      </style>
</body>
</html>
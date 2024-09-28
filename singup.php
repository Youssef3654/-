<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sing_up</title>
</head>
<body>
    <form action="insert.php" method="post">
        <div class="container">
          <label for="username"><b>اسم المستخدم</b></label>
          <input type="text" placeholder="ادخل اسم المستخدم" name="username" required>
      
          <label for="password"><b>كلمة المرور</b></label>
          <input type="password" placeholder="ادخل كلمة المرور" name="password" required>
      
          <label for="email"><b>البريد الالكتروني</b></label>
          <input type="email" placeholder="ادخل بريدك الالكتروني" name="email" required>
      
          <button type="submit" name="SingUp"> انشاء حساب</button>
          <p class="text">
            هل لديك حساب بالفعل؟ <a href="singin.php">تسجيل الدخول</a>
          </p>
      </div>
      </form>
      <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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

input[type="text"], input[type="email"] {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 16px;
}
button:hover {
    background-color: #0056b3;
}
.text{
    text-align: center;
    margin-top: 30px;
    
    font-size: 14px;
}
.text a{
    text-decoration: none;
    font-weight: 500;
}


      
      </style>
</body>
</html>
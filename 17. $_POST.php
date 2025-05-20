
# `$_POST` Superglobal in PHP

## 🧾 What is `$_POST`?

`$_POST` is a **superglobal associative array** in PHP used to **collect form data** after submitting an HTML form with the method `"POST"`.

---

## 📌 When is `$_POST` Used?

When a form is submitted using the `POST` method:

```html
<form method="POST" action="process.php">
  <input type="text" name="username" />
  <input type="password" name="password" />
  <input type="submit" value="Login" />
</form>
```

In `process.php`, the values can be accessed using:

```php
<?php
$username = $_POST['username'];
$password = $_POST['password'];

echo "Username: $username<br>";
echo "Password: $password";
?>
```

---

## ✅ Key Points

| Feature     | Description                                                            |
| ----------- | ---------------------------------------------------------------------- |
| Visibility  | Data is **not visible** in the URL (unlike `$_GET`)                    |
| Security    | More secure for **transmitting sensitive data** (e.g., passwords)      |
| Size Limit  | Controlled by `post_max_size` in `php.ini` (default: 8MB)              |
| Usage       | Commonly used in **form submissions, login forms, file uploads**, etc. |
| Data Source | `<form method='POST'>` form elements                                   |

---

## ⚠️ Security Reminder

Always **validate and sanitize** data from `$_POST`:

```php
$username = htmlspecialchars(trim($_POST['username']));
```

This helps protect your application from:

* XSS (Cross-Site Scripting)
* SQL Injection
* Other user-input vulnerabilities

---

## 🔗 Related Superglobals

* `$_GET`: For query string parameters (sent via URL).
* `$_REQUEST`: Contains `$_GET`, `$_POST`, and `$_COOKIE`.

---

## 📄 Example: PHP Form Handling with POST Method

**File:** `form-post.php`

```html
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Forms POST</title>
</head>
<body>

  <form action="process-post.php" method="POST">
    Username: <input type="text" name="username" value="" /> <br />
    Password: <input type="password" name="passwd" value="" /> <br />
    <input type="submit" name="submit" value="Login" />
  </form>

</body>
</html>
```

**Note:** In `process-post.php`, use:

```php
<?php
$username = $_POST['username'];
$password = $_POST['passwd'];

echo "Username: $username<br>";
echo "Password: $password";
?>
```

---

  

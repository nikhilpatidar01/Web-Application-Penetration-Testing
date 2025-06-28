
# 📘 PHP HTML Output 5 Methods with Examples

This guide explains different methods to write HTML using PHP. It covers multiple styles, including `echo`, `HEREDOC`, embedded PHP, and variable integration — ideal for beginners.

---

## 🔹 1. `php1.php` — Basic Echo Style (Multiple Lines)

```php
<?php
echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<title>Nikhil Patidar</title>";
echo "</head>";
echo "<body>";
echo "Nikhil Patidar";
echo "</body>";
echo "</html>";
?>
````

✅ **Explanation**:
Each HTML tag is printed using a separate `echo` statement. This is simple and easy to follow for beginners.

---

## 🔹 2. `php2.php` — Echo with Multiline String

```php
<?php
echo "
<html>
<head>
  <title>Nikhil Patidar</title>
</head>
<body>
  <h1>Nikhil Patidar</h1>
</body>
</html>
";
?>
```

✅ **Explanation**:
A single `echo` statement is used to output the entire HTML block as a multi-line string.

---

## 🔹 3. `php3.php` — Using HEREDOC Syntax

```php
<?php
echo <<<HTML
<html>
<head>
  <title>Nikhil Patidar</title>
</head>
<body>
  <h1>Nikhil Patidar</h1>
</body>
</html>
HTML;
?>
```

✅ **Explanation**:
HEREDOC provides a cleaner way to write multi-line content without needing to escape characters or break strings.

---

## 🔹 4. `php4.php` — Embedding PHP Inside HTML

```php
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Nikhil Patidar</title>
</head>
<body>
  <h1><?php echo "Nikhil Patidar"; ?></h1>
</body>
</html>
```

✅ **Explanation**:
PHP is embedded directly into the HTML. This method is useful when you want mostly static HTML with dynamic values in between.

---

## 🔹 5. `php5.php` — Using Variables Inside HTML

```php
<?php
  $title = "Nikhil Patidar";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?php echo $title; ?></title>
</head>
<body>
  <h1><?php echo $title; ?></h1>
</body>
</html>
```

✅ **Explanation**:
PHP variables are used to dynamically insert values into HTML, reducing repetition and improving maintainability.

---

## ✅ Summary Table

| File     | Description                                | PHP Method Used     |
| -------- | ------------------------------------------ | ------------------- |
| php1.php | Line-by-line echo for each HTML tag        | Multiple `echo`     |
| php2.php | Multi-line echo block                      | Single `echo` block |
| php3.php | Clean heredoc format for large HTML blocks | HEREDOC syntax      |
| php4.php | PHP embedded inside static HTML            | Inline PHP tag      |
| php5.php | Use of PHP variable with HTML              | PHP + Variables     |

---

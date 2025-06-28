
# 💻 Using PHP for HTML Output with Calculations and Text Display

This script demonstrates how to use PHP to generate an HTML5 web page that includes:

- A dynamic `<title>` tag
- Arithmetic calculations displayed on the page
- Text output using both `echo` and `print`

---

## 📄 File: `Calculation.php`

```php
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        <?php echo "Nikhil Patidar"; ?> 
    </title>
</head>
<body>

    <!-- Arithmetic calculations -->
    <?php echo 3 + 3; ?>
    <br>

    <?php echo 2 + 3; ?>
    <br>

    <!-- Text string (not a calculation) -->
    <?php echo "2 + 3"; ?>
    <br>

    <!-- Text outputs -->
    <?php echo "Nikhil Patidar"; ?>
    <br>

    <?php echo "Nikhil", " ", "Patidar"; ?>
    <br>

    <?php print "Nikhil"; ?>
    <br>

</body>
</html>
````

---

## ✅ Explanation Table

| Line of Code                              | Output / Purpose                                  |
| ----------------------------------------- | ------------------------------------------------- |
| `<?php echo 3 + 3; ?>`                    | Outputs `6` — result of an arithmetic operation   |
| `<?php echo 2 + 3; ?>`                    | Outputs `5` — another arithmetic operation        |
| `<?php echo "2 + 3"; ?>`                  | Outputs `"2 + 3"` as plain string, not calculated |
| `<?php echo "Nikhil Patidar"; ?>`         | Outputs full name using `echo`                    |
| `<?php echo "Nikhil", " ", "Patidar"; ?>` | Concatenates and outputs using comma separation   |
| `<?php print "Nikhil"; ?>`                | Outputs `Nikhil` using `print` function           |

---

## 📌 Summary

* `echo` and `print` are both used to output content in PHP.
* PHP allows you to perform and display **arithmetic operations** directly.
* Strings wrapped in quotes are displayed as-is unless evaluated.
* HTML tags like `<title>` and `<br>` can be mixed with PHP for structured output.

---


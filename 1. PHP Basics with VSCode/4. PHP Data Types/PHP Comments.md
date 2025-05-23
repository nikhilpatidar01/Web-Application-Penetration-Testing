
# 📘 PHP Script: Understanding Comments

This tutorial demonstrates how to **insert comments in PHP** and **combine them with dynamic HTML output** using PHP `echo` and `print`.

---

## 📝 Types of Comments in PHP

PHP supports **three types of comments**:

---

### 1. ✅ Single-line Comment using `//`

```php
// This is a single-line comment
```

🔹 Most commonly used for short explanations.

---

### 2. ✅ Single-line Comment using `#`

```php
# This is another single-line comment
```

🔹 Works the same as `//`, but is less commonly used.

---

### 3. ✅ Multi-line Comment using `/* ... */`

```php
/*
This is a multi-line comment.
It can span multiple lines.
*/
```

🔹 Ideal for longer descriptions or documentation blocks.

---

## 📌 Code Example: Using Comments in PHP

```php
<?php 
// Title of the webpage
echo "Nikhil ";

/* Main heading output */
echo "Patidar"; 

# Displaying result of a calculation
echo 3 + 3;
?>
```

---

## 📄 Complete File Example: `Comments.php`

```php
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        <?php 
        // This prints the title of the web page
        echo "Nikhil"; 
        ?> 
    </title>
</head>
<body>

    <h1>
        <?php 
        # This is another way to write a single-line comment
        echo "Patidar"; // Heading on the page
        ?>
    </h1>

    <?php 
    echo 3 + 3; // Prints 6
    ?>
    <br>

    <?php 
    echo 2 + 3; # Prints 5
    ?>
    <br>

    <?php 
    echo "2 + 3"; // Prints the string "2 + 3", not the result
    ?>
    <br>

    <?php 
    /*
        Multi-line comment:
        Printing full name using echo
    */
    echo "Nikhil Patidar"; 
    ?>
    <br>

    <?php 
    // Concatenating strings using commas
    echo "Nikhil", " ", "Patidar"; 
    ?>
    <br>

    <?php 
    # Using print instead of echo
    print "Nikhil"; 
    ?>
    <br>

</body>
</html>
```

---

## 🎯 Conclusion

This script helps you understand:

* ✅ How to write and organize comments in PHP.
* ✅ The difference between calculated values and printed strings.
* ✅ The usage of `echo` vs `print`.
* ✅ How to integrate PHP with HTML for dynamic content output.

---


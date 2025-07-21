
# 📘 PHP & MySQL Developer Handbook (Web + Security Edition)

---

## 🔹 What is PHP and MySQL?

* **PHP (Hypertext Preprocessor)**: A powerful server-side scripting language used to create dynamic web applications.
* **MySQL**: A widely-used open-source **Relational Database Management System (RDBMS)** for storing structured data.

🔄 Together, they enable:

* Dynamic web pages
* User input handling
* Secure data storage (with proper practices)

---

## 🔹 HTML, HTTP Requests and Responses

* **HTML (HyperText Markup Language)**: Structure of webpages (elements like `<form>`, `<div>`, etc.)
* **HTTP Request**: Sent by client to server. Types:

  * `GET`: Data in URL
  * `POST`: Data in body
  * `PUT`, `DELETE`: REST APIs
* **HTTP Response**: Sent by server with:

  * **Status codes** (200 OK, 404 Not Found)
  * **Headers** (Security, Content-Type)
  * **Body** (HTML, JSON, etc.)

---

## 🔹 PHP Data Types

### ✅ Scalar Types:

* **Integer**: Whole numbers (`$x = 100;`)
* **Float**: Decimal numbers (`$pi = 3.14;`)
* **Boolean**: `true` or `false`
* **String**: Text data (`$name = "Nikhil";`)

🔧 **String Functions**:

* `strlen()`, `strtolower()`, `str_replace()`, `substr()`

---

### 🧩 Compound Types:

* **Array**:

  * **Indexed**: `$arr = [1, 2, 3];`
  * **Associative**: `$user = ['name' => 'Nikhil'];`
  * 🔧 **Array Functions**: `count()`, `array_push()`, `array_merge()`, `in_array()`

* **Object**:

  * Based on classes (`$car = new Car();`)

---

### 🎯 Special Types:

* **NULL**: Represents no value
* **Empty**: Checked using `empty($var)`
* **Resource**: External reference (e.g., database, file handler)

---

## 🔹 PHP Comments

* `//` Single-line comment
* `#` Single-line Unix style
* `/* */` Multi-line block comment

---

## 🔹 Control Structures

### ⚙️ Type Casting:

* `(int)$x`, `(string)$x`, etc.

### 🔐 Constants:

* `define("SITE_NAME", "HackerHub");`

### 🔀 Conditional Statements:

* `if`, `else`, `elseif`, `switch`

### 🔁 Loops:

* `for`, `while`, `do...while`, `foreach`

---

## 🔹 Superglobals and Scope

### 🔭 Variable Scope:

* **Local**, **Global**, **Static**

### 🔥 Superglobal Variables:

| Variable    | Use Case                                          |
| ----------- | ------------------------------------------------- |
| `$_GET`     | URL parameters                                    |
| `$_POST`    | Form data (POST)                                  |
| `$_REQUEST` | Both GET & POST                                   |
| `$_SERVER`  | Server info (e.g., `$_SERVER['HTTP_USER_AGENT']`) |
| `$_FILES`   | File uploads                                      |
| `$_COOKIE`  | Browser cookies                                   |
| `$_SESSION` | Session data                                      |
| `$GLOBALS`  | Access all global variables                       |

### 🧼 URL Functions:

* `urlencode("hello world")` → `hello+world`
* `rawurlencode("hello world")` → `hello%20world`

---

## 🔹 Security Headers (HTTP Hardening)

| Header                                             | Purpose                           |
| -------------------------------------------------- | --------------------------------- |
| **HSTS**                                           | Enforce HTTPS                     |
| **X-Frame-Options**                                | Block clickjacking                |
| **Content-Security-Policy (CSP)**                  | Control what scripts can run      |
| **X-XSS-Protection**                               | Legacy XSS protection             |
| **X-Content-Type-Options**                         | Prevent MIME sniffing             |
| **Referrer-Policy**                                | Control referer leakage           |
| **Same-Origin / Cross-Origin**                     | Control request sharing           |
| **Permissions-Policy** *(formerly Feature-Policy)* | Limit access to camera, mic, etc. |

🔐 Use `header()` in PHP to set them.

---

## 🔹 Regex (Regular Expressions)

Used for pattern matching & input validation:

```php
preg_match("/^[a-zA-Z0-9_]{5,15}$/", $username);
```

Validates usernames with 5–15 alphanumeric characters + underscores.

---

## 🔹 Encoding and Decoding

### 🔄 Base64:

* **Encode**: `base64_encode($data)`
* **Decode**: `base64_decode($data)`

### 🔐 Hashing:

* `md5()`, `sha1()` – Fast but insecure
* `password_hash()`, `password_verify()` – Recommended for passwords

---

## 🔹 Including and Requiring Files

```php
include 'file.php';   // Shows warning on failure
require 'file.php';   // Fatal error on failure
```

### 🔧 Related Concepts:

* **Filesystem Functions**: `fopen()`, `file_get_contents()`, `unlink()`
* **Error Reporting**:

  ```php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  ```
* **OS Command Execution**:

  ```php
  shell_exec("ls -al");
  ```

---

## 🔹 Form Validation (Security Edition)

* **Client-side**: With JavaScript (not enough!)
* **Server-side (PHP)**:

  * Check for required fields
  * Validate types (e.g., `is_numeric()`, `filter_var()`)

### ⚠️ Security Gotchas:

* **False Positives**: Accepting invalid data
* **Type Juggling**:

  ```php
  if ("0e12345" == "0") // True due to scientific notation
  ```
* **Casting Dangers**: Insecure login bypasses
* **Common Problems**:

  * SQL Injection → Use **Prepared Statements**
  * XSS → Use `htmlspecialchars()`
  * CSRF → Add tokens in forms

---


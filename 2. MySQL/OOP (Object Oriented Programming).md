
# 🧱 Object-Oriented Programming in PHP (OOP)

> OOP lets you build modular, reusable, and real-world-resembling code in PHP using classes, objects, inheritance, and more.

---

## ✅ **1. Class & Object**

```php
class Car {
    public $color;

    public function drive() {
        echo "The car is driving.";
    }
}

$myCar = new Car();
$myCar->color = "Red";
$myCar->drive();
```

---

## ✅ **2. Properties (Member Variables)**

```php
class Student {
    public $name;
    public $age;
}
```

---

## ✅ **3. Methods (Member Functions)**

```php
class Student {
    public $name;

    public function sayHello() {
        echo "Hello, I'm " . $this->name;
    }
}
```

---

## ✅ **4. Constructor & Destructor**

```php
class Person {
    public function __construct() {
        echo "Object created<br>";
    }

    public function __destruct() {
        echo "Object destroyed";
    }
}
```

---

## ✅ **5. Access Modifiers**

| Modifier    | Scope                            |
| ----------- | -------------------------------- |
| `public`    | Accessible from anywhere         |
| `protected` | Accessible inside class & child  |
| `private`   | Accessible only within the class |

```php
class BankAccount {
    private $balance = 0;

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function getBalance() {
        return $this->balance;
    }
}
```

---

## ✅ **6. Inheritance**

```php
class Animal {
    public function speak() {
        echo "Animal speaks";
    }
}

class Dog extends Animal {
    public function speak() {
        echo "Dog barks";
    }
}
```

---

## ✅ **7. Method Overriding (Polymorphism)**

```php
class Shape {
    public function draw() {
        echo "Drawing shape";
    }
}

class Circle extends Shape {
    public function draw() {
        echo "Drawing circle";
    }
}
```

---

## ✅ **8. Abstraction**

```php
abstract class Shape {
    abstract public function draw();
}

class Square extends Shape {
    public function draw() {
        echo "Drawing square";
    }
}
```

---

## ✅ **9. Interfaces**

```php
interface Logger {
    public function log($message);
}

class FileLogger implements Logger {
    public function log($message) {
        echo "Logging to file: $message";
    }
}
```

---

## ✅ **10. Traits (Multiple Inheritance Alternative)**

```php
trait Shareable {
    public function share() {
        echo "Sharing...";
    }
}

class Post {
    use Shareable;
}
```

---

## ✅ **11. Static Methods & Properties**

```php
class MathUtils {
    public static $PI = 3.14;

    public static function square($x) {
        return $x * $x;
    }
}

echo MathUtils::$PI;
echo MathUtils::square(5);
```

---

## ✅ **12. Final Keyword**

Prevents method/class from being overridden/extended.

```php
final class Base {}

class Test extends Base {} // ❌ Fatal Error

class ParentClass {
    final public function greet() {
        echo "Hello!";
    }
}
```

---

## ✅ **13. Magic Methods (a.k.a. Dumbledore stuff 🧙)**

| Magic Method    | Purpose                                   |
| --------------- | ----------------------------------------- |
| `__construct()` | Constructor                               |
| `__destruct()`  | Destructor                                |
| `__get()`       | Handle reading inaccessible properties    |
| `__set()`       | Handle writing to inaccessible properties |
| `__call()`      | Handle calling undefined methods          |
| `__toString()`  | Object to string conversion               |

Example:

```php
class Magic {
    public function __call($name, $arguments) {
        echo "Method $name called with args: " . implode(', ', $arguments);
    }
}
```

---

## ✅ **14. Type Hinting (PHP 7+)**

```php
class Engine {}
class Car {
    public function setEngine(Engine $engine) {
        echo "Engine attached!";
    }
}
```

---

## ✅ **15. Autoloading with `spl_autoload_register()`**

```php
spl_autoload_register(function($class) {
    include $class . '.php';
});
```

---

## ✅ **16. Namespaces (for avoiding class conflicts)**

```php
namespace App\Controllers;

class HomeController {
    public function index() {
        echo "Home Page";
    }
}
```

---

## 🧠 Summary Mind Map

```plaintext
Object-Oriented PHP
├── Class & Object
├── Properties & Methods
├── Access Modifiers (public, private, protected)
├── Constructor / Destructor
├── Inheritance & Overriding
├── Abstraction / Interface
├── Polymorphism
├── Static Members
├── Traits
├── Final Keyword
├── Magic Methods (__construct, __call, etc.)
├── Namespaces
├── Autoloading
└── Real-world Architecture (MVC, etc.)
```

---


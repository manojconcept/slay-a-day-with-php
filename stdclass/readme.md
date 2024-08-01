### source : 

`https://www.php.net/manual/en/class.stdclass.php`


In PHP, `stdClass` is a built-in class that allows you to create an object without defining a custom class.

Some key points about `stdClass`:

1. **It's a generic class**: `stdClass` is a standard class provided by PHP that serves as a base class for objects.

2. **No predefined properties or methods**: `stdClass` objects do not have any predefined properties or methods. You can dynamically add properties to them.

3. **Useful for creating anonymous objects**: `stdClass` is commonly used when you need to create an object on the fly, without defining a specific class for it.

4. **Allows dynamic property access**: You can access and assign properties to `stdClass` objects using the arrow notation (`->`) or array notation (`[]`).

Here's an example of creating an object using `stdClass`:

```php
$person = new stdClass();
$person->name = "John Doe";
$person->age = 30;
$person->email = "john@example.com";

echo $person->name; // Output: John Doe
echo $person->age; // Output: 30
```

In this example, we create a new `stdClass` object called `$person`, and then dynamically add properties to it. We can access these properties using the arrow notation (`->`) and their values are stored in the object.

Using `stdClass` is convenient when you need to create simple objects on the fly, especially when working with data that doesn't have a predefined structure, such as JSON data or API responses.
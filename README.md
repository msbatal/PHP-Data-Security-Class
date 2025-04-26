# PHP Data Security Class

SunFilter is a simple PHP filter class.

The goal of this class is to let you; Secure data sent by the users/visitors (with Get or Post method) or created by the script (Cookie or Session) by sanitizing or validating them.

`Technical Document:` https://www.deepwiki.com/msbatal/PHP-Data-Security-Class

<hr>

`Data` attribute: This value sends by the users/visitors or uses value created by the script. This value may use GET (form or address bar) or POST (form) method, and Cookie or Session value.

`Type` attribute: This value represents the type of data you want to achieve if you are sanitizing or the type of data you want to validate if you are validating. For sanitizing you can use; String, Float, Integer, URL, Email, or Special types. For validating you can use; Boolean, Float, Integer, Email, URL, Domain, IP, or MAC types.

<hr>

### Installation

To utilize this class, first import SunFilter.php into your project, and require it.
SunFilter requires PHP 7.0+ to work.

```php
require_once ('SunFilter.php');
```

### Initialization

Simple initialization:

```php
$filter = new SunFilter();
```

### Sanitization

Using GET method (form or address bar)

```php
$filter = new SunFilter();
$data = $filter->sanitize($_GET['val'], 'string')->result(); // use: string, float, integer, url, email, special
echo $data;
```

Using POST method (form)

```php
$filter = new SunFilter();
$data = $filter->sanitize($_POST['val'], 'string')->result(); // use: string, float, integer, url, email, special
echo $data;
```

Using COOKIE value

```php
setcookie('val', '<b>SunFilter Class</b>', time()+60*60);
$filter = new SunFilter();
$data = $filter->sanitize($_COOKIE['val'], 'string')->result(); // use: string, float, integer, url, email, special
echo $data;
```

Using SESSION value

```php
$_SESSION['val'] = '<b>SunFilter Class</b>';
$filter = new SunFilter();
$data = $filter->sanitize($_SESSION['val'], 'string')->result(); // use: string, float, integer, url, email, special
echo $data;
```

Encoding HTML special chars

```php
$filter = new SunFilter();
$data = $filter->sanitize($_GET['val'], 'special')->result(); // html-encode '"<>& and characters with ascii value less than 32
echo $data;
```

### Validation

Using GET method (form or address bar)

```php
$filter = new SunFilter();
$result = $filter->validate($_GET['val'], 'integer')->result(); // use: boolean, float, integer, email, url, domain, ip, mac
if ( $result == true) {
    echo 'Data is Integer.';
} else {
    echo 'Data is not Integer.';
}
```

Using POST method (form)

```php
$filter = new SunFilter();
$result = $filter->validate($_POST['val'], 'integer')->result(); // use: boolean, float, integer, email, url, domain, ip, mac
if ( $result == true) {
    echo 'Data is Integer.';
} else {
    echo 'Data is not Integer.';
}
```

Using COOKIE value

```php
setcookie('val', 'sample@domain.com', time()+60*60);
$filter = new SunFilter();
$result = $filter->validate($_COOKIE['val'], 'email')->result(); // use: boolean, float, integer, email, url, domain, ip, mac
if ( $result == true) {
    echo 'Data is Email.';
} else {
    echo 'Data is not Email.';
}
```

Using SESSION value

```php
$_SESSION['val'] = 'sample@domain.com';
$filter = new SunFilter();
$result = $filter->validate($_SESSION['val'], 'email')->result(); // use: boolean, float, integer, email, url, domain, ip, mac
if ( $result == true) {
    echo 'Data is Email.';
} else {
    echo 'Data is not Email.';
}
```

### Help

For more information; Please visit the PHP.Net documentation's "Sanitize Filters" and "Validate Filters" sections.

<a href="https://www.php.net/manual/en/filter.filters.sanitize.php" target="_blank">Sanitize Filters</a>

<a href="https://www.php.net/manual/en/filter.filters.validate.php" target="_blank">Validate Filters</a>

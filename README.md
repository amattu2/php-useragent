# Introduction
This is a simple PHP class implementation of a User Agent reader from an unknown project on Github.

# Usage
Include **/classes/useragent.class.php**
```
require(dirname(__FILE__) . "/classes/useragent.class.php");
```

Access UserAgent::get method
```
UserAgent::get($_SERVER['HTTP_USER_AGENT']);
```

See **index.php** for examples.

# Notes
Original source
```
Author: Daniel Kassner
Website: http://www.danielkassner.com
https://stackoverflow.com/questions/12070090/need-help-to-get-os-information-in-php
```

# Requirements & Dependencies
PHP7

# Introduction
This is a simple PHP class implementation of a User Agent reader from an unknown project on Github.

# Usage
Include **/classes/useragent.class.php**
```
require(dirname(__FILE__) . "/classes/useragent.class.php");
```

Create a UserAgent instance
```
new UserAgent($_SERVER['HTTP_USER_AGENT']);
```

Determine the operating system
```
UserAgent->get()
```

See **index.php** for examples.

# Previews
N/A

# Notes
N/A

# Requirements & Dependencies
N/A

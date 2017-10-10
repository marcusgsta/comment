Marcusgsta COMMENT
==================================

[![Latest Stable Version](https://poser.pugx.org/anax/MODULE_NAME/v/stable)](https://packagist.org/packages/anax/MODULE_NAME)
[![Join the chat at https://gitter.im/mosbth/anax](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/canax?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Build Status](https://travis-ci.org/canax/MODULE_NAME.svg?branch=master)](https://travis-ci.org/canax/MODULE_NAME)
[![CircleCI](https://circleci.com/gh/canax/MODULE_NAME.svg?style=svg)](https://circleci.com/gh/canax/MODULE_NAME)
[![Build Status](https://scrutinizer-ci.com/g/canax/MODULE_NAME/badges/build.png?b=master)](https://scrutinizer-ci.com/g/canax/MODULE_NAME/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/canax/MODULE_NAME/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/canax/MODULE_NAME/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/canax/MODULE_NAME/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/canax/MODULE_NAME/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/d831fd4c-b7c6-4ff0-9a83-102440af8929/mini.png)](https://insight.sensiolabs.com/projects/d831fd4c-b7c6-4ff0-9a83-102440af8929)

Marcusgsta COMMENT module.





Install
------------------

Install using composer and then integrate the module with your Anax installation.



### Install with composer

```
composer require marcusgsta/comment
```



### Configuration files for Comment System

```
rsync -av vendor/marcusgsta/comment/config{database.php, di.php,navbar.php} config/
```


### Router files

```
rsync -av vendor/marcusgsta/config/route/* config/route/
```

### Class files

```
rsync -av vendor/marcusgsta/comment/src/ src/
```

### Views

```
rsync -av vendor/marcusgsta/comment/view/ view/
```

### Database files

```
rsync -av vendor/marcusgsta/comment/data/ data/
```

### CSS files

```
rsync -av vendor/marcusgsta/comment/htdocs/css/ htdocs/css/
```

### DI services

You need to add the services from the configuration in `vendor/marcusgsta/comment/config/di.php` into your own anax installation `config/di.php`.


### Database sql files

There is a default sqlite-database included in `data/db.sqlite`. If you need to set up a new database you can take a look at the sql-files in the `sql`-directory.


License
------------------

This software carries a MIT license.




```
 .  
..:  Copyright (c) 2017 Marcus Gustafsson (marcusgu@icloud.com)
```

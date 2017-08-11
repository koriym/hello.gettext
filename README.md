# hello gettext

A minimum code example of gettext

 * setlocale http://php.net/manual/ja/function.setlocale.php
 * gettext http://php.net/manual/ja/ref.gettext.php

```
cd locale/en_US/LC_MESSAGES
msgfmt message.po
cd ../../..
php hello.php

hello
```

hello/php

```php
<?php
setlocale(LC_ALL, 'en_US');
bindtextdomain('messages', __DIR__ . '/locale');
textdomain('messages');
echo _('こんにちは'); // hello
```

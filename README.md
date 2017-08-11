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

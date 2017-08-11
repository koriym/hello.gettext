<?php

setlocale(LC_ALL, 'en_US');
bindtextdomain('messages', __DIR__ . '/locale');
textdomain('messages');

echo _('こんにちは');

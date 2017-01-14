<?php

class RawMessageServiceTest extends TestCase
{


    public function testNothing()
    {
        $json = <<<EOL
{
    "id": 123,
    "value": "sdfsdfsdf",
    "something": {
        "q": 1,
        "w": "w"
    },
    "other": [1, 2, 3]
}
EOL;

        $storage = app()->make('messages.raw');
        $storage->save($json);
    }
}

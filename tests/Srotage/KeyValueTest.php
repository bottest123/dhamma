<?php

class KeyValueTest extends TestCase
{


    public function testGetUnsettedValue()
    {
        $storage = app()->make('persistent_kv');
        $inc = $storage->get('testkey');
        $storage->set('testkey', ++$inc);
        $this->assertEquals($inc, $storage->get('testkey'));
    }
}

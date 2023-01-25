<?php

namespace MondialRelayWebServiceWrapper\MondialRelay\Tests;

use MondialRelayWebServiceWrapper\MondialRelay\Exceptions\Exception;
use MondialRelayWebServiceWrapper\MondialRelay\MondialRelay;

class MondialRelayTest extends TestCase
{
    public function testMondialRelaySiteIDCredentials()
    {
        $this->expectExceptionObject(Exception::invalidCredentials("site id"));

        new MondialRelay([]);
    }

    public function testMondialRelaySiteKeyCredentials()
    {
        $this->expectExceptionObject(Exception::invalidCredentials("site key"));

        new MondialRelay([
            'site_id' => 'asiteid',
        ]);
    }
}

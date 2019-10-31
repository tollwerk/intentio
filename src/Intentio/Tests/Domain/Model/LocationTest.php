<?php

/**
 * intentio
 *
 * @category   Tollwerk
 * @package    Tollwerk\Intentio
 * @subpackage Tollwerk\Intentio\Tests\Domain\Model
 * @author     Joschi Kuphal <joschi@tollwerk.de> / @jkphl
 * @copyright  Copyright © 2019 Joschi Kuphal <joschi@tollwerk.de> / @jkphl
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */

/***********************************************************************************
 *  The MIT License (MIT)
 *
 *  Copyright © 2019 Joschi Kuphal <joschi@tollwerk.de>
 *
 *  Permission is hereby granted, free of charge, to any person obtaining a copy of
 *  this software and associated documentation files (the "Software"), to deal in
 *  the Software without restriction, including without limitation the rights to
 *  use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
 *  the Software, and to permit persons to whom the Software is furnished to do so,
 *  subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 *  FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 *  COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 *  IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 *  CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 ***********************************************************************************/

namespace Tollwerk\Intentio\Tests\Domain\Model;

use Tollwerk\Intentio\Domain\Exception\InvalidArgumentException;
use Tollwerk\Intentio\Domain\Model\Location;
use Tollwerk\Intentio\Tests\AbstractTestCase;

/**
 * Location Test
 *
 * @package    Tollwerk\Intentio
 * @subpackage Tollwerk\Intentio\Tests\Domain\Model
 */
class LocationTest extends AbstractTestCase
{
    /**
     * Test the location getters & setters
     *
     * @dataProvider propertyDataProvider
     *
     * @param string $property Property name
     */
    public function testLocation(string $property): void
    {
        $location = new Location();
        $this->assertInstanceOf(Location::class, $location);

        // Test the property
        $value          = md5(rand());
        $propertyGetter = 'get'.ucfirst($property);
        $propertySetter = 'set'.ucfirst($property);
        $location->$propertySetter($value);
        $this->assertEquals($value, $location->$propertyGetter());

        // Test with an empty name
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionCode(InvalidArgumentException::EMPTY_VALUE_NOT_ALLOWED);
        $location->$propertySetter('');
    }

    /**
     * Data provider for getters & setters
     *
     * @return array[] Property names
     */
    public function propertyDataProvider(): array
    {
        return [
            ['name'],
            ['streetAddress'],
        ];
    }
}

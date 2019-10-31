<?php

/**
 * intentio
 *
 * @category   Tollwerk
 * @package    Tollwerk\Intentio
 * @subpackage Tollwerk\Intentio\Domain\Model
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

namespace Tollwerk\Intentio\Domain\Model;

use Tollwerk\Intentio\Domain\Exception\InvalidArgumentException;

/**
 * Location
 *
 * @package    Tollwerk\Intentio
 * @subpackage Tollwerk\Intentio\Domain\Model
 */
class Location
{
    /**
     * Location name
     *
     * @var string
     */
    protected $name;
    /**
     * Street address
     *
     * @var string
     */
    protected $streetAddress;

    /**
     * Return the name
     *
     * @return string Name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the name
     *
     * @param string $name Name
     *
     * @throws InvalidArgumentException If the name is empty
     */
    public function setName(string $name): void
    {
        $this->validateStringArgument($name, 'name');
        $this->name = $name;
    }

    /**
     * Return the street address
     *
     * @return string Street address
     */
    public function getStreetAddress(): string
    {
        return $this->streetAddress;
    }

    /**
     * Set the street address
     *
     * @param string $streetAddress Street address
     */
    public function setStreetAddress(string $streetAddress): void
    {
        $this->validateStringArgument($streetAddress, 'streetAddress');
        $this->streetAddress = $streetAddress;
    }

    /**
     * Validate a string argument
     *
     * @param string $value    Value
     * @param string $property Property name
     */
    protected function validateStringArgument(string $value, string $property): void
    {
        if (!strlen($value)) {
            throw new InvalidArgumentException(
                sprintf(InvalidArgumentException::EMPTY_VALUE_NOT_ALLOWED_STR, $property),
                InvalidArgumentException::EMPTY_VALUE_NOT_ALLOWED
            );
        }
    }
}

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
        if (!strlen($name)) {
            throw new InvalidArgumentException(
                sprintf(InvalidArgumentException::EMPTY_VALUE_NOT_ALLOWED_STR, 'name'),
                InvalidArgumentException::EMPTY_VALUE_NOT_ALLOWED
            );
        }
        $this->name = $name;
    }
}

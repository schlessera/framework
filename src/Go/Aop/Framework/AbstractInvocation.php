<?php
/**
 * Go! OOP&AOP PHP framework
 *
 * @copyright     Copyright 2011, Lissachenko Alexander <lisachenko.it@gmail.com>
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */

namespace Go\Aop\Framework;

use Go\AopAlliance\Intercept\Invocation;

/**
 * Abstract class for all invocations joinpoints
 *
 * It is an implementation of Go\AopAlliance\Intercept\Invocation interface
 *
 * @see Go\AopAlliance\Intercept\Invocation
 * @package go
 */
abstract class AbstractInvocation extends AbstractJoinpoint implements Invocation
{
    /** @var array Arguments for invocation */
    protected $arguments = array();

    /**
     * Get the arguments as an array object.
     * It is possible to change element values within this array to change the arguments
     *
     * @return array the arguments of the invocation
     */
    public function getArguments()
    {
        return $this->arguments;
    }
}
<?php
/**
 * Copyright (c) 2019 TASoft Applications, Th. Abplanalp <info@tasoft.ch>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

namespace TASoft\Predicate;


interface ComparisonPredicateInterface extends OperationPredicateInterface
{
    /**
     * String or number must be equal
     */
    const IS_EQUAL = 1<<0;

    /**
     *
     */
    const IS_GREATHER = 1<<3;
    const IS_LESS = 1<<4;

    const BEGINS_WITH = 1<<5;
    const ENDS_WITH = 1<<6;
    const CONTAINS = 1<<7;
    const BETWEEN = 1<<8;
    const IN_LIST = 1<<9;

    // Modifiers
    const OR_EQUAL_MODIFIER = 1<< 15;
    const CASE_INSENSITIVE_MODIFIER = 1<<16;
    const NOT_MODIFIER = 1<<17;
}
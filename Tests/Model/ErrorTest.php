<?php
/**
 * ErrorTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Server\Tests\Model
 * @author   openapi-generator contributors
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * Rosetta
 *
 * A Standard for Blockchain Interaction
 *
 * The version of the OpenAPI document: 1.3.1
 * 
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Please update the test case below to test the model.
 */

namespace OpenAPI\Server\Model;

/**
 * ErrorTest Class Doc Comment
 *
 * @category    Class */
// * @description Instead of utilizing HTTP status codes to describe node errors (which often do not have a good analog), rich errors are returned using this object.
/**
 * @package     OpenAPI\Server\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 */
class ErrorTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "Error"
     */
    public function testError()
    {
        $testError = new Error();
    }

    /**
     * Test attribute "code"
     */
    public function testPropertyCode()
    {
    }

    /**
     * Test attribute "message"
     */
    public function testPropertyMessage()
    {
    }

    /**
     * Test attribute "retriable"
     */
    public function testPropertyRetriable()
    {
    }
}
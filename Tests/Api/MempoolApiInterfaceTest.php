<?php
/**
 * MempoolApiInterfaceTest
 * PHP version 5
 *
 * @category Class
 * @package  melmccann\rosettaserverstubs\Tests\Api
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
 * Please update the test case below to test the endpoint.
 */

namespace melmccann\rosettaserverstubs\Tests\Api;

use melmccann\rosettaserverstubs\Configuration;
use melmccann\rosettaserverstubs\ApiClient;
use melmccann\rosettaserverstubs\ApiException;
use melmccann\rosettaserverstubs\ObjectSerializer;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * MempoolApiInterfaceTest Class Doc Comment
 *
 * @category Class
 * @package  melmccann\rosettaserverstubs\Tests\Api
 * @author   openapi-generator contributors
 * @link     https://github.com/openapitools/openapi-generator
 */
class MempoolApiInterfaceTest extends WebTestCase
{

    /**
     * Setup before running any test cases
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
     * Test case for mempool
     *
     * Get All Mempool Transactions.
     *
     */
    public function testMempool()
    {
        $client = static::createClient();

        $path = '/mempool';

        $crawler = $client->request('POST', $path);
    }

    /**
     * Test case for mempoolTransaction
     *
     * Get a Mempool Transaction.
     *
     */
    public function testMempoolTransaction()
    {
        $client = static::createClient();

        $path = '/mempool/transaction';

        $crawler = $client->request('POST', $path);
    }

    protected function genTestData($regexp)
    {
        $grammar  = new \Hoa\File\Read('hoa://Library/Regex/Grammar.pp');
        $compiler = \Hoa\Compiler\Llk\Llk::load($grammar);
        $ast      = $compiler->parse($regexp);
        $generator = new \Hoa\Regex\Visitor\Isotropic(new \Hoa\Math\Sampler\Random());

        return $generator->visit($ast); 
    }
}
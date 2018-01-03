<?php
/**
 * Created by PhpStorm.
 * User: alan
 * Date: 2018/1/3
 * Time: 下午11:07
 */

namespace TestsRecketMQ\Client\Producer;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;
use RocketMQ\Client\Producer\DefaultMQProducer;

class DefaultMQProducerTest extends TestCase
{
    public function testGetProducer()
    {
        $producer = new DefaultMQProducer();
        Assert::assertTrue($producer->start());
    }
}

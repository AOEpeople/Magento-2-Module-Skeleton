<?php

namespace Aoe\Skeleton\Test\Unit\Console;

use Faker\Factory;
use Faker\Generator;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;
use PHPUnit_Framework_TestCase;
use Aoe\Skeleton\Console\SkeletonCommand;

/**
 * Class SkeletonCommandTest
 *
 * @category Api
 * @package  Aoe\Skeleton\Test\Unit\Console
 * @author   AOE Magento Team <team-magento@aoe.com>
 * @license  none none
 * @link     www.aoe.com
 */
class SkeletonCommandTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SkeletonCommand System under Test
     */
    private $sut;

    /**
     * @var Generator
     */
    private $faker;

    /**
     * Setting up Test Case
     *
     * @return void
     */
    public function setUp()
    {
        /** @var Generator faker */
        $faker = new Factory();
        $this->faker = $faker::create(Factory::DEFAULT_LOCALE);

        $objectManager = new ObjectManager($this);
        $this->sut = $objectManager->getObject(SkeletonCommand::class);
    }

    /**
     * @test
     *
     * @return void
     */
    public function itShould()
    {
    }
}


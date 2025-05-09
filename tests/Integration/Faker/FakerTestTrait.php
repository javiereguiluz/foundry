<?php

declare(strict_types=1);

/*
 * This file is part of the zenstruck/foundry package.
 *
 * (c) Kevin Bond <kevinbond@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zenstruck\Foundry\Tests\Integration\Faker;

use PHPUnit\Framework\Attributes\AfterClass;
use PHPUnit\Framework\Attributes\BeforeClass;
use Zenstruck\Foundry\Configuration;

trait FakerTestTrait
{
    private static ?int $currentSeed = null;
    private static ?int $savedSeed = null;

    #[BeforeClass(10)]
    public static function __saveAndResetFakerSeed(): void
    {
        self::$savedSeed = Configuration::fakerSeed();

        self::$currentSeed = null;
        Configuration::resetFakerSeed();
    }

    #[AfterClass(-10)]
    public static function __restoreSeed(): void
    {
        Configuration::resetFakerSeed();
        Configuration::fakerSeed(self::$savedSeed);
    }
}

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

namespace Zenstruck\Foundry\Tests\Fixture\Entity\EdgeCases\InversedOneToOneWithNonNullableOwning;

use Doctrine\ORM\Mapping as ORM;

/**
 * @author Nicolas PHILIPPE <nikophil@gmail.com>
 */
#[ORM\Entity]
#[ORM\Table('inversed_one_to_one_with_non_nullable_owning_owning_side')]
class OwningSide
{
    #[ORM\Id]
    #[ORM\Column]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    public ?int $id = null;

    #[ORM\OneToOne(inversedBy: 'owningSide')]
    public ?InverseSide $inverseSide = null;
}

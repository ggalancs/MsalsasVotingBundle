<?php

namespace Msalsas\VotingBundle\Tests\Entity;

use Msalsas\VotingBundle\Entity\VotePositive;
use Msalsas\VotingBundle\Tests\Mock\UserMock;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

class VotePositiveTest extends TestCase
{
    public function testVotePositive()
    {
        $userMock = $this->getMockBuilder(UserMock::class)
            ->getMock();
        $votePositive = new VotePositive();
        $votePositive->setId(1);
        $votePositive->setReference(1);
        $votePositive->setUser($userMock);
        $votePositive->setUserIP('127.0.0.1');

        $this->assertSame(1, $votePositive->getId());
        $this->assertSame(1, $votePositive->getReference());
        $this->assertSame($userMock, $votePositive->getUser());
        $this->assertSame('127.0.0.1', $votePositive->getUserIP());
        $this->assertSame(true, $votePositive->isPositive());
    }
}
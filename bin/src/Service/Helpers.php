<?php

namespace App\Service;

use App\Entity\Users;
use Psr\Log\LoggerInterface;
use Symfony\Component\Security\Core\Security;

class Helpers
{
    private $langue;
    public function __construct(private LoggerInterface $logger, private Security $security) {
    }
    public function sayCc(): string {
        $this->logger->info('Je dis cc');
        return 'cc';
    }

    public function getUsers(): Users {
        if($this->security->isGranted('ROLE_ADMIN')) {
            $users = $this->security->getUsers();
            if ($users instanceof Users) {
                return $users;
            }
        }
    }
}
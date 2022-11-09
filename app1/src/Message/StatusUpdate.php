<?php
declare(strict_types=1);
namespace App\Message;

class StatusUpdate
{
    protected string $status;
    public function __construct(string $status){
        $this->status=$status;
    }

    public function getStatus(): string
    {
        return $this->status;
    }
}

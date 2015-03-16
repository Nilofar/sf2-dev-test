<?php

namespace Banana\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BananaUserBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'SonataUserBundle';
    }
}

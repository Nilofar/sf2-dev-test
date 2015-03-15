<?php

namespace Banana\UserBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController;

class UserAdminController extends CRUDController
{
    /**
     * {@inheritdoc}
     */
    protected $baseRoutePattern = 'utilisateurs';
}
<?php
namespace Banana\UserBundle\Form\Handler;

use Sonata\UserBundle\Form\Handler\ProfileFormHandler as BaseHandler;

class ProfileFormHandler extends BaseHandler
{
    protected $form;
    protected $request;
    protected $templating;

    public function __construct($request, $form, $templating)
    {
        $this->request = $request;
        $this->form = $form;
        $this->templating = $templating;
    }
}

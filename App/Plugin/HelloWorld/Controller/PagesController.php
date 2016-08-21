<?php
class PagesController extends HelloWorldAppController
{
    public  $useTable = false;
    public function index($name = null)
    {
        $this->set(compact('name'));
    }
}

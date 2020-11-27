<?php
include_once(__DIR__ . '/../MessageManagerInterface.php');
include_once('FbMessageManager.php');

class FbMessageManagerAdapter implements MessageManagerInterface
{
  // Your code here
    private FbMessageManager $fbMessageMessenger;

    public function __construct(FbMessageManager $fbMessageManager)
    {
        $this->fbMessageMessenger = $fbMessageManager;
    }

    public function printMessage($msg)
    {
        $this->fbMessageMessenger->printMessageFb($msg);

    }
}
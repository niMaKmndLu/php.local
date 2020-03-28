<?php

abstract class Gateway {
    protected $options;

    public function __construct()
    {
        $this->options = array(
            'mellat' => array(
              'merchant' => 'a76x9asv314vmb7%12ca',
              'username' => 's97433184',
              'password' => 'Nimanewton',
            ),
            'Saman' => array(
                'username' => 'Pashmam',
                'password' => '2delavar',
            ),
        );
    }

    abstract public function sendRequest();
    abstract public function verifyRequest();
}

class Mellat extends Gateway{

    public function __construct()
    {
        parent::__construct();
    }

    public function sendRequest()
    {
        return $this->options['mellat'];
    }

    public function verifyRequest()
    {
        // TODO: Implement verifyRequest() method.
    }
}

$gate = new Mellat();
var_dump($gate->sendRequest());


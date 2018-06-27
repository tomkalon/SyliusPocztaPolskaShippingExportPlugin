<?php

class addRozbieznoscDoZapowiedziFakturResponse
{

    /**
     * @var errorType $error
     */
    protected $error = null;

    /**
     * @param errorType $error
     */
    public function __construct($error)
    {
      $this->error = $error;
    }

    /**
     * @return errorType
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param errorType $error
     * @return addRozbieznoscDoZapowiedziFakturResponse
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

}

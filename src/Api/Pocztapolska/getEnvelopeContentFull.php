<?php

class getEnvelopeContentFull
{

    /**
     * @var int $idEnvelope
     */
    protected $idEnvelope = null;

    /**
     * @param int $idEnvelope
     */
    public function __construct($idEnvelope)
    {
      $this->idEnvelope = $idEnvelope;
    }

    /**
     * @return int
     */
    public function getIdEnvelope()
    {
      return $this->idEnvelope;
    }

    /**
     * @param int $idEnvelope
     * @return getEnvelopeContentFull
     */
    public function setIdEnvelope($idEnvelope)
    {
      $this->idEnvelope = $idEnvelope;
      return $this;
    }

}

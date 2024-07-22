<?php

namespace WildTuna\BoxberrySdk\Entity;

class NewCalculateParams
{
    private $senderCityId;

    private $recipientCityId;

    private $deliveryType;

    private $boxSizes;

    public function asArr()
    {
        $params['SenderCityId'] = $this->senderCityId;
        $params['RecipientCityId'] = $this->recipientCityId;
        $params['DeliveryType'] = $this->deliveryType;
        $params['BoxSizes'] = $this->boxSizes;

        return $params;
    }

    public function setSenderCityId(string $senderCityId)
    {
        $this->senderCityId = $senderCityId;
    }

    public function setRecipientCityId(string $recipientCityId)
    {
        $this->recipientCityId = $recipientCityId;
    }

    public function setDeliveryType(int $deliveryType)
    {
        $this->deliveryType = $deliveryType;
    }

    public function setBoxSizes(array $boxSizes)
    {
        $this->boxSizes = $boxSizes;
    }
}

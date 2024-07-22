<?php

namespace WildTuna\BoxberrySdk\Entity;

class NewTariffInfo
{
    private $priceService;

    private $totalPrice;

    private $priceBase;

    private $deliveryTypeId;

    private $deliveryPeriod;

    public function __construct(array $result)
    {
        $res = $result['DeliveryCosts'][0];

        $this->setPriceService($res['PriceService']);
        $this->setTotalPrice($res['TotalPrice']);
        $this->setPriceBase($res['PriceBase']);
        $this->setDeliveryTypeId($res['DeliveryTypeId']);
        $this->setDeliveryPeriod($res['DeliveryPeriod']);
    }

    public function setPriceService(int $priceService)
    {
        $this->priceService = $priceService;
    }

    public function setTotalPrice(int $totalPrice)
    {
        $this->totalPrice = $totalPrice;
    }

    public function setPriceBase(int $priceBase)
    {
        $this->priceBase = $priceBase;
    }

    public function setDeliveryTypeId(int $deliveryTypeId)
    {
        $this->deliveryTypeId = $deliveryTypeId;
    }

    public function setDeliveryPeriod(int $deliveryPeriod)
    {
        $this->deliveryPeriod = $deliveryPeriod;
    }

    public function getPriceService()
    {
        return $this->priceService;
    }

    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    public function getPriceBase()
    {
        return $this->priceBase;
    }

    public function getDeliveryTypeId()
    {
        return $this->deliveryTypeId;
    }

    public function getDeliveryPeriod()
    {
        return $this->deliveryPeriod;
    }
}

<?php
/**
 * Baggage Boarding cards interface
 *
 * @package     Boarding Cards
 * @author      Mohamed Ibrahim <m.ibrahim@integrateddev.com>
 * @version     v.1.0 (08/11/2017)
 * @copyright   Copyright (c) 2016, Integrated Development
 */

namespace BoardingCards\Contracts;

/**
 * Baggage Boarding cards for boarding cards that have gate number.
 *
 * Interface GateBoardingCards
 * @package BoardingCards\Contracts
 */
Interface BaggageBoardingCardAttributes {

    /**
     * Set Package Details
     *
     * @param $baggageDetails
     * @return mixed
     */
    public function setBaggageDetails($baggageDetails);

    /**
     * Must Return Counter number
     *
     * @return mixed
     */
    public function getBaggageDetails();
}
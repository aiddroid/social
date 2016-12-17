<?php

namespace Aiddroid\Social\Interfaces;

/**
 * Interface FactoryInterface
 * @package Aiddroid\Social\Interfaces
 */
interface FactoryInterface
{
    /**
     * Create driver instance by name
     * @param null $driverName
     * @return mixed
     */
    public function driver($driverName);
}
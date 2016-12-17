<?php

namespace Aiddroid\Social\Interfaces;

/**
 * Interface ProviderConfigInterface.
 */
interface ProviderConfigInterface
{
    /**
     * Get client id.
     *
     * @return mixed
     */
    public function getClientId();

    /**
     * Get client secret.
     *
     * @return mixed
     */
    public function getClientSecret();

    /**
     * get redirect url.
     *
     * @return mixed
     */
    public function getRedirectUrl();
}

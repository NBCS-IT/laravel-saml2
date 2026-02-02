<?php

namespace NBCSIT\Saml2\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Saml2Auth
 *
 * @method static \NBCSIT\Saml2\Models\Tenant|null getTenant()
 *
 * @package NBCSIT\Saml2\Facades
 */
class Auth extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'NBCSIT\Saml2\Auth';
    }
}
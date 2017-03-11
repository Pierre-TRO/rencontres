<?php

namespace PTRO\RencontresBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PTRORencontresBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}

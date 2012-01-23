<?php
namespace ezp\PubklicAPI\Values\User\Limitation;

use ezp\PubklicAPI\Values\User\Limitation;

class ParentContentTypeLimitation extends Limitation
{
    /**
     * (non-PHPdoc)
     * @see User/ezp\PubklicAPI\Values\User.Limitation::getIdentifier()
     */
    public function getIdentifier() {
        return Limitation::PARENTCONTENTTYPE;
    }
}



<?php
/**
 * File containing the CreatedPolicy ValueObjectVisitor class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\REST\Server\Output\ValueObjectVisitor;

use eZ\Publish\Core\REST\Common\Output\Generator;
use eZ\Publish\Core\REST\Common\Output\Visitor;

/**
 * CreatedPolicy value object visitor
 */
class CreatedPolicy extends Policy
{
    /**
     * Visit struct returned by controllers
     *
     * @param \eZ\Publish\Core\REST\Common\Output\Visitor $visitor
     * @param \eZ\Publish\Core\REST\Common\Output\Generator $generator
     * @param mixed $data
     */
    public function visit( Visitor $visitor, Generator $generator, $data )
    {
        parent::visit( $visitor, $generator, $data->policy );
        $visitor->setHeader(
            'Location',
            $this->urlHandler->generate(
                'policy',
                array(
                    'role' => $data->policy->roleId,
                    'policy' => $data->policy->id
                )
            )
        );
        $visitor->setStatus( 201 );
    }
}
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Validator;

trigger_error('Symfony\Component\Validator\PropertyMetadataContainerInterface is deprecated since version 2.5 and will be removed in 3.0. Use Symfony\Component\Validator\Mapping\ClassMetadataInterface instead.', E_USER_DEPRECATED);

/**
 * A container for {@link PropertyMetadataInterface} instances.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @deprecated since version 2.5, to be removed in Symfony 3.0.
 *             Use {@link Mapping\ClassMetadataInterface} instead.
 */
interface PropertyMetadataContainerInterface
{
    /**
     * Check if there's any metadata attached to the given named property.
     *
     * @param string $property The property name.
     *
     * @return bool
     */
    public function hasPropertyMetadata($property);

    /**
     * Returns all metadata instances for the given named property.
     *
     * If your implementation does not support properties, simply throw an
     * exception in this method (for example a <tt>BadMethodCallException</tt>).
     *
     * @param string $property The property name.
     *
     * @return PropertyMetadataInterface[] A list of metadata instances. Empty if
     *                                     no metadata exists for the property.
     */
    public function getPropertyMetadata($property);
}

<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Security;

use Symfony\Component\Security\Core\SecurityContextInterface;

/**
 * @deprecated since symfony 2.6, to be removed in symfony 3.0.
 *             Use {@link TokenStorageAware} or {@link AuthorizationCheckerAware} instead.
 */
abstract class SecurityContextAware implements SecurityContextAwareInterface
{
    /**
     * The security context.
     *
     * @var SecurityContextInterface
     */
    protected $securityContext;

    /**
     * {@inheritdoc}
     */
    public function setSecurityContext(SecurityContextInterface $securityContext)
    {
        $this->securityContext = $securityContext;
    }
}

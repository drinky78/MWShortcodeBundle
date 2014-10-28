<?php

namespace drinky78\Bundle\ShortcodeBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use drinky78\Bundle\ShortcodeBundle\DependencyInjection\Compiler\ShortcodePass;

/**
 * 
 *
 * @author Michel Weimerskirch
 */
class ShortcodeBundle extends Bundle
{

    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new ShortcodePass());
    }

}

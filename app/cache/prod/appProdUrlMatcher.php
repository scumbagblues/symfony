<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // acme_store_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_store_homepage')), array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::indexAction',));
        }

        // acme_store_product
        if (rtrim($pathinfo, '/') === '/product/create') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'acme_store_product');
            }

            return array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::createAction',  '_route' => 'acme_store_product',);
        }

        // hello
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<firstName>[^/]++)/(?P<lastName>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hello')), array (  '_controller' => 'Acme\\HelloBundle\\Controller\\HelloController::indexAction',  'color' => 'green',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

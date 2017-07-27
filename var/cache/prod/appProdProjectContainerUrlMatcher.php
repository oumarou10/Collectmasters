<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\HomepageController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/item')) {
            // item
            if ('/item' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ItemController::addAction',  '_route' => 'item',);
            }

            // items
            if ('/items' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ItemController::itemsAction',  '_route' => 'items',);
            }

            // oneItem
            if (preg_match('#^/item/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oneItem')), array (  '_controller' => 'AppBundle\\Controller\\ItemController::onItemAction',));
            }

            // removeItem
            if (0 === strpos($pathinfo, '/item/remove') && preg_match('#^/item/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeItem')), array (  '_controller' => 'AppBundle\\Controller\\ItemController::removeAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

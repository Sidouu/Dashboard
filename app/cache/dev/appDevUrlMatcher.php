<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // bo_back_office_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'bo_back_office_homepage');
                }

                return array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'bo_back_office_homepage',);
            }

            if (0 === strpos($pathinfo, '/admin/customer')) {
                // customer
                if (rtrim($pathinfo, '/') === '/admin/customer') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'customer');
                    }

                    return array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\CustomerController::indexAction',  '_route' => 'customer',);
                }

                // customer_show
                if (preg_match('#^/admin/customer/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer_show')), array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\CustomerController::showAction',));
                }

                // customer_new
                if ($pathinfo === '/admin/customer/new') {
                    return array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\CustomerController::newAction',  '_route' => 'customer_new',);
                }

                // customer_create
                if ($pathinfo === '/admin/customer/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_customer_create;
                    }

                    return array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\CustomerController::createAction',  '_route' => 'customer_create',);
                }
                not_customer_create:

                // customer_edit
                if (preg_match('#^/admin/customer/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer_edit')), array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\CustomerController::editAction',));
                }

                // customer_update
                if (preg_match('#^/admin/customer/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_customer_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer_update')), array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\CustomerController::updateAction',));
                }
                not_customer_update:

                // customer_delete
                if (preg_match('#^/admin/customer/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_customer_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer_delete')), array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\CustomerController::deleteAction',));
                }
                not_customer_delete:

                // customer_search
                if ($pathinfo === '/admin/customer/search') {
                    return array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\CustomerController::searchAction',  '_route' => 'customer_search',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/piano')) {
                // piano
                if (rtrim($pathinfo, '/') === '/admin/piano') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'piano');
                    }

                    return array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\PianoController::indexAction',  '_route' => 'piano',);
                }

                // piano_show
                if (preg_match('#^/admin/piano/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'piano_show')), array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\PianoController::showAction',));
                }

                // piano_new
                if ($pathinfo === '/admin/piano/new') {
                    return array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\PianoController::newAction',  '_route' => 'piano_new',);
                }

                // piano_create
                if ($pathinfo === '/admin/piano/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_piano_create;
                    }

                    return array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\PianoController::createAction',  '_route' => 'piano_create',);
                }
                not_piano_create:

                // piano_edit
                if (preg_match('#^/admin/piano/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'piano_edit')), array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\PianoController::editAction',));
                }

                // piano_update
                if (preg_match('#^/admin/piano/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_piano_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'piano_update')), array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\PianoController::updateAction',));
                }
                not_piano_update:

                // piano_delete
                if (preg_match('#^/admin/piano/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_piano_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'piano_delete')), array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\PianoController::deleteAction',));
                }
                not_piano_delete:

                // piano_search
                if ($pathinfo === '/admin/piano/search') {
                    return array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\PianoController::searchAction',  '_route' => 'piano_search',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/bill')) {
                // bill
                if (rtrim($pathinfo, '/') === '/admin/bill') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'bill');
                    }

                    return array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\BillController::indexAction',  '_route' => 'bill',);
                }

                // bill_show
                if (preg_match('#^/admin/bill/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bill_show')), array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\BillController::showAction',));
                }

                // bill_new
                if ($pathinfo === '/admin/bill/new') {
                    return array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\BillController::newAction',  '_route' => 'bill_new',);
                }

                // bill_create
                if ($pathinfo === '/admin/bill/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_bill_create;
                    }

                    return array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\BillController::createAction',  '_route' => 'bill_create',);
                }
                not_bill_create:

                // bill_edit
                if (preg_match('#^/admin/bill/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bill_edit')), array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\BillController::editAction',));
                }

                // bill_update
                if (preg_match('#^/admin/bill/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_bill_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bill_update')), array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\BillController::updateAction',));
                }
                not_bill_update:

                // bill_delete
                if (preg_match('#^/admin/bill/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_bill_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bill_delete')), array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\BillController::deleteAction',));
                }
                not_bill_delete:

                // bill_search
                if ($pathinfo === '/admin/bill/search') {
                    return array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\BillController::searchAction',  '_route' => 'bill_search',);
                }

                // bill_print
                if (preg_match('#^/admin/bill/(?P<id>[^/]++)/print$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bill_print')), array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\BillController::printAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/quote')) {
                // quote
                if (rtrim($pathinfo, '/') === '/admin/quote') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'quote');
                    }

                    return array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\QuoteController::indexAction',  '_route' => 'quote',);
                }

                // quote_show
                if (preg_match('#^/admin/quote/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quote_show')), array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\QuoteController::showAction',));
                }

                // quote_new
                if ($pathinfo === '/admin/quote/new') {
                    return array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\QuoteController::newAction',  '_route' => 'quote_new',);
                }

                // quote_create
                if ($pathinfo === '/admin/quote/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_quote_create;
                    }

                    return array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\QuoteController::createAction',  '_route' => 'quote_create',);
                }
                not_quote_create:

                // quote_edit
                if (preg_match('#^/admin/quote/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quote_edit')), array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\QuoteController::editAction',));
                }

                // quote_update
                if (preg_match('#^/admin/quote/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_quote_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quote_update')), array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\QuoteController::updateAction',));
                }
                not_quote_update:

                // quote_delete
                if (preg_match('#^/admin/quote/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_quote_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quote_delete')), array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\QuoteController::deleteAction',));
                }
                not_quote_delete:

                // quote_search
                if ($pathinfo === '/admin/quote/search') {
                    return array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\QuoteController::searchAction',  '_route' => 'quote_search',);
                }

                // quote_print
                if (preg_match('#^/admin/quote/(?P<id>[^/]++)/print$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quote_print')), array (  '_controller' => 'BO\\BackOfficeBundle\\Controller\\QuoteController::printAction',));
                }

            }

            // BOSecurityBundle_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'BOSecurityBundle_homepage');
                }

                return array (  '_controller' => 'BO\\SecurityBundle\\Controller\\SecurityController::loginAction',  '_route' => 'BOSecurityBundle_homepage',);
            }

            if (0 === strpos($pathinfo, '/admin/log')) {
                if (0 === strpos($pathinfo, '/admin/login')) {
                    // BOSecurityBundle_login
                    if ($pathinfo === '/admin/login') {
                        return array (  '_controller' => 'BO\\SecurityBundle\\Controller\\SecurityController::loginAction',  '_route' => 'BOSecurityBundle_login',);
                    }

                    // BOSecurityBundle_login_check
                    if ($pathinfo === '/admin/login_check') {
                        return array('_route' => 'BOSecurityBundle_login_check');
                    }

                }

                // BOSecurityBundle_logout
                if ($pathinfo === '/admin/logout') {
                    return array (  '_controller' => 'BO\\SecurityBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'BOSecurityBundle_logout',);
                }

            }

            // BOSecurityBundle_secured
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'BOSecurityBundle_secured');
                }

                return array (  '_controller' => 'BO\\SecurityBundle\\Controller\\DefaultController::indexAction',  '_route' => 'BOSecurityBundle_secured',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

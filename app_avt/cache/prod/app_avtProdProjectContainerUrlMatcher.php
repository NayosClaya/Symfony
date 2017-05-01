<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * app_avtProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class app_avtProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/categorie')) {
            // categorie
            if (rtrim($pathinfo, '/') === '/categorie') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'categorie');
                }

                return array (  '_controller' => 'IMIE\\IMIEBundle\\Controller\\CategorieController::indexAction',  '_route' => 'categorie',);
            }

            // categorie_show
            if (preg_match('#^/categorie/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_show')), array (  '_controller' => 'IMIE\\IMIEBundle\\Controller\\CategorieController::showAction',));
            }

            // categorie_new
            if ($pathinfo === '/categorie/new') {
                return array (  '_controller' => 'IMIE\\IMIEBundle\\Controller\\CategorieController::newAction',  '_route' => 'categorie_new',);
            }

            // categorie_create
            if ($pathinfo === '/categorie/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_categorie_create;
                }

                return array (  '_controller' => 'IMIE\\IMIEBundle\\Controller\\CategorieController::createAction',  '_route' => 'categorie_create',);
            }
            not_categorie_create:

            // categorie_edit
            if (preg_match('#^/categorie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_edit')), array (  '_controller' => 'IMIE\\IMIEBundle\\Controller\\CategorieController::editAction',));
            }

            // categorie_update
            if (preg_match('#^/categorie/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_categorie_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_update')), array (  '_controller' => 'IMIE\\IMIEBundle\\Controller\\CategorieController::updateAction',));
            }
            not_categorie_update:

            // categorie_delete
            if (preg_match('#^/categorie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_categorie_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_delete')), array (  '_controller' => 'IMIE\\IMIEBundle\\Controller\\CategorieController::deleteAction',));
            }
            not_categorie_delete:

        }

        if (0 === strpos($pathinfo, '/article')) {
            // article
            if (rtrim($pathinfo, '/') === '/article') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'article');
                }

                return array (  '_controller' => 'IMIE\\IMIEBundle\\Controller\\ArticleController::indexAction',  '_route' => 'article',);
            }

            // article_show
            if (preg_match('#^/article/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_show')), array (  '_controller' => 'IMIE\\IMIEBundle\\Controller\\ArticleController::showAction',));
            }

            // article_new
            if ($pathinfo === '/article/new') {
                return array (  '_controller' => 'IMIE\\IMIEBundle\\Controller\\ArticleController::newAction',  '_route' => 'article_new',);
            }

            // article_create
            if ($pathinfo === '/article/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_article_create;
                }

                return array (  '_controller' => 'IMIE\\IMIEBundle\\Controller\\ArticleController::createAction',  '_route' => 'article_create',);
            }
            not_article_create:

            // article_edit
            if (preg_match('#^/article/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_edit')), array (  '_controller' => 'IMIE\\IMIEBundle\\Controller\\ArticleController::editAction',));
            }

            // article_update
            if (preg_match('#^/article/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_article_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_update')), array (  '_controller' => 'IMIE\\IMIEBundle\\Controller\\ArticleController::updateAction',));
            }
            not_article_update:

            // article_delete
            if (preg_match('#^/article/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_article_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_delete')), array (  '_controller' => 'IMIE\\IMIEBundle\\Controller\\ArticleController::deleteAction',));
            }
            not_article_delete:

        }

        // imie_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'imie_homepage');
            }

            return array (  '_controller' => 'IMIE\\IMIEBundle\\Controller\\DefaultController::indexAction',  '_route' => 'imie_homepage',);
        }

        // imie_tableau
        if ($pathinfo === '/tableau') {
            return array (  '_controller' => 'IMIE\\IMIEBundle\\Controller\\DefaultController::tableauAction',  '_route' => 'imie_tableau',);
        }

        // imie_ajout_article
        if (0 === strpos($pathinfo, '/ajoutproduit') && preg_match('#^/ajoutproduit(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'imie_ajout_article')), array (  '_controller' => 'IMIE\\IMIEBundle\\Controller\\DefaultController::ajoutProduitAction',  'id' => 0,));
        }

        // imie_list_article
        if ($pathinfo === '/listart') {
            return array (  '_controller' => 'IMIE\\IMIEBundle\\Controller\\DefaultController::listartAction',  '_route' => 'imie_list_article',);
        }

        // imie_ajout_modif_article
        if (0 === strpos($pathinfo, '/ajoutmodif') && preg_match('#^/ajoutmodif(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'imie_ajout_modif_article')), array (  '_controller' => 'IMIE\\IMIEBundle\\Controller\\DefaultController::ajoutmodifAction',  'id' => 0,));
        }

        // imie_supp_article
        if (0 === strpos($pathinfo, '/suppart') && preg_match('#^/suppart(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'imie_supp_article')), array (  '_controller' => 'IMIE\\IMIEBundle\\Controller\\DefaultController::suppArtAction',  'id' => 0,));
        }

        if (0 === strpos($pathinfo, '/ajout')) {
            // imie_ajout_photo_identite
            if (0 === strpos($pathinfo, '/ajoutphoto') && preg_match('#^/ajoutphoto(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'imie_ajout_photo_identite')), array (  '_controller' => 'IMIE\\IMIEBundle\\Controller\\DefaultController::ajoutphotoAction',  'id' => 0,));
            }

            // imie_ajout_fournisseur
            if (0 === strpos($pathinfo, '/ajoutfrs') && preg_match('#^/ajoutfrs(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'imie_ajout_fournisseur')), array (  '_controller' => 'IMIE\\IMIEBundle\\Controller\\DefaultController::ajoutfournisseurAction',  'id' => 0,));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

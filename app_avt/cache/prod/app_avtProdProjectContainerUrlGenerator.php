<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * app_avtProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class app_avtProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'categorie' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IMIE\\IMIEBundle\\Controller\\CategorieController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/categorie/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IMIE\\IMIEBundle\\Controller\\CategorieController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IMIE\\IMIEBundle\\Controller\\CategorieController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/categorie/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IMIE\\IMIEBundle\\Controller\\CategorieController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/categorie/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IMIE\\IMIEBundle\\Controller\\CategorieController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IMIE\\IMIEBundle\\Controller\\CategorieController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IMIE\\IMIEBundle\\Controller\\CategorieController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IMIE\\IMIEBundle\\Controller\\ArticleController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/article/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IMIE\\IMIEBundle\\Controller\\ArticleController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/article',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IMIE\\IMIEBundle\\Controller\\ArticleController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/article/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IMIE\\IMIEBundle\\Controller\\ArticleController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/article/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IMIE\\IMIEBundle\\Controller\\ArticleController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/article',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IMIE\\IMIEBundle\\Controller\\ArticleController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/article',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IMIE\\IMIEBundle\\Controller\\ArticleController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/article',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'imie_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IMIE\\IMIEBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'imie_tableau' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IMIE\\IMIEBundle\\Controller\\DefaultController::tableauAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tableau',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'imie_ajout_article' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IMIE\\IMIEBundle\\Controller\\DefaultController::ajoutProduitAction',    'id' => 0,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ajoutproduit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'imie_list_article' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IMIE\\IMIEBundle\\Controller\\DefaultController::listartAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listart',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'imie_ajout_modif_article' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IMIE\\IMIEBundle\\Controller\\DefaultController::ajoutmodifAction',    'id' => 0,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ajoutmodif',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'imie_supp_article' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IMIE\\IMIEBundle\\Controller\\DefaultController::suppArtAction',    'id' => 0,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/suppart',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'imie_ajout_photo_identite' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IMIE\\IMIEBundle\\Controller\\DefaultController::ajoutphotoAction',    'id' => 0,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ajoutphoto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'imie_ajout_fournisseur' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IMIE\\IMIEBundle\\Controller\\DefaultController::ajoutfournisseurAction',    'id' => 0,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ajoutfrs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}

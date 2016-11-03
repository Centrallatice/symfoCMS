<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // module_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'module_default_index');
            }

            return array (  '_controller' => 'ModuleBundle\\Controller\\DefaultController::indexAction',  '_route' => 'module_default_index',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/module')) {
                // admin_module_index
                if (rtrim($pathinfo, '/') === '/admin/module') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_module_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_module_index');
                    }

                    return array (  '_controller' => 'ModuleBundle\\Controller\\ModuleController::indexAction',  '_route' => 'admin_module_index',);
                }
                not_admin_module_index:

                // admin_module_new
                if ($pathinfo === '/admin/module/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_module_new;
                    }

                    return array (  '_controller' => 'ModuleBundle\\Controller\\ModuleController::newAction',  '_route' => 'admin_module_new',);
                }
                not_admin_module_new:

                // admin_module_show
                if (preg_match('#^/admin/module/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_module_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_module_show')), array (  '_controller' => 'ModuleBundle\\Controller\\ModuleController::showAction',));
                }
                not_admin_module_show:

                // admin_module_edit
                if (preg_match('#^/admin/module/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_module_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_module_edit')), array (  '_controller' => 'ModuleBundle\\Controller\\ModuleController::editAction',));
                }
                not_admin_module_edit:

                // admin_module_delete
                if (preg_match('#^/admin/module/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_module_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_module_delete')), array (  '_controller' => 'ModuleBundle\\Controller\\ModuleController::deleteAction',));
                }
                not_admin_module_delete:

            }

            if (0 === strpos($pathinfo, '/admin/article')) {
                // admin_article_index
                if (rtrim($pathinfo, '/') === '/admin/article') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_article_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_article_index');
                    }

                    return array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::indexAction',  '_route' => 'admin_article_index',);
                }
                not_admin_article_index:

                // admin_article_new
                if ($pathinfo === '/admin/article/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_article_new;
                    }

                    return array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::newAction',  '_route' => 'admin_article_new',);
                }
                not_admin_article_new:

                // admin_article_show
                if (preg_match('#^/admin/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_article_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_article_show')), array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::showAction',));
                }
                not_admin_article_show:

                // admin_article_edit
                if (preg_match('#^/admin/article/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_article_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_article_edit')), array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::editAction',));
                }
                not_admin_article_edit:

                // admin_article_delete
                if (preg_match('#^/admin/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_article_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_article_delete')), array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::deleteAction',));
                }
                not_admin_article_delete:

                // article_ajax_delete
                if (0 === strpos($pathinfo, '/admin/article/Ajax') && preg_match('#^/admin/article/Ajax/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_article_ajax_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_ajax_delete')), array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::deleteAjaxAction',));
                }
                not_article_ajax_delete:

            }

            if (0 === strpos($pathinfo, '/admin/category')) {
                // admin_category_index
                if (rtrim($pathinfo, '/') === '/admin/category') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_category_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_category_index');
                    }

                    return array (  '_controller' => 'ArticleBundle\\Controller\\CategoryController::indexAction',  '_route' => 'admin_category_index',);
                }
                not_admin_category_index:

                // admin_category_new
                if ($pathinfo === '/admin/category/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_category_new;
                    }

                    return array (  '_controller' => 'ArticleBundle\\Controller\\CategoryController::newAction',  '_route' => 'admin_category_new',);
                }
                not_admin_category_new:

                // admin_category_show
                if (preg_match('#^/admin/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_category_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_show')), array (  '_controller' => 'ArticleBundle\\Controller\\CategoryController::showAction',));
                }
                not_admin_category_show:

                // admin_category_edit
                if (preg_match('#^/admin/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_category_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_edit')), array (  '_controller' => 'ArticleBundle\\Controller\\CategoryController::editAction',));
                }
                not_admin_category_edit:

                // admin_category_delete
                if (preg_match('#^/admin/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_category_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_delete')), array (  '_controller' => 'ArticleBundle\\Controller\\CategoryController::deleteAction',));
                }
                not_admin_category_delete:

            }

        }

        // article_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'article_default_index');
            }

            return array (  '_controller' => 'ArticleBundle\\Controller\\DefaultController::indexAction',  '_route' => 'article_default_index',);
        }

        if (0 === strpos($pathinfo, '/froalaeditor')) {
            // kms_froala_editor_upload_image
            if ($pathinfo === '/froalaeditor/upload_image') {
                return array (  '_controller' => 'KMS\\FroalaEditorBundle\\Controller\\MediaController::uploadImageAction',  '_route' => 'kms_froala_editor_upload_image',);
            }

            // kms_froala_editor_delete_image
            if ($pathinfo === '/froalaeditor/delete_image') {
                return array (  '_controller' => 'KMS\\FroalaEditorBundle\\Controller\\MediaController::deleteImageAction',  '_route' => 'kms_froala_editor_delete_image',);
            }

            // kms_froala_editor_load_images
            if ($pathinfo === '/froalaeditor/load_images') {
                return array (  '_controller' => 'KMS\\FroalaEditorBundle\\Controller\\MediaController::loadImagesAction',  '_route' => 'kms_froala_editor_load_images',);
            }

            // kms_froala_editor_upload_file
            if ($pathinfo === '/froalaeditor/upload_file') {
                return array (  '_controller' => 'KMS\\FroalaEditorBundle\\Controller\\MediaController::uploadFileAction',  '_route' => 'kms_froala_editor_upload_file',);
            }

        }

        if (0 === strpos($pathinfo, '/admin/page')) {
            if (0 === strpos($pathinfo, '/admin/page/col')) {
                // col_index
                if (rtrim($pathinfo, '/') === '/admin/page/col') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_col_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'col_index');
                    }

                    return array (  '_controller' => 'PageBundle\\Controller\\ColController::indexAction',  '_route' => 'col_index',);
                }
                not_col_index:

                // col_new
                if ($pathinfo === '/admin/page/col/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_col_new;
                    }

                    return array (  '_controller' => 'PageBundle\\Controller\\ColController::newAction',  '_route' => 'col_new',);
                }
                not_col_new:

                // col_show
                if (preg_match('#^/admin/page/col/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_col_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'col_show')), array (  '_controller' => 'PageBundle\\Controller\\ColController::showAction',));
                }
                not_col_show:

                // col_edit
                if (preg_match('#^/admin/page/col/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_col_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'col_edit')), array (  '_controller' => 'PageBundle\\Controller\\ColController::editAction',));
                }
                not_col_edit:

                // col_ajax_edit
                if (0 === strpos($pathinfo, '/admin/page/col/Ajax') && preg_match('#^/admin/page/col/Ajax/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_col_ajax_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'col_ajax_edit')), array (  '_controller' => 'PageBundle\\Controller\\ColController::ajaxEditAction',));
                }
                not_col_ajax_edit:

                // col_delete
                if (preg_match('#^/admin/page/col/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_col_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'col_delete')), array (  '_controller' => 'PageBundle\\Controller\\ColController::deleteAction',));
                }
                not_col_delete:

            }

            // page_default_index
            if (rtrim($pathinfo, '/') === '/admin/page') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'page_default_index');
                }

                return array (  '_controller' => 'PageBundle\\Controller\\DefaultController::indexAction',  '_route' => 'page_default_index',);
            }

            // page_list
            if ($pathinfo === '/admin/page/list') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_page_list;
                }

                return array (  '_controller' => 'PageBundle\\Controller\\PageController::indexAction',  '_route' => 'page_list',);
            }
            not_page_list:

            // page_new
            if ($pathinfo === '/admin/page/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_page_new;
                }

                return array (  '_controller' => 'PageBundle\\Controller\\PageController::newAction',  '_route' => 'page_new',);
            }
            not_page_new:

            // page_show
            if (preg_match('#^/admin/page/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_page_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_show')), array (  '_controller' => 'PageBundle\\Controller\\PageController::showAction',));
            }
            not_page_show:

            // page_edit
            if (preg_match('#^/admin/page/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_page_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_edit')), array (  '_controller' => 'PageBundle\\Controller\\PageController::editAction',));
            }
            not_page_edit:

            // page_delete
            if (preg_match('#^/admin/page/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_page_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_delete')), array (  '_controller' => 'PageBundle\\Controller\\PageController::deleteAction',));
            }
            not_page_delete:

            // page_ajax_delete
            if (0 === strpos($pathinfo, '/admin/page/Ajax') && preg_match('#^/admin/page/Ajax/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_page_ajax_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_ajax_delete')), array (  '_controller' => 'PageBundle\\Controller\\PageController::deleteAjaxAction',));
            }
            not_page_ajax_delete:

            if (0 === strpos($pathinfo, '/admin/page/row')) {
                // row_index
                if (rtrim($pathinfo, '/') === '/admin/page/row') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_row_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'row_index');
                    }

                    return array (  '_controller' => 'PageBundle\\Controller\\RowController::indexAction',  '_route' => 'row_index',);
                }
                not_row_index:

                // row_new
                if ($pathinfo === '/admin/page/row/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_row_new;
                    }

                    return array (  '_controller' => 'PageBundle\\Controller\\RowController::newAction',  '_route' => 'row_new',);
                }
                not_row_new:

                // row_show
                if (preg_match('#^/admin/page/row/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_row_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'row_show')), array (  '_controller' => 'PageBundle\\Controller\\RowController::showAction',));
                }
                not_row_show:

                // row_edit
                if (preg_match('#^/admin/page/row/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_row_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'row_edit')), array (  '_controller' => 'PageBundle\\Controller\\RowController::editAction',));
                }
                not_row_edit:

                // row_ajax_edit
                if (0 === strpos($pathinfo, '/admin/page/row/Ajax') && preg_match('#^/admin/page/row/Ajax/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_row_ajax_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'row_ajax_edit')), array (  '_controller' => 'PageBundle\\Controller\\RowController::editAjaxAction',));
                }
                not_row_ajax_edit:

                // row_delete
                if (preg_match('#^/admin/page/row/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_row_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'row_delete')), array (  '_controller' => 'PageBundle\\Controller\\RowController::deleteAction',));
                }
                not_row_delete:

                // row_ajax_delete
                if (0 === strpos($pathinfo, '/admin/page/row/Ajax') && preg_match('#^/admin/page/row/Ajax/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_row_ajax_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'row_ajax_delete')), array (  '_controller' => 'PageBundle\\Controller\\RowController::deleteAjaxAction',));
                }
                not_row_ajax_delete:

            }

        }

        // home_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home_default_index');
            }

            return array (  '_controller' => 'HomeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'home_default_index',);
        }

        // admin_default_index
        if (rtrim($pathinfo, '/') === '/admin') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_default_index');
            }

            return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_default_index',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // fos_user_security_check
            if ($pathinfo === '/login_check') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // fos_user_security_login
        if ($pathinfo === '/admin/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_method' => 'POST',  '_route' => 'fos_user_security_login',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

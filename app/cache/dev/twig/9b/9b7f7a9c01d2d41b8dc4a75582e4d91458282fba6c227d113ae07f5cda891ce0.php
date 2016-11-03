<?php

/* @AdminViews/Home\bottomStat.html.twig */
class __TwigTemplate_0de3a6c16db950d2a47d7792b4aa53c5ae12eba8679611448fa34554f2049f13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1cf98cd9bed82bfc6b703a0810a2aa9dff86814f886fb101495cb640b017599a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cf98cd9bed82bfc6b703a0810a2aa9dff86814f886fb101495cb640b017599a->enter($__internal_1cf98cd9bed82bfc6b703a0810a2aa9dff86814f886fb101495cb640b017599a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AdminViews/Home\\bottomStat.html.twig"));

        // line 1
        echo " <div class=\"row\">
    <div class=\"col-xl-4 col-lg-12\">
        <div class=\"card\">
            <div class=\"card-header card-default\">
                <i class=\"fa fa-long-arrow-right fa-fw\"></i> Donut Chart
            </div>
            <div class=\"card-block\">
                <div id=\"morris-donut-chart\"></div>
                <div class=\"text-xs-right\">
                    <a href=\"javascript:;\">View Details <i class=\"fa fa-arrow-circle-right\"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-xl-4 col-lg-12\">
        <div class=\"card card-default\">
            <div class=\"card-header card-default\">
                <i class=\"fa fa-clock-o fa-fw\"></i> Tasks Card
            </div>
            <div class=\"card-block\">
                <div class=\"list-group\">
                    <a href=\"javascript:;\" class=\"list-group-item\">
                        <span class=\"label label-pill label-default pull-xs-right\">just now</span>
                        <i class=\"fa fa-fw fa-calendar\"></i> Calendar updated
                    </a>
                    <a href=\"javascript:;\" class=\"list-group-item\">
                        <span class=\"label label-pill label-default pull-xs-right\">4 minutes ago</span>
                        <i class=\"fa fa-fw fa-comment\"></i> Commented on a post
                    </a>
                    <a href=\"javascript:;\" class=\"list-group-item\">
                        <span class=\"label label-pill label-default pull-xs-right\">23 minutes ago</span>
                        <i class=\"fa fa-fw fa-truck\"></i> Order 392 shipped
                    </a>
                    <a href=\"javascript:;\" class=\"list-group-item\">
                        <span class=\"label label-pill label-default pull-xs-right\">46 minutes ago</span>
                        <i class=\"fa fa-fw fa-money\"></i> Invoice 653 has been paid
                    </a>
                    <a href=\"javascript:;\" class=\"list-group-item\">
                        <span class=\"label label-pill label-default pull-xs-right\">1 hour ago</span>
                        <i class=\"fa fa-fw fa-user\"></i> A new user has been added
                    </a>
                    <a href=\"javascript:;\" class=\"list-group-item\">
                        <span class=\"label label-pill label-default pull-xs-right\">2 hours ago</span>
                        <i class=\"fa fa-fw fa-check\"></i> Completed task: \"pick up dry cleaning\"
                    </a>
                    <a href=\"javascript:;\" class=\"list-group-item\">
                        <span class=\"label label-pill label-default pull-xs-right\">yesterday</span>
                        <i class=\"fa fa-fw fa-globe\"></i> Saved the world
                    </a>
                    <a href=\"javascript:;\" class=\"list-group-item\">
                        <span class=\"label label-pill label-default pull-xs-right\">two days ago</span>
                        <i class=\"fa fa-fw fa-check\"></i> Completed task: \"fix error on sales page\"
                    </a>
                </div>
                <div class=\"text-xs-right\">
                    <a href=\"javascript:;\">View All Activity <i class=\"fa fa-arrow-circle-right\"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-xl-4 col-lg-12\">
        <div class=\"card card-default\">
            <div class=\"card-header card-default\">
                <i class=\"fa fa-money fa-fw\"></i> Transactions Card
            </div>
            <div class=\"card-block\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered table-hover table-striped\">
                        <thead>
                            <tr>
                                <th>Order #</th>
                                <th>Order Date</th>
                                <th>Order Time</th>
                                <th>Amount (USD)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>3326</td>
                                <td>10/21/2013</td>
                                <td>3:29 PM</td>
                                <td>\$321.33</td>
                            </tr>
                            <tr>
                                <td>3325</td>
                                <td>10/21/2013</td>
                                <td>3:20 PM</td>
                                <td>\$234.34</td>
                            </tr>
                            <tr>
                                <td>3324</td>
                                <td>10/21/2013</td>
                                <td>3:03 PM</td>
                                <td>\$724.17</td>
                            </tr>
                            <tr>
                                <td>3323</td>
                                <td>10/21/2013</td>
                                <td>3:00 PM</td>
                                <td>\$23.71</td>
                            </tr>
                            <tr>
                                <td>3322</td>
                                <td>10/21/2013</td>
                                <td>2:49 PM</td>
                                <td>\$8345.23</td>
                            </tr>
                            <tr>
                                <td>3321</td>
                                <td>10/21/2013</td>
                                <td>2:23 PM</td>
                                <td>\$245.12</td>
                            </tr>
                            <tr>
                                <td>3320</td>
                                <td>10/21/2013</td>
                                <td>2:15 PM</td>
                                <td>\$5663.54</td>
                            </tr>
                            <tr>
                                <td>3319</td>
                                <td>10/21/2013</td>
                                <td>2:13 PM</td>
                                <td>\$943.45</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class=\"text-xs-right\">
                    <a href=\"javascript:;\">View All Transactions <i class=\"fa fa-arrow-circle-right\"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_1cf98cd9bed82bfc6b703a0810a2aa9dff86814f886fb101495cb640b017599a->leave($__internal_1cf98cd9bed82bfc6b703a0810a2aa9dff86814f886fb101495cb640b017599a_prof);

    }

    public function getTemplateName()
    {
        return "@AdminViews/Home\\bottomStat.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" <div class=\"row\">
    <div class=\"col-xl-4 col-lg-12\">
        <div class=\"card\">
            <div class=\"card-header card-default\">
                <i class=\"fa fa-long-arrow-right fa-fw\"></i> Donut Chart
            </div>
            <div class=\"card-block\">
                <div id=\"morris-donut-chart\"></div>
                <div class=\"text-xs-right\">
                    <a href=\"javascript:;\">View Details <i class=\"fa fa-arrow-circle-right\"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-xl-4 col-lg-12\">
        <div class=\"card card-default\">
            <div class=\"card-header card-default\">
                <i class=\"fa fa-clock-o fa-fw\"></i> Tasks Card
            </div>
            <div class=\"card-block\">
                <div class=\"list-group\">
                    <a href=\"javascript:;\" class=\"list-group-item\">
                        <span class=\"label label-pill label-default pull-xs-right\">just now</span>
                        <i class=\"fa fa-fw fa-calendar\"></i> Calendar updated
                    </a>
                    <a href=\"javascript:;\" class=\"list-group-item\">
                        <span class=\"label label-pill label-default pull-xs-right\">4 minutes ago</span>
                        <i class=\"fa fa-fw fa-comment\"></i> Commented on a post
                    </a>
                    <a href=\"javascript:;\" class=\"list-group-item\">
                        <span class=\"label label-pill label-default pull-xs-right\">23 minutes ago</span>
                        <i class=\"fa fa-fw fa-truck\"></i> Order 392 shipped
                    </a>
                    <a href=\"javascript:;\" class=\"list-group-item\">
                        <span class=\"label label-pill label-default pull-xs-right\">46 minutes ago</span>
                        <i class=\"fa fa-fw fa-money\"></i> Invoice 653 has been paid
                    </a>
                    <a href=\"javascript:;\" class=\"list-group-item\">
                        <span class=\"label label-pill label-default pull-xs-right\">1 hour ago</span>
                        <i class=\"fa fa-fw fa-user\"></i> A new user has been added
                    </a>
                    <a href=\"javascript:;\" class=\"list-group-item\">
                        <span class=\"label label-pill label-default pull-xs-right\">2 hours ago</span>
                        <i class=\"fa fa-fw fa-check\"></i> Completed task: \"pick up dry cleaning\"
                    </a>
                    <a href=\"javascript:;\" class=\"list-group-item\">
                        <span class=\"label label-pill label-default pull-xs-right\">yesterday</span>
                        <i class=\"fa fa-fw fa-globe\"></i> Saved the world
                    </a>
                    <a href=\"javascript:;\" class=\"list-group-item\">
                        <span class=\"label label-pill label-default pull-xs-right\">two days ago</span>
                        <i class=\"fa fa-fw fa-check\"></i> Completed task: \"fix error on sales page\"
                    </a>
                </div>
                <div class=\"text-xs-right\">
                    <a href=\"javascript:;\">View All Activity <i class=\"fa fa-arrow-circle-right\"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-xl-4 col-lg-12\">
        <div class=\"card card-default\">
            <div class=\"card-header card-default\">
                <i class=\"fa fa-money fa-fw\"></i> Transactions Card
            </div>
            <div class=\"card-block\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered table-hover table-striped\">
                        <thead>
                            <tr>
                                <th>Order #</th>
                                <th>Order Date</th>
                                <th>Order Time</th>
                                <th>Amount (USD)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>3326</td>
                                <td>10/21/2013</td>
                                <td>3:29 PM</td>
                                <td>\$321.33</td>
                            </tr>
                            <tr>
                                <td>3325</td>
                                <td>10/21/2013</td>
                                <td>3:20 PM</td>
                                <td>\$234.34</td>
                            </tr>
                            <tr>
                                <td>3324</td>
                                <td>10/21/2013</td>
                                <td>3:03 PM</td>
                                <td>\$724.17</td>
                            </tr>
                            <tr>
                                <td>3323</td>
                                <td>10/21/2013</td>
                                <td>3:00 PM</td>
                                <td>\$23.71</td>
                            </tr>
                            <tr>
                                <td>3322</td>
                                <td>10/21/2013</td>
                                <td>2:49 PM</td>
                                <td>\$8345.23</td>
                            </tr>
                            <tr>
                                <td>3321</td>
                                <td>10/21/2013</td>
                                <td>2:23 PM</td>
                                <td>\$245.12</td>
                            </tr>
                            <tr>
                                <td>3320</td>
                                <td>10/21/2013</td>
                                <td>2:15 PM</td>
                                <td>\$5663.54</td>
                            </tr>
                            <tr>
                                <td>3319</td>
                                <td>10/21/2013</td>
                                <td>2:13 PM</td>
                                <td>\$943.45</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class=\"text-xs-right\">
                    <a href=\"javascript:;\">View All Transactions <i class=\"fa fa-arrow-circle-right\"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>", "@AdminViews/Home\\bottomStat.html.twig", "C:\\Users\\sylvain.dupont\\Desktop\\Projets Web\\symfoCMS\\src\\AdminBundle\\Resources\\views\\Home\\bottomStat.html.twig");
    }
}

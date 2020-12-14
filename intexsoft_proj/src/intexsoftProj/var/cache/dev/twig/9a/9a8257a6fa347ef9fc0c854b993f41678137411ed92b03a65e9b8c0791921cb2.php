<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* main/index.html.twig */
class __TwigTemplate_692bab99ad83a030a2766207360286488927d7498c9cec860ef3b9884fbcbf58 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Main";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link rel=\"stylesheet\" href=\"/css/css.css\">";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header class=\"flex\">
        <nav class=\"flex\">
            <div class=\"logo\"><img src=\"/img/logo_transparent.png\" alt=\"\"></div>
            <div class=\"header-box flex\">
                <p><a href=\"#\">О нас</a></p>
                <p><a href=\"#\">Контакты</a></p>
                ";
        // line 13
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 14
            echo "                    <p><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Выход</a></p>
                ";
        } else {
            // line 16
            echo "                    <p><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Вход</a></p>
                    <p><a href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Регистрация</a></p>
                ";
        }
        // line 20
        echo "            </div>
            <div class=\"hamburger\">
                <a href=\"#\"><span></span></a>
            </div>
        </nav>
        <div class=\"herder-title\">
            <h1>Доверьте работу профессионалам</h1>
            <h2>Мы профессионально разрабатывем ПО уже на протяжении 7 лет, о нас ходят только положительные слухи. Все клиенты довольны проделанной работой, пополняйте их ряды!</h2>
        </div>
    </header>
    <main class=\"wrapper\">
        <section class=\"services flex\">
            <h3>Наши услуги</h3>
            <div class=\"block-1 block\">
                <h4>Сайты под ключ</h4>
                <p>Мы знаем потребности наших клиентов, которые хотят заказать адаптивный сайт. Когда вы обратитесь к нам, то получите именно тот инструмент, который максимально будет соответствовать специфике вашего бизнеса. Мы готовы выполнить качественно любой проект, не важно это будет landing page или большой интернет магазин.</p>
            </div>
            <div class=\"block-2 block\">
                <h4>Мобильные приложения</h4>
                <p>Опыт наших программистов позволяет осуществлять разработку мобильных приложений любой сложности. Приложения позволяют повысить эффективность интернет-магазина и работать как самостоятельный канал продаж.</p>
            </div>
            <div class=\"block-3 block\">
                <h4>ПО</h4>
                <p>В этой области наша компания решает задачи любой сложности. Наши специалисты проводят экспертизу жизнеспособности и эффективности будущего программного продукта, и лишь потом приступают к разработке!</p>
            </div>
        </section>
        <section class=\"projects\">
            <h3>Наши проекты</h3>
            <h4>Если вы не уверены, стоит ли заказывать именно у нас, то посмотрите наши разработки, убедитесь, что только мы вам подходим, для всех ваших запросов!</h4>
            <div class=\"img-block flex\">
                <div class=\"block block-1\"><img src=\"/img/work_file1.jpg\" alt=\"\"></div>
                <div class=\"block block-2\"><img src=\"/img/work_file2.jpg\" alt=\"\"></div>
                <div class=\"block block-3\"><img src=\"/img/work_file3.png\" alt=\"\"></div>
            </div>
        </section>
        <section class=\"developers flex\">
            <h3>Наши разработчики</h3>
            <h4>Откройте для себя нашу кухню. Узнайте лучше наших разработчиков, просмотрите их портфолио.</h4>
            <input type=\"submit\" value=\"Просмотр\">
        </section>
        <section class=\"form-send-info\">
            <h3>В один клик</h3>
            <h4>Вы можете оставить заявку, заполнив форму ниже. На почту придёт подтверждение . Что может  быть проще?</h4>
            <form class=\"form\" method=\"post\" action=\"\">
                <select class=\"dropdown\">
                    <option value=\"\">Категория заявки</option>
                </select>
                <textarea placeholder=\"Ваш вопрос\" class=\"text-area\"></textarea>
                <div>
                    <input type=\"email\" class=\"text\" placeholder=\"email\">
                    <input type=\"text\" class=\"text\" placeholder=\"имя\">
                    <input type=\"submit\" value=\"Отправить\" class=\"send\">
                </div>
            </form>
        </section>
        <section class=\"partners\">
            <h3>Наши партнёры</h3>
            <div class=\"flex\">
                <div class=\"box\"><a href=\"#\"><img src=\"/img/org1.jpg\" alt=\"\"></a></div>
                <div class=\"box\"><a href=\"#\"><img src=\"/img/org2.jpg\" alt=\"\"></a></div>
                <div class=\"box\"><a href=\"#\"><img src=\"/img/org3.png\" alt=\"\"></a></div>
                <div class=\"box\"><a href=\"#\"><img src=\"/img/org4.png\" alt=\"\"></a></div>
                <div class=\"box\"><a href=\"#\"><img src=\"/img/org5.gif\" alt=\"\"></a></div>
                <div class=\"box\"><a href=\"#\"><img src=\"/img/org6.jpg\" alt=\"\"></a></div>
                <div class=\"box\"><a href=\"#\"><img src=\"/img/org7.png\" alt=\"\"></a></div>
                <div class=\"box\"><a href=\"#\"><img src=\"/img/org8.png\" alt=\"\"></a></div>
            </div>
        </section>
    </main>
    <footer class=\"wrapper flex\">
        <div class=\"flex footer-nav\">
            <p><a href=\"#\">О нас</a></p>
            <p><a href=\"#\">Контакты</a></p>
            <p><a href=\"#\">Информация</a></p>
        </div>
        <div class=\"flex footer-links\">
            <a href=\"#\"><img src=\"/img/vk.ico\" alt=\"\"></a>
            <a href=\"#\"><img src=\"/img/inst.ico\" alt=\"\"></a>
            <a href=\"#\"><img src=\"/img/twitter.ico\" alt=\"\"></a>
        </div>
        <h5>Ⓒ ООО Imedia</h5>
    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 20,  129 => 17,  124 => 16,  118 => 14,  116 => 13,  108 => 7,  98 => 6,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Main{% endblock %}
{% block stylesheets %}<link rel=\"stylesheet\" href=\"/css/css.css\">{% endblock %}

{% block body %}
    <header class=\"flex\">
        <nav class=\"flex\">
            <div class=\"logo\"><img src=\"/img/logo_transparent.png\" alt=\"\"></div>
            <div class=\"header-box flex\">
                <p><a href=\"#\">О нас</a></p>
                <p><a href=\"#\">Контакты</a></p>
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    <p><a href=\"{{ path('app_logout') }}\">Выход</a></p>
                {% else %}
                    <p><a href=\"{{ path('app_login') }}\">Вход</a></p>
                    <p><a href=\"{{ path('app_register') }}\">Регистрация</a></p>
                {% endif %}
{#                {% endblock %}#}
            </div>
            <div class=\"hamburger\">
                <a href=\"#\"><span></span></a>
            </div>
        </nav>
        <div class=\"herder-title\">
            <h1>Доверьте работу профессионалам</h1>
            <h2>Мы профессионально разрабатывем ПО уже на протяжении 7 лет, о нас ходят только положительные слухи. Все клиенты довольны проделанной работой, пополняйте их ряды!</h2>
        </div>
    </header>
    <main class=\"wrapper\">
        <section class=\"services flex\">
            <h3>Наши услуги</h3>
            <div class=\"block-1 block\">
                <h4>Сайты под ключ</h4>
                <p>Мы знаем потребности наших клиентов, которые хотят заказать адаптивный сайт. Когда вы обратитесь к нам, то получите именно тот инструмент, который максимально будет соответствовать специфике вашего бизнеса. Мы готовы выполнить качественно любой проект, не важно это будет landing page или большой интернет магазин.</p>
            </div>
            <div class=\"block-2 block\">
                <h4>Мобильные приложения</h4>
                <p>Опыт наших программистов позволяет осуществлять разработку мобильных приложений любой сложности. Приложения позволяют повысить эффективность интернет-магазина и работать как самостоятельный канал продаж.</p>
            </div>
            <div class=\"block-3 block\">
                <h4>ПО</h4>
                <p>В этой области наша компания решает задачи любой сложности. Наши специалисты проводят экспертизу жизнеспособности и эффективности будущего программного продукта, и лишь потом приступают к разработке!</p>
            </div>
        </section>
        <section class=\"projects\">
            <h3>Наши проекты</h3>
            <h4>Если вы не уверены, стоит ли заказывать именно у нас, то посмотрите наши разработки, убедитесь, что только мы вам подходим, для всех ваших запросов!</h4>
            <div class=\"img-block flex\">
                <div class=\"block block-1\"><img src=\"/img/work_file1.jpg\" alt=\"\"></div>
                <div class=\"block block-2\"><img src=\"/img/work_file2.jpg\" alt=\"\"></div>
                <div class=\"block block-3\"><img src=\"/img/work_file3.png\" alt=\"\"></div>
            </div>
        </section>
        <section class=\"developers flex\">
            <h3>Наши разработчики</h3>
            <h4>Откройте для себя нашу кухню. Узнайте лучше наших разработчиков, просмотрите их портфолио.</h4>
            <input type=\"submit\" value=\"Просмотр\">
        </section>
        <section class=\"form-send-info\">
            <h3>В один клик</h3>
            <h4>Вы можете оставить заявку, заполнив форму ниже. На почту придёт подтверждение . Что может  быть проще?</h4>
            <form class=\"form\" method=\"post\" action=\"\">
                <select class=\"dropdown\">
                    <option value=\"\">Категория заявки</option>
                </select>
                <textarea placeholder=\"Ваш вопрос\" class=\"text-area\"></textarea>
                <div>
                    <input type=\"email\" class=\"text\" placeholder=\"email\">
                    <input type=\"text\" class=\"text\" placeholder=\"имя\">
                    <input type=\"submit\" value=\"Отправить\" class=\"send\">
                </div>
            </form>
        </section>
        <section class=\"partners\">
            <h3>Наши партнёры</h3>
            <div class=\"flex\">
                <div class=\"box\"><a href=\"#\"><img src=\"/img/org1.jpg\" alt=\"\"></a></div>
                <div class=\"box\"><a href=\"#\"><img src=\"/img/org2.jpg\" alt=\"\"></a></div>
                <div class=\"box\"><a href=\"#\"><img src=\"/img/org3.png\" alt=\"\"></a></div>
                <div class=\"box\"><a href=\"#\"><img src=\"/img/org4.png\" alt=\"\"></a></div>
                <div class=\"box\"><a href=\"#\"><img src=\"/img/org5.gif\" alt=\"\"></a></div>
                <div class=\"box\"><a href=\"#\"><img src=\"/img/org6.jpg\" alt=\"\"></a></div>
                <div class=\"box\"><a href=\"#\"><img src=\"/img/org7.png\" alt=\"\"></a></div>
                <div class=\"box\"><a href=\"#\"><img src=\"/img/org8.png\" alt=\"\"></a></div>
            </div>
        </section>
    </main>
    <footer class=\"wrapper flex\">
        <div class=\"flex footer-nav\">
            <p><a href=\"#\">О нас</a></p>
            <p><a href=\"#\">Контакты</a></p>
            <p><a href=\"#\">Информация</a></p>
        </div>
        <div class=\"flex footer-links\">
            <a href=\"#\"><img src=\"/img/vk.ico\" alt=\"\"></a>
            <a href=\"#\"><img src=\"/img/inst.ico\" alt=\"\"></a>
            <a href=\"#\"><img src=\"/img/twitter.ico\" alt=\"\"></a>
        </div>
        <h5>Ⓒ ООО Imedia</h5>
    </footer>
{% endblock %}
", "main/index.html.twig", "/var/www/html/templates/main/index.html.twig");
    }
}

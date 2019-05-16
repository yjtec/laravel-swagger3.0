<?php
namespace Swagger;

use Illuminate\Support\ServiceProvider;

class SwaggerServiceProvider extends ServiceProvider
{
    /**
     * 是否延时加载提供器。
     *
     * @var bool
     */
    protected $defer = true;
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'Swagger'); // 视图目录指定
        //$this->setupRoutes($this->app->router);
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->publishes([
            __DIR__ . '/config/swagger.php' => config_path('swagger.php'),
            __DIR__ . '/assets/'            => public_path('swagger-ui/'),
            __DIR__ . '/Api.php'            => app_path('Http/Controllers/Api.php'),
            __DIR__ . '/swagger_html.php'   => public_path('swagger.php'),
        ]);
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('swagger', function ($app) {
            return new Swagger($app['config']);
        });
    }
    /**
     * 获取提供器提供的服务。
     *
     * @return array
     */
    public function provides()
    {
        return ['swagger'];
    }
}

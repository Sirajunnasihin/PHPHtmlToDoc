<?php namespace Sirajunnasihin\PHPHtmlToDoc;

use Illuminate\Support\ServiceProvider;

class PHPHtmlToDocServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('phphtmltodoc', function() {
            return new PHPHtmlToDoc;
        });

        $this->app->booting(function(){
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('PHPHtmlToDoc', 'Sirajunnasihin\PHPHtmlToDoc\Facades\PHPHtmlToDoc');
        });
    }

    public function provides()
    {
        return array('PHPHtmlToDoc');
    }

    public function boot()
    {
        //
    }


}

<?php
namespace Saiyedy\Demotwo;
use Illuminate\Support\ServiceProvider;

class DemotwoServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
    public function register()
    {
        # code...
    }
}
?>
<?php

namespace Borealis;

use Illuminate\Support\ServiceProvider;
use Borealis\Console\InstallCommand;

class BorealisServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            InstallCommand::class,
        ]);
    }

    public function boot()
    {
        // Aquí puedes agregar cualquier lógica de instalación o publicación de archivos
    }
}

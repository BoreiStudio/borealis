<?php

namespace Borealis\Console;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    protected $signature = 'borealis:install';
    protected $description = 'Instala las dependencias necesarias de Borealis';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info('Instalando dependencias de Borealis...');

        // Agregar aquí cualquier lógica para instalar dependencias
        $this->call('composer require spatie/laravel-permission');
        $this->call('composer require tymon/jwt-auth');

        $this->info('Dependencias instaladas con éxito.');
    }
}

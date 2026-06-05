<?php

namespace FacturaScripts\Plugins\FlexyTheme\Controller;

use FacturaScripts\Core\Controller\AdminPlugins;

class FlexyAdminPlugins extends AdminPlugins
{
    public function getPageData(): array
    {
        $data = parent::getPageData();
        $data['menu'] = 'admin';
        $data['title'] = 'Flexy Plugins';
        $data['icon'] = 'fa-solid fa-plug';
        return $data;
    }
}

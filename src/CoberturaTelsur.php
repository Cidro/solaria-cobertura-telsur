<?php
namespace Asimov\Solaria\Modules\CoberturaTelsur;

use Solaria\Modules\SolariaModule;

class CoberturaTelsur implements SolariaModule {

    protected $name = 'CoberturaTelsur';

    protected $menu_name = 'Cobertura Telsur';

    public function getName() {
        return $this->name;
    }

    public function getMenuName() {
        return $this->menu_name;
    }

    public function getBackendMenuUrl() {
        return url('backend/modules/cobertura-telsur');
    }

    public function getBackendStyles() {
        return [asset('modules/cobertura-telsur/css/cobertura-telsur-module.css')];
    }

    public function getFrontendStyles() {
        // TODO: Implement getFrontendStyles() method.
    }

    public function getBackendScripts() {
        return [asset('modules/cobertura-telsur/js/cobertura-telsur-module.js')];
    }

    public function getFrontendScripts() {
        // TODO: Implement getFrontendScripts() method.
    }

    public function getCustomFields() {
        // TODO: Implement getCustomFields() method.
    }

    public function render(){
        return 'cobertura-telsur';
    }
}
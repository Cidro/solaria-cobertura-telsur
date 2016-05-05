<?php

namespace Asimov\Solaria\Modules\CoberturaTelsur\Http\Controllers;

use Illuminate\Http\Request;
use Solaria\Http\Controllers\Backend\BackendController;
use Asimov\Solaria\Modules\CoberturaTelsur\Models\Config;

class CoberturaController extends BackendController {

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex(){
        $this->authorize('module_cobertura_telsur_manage_config');

        view()->share([
            'config' => Config::firstOrNew(['site_id' => $this->site->id])
        ]);

        $data['content'] = view('modulecoberturatelsur::backend.index');
        return view($this->layout, $data);
    }

}
<?php
namespace Asimov\Solaria\Modules\CoberturaTelsur\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model {

    protected $table = 'module_cobertura_telsur_config';

    /**
     * @param $value
     */
    public function setDataAttribute($value){
        $this->attributes['data'] = json_encode($value, JSON_UNESCAPED_UNICODE);
    }

    /**
     * @param $value
     * @return mixed
     */
    public function getDataAttribute($value){
        return json_decode($value);
    }

}
<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

/**
 * Class Produto.
 *
 * @package namespace App\Entities;
 */
class Produto extends Model implements Transformable
{
    use TransformableTrait;
    use SoftDeletes;
    use Notifiable;

    public $timestamps = true;
    protected $table = 'produtos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nome', 'breve_descricao', 'valor', 'descricao'];

    

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Task extends Model
{
    use  HasFactory;



    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    // protected $guarded = [
    //     'user_id',

    // ];

    protected $fillable = [
        'user_id',

        'task_name',
        'task_date',
        'task_info',
        'updated_at'



    ];


    public function user()
    {
        return $this -> belongsTo(User::class);
    }

    protected static function boot()
    {
        parent::boot();

        // 保存時user_idをログインユーザーに設定
        self::saving(function($stock) {
            $stock->user_id = \Auth::id();
        });

    }
    // $table->id();

    // $table->foreignId('user_id')->constrained;
    // $table->string('task_name');
    // $table->date('date')->default(NULL)->change();
    // $table->text('task_info')->nullable(true)->change();
    // $table->timestamps();

    // /**
    //  * The attributes that should be hidden for serialization.
    //  *
    //  * @var array<int, string>
    //  */
    // protected $hidden = [

    // ];

    // /**
    //  * The attributes that should be cast.
    //  *
    //  * @var array<string, string>
    //  */
    // protected $casts = [
    // ];
}

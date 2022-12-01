<?php

namespace App\Http\Requests;

use App\Models\User;
use App\Models\Task;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TaskUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user_id' ,

            'task_name' => ['string', 'max:255'],
            'task_date' => ['date'],
            'task_info' => ['string', 'nullable'],
            'updated_at'=> ['timestump'],

        ];
    }
}

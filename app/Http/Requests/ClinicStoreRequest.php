<?php
/**
 * @package    Requests
 * @author     Tiago Teixeira de Sousa <tiagoteixeira2214@gmail.com>
 * @date       25/07/2024 01:41:43
 */

declare(strict_types=1);

namespace App\Http\Requests;

use App\Models\Bank;
use App\Rules\ClinicRule;
use App\Rules\ProfileUserRule;
use Illuminate\Foundation\Http\FormRequest;

class ClinicStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        #return $this->user()->can('create', Clinic::class);
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        #return ClinicRule::rules();
        return ProfileUserRule::rules_clinic();
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {

        return ClinicRule::messages();
    }
}

<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\User;
use Illuminate\Support\Facades\DB;
use Hash;
class checkPass implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //
        $user = User::all();
        foreach ($user as  $ds) {
            if(Hash::check($value,$ds->password)){
                return true;
                break;
            }
        }
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Mật khẩu cũ không đúng';
    }
}

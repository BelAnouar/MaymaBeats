<?php


declare(strict_types=1);


namespace App\Services;


use Framework\Rules\RequiredRule as RulesRequiredRule;
use Framework\Validator;
use Framework\Rules\EmailRule;
use Framework\Rules\MinRule;

class ValidatorService
{
    private Validator $validator;


    public function __construct()
    {
        $this->validator = new Validator();
        $this->validator->add("required", new RulesRequiredRule());
        $this->validator->add("email", new EmailRule());
        $this->validator->add("min", new MinRule());
    }

    public  function validateRegister(array $formData)
    {
    }
}

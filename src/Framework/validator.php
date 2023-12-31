<?php



declare(strict_types=1);

namespace Framework;

use Framework\Contracts\RuleInterface;
use Framework\Exceptions\validatorExceptions;

class Validator
{
    private  array  $rules = [];
    public function add(string $alias, RuleInterface $rule)
    {
        $this->rules[$alias] = $rule;
    }
    public  function validate(array $formData, array $fields)
    {
        $errrors = [];
        foreach ($fields as $fieldsName => $rules) {
            foreach ($rules as $rule) {
                $ruleParams = [];
                if (str_contains($rule, ':')) {
                    [$rule, $ruleParams] =    explode(":", $rule);
                    $ruleParams = explode(",", $ruleParams);
                }
                $ruleValidator = $this->rules[$rule];
                if ($ruleValidator->validate($formData, $fieldsName, $ruleParams)) {
                    continue;
                }
                $errrors[$fieldsName][] = $ruleValidator->getMessage(
                    $formData,
                    $fieldsName,
                    $ruleParams
                );
            }
        }
        if (count($errrors)) {
            throw new validatorExceptions($errrors);
        }
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 15/05/18
 * Time: 13:26
 */

namespace App\Validator;


use Zend\Validator\AbstractValidator;

class CodeValidator extends AbstractValidator
{
    public function isValid($value)
    {   try{

            $game = $value["game"];
            $code = $value["player"]->file;
            $type = $value["player"]->getClientMediaType();
            $result = $game::isValid($code);
            if($result == false)
                return false;
            if($type == "text/x-lua")
                return true;
            else
                return false;

        }catch (\Exception $e){
            return false;
        }

    }
}
<?php

namespace yii\base {

    class BaseObject
    {
        function __construct($config)
        {
        }
    }

    class Model
    {
        function __construct($config)
        {
        }

        public function rules() {

        }
    }
}

namespace yii\validators {
    class Validator
    {
    }

    class TestValidator extends Validator
    {
        public $param1;
        public $param2;
        public $param3;
        public $param4;
        public $param5;
    }
}

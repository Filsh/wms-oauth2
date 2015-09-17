<?php

namespace common\base\rule;

use common\base\Rule;

class DummyRule extends Rule
{
    public function isValid()
    {
        return true;
    }
}
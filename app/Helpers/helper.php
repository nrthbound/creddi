<?php

    
    function is_active($path, $active = 'is-active')
    {
        return \Request::is($path) ? $active : '';
    }
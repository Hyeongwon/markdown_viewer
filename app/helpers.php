<?php
/**
 * Created by PhpStorm.
 * User: byunhyeongwon
 * Date: 2018. 4. 3.
 * Time: PM 3:54
 */

if (! function_exists('markdown')) {

    function markdown($text = null) {

        return app(ParsedownExtra::class) -> text($text);
    }
}
<?php
class FiltersHelper{

    public function filter_post_money($alg){
        $valid = filter_input(INPUT_POST, $alg);
        $valid = str_replace('.', '',$valid);
        $valid = str_replace(',', '.',$valid);
        $valid = filter_var($valid, FILTER_VALIDATE_FLOAT);

        return $valid;
    }
}
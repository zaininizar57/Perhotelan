<?php 

    function validate($data){
        $errors = [];
        foreach($data as $key => $dt){
            if ($data[$key] == null || $data[$key] == "") {
                $errors[] = $key . ' tidak boleh kosong';
            }else {
                continue;
            }
        }
        return $errors;
    }

?>
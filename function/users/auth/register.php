<?php 

    function register($data)
    {
        global $conn;

        $nama_lengkap = $data['nama_lengkap'];
        $email = $data['email'];
        $password = $data['password'];
        $alamat = $data['alamat'];

        $sql = "INSERT INTO users (username, email, password, alamat) 
        VALUES(
                '" . $nama_lengkap . "', 
                '" . $email . "', 
                '" . $password . "', 
                '" . $alamat . "'
            )";

        if($conn->query($sql)){
            return "Berhasil Mendaftar";
        }else {
            var_dump(mysqli_error($conn));
        };

    }

    // id	role_id	username	password	alamat	avatar	created_at	updated_at	
<?php 

  
function login($data)
{
    global $conn;
    $errors = [];
    $email = $data['email'];
    $password = $data['password'];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");

    if (mysqli_num_rows($result)) {

        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password']) && $row['role_id'] == 1 || $row['role_id'] == 2) {
            if (set_user_session($row['id'])) {
                echo "<script> alert('loged'); </script>";
                header("Location: admin/index");
                $_SESSION['auth'] = $row;
            }
        }elseif(password_verify($password, $row['password']) && $row['role_id'] == 3){
            if (set_user_session($row['id'])) {
                echo "<script> alert('loged'); </script>";
                header("Location: users/index");
                $_SESSION['auth'] = $row;
            }
        }else{
            return $errors[] = 'Password salah!';
        }

    }else {
        return $errors[] = 'Email anda <b>' . $email . '</b> belum terdaftar';
    }
}

function set_user_session($id)
{
    global $conn;
    $id = $id;
    $ip_address = get_client_ip();
    $result = mysqli_query($conn, "INSERT INTO sessions (user_id, ip_address) VALUES ('$id', '$ip_address')");
    if ($result) {
        return true;
    }

}

function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
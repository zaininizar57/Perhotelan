<?php 

    require_once "function/core.php";
    require_once "function/users/auth/register.php";

    if (isset($_POST['register'])) {
        $errors = validate($_POST);
        if (count($errors) < 1) {
            if (filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
                
                if ($_POST['password'] == $_POST['confirm_password']) {
                    $messageSuccess = register([
                        'nama_lengkap' => filter_input(INPUT_POST, 'nama_lengkap', FILTER_SANITIZE_STRING),
                        'email' => filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL),
                        'alamat' => filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING),
                        'password' => password_hash($_POST["password"], PASSWORD_DEFAULT),
                    ]);
                }else {
                    $errors[] = 'Password tidak sama';
                }

            }else {
                $emailError = "format email tidak benar";
            }
        }
    }

?>


<section class="flex flex-col md:flex-row min-h-screen items-center">

    <div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
        <img src="https://source.unsplash.com/random" alt="" class="w-full h-full object-cover">
    </div>

    <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">

        <div class="w-full h-100">

            <?php if(isset($errors)): ?>
            <?php if(count($errors) > 0): ?>
            <div class="text-white bg-red-300 rounded p-4 -mb-6" role="alert">
                <?php foreach($errors as $key => $error): ?>
                <li><?= $errors[$key]; ?></li>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <?php endif; ?>

            <?php if(isset($messageSuccess)): ?>
            <div class="text-white bg-green-400 rounded p-4 -mb-6" role="alert">
                <?= $messageSuccess; ?> <a href="login" class="font-bold text-green-700">Login Sekarang</a>
            </div>
            <?php endif; ?>

            <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Register new account</h1>

            <form class="mt-6" action="" method="POST">
                <div>
                    <label class="block text-gray-700">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" id="" placeholder="Nama Lengkap"
                        class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                        autofocus autocomplete required>
                </div>

                <div>
                    <label class="block text-gray-700 mt-4">Email Address</label>
                    <input type="email" name="email" id="" placeholder="Enter Email Address"
                        class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                        autofocus autocomplete required>
                    <?php if(isset($emailError)): ?>
                    <p class="text-red-400 text-capitalize">
                        <?= $emailError; ?>!!
                    </p>
                    <?php endif; ?>
                </div>

                <div>
                    <label class="block text-gray-700 mt-4">Alamat</label>
                    <input type="address" name="alamat" id="" placeholder="Alamat"
                        class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                        autofocus autocomplete required>
                </div>

                <div class="mt-4">
                    <label class="block text-gray-700">Password</label>
                    <input type="password" name="password" id="" placeholder="Kata Sandi" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                focus:bg-white focus:outline-none" required>
                </div>

                <div class="mt-4">
                    <label class="block text-gray-700">Confirm Password</label>
                    <input type="password" name="confirm_password" id="" placeholder="Konfirmasi Kata Sandi"
                        minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                focus:bg-white focus:outline-none" required>
                </div>

                <button name="register" value="register" type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
              px-4 py-3 mt-6">Log In</button>
            </form>

            <hr class="my-6 border-gray-300 w-full">


            <p class="mt-8 text-center">
                Sudah punya akun?
                <a href="<?= $base_url . 'login' ?>" class="text-blue-500 hover:text-blue-700 font-semibold">
                    Login
                </a>
            </p>

        </div>
    </div>

</section>
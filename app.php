<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Web Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-indigo-400 min-h-screen flex flex-row items-center justify-center">
  <main class="bg-white p-6 rounded-lg text-slate-800">
    <form action="" method="post">
    <div class="mb-4">
      <h3 class="font-bold text-lg">Kalkulator Bilangan Prima</h3>
      <hr class="bg-indigo-600 h-0.5 my-2">
      <label class="block mb-2" for="number">
        Masukkan Bilangan:
      </label>
      <input class="my-1 shadow appearance-none focus:outline-indigo-600 border rounded w-full p-2 focus:shadow-outline" id="number" name="number" type="number" placeholder="1234567890">
    </div>
      <button type="submit" name="submit" class="py-2 px-3 bg-indigo-600 text-white rounded-md" >Periksa</button>
    </form>
  <?php
    if (isset($_POST['submit'])){
      $isPrime = true;
      $iSaver = 0;
      $number = $_POST['number'];
      for ($i = 2; $i*$i <= $number; $i++) {
        if ($number % $i == 0) {
          $isPrime = false;
          $iSaver = $i;
          break;
        }
      }
      ?>
      <div>
      <hr class="bg-indigo-600 h-0.5 my-3">
        <?php
          if ($isPrime) { ?>
            <p class="bg-green-500 p-2 rounded-md w-fit text-white">Bilangan Prima</p>
            <p class="mt-2">Bilangan <?=$number;?> adalah bilangan prima.</p>
          <?php
          } else { ?>
            <p class="bg-red-500 p-2 rounded-md w-fit text-white">Bukan Bilangan Prima</p>
            <p class="mt-2">Bilangan <?=$number;?> habis dibagi <?=$iSaver;?>.</p>
          <?php }
        ?>
      </h3>
      </div>
    <?php } ?>
  </main>
</body>
</html>
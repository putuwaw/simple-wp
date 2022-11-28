<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Simple Web Page";?></title>
    <link rel="stylesheet" href="src/styles/styles.css">
    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/d26e212e8f.js" crossorigin="anonymous"></script>
    <!-- Highlight JS -->
    <link rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/default.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Scripts -->
    <script src="src/scripts/scripts.js"></script>
  </head>
  <body class="box-border scroll-smooth bg-slate-50">
    <nav
      class="bg-indigo-600 text-slate-100 px-4 py-2 md:py-4 w-full shadow-md z-50"
      id="main-nav"
      >
      <div
        class="container flex flex-wrap justify-between items-center mx-auto max-w-6xl"
        >
        <a href="" class="flex items-center justify-center">
        <img class="w-9 h-9 pr-3" src="src/images/logo.svg" alt="Logo WAW" />
        <span
          class="self-center rounded-md  text-xl font-semibold font-birthday"
          >WAW
        </span>
        </a>
        <button
          type="button"
          onclick="navbar_menu()"
          class="inline-flex items-center p-2 ml-3 text-sm rounded-md md:hidden focus:outline-none focus:ring-2 focus:ring-gray-200"
          >
          <svg
            id="openmenu"
            class="w-6 h-6"
            aria-hidden="true"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
            >
            <path
              fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"></path>
          </svg>
          <svg
            id="closemenu"
            class="hidden w-6 h-6"
            aria-hidden="true"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
            >
            <path
              fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="mobilemenu">
          <ul
            class="flex flex-col mt-4 md:flex-row md:space-x-10 md:mt-0 md:text-sm md:font-medium"
            >
            <li>
              <a
                href=""
                class="hover:bg-slate-100 hover:text-indigo-600 md:hover:bg-indigo-600 md:hover:text-slate-100 md:hover:underline block py-2 pr-4 pl-3 text-base rounded-md border-gray-100 md:p-0"
                >Home
              </a>
            </li>
            <li>
              <a
                href="https://putuwaw.github.io/"
                class="hover:bg-slate-100 hover:text-indigo-600 md:hover:bg-indigo-600 md:hover:text-slate-100 md:hover:underline block py-2 pr-4 pl-3 text-base rounded-md border-gray-100 md:border-0 md:p-0"
                >About
              </a>
            </li>
            <li>
              <a
                href="https://github.com/putuwaw/ "
                class="hover:bg-slate-100 hover:text-indigo-600 md:hover:bg-indigo-600 md:hover:text-slate-100 md:hover:underline block py-2 pr-4 pl-3 text-base rounded-md border-gray-100 md:border-0 md:p-0"
                >Repository
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main class="flex flex-col mx-auto justify-center w-full md:w-3/4 py-8">
      <div class="text-center">
        <h1 id="judul" class="pb-8 text-2xl lg:text-4xl font-extrabold w-full md:w-3/4 mx-auto text-slate-900">Cara Membuat Simple Web Page di Localhost dengan XAMPP</h1>
        <div class="w-full">
          <img class="w-full max-h-96 mx-auto md:rounded-md shadow-md" src="src/images/hero.jpg"></img>
          <label class="font-thin text-sm italic">Ilustrasi Coding. foto/Unsplash</label>
        </div>
      </div>
      <div class="px-4 md:px-0 leading-relaxed pt-4 md:text-lg text-slate-900">
        <p>Halaman web atau <span class="italic">web page</span> adalah sebuah halaman tunggal dari suatu website yang terdapat di internet.
          Untuk dapat membuat <span class="italic">web page</span> yang sederhana, kita memerlukan <span class="italic">web server</span>.
          Salah satu perangkat lunak yang menyediakan <span class="italic">web server</span> adalah XAMPP. 
        </p>
        <br>
        <p>Dengan menggunakan XAMPP, kita dapat membuat sebuah <span class="italic">web page</span> sederhana dan menampilkannya secara lokal.
          Selain itu, kita juga dapat mengembangkan <span class="italic">web page</span> tersebut menggunakan bahasa pemrograman <span class="italic">server-side</span> seperti PHP yang sudah disediakan oleh XAMPP.
        </p>
        <br>
        <p>Pada kesempatan ini, saya akan berbagi cara untuk membuat sebuah <span class="italic">web page</span> sederhana yang dapat menentukan apakah sebuah bilangan merupakan prima atau bukan dengan menggunakan XAMPP.</p>
        <br>
        <h3 class="text-2xl font-bold pb-2">1. Persiapan</h3>
        <p>
          Sebelum membuat lokal <span class="italic">web page</span>, ada dua hal yang perlu disiapkan, yaitu:
        <ul>
          <li class="list-disc list-inside">Web Server -
            XAMPP berisi Apache yang berfungsi sebagai <span class="italic">web server</span> pada <span class="italic">local environment</span>. 
            Silakan <span class="italic">download</span> XAMPP <a target="_blank" class="underline text-indigo-600" href="https://www.apachefriends.org/download.html">disini</a> 
            dan kemudian <span class="italic">install</span>.
          </li>
          <li class="list-disc list-inside">Text Editor -
            Text Editor berfungsi untuk mempermudah proses pengembangan <span class="italic">web page</span>. 
            Text Editor yang saya gunakan adalah Visual Studio Code, yang dapat di <span class="italic">download</span> <a target="_blank" class="underline text-indigo-600" href="https://code.visualstudio.com/download">disini</a>.
          </li>
        </ul>
        </p>
        <br>
        <h3 class="text-2xl font-bold pb-2">2. Membuat Folder</h3>
        <p>
          Agar <span class="italic">web page</span> bisa diakses secara lokal, kita harus menyimpan file <span class="italic">web page</span> tersebut di direktori <code class="font-semibold bg-slate-200 p-1 rounded-md">C:\xampp\htdocs</code>. 
          Penamaan folder dibebaskan, namun pada kesempatan kali ini saya akan memberi nama <code class="font-semibold bg-slate-200 p-1 rounded-md">simple-wp</code>.
        </p>
        <div class="mt-3">
          <img class="shadow-md rounded-md" src="src/images/folder.png" alt="Membuat Folder">
        </div>
        <br>
        <h3 class="text-2xl font-bold pb-2">3. Membuat File</h3>
        <p>Buka folder yang telah dibuat sebelumnya dengan menggunakan <span class="italic">text editor</span>. 
          Kemudian, buat file dengan nama <code class="font-semibold bg-slate-200 p-1 rounded-md">index.php</code> di folder tersebut dan salinlah kode berikut ini:
        </p>
        <div class="bg-white w-full rounded-md mt-4">
          <pre class="overflow-auto leading-none">
<code class="language-html">
  &lt;!DOCTYPE html&gt;
  &lt;html lang="en"&gt;
  &lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;Simple Web Page&lt;/title&gt;
    &lt;script src="https://cdn.tailwindcss.com"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body class="bg-indigo-400 min-h-screen flex flex-row items-center justify-center"&gt;
    &lt;main class="bg-white p-6 rounded-lg text-slate-800"&gt;
      &lt;form action="" method="post"&gt;
      &lt;div class="mb-4"&gt;
        &lt;h3 class="font-bold text-lg"&gt;Kalkulator Bilangan Prima&lt;/h3&gt;
        &lt;hr class="bg-indigo-600 h-0.5 my-2"&gt;
        &lt;label class="block mb-2" for="number"&gt;
          Masukkan Bilangan:
        &lt;/label&gt;
        &lt;input class="my-1 shadow appearance-none focus:outline-indigo-600 border rounded w-full p-2 focus:shadow-outline" 
          id="number" 
          name="number" 
          type="number" 
          placeholder="1234567890"&gt;
      &lt;/div&gt;
        &lt;button type="submit" name="submit" class="py-2 px-3 bg-indigo-600 text-white rounded-md" &gt;Periksa&lt;/button&gt;
      &lt;/form&gt;
    &lt;?php
      if (isset($_POST['submit'])){
        $isPrime = true;
        $iSaver = 0;
        $number = $_POST['number'];
        for ($i = 2; $i*$i &lt;= $number; $i++) {
          if ($number % $i == 0) {
            $isPrime = false;
            $iSaver = $i;
            break;
          }
        }
        ?&gt;
        &lt;div&gt;
        &lt;hr class="bg-indigo-600 h-0.5 my-3"&gt;
          &lt;?php
            if ($isPrime) { ?&gt;
              &lt;p class="bg-green-500 p-2 rounded-md w-fit text-white"&gt;Bilangan Prima&lt;/p&gt;
              &lt;p class="mt-2"&gt;Bilangan &lt;?=$number;?&gt; adalah bilangan prima.&lt;/p&gt;
            &lt;?php
            } else { ?&gt;
              &lt;p class="bg-red-500 p-2 rounded-md w-fit text-white"&gt;Bukan Bilangan Prima&lt;/p&gt;
              &lt;p class="mt-2"&gt;Bilangan &lt;?=$number;?&gt; habis dibagi &lt;?=$iSaver;?&gt;.&lt;/p&gt;
            &lt;?php }
          ?&gt;
        &lt;/h3&gt;
        &lt;/div&gt;
      &lt;?php } ?&gt;
    &lt;/main&gt;
  &lt;/body&gt;
  &lt;/html&gt;
</code>
</pre>
        </div>
        <br>
        <h3 class="text-2xl font-bold pb-2">4. Mengakses Web Page</h3>
          Untuk dapat mengakses <span class="italic">web page</span> yang telah dibuat, pastikan server Apache telah berjalan pada XAMPP.
          <span class="italic">Web page</span> dapat diakses melalui direktori maupun menggunakan port.<br>
        <div class="w-full flex items-center justify-center mt-3">
          <img class="w-1/2" src="src/images/xampp.png" alt="">
        </div>
        <br>Jika melalui direktori, maka ketikkan kode berikut pada <span class="italic">address bar browser</span>:
        <div class="w-full rounded-md my-4 leading-none">
          <pre class="relative overflow-auto">
<code class="shadow-md language-bash">
  localhost/simple-wp
</code>
</pre>
        </div>
        <p>
          Jika menggunakan port, misalnya port 8000, maka buka Command Prompt dan jalankan perintah berikut:
        </p>
        <div class="w-full rounded-md my-4 leading-none">
          <pre class="relative overflow-auto">
<code class="shadow-md language-php">
  php -S localhost:8000
</code>
</pre>
        </div>
        <p>Sekarang, kita sudah berhasil menggunakan XAMPP untuk membuat sebuah <span class="italic">web page</span> sederhana di localhost.</p>
        <img class="shadow-md rounded-md mt-3" src="src/images/web-page.png" alt="Web Page">
        <br>
        <p>Nb: Seluruh <span class="italic">resources</span> yang digunakan untuk membuat <span class="italic">website</span> ini dapat diakses pada tautan 
          <a target="_blank" class="underline text-indigo-600" href="https://github.com/putuwaw/simple-wp">ini</a>
          atau melalui bagian <span class="italic">repository</span> pada <span class="italic">navigation bar</span>.
          <br><br>
        <h3 class="text-2xl font-bold pb-2">Referensi</h3>
        <ul class="text-sm break-all">
          <li>F, Nida Regita. <span class="italic">"Membuat Website di Localhost Menggunakan XAMPP Hingga Online"</span> 
            . 5 Februari 2022. [Online]. Tersedia: 
            <a class="underline" href="https://www.niagahoster.co.id/blog/membuat-website-localhost-xampp/">https://www.niagahoster.co.id/blog/membuat-website-localhost-xampp/</a>. 
            Diakses 27 November 2022.
          </li>
          <li></li>
          <li></li>
        </ul>
      </div>
    </main>
    <footer class="flex items-center justify-center w-full h-10 md:h-14 bg-indigo-600 text-slate-100">
      <div>
        <p class="">
          Made with <i class="fa-solid fa-heart"></i> by <a href="https://putuwaw.github.io/">Putu Widyantara </a>
        </p>
      </div>
    </footer>
  </body>
</html>
<html>
  <head>
    <title>UTS SA-Web</title>
  </head>
  <body>
    <h2> Pertemuan 3 - 4 </h2>
    <?php 
      /*
      Pertemuan 3 ya pak
      dan ini komentar
      */

      #Mencampurkan HTML dan PHP
      echo "<h1>Sekolah Koding</h1>";
      echo "Halo <br>";
      echo "Member";

      #Komentar dan Variabel
      $nama = "Sekolah Koding 123"; //string
      $_123 = "Anugrah Ahzul Raihan"; //string

      echo "<h1>$_123</h1>";
      echo "halo ". $nama ."<br>";
      echo " Member";

      echo "<br><br>";
      #tipe data string
      $nama = "Sekolah Koding"; //string
      $nama2 = 'Bermain Koding'; //string
      echo "selamat datang di \$nama"; //error pada pemanggilan
      echo "<br>";
      echo "selamat datang di ". $nama ." Mari ". $nama2; //benar
      echo "<br>";

      #tipe data integer dan float
      $angka = 1000; //tipe daya integer
      $angka2 = 100.123; //tipe data float
      echo $angka + $angka2; //operator artimatika

      echo "<br><br>"; //enter 2 baris

      /*
      dibawah ini Pertemuan 4 ya pak
      dan ini komentar
      */

      #operator artimatika ( + - * / % ++ --)
      $angka = 1000; //integer
      $angka2 = 3; //integer
      $angka3 = 2; //integer

      $angka *= $angka2; //operator matematika
      echo $angka;
      
      echo "<br><br>"; //enter 2 baris

      #metode math (round rand(min,max) max min)
      $angka = 1000; //integer
      $angka2 = 3; //integer
      $angka3 = 2.64; //integer

      echo " Angka hari ini adalah ".min($angka3, $angka, $angka); // metode mencari nilai minimum

      echo "<b><br>"; //enter 2 baris

      #metode string
      // strlen $$ str_word_count
      // str_replace(fing, replacemstring)
      //str_repeat(text, times); str_shuffle(text)

      $text = "Hai Semuanya"; //string
      echo str_word_count($text); echo "<br>";
      echo strlen($text); echo "<br>";
      echo str_replace("hai", "Halo", $text); echo "<br>";
      echo str_repeat($text, 2); echo "<br>";
      echo str_shuffle($ext); echo "<br>";
      echo str_repeat(str_replace("Hai", "Halo", $text), 10);
    ?>

    
    <h2> Pertemuan 5 dan 6 </h2>
    <?php
    //Pertemuan ke 5 array
      $angka = [5,10,2,1,6];
      $kotak = array('anjing','kura-kura', 'koala', 'banteng' , 'banteng');
      $nama = ['Hilman', 'Edy', 'Tiqa'];

      echo "--------------------------------------<br>Array
            <br>-------------------------------------- <br><br>";
      print_r($kotak); //pemanggilan seluruh isi array
      echo "<br>";
      echo $nama[0]; //pemanggilan isi array berdasarkan index = 0
      echo "<br>";
      
      echo "<br><br>--------------------------------------<br>Metode Array
            <br>-------------------------------------- <br><br>";
      #metode array 
      #array_uniqe , _reverse, shuffle, count, sort
      print_r( array_unique($kotak)); echo "<br>"; //menghilangkan nilai double agar tercipta nilai unik
      print_r( array_reverse($kotak)); echo "<br>"; //membalikkan urutan isi dalam array
      shuffle($kotak); // mengacak isi array
      print_r($kotak); echo "<br>";
      sort($kotak); // mengurutkan nilai isi array secara ascending
      sort($angka); // mengurutkan nilai isi array secara ascending
      print_r($kotak);echo "<br>";
      echo count($kotak); echo "<br>"; //menghitung nilai isi dalam array
      print_r($angka); echo "<br>";

      echo "<br><br>--------------------------------------<br>Associative Array
            <br>-------------------------------------- <br><br>";

      #associative array
      #mengurutkan array dengan kata kunci (key => isi )

      $data = array( "nama" => "Hilman" ,
                     "umur" => 21,
                     "kerja"=> "pengacara"
                   );

      $data2 = array( "istri" => "ayang" ,
                     "laptop"=> "chromebook"
                   );

      print_r($data); echo "<br>";

      $data['nama'] = 'Hilman Ramadan'; //mengubah isi array sesuai key yang diinginkan

      echo "Namanya adalah " . $data['nama']; echo "<br>";
      echo "Umurnya adalah " . $data['umur']; echo "<br>";
      echo "Pekerjaannya adalah " . $data['kerja']; echo "<br>";

      #metode associative array
      # array_values, array_keys, array_merge
      echo "<br><br>--------------------------------------<br>Metode Associative Array
            <br>-------------------------------------- <br><br>";

      print_r(array_values($data)); echo "<br>"; //menegubah associative array dengan menggunakan indeks(array biasa)
      print_r(array_keys($data)); echo "<br>"; //menampilkan nilai keys
      print_r(array_merge($data,$data2)); echo "<br>"; //menggabungkan kedua buah array

    // Pertemuan 6
      #multi dimensi array
      echo "<br><br>--------------------------------------<br>Multi Dimensi Array
            <br>-------------------------------------- <br><br>";

      $databaru = array (
                    array("programmer", "21", "males"),
                    array("designer", "24", "rajin"),
                    array("manager", "34", "males banget"),
                  );
      print_r($databaru); echo "<br>";
      echo $databaru[1][1]; echo "<br>"; //menampilkan array indeks=1 varibale indeks=1
      $databaru [2][0] = "Project Manager"; //mengganti isi varibale pada array indeks =2 varible indeks =0
      echo $databaru[2][0]; echo "<br>";
    ?>

    <h2> Pertemuan 7 </h2>
    <?php
    // Looping dengan PHP
    // for(variableawal(mulai), (batas(syarat)), perubahan)
    for($i=0; $i<5; $i++){
      echo "-----------------";
      echo "sekolah koding $i";
      echo "-----------------<br>";
      
    }
    echo "<br>";
    echo "mengeluarkan nilai array menggunakan for loop <br>";
    $hewan = ['anjing','babi','cicak','domba', 'buaya'];
    for($i=0; $i<count($hewan); $i++){
      echo "-----------------";
      echo $hewan[$i];
      echo "-----------------<br>";
    }

    echo "<br>";
    echo "mengeluarkan semua nilai array menggunakan foreach <br>";
    foreach($hewan as $h){
      echo "-----------------";
      echo $h;
      echo "-----------------<br>";
    }

    echo "<br>";
    echo "mengeluarkan nilai array dengan kurang 1 indeks <br>";
    for($i=0; $i<count($hewan) - 1; $i++){
      echo "-----------------";
      echo $hewan[$i];
      echo "-----------------<br>";
    }

    $data = ['nama' => 'ahzul', 'umur' => 24, 'sifat' => 'rajin bang'];
  
    echo "<br>";
    echo "mengeluarkan nilai associative array menggunakan foreach <br>";
    foreach($data as $key => $value){
      echo $value . "<br>";
    }


    // metode while dan do while
    // while(syarat)

    echo "<br>--Metode while <br>--";
    $i = 0;
    while($i < count($hewan)){
      echo $hewan[$i]. "<br>";
      $i++;
    }

    echo "<br>-- Metode Do While --<br>";
    $a = 0;
    do{
      echo $hewan[$a]."<br>";
      $a++;
    }while($a < count($hewan));
    ?>

    
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>
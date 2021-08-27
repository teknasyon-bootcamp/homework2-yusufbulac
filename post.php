<?php
require_once "functions.php";

/**
 * post.php
 *
 * Bu betik direk olarak erişilebilir. functions.php'de yaptığınız gibi bir
 * kontrol eklemenize gerek yok.
 *
 * > Dikkat: Bu dosya hem direk çalıştırılabilir hem de `posts.php` dosyasında
 * > 1+ kez içe aktarılmış olabilir.
 *
 * Bu betik dosyası içerisinde functions.php'de yer alan fonksiyonları da kullanarak
 * aşağıdaki işlemleri gerçekleştirmenizi bekliyoruz.
 *
 * - $id değişkeni yoksa "1" değeri ile tanımlanmalı, daha önceden bu değişken
 * tanımlanmışsa değeri değiştirilmemeli. (Kontrol etmek için `isset`
 * (https://www.php.net/manual/en/function.isset.php) kullanılabilir.)
 * - $id için yapılan işlemin aynısı $title ve $type için de yapılmalı. (İstediğiniz
 * değerleri verebilirsiniz)
 * - Bir sonraki adımda ilgili içerik gösterilmeden önce bir div oluşturulmalı ve
 * bu div $type değerine göre arkaplan rengi almalıdır. (urgent=kırmızı,
 * warning=sarı, normal=arkaplan yok)
 * - `getPostDetails` fonksiyonu tetiklenerek ilgili içeriğin çıktısı gösterilmeli.
 */

 //$id, $title ve $type değişkenleri için isset kontrolü yapıyoruz. Eğer değişkenler yoksa değişkenlere default değerler atıyoruz. Ayrıca $type değişkeni için getLatestPosts fonksiyonundan gelen değerleri css tanımlamalarına uygun hale getiriyoruz.
if (!isset($id)) {
    $id = 1;
}

if (!isset($title)) {
    $title = "myDefaultTitle";
}

if (!isset($type)) {
    $type = "yellow";
} elseif ($type == "urgent") {
    $type = "red";
} elseif ($type == "warning") {
    $type = "yellow";
}

//div oluşturup getPostDetails fonksiyonu ile postumuzu oluşturuyoruz.
echo "<div style='background-color:$type;'>";
getPostDetails($id, $title);
echo "</div>";

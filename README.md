
## Ağaç Yetiştirme Scripti Php

Merhaba arkadaşlar Ormanika adlı scripti alıp üzerine geliştirmeler yapıp. Daha da fazlasını yapmayı planlıyorum.  Bu scripti şuan kullanmaya başlayabilirsiniz. Ben güncellemeye devam ettikçe dosyaları değiştirmeniz yeterli olucak. Şimdi kurulumuna geçmeden..

# Sistem Nasıl Çalışıyor ?

 Kayıt oluyorsunuz size bir link veriyor. O Linke günde 1 kere tıklayınca 1 ağaç dikiyorsunuz. Sözde 100 Ağaçta marketden ödül talep edebiliyorsunuz veya gübre satın alıp 1 değil 5 ağaç dikebiliyorsunuz. Görev yaparsanız 24 saatlik süre azalıyor gibi gibi.
### Henüz Aktif olmayan neler var ?

 1. Görev Sistemi 
 2. Market Sistemi
 3. Referans Sistemi
 4. Admin Paneli Site Ayarları

### Kurulumu Nasıl Gerçekleştireceğim ?
Github adresinden projeyi indiriyoruz : [Github Dosyası](https://github.com/ssilistre/agacyetistirvedik)

 1. Adım Rardan çıkan dosyaları dizine atıyoruz.
 2. Adım Rarın içinden çıkan database.sql adlı dosyayı phpmyadminden > database seçip >import seçeneği ile database.sql dosyasını yüklüyoruz.
 3. Adım Eğer **2.Adım çalışmaz ise** gene aynı dosyada **Sql Sorgusu.txt** adlı dosyada sorgu şeklinde mevcut. 
 4. Adım dizine attığımız dosyalar içinde config.php bulup düzenle diyerek açıyoruz.

```php
$db="localhost";
$kullanici ="databasekullanici";
$sifre="databasesifre";
$dataname ="databaseisim";
$disqusisim="disgusadin";
$siteadi="SİTE ADI";
$url = 'http://siteniz.com/'; // Oyunun Tam URLsi /
```
bu kısımları kendimize göre düzenliyoruz. Burada bir açıklama gerekirse 
**disqusisim** = profillerin altındaki yorum kutusu için. Disqusa üye olup site ekle diyorsunuz. Sitenizi eklediğinizde size bir kullanıcıadı tanımlanıyor. Onu buraya yazmanız gerek.

Bütün bu adımları tamamladığımızda , sitemize girip kayıt oluyoruz. Daha sonra kullanıcı adı = ornek şifre = ornek le giriş yapıp. Admin panelinden kayıt olduğumuz hesabı admin yapıyoruz ve örnek hesabını siliyoruz. Böylece tek admin hesabı sizinki oluyor.

Güncelleme yaptıkça buraya yazacağım. Sorunla karşılaşanlar yorum yaparak benimle iletişime geçebilirler.

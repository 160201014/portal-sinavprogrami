# portal-sinavprogrami
Sınav Programı modülü.
# İçerik
Modül , okuldaki yöneticiler ve öğrenciler için sınav programını içermektedir.Yöneticiler için silme,ekleme ve değiştirme butonları mevcuttur.

# info
Profilimdeki portal isimli reponun composer.json dosyasına kouosl'den kendi depoma çektiğim ve değiştirdiğim portal-theme , gii generator ile oluşturduğum portal-sinavprogrami eklenmiştir.Profilimdeki portal kurulumundan sonra otamatik gelecektir.
Oluşturulan modül , model ve crud işlemleri gii kullanılarak yapılmıştır.

Migrationsu işleme kodu;

php yii migrate --migrationPath=@vendor/kouosl/portal-sinavprogrami/migrations --interactive=0


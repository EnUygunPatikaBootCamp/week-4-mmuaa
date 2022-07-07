Konsol Uygulaması : src/Command/ArrayLengthCommand.php içindedir.
Web Uygulaması : src/Controller/WebAppController.php içindedir.

# Research

## Question 1:

- Test Driven Development : Test Odaklı Geliştirme anlamına gelir. Süreç, bir test senaryosu yazarak başlar. TDD, işlevsebigin nasıl uygulandığına odaklanır. Test senaryoları bir programlama dilinde yazılır. İşbirliği yalnızca geliştiriciler arasında gereklidir. API ve üçüncü parti yazılım içeren projeler için daha iyi bir yaklaşım olabilir. Testler sadece programlama bilgisine sahip olan kişiler tarafından anlaşılır.

- Behaviour Driven Development : Davranış Odaklı Geliştirme anlamına gelir. Süreç, beklenen davranışa göre bir senaryo yazılarak başlar. BDD, bir uygulamanın son kullanıcıya yönelik davranışına odaklanır. Senaryolar basit ingilizce formatta yazıldığı için TDD'ye göre daha okunaklıdır. BDD senaryoları, işlevsellik değişikliklerinden fazla etkilenmez. Tüm paydaşlar arasında işbirliği gereklidir. Kullanıcı eylemleri tarafından yönetilen projeler için daha iyi bir yaklaşım olabilir. BDD'deki testler, programlama bilgisi olmayanlar da dahil olmak üzere herkes tarafından anlaşılabilir. TDD ile karşılaştırıldığında testlerdeki hataların izlenmesi daha zordur.

## Question 2:

Unit test uygulamamızın küçük bir parçasını uygulamanın geri kalanından bağımsız bir şekilde çalıştırarak bu parçanın davranışını doğrulayan bir metoddur. Unit test yazdığımız kodun davranışını yine kod yazarak doğrulamamızı sağlar. Test kodları genellikle bir test framework aracılığıyla çalıştırılır. 

Tipik bir unit test metodu genellikle üç aşamadan oluşur. Bu aşamalar yabancı kaynaklarda The AAA(Arrange-Act-Aspect) Pattern olarak geçer.

- Arrange: Test edilecek koda verilecek olan input parametrelerinin belirlendiği ve test edilecek olan kodun bağımlı olduğu diğer bileşenlerin test anındaki bulunacakları durumlarının tanımlandığı kısımdır.

- Act: Test edilecek olan kodun çalıştırıldığı aşamadır. Bu aşamada test edilecek olan fonksiyonu/metodu tetikleriz.

- Assert: Test sonuçlarının doğrulanması aşamasıdır. Tetiklenen fonksiyon doğru sonucu üretiyor mu veya bağımlı olduğu bileşenler üzerinde beklenen aksiyonları tetikliyor mu kontrolünü bu aşamada yaparız.

Burada unit testleri “Assert” fazında doğrulayacağı davranışa göre iki kategoriye ayırmışlar bazı kaynaklarda.

- state-based: Test edilen kodun çıktılarının veya sistemde oluşturduğu durum (state) değişikliğinin kontrol edilmesi durumunda “state-based” test yazmış oluyoruz.

- interaction-based: Test edilen kodun belirli fonksiyonları doğru şekilde tetiklediğini (doğru etkileşim) doğrulayan bir test yazdığımızda “interaction-based” bir test yazmış oluyoruz.

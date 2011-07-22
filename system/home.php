<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php
$url = $_SERVER['SCRIPT_NAME'];
$url = explode("/", $url);
define('BASE_URL', "http://" . $_SERVER["SERVER_NAME"] . "/" . $url[1] . "/");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" href="<?php echo BASE_URL;?>css/mainStyle.css" rel="stylesheet" />
        <link type="text/css" href="<?php echo BASE_URL;?>css/tips-basic.css" rel="stylesheet" >

        <script type="text/javascript" src="<?php echo BASE_URL;?>js/jquery-1.5.1.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL;?>js/jquery.tools.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $("#tips img[title]").tooltip('#demotip');
            });
            $(document).ready(function () {

		var value = $('#button input').val();
		var name = $('#button input').attr('name');

		$('#button input').remove();
		$('#button').html('<a href="#" class="cssSubmitButton" rel=' + name + '>' + value + '</a>');

		$('#button a').live('click', function () {

			//You can use default form submission or with the ajax call below
			//In this example, I'm using a dummy php call so that you can see the loading animation
			//$('form[name=' + $(this).attr('rel') + ']').submit();

			var link = $(this);

			$.ajax({
				url : 'load.php',
				data: '',
				type: 'GET',
				cache: 'false',
				beforeSend: function () {
					link.addClass('loading');
				},
				success: function () {
					link.removeClass('loading');
					alert('Submitted');
				}
			});

		});

	});
        </script>
        <title>Integrated System KSC</title>
    </head>
    <body>
        <div id="container">
            <div id="">
                <div id="header">
                    <font style="font-family: cursive,fantasy;font-size: xx-large;">Integrated System</font><br>
                    <font style="font-family: cursive,fantasy;font-size:x-large;">Laboratorium Komputasi & Sistem Cerdas</font>
                </div>
                <div id="menu">
                    <div style="position: absolute; top: 38px; left: 237px; display: none;" id="demotip"></div>
                    <?php include 'template/menu.php'; ?>
                </div>
                <div id="content">
                    Profil Jurusan
Wednesday, 11th of March 2009 at 09:28:40 PM

Sebagai wujud dari peran aktif UII dalam pendidikan tinggi nasional, maka UII melihat bidang komputer dan teknologi informasi adalah bidang yang perlu dibangun fondasi keilmuannya di lingkungan UII. Untuk itulah maka Teknik Informatika UII didirikan. Jurusan Teknik Informatika FTI UII berdiri pada tahun 1994 dan mendapat akreditasi B pertama kali pada bulan Juli 2000, kemudian reakreditasi kedua pada bulan September 2005 dengan nilai juga B.

Visi 2010

Berdasar kondisi internal dan eksternal maka untuk dapat eksis serta tetap berperan aktif dalam dunia pendidikan tinggi teknik informatika maka Jurusan Teknik Informatika FTI UII menetapkan Visi untuk 2010, yaitu: “menjadi penyelenggara pendidikan teknologi informasi yang berkualitas dan berperan aktif dalam pembangunan bangsa berlandaskan pada karakter khairo ummah”.

Misi

Berdasar visi tersebut maka yang akan dilakukan oleh jurusan Teknik Informatika untuk mewujudkan visi tersebut adalah tertuang dalam Misi sebagai berikut, yaitu:

    Mewujudkan institusi yang menjadi bagian dari dakwah islamiyah sesuai dengan tuntunan Al Quran dan Al Hadits di bidang teknologi informasi dan tempat dihasilkannya insan ulil albab yang beriman dan bertaqwa dan mampu menunjukkan jati diri sebagai khairo ummah.
    Menyiapkan lulusan yang memiliki sikap dan perilaku (attitude and character) yang baik serta berberjiwa mandiri dengan kapasitas intelektual dan profesional yang sesuai dengan kebutuhan jaman serta mampu menghadapi tantangan masa depan dengan komitmen pada peningkatan kualitas hidup masyarakat.
    Menyelenggarakan sistem belajar mengajar dengan dukungan Information and Communication Technology (ICT) dalam kerangka sistem pendidikan tinggi yang modern yang berorientasi pada kemajuan ilmu dan teknologi, dan komitmen pada penerapan berbagai instrumen untuk menyelenggarakan pendidikan yang berkualitas.
    Memberikan dukungan resource bagi staff untuk mengembangkan diri agar menjadi ilmuwan dan peneliti yang kreatif dan inovatif serta  pendidik yang handal.
    Menjalankan proses-proses penyelenggaraan pendidikan tinggi dengan prinsip quality, accountability, autonomy dan equity, sehingga menjadi sebuah institusi pendidikan yang sehat dan  memiliki nilai kompetitif bagi bangsa.
    Memelihara komunikasi dengan alumni guna memberikan terselenggaranya proses belajar sepanjang hayat serta manfaat dari pengalaman, skill dan pengetahuan yang dimilikinya.

Tujuan

Untuk mengukur kesesuaian antara Visi dan Misi terdapat sejumlah kriteria yang kemudian dijadikan sebagai tujuan dari pendidikan Teknik Informatika UII, yaitu:

    Terbentuknya mahasiswa sebagai sumberdaya manusia yang handal di bidang ICT sehingga memiliki kemampuan akademik yang kompetitif dan memiliki kesiapan dalam hal: (1) kesadaran individu untuk mewujudkan nilai-nilai islam yang berorientasi pada penegakkan dan pengamalan Al Quran dan As Sunnah secara kaffah; (2) bekerja secara profesional dalam bidang yang terkait dengan ICT; (3) melanjutkan studi ke jenjang yang lebih tinggi; (4) berperan aktif dalam masyarakat modern sesuai dengan kapasitas ilmu yang dimilikinya; (5) mengimplementasikan ilmu yang dimilikinya sehingga dapat bermanfaat bagi kepentingan masyarakat dan kesejahteraan umat manusia; (6) sikap dan perilaku yang berorientasi pada kecakapan interpersonal, wawasan global, komunikasi efektif, berjiwa mandiri, kreatif, inovatif, serta wirausaha.
    Terselenggaranya aktifitas proses belajar mengajar dengan infrastruktur dan lingkungan yang kondusif untuk tercapainya kompetensi yang diharapkan.
    Tersedianya staff yang mampu menguasai, mengembangkan dan menerapkan ilmu pengetahuan dan teknologi secara kreatif dan inovatif yang diwujudkan antara lain dengan meningkatnya performance penelitian dan pelayanan pada masyarakat.
    Terbentuknya jaringan kerjasama yang saling menguntungkan dengan berbagai pihak (termasuk alumni) yang mendukung pengembangan dan aplikasi ilmu komputer yang diwujudkan dalam bentuk terealisasinya konsep inkubator sebagai implementasi dari Knowledge Based Economy dan Technopreneurship.
    Tersedianya sejumlah fasilitas (laboratorium, pusat studi, pusat pelatihan, perpustakaan, dll) serta infrastruktur jaringan komputer yang handal yang akan menjadi salah satu sarana penting bagi tercapainya Visi dan Misi Teknik Informatika UII.
    Terwujudnya Otonomi dan desentralisasi jurusan/jurusan dan laboratorium serta pusat-pusat pengembangan ilmu dan teknologi yang akan memunculkan nilai kompetitif masing-masing dengan komitmen pada Accountability, Transparansi, Quality Assurance, dan Healthy organization.

                </div>
                <div id="sidebar">
                    <?php include 'template/sidebar.php';?>
                </div>
                <div id="footer">
                    <?php include 'template/footer.php';?>
                </div>
            </div>
        </div>
    </body>
</html>

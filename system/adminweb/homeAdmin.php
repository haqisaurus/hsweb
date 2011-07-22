<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <link type="text/css" href="<?php echo BASE_URL; ?>css/adminStyle.css" rel="stylesheet" />
        <link type="text/css" href="<?php echo BASE_URL; ?>css/menu.css" rel="stylesheet" />
        <link type="text/css" href="<?php echo BASE_URL; ?>css/jquery-ui-1.8.14.custom.css" rel="stylesheet" />
        <script type="text/javascript" src="<?php echo BASE_URL; ?>js/jquery-1.5.1.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>js/jquery-ui-1.8.14.custom.min.js"></script>
        <!--    menyamakan tinggi kolom    -->
        <script type="text/javascript" src="<?php echo BASE_URL; ?>js/jquery.equalizecols.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#wrapper, #content, #sidebar").equalizeCols();
            });
            $(document).ready(function(){

                //Larger thumbnail preview

                $("ul.thumb li").hover(function() {
                    $(this).css({'z-index' : '10'});
                    $(this).find('img').addClass("hover").stop()
                    .animate({
                        marginTop: '-80px',
                        marginLeft: '-80px',
                        top: '50%',
                        left: '50%',
                        width: '130px',
                        height: '130px',
                        padding: '20px'
                    }, 100);

                } , function() {
                    $(this).css({'z-index' : '0'});
                    $(this).find('img').removeClass("hover").stop()
                    .animate({
                        marginTop: '0',
                        marginLeft: '0',
                        top: '0',
                        left: '0',
                        width: '100px',
                        height: '100px',
                        padding: '5px'
                    }, 400);
                });

                //Swap Image on Click
                $("ul.thumb li a").click(function() {

                    var mainImage = $(this).attr("href"); //Find Image Name
                    $("#main_view img").attr({ src: mainImage });
                    return false;
                });

            });
            $(function(){
                // Accordion
                $("#accordion").accordion({ header: "h3" });
            });
        </script>
        <title>Sistem Informasi Farmasi</title>
    </head>
    <body>
        <div id="container">
            <div id="wrapper">
                <div id="header">
                    <?php include 'template/header.php'; ?>
                </div>
                <div id="content">
                    <ul class="thumb">
                        <li style="z-index: 0;"><a href="#"><img style="margin-top: 0px; margin-left: 0px; top: 0px; left: 0px; width: 100px; height: 100px; padding: 5px;" class="gambar" src="<?php echo BASE_URL; ?>images/cetak.png" alt=""></a><br/>Pejualan</li>
                        <li style="z-index: 0;"><a href="#"><img style="margin-top: 0px; margin-left: 0px; top: 0px; left: 0px; width: 100px; height: 100px; padding: 5px;" class="gambar" src="<?php echo BASE_URL; ?>images/calendar.png" alt=""></a><br/>Pejualan</li>
                        <li style="z-index: 0;"><a href="#"><img style="margin-top: 0px; margin-left: 0px; top: 0px; left: 0px; width: 100px; height: 100px; padding: 5px;" class="gambar" src="<?php echo BASE_URL; ?>images/meeting.png" alt=""></a><br/>Pejualan</li>
                        <li style="z-index: 0;"><a href="#"><img style="margin-top: 0px; margin-left: 0px; top: 0px; left: 0px; width: 100px; height: 100px; padding: 5px;" class="gambar" src="<?php echo BASE_URL; ?>images/penjualan.png" alt=""></a></li>
                        <li style="z-index: 0;"><a href="#"><img style="margin-top: 0px; margin-left: 0px; top: 0px; left: 0px; width: 100px; height: 100px; padding: 5px;" class="gambar" src="<?php echo BASE_URL; ?>images/chart.png" alt=""></a></li>
                        <li style="z-index: 0;"><a href="#"><img style="margin-top: 0px; margin-left: 0px; top: 0px; left: 0px; width: 100px; height: 100px; padding: 5px;" class="gambar" src="<?php echo BASE_URL; ?>images/logout.png" alt=""></a></li>
                    </ul>
                </div>
                <div id="sidebar">
                    <div id="accordion">
                        <?php include 'template/sidebar.php'; ?>
                    </div>
                </div>
                <div id="footer">
                    <?php include 'template/footer.php'; ?>
                </div>
            </div>
        </div>
    </body>
</html>

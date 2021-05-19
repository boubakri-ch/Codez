<?php
    include ("C:/wamp64/www/web/config.php");
 $sql = "select sum(prix) as revenu from commande";
$db = config::getConnexion();
$liste_1=$db->query($sql);
$sql2="select count(code_commande) as com from entete_commande";
$liste_2=$db->query($sql2);
$sql3="select count(id) as livr from livraison";
$liste_3=$db->query($sql3);
$sql4="select count(unique_id) as user from users where type_c='client'";
$liste_4=$db->query($sql4);
$date=date("m-d-Y");
$sql5="SELECT sum(prix) as somme from commande,entete_commande where entete_commande.code_commande=commande.code_commande and date_format(entete_commande.date_c, '%m-%d-%Y')='$date'";
$liste_5=$db->query($sql5);

?>
<!doctype html>
<?php include_once "header.php"; ?>

        <!-- /.breadcrumbs-->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-cash"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php foreach($liste_1 as $row){echo $row['revenu'];}?></span>TND</div>
                                            <div class="stat-heading">Revenue</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-cart"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php foreach($liste_2 as $row1){echo $row1['com'];}?></span></div>
                                            <div class="stat-heading">Sales</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="pe-7s-browser"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php foreach($liste_3 as $row2){echo $row2['livr'];}?></span></div>
                                            <div class="stat-heading">Livraison</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php foreach($liste_4 as $row3){echo $row3['user'];}?></span></div>
                                            <div class="stat-heading">Clients</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Widgets -->
                <div class="row">
                  
                    <!--/.col-->

            
                    <!--/.col-->

                    <!--/.col-->

               
                    <!--/.col-->



                  

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-four">
                                    <div class="stat-icon dib">
                                        <i class="ti-stats-up text-muted"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-heading">Daily Sales</div>
                                            <div class="stat-text">Total:<?php foreach($liste_5 as $row4){echo $row4['somme'];}?>TND</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>






                                 </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .row -->
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Ela Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->
 
</body>
</html>

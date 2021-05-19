<?PHP
    include ("../core/reclamationOps.php");
    
    $db = config::getConnexion();
    $perpage=3;
    if(isset($_GET['page']))
    {
        $page=$_GET['page'];
    }else
    {
        $page=1;
    }
 
    if($page>1)
    {
        $start=($page*$perpage) - $perpage;
    }else
    {
        $start=0;
    }
    $menu=new reclamationOps();
    $liste=$menu->afficher_reclamation_b($start,$perpage);
    $sql_2="select count(code_rec) as nb from reclamation";
    $db = config::getConnexion();
    $count=$db->query($sql_2);
	
    
?>
<?php include_once "header.php"; ?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
 
<body>
    <!-- Left Panel -->
 

        <div class="content">
        <form enctype="multipart/form-data">
      
		<hr>
        


        
		<table class="table" border=1 align = 'center'>
        
			<tr>

				<th>code_rec </th>
				<th>descrip</th>
				<th>client id</th>
                


				
				


			</tr>

			<?PHP
            
				foreach($liste as $rec){

                

			?>
				<tr>
                
					<td><?PHP echo $rec['code_rec']; ?></td>
					<td><?PHP echo $rec['descrip']; ?></td>
                    <td><?PHP echo $rec['unique_id']; ?></td>
                  
                   


               

               
                 


				
				</tr>
             
			<?PHP
                    
				}
			?>
		</table>
        <?php
            foreach($count  as $c) {
              
           
            $halman=ceil(($c['nb']/$perpage)+1); 
           
            }
            for($i=1;$i<$halman;$i++)
            {
                echo "<a  href='?page=$i'>$i</a>";
            
            }
            
           ?> 
        </form>
</div><!-- .content -->
    <div class="clearfix"></div>

    <footer class="site-footer">
        <div class="footer-inner bg-white">
            <div class="row">
                <div class="col-sm-6">
                    Copyright &copy; 2018 Ela Admin
                </div>
                <div class="col-sm-6 text-right">
                    Designed by <a href="https://colorlib.com">Boubakri Chiheb</a>
                </div>
            </div>
        </div>
    </footer>


</div><!-- /#right-panel -->

<!-- Right Panel -->
 

<script>
    jQuery(document).ready(function() {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });
</script>

</body>
</html>

<?php
defined('APP_NAME') or die(header('HTTP/1.0 403 Forbidden'));

/*
 * @author Balaji
 * @name A to Z SEO Tools - PHP Script
 * @copyright � 2015 ProThemes.Biz
 *
 */
?>

 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?php echo $p_title; ?> 
            <small>Control panel</small>
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">
  <div class="row">
      	
          	<div class="col-md-8 main-index">
            
            <div class="xd_top_box">
             <?php echo $ads_720x90; ?>
            </div>
            
              	<h2 id="title"><?php echo $data['tool_name']; ?></h2>

                <?php if ($pointOut != 'output') { ?>
      
               <p><?php echo $lang['43']; ?>:
               </p>
               <form method="POST" action="<?php echo $toolOutputURL;?>" onsubmit="return fixData();"> 
               <textarea name="data" id="data" rows="3" style="height: 270px;" class="form-control"></textarea>
               <br />
               <?php
               if ($toolCap)
               {
               echo $captchaCode;   
               }
               ?>
               <input class="btn btn-info" type="submit" value="<?php echo $lang['8']; ?>" name="submit"/>
               </form>     
                          
               <?php 
               } else { 
               //Output Block
               if(isset($error)) {
                
                echo '<br/><br/><div class="alert alert-error">
                <strong>Alert!</strong> '.$error.'
                </div><br/><br/>
                <div class="text-center"><a class="btn btn-info" href="'.$toolURL.'">'.$lang['12'].'</a>
                </div><br/>';
                
               } else {
               ?>

    <br />
 
    <?php echo $lang['44']; ?> <br />
    <textarea id="textArea" rows="3" style="height: 270px;" class="form-control"><?php echo $out_data_e; ?></textarea>
    <?php echo $lang['45']; ?> <br />
    <textarea id="textArea" rows="3" style="height: 270px;" class="form-control"><?php echo $out_data_d; ?></textarea>

    <div class="text-center">
    <br /> &nbsp; <br />
    <a class="btn btn-info" href="<?php echo $toolURL; ?>"><?php echo $lang['9']; ?></a>
    <br />
    </div>

<?php } } ?>

<br />

<div class="xd_top_box">
<?php echo $ads_720x90; ?>
</div>

<h2 id="sec1" class="about_tool"><?php echo $lang['11'].' '.$data['tool_name']; ?></h2>
<p>
<?php echo $data['about_tool']; ?>
</p> <br />
</div>              
            
<?php
// Sidebar
require_once(THEME_DIR."sidebar.php");
?>     		
                        </div><!--row -->
      </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

   <br />
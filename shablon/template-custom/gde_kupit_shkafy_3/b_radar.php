<div class="b-radar">
   <!-- <div class="b-radar_bg" style="background: url(//<?php echo $_SERVER['SERVER_NAME']; ?>/city_include/<?php echo get_option('my_city_lat'); ?>/radar.jpg) no-repeat center center;">
        <div class="b-radar_active">
        </div>
    </div>-->
    <div class="b-radar_bg" style="background-image: url(//<?php echo $_SERVER['SERVER_NAME']; ?>/city_include/<?php if(empty(get_option('radar')) ){
                                                          echo "togliatti";
                                                      }
                                                      else{
                                                          echo get_option('radar'); 
                                                      } ?>.jpg) ;">
        <div class="b-radar_active">
        </div>
    </div>
</div>
<!-- /.b-radar -->
<style>
.b-radar .b-radar_bg{
    -webkit-transform: scale(0.65);
    transform: scale(0.65);
}
.b-radar {
    overflow: visible;
    margin: 83px auto;
}
</style>
   <div class="map-wrapper">
            <div id="BX_YMAP_officemap" class="bx-yandex-map" style="height: 450px; width: 100%;">
                <!--<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
                <script> ymapload(); </script>
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A9d14d9c0d85cd2824bd69ab278785152b2ea09dc993729b5997fc68b5b343978&amp;width=100%25&amp;height=600&amp;lang=ru_RU&amp;scroll=true"></script>
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4479205d5e764226147145b378f50e6974b70254dbd218544e85628c2f227534&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>-->

                <script type="text/javascript" charset="utf-8" async src="<?php if(empty(get_option('karta_adressa')) ){
                                                          echo "https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aaa79adbff6ced0cf42af767dee2ca88c5d15efa56e847bee29453066b4369072&width=100%&height=450&lang=ru_RU&scroll=true";
                                                      }
                                                      else{
                                                          echo get_option('karta_adressa'); 
                                                      } ?>"></script>
            </div>
        </div>
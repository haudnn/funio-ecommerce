<?php
  ob_start();
  include('config/db.php');
  if (!isset($_SESSION["login"])){
    header("Location: login.php");
  }

?>
<?php include('includes/header.php'); ?>
    <div class="content">
      <?php include('includes/navbar.php'); ?>
      <div class="content-main">
        <div class="content__header">
            <h3 class="content__title">Dashboard</h3>
            <div class="cotent__header-nav">
              <a href="index.php" class="content__header-nav-link">Funio / Dashboard</a>              
            </div>    
        </div>
        <div class="content__data">
          <div class="grid">
            <div class="row">
              <div class="col l-3">
                 <div class="data__wrapper">
                   <div class="data__statistical">
                     <div class="data__statistical-total">
                       <span class="data__statistical-numbers">
                       <?php                                          
                                $result=mysqli_query($conn,"SELECT count(prd_id) as total from product");
                                $data=mysqli_fetch_assoc($result);
                                echo $data['total']                          
                          ?>
                       </span>
                       <span class="data__statistical-text">Product</span>
                     </div>
                     <div class="data__statistical-icon">                   
                      <svg id="SvgjsSvg3243" width="70" height="40" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3245" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs3244"><linearGradient id="SvgjsLinearGradient3249" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop3250" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop3251" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop3252" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMask3hiide32"><rect id="SvgjsRect3255" width="74" height="40" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask3hiide32"></clipPath><clipPath id="nonForecastMask3hiide32"></clipPath><clipPath id="gridRectMarkerMask3hiide32"><rect id="SvgjsRect3256" width="74" height="44" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter3276" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feComponentTransfer id="SvgjsFeComponentTransfer3277" result="SvgjsFeComponentTransfer3277Out" in="SourceGraphic"><feFuncR id="SvgjsFeFuncR3278" type="linear" slope="0.5"></feFuncR><feFuncG id="SvgjsFeFuncG3279" type="linear" slope="0.5"></feFuncG><feFuncB id="SvgjsFeFuncB3280" type="linear" slope="0.5"></feFuncB><feFuncA id="SvgjsFeFuncA3281" type="identity"></feFuncA></feComponentTransfer></filter></defs><line id="SvgjsLine3254" x1="14.727281581271779" y1="0" x2="14.727281581271779" y2="40" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="14.727281581271779" y="0" width="1" height="40" fill="url(#SvgjsLinearGradient3249)" filter="none" fill-opacity="0.9" stroke-width="0"></line><g id="SvgjsG3290" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG3291" class="apexcharts-xaxis-texts-g" transform="translate(0, 2.75)"></g></g><g id="SvgjsG3304" class="apexcharts-grid"><g id="SvgjsG3305" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine3307" x1="0" y1="0" x2="70" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine3308" x1="0" y1="8" x2="70" y2="8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine3309" x1="0" y1="16" x2="70" y2="16" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine3310" x1="0" y1="24" x2="70" y2="24" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine3311" x1="0" y1="32" x2="70" y2="32" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine3312" x1="0" y1="40" x2="70" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG3306" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine3314" x1="0" y1="40" x2="70" y2="40" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine3313" x1="0" y1="1" x2="0" y2="40" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG3257" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG3258" class="apexcharts-series" rel="1" seriesName="seriesx1" data:realIndex="0"><path id="SvgjsPath3262" d="M 1.5909090909090908 40L 1.5909090909090908 30Q 1.5909090909090908 30 1.5909090909090908 30L 4.7727272727272725 30Q 4.7727272727272725 30 4.7727272727272725 30L 4.7727272727272725 30L 4.7727272727272725 40L 4.7727272727272725 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3hiide32)" pathTo="M 1.5909090909090908 40L 1.5909090909090908 30Q 1.5909090909090908 30 1.5909090909090908 30L 4.7727272727272725 30Q 4.7727272727272725 30 4.7727272727272725 30L 4.7727272727272725 30L 4.7727272727272725 40L 4.7727272727272725 40z" pathFrom="M 1.5909090909090908 40L 1.5909090909090908 40L 4.7727272727272725 40L 4.7727272727272725 40L 4.7727272727272725 40L 4.7727272727272725 40L 4.7727272727272725 40L 1.5909090909090908 40" cy="30" cx="7.954545454545454" j="0" val="25" barHeight="10" barWidth="3.1818181818181817"></path><path id="SvgjsPath3264" d="M 7.954545454545454 40L 7.954545454545454 13.600000000000001Q 7.954545454545454 13.600000000000001 7.954545454545454 13.600000000000001L 11.136363636363637 13.600000000000001Q 11.136363636363637 13.600000000000001 11.136363636363637 13.600000000000001L 11.136363636363637 13.600000000000001L 11.136363636363637 40L 11.136363636363637 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3hiide32)" pathTo="M 7.954545454545454 40L 7.954545454545454 13.600000000000001Q 7.954545454545454 13.600000000000001 7.954545454545454 13.600000000000001L 11.136363636363637 13.600000000000001Q 11.136363636363637 13.600000000000001 11.136363636363637 13.600000000000001L 11.136363636363637 13.600000000000001L 11.136363636363637 40L 11.136363636363637 40z" pathFrom="M 7.954545454545454 40L 7.954545454545454 40L 11.136363636363637 40L 11.136363636363637 40L 11.136363636363637 40L 11.136363636363637 40L 11.136363636363637 40L 7.954545454545454 40" cy="13.600000000000001" cx="14.318181818181817" j="1" val="66" barHeight="26.4" barWidth="3.1818181818181817"></path><path id="SvgjsPath3266" d="M 14.318181818181817 40L 14.318181818181817 23.6Q 14.318181818181817 23.6 14.318181818181817 23.6L 17.5 23.6Q 17.5 23.6 17.5 23.6L 17.5 23.6L 17.5 40L 17.5 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3hiide32)" pathTo="M 14.318181818181817 40L 14.318181818181817 23.6Q 14.318181818181817 23.6 14.318181818181817 23.6L 17.5 23.6Q 17.5 23.6 17.5 23.6L 17.5 23.6L 17.5 40L 17.5 40z" pathFrom="M 14.318181818181817 40L 14.318181818181817 40L 17.5 40L 17.5 40L 17.5 40L 17.5 40L 17.5 40L 14.318181818181817 40" cy="23.6" cx="20.68181818181818" j="2" val="41" barHeight="16.4" barWidth="3.1818181818181817"></path><path id="SvgjsPath3268" d="M 20.68181818181818 40L 20.68181818181818 4.399999999999999Q 20.68181818181818 4.399999999999999 20.68181818181818 4.399999999999999L 23.86363636363636 4.399999999999999Q 23.86363636363636 4.399999999999999 23.86363636363636 4.399999999999999L 23.86363636363636 4.399999999999999L 23.86363636363636 40L 23.86363636363636 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3hiide32)" pathTo="M 20.68181818181818 40L 20.68181818181818 4.399999999999999Q 20.68181818181818 4.399999999999999 20.68181818181818 4.399999999999999L 23.86363636363636 4.399999999999999Q 23.86363636363636 4.399999999999999 23.86363636363636 4.399999999999999L 23.86363636363636 4.399999999999999L 23.86363636363636 40L 23.86363636363636 40z" pathFrom="M 20.68181818181818 40L 20.68181818181818 40L 23.86363636363636 40L 23.86363636363636 40L 23.86363636363636 40L 23.86363636363636 40L 23.86363636363636 40L 20.68181818181818 40" cy="4.399999999999999" cx="27.045454545454543" j="3" val="89" barHeight="35.6" barWidth="3.1818181818181817"></path><path id="SvgjsPath3270" d="M 27.045454545454543 40L 27.045454545454543 14.8Q 27.045454545454543 14.8 27.045454545454543 14.8L 30.227272727272727 14.8Q 30.227272727272727 14.8 30.227272727272727 14.8L 30.227272727272727 14.8L 30.227272727272727 40L 30.227272727272727 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3hiide32)" pathTo="M 27.045454545454543 40L 27.045454545454543 14.8Q 27.045454545454543 14.8 27.045454545454543 14.8L 30.227272727272727 14.8Q 30.227272727272727 14.8 30.227272727272727 14.8L 30.227272727272727 14.8L 30.227272727272727 40L 30.227272727272727 40z" pathFrom="M 27.045454545454543 40L 27.045454545454543 40L 30.227272727272727 40L 30.227272727272727 40L 30.227272727272727 40L 30.227272727272727 40L 30.227272727272727 40L 27.045454545454543 40" cy="14.8" cx="33.40909090909091" j="4" val="63" barHeight="25.2" barWidth="3.1818181818181817"></path><path id="SvgjsPath3272" d="M 33.40909090909091 40L 33.40909090909091 30Q 33.40909090909091 30 33.40909090909091 30L 36.590909090909086 30Q 36.590909090909086 30 36.590909090909086 30L 36.590909090909086 30L 36.590909090909086 40L 36.590909090909086 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3hiide32)" pathTo="M 33.40909090909091 40L 33.40909090909091 30Q 33.40909090909091 30 33.40909090909091 30L 36.590909090909086 30Q 36.590909090909086 30 36.590909090909086 30L 36.590909090909086 30L 36.590909090909086 40L 36.590909090909086 40z" pathFrom="M 33.40909090909091 40L 33.40909090909091 40L 36.590909090909086 40L 36.590909090909086 40L 36.590909090909086 40L 36.590909090909086 40L 36.590909090909086 40L 33.40909090909091 40" cy="30" cx="39.772727272727266" j="5" val="25" barHeight="10" barWidth="3.1818181818181817"></path><path id="SvgjsPath3274" d="M 39.772727272727266 40L 39.772727272727266 22.4Q 39.772727272727266 22.4 39.772727272727266 22.4L 42.954545454545446 22.4Q 42.954545454545446 22.4 42.954545454545446 22.4L 42.954545454545446 22.4L 42.954545454545446 40L 42.954545454545446 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3hiide32)" pathTo="M 39.772727272727266 40L 39.772727272727266 22.4Q 39.772727272727266 22.4 39.772727272727266 22.4L 42.954545454545446 22.4Q 42.954545454545446 22.4 42.954545454545446 22.4L 42.954545454545446 22.4L 42.954545454545446 40L 42.954545454545446 40z" pathFrom="M 39.772727272727266 40L 39.772727272727266 40L 42.954545454545446 40L 42.954545454545446 40L 42.954545454545446 40L 42.954545454545446 40L 42.954545454545446 40L 39.772727272727266 40" selected="true" filter="url(#SvgjsFilter3276)" cy="22.4" cx="46.136363636363626" j="6" val="44" barHeight="17.6" barWidth="3.1818181818181817"></path><path id="SvgjsPath3283" d="M 46.136363636363626 40L 46.136363636363626 32Q 46.136363636363626 32 46.136363636363626 32L 49.318181818181806 32Q 49.318181818181806 32 49.318181818181806 32L 49.318181818181806 32L 49.318181818181806 40L 49.318181818181806 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3hiide32)" pathTo="M 46.136363636363626 40L 46.136363636363626 32Q 46.136363636363626 32 46.136363636363626 32L 49.318181818181806 32Q 49.318181818181806 32 49.318181818181806 32L 49.318181818181806 32L 49.318181818181806 40L 49.318181818181806 40z" pathFrom="M 46.136363636363626 40L 46.136363636363626 40L 49.318181818181806 40L 49.318181818181806 40L 49.318181818181806 40L 49.318181818181806 40L 49.318181818181806 40L 46.136363636363626 40" cy="32" cx="52.499999999999986" j="7" val="20" barHeight="8" barWidth="3.1818181818181817"></path><path id="SvgjsPath3285" d="M 52.499999999999986 40L 52.499999999999986 25.6Q 52.499999999999986 25.6 52.499999999999986 25.6L 55.681818181818166 25.6Q 55.681818181818166 25.6 55.681818181818166 25.6L 55.681818181818166 25.6L 55.681818181818166 40L 55.681818181818166 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3hiide32)" pathTo="M 52.499999999999986 40L 52.499999999999986 25.6Q 52.499999999999986 25.6 52.499999999999986 25.6L 55.681818181818166 25.6Q 55.681818181818166 25.6 55.681818181818166 25.6L 55.681818181818166 25.6L 55.681818181818166 40L 55.681818181818166 40z" pathFrom="M 52.499999999999986 40L 52.499999999999986 40L 55.681818181818166 40L 55.681818181818166 40L 55.681818181818166 40L 55.681818181818166 40L 55.681818181818166 40L 52.499999999999986 40" cy="25.6" cx="58.863636363636346" j="8" val="36" barHeight="14.4" barWidth="3.1818181818181817"></path><path id="SvgjsPath3287" d="M 58.863636363636346 40L 58.863636363636346 24Q 58.863636363636346 24 58.863636363636346 24L 62.045454545454525 24Q 62.045454545454525 24 62.045454545454525 24L 62.045454545454525 24L 62.045454545454525 40L 62.045454545454525 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3hiide32)" pathTo="M 58.863636363636346 40L 58.863636363636346 24Q 58.863636363636346 24 58.863636363636346 24L 62.045454545454525 24Q 62.045454545454525 24 62.045454545454525 24L 62.045454545454525 24L 62.045454545454525 40L 62.045454545454525 40z" pathFrom="M 58.863636363636346 40L 58.863636363636346 40L 62.045454545454525 40L 62.045454545454525 40L 62.045454545454525 40L 62.045454545454525 40L 62.045454545454525 40L 58.863636363636346 40" cy="24" cx="65.2272727272727" j="9" val="40" barHeight="16" barWidth="3.1818181818181817"></path><path id="SvgjsPath3289" d="M 65.2272727272727 40L 65.2272727272727 18.4Q 65.2272727272727 18.4 65.2272727272727 18.4L 68.40909090909089 18.4Q 68.40909090909089 18.4 68.40909090909089 18.4L 68.40909090909089 18.4L 68.40909090909089 40L 68.40909090909089 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3hiide32)" pathTo="M 65.2272727272727 40L 65.2272727272727 18.4Q 65.2272727272727 18.4 65.2272727272727 18.4L 68.40909090909089 18.4Q 68.40909090909089 18.4 68.40909090909089 18.4L 68.40909090909089 18.4L 68.40909090909089 40L 68.40909090909089 40z" pathFrom="M 65.2272727272727 40L 65.2272727272727 40L 68.40909090909089 40L 68.40909090909089 40L 68.40909090909089 40L 68.40909090909089 40L 68.40909090909089 40L 65.2272727272727 40" cy="18.4" cx="71.59090909090907" j="10" val="54" barHeight="21.6" barWidth="3.1818181818181817"></path><g id="SvgjsG3260" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG3261" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG3263" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG3265" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG3267" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG3269" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG3271" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG3273" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG3282" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG3284" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG3286" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG3288" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG3259" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine3315" x1="0" y1="0" x2="70" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3316" x1="0" y1="0" x2="70" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3317" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3318" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3319" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect3253" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG3303" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG3246" class="apexcharts-annotations"></g></svg>
                     </div>
                   </div>
                   <div class="data__time">
                     <i class="data__time-text fas fa-arrow-up"></i>
                     <span class="data__time-text">2.65%</span>
                     <span class="data__time-text details">since last week</span>
                   </div>
                 </div>
              </div>
              <div class="col l-3">
                 <div class="data__wrapper">
                   <div class="data__statistical">
                     <div class="data__statistical-total">
                       <span class="data__statistical-numbers">
                        <?php                                          
                                $result=mysqli_query($conn,"SELECT count( purchase_id) as total from purchase ");
                                $data=mysqli_fetch_assoc($result);
                                echo $data['total']                          
                          ?>
                       </span>
                       <span class="data__statistical-text">Orders</span>
                     </div>
                     <div class="data__statistical-icon">                   
                     <svg id="SvgjsSvg4868" width="45" height="46" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG4870" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs4869"><clipPath id="gridRectMaskcoeri1j2"><rect id="SvgjsRect4872" width="51" height="47" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskcoeri1j2"></clipPath><clipPath id="nonForecastMaskcoeri1j2"></clipPath><clipPath id="gridRectMarkerMaskcoeri1j2"><rect id="SvgjsRect4873" width="49" height="49" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG4874" class="apexcharts-radialbar"><g id="SvgjsG4875"><g id="SvgjsG4876" class="apexcharts-tracks"><g id="SvgjsG4877" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 22.497318152626402 7.134146575498747" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="4.258536585365854" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 22.497318152626402 7.134146575498747"></path></g></g><g id="SvgjsG4879"><g id="SvgjsG4881" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath4882" d="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 7.886204749611055 27.248309913566267" fill="none" fill-opacity="0.85" stroke="rgba(52,195,143,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="4.390243902439025" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="252" data:value="70" index="0" j="0" data:pathOrig="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 7.886204749611055 27.248309913566267"></path></g><circle id="SvgjsCircle4880" r="13.23658536585366" cx="22.5" cy="22.5" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g></g><line id="SvgjsLine4883" x1="0" y1="0" x2="45" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine4884" x1="0" y1="0" x2="45" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG4871" class="apexcharts-annotations"></g></svg>
                     </div>
                   </div>
                   <div class="data__time">
                     <i class="data__time-text icon-red fas fa-arrow-down"></i>
                     <span class="data__time-text">0.82%</span>
                     <span class="data__time-text details">since last week</span>
                   </div>
                 </div>
              </div>
              <div class="col l-3">
                 <div class="data__wrapper">
                   <div class="data__statistical">
                     <div class="data__statistical-total">
                       <span class="data__statistical-numbers">
                       <?php                                          
                                $result=mysqli_query($conn,"SELECT count(cat_id) as total from category");
                                $data=mysqli_fetch_assoc($result);
                                echo $data['total']                          
                          ?>
                       </span>
                       <span class="data__statistical-text">Category</span>
                     </div>
                     <div class="data__statistical-icon">                   
                        <svg id="SvgjsSvg5657" width="45" height="46" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG5659" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs5658"><clipPath id="gridRectMaskdfjc32ex"><rect id="SvgjsRect5661" width="51" height="47" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskdfjc32ex"></clipPath><clipPath id="nonForecastMaskdfjc32ex"></clipPath><clipPath id="gridRectMarkerMaskdfjc32ex"><rect id="SvgjsRect5662" width="49" height="49" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG5663" class="apexcharts-radialbar"><g id="SvgjsG5664"><g id="SvgjsG5665" class="apexcharts-tracks"><g id="SvgjsG5666" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 22.497318152626402 7.134146575498747" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="4.258536585365854" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 22.497318152626402 7.134146575498747"></path></g></g><g id="SvgjsG5668"><g id="SvgjsG5670" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath5671" d="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 17.751690086433737 37.11379525038895" fill="none" fill-opacity="0.85" stroke="rgba(91,115,232,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="4.390243902439025" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="198" data:value="55" index="0" j="0" data:pathOrig="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 17.751690086433737 37.11379525038895"></path></g><circle id="SvgjsCircle5669" r="13.23658536585366" cx="22.5" cy="22.5" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g></g><line id="SvgjsLine5672" x1="0" y1="0" x2="45" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine5673" x1="0" y1="0" x2="45" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG5660" class="apexcharts-annotations"></g></svg>
                     </div>
                   </div>
                   <div class="data__time">
                     <i class="data__time-text icon-red fas fa-arrow-down"></i>
                     <span class="data__time-text">6.24%</span>
                     <span class="data__time-text details">since last week</span>
                   </div>
                 </div>
              </div>
              <div class="col l-3">
                 <div class="data__wrapper">
                   <div class="data__statistical">
                     <div class="data__statistical-total">
                       <span class="data__statistical-numbers">
                        <?php                                          
                                $result=mysqli_query($conn,"SELECT count(user_id ) as total from user");
                                $data=mysqli_fetch_assoc($result);
                                echo $data['total']                          
                          ?>
                       </span>
                       <span class="data__statistical-text">User</span>
                     </div>
                     <div class="data__statistical-icon">                   
                        <svg id="SvgjsSvg5674" width="70" height="40" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG5676" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs5675"><linearGradient id="SvgjsLinearGradient5680" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop5681" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop5682" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop5683" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaski43ezg4b"><rect id="SvgjsRect5686" width="74" height="40" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaski43ezg4b"></clipPath><clipPath id="nonForecastMaski43ezg4b"></clipPath><clipPath id="gridRectMarkerMaski43ezg4b"><rect id="SvgjsRect5687" width="74" height="44" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter5925" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feComponentTransfer id="SvgjsFeComponentTransfer5926" result="SvgjsFeComponentTransfer5926Out" in="SourceGraphic"><feFuncR id="SvgjsFeFuncR5927" type="linear" slope="0.5"></feFuncR><feFuncG id="SvgjsFeFuncG5928" type="linear" slope="0.5"></feFuncG><feFuncB id="SvgjsFeFuncB5929" type="linear" slope="0.5"></feFuncB><feFuncA id="SvgjsFeFuncA5930" type="identity"></feFuncA></feComponentTransfer></filter></defs><line id="SvgjsLine5685" x1="40.72728158127178" y1="0" x2="40.72728158127178" y2="40" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="40.72728158127178" y="0" width="1" height="40" fill="url(#SvgjsLinearGradient5680)" filter="none" fill-opacity="0.9" stroke-width="0"></line><g id="SvgjsG5714" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG5715" class="apexcharts-xaxis-texts-g" transform="translate(0, 2.75)"></g></g><g id="SvgjsG5728" class="apexcharts-grid"><g id="SvgjsG5729" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine5731" x1="0" y1="0" x2="70" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine5732" x1="0" y1="8" x2="70" y2="8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine5733" x1="0" y1="16" x2="70" y2="16" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine5734" x1="0" y1="24" x2="70" y2="24" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine5735" x1="0" y1="32" x2="70" y2="32" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine5736" x1="0" y1="40" x2="70" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG5730" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine5738" x1="0" y1="40" x2="70" y2="40" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine5737" x1="0" y1="1" x2="0" y2="40" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG5688" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG5689" class="apexcharts-series" rel="1" seriesName="seriesx1" data:realIndex="0"><path id="SvgjsPath5693" d="M 1.5909090909090908 40L 1.5909090909090908 30Q 1.5909090909090908 30 1.5909090909090908 30L 4.7727272727272725 30Q 4.7727272727272725 30 4.7727272727272725 30L 4.7727272727272725 30L 4.7727272727272725 40L 4.7727272727272725 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski43ezg4b)" pathTo="M 1.5909090909090908 40L 1.5909090909090908 30Q 1.5909090909090908 30 1.5909090909090908 30L 4.7727272727272725 30Q 4.7727272727272725 30 4.7727272727272725 30L 4.7727272727272725 30L 4.7727272727272725 40L 4.7727272727272725 40z" pathFrom="M 1.5909090909090908 40L 1.5909090909090908 40L 4.7727272727272725 40L 4.7727272727272725 40L 4.7727272727272725 40L 4.7727272727272725 40L 4.7727272727272725 40L 1.5909090909090908 40" cy="30" cx="7.954545454545454" j="0" val="25" barHeight="10" barWidth="3.1818181818181817"></path><path id="SvgjsPath5695" d="M 7.954545454545454 40L 7.954545454545454 13.600000000000001Q 7.954545454545454 13.600000000000001 7.954545454545454 13.600000000000001L 11.136363636363637 13.600000000000001Q 11.136363636363637 13.600000000000001 11.136363636363637 13.600000000000001L 11.136363636363637 13.600000000000001L 11.136363636363637 40L 11.136363636363637 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski43ezg4b)" pathTo="M 7.954545454545454 40L 7.954545454545454 13.600000000000001Q 7.954545454545454 13.600000000000001 7.954545454545454 13.600000000000001L 11.136363636363637 13.600000000000001Q 11.136363636363637 13.600000000000001 11.136363636363637 13.600000000000001L 11.136363636363637 13.600000000000001L 11.136363636363637 40L 11.136363636363637 40z" pathFrom="M 7.954545454545454 40L 7.954545454545454 40L 11.136363636363637 40L 11.136363636363637 40L 11.136363636363637 40L 11.136363636363637 40L 11.136363636363637 40L 7.954545454545454 40" cy="13.600000000000001" cx="14.318181818181817" j="1" val="66" barHeight="26.4" barWidth="3.1818181818181817"></path><path id="SvgjsPath5697" d="M 14.318181818181817 40L 14.318181818181817 23.6Q 14.318181818181817 23.6 14.318181818181817 23.6L 17.5 23.6Q 17.5 23.6 17.5 23.6L 17.5 23.6L 17.5 40L 17.5 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski43ezg4b)" pathTo="M 14.318181818181817 40L 14.318181818181817 23.6Q 14.318181818181817 23.6 14.318181818181817 23.6L 17.5 23.6Q 17.5 23.6 17.5 23.6L 17.5 23.6L 17.5 40L 17.5 40z" pathFrom="M 14.318181818181817 40L 14.318181818181817 40L 17.5 40L 17.5 40L 17.5 40L 17.5 40L 17.5 40L 14.318181818181817 40" cy="23.6" cx="20.68181818181818" j="2" val="41" barHeight="16.4" barWidth="3.1818181818181817"></path><path id="SvgjsPath5699" d="M 20.68181818181818 40L 20.68181818181818 4.399999999999999Q 20.68181818181818 4.399999999999999 20.68181818181818 4.399999999999999L 23.86363636363636 4.399999999999999Q 23.86363636363636 4.399999999999999 23.86363636363636 4.399999999999999L 23.86363636363636 4.399999999999999L 23.86363636363636 40L 23.86363636363636 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski43ezg4b)" pathTo="M 20.68181818181818 40L 20.68181818181818 4.399999999999999Q 20.68181818181818 4.399999999999999 20.68181818181818 4.399999999999999L 23.86363636363636 4.399999999999999Q 23.86363636363636 4.399999999999999 23.86363636363636 4.399999999999999L 23.86363636363636 4.399999999999999L 23.86363636363636 40L 23.86363636363636 40z" pathFrom="M 20.68181818181818 40L 20.68181818181818 40L 23.86363636363636 40L 23.86363636363636 40L 23.86363636363636 40L 23.86363636363636 40L 23.86363636363636 40L 20.68181818181818 40" cy="4.399999999999999" cx="27.045454545454543" j="3" val="89" barHeight="35.6" barWidth="3.1818181818181817"></path><path id="SvgjsPath5701" d="M 27.045454545454543 40L 27.045454545454543 14.8Q 27.045454545454543 14.8 27.045454545454543 14.8L 30.227272727272727 14.8Q 30.227272727272727 14.8 30.227272727272727 14.8L 30.227272727272727 14.8L 30.227272727272727 40L 30.227272727272727 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski43ezg4b)" pathTo="M 27.045454545454543 40L 27.045454545454543 14.8Q 27.045454545454543 14.8 27.045454545454543 14.8L 30.227272727272727 14.8Q 30.227272727272727 14.8 30.227272727272727 14.8L 30.227272727272727 14.8L 30.227272727272727 40L 30.227272727272727 40z" pathFrom="M 27.045454545454543 40L 27.045454545454543 40L 30.227272727272727 40L 30.227272727272727 40L 30.227272727272727 40L 30.227272727272727 40L 30.227272727272727 40L 27.045454545454543 40" cy="14.8" cx="33.40909090909091" j="4" val="63" barHeight="25.2" barWidth="3.1818181818181817" selected="true" filter="url(#SvgjsFilter5925)"></path><path id="SvgjsPath5703" d="M 33.40909090909091 40L 33.40909090909091 30Q 33.40909090909091 30 33.40909090909091 30L 36.590909090909086 30Q 36.590909090909086 30 36.590909090909086 30L 36.590909090909086 30L 36.590909090909086 40L 36.590909090909086 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski43ezg4b)" pathTo="M 33.40909090909091 40L 33.40909090909091 30Q 33.40909090909091 30 33.40909090909091 30L 36.590909090909086 30Q 36.590909090909086 30 36.590909090909086 30L 36.590909090909086 30L 36.590909090909086 40L 36.590909090909086 40z" pathFrom="M 33.40909090909091 40L 33.40909090909091 40L 36.590909090909086 40L 36.590909090909086 40L 36.590909090909086 40L 36.590909090909086 40L 36.590909090909086 40L 33.40909090909091 40" cy="30" cx="39.772727272727266" j="5" val="25" barHeight="10" barWidth="3.1818181818181817"></path><path id="SvgjsPath5705" d="M 39.772727272727266 40L 39.772727272727266 22.4Q 39.772727272727266 22.4 39.772727272727266 22.4L 42.954545454545446 22.4Q 42.954545454545446 22.4 42.954545454545446 22.4L 42.954545454545446 22.4L 42.954545454545446 40L 42.954545454545446 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski43ezg4b)" pathTo="M 39.772727272727266 40L 39.772727272727266 22.4Q 39.772727272727266 22.4 39.772727272727266 22.4L 42.954545454545446 22.4Q 42.954545454545446 22.4 42.954545454545446 22.4L 42.954545454545446 22.4L 42.954545454545446 40L 42.954545454545446 40z" pathFrom="M 39.772727272727266 40L 39.772727272727266 40L 42.954545454545446 40L 42.954545454545446 40L 42.954545454545446 40L 42.954545454545446 40L 42.954545454545446 40L 39.772727272727266 40" cy="22.4" cx="46.136363636363626" j="6" val="44" barHeight="17.6" barWidth="3.1818181818181817"></path><path id="SvgjsPath5707" d="M 46.136363636363626 40L 46.136363636363626 35.2Q 46.136363636363626 35.2 46.136363636363626 35.2L 49.318181818181806 35.2Q 49.318181818181806 35.2 49.318181818181806 35.2L 49.318181818181806 35.2L 49.318181818181806 40L 49.318181818181806 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski43ezg4b)" pathTo="M 46.136363636363626 40L 46.136363636363626 35.2Q 46.136363636363626 35.2 46.136363636363626 35.2L 49.318181818181806 35.2Q 49.318181818181806 35.2 49.318181818181806 35.2L 49.318181818181806 35.2L 49.318181818181806 40L 49.318181818181806 40z" pathFrom="M 46.136363636363626 40L 46.136363636363626 40L 49.318181818181806 40L 49.318181818181806 40L 49.318181818181806 40L 49.318181818181806 40L 49.318181818181806 40L 46.136363636363626 40" cy="35.2" cx="52.499999999999986" j="7" val="12" barHeight="4.8" barWidth="3.1818181818181817"></path><path id="SvgjsPath5709" d="M 52.499999999999986 40L 52.499999999999986 25.6Q 52.499999999999986 25.6 52.499999999999986 25.6L 55.681818181818166 25.6Q 55.681818181818166 25.6 55.681818181818166 25.6L 55.681818181818166 25.6L 55.681818181818166 40L 55.681818181818166 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski43ezg4b)" pathTo="M 52.499999999999986 40L 52.499999999999986 25.6Q 52.499999999999986 25.6 52.499999999999986 25.6L 55.681818181818166 25.6Q 55.681818181818166 25.6 55.681818181818166 25.6L 55.681818181818166 25.6L 55.681818181818166 40L 55.681818181818166 40z" pathFrom="M 52.499999999999986 40L 52.499999999999986 40L 55.681818181818166 40L 55.681818181818166 40L 55.681818181818166 40L 55.681818181818166 40L 55.681818181818166 40L 52.499999999999986 40" cy="25.6" cx="58.863636363636346" j="8" val="36" barHeight="14.4" barWidth="3.1818181818181817"></path><path id="SvgjsPath5711" d="M 58.863636363636346 40L 58.863636363636346 36.4Q 58.863636363636346 36.4 58.863636363636346 36.4L 62.045454545454525 36.4Q 62.045454545454525 36.4 62.045454545454525 36.4L 62.045454545454525 36.4L 62.045454545454525 40L 62.045454545454525 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski43ezg4b)" pathTo="M 58.863636363636346 40L 58.863636363636346 36.4Q 58.863636363636346 36.4 58.863636363636346 36.4L 62.045454545454525 36.4Q 62.045454545454525 36.4 62.045454545454525 36.4L 62.045454545454525 36.4L 62.045454545454525 40L 62.045454545454525 40z" pathFrom="M 58.863636363636346 40L 58.863636363636346 40L 62.045454545454525 40L 62.045454545454525 40L 62.045454545454525 40L 62.045454545454525 40L 62.045454545454525 40L 58.863636363636346 40" cy="36.4" cx="65.2272727272727" j="9" val="9" barHeight="3.6" barWidth="3.1818181818181817"></path><path id="SvgjsPath5713" d="M 65.2272727272727 40L 65.2272727272727 18.4Q 65.2272727272727 18.4 65.2272727272727 18.4L 68.40909090909089 18.4Q 68.40909090909089 18.4 68.40909090909089 18.4L 68.40909090909089 18.4L 68.40909090909089 40L 68.40909090909089 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaski43ezg4b)" pathTo="M 65.2272727272727 40L 65.2272727272727 18.4Q 65.2272727272727 18.4 65.2272727272727 18.4L 68.40909090909089 18.4Q 68.40909090909089 18.4 68.40909090909089 18.4L 68.40909090909089 18.4L 68.40909090909089 40L 68.40909090909089 40z" pathFrom="M 65.2272727272727 40L 65.2272727272727 40L 68.40909090909089 40L 68.40909090909089 40L 68.40909090909089 40L 68.40909090909089 40L 68.40909090909089 40L 65.2272727272727 40" cy="18.4" cx="71.59090909090907" j="10" val="54" barHeight="21.6" barWidth="3.1818181818181817"></path><g id="SvgjsG5691" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG5692" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG5694" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG5696" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG5698" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG5700" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG5702" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG5704" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG5706" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG5708" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG5710" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG5712" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG5690" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine5739" x1="0" y1="0" x2="70" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine5740" x1="0" y1="0" x2="70" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG5741" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG5742" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG5743" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect5684" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG5727" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG5677" class="apexcharts-annotations"></g></svg>
                     </div>
                   </div>
                   <div class="data__time">
                     <i class="data__time-text fas fa-arrow-up"></i>
                     <span class="data__time-text">10.51%</span>
                     <span class="data__time-text details">since last week</span>
                   </div>
                 </div>
              </div>
            </div>
          </div>
        </div>
        <div class="content__chart">
          <div class="grid">
            <div class="row">
              <div class="col l-8">
                <canvas id="chart"></canvas>
              </div>
              <div class="col l-4">
                <div class="content__selling">
                  <h3 class="content__selling-header">Top Sellling Category</h3>
                  <div class="content__selling-product">
                    <div class="grid">
                      <div class="row align-items-center">
                        <div class="col l-4">
                          <div class="content__selling-product-details">
                            <i class="content__selling-icon fas fa-circle"></i>
                            <span class="content__selling-product-name">Armchairs</span>
                          </div>
                        </div>
                        <div class="col l-8">
                          <div class="progress-sm progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="52" aria-valuemin="0"aria-valuemax="100" style="width: 52%;">
                            </div>
                          </div>
                        </div>
                      </div>                    
                    </div>
                  </div>
                  <div class="content__selling-product">
                    <div class="grid">
                      <div class="row align-items-center">
                      <div class="col l-4">
                        <div class="content__selling-product-details">
                          <i class="content__selling-icon fas fa-circle"></i>
                          <span class="content__selling-product-name" >Bath Room</span>
                        </div>
                      </div>
                      <div class="col l-8">
                        <div class="progress-sm progress">
                          <div class="progress-bar bg-info" role="progressbar" aria-valuenow="52" aria-valuemin="0"aria-valuemax="100" style="width: 45%;">
                          </div>
                        </div>
                      </div>
                      </div>                    
                    </div>
                  </div>
                  <div class="content__selling-product">
                    <div class="grid">
                      <div class="row align-items-center">
                      <div class="col l-4">
                        <div class="content__selling-product-details">
                          <i class="content__selling-icon fas fa-circle"></i>
                          <span class="content__selling-product-name" >Office</span>
                        </div>
                      </div>
                      <div class="col l-8">
                        <div class="progress-sm progress">
                          <div class="progress-bar bg-success" role="progressbar" aria-valuenow="52" aria-valuemin="0"aria-valuemax="100" style="width: 48%;">
                          </div>
                        </div>
                      </div>
                      </div>                    
                    </div>
                  </div>
                  <div class="content__selling-product">
                    <div class="grid">
                      <div class="row align-items-center">
                      <div class="col l-4">
                        <div class="content__selling-product-details">
                          <i class="content__selling-icon fas fa-circle"></i>
                          <span class="content__selling-product-name" >Seating</span>
                        </div>
                      </div>
                      <div class="col l-8">
                        <div class="progress-sm progress">
                          <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="52" aria-valuemin="0"aria-valuemax="100" style="width: 78%;">
                          </div>
                        </div>
                      </div>
                      </div>                    
                    </div>
                  </div>
                  <div class="content__selling-product">
                    <div class="grid">
                      <div class="row align-items-center">
                      <div class="col l-4">
                        <div class="content__selling-product-details">
                          <i class="content__selling-icon fas fa-circle"></i>
                          <span class="content__selling-product-name" >Sofas</span>
                        </div>
                      </div>
                      <div class="col l-8">
                        <div class="progress-sm progress">
                          <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="52" aria-valuemin="0"aria-valuemax="100" style="width: 63%;">
                          </div>
                        </div>
                      </div>
                      </div>                    
                    </div>
                  </div>
                  <div class="content__selling-product">
                    <div class="grid">
                      <div class="row align-items-center">
                      <div class="col l-4">
                        <div class="content__selling-product-details">
                          <i class="content__selling-icon fas fa-circle"></i>
                          <span class="content__selling-product-name" >Special</span>
                        </div>
                      </div>
                      <div class="col l-8">
                        <div class="progress-sm progress">
                          <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="52" aria-valuemin="0"aria-valuemax="100" style="width: 52%;">
                          </div>
                        </div>
                      </div>
                      </div>                    
                    </div>
                  </div>
                  <div class="content__selling-product">
                    <div class="grid">
                      <div class="row align-items-center">
                      <div class="col l-4 ">
                        <div class="content__selling-product-details">
                          <i class="content__selling-icon fas fa-circle"></i>
                          <span class="content__selling-product-name" >Tables</span>
                        </div>
                      </div>
                      <div class="col l-8">
                        <div class="progress-sm progress">
                          <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="52" aria-valuemin="0"aria-valuemax="100" style="width: 52%;">
                          </div>
                        </div>
                      </div>
                      </div>                    
                    </div>
                  </div>
                  <div class="content__selling-product">
                    <div class="grid">
                      <div class="row align-items-center">
                      <div class="col l-4 ">
                        <div class="content__selling-product-details">
                          <i class="content__selling-icon fas fa-circle"></i>
                          <span class="content__selling-product-name" >Dining Chairs</span>
                        </div>
                      </div>
                      <div class="col l-8">
                        <div class="progress-sm progress">
                          <div class="progress-bar bg-info" role="progressbar" aria-valuenow="52" aria-valuemin="0"aria-valuemax="100" style="width: 32%;">
                          </div>
                        </div>
                      </div>
                      </div>                    
                    </div>
                  </div>
                  <div class="content__selling-product">
                    <div class="grid">
                      <div class="row align-items-center">
                      <div class="col l-4 ">
                        <div class="content__selling-product-details">
                          <i class="content__selling-icon fas fa-circle"></i>
                          <span class="content__selling-product-name" >Dining Tables</span>
                        </div>
                      </div>
                      <div class="col l-8">
                        <div class="progress-sm progress">
                          <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="52" aria-valuemin="0"aria-valuemax="100" style="width: 72%;">
                          </div>
                        </div>
                      </div>
                      </div>                    
                    </div>
                  </div>
                  <div class="content__selling-product">
                    <div class="grid">
                      <div class="row align-items-center">
                      <div class="col l-4 ">
                        <div class="content__selling-product-details">
                          <i class="content__selling-icon fas fa-circle"></i>
                          <span class="content__selling-product-name" >Lightings</span>
                        </div>
                      </div>
                      <div class="col l-8">
                        <div class="progress-sm progress">
                          <div class="progress-bar bg-success" role="progressbar" aria-valuenow="52" aria-valuemin="0"aria-valuemax="100" style="width: 90%;">
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
        </div>
        <div class="content__information">
          <div class="grid">
            <div class="row">
              <div class="col l-4">
                <div class="content__information-user" id="scroll">
                  <h3 class="content__information-heading">Top Users</h3>
                  <div class="table-responsive">
                      <table class="table-borderless table-centered table-nowrap table">
                        <tbody>
                          <tr>
                            <td>
                              <img src="./upload/avatar-1.jpg" alt="" class="rounded-circle " width="32px" height="32px">
                            </td>
                            <td >
                              <h6 class="content__information-name">Gleen Holden</h6>
                              <p class="content__information-address">
                                <i class="fas fa-map-marker-alt"></i>
                                  Nevada
                              </p>
                            </td>
                            <td >
                              <span class="content__information-status danger">Cancel</span>
                            </td>
                            <td >
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up icon-xs icon me-2 text-success"><g><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></g></svg>
                            <span class="content__information-total">$250.00</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="./upload/avatar-2.jpg" alt="" class="rounded-circle " width="32px" height="32px">
                            </td>
                            <td >
                              <h6 class="content__information-name">Lolita Hamill</h6>
                              <p class="content__information-address">
                                <i class="fas fa-map-marker-alt"></i>
                                  Texas
                              </p>
                            </td>
                            <td >
                              <span class="content__information-status success ">Success</span>
                            </td>
                            <td >
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down icon-xs icon me-2 text-danger"><g><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></g></svg>
                            <span class="content__information-total">$110.0</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="./upload/avatar-3.jpg" alt="" class="rounded-circle " width="32px" height="32px">
                            </td>
                            <td >
                              <h6 class="content__information-name">Robert Mercer</h6>
                              <p class="content__information-address">
                                <i class="fas fa-map-marker-alt"></i>
                                  California
                              </p>
                            </td>
                            <td >
                              <span class="content__information-status active">Active</span>
                            </td>
                            <td >
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up icon-xs icon me-2 text-success"><g><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></g></svg>
                            <span class="content__information-total">$420.00</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="./upload/avatar-4.jpg" alt="" class="rounded-circle " width="32px" height="32px">
                            </td>
                            <td >
                              <h6 class="content__information-name">Marie Kim</h6>
                              <p class="content__information-address">
                                <i class="fas fa-map-marker-alt"></i>
                                  Montana
                              </p>
                            </td>
                            <td >
                              <span class="content__information-status pending">Pending</span>
                            </td>
                            <td >
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down icon-xs icon me-2 text-danger"><g><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></g></svg>
                            <span class="content__information-total">$120.00</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="./upload/avatar-5.jpg" alt="" class="rounded-circle " width="32px" height="32px">
                            </td>
                            <td >
                              <h6 class="content__information-name">Marie Kim</h6>
                              <p class="content__information-address">
                                <i class="fas fa-map-marker-alt"></i>
                                  Australia
                              </p>
                            </td>
                            <td >
                              <span class="content__information-status success">Success</span>
                            </td>
                            <td >
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down icon-xs icon me-2 text-danger"><g><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></g></svg>
                            <span class="content__information-total">$120.00</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="./upload/avatar-6.jpg" alt="" class="rounded-circle " width="32px" height="32px">
                            </td>
                            <td >
                              <h6 class="content__information-name">Sonya Henshaw</h6>
                              <p class="content__information-address">
                                <i class="fas fa-map-marker-alt"></i>
                                  India
                              </p>
                            </td>
                            <td >
                              <span class="content__information-status danger">Cancel</span>
                            </td>
                            <td >
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up icon-xs icon me-2 text-success"><g><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></g></svg>
                            <span class="content__information-total">$112.00</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="./upload/avatar-1.jpg" alt="" class="rounded-circle " width="32px" height="32px">
                            </td>
                            <td >
                              <h6 class="content__information-name">Gleen Holden</h6>
                              <p class="content__information-address">
                                <i class="fas fa-map-marker-alt"></i>
                                  Nevada
                              </p>
                            </td>
                            <td >
                              <span class="content__information-status danger">Cancel</span>
                            </td>
                            <td >
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up icon-xs icon me-2 text-success"><g><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></g></svg>
                            <span class="content__information-total">$250.00</span>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
              <div class="col l-4">
                <div class="content__information-active" id="scroll">
                  <h3 class="content__information-heading-active">Recent Activity</h3>
                  <ul class="content__information-menu">
                    <li class="content__information-menu-item">
                      <span class="content__information-datetime">Today</span>
                      <span class="content__information-datetime">12:20 pm</span>
                      <p class="content__information-text">Andrei Coman magna sed porta finibus, risus posted a new article: <span>Forget UX Rowland</span></p>
                    </li>
                    <li class="content__information-menu-item">
                      <span class="content__information-datetime">Today</span>
                      <span class="content__information-datetime">12:20 pm</span>
                      <p class="content__information-text">Andrei Coman magna sed porta finibus, risus posted a new article: <span>Forget UX Rowland</span></p>
                    </li>
                    <li class="content__information-menu-item">
                      <span class="content__information-datetime">Today</span>
                      <span class="content__information-datetime">12:20 pm</span>
                      <p class="content__information-text">Andrei Coman magna sed porta finibus, risus posted a new article: <span>Forget UX Rowland</span></p>
                    </li>
                    <li class="content__information-menu-item">
                      <span class="content__information-datetime">Today</span>
                      <span class="content__information-datetime">12:20 pm</span>
                      <p class="content__information-text">Andrei Coman magna sed porta finibus, risus posted a new article: <span>Forget UX Rowland</span></p>
                    </li>
                    <li class="content__information-menu-item">
                      <span class="content__information-datetime">Today</span>
                      <span class="content__information-datetime">12:20 pm</span>
                      <p class="content__information-text">Andrei Coman magna sed porta finibus, risus posted a new article: <span>Forget UX Rowland</span></p>
                    </li>
                    <li class="content__information-menu-item">
                      <span class="content__information-datetime">Today</span>
                      <span class="content__information-datetime">12:20 pm</span>
                      <p class="content__information-text">Andrei Coman magna sed porta finibus, risus posted a new article: <span>Forget UX Rowland</span></p>
                    </li>
                  </ul>                
                </div>
              </div>
              <div class="col l-4">
                <div class="content__information-user" id="scroll">
                  <h3 class="content__information-heading">Top Users</h3>
                  <div class="table-responsive">
                      <table class="table-borderless table-centered table-nowrap table">
                        <tbody>
                          <tr>
                            <td>
                              <img src="./upload/avatar-1.jpg" alt="" class="rounded-circle " width="32px" height="32px">
                            </td>
                            <td >
                              <h6 class="content__information-name">Gleen Holden</h6>
                              <p class="content__information-address">
                                <i class="fas fa-map-marker-alt"></i>
                                  Nevada
                              </p>
                            </td>
                            <td >
                              <span class="content__information-status danger">Cancel</span>
                            </td>
                            <td >
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up icon-xs icon me-2 text-success"><g><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></g></svg>
                            <span class="content__information-total">$250.00</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="./upload/avatar-2.jpg" alt="" class="rounded-circle " width="32px" height="32px">
                            </td>
                            <td >
                              <h6 class="content__information-name">Lolita Hamill</h6>
                              <p class="content__information-address">
                                <i class="fas fa-map-marker-alt"></i>
                                  Texas
                              </p>
                            </td>
                            <td >
                              <span class="content__information-status success ">Success</span>
                            </td>
                            <td >
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down icon-xs icon me-2 text-danger"><g><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></g></svg>
                            <span class="content__information-total">$110.0</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="./upload/avatar-3.jpg" alt="" class="rounded-circle " width="32px" height="32px">
                            </td>
                            <td >
                              <h6 class="content__information-name">Robert Mercer</h6>
                              <p class="content__information-address">
                                <i class="fas fa-map-marker-alt"></i>
                                  California
                              </p>
                            </td>
                            <td >
                              <span class="content__information-status active">Active</span>
                            </td>
                            <td >
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up icon-xs icon me-2 text-success"><g><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></g></svg>
                            <span class="content__information-total">$420.00</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="./upload/avatar-4.jpg" alt="" class="rounded-circle " width="32px" height="32px">
                            </td>
                            <td >
                              <h6 class="content__information-name">Marie Kim</h6>
                              <p class="content__information-address">
                                <i class="fas fa-map-marker-alt"></i>
                                  Montana
                              </p>
                            </td>
                            <td >
                              <span class="content__information-status pending">Pending</span>
                            </td>
                            <td >
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down icon-xs icon me-2 text-danger"><g><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></g></svg>
                            <span class="content__information-total">$120.00</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="./upload/avatar-5.jpg" alt="" class="rounded-circle " width="32px" height="32px">
                            </td>
                            <td >
                              <h6 class="content__information-name">Marie Kim</h6>
                              <p class="content__information-address">
                                <i class="fas fa-map-marker-alt"></i>
                                  Australia
                              </p>
                            </td>
                            <td >
                              <span class="content__information-status success">Success</span>
                            </td>
                            <td >
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down icon-xs icon me-2 text-danger"><g><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></g></svg>
                            <span class="content__information-total">$120.00</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="./upload/avatar-6.jpg" alt="" class="rounded-circle " width="32px" height="32px">
                            </td>
                            <td >
                              <h6 class="content__information-name">Sonya Henshaw</h6>
                              <p class="content__information-address">
                                <i class="fas fa-map-marker-alt"></i>
                                  India
                              </p>
                            </td>
                            <td >
                              <span class="content__information-status danger">Cancel</span>
                            </td>
                            <td >
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up icon-xs icon me-2 text-success"><g><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></g></svg>
                            <span class="content__information-total">$112.00</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="./upload/avatar-1.jpg" alt="" class="rounded-circle " width="32px" height="32px">
                            </td>
                            <td >
                              <h6 class="content__information-name">Gleen Holden</h6>
                              <p class="content__information-address">
                                <i class="fas fa-map-marker-alt"></i>
                                  Nevada
                              </p>
                            </td>
                            <td >
                              <span class="content__information-status danger">Cancel</span>
                            </td>
                            <td >
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up icon-xs icon me-2 text-success"><g><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></g></svg>
                            <span class="content__information-total">$250.00</span>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>     
      </div>
    </div>
<?php include('includes/footer.php'); ?>
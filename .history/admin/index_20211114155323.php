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
                       <span class="data__statistical-numbers">$34,152</span>
                       <span class="data__statistical-text">Total Revenue</span>
                     </div>
                     <div class="data__statistical-icon">
                       <svg id="SvgjsSvg2416" width="70" height="40" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2418" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2417"><linearGradient id="SvgjsLinearGradient2422" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2423" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop2424" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop2425" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMask3hiide32"><rect id="SvgjsRect2428" width="74" height="40" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask3hiide32"></clipPath><clipPath id="nonForecastMask3hiide32"></clipPath><clipPath id="gridRectMarkerMask3hiide32"><rect id="SvgjsRect2429" width="74" height="44" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter2759" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feComponentTransfer id="SvgjsFeComponentTransfer2760" result="SvgjsFeComponentTransfer2760Out" in="SourceGraphic"><feFuncR id="SvgjsFeFuncR2761" type="linear" slope="0.5"></feFuncR><feFuncG id="SvgjsFeFuncG2762" type="linear" slope="0.5"></feFuncG><feFuncB id="SvgjsFeFuncB2763" type="linear" slope="0.5"></feFuncB><feFuncA id="SvgjsFeFuncA2764" type="identity"></feFuncA></feComponentTransfer></filter></defs><line id="SvgjsLine2427" x1="27.72725726257671" y1="0" x2="27.72725726257671" y2="40" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="27.72725726257671" y="0" width="1" height="40" fill="url(#SvgjsLinearGradient2422)" filter="none" fill-opacity="0.9" stroke-width="0"></line><g id="SvgjsG2463" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2464" class="apexcharts-xaxis-texts-g" transform="translate(0, 2.75)"></g></g><g id="SvgjsG2477" class="apexcharts-grid"><g id="SvgjsG2478" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2480" x1="0" y1="0" x2="70" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2481" x1="0" y1="8" x2="70" y2="8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2482" x1="0" y1="16" x2="70" y2="16" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2483" x1="0" y1="24" x2="70" y2="24" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2484" x1="0" y1="32" x2="70" y2="32" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2485" x1="0" y1="40" x2="70" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG2479" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2487" x1="0" y1="40" x2="70" y2="40" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2486" x1="0" y1="1" x2="0" y2="40" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2430" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG2431" class="apexcharts-series" rel="1" seriesName="seriesx1" data:realIndex="0"><path id="SvgjsPath2435" d="M 1.5909090909090908 40L 1.5909090909090908 30Q 1.5909090909090908 30 1.5909090909090908 30L 4.7727272727272725 30Q 4.7727272727272725 30 4.7727272727272725 30L 4.7727272727272725 30L 4.7727272727272725 40L 4.7727272727272725 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3hiide32)" pathTo="M 1.5909090909090908 40L 1.5909090909090908 30Q 1.5909090909090908 30 1.5909090909090908 30L 4.7727272727272725 30Q 4.7727272727272725 30 4.7727272727272725 30L 4.7727272727272725 30L 4.7727272727272725 40L 4.7727272727272725 40z" pathFrom="M 1.5909090909090908 40L 1.5909090909090908 40L 4.7727272727272725 40L 4.7727272727272725 40L 4.7727272727272725 40L 4.7727272727272725 40L 4.7727272727272725 40L 1.5909090909090908 40" cy="30" cx="7.954545454545454" j="0" val="25" barHeight="10" barWidth="3.1818181818181817" selected="false"></path><path id="SvgjsPath2437" d="M 7.954545454545454 40L 7.954545454545454 13.600000000000001Q 7.954545454545454 13.600000000000001 7.954545454545454 13.600000000000001L 11.136363636363637 13.600000000000001Q 11.136363636363637 13.600000000000001 11.136363636363637 13.600000000000001L 11.136363636363637 13.600000000000001L 11.136363636363637 40L 11.136363636363637 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3hiide32)" pathTo="M 7.954545454545454 40L 7.954545454545454 13.600000000000001Q 7.954545454545454 13.600000000000001 7.954545454545454 13.600000000000001L 11.136363636363637 13.600000000000001Q 11.136363636363637 13.600000000000001 11.136363636363637 13.600000000000001L 11.136363636363637 13.600000000000001L 11.136363636363637 40L 11.136363636363637 40z" pathFrom="M 7.954545454545454 40L 7.954545454545454 40L 11.136363636363637 40L 11.136363636363637 40L 11.136363636363637 40L 11.136363636363637 40L 11.136363636363637 40L 7.954545454545454 40" cy="13.600000000000001" cx="14.318181818181817" j="1" val="66" barHeight="26.4" barWidth="3.1818181818181817" selected="false"></path><path id="SvgjsPath2439" d="M 14.318181818181817 40L 14.318181818181817 23.6Q 14.318181818181817 23.6 14.318181818181817 23.6L 17.5 23.6Q 17.5 23.6 17.5 23.6L 17.5 23.6L 17.5 40L 17.5 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3hiide32)" pathTo="M 14.318181818181817 40L 14.318181818181817 23.6Q 14.318181818181817 23.6 14.318181818181817 23.6L 17.5 23.6Q 17.5 23.6 17.5 23.6L 17.5 23.6L 17.5 40L 17.5 40z" pathFrom="M 14.318181818181817 40L 14.318181818181817 40L 17.5 40L 17.5 40L 17.5 40L 17.5 40L 17.5 40L 14.318181818181817 40" cy="23.6" cx="20.68181818181818" j="2" val="41" barHeight="16.4" barWidth="3.1818181818181817" selected="false"></path><path id="SvgjsPath2441" d="M 20.68181818181818 40L 20.68181818181818 4.399999999999999Q 20.68181818181818 4.399999999999999 20.68181818181818 4.399999999999999L 23.86363636363636 4.399999999999999Q 23.86363636363636 4.399999999999999 23.86363636363636 4.399999999999999L 23.86363636363636 4.399999999999999L 23.86363636363636 40L 23.86363636363636 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3hiide32)" pathTo="M 20.68181818181818 40L 20.68181818181818 4.399999999999999Q 20.68181818181818 4.399999999999999 20.68181818181818 4.399999999999999L 23.86363636363636 4.399999999999999Q 23.86363636363636 4.399999999999999 23.86363636363636 4.399999999999999L 23.86363636363636 4.399999999999999L 23.86363636363636 40L 23.86363636363636 40z" pathFrom="M 20.68181818181818 40L 20.68181818181818 40L 23.86363636363636 40L 23.86363636363636 40L 23.86363636363636 40L 23.86363636363636 40L 23.86363636363636 40L 20.68181818181818 40" cy="4.399999999999999" cx="27.045454545454543" j="3" val="89" barHeight="35.6" barWidth="3.1818181818181817" selected="false"></path><path id="SvgjsPath2443" d="M 27.045454545454543 40L 27.045454545454543 14.8Q 27.045454545454543 14.8 27.045454545454543 14.8L 30.227272727272727 14.8Q 30.227272727272727 14.8 30.227272727272727 14.8L 30.227272727272727 14.8L 30.227272727272727 40L 30.227272727272727 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3hiide32)" pathTo="M 27.045454545454543 40L 27.045454545454543 14.8Q 27.045454545454543 14.8 27.045454545454543 14.8L 30.227272727272727 14.8Q 30.227272727272727 14.8 30.227272727272727 14.8L 30.227272727272727 14.8L 30.227272727272727 40L 30.227272727272727 40z" pathFrom="M 27.045454545454543 40L 27.045454545454543 40L 30.227272727272727 40L 30.227272727272727 40L 30.227272727272727 40L 30.227272727272727 40L 30.227272727272727 40L 27.045454545454543 40" selected="false" cy="14.8" cx="33.40909090909091" j="4" val="63" barHeight="25.2" barWidth="3.1818181818181817"></path><path id="SvgjsPath2452" d="M 33.40909090909091 40L 33.40909090909091 30Q 33.40909090909091 30 33.40909090909091 30L 36.590909090909086 30Q 36.590909090909086 30 36.590909090909086 30L 36.590909090909086 30L 36.590909090909086 40L 36.590909090909086 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3hiide32)" pathTo="M 33.40909090909091 40L 33.40909090909091 30Q 33.40909090909091 30 33.40909090909091 30L 36.590909090909086 30Q 36.590909090909086 30 36.590909090909086 30L 36.590909090909086 30L 36.590909090909086 40L 36.590909090909086 40z" pathFrom="M 33.40909090909091 40L 33.40909090909091 40L 36.590909090909086 40L 36.590909090909086 40L 36.590909090909086 40L 36.590909090909086 40L 36.590909090909086 40L 33.40909090909091 40" cy="30" cx="39.772727272727266" j="5" val="25" barHeight="10" barWidth="3.1818181818181817" selected="false"></path><path id="SvgjsPath2454" d="M 39.772727272727266 40L 39.772727272727266 22.4Q 39.772727272727266 22.4 39.772727272727266 22.4L 42.954545454545446 22.4Q 42.954545454545446 22.4 42.954545454545446 22.4L 42.954545454545446 22.4L 42.954545454545446 40L 42.954545454545446 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3hiide32)" pathTo="M 39.772727272727266 40L 39.772727272727266 22.4Q 39.772727272727266 22.4 39.772727272727266 22.4L 42.954545454545446 22.4Q 42.954545454545446 22.4 42.954545454545446 22.4L 42.954545454545446 22.4L 42.954545454545446 40L 42.954545454545446 40z" pathFrom="M 39.772727272727266 40L 39.772727272727266 40L 42.954545454545446 40L 42.954545454545446 40L 42.954545454545446 40L 42.954545454545446 40L 42.954545454545446 40L 39.772727272727266 40" cy="22.4" cx="46.136363636363626" j="6" val="44" barHeight="17.6" barWidth="3.1818181818181817" selected="true" filter="url(#SvgjsFilter2759)"></path><path id="SvgjsPath2456" d="M 46.136363636363626 40L 46.136363636363626 32Q 46.136363636363626 32 46.136363636363626 32L 49.318181818181806 32Q 49.318181818181806 32 49.318181818181806 32L 49.318181818181806 32L 49.318181818181806 40L 49.318181818181806 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3hiide32)" pathTo="M 46.136363636363626 40L 46.136363636363626 32Q 46.136363636363626 32 46.136363636363626 32L 49.318181818181806 32Q 49.318181818181806 32 49.318181818181806 32L 49.318181818181806 32L 49.318181818181806 40L 49.318181818181806 40z" pathFrom="M 46.136363636363626 40L 46.136363636363626 40L 49.318181818181806 40L 49.318181818181806 40L 49.318181818181806 40L 49.318181818181806 40L 49.318181818181806 40L 46.136363636363626 40" cy="32" cx="52.499999999999986" j="7" val="20" barHeight="8" barWidth="3.1818181818181817" selected="false"></path><path id="SvgjsPath2458" d="M 52.499999999999986 40L 52.499999999999986 25.6Q 52.499999999999986 25.6 52.499999999999986 25.6L 55.681818181818166 25.6Q 55.681818181818166 25.6 55.681818181818166 25.6L 55.681818181818166 25.6L 55.681818181818166 40L 55.681818181818166 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3hiide32)" pathTo="M 52.499999999999986 40L 52.499999999999986 25.6Q 52.499999999999986 25.6 52.499999999999986 25.6L 55.681818181818166 25.6Q 55.681818181818166 25.6 55.681818181818166 25.6L 55.681818181818166 25.6L 55.681818181818166 40L 55.681818181818166 40z" pathFrom="M 52.499999999999986 40L 52.499999999999986 40L 55.681818181818166 40L 55.681818181818166 40L 55.681818181818166 40L 55.681818181818166 40L 55.681818181818166 40L 52.499999999999986 40" cy="25.6" cx="58.863636363636346" j="8" val="36" barHeight="14.4" barWidth="3.1818181818181817" selected="false"></path><path id="SvgjsPath2460" d="M 58.863636363636346 40L 58.863636363636346 24Q 58.863636363636346 24 58.863636363636346 24L 62.045454545454525 24Q 62.045454545454525 24 62.045454545454525 24L 62.045454545454525 24L 62.045454545454525 40L 62.045454545454525 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3hiide32)" pathTo="M 58.863636363636346 40L 58.863636363636346 24Q 58.863636363636346 24 58.863636363636346 24L 62.045454545454525 24Q 62.045454545454525 24 62.045454545454525 24L 62.045454545454525 24L 62.045454545454525 40L 62.045454545454525 40z" pathFrom="M 58.863636363636346 40L 58.863636363636346 40L 62.045454545454525 40L 62.045454545454525 40L 62.045454545454525 40L 62.045454545454525 40L 62.045454545454525 40L 58.863636363636346 40" cy="24" cx="65.2272727272727" j="9" val="40" barHeight="16" barWidth="3.1818181818181817" selected="false"></path><path id="SvgjsPath2462" d="M 65.2272727272727 40L 65.2272727272727 18.4Q 65.2272727272727 18.4 65.2272727272727 18.4L 68.40909090909089 18.4Q 68.40909090909089 18.4 68.40909090909089 18.4L 68.40909090909089 18.4L 68.40909090909089 40L 68.40909090909089 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3hiide32)" pathTo="M 65.2272727272727 40L 65.2272727272727 18.4Q 65.2272727272727 18.4 65.2272727272727 18.4L 68.40909090909089 18.4Q 68.40909090909089 18.4 68.40909090909089 18.4L 68.40909090909089 18.4L 68.40909090909089 40L 68.40909090909089 40z" pathFrom="M 65.2272727272727 40L 65.2272727272727 40L 68.40909090909089 40L 68.40909090909089 40L 68.40909090909089 40L 68.40909090909089 40L 68.40909090909089 40L 65.2272727272727 40" cy="18.4" cx="71.59090909090907" j="10" val="54" barHeight="21.6" barWidth="3.1818181818181817" selected="false"></path><g id="SvgjsG2433" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG2434" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG2436" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG2438" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG2440" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG2442" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG2451" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG2453" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG2455" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG2457" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG2459" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG2461" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG2432" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2488" x1="0" y1="0" x2="70" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2489" x1="0" y1="0" x2="70" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2490" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2491" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2492" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect2426" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2476" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2419" class="apexcharts-annotations"></g></svg>
                     </div>
                   </div>
                 </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php include('includes/footer.php'); ?>
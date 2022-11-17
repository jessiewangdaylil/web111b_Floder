<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Animated Dashboard Widget</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="{{asset('dashboard/style.css')}}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <div class="widget">

    <div class="section section-graph">
      <div class="graph-info">
        <i class="graph-arrow"></i>
        <span class="graph-info-big">634.39</span>
        <span class="graph-info-small">+2.18 (3.71%)</span>
      </div>
      <div id="graph"></div>
    </div>

    <div class="section section-info">
      <span class="info-time">Today 2:25 PM</span>
      <h3 class="info-title">Salt Lake City, Utah</h3>

      <div class="info-block">
        <dl>
          <dt>13.5 M</dt>
          <dd>Shares Traded</dd>
        </dl>
      </div>

      <div class="info-block last">
        <dl>
          <dt>28.44</dt>
          <dd>Market Cap</dd>
        </dl>
      </div>

      <div class="info-aapl">
        <h4>AAPL</h4>
        <ul>
          <li><span class="orange" style="height: 37.5%"></span></li>
          <li><span class="orange" style="height: 47.5%"></span></li>
          <li><span class="orange" style="height: 70%"></span></li>
          <li><span class="orange" style="height: 85%"></span></li>
          <li><span class="orange" style="height: 40%"></span></li>
          <li><span class="green" style="height: 75%"></span></li>
          <li><span class="green" style="height: 50%"></span></li>
          <li><span class="green" style="height: 15%"></span></li>
          <li><span class="green" style="height: 25%"></span></li>
        </ul>
      </div>

      <div class="yearly-change">
        <h4>Yearly Change</h4>
        <span><em>+</em> 127.01</span>
      </div>
    </div>
    <div class="section"></div>
  </div>
</div>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://code.highcharts.com/highcharts.js'></script><script  src="{{asset('dashboard/script.js')}}"></script>

</body>
</html>

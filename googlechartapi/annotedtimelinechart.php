<html>

<head>
  <script type='text/javascript' src='http://www.google.com/jsapi'></script>
  <script type='text/javascript'>
    google.load('visualization', '1', { 'packages': ['annotatedtimeline'] });
    google.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('date', 'Date');
      data.addColumn('number', 'Calls Attended');
      data.addColumn('string', 'title1');
      data.addColumn('string', 'text1');
      data.addColumn('number', 'Emails Received');
      data.addColumn('string', 'title2');
      data.addColumn('string', 'text2');
      data.addRows(6);
      data.setValue(0, 0, new Date(2008, 1, 1));
      data.setValue(0, 1, 30000);
      data.setValue(0, 4, 40645);
      data.setValue(1, 0, new Date(2008, 1, 2));
      data.setValue(1, 1, 14045);
      data.setValue(1, 4, 20374);
      data.setValue(2, 0, new Date(2008, 1, 3));
      data.setValue(2, 1, 55022);
      data.setValue(2, 4, 50766);
      data.setValue(3, 0, new Date(2008, 1, 4));
      data.setValue(3, 1, 75284);
      data.setValue(3, 4, 14334);
      data.setValue(3, 5, 'Calls');
      data.setValue(3, 6, 'Unsolved');
      data.setValue(4, 0, new Date(2008, 1, 5));
      data.setValue(4, 1, 41476);
      data.setValue(4, 2, 'Emails');
      data.setValue(4, 3, 'Pending Still');
      data.setValue(4, 4, 66467);
      data.setValue(5, 0, new Date(2008, 1, 6));
      data.setValue(5, 1, 33322);
      data.setValue(5, 4, 39463);

      var chart = new google.visualization.AnnotatedTimeLine(document.getElementById('chart_div'));
      chart.draw(data, { displayAnnotations: true });
    }
  </script>
</head>

<body>
  <div id='chart_div' style='width: 700px; height: 240px;'></div>
</body>

</html>
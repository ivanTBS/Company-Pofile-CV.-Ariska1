<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>
  Admin Pendaftaran Mahasiswa Baru
</title>
<!--Import Google Icon Font-->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link rel="stylesheet" type="text/css" href="../css/material-icons/material-icons.css">
<link rel="stylesheet" type="text/css" href="../css/font-awesome/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
<link rel="stylesheet" type="text/css" href="scss/konektor.php/style.scss">
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      title:{
        text: "Diagram Pendfataran"
      },
      data: [
      {
        type: "area",
      lineThickness: 7,   //**Try various lineThickness values **//
      dataPoints: [
      { y: 45, label: "T. Informatika" },
      { y: 55, label: "Sistem Informasi" },
      { y: 25, label: "Desain Komunikasi Visual" }
      ]
    }
    ]
  });
    chart.render();

  }
</script>
<script type="text/javascript" src="../js/canvasjs.min.js"></script>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
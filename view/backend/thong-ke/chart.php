<!DOCTYPE html>
<html>

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Tên Bậc Rank', 'Tổng Số Lượng'],
                <?php
                foreach ($items as $item) {
                    echo "['$item[ten_bac_rank]',     $item[tong_tai_khoan]],";
                }
                ?>
            ]);

            var options = {
                title: 'TỶ LỆ NICK GAME',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
</head>

<body>
    <!-- <div style="margin-bottom:10px; font-size:20px">BIỂU ĐỒ THỐNG KÊ</div> -->

    <div id="piechart_3d" style="width: 900px; height: 460px; margin-left:7em"></div>

</body>

</html>
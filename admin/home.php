<h1 class="">Welcome to the dashboard</h1>
<hr>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.highcharts.com/highcharts.js"></script>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Charts
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div id="chart1" style="height: 400px;"></div>
                    </div>
                    <div class="col-md-6">
                        <div id="chart2" style="height: 400px;"></div>
                    </div>
                    <div class="col-md-6">
                        <div id="chart3" style="height: 400px;"></div>
                    </div>
                    <div class="col-md-6">
                        <div id="chart4" style="height: 400px;"></div>
                    </div>
                    </div>
                    <div class="col-md-12">
                        <div id="chart5" style="height: 400px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
// Data for the bar chart
var data = [
            { type: 'Change Oil', requests: 25 },
            { type: 'Overall Checkup', requests: 40 },
            { type: 'Engine Tune Up', requests: 35 },
            { type: 'Tire Replacement', requests: 20 },
            { type: 'Change Frameset / Chassis', requests: 15 }
        ];

        // Creating the bar chart
        Highcharts.chart('chart1', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Service Requests by Type'
            },
            xAxis: {
                categories: data.map(item => item.type),
                title: {
                    text: 'Service Type'
                }
            },
            yAxis: {
                title: {
                    text: 'Number of Requests'
                }
            },
            series: [{
                name: 'Service Requests',
                data: data.map(item => item.requests)
            }]
        });

// Data for the line chart
var data = [
            { quarter: 'Q1', revenue: 10000, profit: 5000 },
            { quarter: 'Q2', revenue: 12000, profit: 6000 },
            { quarter: 'Q3', revenue: 15000, profit: 7500 },
            { quarter: 'Q4', revenue: 18000, profit: 9000 }
        ];

        // Creating the line chart
        Highcharts.chart('chart2', {
            title: {
                text: 'Company Performance by Quarter'
            },
            xAxis: {
                categories: data.map(item => item.quarter)
            },
            yAxis: {
                title: {
                    text: 'Amount'
                }
            },
            series: [{
                name: 'Revenue',
                data: data.map(item => item.revenue)
            }, {
                name: 'Profit',
                data: data.map(item => item.profit)
            }]
        });

        var data = [
            { category: 'Accessories', sales: 5000 },
            { category: 'Body Parts', sales: 3000 },
            { category: 'Chassis', sales: 2000 },
            { category: 'Machine Parts', sales: 4000 },
            { category: 'Mags', sales: 2500 },
            { category: 'Oils', sales: 3500 },
            { category: 'Tires', sales: 5000 },
            { category: 'Tools', sales: 2500 }
        ];

        // Creating the pie chart
        Highcharts.chart('chart3', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Sales by Category'
            },
            plotOptions: {
                pie: {
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f}%'
                    }
                }
            },
            series: [{
                name: 'Sales',
                colorByPoint: true,
                data: data.map(item => ({ name: item.category, y: item.sales }))
            }]
        });

        // Data for the line chart
        var data = [
            { month: 'Jan', revenue: 5000 },
            { month: 'Feb', revenue: 6000 },
            { month: 'Mar', revenue: 5500 },
            { month: 'Apr', revenue: 7000 },
            { month: 'May', revenue: 6500 },
            { month: 'Jun', revenue: 8000 },
            { month: 'Jul', revenue: 7500 },
            { month: 'Aug', revenue: 9000 },
            { month: 'Sep', revenue: 8500 },
            { month: 'Oct', revenue: 9500 },
            { month: 'Nov', revenue: 9000 },
            { month: 'Dec', revenue: 10000 }
        ];

        // Creating the line chart
        Highcharts.chart('chart4', {
            chart: {
                type: 'line'
            },
            title: {
                text: 'Revenue Trend'
            },
            xAxis: {
                categories: data.map(item => item.month),
                title: {
                    text: 'Month'
                }
            },
            yAxis: {
                title: {
                    text: 'Revenue'
                }
            },
            series: [{
                name: 'Revenue',
                data: data.map(item => item.revenue)
            }]
        });

// Data for Customer Satisfaction
var customerSatisfactionData = [
        { aspect: 'Service Quality', rating: 5.0 },
        { aspect: 'Pricing', rating: 4.2 },
        { aspect: 'Customer Support', rating: 2.6 },
        { aspect: 'Product Quality', rating: 3.5 },
        { aspect: 'Delivery Speed', rating: 2.0 }
    ];

    // Creating the Customer Satisfaction chart
    Highcharts.chart('chart5', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Customer Satisfaction'
        },
        xAxis: {
            categories: customerSatisfactionData.map(item => item.aspect),
            title: {
                text: 'Aspect'
            }
        },
        yAxis: {
            title: {
                text: 'Rating'
            }
        },
        series: [{
            name: 'Rating',
            data: customerSatisfactionData.map(item => item.rating)
        }]
    });

</script>

<div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-gradient-dark elevation-1"><i class="fas fa-copyright"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Brands</span>
                <span class="info-box-number">
                  <?php 
                    $inv = $conn->query("SELECT count(id) as total FROM brand_list where delete_flag = 0 ")->fetch_assoc()['total'];
                    echo number_format($inv);
                  ?>
                  <?php ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-light elevation-1"><i class="fas fa-th-list"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Category</span>
                <span class="info-box-number">
                  <?php 
                    $inv = $conn->query("SELECT count(id) as total FROM categories where delete_flag = 0 ")->fetch_assoc()['total'];
                    echo number_format($inv);
                  ?>
                  <?php ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="shadow info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Mechanics</span>
                <span class="info-box-number">
                  <?php 
                    $mechanics = $conn->query("SELECT sum(id) as total FROM `mechanics_list` where status = '1' ")->fetch_assoc()['total'];
                    echo number_format($mechanics);
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="shadow info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-th-list"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Services</span>
                <span class="info-box-number">
                <?php 
                    $services = $conn->query("SELECT sum(id) as total FROM `service_list` where status = 1 ")->fetch_assoc()['total'];
                    echo number_format($services);
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="shadow info-box mb-3">
              <span class="info-box-icon bg-gradient-primary elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Registered Clients</span>
                <span class="info-box-number">
                <?php 
                    $services = $conn->query("SELECT sum(id) as total FROM `client_list` where status = 1 and delete_flag = 0 ")->fetch_assoc()['total'];
                    echo number_format($services);
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="shadow info-box mb-3">
              <span class="info-box-icon bg-gradient-secondary elevation-1"><i class="fas fa-tasks"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pending Orders</span>
                <span class="info-box-number">
                <?php 
                    $services = $conn->query("SELECT sum(id) as total FROM `order_list` where status = 0 ")->fetch_assoc()['total'];
                    echo number_format($services);
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="shadow info-box mb-3">
              <span class="info-box-icon bg-gradient-primary elevation-1"><i class="fas fa-tasks"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Confirmed Orders</span>
                <span class="info-box-number">
                <?php 
                    $services = $conn->query("SELECT sum(id) as total FROM `order_list` where status = 1 ")->fetch_assoc()['total'];
                    echo number_format($services);
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="shadow info-box mb-3">
              <span class="info-box-icon bg-gradient-success elevation-1"><i class="fas fa-tasks"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Orders For Delivery</span>
                <span class="info-box-number">
                <?php 
                    $services = $conn->query("SELECT sum(id) as total FROM `order_list` where status = 2 ")->fetch_assoc()['total'];
                    echo number_format($services);
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="shadow info-box mb-3">
              <span class="info-box-icon bg-gradient-warning elevation-1"><i class="fas fa-tasks"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">On the Way Orders</span>
                <span class="info-box-number">
                <?php 
                    $services = $conn->query("SELECT sum(id) as total FROM `order_list` where status = 3 ")->fetch_assoc()['total'];
                    echo number_format($services);
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="shadow info-box mb-3">
              <span class="info-box-icon bg-gradient-success elevation-1"><i class="fas fa-tasks"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Delivered Orders</span>
                <span class="info-box-number">
                <?php 
                    $services = $conn->query("SELECT sum(id) as total FROM `order_list` where status = 4 ")->fetch_assoc()['total'];
                    echo number_format($services);
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="shadow info-box mb-3">
              <span class="info-box-icon bg-gradient-danger elevation-1"><i class="fas fa-tasks"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Cancelled Orders</span>
                <span class="info-box-number">
                <?php 
                    $services = $conn->query("SELECT sum(id) as total FROM `order_list` where status =5 ")->fetch_assoc()['total'];
                    echo number_format($services);
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="shadow info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-file-invoice"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Finished Requests</span>
                <span class="info-box-number">
                <?php 
                    $services = $conn->query("SELECT sum(id) as total FROM `service_requests` where status = 3 ")->fetch_assoc()['total'];
                    echo number_format($services);
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
        </div>

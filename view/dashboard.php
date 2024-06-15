<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/bs/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/root.css">
    <link rel="stylesheet" href="../public/css/main.css">
</head>
<body>
<?php require_once 'admin-aside-menu.php' ; ?>
    <main>
      <h2 class="text-center color-vert p-3">Tableau de bord</h2>
        <div class="row mt-5">
          <div class="col-md-4 p-3">
              <div class="text-center form-box-shadowed p-3 d-flex justify-content-around">
                 <img src="../public/icons/evol.svg" alt="">
                <div>
                  <h6>Total chiffre d'affaire</h6>
                  <h5 class="color-vert">100000 MGA</h5>
                 </div>
              </div>
          </div>
          <div class="col-md-4 p-3">
            <div class="text-center form-box-shadowed p-3 d-flex justify-content-around">
                <img src="../public/icons/stat.svg" alt="">
                <div>
                  <h6>Total des commandes</h6>
                  <h5 class="color-vert">100</h5>
                </div>
            </div>
          </div>
          <div class="col-md-4 p-3">
            <div class="text-center form-box-shadowed p-3 d-flex justify-content-around">
              <img src="../public/icons/st.svg" alt="">
              <div>
                <h6>Revenue moyenne</h6>
                <h5 class="color-vert">100000 MGA</h5>
              </div>
            </div>
          </div>
        </div>
          <div class="p-5">
            <canvas id="myChart"></canvas>
          </div>
          <div class="p-5">
            <canvas id="myChart2"></canvas>
          </div>

    </main>
      
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      
      <script>
        const ctx = document.getElementById('myChart');
        const ctx2 = document.getElementById('myChart2') ; 
        // ctx.width  = 600 ;
        // ctx.height = 600 ; 
        Chart.defaults.color = 'white';
        new Chart(ctx, {
          type: 'bar',
          data: {
            labels: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'],
            datasets: [{
              label: 'Nombre de commandes',
              data: [12, 19, 3, 5, 2, 3],
              borderWidth: 2 , 
              borderColor : '#4caf50' ,
              backgroundColor : 'transparent'
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true 
              }
            }
          }
        });

        new Chart(ctx2, {
          type: 'line',
          data: {
            labels: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin' , 'Juillet', 'Août','Septembre','Otobre','Novembre','Décembre'],
            datasets: [{
              label: 'Evolution du chiffre d\'affaire',
              data: [12, 19, 3, 5, 2, 3],
              borderWidth: 2 , 
              borderColor : '#4caf50' ,
              backgroundColor : '#4caf52'
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });
      </script>
       
</body>
</html>
function cargarGraficos(){
    $.ajax({
        url: '../../controlador/controlador_grafico.php',
        type: 'POST',


    }).done(function(resp){
        var titulo = [];
        var cantidad= [];
        var data = JSON.parse(resp);
        for (var i = 0; i < data.length; i++) {
            
            titulo.push(data[i][1]);
            cantidad.push(data[i][4]);
        }
        crearGrafico(titulo,cantidad,'bar','PRODUCTOS EN STOCK BAJO','graficoStock');
    })
}
function cargarGraficostorta(){
    $.ajax({
        url: '../../controlador/controlador_grafico.php',
        type: 'POST',


    }).done(function(resp){
        var titulo = [];
        var cantidad= [];
        var data = JSON.parse(resp);
        for (var i = 0; i < data.length; i++) {
            
            titulo.push(data[i][1]);
            cantidad.push(data[i][4]);
        }
        crearGrafico(titulo,cantidad,'pie','stock','graficoTorta');
    })
}
function crearGrafico(titulo,cantidad,tipo,encabezado,id){

    var ctx = document.getElementById(id);
    var myChart = new Chart(ctx, {
        type: tipo,
        data: {
            labels: titulo,
            datasets: [{
                label: encabezado,
                data: cantidad,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        
    });
        

}
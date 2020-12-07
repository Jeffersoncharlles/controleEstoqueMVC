let ctx = document.getElementsByClassName("line-chart");
//type, data e options
let chartGrap = new Chart(ctx,{
    type: 'line',
    data:{
        labels: ["Jan", "Fev","Mar", "Abr","Mai", "Jun","Jul", "Ago","Set", "Out","Nov", "Dez"],
        datasets: [{
            label: "Pedidos do ano",
            data: [5,10,5,14,20,15,6,14,8,12,15,5,10],
            borderWidth: 2,
            borderColor: 'rgba(77,16,253,0.85)',
            bagroundColor: 'transparent',
        }]
    }
});
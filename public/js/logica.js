$(document).ready(function () {
    // $('#select-pais').on('change', valorMoneda);
   
});



$.get('/api/gg', function(data){
    for (let i=0; i<data.length; i++) {
        
        console.log(data[i]);

    data[i].forEach(element => console.log(element));

    }
})


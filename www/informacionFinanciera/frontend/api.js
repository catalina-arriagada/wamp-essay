//CODIGO JAVASCRIPT:

//función que lleva por nombre "get" y que obtiene uf o utm dentro de la variable recien creada (monedaFinanciera):
function get (monedaFinanciera){
    //especifico la URL de mi API externa, y le concateno mi variable (uf o utm):
    fetch('http://localhost/informacionFinanciera/backend/data.php?moneda-financiera='+monedaFinanciera)
    
    //.then es una promesa. Me traera un JSON, el cual lo guardo en la variable _data recien creada: 
    .then(_data=>_data.json())   
    //entonces,la variable data... :
    .then (_data=>{
        //muestro en consola la variable _data:
        console.log(_data)
        //declaro variable called donde guardo la informacion (del json) que me trae la id call del archivo index.html, y la llevo hacia esa id html:
        const called = document.getElementById('call');
        //limpio la variable called:
        called.innerHTML = '';

        //genero ciclo for para recorrer cada dato que traiga el json, en una <li> cada uno:

        //creo la variable date y traigo info de la variable _data(con json):
        for(let date of _data){
            //llamo a la variable called para que cuando apriete el boton me traiga en HTML el tag <li> con la informacion JSON en su interior:
            called.innerHTML += `
            <li>Fecha: ${date.fecha} // Valor: ${date.valor}</li>`;
        }
    })
}
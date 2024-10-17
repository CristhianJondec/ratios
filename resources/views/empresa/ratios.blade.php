<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ratios de Rentabilidad</title>
</head>
<body>
    <h1>Ratios de Rentabilidad para <span id="empresa-nombre"></span></h1>

    <ul>
        <li>PERatio: <span id="per-ratio"></span></li>
        <li>Price to Book: <span id="price-to-book"></span></li>
        <li>Dividend Yield: <span id="dividend-yield"></span></li>
        <li>EBITDA: <span id="ebitda"></span></li>
    </ul>

    <!-- Aquí incluyes el script de tu JavaScript compilado -->
    <script src="{{ mix('js/app.js') }}"></script>

    <!-- Tu script para realizar la solicitud -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const symbol = 'AAPL'; // Aquí puedes cambiar el símbolo por el que desees
    
            // Llamada a la API con Axios
            axios.get('', {
                params: {
                    function: 'OVERVIEW',
                    symbol: symbol
                }
            })
            .then(response => {
                console.log(response); // Verifica que la respuesta llegue bien en la consola
    
                const data = response.data;
                
                // Mostrar datos en el HTML
                document.getElementById('empresa-nombre').innerText = data.Name || 'Empresa no encontrada';
                document.getElementById('per-ratio').innerText = data.PERatio || 'No disponible';
                document.getElementById('price-to-book').innerText = data.PriceToBookRatio || 'No disponible';
                document.getElementById('dividend-yield').innerText = data.DividendYield || 'No disponible';
                document.getElementById('ebitda').innerText = data.EBITDA || 'No disponible';
            })
            .catch(error => {
                console.error('Error al obtener los datos:', error); // Para mostrar errores
            });
        });
    </script>
    
</body>
</html>

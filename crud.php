<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000000;
            color: #ffffff;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #5f0000; /* Color carmesí oscuro */
            border-radius: 10px;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        tr:nth-child(even) {
            background-color: #4a0000; /* Color más oscuro para filas pares */
        }
        th {
            background-color: #aa0000; /* Color rojo para encabezados */
        }
        input[type="text"], input[type="submit"] {
            padding: 8px;
            margin-right: 10px;
            border: none;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #aa0000; /* Color rojo para botones */
            color: #ffffff; /* Color blanco para texto de botones */
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #5f0000; /* Color más oscuro al pasar el ratón */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>CRUD de Productos</h1>

        <!-- Formulario para agregar un nuevo producto -->
        <form id="addForm">
            <input type="text" id="productName" name="productName" placeholder="Nombre del producto">
            <input type="text" id="productPrice" name="productPrice" placeholder="Precio del producto">
            <input type="submit" value="Agregar">
        </form>

        <!-- Tabla para mostrar los productos existentes -->
        <table id="productTable">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se mostrarán los productos existentes -->
            </tbody>
        </table>
    </div>

    <!-- Script para manejar la lógica CRUD -->
    <script>
        // Función para cargar los datos existentes al cargar la página
        window.onload = function() {
            loadTableData();
        };

        // Función para cargar los datos existentes en la tabla
        function loadTableData() {
            // Aquí deberías hacer una solicitud AJAX para obtener los datos del servidor
            // Por simplicidad, se simulará la carga de datos
            var data = [
                { name: "Micrófono condensador", price: "$100" },
                { name: "Teclado MIDI", price: "$200" },
                { name: "Monitor de estudio", price: "$150" }
            ];

            // Limpiar la tabla antes de cargar nuevos datos
            var tableBody = document.querySelector("#productTable tbody");
            tableBody.innerHTML = "";

            // Iterar sobre los datos y agregar filas a la tabla
            data.forEach(function(row) {
                var tr = document.createElement("tr");
                tr.innerHTML = "<td>" + row.name + "</td>" +
                               "<td>" + row.price + "</td>" +
                               "<td><button onclick='editRow(this)'>Editar</button>" +
                               "<button onclick='deleteRow(this)'>Eliminar</button></td>";
                tableBody.appendChild(tr);
            });
        }

        // Función para agregar un nuevo producto
        document.getElementById("addForm").addEventListener("submit", function(event) {
            event.preventDefault();
            var productName = document.getElementById("productName").value;
            var productPrice = document.getElementById("productPrice").value;

            // Aquí deberías hacer una solicitud AJAX para agregar el nuevo producto en el servidor
            // Por simplicidad, solo se simulará la adición del producto
            var newRow = { name: productName, price: productPrice };
            alert("Nuevo producto agregado: " + JSON.stringify(newRow));

            // Actualizar la tabla con los nuevos datos
            loadTableData();
        });

        // Función para editar un producto
        function editRow(button) {
            var row = button.parentNode.parentNode;
            var productName = row.getElementsByTagName("td")[0].innerHTML;
            var productPrice = row.getElementsByTagName("td")[1].innerHTML;

            // Aquí podrías mostrar un formulario prefilled con los datos para editarlos
            alert("Editar producto: " + productName + ", Precio: " + productPrice);
        }

        // Función para eliminar un producto
        function deleteRow(button) {
            var row = button.parentNode.parentNode;
            var productName = row.getElementsByTagName("td")[0].innerHTML;
            var productPrice = row.getElementsByTagName("td")[1].innerHTML;

            // Aquí deberías hacer una solicitud AJAX para eliminar el producto del servidor
            // Por simplicidad, solo se simulará la eliminación del producto
            if (confirm("¿Eliminar producto: " + productName + ", Precio: " + productPrice + "?")) {
                row.remove();
                alert("Producto eliminado");
            }
        }
    </script>
</body>
</html>

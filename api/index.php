<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API - Nutricare</title>
    <link rel="stylesheet" href="api/style.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<div  class="container">
    <div style="margin:18px">
    <h1>API - Nutricare</h1>
    <p>API sencilla para consultar las recomendaciones de alimentos que se deben consumir y evitar consumir según una enfermedad en los seres humanos.
    <br><br>
    <b>URL Base:</b> <code>https://nutricarepsi.vercel.app/api/</code>
    <br>
    <b>Algunas enfermedades: </b><code>Diabetes, Hipertensión</code>
</p>
    </div>
    
    <div class="divbody">
        <h3>Recomendaciones</h3>
        <code>
           GET  /recommendations.php?Item
           <br>
           GET  /recommendations.php?Item=$Nombre_Enfermedad
        </code>
    </div>      
    <div class="divbody">   
        <h3>Alimentos</h3>
        <code>
           GET  /foods?op=GetAll
        </code>

        <code>
           POST  /foods?op=insert
           <br> 
           {
            <br> 
               "nombre" : "",               -> REQUERIDO      
            <br>   
           }

        </code>
        <code>
           PUT  /foods?op=update
           <br> 
           {
            <br> 
               "id" : "",                -> REQUERIDO                   
               <br> 
               "nombre" : "",              -> REQUERIDO
               <br>      
           }

        </code>
        <code>
           DELETE  /foods?op=delete
           <br> 
           {   
               <br>    
               "id" : "",                -> REQUERIDO        
               <br>
           }

        </code>
    </div>


</div>
    
</body>
</html>
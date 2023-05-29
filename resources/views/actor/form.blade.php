<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }
        
        h2 {
            margin-top: 0;
        }
        
        form {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        
        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 16px;
        }
        
        input[type="submit"] {
            padding: 8px 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .form-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .form-footer a {
            text-decoration: none;
            color: #007bff;
            margin-top: 16px;
        }
    </style>

<h2>{{ $modo }} Actor</h2>

<form>
  <label for="Nom">Nombre</label>
  <input type="text" name="Nom" value="{{ isset($actor->Nom) ? $actor->Nom : '' }}" id="Nom">


  <div class="form-footer">
  <input type="submit" value="{{ $modo }} Actor">            
  <a href="{{ url('pelicula') }}">Regresar</a>
</div>
  
 
</form>


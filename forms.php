<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BitByGrid Pruebas - Forms</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bitCore.css">
  <script src="js/jquery.js"></script>
  <script src="js/document.js" charset="utf-8"></script>
</head>
<body>
  <div class="bit-container">
    <a href="index.php" class="btn red lg">Regresar a Inicio</a>
    <button id="blanco" class="btn grey lg">Cambiar a blanco</button>
    <button id="negro" class="btn blue-grey lg">Cambiar a negro</button>
    <div class="bit-row">
      <div class="bit-col-100">
        <p>Button</p>
        <input type="button"class="btn red" value="Enviar">
        <p>Checkbox</p>
        <input type="checkbox" name="" id="">
        <p>Color</p>
        <input type="color" name="" id="">
        <p>Date</p>
        <input type="date" class="form-element" name="" id="">
        <p>Datetime</p>
        <input type="datetime" class="form-element" name="" id="">
        <p>DatetimeLocal</p>
        <input type="datetime-local" class="form-element" name="" id="">
        <p>Email</p>
        <input type="email" class="form-element" name="" id="">
        <p>File</p>
        <input type="file" name="" id="">
        <p>Hidden</p>
        <input type="hidden" name="">
        <p>Image</p>
        <input type="image" src="http://placeimg.com/350/350/tech" alt="">
        <p>Month</p>
        <input type="month" class="form-element" name="" id="">
        <p>Number</p>
        <input type="number" class="form-element" name="" id="">
        <p>Password</p>
        <input type="password" class="form-element" name="" id="">
        <p>Radio</p>
        <input type="radio" name="" id="">
        <p>Range</p>
        <input type="range" name="" id="">
        <p>Reset</p>
        <input type="reset" class="btn red" value="Cancelar">
        <p>Submit</p>
        <input type="submit" class="btn red" value="Enviar">
        <p>Search</p>
        <input type="search" class="form-element" name="" id="" placeholder="Hola mundo!">
        <p>Text</p>
        <input type="text" class="form-element" name="" id="" placeholder="Hola mundo!">
        <p>Tel</p>
        <input type="tel" class="form-element" name="" id="">
        <p>Time</p>
        <input type="time" class="form-element" name="" id="">
        <p>URL</p>
        <input type="url" class="form-element" name="" id="" placeholder="Hola mundo!">
        <p>Week</p>
        <input type="week" class="form-element" name="" id="">
        <p>Select</p>
        <select name="" id="" placeholder="Hola mundo!" class="form-element">
          <option value="1">Texto 1</option>
          <option value="2">Texto 2</option>
          <option value="3">Texto 3</option>
          <option value="4">Texto 4</option>
          <option value="5">Texto 5</option>
        </select>
        <p>Select Multiple</p>
        <select multiple name="" id="" placeholder="Hola mundo!" class="form-element">
          <option value="1">Texto 1</option>
          <option value="2">Texto 2</option>
          <option value="3">Texto 3</option>
          <option value="4">Texto 4</option>
          <option value="5">Texto 5</option>
        </select>
        <p>Textarea</p>
        <textarea name="" id="" cols="30" bit-rows="10" class="form-element"></textarea>
        <div class="form-group inline">
          <label for="" class="input-item">Hola Mundo: </label>
          <input type="text" class="form-element">
          <input type="reset" class="btn red" value="Cancelar">
          <input type="submit" class="btn green" value="Aceptar">
        </div>
      </div>
      <div class="input-group">
        <input type="button" class="btn red-outline" value="Enviar">
        <input type="button" class="btn teal" value="Cancelar">
        <input type="text" class="form-element">
        <input type="password" class="form-element">
        <span class="input-item">@</span>
      </div>
      <div class="form-group inline">
        <div class="input-group lg">
          <span class="input-item red">$ </span>
          <input type="button" class="btn red-outline" value="Enviar">
          <input type="button" class="btn teal" value="Cancelar">
          <input type="text" class="form-element">
          <input type="password" class="form-element">
          <span class="input-item">@</span>
        </div>
        <div class="input-group">
          <input type="button" class="btn blue" value="Enviar">
          <input type="button" class="btn grey" value="Cancelar">
          <span class="input-item teal">---</span>
          <input type="text" class="form-element">
          <input type="password" class="form-element">
          <span class="input-item">@</span>
        </div>
        <div class="input-group sm">
          <input type="button" class="btn blue" value="Enviar">
          <input type="button" class="btn grey" value="Cancelar">
          <span class="input-item teal">---</span>
          <select name="" id="" class="form-element">
            <option value="1">Texto 1</option>
            <option value="1">Texto 2</option>
            <option value="1">Texto 3</option>
          </select>
          <input type="password" class="form-element">
          <span class="input-item">@</span>
        </div>
        <div class="input-group xl">
          <input type="button" class="btn blue" value="Enviar">
          <input type="button" class="btn grey" value="Cancelar">
          <span class="input-item teal">---</span>
          <input type="text" class="form-element">
          <input type="password" class="form-element">
          <span class="input-item">@</span>
        </div>
      </div>
    </div>
  </div>  
</body>
</html>
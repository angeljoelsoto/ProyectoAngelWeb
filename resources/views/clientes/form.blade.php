<div class="form-group">
    <label>Nombre</label>
    <input type="text" name="nombre" class="form-control"
        value="{{ old('nombre', isset($nombre) ? $cliente->nombre : '') }}">
</div>

<div class="form-group">
    <label>Teléfono</label>
    <input type="text" name="telefono" class="form-control"
        value="{{ old('telefono', isset($nombre) ? $cliente->telefono : '') }}">
</div>

<div class="form-group">
    <label>Dirección</label>
    <input type="text" name="direccion" class="form-control"
        value="{{ old('direccion', isset($nombre) ? $cliente->direccion : '') }}">
</div>
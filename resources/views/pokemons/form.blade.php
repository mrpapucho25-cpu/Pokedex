<div class="mb-3">
  <label class="form-label">Nombre</label>
  <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $pokemon->nombre ?? '') }}" required>
</div>

<div class="mb-3">
  <label class="form-label">Tipo</label>
  <input type="text" name="tipo" class="form-control" value="{{ old('tipo', $pokemon->tipo ?? '') }}" required>
</div>

<div class="mb-3">
  <label class="form-label">Habilidad</label>
  <input type="text" name="habilidad" class="form-control" value="{{ old('habilidad', $pokemon->habilidad ?? '') }}" required>
</div>

<div class="mb-3">
  <label class="form-label">Hábitat</label>
  <input type="text" name="habitat" class="form-control" value="{{ old('habitat', $pokemon->habitat ?? '') }}" required>
</div>

<div class="mb-3">
  <label class="form-label">Rareza</label>
  <input type="text" name="rareza" class="form-control" value="{{ old('rareza', $pokemon->rareza ?? '') }}" required>
</div>
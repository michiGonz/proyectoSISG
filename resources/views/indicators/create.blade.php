@extends('base')
@section()
<div class="container">
             <h2>Crear Nuevo Indicador</h2>
             <form action="{{ route('indicators.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre del Indicador:</label>
                <input type="text" class="form-control" id="name" name="name" required>
                <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="form-group">
                <label for="actividad_id">Actividad:</label>
                <select class="form-control" id="actividad_id" name="activity_id" required>
                    @foreach ($actividades as $actividad)
                        <option value="{{ $actividad->id }}">{{ $actividad->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Crear Indicador</button>
        </form>
   
    </div>
</div>
          <!-- Footer -->
          <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; QQ GAS 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Page Wrapper -->
@endsection

       
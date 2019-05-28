@section('searchbar')
<div class="row">
      <div class="col-md-6 offset-md-4 ">
          <form class="form-inline center-block" action="/buscar_propuestas" method="POST" role="search">
          {{ csrf_field() }}
            <div class="input-group">
              <input type="search" class="form-control" id="search" name="searchtext" size="50" placeholder="¿Qué necesitas?" required>
              <div class="input-group-btn">
                <button type="submit" class="btn btn-danger">
                    <i class="fa fa-search" style='font-size:20px'></i>
                </button>
              </div>
            </div>
  </form>
      </div>
  </div>
@endsection('searchbar')
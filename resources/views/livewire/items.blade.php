@foreach($items as $item)
    <div class="col">
        <div class="card shadow-sm">
            <div class="card-body">
                <p class="card-text">
                    <span class="fw-bold">Название: {{$item->name}}</span>
                <ul>
                    @foreach($item->categories as $category)
                        <li>{{$category->name}}</li>
                    @endforeach
                </ul>

                </p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Открыть</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

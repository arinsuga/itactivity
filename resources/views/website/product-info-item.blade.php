<!-- Product Info -->
<div class="container pt-5">
    <div class="row">
        <div class="col-sm-12 col-md-4">
            <figure class="figure w-100">
                <img src="{{ asset(\Arins\Facades\Filex::image($viewModel->data->image)) }}" class="figure-img img-fluid rounded" alt="sprayer">
            </figure>            
        </div>

        <div class="col-sm-12 col-md-8">
            <h5>{{ $viewModel->data->name }}</h5>
            <p>{!! nl2br($viewModel->data->description) !!}</p>
        </div>
    </div>
</div>
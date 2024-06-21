<div class="card" style="margin-bottom: 20px; width: 50%;
margin-left: auto; margin-right:auto;">
    <div class="card-body">

      <!-- text input:file -->
      <div class="form-group">
        <input type="hidden" id="image" name="image" value="{{ $viewModel->data->image }}">
        <input type="hidden" id="toggleRemoveImage" name="toggleRemoveImage" value="false">
        @if ($fieldEnabled == true)
          <label>Image</label>
          <div class="box full-width-sm">
              
              <img id="imageViewer" src="{{ Arins\Facades\Filex::image($viewModel->data->image) }}" alt="">

              @if ($viewModel->data->image)
                <span class="control control-widebox">
                  <a onclick="event.preventDefault(); document.getElementById('upload').click();" href="#"><i class="fas fa-lg fa-edit"></i></a>
                  <a onclick="event.preventDefault(); removeImage('upload', 'imageViewer', 'toggleRemoveImage');" href="#"><i class="fas fa-lg fa-trash"></i></a>
                </span>
              @else
                <span class="control control-box">
                  <a id="controlAdd" onclick="event.preventDefault(); document.getElementById('upload').click();" href="#"><i class="fas fa-lg fa-plus"></i></a>
                  <a id="controlRemove" onclick="event.preventDefault(); removeImage('upload', 'imageViewer', 'toggleRemoveImage');" href="#" class="hide" ><i class="fas fa-lg fa-trash"></i></a>
                </span>
              @endif
          </div>
          <input onchange="previewImage('upload', 'imageViewer', 'toggleRemoveImage');" style="display:none;" type="file" id="upload" name="upload" class="form-control" accept="image/*">
        @else
          <label>Image</label>
          <div class="box full-width-sm">
              <img src="{{ Arins\Facades\Filex::image($viewModel->data->image) }}" alt="">
          </div>
        @endif
      </div>

      <!-- text input:text -->
      <div class="form-group">
        <label>Tipe Produk</label>
        @if ($fieldEnabled == true)
          <select name="producttype_id" class="form-control">
                @foreach ($producttype as $key => $item)
                <option value="{{ $item->id }}" {{ ( $viewModel->data->producttype_id == $item->id) ? 'selected' : '' }}>{{ $item->name }}</option>
                @endforeach
            </select>
        @else
          <input type="hidden" name="producttype_id" value="{{ $viewModel->data->producttype_id }}" readonly>
          <div class="form-group">
              <input disabled type="text" value="{{ $viewModel->data->producttype->name }}" class="form-control">
          </div>
        @endif
        <strong>{{ $errors->first('producttype_id') }}</strong>

      </div>

      <!-- text input:text -->
      <div class="form-group">
        <label>Nama Produk</label>
        @if ($fieldEnabled == true)
          <input type="text" name="name" class="form-control" placeholder="" value="{{ $viewModel->data->name }}">
        @else
          <input disabled type="text" name="name" class="form-control" placeholder="" value="{{ $viewModel->data->name }}">
        @endif
        <strong>{{ $errors->first('name') }}</strong>
      </div>

      <!-- textarea -->
      <div class="form-group">
        <label>Deskripsi</label>
        @if ($fieldEnabled == true)
          <textarea id="description" name="description" class="form-control" rows="3" placeholder="">{{ $viewModel->data->description }}</textarea>
        @else
          <textarea disabled name="description" class="form-control" rows="3" placeholder="">{{ $viewModel->data->description }}</textarea>
        @endif
        <strong>{{ $errors->first('description') }}</strong>
      </div>
    </div>
</div>



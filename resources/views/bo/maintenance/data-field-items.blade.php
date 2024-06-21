@php (($fieldEnabled == true ? $disabled='' : $disabled='disabled'))
<div class="card" style="margin-bottom: 20px; width: 50%;
margin-left: auto; margin-right:auto;">
    <div class="card-body">

      <!-- text input:file -->
      <div class="form-group">
        <input type="hidden" id="image" name="image" value="{{ $viewModel->data->image }}" placeholder="image">
        <input type="hidden" id="toggleRemoveImage" name="toggleRemoveImage" value="false">
        <input type="hidden" id="imageTemp" name="imageTemp" value="{{ session('imageTemp') }}" placeholder="imageTemp">

        @if ($fieldEnabled == true)
          <label>Image</label>
          <div class="box full-width-sm">
              @if (session('imageTemp'))
                <img id="imageViewer" src="{{ Arins\Facades\Filex::image(session('imageTemp')) }}" alt="">
              @else
                <img id="imageViewer" src="{{ Arins\Facades\Filex::image($viewModel->data->image) }}" alt="">
              @endif

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

      @if (isset($showResolution) && $showResolution === true)
          <!-- textarea -->
          <div class="form-group">
            <label>Resolusi</label>
            <textarea id="resolution" name="resolution" class="form-control" rows="3" placeholder="">{{ ( $errors->any() ? old('resolution') : $viewModel->data->resolution ) }}</textarea>
            <p class="text-red">{{ $errors->first('resolution') }}</p>
          </div>

          <hr>      
      @endif      

<div class="form-group">
        <label>Petugas Maintenance</label>
        @if ($fieldEnabled == true)
          <select name="technician_id" class="form-control">
                @foreach ($technician as $key => $item)

                  @if ($errors->any())
                    {{ ($item->id == old('technician_id') ? $selected = 'selected' : $selected = '') }}
                  @else
                    {{ ( $item->id == $viewModel->data->technician_id ) ? $selected = 'selected' : $selected = '' }}
                  @endif
                  <option {{ $selected }} value="{{ $item->id }}">{{ $item->name }}</option>
                  
                @endforeach
            </select>
        @else
          <input type="hidden" name="technician_id" value="{{ $viewModel->data->technician_id }}" readonly>
          <div class="form-group">
              <input disabled type="text" value="{{ $viewModel->data->technician->name }}" class="form-control">
          </div>
        @endif
        <p class="text-red">{{ $errors->first('technician_id') }}</p>

      </div>

      <div class="form-group">
        <label>Jenis Maintenance</label>
        @if ($fieldEnabled == true)
          <select name="activitysubtype_id" class="form-control">
                @foreach ($activitysubtype as $key => $item)

                  @if ($errors->any())
                    {{ ($item->id == old('activitysubtype_id') ? $selected = 'selected' : $selected = '') }}
                  @else
                    {{ ( $item->id == $viewModel->data->activitysubtype_id ) ? $selected = 'selected' : $selected = '' }}
                  @endif
                  <option {{ $selected }} value="{{ $item->id }}">{{ $item->name }}</option>
                  
                @endforeach
            </select>
        @else
          <input type="hidden" name="activitysubtype_id" value="{{ $viewModel->data->activitysubtype_id }}" readonly>
          <div class="form-group">
              <input disabled type="text" value="{{ $viewModel->data->activitysubtype->name }}" class="form-control">
          </div>
        @endif
        <p class="text-red">{{ $errors->first('activitysubtype_id') }}</p>

      </div>

      <div class="form-group">
        <label>Object Maintenance</label>
        @if ($fieldEnabled == true)
          <select name="tasktype_id" class="form-control">
                @foreach ($tasktype as $key => $item)

                  @if ($errors->any())
                    {{ ($item->id == old('tasktype_id') ? $selected = 'selected' : $selected = '') }}
                  @else
                    {{ ( $item->id == $viewModel->data->tasktype_id ) ? $selected = 'selected' : $selected = '' }}
                  @endif
                  <option {{ $selected }} value="{{ $item->id }}">{{ $item->name }}</option>
                  
                @endforeach
            </select>
        @else
          <input type="hidden" name="tasktype_id" value="{{ $viewModel->data->tasktype_id }}" readonly>
          <div class="form-group">
              <input disabled type="text" value="{{ $viewModel->data->tasktype->name }}" class="form-control">
          </div>
        @endif
        <p class="text-red">{{ $errors->first('tasktype_id') }}</p>

      </div>

      <hr>

      <!-- text input -->
      <div class="form-group">
        <label>Subject</label>
        <input {{ $disabled }} type="text" id="subject" name="subject" class="form-control" value="{{ ( $errors->any() ? old('subject') : $viewModel->data->subject ) }}">
        <p class="text-red">{{ $errors->first('subject') }}</p>
      </div>

      <!-- textarea -->
      <div class="form-group">
        <label>Deskripsi</label>
        <textarea {{ $disabled }} id="description" name="description" class="form-control" rows="3" placeholder="">{{ ( $errors->any() ? old('description') : $viewModel->data->description ) }}</textarea>
        <p class="text-red">{{ $errors->first('description') }}</p>
      </div>
    </div>
</div>



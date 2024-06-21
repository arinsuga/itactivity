@php (($fieldEnabled == true ? $disabled='' : $disabled='disabled'))
<div class="card" style="margin-bottom: 20px; width: 50%;
margin-left: auto; margin-right:auto;">
    <div class="card-body">


<!-- Start Date -->
<div class="form-group">
  <label>Start Date Period:</label>

    <div class="row">

	<div class="input-group col-sm-12 col-md-6">
		<input type="text" class="form-control date" name="startdt" id="startdt"/>
		<div class="input-group-append">
			<div class="input-group-text"><i class="fa fa-calendar"></i></div>
		</div>
	</div>

	<div class="input-group col-sm-12 col-md-6">
		<input type="text" class="form-control date" name="enddt" id="enddt"/>
		<div class="input-group-append" >
			<div class="input-group-text"><i class="fa fa-calendar"></i></div>
		</div>
	</div>

    </div>

</div>


<div class="form-group">
    <label>Status</label>
    <select name="activitystatus_id" class="form-control select2">
        <option selected value="">All</option>
        @php ($selected = '')
        @foreach ($activitystatus as $key => $item)

            @if ($errors->any())
                {{ ($item->id == old('activitystatus_id') ? $selected = 'selected' : $selected = '') }}
            @endif
            <option {{ $selected }} value="{{ $item->id }}">{{ $item->name }}</option>
        
        @endforeach
    </select>
    <p class="text-red">{{ $errors->first('activitystatus_id') }}</p>

</div>


        <div class="form-group">
            <label>Requester</label>
            <select name="enduser_id" class="form-control select2">
                <option selected value="">All</option>
                @php ($selected = '')
                @foreach ($enduser as $key => $item)

                @if ($errors->any())
                    {{ ($item->id == old('enduser_id') ? $selected = 'selected' : $selected = '') }}
                @endif
                <option {{ $selected }} value="{{ $item->id }}">{{ $item->name }}</option>
                
                @endforeach
            </select>
            <p class="text-red">{{ $errors->first('enduser_id') }}</p>

        </div>

        <div class="form-group">
            <label>Teknisi</label>
            <select name="technician_id" class="form-control select2">
                <option selected value="">All</option>
                @php ($selected = '')
                @foreach ($technician as $key => $item)

                    @if ($errors->any())
                        {{ ($item->id == old('technician_id') ? $selected = 'selected' : $selected = '') }}
                    @endif
                    <option {{ $selected }} value="{{ $item->id }}">{{ $item->name }}</option>
                    
                @endforeach
            </select>
            <p class="text-red">{{ $errors->first('technician_id') }}</p>

        </div>

        <div class="form-group">
            <label>Jenis Pengaduan</label>
            <select name="activitysubtype_id" class="form-control select2">
                <option selected value="">All</option>
                @php ($selected = '')
                @foreach ($activitysubtype as $key => $item)
                    @if ($errors->any())
                        {{ ($item->id == old('activitysubtype_id') ? $selected = 'selected' : $selected = '') }}
                    @endif
                    <option {{ $selected }} value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
            <p class="text-red">{{ $errors->first('activitysubtype_id') }}</p>
        </div>

        <div class="form-group">
            <label>Kategori</label>
            <select id="tasktype_id" name="tasktype_id" class="form-control select2">
                <option selected value="">All</option>
                @php ($selected = '')
                @foreach ($tasktype as $key => $item)
                    @if ($errors->any())
                        {{ ($item->id == old('tasktype_id') ? $selected = 'selected' : $selected = '') }}
                    @endif
                    <option {{ $selected }} value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
            <p class="text-red">{{ $errors->first('tasktype_id') }}</p>

        </div>

        <div class="form-group">
            <label>Sub Kategori</label>
            <select id="tasksubtype1_id" name="tasksubtype1_id" class="form-control select2">
            </select>
            <p class="text-red">{{ $errors->first('tasksubtype1_id') }}</p>
        </div>

        <div class="form-group">
            <label>item</label>
            <select id="tasksubtype2_id" name="tasksubtype2_id" class="form-control select2">
            </select>
            <p class="text-red">{{ $errors->first('tasksubtype2_id') }}</p>

        </div>

    </div>
</div>



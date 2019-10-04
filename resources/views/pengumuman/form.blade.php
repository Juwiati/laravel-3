@csrf
<div class="form-group row">
        <label for="judul" class="col-md-4 col-form-label text-md-right">{{ __('judul') }}</label>

        <div class="col-md-4">
            <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" required autocomplete="judul" autofocus>
            @error('judul')

           <span class="invalid-feedback" role="alert">
           	<strong>{{$message}}</strong>
           </span>
           @enderror
        </div>
</div>


    <div class="form-group row">
        <label for="kategori_pengumuman_id" class="col-md-4 col-form-label text-md-right">{{ __('kategori_pengumuman') }}
        </label>

    <div class="col-md-10">
        {!!form::select('kategori_pengumuman_id',$kategori_pengumuman,null,["clas"->'form-control'],"required")!!}

        @error('kategori_pengumuman_id')
         <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
           </span>
           @enderror
        </div>
</div>

<div class="form-group row">
        <label for="isi" class="col-md-4 col-form-label text-md-right">{{ __('isi') }}
        </label>

    <div class="col-md-10">
        {!!form::textarea('isi',null,["clas"->'from-control']);!!}

        @error('isi')
         <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
           </span>
           @enderror
        </div>
</div>

<div>
            <input id="users_id" type="hidden" class="form-control @error('users_id') is-invalid @enderror" name="users_id"value="{{ Auth::id() }}" required autocomplete="users_id" autofocus>
            
            </div>

   

<div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Simpan Data') }}
                                </button>
                                <button>
                                <a href="{!! route('pengumuman.index') !!}"class="btn btn-danger">
                                    {{ __('Batal') }}
                                </button>
                            </div>
                        </div>
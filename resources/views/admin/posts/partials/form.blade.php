<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre del post']) !!}
    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
    <div class="form-group">
        {!! Form::label('slug', 'Slug:') !!}
        {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'ingrese el slug del post', 'readonly']) !!}
            @error('slug')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('category_id', 'Categoría') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
        @error('category_id')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <p class="font-weight-bold">Etiquetas</p>
        @foreach ($tags as $tag)
            <label class="mr-2">
                {!! Form::checkbox('tags[]', $tag->id, null) !!}
                {{$tag->name}}
            </label>
        @endforeach
        
        @error('tags')
            <br>
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>

    <div class="form-group">
        <p class="font-weight-bold">Estado</p>
        <label >
            {!! Form::radio('status', 1, true) !!}
            Borrador
        </label>
        <label >
            {!! Form::radio('status', 2) !!}
            Publicado
        </label>
        
        @error('status')
            <br>
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>

    <div class="row mb-3">
        <div class="col">
            <div class="image-wrapper">
                @isset ($post->image)
                    <img src="{{Storage::url($post->image->url)}}" alt="">
                @else
                    <img id="picture" src="https://cdn.pixabay.com/photo/2021/03/07/16/31/person-6076771_960_720.jpg"  alt="">
                @endisset
                
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                {!! Form::label('file', 'imagen que se mostrara en el post') !!}
                {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
                @error('file')
                    <span class="text-danger">{{$messaje}}</span>
                @enderror
            </div>  
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum ipsum omnis nostrum nam? Corrupti alias dignissimos sapiente eligendi doloribus obcaecati vitae reprehenderit rem, fugiat expedita, omnis fugit esse non eveniet!
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('extract', 'Extracto') !!}
        {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
            @error('extract')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Cuerpo del post') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
            @error('body')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
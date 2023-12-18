@props(['datas'])

<div class="container">
    @foreach ($datas as $data)
        <div class="acBody p-5" data-acid="{{ $data->id }}" data-acname="{{ $data->ac_name }}">
            <div class="row">
                <div class="col">
                    <div class="title text-center">
                        <h2>
                            {{ $data->ac_title }}
                        </h2>
                    </div>
                    <div class="body text-justify">
                        <p style="font-size: 20px">
                            {{ $data->ac_text }}
                        </p>
                    </div>
                </div>
                <div class="col" style="min-height: 537.6px; max-height: 537.6px;">
                    <div class="image">
                        <img class="rounded img-thumbnail d-block mx-auto"
                            src="{{ route('image', ['imageName' => $data->ac_image_path]) }}">
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

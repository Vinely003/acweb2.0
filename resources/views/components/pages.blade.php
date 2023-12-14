<div class="container">
    @foreach ($datas as $data)
        <div class="acBody" data-acid="{{ $data->id }}">
            <div class="row">
                <div class="col">
                    <div class="title">
                        <h3>
                            {{ $data->ac_title }}
                        </h3>
                    </div>
                    <div class="text">
                        <p>
                            {{ $data->ac_text }}
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="image">
                        <img class="rounded img-thumbnail" style="width: 60%"
                            src="{{ route('image', ['imageName' => $data->ac_image_path]) }}">
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

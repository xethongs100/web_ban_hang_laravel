<div class="content-form">
    {{-- Hiển thị thông báo lỗi xảy ra --}}
    @if ($errors->any())
        <ul class="error-form">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{route('postFile')}}" method="post" enctype="multipart/form-data">
        @csrf     
        <input type="file" name="myFile" class="form-control">
        <button type="submit">Save</button>
    </form>
</div> 
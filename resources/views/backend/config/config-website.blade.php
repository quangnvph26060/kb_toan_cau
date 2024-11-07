@extends('backend.layouts.master')

@section('title', $title)

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ $title }}</h4>
                    </div>
                    <div class="card-body">

                        @csrf
                        @method('PUT')


                        <div class="row">

                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="name" class="form-label">Tên website </label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Tên website" value="{{ old('name', $config->name) }}" />
                                </div>
                            </div>

                            <div class="col-lg-6 ">
                                <div class="form-group">
                                    <label for="hotline" class="form-label">Hotline</label>
                                    <input type="text" class="form-control" id="hotline" name="hotline"
                                        placeholder="Số điện thoại" value="{{ old('hotline', $config->hotline) }}" />
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="tax_code" class="form-label">Mã số thuế</label>
                                    <input type="text" class="form-control" id="tax_code" name="tax_code"
                                        placeholder="Mã số thuế" value="{{ old('tax_code', $config->tax_code) }}" />
                                </div>
                            </div>



                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Cấu hình seo</h4>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="title_seo" class="form-label">Tiêu đề</label>
                                    <input type="text" class="form-control" id="title_seo" name="title_seo"
                                        placeholder="Tiêu đề" value="{{ old('title_seo', $config->title_seo) }}" />
                                </div>
                            </div>

                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="keywords_seo" class="form-label">Keywords</label>
                                    <input class="form-control" id="choices-text-unique-values" data-choices
                                        data-choices-text-unique-true type="text" name="keywords_seo"
                                        value="{{ old('keywords_seo', $config->keywords_seo) }}" />

                                </div>
                            </div>

                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="description_seo" class="form-label">Mô tả</label>
                                    <textarea class="form-control" id="description_seo" name="description_seo" placeholder="Mô tả" rows="5">{{ old('description_seo', $config->description_seo) }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Thêm Cơ Sở</h4>
                    </div>
                    <div class="card-body">
                        <div id="branch-container">
                            @foreach ($config->branches as $item)
                                <div class="branch-item row mb-3">
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" data-id="{{$item->id}}" name="branch_names[{{$item->id}}]"
                                            placeholder="Tên cơ sở" value="{{ $item->name }}" />
                                    </div>

                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="branch_addresses[{{$item->id}}]"
                                            placeholder="Địa chỉ" value="{{ implode(' | ', $item->address) }}" />
                                        <small class="text-muted">* Nhập nhiều địa chỉ cách nhau bằng dấu "|"</small>
                                    </div>
                                    <div class="col-lg-1">
                                        @if ($loop->first)
                                            <button type="button" class="btn btn-success add-branch">+</button>
                                        @else
                                            <button type="button" class="btn btn-danger remove-branch">-</button>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Cấu hình logo</h4>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <input type="file" class="form-control" id="logo" name="logo" />
                            <img src="{{ showImage($config->logo) }}" alt="" width="100%" class="mt-3">
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Cấu hình icon</h4>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <input type="file" class="form-control" id="icon" name="icon" />
                            <img src="{{ showImage($config->icon) }}" alt="" width="100%" class="mt-3">
                        </div>
                    </div>
                </div>


                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
            </div>
        </div>
    </form>

@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
    // Event listener for adding a new branch row
    $('.add-branch').on('click', function() {
        const branchItem = `
            <div class="branch-item row mb-3">
                <div class="col-lg-5">
                    <input type="text" class="form-control" name="branch_names[]" placeholder="Tên cơ sở" />
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="branch_addresses[]" placeholder="Địa chỉ" />
                    <small class="text-muted">* Nhập nhiều địa chỉ cách nhau bằng dấu "|"</small>
                </div>
                <div class="col-lg-1">
                    <button type="button" class="btn btn-danger remove-branch">-</button>
                </div>
            </div>`;

        $('#branch-container').append(branchItem);
    });

    // Event listener for removing a branch row
    $('#branch-container').on('click', '.remove-branch', function() {
        const branchItem = $(this).closest('.branch-item');
        const branchId = branchItem.find('input[name^="branch_names"]').data('id');

        if (branchId) {
            // If there's an ID, mark it for deletion
            $('<input>').attr({
                type: 'hidden',
                name: 'deleted_branch_ids[]', // This array will contain IDs of deleted branches
                value: branchId
            }).appendTo('form');
        }
        branchItem.remove(); // Remove the UI element
    });
});

    </script>
@endpush

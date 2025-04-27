@extends('back.master')

@section('title')
    Site Configuration
@endsection

@section('content')
<div class="container-fluid">
    {{-- Page title --}}
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Site Configuration</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Site Configuration</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    {{-- Page content --}}
    <div class="row">
        <div class="mt-4">
            <form action="{{ route('admin.site_configuration.update') }}" method="POST" enctype="multipart/form-data" class="card p-4" style="background: #fff; border-radius: 10px;">
                @csrf
                {{-- Site Name --}}
                <div class="mb-3">
                    <label for="site_name" class="form-label">Site Name</label>
                    <input type="text" name="site_name" id="site_name" class="form-control" value="{{ old('site_name', $config->site_name) }}" required>
                    @error('site_name')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Site Email --}}
                <div class="mb-3">
                    <label for="site_email" class="form-label">Site Email</label>
                    <input type="email" name="site_email" id="site_email" class="form-control" value="{{ old('site_email', $config->site_email) }}">
                    @error('site_email')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Site Phone --}}
                <div class="mb-3">
                    <label for="site_phone" class="form-label">Site Phone</label>
                    <input type="text" name="site_phone" id="site_phone" class="form-control" value="{{ old('site_phone', $config->site_phone) }}">
                    @error('site_phone')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Address --}}
                <div class="mb-3">
                    <label for="site_address" class="form-label">Address *</label>
                    <input type="text" name="site_address" id="site_address" class="form-control"
                        value="{{ old('site_address', $config->site_address) }}" required>
                    @error('site_address')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Currency Settings --}}
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="currency_code" class="form-label">Currency Code *</label>
                        <input type="text" name="currency_code" id="currency_code" class="form-control" value="{{ old('currency_code', $config->currency_code) }}" required>
                        @error('currency_code')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="currency_symbol" class="form-label">Currency Symbol *</label>
                        <input type="text" name="currency_symbol" id="currency_symbol" class="form-control" value="{{ old('currency_symbol', $config->currency_symbol) }}" required>
                        @error('currency_symbol')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="currency_position" class="form-label">Currency Position *</label>
                        <select name="currency_position" id="currency_position" class="form-select" required>
                            <option value="left" {{ old('currency_position', $config->currency_position) == 'left' ? 'selected' : '' }}>Left</option>
                            <option value="right" {{ old('currency_position', $config->currency_position) == 'right' ? 'selected' : '' }}>Right</option>
                        </select>
                        @error('currency_position')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- Favicon Upload --}}
                <div class="mb-3">
                    <label class="form-label">Site Favicon</label>
                    <input type="file" name="site_favicon" class="form-control">
                    @if ($config->site_favicon)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $config->site_favicon) }}" style="width: 40px; height: 40px; border-radius: 5px;">
                        </div>
                    @endif
                    @error('site_favicon')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                {{-- SEO Settings --}}
                <div class="mb-3">
                    <label for="meta_keywords" class="form-label">Meta Keywords</label>
                    <textarea name="meta_keywords" id="meta_keywords" rows="2" class="form-control">{{ old('meta_keywords', $config->meta_keywords) }}</textarea>
                    @error('meta_keywords')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="meta_description" class="form-label">Meta Description</label>
                    <textarea name="meta_description" id="meta_description" rows="5" class="form-control">{{ old('meta_description', $config->meta_description) }}</textarea>
                    @error('meta_description')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Maintenance Mode --}}
                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" name="is_maintenance_mode" id="is_maintenance_mode" value="1" {{ old('is_maintenance_mode', $config->is_maintenance_mode) ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_maintenance_mode">
                        Maintenance Mode
                    </label>
                    @error('is_maintenance_mode')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Submit Button --}}
                <div class="text-end">
                    <button type="submit" class="btn text-white" style="padding: 8px 30px; background-color: #c33333">Save Settings</button>
                </div>
            </form>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const logoInput = document.querySelector('input[name="site_logo"]');
                    const faviconInput = document.querySelector('input[name="site_favicon"]');

                    logoInput?.addEventListener('change', function (event) {
                        previewImage(event.target, 'logo-preview');
                    });

                    faviconInput?.addEventListener('change', function (event) {
                        previewImage(event.target, 'favicon-preview');
                    });

                    function previewImage(input, previewClass) {
                        const file = input.files[0];
                        if (file) {
                            const reader = new FileReader();
                            reader.onload = function (e) {
                                let preview = document.querySelector(`.${previewClass}`);
                                if (!preview) {
                                    preview = document.createElement('img');
                                    preview.className = previewClass;
                                    input.parentNode.appendChild(preview);
                                }
                                preview.src = e.target.result;
                                preview.style.width = previewClass === 'favicon-preview' ? '40px' : '100px';
                                preview.style.height = 'auto';
                                preview.style.borderRadius = '5px';
                                preview.style.marginTop = '10px';
                            };
                            reader.readAsDataURL(file);
                        }
                    }
                });
            </script>
        </div>
    </div>
</div>

@endsection

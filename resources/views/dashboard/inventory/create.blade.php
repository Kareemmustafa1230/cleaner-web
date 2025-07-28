@extends('dashboard.layouts.main')
@section('title', __('trans.add_inventory_item'))
@section('content')
<div class="form-container">
    <div class="glass-card form-card">
        <div class="form-header">
            <h3>{{ __('trans.add_inventory_item') }}</h3>
            <p>{{ __('trans.fill_in_the_inventory_item_details_below') }}</p>
        </div>
        <form action="{{ route('dashboard.inventory.store') }}" method="POST" enctype="multipart/form-data" class="user-form">
            @csrf
            <div class="form-grid">
                <div class="form-group">
                    <label class="form-label">{{ __('trans.name') }}</label>
                    <div class="input-wrapper">
                        <input type="text" name="name" class="form-input @error('name') error @enderror" value="{{ old('name') }}" required>
                    </div>
                    @error('name')<span class="error-message">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <label class="form-label">{{ __('trans.price') }}</label>
                    <div class="input-wrapper">
                        <input type="text" name="price" class="form-input @error('price') error @enderror" value="{{ old('price') }}">
                    </div>
                    @error('price')<span class="error-message">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <label class="form-label">{{ __('trans.quantity') }}</label>
                    <div class="input-wrapper">
                        <input type="text" name="quantity" class="form-input @error('quantity') error @enderror" value="{{ old('quantity') }}">
                    </div>
                    @error('quantity')<span class="error-message">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <label class="form-label">{{ __('trans.image') }}</label>
                    <div class="input-wrapper">
                        <input type="file" name="image" class="form-input @error('image') error @enderror" accept="image/*">
                    </div>
                    @error('image')<span class="error-message">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="form-actions">
                <button type="button" class="btn btn-secondary" onclick="history.back()">{{ __('trans.cancel') }}</button>
                <button type="submit" class="btn btn-primary">{{ __('trans.save') }}</button>
            </div>
        </form>
    </div>
</div>
@endsection

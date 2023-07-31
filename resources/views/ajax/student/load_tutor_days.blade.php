<option value="" disabled selected>Select Day</option>
@foreach ($time_table as $item)
    <option value="{{ $item->day }}">{{ $item->day }}</option>
@endforeach

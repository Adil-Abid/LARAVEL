<h1>Hello</h1>

<select >
<option  value="" > Select Vehicle </option>
    @foreach($data as $item)
        <option  value="{{ $item->vehicle_id }}" > {{ $item->vehicle_name }} </option>
    @endforeach
</select>

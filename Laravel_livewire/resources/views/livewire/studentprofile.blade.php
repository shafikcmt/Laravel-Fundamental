<div>
    {{-- The best athlete wants his opponent at his best. --}}
   
    <table border="1">
        <tr>
            
            <th>Value</th>
        </tr>
        @foreach($data as $item)
        <tr>
            <td>{{$item}}</td>
            
            
        </tr>
        @endforeach
    </table>
</div>

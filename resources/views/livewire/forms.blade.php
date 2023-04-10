<div>
    <form wire:submit.prevent="submit">
        @if(session()->has('message'))
        <div style="color: green">{{session('message')}}</div>
        @endif
        Name: <br>
        <input type="text" wire:model="name"> <br>
        @error('name') 
        <span style="color:red">{{$message}}</span>
        @enderror<br>
        Email: <br>
        <input type="email" wire:model="email"><br>
        @error('email')
        <span style="color:red">{{$message}}</span>
        @enderror
        <br>
        <button type="submit">Save</button>
    </form>

    <table>
        <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
       
    </table>
    @php
     $i = 1;   
    @endphp
    @foreach ($allData as $ad)
    <tr>
        <td>{{$i}}</td>
        <td>{{$ad->name}}</td>
        <td>{{$ad->email}}</td>
    </tr><br>
    @php
     $i++   
    @endphp
    @endforeach
</div>

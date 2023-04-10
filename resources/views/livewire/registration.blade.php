<div>
    Student name <br>
    <input type="text" wire:model="name"><br>
    Address <br>
    <textarea name="" id="" cols="30" rows="10" wire:model="address"></textarea><br>
    gender <br>
    <input type="radio" value="Male" wire:model="gender">Male
    <input type="radio" value="Female" wire:model="gender">Female <br>

    Subjects <br>
    <input type="checkbox" value="Physics" wire:model="subjects">Physics <br>
    <input type="checkbox" value="Chemistry" wire:model="subjects">Chemistry <br>
    <input type="checkbox" value="Maths" wire:model="subjects">Maths <br>
    Course <br>
    <select name="" id="" wire:model="course">
        <option value="">Please Select</option>
        <option value="Computer" >Computer</option>
        <option value="Electrical">Electrical</option>
        <option value="Mechanical">Mechanical</option>
    </select>
    <hr>
    Student name: {{$name}} <br>
    Address: {{$address}} <br>
    Gender: {{$gender}} <br>
    Subjects: 
    <ul>
        @foreach($subjects as $sub)
        <li>{{$sub}}</li>
        @endforeach
    </ul>
    <br>
    Course: {{$course}} <br>
</div>

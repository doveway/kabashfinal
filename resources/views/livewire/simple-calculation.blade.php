<div>
    <form wire:submit.prevent="calculate">
        First Number: <input type="text" name="num1" wire:model="num1"><br>
        Second Number: <input type="text" name="num2" wire:model="num2"><br>
        <button type="submit">Add</button> <br>
        Sum: {{$sum}}
    </form>
</div>

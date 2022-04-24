<div>
    <button wire:click = "addTowNumber(45,50)">Sum</button> <br>
    <textarea name="" id="" cols="30" rows="10" wire:keydown.enter = "Message($event.target.value)"></textarea><br>
    <br><br>
    <form wire:submit.prevent="getSum">
        <label for="">Num1</label>
        <input type="text" name="num1" wire:model="num1"><br>
        <label for="">Num1</label>
        <input type="text" name="num2" wire:model="num2"><br><br>
        <input type="submit" value="submit">
    </form>
    <hr>
    Sum : {{$sum}} <br>
    Message : {{$message}}
</div>

<div>
   Name : <input type="text" wire:model.debounce.1000ms = "name"><br>
   Message : <textarea wire:model="message"></textarea> <br>
   Gender : 
    <input type="radio" value="Male"  wire:model = "gender">Male
    <input type="radio" value="Female" wire:model = "gender">Female
    <br>
   Skill : 
   <input type="checkbox" wire:model = "skills" value="HTML">Html
   <input type="checkbox" wire:model = "skills" value="CSS">CSS
   <input type="checkbox" wire:model = "skills" value="PHP">PHP
   <input type="checkbox" wire:model = "skills" value="JAVA">JAVA
   <br>
  
   Department :
  <select name="" id="" wire:model="department">
      <option value="computer">Computer</option>
      <option value="Electronics">Electronics</option>
      <option value="Mechanical">Mechanical</option>
      <option value="Civil">Civil</option>
      <option value="Diploma">Diploma</option>
  </select>
   <br>
   
   <hr>
   Name : {{$name}} <br>
   message : {{$message}} <br>
   gender : {{$gender}} <br>
   skill : 
   @foreach($skills as $skill)
   <ul>
      
       <li>{{$skill}}</li>
     
   </ul> 
   @endforeach
   <br>
   department : {{$department}}
</div>

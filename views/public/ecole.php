<?php
ob_start();
// var_dump($datasActus[0]); die;
?>


<h2>L'école de tennis au TC Le Mée</h2>

<div class="divImg">
    <img src="./assets/images/ecole/ecole-tennis-tc-le-mee-2.jpg" alt="photo école de tennis">
</div>

<div class="presInstall">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu turpis eget nibh accumsan iaculis. Duis mi purus, pulvinar vitae tortor et, suscipit tincidunt neque. Nam tempus quam eget ligula condimentum laoreet. Fusce venenatis metus ultrices augue porttitor feugiat. Nullam non ex efficitur, dapibus nisl vitae, cursus dolor. Proin purus magna, ornare rhoncus euismod eget, pellentesque vehicula tortor. In hac habitasse platea dictumst. Aliquam ac arcu vehicula, fermentum ipsum nec, tempus metus. Donec lectus nisl, venenatis id varius in, scelerisque et ex. Aenean non mi ac ipsum fermentum tempor eget quis lectus. Quisque rhoncus fringilla sodales.
    </br>
    Sed sagittis ligula in urna volutpat, nec iaculis turpis venenatis. Sed faucibus, nibh quis scelerisque mollis, eros leo iaculis massa, et sodales sapien nunc ut lectus. Maecenas commodo lorem vitae nisl consectetur, nec elementum orci ultricies. Donec eget mattis urna. Phasellus condimentum volutpat aliquet. Morbi vitae convallis arcu. Nulla maximus ultrices mi, vel lacinia lorem feugiat vitae. Donec rutrum dictum augue nec cursus. Pellentesque consectetur eget nulla vitae malesuada. Morbi dapibus elementum sem pulvinar pulvinar. Nam feugiat quam in nulla lacinia pellentesque.
    </br>
    Donec tempus vehicula ultrices. Praesent magna mauris, vehicula in dictum quis, sodales in risus. In molestie, sem et facilisis facilisis, metus tellus molestie nunc, at rhoncus lacus augue a turpis. Aliquam a aliquam lectus. Etiam a ultricies augue, sit amet aliquet augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In hac habitasse platea dictumst. Proin eleifend velit in nunc lobortis, vel elementum nunc semper. Aenean pulvinar malesuada lorem vel dapibus. Aliquam ac ligula eu lacus vehicula feugiat quis sed dui.</p>
    
    <div class="imgActu">
        <img src="./assets/images/ecole/ecole-tennis-tc-le-mee-3.jpg" alt="photo école de tennis 2">          
    </div>
    
    <p>    Sed sagittis ligula in urna volutpat, nec iaculis turpis venenatis. Sed faucibus, nibh quis scelerisque mollis, eros leo iaculis massa, et sodales sapien nunc ut lectus. Maecenas commodo lorem vitae nisl consectetur, nec elementum orci ultricies. Donec eget mattis urna. Phasellus condimentum volutpat aliquet. Morbi vitae convallis arcu. Nulla maximus ultrices mi, vel lacinia lorem feugiat vitae. Donec rutrum dictum augue nec cursus. Pellentesque consectetur eget nulla vitae malesuada. Morbi dapibus elementum sem pulvinar pulvinar. Nam feugiat quam in nulla lacinia pellentesque.
    </br>
    Donec tempus vehicula ultrices. Praesent magna mauris, vehicula in dictum quis, sodales in risus. In molestie, sem et facilisis facilisis, metus tellus molestie nunc, at rhoncus lacus augue a turpis. Aliquam a aliquam lectus. Etiam a ultricies augue, sit amet aliquet augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In hac habitasse platea dictumst. Proin eleifend velit in nunc lobortis, vel elementum nunc semper. Aenean pulvinar malesuada lorem vel dapibus. Aliquam ac ligula eu lacus vehicula feugiat quis sed dui.</p>
    
    <div class="imgActu">
    <img src="./assets/images/ecole/ecole-tennis-tc-le-mee-1.jpg" alt="photo école de tennis 3">            
    </div>


</div>



<?php 
define('ROOT',dirname(__DIR__));
$content = ob_get_clean();
require_once(ROOT.'./gabarit.php');
?>
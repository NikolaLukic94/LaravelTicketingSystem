<template>
<div  id="footer">
  <button v-on:click="isOpen = !isOpen">Toggle To see</button>

    <div v-show="isOpen">  
        <div class="col">
            <button type="button" class="btn btn-primary pull-right">
              <i class="fa fa-star" aria-hidden="true"></i>
            </button>                                                             
        </div>
        <div class="col">
            <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal">
               <i class="fa fa-eye material-icons"></i>
            </button>                                                       
        </div>
        <div class="col">
            <button type="button" class="btn btn-primary pull-right">
                <i class="fa fa-lock" aria-hidden="true"></i>
            </button>                                                        
        </div>
        <div class="col">
            <button type="button" class="btn btn-primary pull-right">
                <i class="fa fa-thumbs-up" aria-hidden="true"></i>    
            </button>   
        </div>
    </div>

    <div v-show="!isOpen">
        <div class="col">

                <!-- NOTHING FOR NOW -->  

        </div>
    </div> 
</div>
</template>

<script>

new Vue({
    el: '#footer',
    data:{
        isOpen:false
    }

});


</script>
